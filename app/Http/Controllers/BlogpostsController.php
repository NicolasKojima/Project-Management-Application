<?php

namespace App\Http\Controllers;

use App\Models\blogposts;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreblogpostsRequest;
use App\Http\Requests\UpdateblogpostsRequest;

class BlogpostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreblogpostsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreblogpostsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blogposts  $blogposts
     * @return \Illuminate\Http\Response
     */
    public function show(blogposts $blogposts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blogposts  $blogposts
     * @return \Illuminate\Http\Response
     */
    public function edit(blogposts $blogposts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateblogpostsRequest  $request
     * @param  \App\Models\blogposts  $blogposts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateblogpostsRequest $request, blogposts $blogposts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blogposts  $blogposts
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogposts $blogposts)
    {
        //
    }
}
