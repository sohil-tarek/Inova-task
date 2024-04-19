<?php
namespace App\Repositories;

use App\Models\Story;
use App\Repositories\Interface\StoryRepositoryInterface;

class StoryRepository implements  StoryRepositoryInterface
{
    public function __construct() {

        $this->model = new Story();
    }

    public function create($data)
    {
        return $this->model->create($data);

    }


    public function userStories($user)
    {
       return $user->stories()->paginate(10);
    }

}

