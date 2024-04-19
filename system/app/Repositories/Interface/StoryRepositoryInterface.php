<?php
namespace  App\Repositories\Interface;

interface StoryRepositoryInterface
{
    public function create($data);

    public function userStories($user);
}
