<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        return view('pages.admin.feedback.index', $data);
    }

    public function destroy_all()
    {
        $this->feedbackService->destroy_all();

        return redirect()->back()->withToastSuccess('Berhasil menghapus feedback!');
    }

    public function destroy($id)
    {
        $this->feedbackService->destroy($id);
        
        return redirect()->back()->withToastSuccess('Berhasil menghapus feedback!');
    }
}
