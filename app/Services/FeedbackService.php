<?php
namespace App\Services;

use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class FeedbackService 
{
    public function store(array $data)
    {
        $store = Feedback::create([
            'user_id' => Auth::user()->id,
            'message' => $data['message'],
        ]);

        return $store;
    }

    public function destroy_all()
    {
        $truncate = Feedback::truncate();

        return $truncate;
    }
    
    public function destroy($id)
    {
        $destroy = Feedback::where('id', $id)->delete();

        return $destroy;
    }
}