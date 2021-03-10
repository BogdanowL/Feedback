<?php


namespace App\Logic;


use App\Feedback;
use Illuminate\Support\Facades\Artisan;

class HelpersLogic
{

    public function seedDB(int $quantity):void
    {
        factory(Feedback::class, $quantity)->create();
    }



}
