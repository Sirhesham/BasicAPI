<?php

namespace Database\Factories\Helpers;

use App\Models\Post;

class FactoryHelper
{
    public static function getRandomModelId(string $model)
    {
        $count = $model::query()->count();
        if ($count == 0) {
            return $postId = $model::factory()->create()->id;
        } else {

            return  $postId = rand(1, $count);
        };
    }
}
