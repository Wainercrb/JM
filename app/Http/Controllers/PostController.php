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
    *ckeck if user is logged
    */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('private.post.index');
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
        try{
            $now = \Carbon\Carbon::now();
            $post = new post;
            $post->details = $request->details;
            $post->date = $now->toDateTimeString();
            $post->id_user = auth()->user()->id;
            if(!$post->save()){
                session()->flash('fail', "Error al guardar el post");
                return redirect()->back()->withInput($request->all);
            }
            if ($request->hasFile('file')) {
                foreach ($request->file as $file) {
                    $mediaPost = new mediaPost;
                    $mediaPost->src = Storage::disk('public')->put('/', $file);
                    $mediaPost->type = 'Image';
                    $mediaPost->Post()->associate($post);
                    $mediaPost->save();
                }
            }
            if (isset($request->url)) {
                foreach ($request->url as $url) {
                    $mediaPost = new mediaPost;
                    $videoUrl = self::getIdVideo($url);
                    $mediaPost->src = $videoUrl;
                    $mediaPost->type = 'Video';
                    $mediaPost->Post()->associate($post);
                    $mediaPost->save();
                }
            }
            session()->flash('success', '!Post agregado correctamete¡');
        } catch (\Exception $e) {
            session()->flash('fail', $e->getMessage());
        }
          return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      try {
        if (!self::validateId($id)){
          return View('messages.404');
        }
        $post = post::find($id);
        if (!self::validateObject($post)){
          return View('messages.404');
        }
        $mediaPost = mediaPost::where('id_post', $id)->get();
        return view('private.post.show')->with('mediaPost', $mediaPost)->with('post', $post);
      } catch (\Exception $e) {
        session()->flash('fail', $e->getMessage());
        return redirect('posts');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      try {
        if (!self::validateId($id)){
          return View('messages.404');
        }
        $post = post::find($id);
        if (!self::validateObject($post)){
          return View('messages.404');
        }
        $mediaPost = mediaPost::where('id_post', $id)->get();
        return view('private.post.update')->with('mediaPost', $mediaPost)->with('post', $post);
      } catch (\Exception $e) {
        session()->flash('fail', $e->getMessage());
        return redirect('posts');
      }
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
      try {
        if (!self::validateId($id)){
          return View('messages.404');
        }
        $now = \Carbon\Carbon::now();
        $post = post::find($id);
        $post->details = $request->details;
        $post->date = $now->toDateTimeString();
        $post->id_user = auth()->user()->id;
        if(!$post->update()){
            session()->flash('fail', "Error al guardar el post");
            return redirect()->back()->withInput($request->all);
        }
        if ($request->hasFile('file')) {
            foreach ($request->file as $file) {
                $mediaPost = new mediaPost;
                $mediaPost->src = Storage::disk('public')->put('/', $file);
                $mediaPost->type = 'Image';
                $mediaPost->Post()->associate($post);
                $mediaPost->save();
            }
        }
        if (isset($request->url)) {
            foreach ($request->url as $url) {
                $mediaPost = new mediaPost;
                $videoUrl = self::getIdVideo($url);
                $mediaPost->src = $videoUrl;
                $mediaPost->type = 'Video';
                $mediaPost->Post()->associate($post);
                $mediaPost->save();
            }
        }
        if ((isset($request->imgDeleteID)) && (count($request->imgDeleteID) > 0)) {
          self::destroyImages($request->imgDeleteID);
        }
        if ((isset($request->mediaVideo)) && (count($request->mediaVideo) > 0)) {
          self::destroyVideos($request->mediaVideo);
        }
        session()->flash('success', '!Post actualizado correctamete¡');
      } catch (\Exception $e) {
        session()->flash('fail', $e->getMessage());
      }
      return redirect('posts');
    }
    /**
    * Show the form for confirm delete.
    *
    * @return \Illuminate\Http\Response
    */
    public function confirDelete($id)
    {
      try {
          if (!self::validateId($id)){
            return View('messages.404');
          }
          $post = post::find($id);
          if (!self::validateObject($post)){
            return View('messages.404');
          }
          $mediaPost = mediaPost::where('id_post', $id)->get();
          return view('private.post.delete')->with('mediaPost', $mediaPost)->with('post', $post);
      } catch (\Exception $e) {
          session()->flash('fail', $e->getMessage());
          return redirect('posts');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mediaPost = mediaPost::where('id_post',$id)->where('type', 'Image')->select('src')->get();
        if ((isset($mediaPost)) && (count($mediaPost) > 0)) {
          self::destroyImages($mediaPost);
        }
        mediaPost::where('id_post', $id)->delete();
        post::where('id', $id)->delete();
        session()->flash('success', '!Post elimiado correctamete¡');
        return redirect('/posts');

    }
    public function getMediaForId(Request $request)
    {
        try {
            $media = mediaPost::where('id_post', $request->id)->get();
            return response()->json($media->toArray());
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
    public function getPosts(Request $request)
    {
        try {
            $posts = post::offset($request->offset)->limit(5)->orderBy('date', 'desc')->get();
               if (isset($posts)) {
                    $loop = 0;
                    foreach ($posts as $item) {
                        $miniature =  mediaPost::where('id_post', $item->id)->get();
                       if (isset( $miniature[0]->src)) {
                        $posts[$loop]->miniature = $miniature[0]->src;
                        $posts[$loop]->type = $miniature[0]->type;
                        $posts[$loop]->more = count($miniature);
                        }else{
                            $posts[$loop]->miniature = 'default.png';
                            $posts[$loop]->type = 'Image';
                            $posts[$loop]->more = '1';
                        }
                        $loop++;
                    }
                }
            return response()->json($posts->toArray());
        } catch (\Exception $e) {
            return response()->json(['fail' => $e->getMessage()]);
        }
    }

    public function getIdVideo($url){
        if (!isset($url)) {
            session()->flash('fail', "Error no se pudo guardar el post");
            return redirect()->back()->withInput($request->all);
        }
        preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
        return $matches[1];
    }
    //validate if object exist
    public function validateObject($object)
    {
      if (!isset($object) || $object == null) {
        return false;
      }
      return true;
    }
    //ckeck if id exist
    public function validateId($id)
    {
      if (!isset($id) || !is_numeric($id) || $id <= 0) {
        return false;
      }
      return true;
    }

    //dlete image from database an storage
    public function destroyImages($images)
    {
      foreach ($images as $item) {
        mediaPost::where('src', $item)->delete();
        Storage::delete('public/' . $item);
      }
    }
    //delete video from database
    public function destroyVideos($videos)
    {
      foreach ($videos as $item) {
        mediaPost::where('id', $item)->delete();
      }
    }
}
