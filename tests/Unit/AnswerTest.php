<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnswerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSave()
    {
        $user = $user = factory(\App\User::class)->make(); //make user
        $user->save(); // save user
        $question = factory(\App\Question::class)->make(); // make question
        $question->user()->associate($user); //associate user and question
        $question->save(); // save question/user assoc
        $answer = factory(\App\Answer::class)->make(); // create answer
        $answer->user()->associate($user); //associate user and answer
        $answer->question()->associate($question); // associate question and answer
        $this->assertTrue($answer->save()); //assert that save is complete
    }
}
