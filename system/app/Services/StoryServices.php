<?php

namespace  App\Services;

use App\Repositories\Interface\StoryRepositoryInterface;

class StoryServices{

    public function __construct(
        protected StoryRepositoryInterface $StoryRepository
    ) {
    }

    public function create(array $data)
    {
        return $this->StoryRepository->create($data);
    }


    public function userStories($user)
    {
        return $this->StoryRepository->userStories($user);
    }

}
