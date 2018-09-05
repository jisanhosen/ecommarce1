<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function showBrandForm(){
        return view('Admin.brand.add-brand');
    }
    protected function brandFieldValidation(Request $request){
        $this->validate($request, [
            'brand_name' => 'required',
            'brand_description' => 'required',
            'publication_status' => 'required|numeric'
        ]);
    }
    public function saveBrandInfo(Request $request){
        $this->brandFieldValidation($request);
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/brand/add')->with('message', 'Brand Info Save Successfull');
    }
    public function manageBrandInfo(){
        $brands = Brand::all();
        return view('Admin.brand.manage-brand', ['brands' => $brands]);
    }
    public function editBrandInfo($id){
        $brandEditById = Brand::find($id);
        return view('Admin.brand.edit-brand', ['brandEditById' => $brandEditById]);
    }
    public function updateBrandInfo(Request $request){
        $this->brandFieldValidation($request);
        $brandUpdateById = Brand::find($request->brand_id);
        $brandUpdateById->brand_name = $request->brand_name;
        $brandUpdateById->brand_description = $request->brand_description;
        $brandUpdateById->publication_status = $request->publication_status;
        $brandUpdateById->save();
        return redirect('/brand/manage')->with('message', 'Brand Info Update Successfull');
    }
    public function deleteBrandInfo($id){
        $deleteBrandById = Brand::find($id);
        $deleteBrandById->delete();
        return redirect('/brand/manage')->with('message', 'Brand Info Delete Successfull');
    }
}
