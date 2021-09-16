<?php

namespace App\Repositories;

use App\Models\Runner;

class RunnerRepository extends Repository
{
    public function __construct(Runner $model)
    {
        parent::__construct($model);
    }
}
