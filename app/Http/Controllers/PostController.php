<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use View;
use \App\Models\mediaPost;
use \App\Models\post;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('private.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $now = \Carbon\Carbon::now();
        $post = new post;
        $post->details = $request->details;
        $post->date = $now->toDateTimeString();
        $post->more = count($request->file);
        $post->id_user = auth()->user()->id;
        $post->miniature = Storage::disk('public')->put('/', $request->file[0]);
        $post->save();
        $lastInsertedId = $post->id;

        if ($request->url !== null) {
            foreach ($request->url as $url) {
                $mediaPost = new mediaPost;
                $mediaPost->src = $url;
                $mediaPost->id_post = $lastInsertedId;
                $mediaPost->type = 'V';
                $mediaPost->save();
            }
        }
        if ($request->file !== null) {
            foreach ($request->file as $file) {
                $mediaPost = new mediaPost;
                $mediaPost->src = Storage::disk('public')->put('/', $file);
                $mediaPost->id_post = $lastInsertedId;
                $mediaPost->type = 'I';
                $mediaPost->save();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function images(Request $request)
    {
        try {
            $images = mediaPost::where('id_post', '=', $request->id)->get();
            return response()->json($images->toArray());
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
    }
    public function posts(Request $request)
    {
        try {
           $newLimit = 5;
            $total = post::count();
            if($request->limit > $total){
                $newLimit = $total - $request->limit;
            }
            $posts = post::limit($newLimit)->offset ((int)$request->limit)->join('users', 'users.id', '=', 'post.id_user')->select('post.id','post.miniature','post.details','post.more', 'users.image', 'users.name', 'users.surnames')->get();
            return response()->json($posts->toArray());
        } catch (\Illuminate\Database\QueryException $ex) {
            return response()->json(['error' => $ex->getMessage()]);
        }
    }
}
