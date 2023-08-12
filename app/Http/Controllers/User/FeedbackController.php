<?php

namespace App\Http\Controllers\User;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Feedback';
        return view('pages.user.feedback.index', $data);
    }

    public function store(Request $req)
    {
        $this->validate($req,[
            'message' => 'required'
        ]);

        Feedback::create([
            'id_user' => Auth::user()->id,
            'message' => $req->message,
        ]);

        return redirect()->back()->withToastSuccess('Berhasil mengisi form feedback!');
    }
}
