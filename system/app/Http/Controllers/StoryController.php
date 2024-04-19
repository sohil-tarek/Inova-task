<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoryRequest;
use App\Models\User;
use App\Services\StoryServices;
use Illuminate\Http\Request;

class StoryController extends Controller
{

    public function __construct( protected StoryServices $storyServices)
    {
    }

    public function store(StoryRequest $request)
    {
        $story = $this->storyServices->create($request->all());

        return response()->json(['message' => 'Story created successfully', 'story' => $story], 201);
    }

    public function userStories(User $user)
    {
        $stories = $this->storyServices->userStories($user);
         // Assuming 10 stories per page
        return response()->json($stories);
    }

}
