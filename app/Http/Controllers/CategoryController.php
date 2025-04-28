<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_category()
    {
        $categories = Category::all();
        return view('admin.category.add', [
            'categories' => $categories,
        ]);
    }

    public function category_store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:60|unique:categories,category_name',
            'img_path' => 'nullable|string|max:255',
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'parent_category' => $request->parent_category,
            'img_path' => $request->img_path,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success', 'Category added successfully');
    }

    public function category_edit($id){

        $categories = Category::all();
        $e_category = Category::find($id);

        return view('admin.category.add',[
            'e_category' => $e_category,
            'categories' => $categories,
        ]);
    }

    public function category_list()
    {
        $categories = Category::paginate(10);
        return view('admin.category.list', [
            'categories' => $categories,
        ]);
    }

    public function category_active($id)
    {
        $category = Category::find($id);
        if ($category->status === 0) {
            $category->update([
                'status' => 1,
            ]);
            return back()->with('success', 'Category has been activated!');
        } else{
            $category->update([
                'status' => 0,
            ]);
            return back()->with('warning', 'Category has been deactivated!');
        }
    }
}
