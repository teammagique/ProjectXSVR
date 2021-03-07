<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Category;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('skills.index', compact(Skill::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate request
        request()->validate(
            [
                'name'=> 'required|string|max:255',
                'category'=> 'required|string|max:255'
            ]
        );

        $category = Category::firstOrCreate(
            [
                'name'=> request('category')
            ]
        );
        $skill = Skill::create([
            'name'=> request('name'),
            'category_id' => $category->id
        ]
        );

        return redirect()->route('skills.show', ['skill'=> $skill->id]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        return view('skills.show', compact($skill));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('skills.edit', compact($skill));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        request()->validate(
            [
                'name'=> 'required|string|max:255',
                'category'=> 'required|string|max:255'
            ]
        );
        
        $category = Category::firstOrCreate(
            [
                'name'=> request('category')
            ]
        );
        
        $skill->update(
            [
                'name'=> request('name'),
                'category_id'=> $category->id
            ]
        );

        return redirect()->route('skills.show', ['skill'=> $skill->id]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skills.index');
    }

}
