<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all(); //Retrieves all users
        $users->each(function ($user) { //passes user that's being worked on
            $question = factory(\App\Question::class)->make(); //makes questions
            $question->user()->associate($user); // associate user with made question
            $question->save(); //saves
        });

    }
}
