<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get("search");
        if (!empty($search)) {
            $categories = Categories::where("deleted_status", 0)->where("name", "LIKE", "%{$search}%")->orderBy('id', "DESC")->get();
        } else {
            $categories = Categories::where("deleted_status", 0)->orderBy('id', "DESC")->get();
        }
        return view("admin/categories/index", ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/categories/add");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request)
    {
        $created = Categories::create($request->validated());
        if ($created) {
            return redirect("categories")->with('success', "Categorie Cree avec Success");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $category)
    {
        return view("admin/categories/edit", ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoriesRequest $request, Categories $category)
    {
        $is = $category->update($request->validated());
        if ($is) {
            return redirect("/categories")->with('success', "Catgories Modifie avec Success");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $category)
    {
        $deleted = $category->update(['deleted_status' => 1]);
        if ($deleted) {
            return redirect("/categories")->with('delete', "Catgories Supprime avec Success");
        }
    }
}
