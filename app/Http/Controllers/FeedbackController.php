<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Logic\Facades\FeedbackService;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(StoreFeedbackRequest $request)
    {
        $validated = $request->validated();
        FeedbackService::storeFeedback($validated);
        return redirect()->back();
    }


}
