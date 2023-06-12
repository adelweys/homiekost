<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.indexxx', [
            'posts' => Cost::get()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cost_name' => 'required|max:255',
            'slug' => 'required',
            'total_kamar' => 'required',
            'cost_type' => 'required',
            'available_room' => 'required',
            'cost_location' => 'required',
            'cost_address' => 'required',
            'description' => 'required',
            'photo' => 'image|file|max:5120kb',
            'contact_person' => 'required',
            'night_limit' => 'required',
            'long_add' => 'required',
            'lat_add' => 'required'
        ]);

        if($request->file('photo')){
            $validatedData['photo'] = $request->file('photo')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Cost::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Cost baru telah dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cost  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Cost $post)
    {
        return view('main.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cost  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Cost $post)
    {
        return view('main.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cost  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cost $post)
    {
        $rules = ([
            'cost_name' => 'required|max:255',
            'slug' => 'required',
            'total_kamar' => 'required',
            'cost_type' => 'required',
            'available_room' => 'required',
            'cost_location' => 'required',
            'cost_address' => 'required',
            'description' => 'required',
            'photo' => 'image|file|max:5120kb',
            'contact_person' => 'required',
            'night_limit' => 'required',
            'long_add' => 'required',
            'lat_add' => 'required'
        ]);


        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('photo')){
            if($request->oldImage)
            {
                Storage::delete($request->oldImage);
            }
            $validatedData['photo'] = $request->file('photo')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Cost::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Cost Telah Di Update');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cost  $post
     * @return \Illuminate\Http\Response,
     */
    public function destroy(Cost $post)
    {
        if($post->photo)
            {
                Storage::delete($post->photo);
            }
        Cost::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Cost Telah Dihapus!');
    }
}
