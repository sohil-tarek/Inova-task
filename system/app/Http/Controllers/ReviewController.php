<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Services\ReviewService;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function __construct( protected ReviewService $reviewService)
    {

    }

    public function Store(ReviewRequest $request)
    {
         $review = $this->reviewService->store($request->all());
         return response()->json(['message' => 'Review added successfully', 'review' => $review], 201);


    }
}
