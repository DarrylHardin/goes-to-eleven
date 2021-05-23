<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $isComment = rand(0,1);
        $userId = User::all()->random()->id;
        if($isComment)
        {
            return [
                'user_id' => $userId,
                'comment_id' => Comment::all()->random()->id,
            ];
        } else {
            return [
                'user_id' => $userId,
                'blog_id' => Blog::all()->random()->id,
            ];
        }

    }
}
