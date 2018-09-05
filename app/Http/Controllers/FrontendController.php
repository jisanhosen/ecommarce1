<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::where('publication_status', 1)->orderBy('id', 'desc')->take(4)->get();
        return view('FrontEnd.home.home', ['products' => $products]);
    }
    public function categoryproduct($id){
        $categoryProducts = Product::where('category_id', $id)->where('publication_status', 1)->orderBy('id', 'desc')->take(9)->get();
        $category = Category::where('id', $id)->first();
        return view('FrontEnd.products.products', [
            'categoryProducts' => $categoryProducts,
            'category' => $category
        ]);
    }
    public function account(){
        return view('FrontEnd.account.account');
    }
    public function contact(){
        $publishedCategories = Category::where('publication_status', 1)->get();
        return view('FrontEnd.contact.contact', ['publishedCategories' => $publishedCategories]);
    }
    public function createAccount(){
        return view('FrontEnd.register.register');
    }
    public function checkout(){
        return view('FrontEnd.checkout.checkout');
    }
    public function productDetails($id){
        $productById = Product::find($id);
        $categoryProducts = Product::where('category_id', $productById->category_id)->orderBy('id', 'desc')->take(3)->get();
        return view('FrontEnd.products.product-details',[
            'productById' => $productById,
            'categoryProducts' => $categoryProducts
        ]);
    }
}
