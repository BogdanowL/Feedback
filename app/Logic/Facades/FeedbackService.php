<?php


namespace App\Logic\Facades;


use Illuminate\Support\Facades\Facade;

class FeedbackService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'feedBackService';
    }


}
