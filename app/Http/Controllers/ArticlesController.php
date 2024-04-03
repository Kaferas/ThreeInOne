<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Http\Requests\StoreArticlesRequest;
use App\Http\Requests\UpdateArticlesRequest;
use App\Models\Categories;
use App\Models\Post_pictures;
use App\Models\Tag_post;
use App\Models\Tags;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Articles::where("deleted_status", 0)->with("user")->with("tags")->with("categories")->orderBy('id', "DESC")->get();
        $categories = Categories::where('deleted_status', 0)->get();
        return view("admin/posts/index", ['posts' => $posts, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::where('deleted_status', 0)->get();
        $tags = Tags::where('deleted_status', 0)->get();
        return view("admin/posts/add", ['categories' => $categories, 'tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticlesRequest $request)
    {
        $post = new Articles();
        if ($request->file('pictures_path')) {
            $files = $request->file('pictures_path');
            $fileName = time() . '_' . $files->getClientOriginalName();
            $request->file('pictures_path')->storeAs('uploads/posts', $fileName, 'public');

            $created = $post->create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'author' => 1,
                'categorie_id' => $request->get('categorie_id'),
                'pictures_path' => $fileName,
                'is_published' => $request->get('is_published') ?? "off",
            ]);
            $posts_ = [];
            $tags_post = [];
            if ($request->file('pictures')) {
                foreach ($request->file('pictures') as $picture) {
                    $fileN = time() . '_' . $picture->getClientOriginalName();
                    $picture->storeAs("uploads/posts/post_pictures", $fileN, "public");
                    array_push($posts_, [
                        'post_id' => $created->id,
                        'pictures_path' => $fileN,
                        'created_at' => date('y-m-d h:m:i')
                    ]);
                }
                Post_pictures::insert($posts_);
            }
            foreach ($request->get('tags_id') as $tag) {
                array_push($tags_post, [
                    'tags_id' => $tag,
                    'post_id' => $created->id,
                    'created_at' => date('y-m-d h:m:i')
                ]);
            }
            Tag_post::insert($tags_post);
        }
        return redirect("/posts")
            ->with('success', 'Le Post ajoute avec Success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Articles $articles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articles $post)
    {
        $tags_id = $post->tags->map(function ($tag) {
            return $tag->id;
        })->toArray();
        $categories = Categories::where('deleted_status', 0)->get();
        $tags = Tags::where('deleted_status', 0)->get();
        return view("admin/posts/edit", ['post' => $post, 'tags_id' => $tags_id, 'categories' => $categories, 'tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreArticlesRequest $request, Articles $post)
    {
        dd($post);
        $posts = new Articles();
        if ($request->file('pictures_path')) {
            $files = $request->file('pictures_path');
            $fileName = time() . '_' . $files->getClientOriginalName();
            $request->file('pictures_path')->storeAs('uploads/posts', $fileName, 'public');

            $created = $posts->create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'author' => 1,
                'categorie_id' => $request->get('categorie_id'),
                'pictures_path' => $fileName,
                'is_published' => $request->get('is_published') ?? "off",
            ]);
            $posts_ = [];
            $tags_post = [];
            if ($request->file('pictures')) {
                foreach ($request->file('pictures') as $picture) {
                    $fileN = time() . '_' . $picture->getClientOriginalName();
                    $picture->storeAs("uploads/posts/post_pictures", $fileN, "public");
                    array_push($posts_, [
                        'post_id' => $created->id,
                        'pictures_path' => $fileN,
                        'created_at' => date('y-m-d h:m:i')
                    ]);
                }
                Post_pictures::insert($posts_);
            }
            foreach ($request->get('tags_id') as $tag) {
                array_push($tags_post, [
                    'tags_id' => $tag,
                    'post_id' => $created->id,
                    'created_at' => date('y-m-d h:m:i')
                ]);
            }
            Tag_post::insert($tags_post);
        }
        return redirect("/posts")
            ->with('success', 'Le Post Modifie avec Success.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articles $articles)
    {
    }
}
