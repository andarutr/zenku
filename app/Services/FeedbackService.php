<?php
namespace App\Services;

use App\Models\Feedback;

class FeedbackService 
{
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