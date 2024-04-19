<?php
namespace  App\Services;

use App\Repositories\ReviewRepository;

class ReviewService
{
    public function __construct(
        protected ReviewRepository $reviewRepository
    ) {
    }


    public function store($data)
    {
        return $this->reviewRepository->store($data);
    }

}
