<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Http\Requests\StoreTagsRequest;
use App\Http\Requests\UpdateTagsRequest;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tags::where("deleted_status", 0)->orderBy('id', "DESC")->get();
        return view("admin/tags/index", ['tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/tags/add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagsRequest $request)
    {
        $created = Tags::create($request->validated());
        if ($created) {
            return redirect("tags")->with('success', "Tag Cree avec Success");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tags $tags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tags $tag)
    {
        return view("admin/tags/edit", ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTagsRequest $request, Tags $tag)
    {
        $is = $tag->update($request->validated());
        if ($is) {
            return redirect("/tags")->with('success', "Tag Modifie avec Success");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tags $tag)
    {
        $deleted = $tag->update(['deleted_status' => 1]);
        if ($deleted) {
            return redirect("/tags")->with('delete', "Tag Supprime avec Success");
        }
    }
}
