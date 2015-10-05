<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $post = Post::all();//melihat data yang di tabel
        return view('index',compact('post'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('form');   //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->judul = $request->input('judul');
        $post->isi = $request->input('isi');
        // return $post;
        if($post->save()){
            return "berhasil";
        }
        else{
            return "gagal";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('edit',compact('post'));
        // return view('edit',array('p'=>$post));
        // return $post;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::find($id);
        $post->judul = $request->input('judul');
        $post->isi = $request->input('isi');
        if($post->save()){
            return "berhasil";
        }
        else{
            return "gagal";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        if(Post::destroy($id)){
            return "berhasil";
        }else{
            return "gagal";
        }
    }
}
