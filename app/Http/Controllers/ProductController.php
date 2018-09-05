<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductForm(){
        $publishedCategories = Category::where('publication_status', 1)->get();
        $publishedBrands = Brand::where('publication_status', 1)->get();
        return view('Admin.product.add-product', [
            'publishedCategories'=>$publishedCategories,
            'publishedBrands'=>$publishedBrands

        ]);
    }
    protected function productFieldValidation(Request $request){
        $this->validate($request, [
            'product_name'=> 'required',
            'category_id'=> 'required|numeric',
            'brand_id'=> 'required|numeric',
            'product_price'=> 'required',
            'product_quantity'=> 'required|numeric',
            'product_short_description'=> 'required',
            'product_image'=> 'required',
            'publication_status'=> 'required|numeric',
        ]);
    }
    protected function uploadProductImage($request){
        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'product-image/';
        $productImage->move($directory, $imageName);
        $imageUrl = $directory.$imageName;
        return $imageUrl;
    }
    protected function basicProductInfoSave($request, $imageUrl){
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
    }
    public function saveProductInfo(Request $request){
        $this->productFieldValidation($request);
        $imageUrl = $this->uploadProductImage($request);
        $this->basicProductInfoSave($request, $imageUrl);
        return redirect('/product/add')->with('message', 'Product Info Save Successful');
    }
    public function manageProductInfo(){
        $products = DB::table('products')
                        ->join('categories', 'products.category_id', '=', 'categories.id')
                        ->join('brands', 'products.brand_id', '=', 'brands.id')
                        ->select('products.*', 'categories.category_name', 'brands.brand_name')
                        ->orderBy('id', 'desc')
                        ->get();
        return view('Admin.product.manage-product', ['products'=>$products]);
    }
    public function viewProductInfo($id){
        $productViewById = DB::table('products')
                                ->join('categories', 'products.category_id', '=', 'categories.id')
                                ->join('brands', 'products.brand_id', '=', 'brands.id')
                                ->select('products.*', 'categories.category_name', 'brands.brand_name')
                                ->where('products.id', $id)
                                ->first();
        return view('Admin.product.view-product', ['productViewById' => $productViewById]);
    }
    public function unpublishedProductInfo($id){
        $unpublishedProduct = Product::find($id);
        $unpublishedProduct->publication_status = 0;
        $unpublishedProduct->save();
        return redirect('/product/manage')->with('message', 'Product Info UnPublished Successful');
    }
    public function publishedProductInfo($id){
        $publishedProduct = Product::find($id);
        $publishedProduct->publication_status = 1;
        $publishedProduct->save();
        return redirect('/product/manage')->with('message', 'Product Info Published Successful');
    }
    public function editProductInfo($id){
        $editProductById = DB::table('products')
                                ->join('categories', 'products.category_id', '=', 'categories.id')
                                ->join('brands', 'products.brand_id', '=', 'brands.id')
                                ->select('products.*', 'categories.category_name', 'brands.brand_name')
                                ->where('products.id', $id)
                                ->first();
        $publishedCategories = Category::where('publication_status', 1)->get();
        $publishedBrands = Brand::where('publication_status', 1)->get();
        return view('Admin.product.edit-product', [
            'publishedCategories' => $publishedCategories,
            'publishedBrands' => $publishedBrands,
            'editProductById' => $editProductById
        ]);
    }
    protected function updateBasicProductInfo($updateProductById, $request, $imageUrl = null){
        $updateProductById->product_name = $request->product_name;
        $updateProductById->category_id = $request->category_id;
        $updateProductById->brand_id = $request->brand_id;
        $updateProductById->product_price = $request->product_price;
        $updateProductById->product_quantity = $request->product_quantity;
        $updateProductById->product_short_description = $request->product_short_description;
        $updateProductById->product_long_description = $request->product_long_description;
        if($imageUrl){
            $updateProductById->product_image = $imageUrl;
        }
        $updateProductById->publication_status = $request->publication_status;
        $updateProductById->save();
    }
    public function updateProductInfo(Request $request){
        $productImage = $request->file('product_image');
        $updateProductById = Product::find($request->product_id);
        if($productImage){
            unlink($updateProductById->product_image);
            $imageUrl = $this->uploadProductImage($request);
            $this->updateBasicProductInfo($updateProductById, $request, $imageUrl);
        }else{
            $this->updateBasicProductInfo($updateProductById, $request);
        }
        return redirect('/product/manage')->with('message', 'Product Info Update Successful');
    }
    public function deleteProductInfo($id){
        $deleteProductById = Product::find($id);
        $deleteProductById->delete();
        return redirect('/product/manage')->with('message', 'Product Info Delete Successful');
    }
}
