<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreFeedbackRequest;
use App\Services\FeedbackService;

class FeedbackController extends Controller
{
    protected $feedbackService;

    public function __construct(FeedbackService $feedbackService)
    {
        $this->feedbackService = $feedbackService;
    }

    public function index()
    {
        $data['menu'] = 'Feedback';
        return view('pages.user.feedback.index', $data);
    }

    public function store(StoreFeedbackRequest $req)
    {
        $this->feedbackService->store($req->all());

        return redirect()->back()->withToastSuccess('Berhasil mengisi form feedback!');
    }
}
