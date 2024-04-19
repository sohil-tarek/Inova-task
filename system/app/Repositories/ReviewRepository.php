<?php
namespace App\Repositories;

use App\Models\Review;
use App\Repositories\Interface\ReviewRepositoryInterface;

class ReviewRepository implements ReviewRepositoryInterface
{

    public function __construct() {

        $this->model = new Review();
    }
    public function store($data)
    {
        return $this->model->create($data);
    }
}
