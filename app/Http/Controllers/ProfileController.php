<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource
     * .
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('profiles.index', compact(Profile::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create', ['user'=> auth()->user()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'photo' => 'mimes:png,jpg,jpeg,bmp,tif,tiff|required',
            'title'=> 'required|string|max:1000',
            'bio'=> 'required|string',
        ]);
        $profile = Profile::create([
            'photo'=>request()->file('photo')->store('profile_pictures'),
            'title'=> request('title'), 
            'bio'=> request('bio'),
        ]
        );
        return redirect()->route('profiles.show', ['id'=> $profile->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profiles.show', compact($profile));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact($profile));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        request()->validate([
            'photo' => 'mimes:png,jpg,jpeg,bmp,tif,tiff|required',
            'title'=> 'required|string|max:1000',
            'bio'=> 'required|string',
        ]);
        $profile->update([
            'photo'=>request()->file('photo')->store('profile_pictures'),
            'title'=> request('title'), 
            'bio'=> request('bio'),
        ]
        );
        return redirect()->route('profiles.show', ['id'=> $profile->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index');
    }
     /**
     * show view to add skills to profile
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function createSkills()
    {
        return view('profiles.createSkills');
    }
    /**
     * add skills to profile
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function storeSkills(Profile $profile)
    {
        request()->validate(
            [
                'skills'=>'array'
            ]
            );
        $profile->skills()->attach(request('skills'));
        return redirect()->route('profiles.show', ['profile'=> $profile->id]);
    }

    /**
     * show view to edit skills on profile
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function editSkills(Profile $profile)
    {
        return view('profiles.editSkills',[
            'profile'=> $profile,
        ]);
    }

    /**
     * update skills on profile
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function updateSkills(Profile $profile)
    {
        request()->validate(
            [
                'skills'=>'array'
            ]
            );
        $profile->skills()->attach(request('skills'));
        return redirect()->route('profiles.show', ['profile'=> $profile->id]);
    }

}
