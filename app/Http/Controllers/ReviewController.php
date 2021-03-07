<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_reviews = request()->user()->reviews;
        return view('reviews.index', ['reviews'=> $user_reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function store(User $pro)
    {
        $user_id = request()->user()->id;
        Review::create([
            'customer_id'=> $user_id,
            'professional_id'=> $pro->id,
            'rating'=> request('rating'),
            'comment'=> request('comment'),   
        ]);

        // redirect to viewing professionals profiles
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return view('reviews.show', ['review'=>$review]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('reviews.edit', ['review'=>$review]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $review->update([
            'rating'=> request('rating'),
            'comment'=> request('comment'),   
        ]);
        return redirect()->route('reviews.show', ['review'=>$review->id]);
    }

     /**
     * get reviews for a particular professional
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function proReviews(Request $request, User $pro)
    {
       $reviews = $pro->reviews();
       return view('reviews.index', ['reviews'=> $reviews]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
        // redirect to a comments page
    }
}
