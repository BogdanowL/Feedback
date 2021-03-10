<?php


namespace App\Logic;


use App\Feedback;

class FeedbackLogic
{

    public function storeFeedback(array $feedback ):void
    {
        Feedback::create($feedback);
    }

}
