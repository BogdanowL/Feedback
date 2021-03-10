<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Http\Requests\MakeSeedRequest;
use App\Logic\Facades\HelpersService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $feedbacks = Feedback::latest()->paginate(5);
        return view('home', compact('feedbacks'));
    }

    public function makeFactory(MakeSeedRequest $request)
    {
        HelpersService::seedDB($request->validated()['quantity']);
        return redirect()->back();
    }

    public function refreshDB()
    {
        HelpersService::refreshDataBase();
        return redirect()->back();
    }



}
