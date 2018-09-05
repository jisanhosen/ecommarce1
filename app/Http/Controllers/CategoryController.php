<?php

namespace App\Http\Controllers;

use App\Category;
use DemeterChain\C;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategoryForm(){
        return view('Admin.category.add-category');
    }
    protected function categoryFieldValidation(Request $request){
        $this->validate($request, [
            'category_name' => 'required',
            'category_description' => 'required',
            'publication_status' => 'required|numeric'
        ]);
    }
    public function saveCategoryInfo(Request $request){
        $this->categoryFieldValidation($request);
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/category/add')->with('message', 'Category Info Save Successfull');
    }
    public function manageCategoryInfo(){
        $categories = Category::all();
        return view('Admin.category.manage-category', ['categories' => $categories]);
    }
    public function editCategoryInfo($id){
        $categoryById = Category::find($id);
        return view('Admin.category.edit-category', ['categoryById' => $categoryById]);
    }
    public function updateCategoryInfo(Request $request){
        $this->categoryFieldValidation($request);
        $categoryUpdateById = Category::find($request->category_id);
        $categoryUpdateById->category_name = $request->category_name;
        $categoryUpdateById->category_description = $request->category_description;
        $categoryUpdateById->publication_status = $request->publication_status;
        $categoryUpdateById->save();
        return redirect('/category/manage')->with('message', 'Category Info Update Successfull');
    }
    public function deleteCategoryInfo($id){
        $deleteCategoryById = Category::find($id);
        $deleteCategoryById->delete();
        return redirect('/category/manage')->with('message', 'Category Info Delete Successfull');
    }
}
