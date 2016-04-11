<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Story;
use App\Tag;
use App\Location;

class StoryController extends Controller
{
    public function index() {    	
    	// Get only the stories that have been published
        // $stories = Story::with('tags')->where('published', '=', '1')->get();

    	// Get all the stories
    	$stories = Story::with('tags')->get();
    	return view('stories', ['stories' => $stories]);
    }

    public function tags() {
    	$tags = Tag::all();
    	return view('tags', ['tags' => $tags]);
    }

    public function create() {
        $locations = Location::all();
        return view('story.create', ['locations' => $locations]);
    }

    public function store(Request $request) {
        Story::unguard();
        Story::create($request->only('title','story','published','location_id'));
        Story::reguard();
    }
}
