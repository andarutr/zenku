<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function index()
    {
        $menu = 'Feedback';
        return view('pages.admin.feedback.list', compact('menu'));
    }

    public function destroy_all()
    {
        Feedback::truncate();
        return redirect()->back()->withToastSuccess('Berhasil menghapus feedback!');
    }

    public function destroy($id_feedback)
    {
        Feedback::where('id_feedback', $id_feedback)->delete();
        return redirect()->back()->withToastSuccess('Berhasil menghapus feedback!');
    }
}
