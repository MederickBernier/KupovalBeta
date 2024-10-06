<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class UserFeedback extends Component
{
    public $feedbacks = [];

    public function mount(){
        // Mock Data for user feedback
        $this->feedbacks = [
            ['user' => 'Alice Johnson', 'message' => 'Great service, will buy again!', 'rating' => 5, 'date' => '2024-09-01'],
            ['user' => 'Bob Smith', 'message' => 'Product quality could be better.', 'rating' => 3, 'date' => '2024-09-02'],
            ['user' => 'Charlie Brown', 'message' => 'Fast delivery, very satisfied.', 'rating' => 4, 'date' => '2024-09-03'],
            ['user' => 'Diana Prince', 'message' => 'Item arrived damaged, requested a refund.', 'rating' => 2, 'date' => '2024-09-04'],
            ['user' => 'Ethan Hunt', 'message' => 'Excellent customer support!', 'rating' => 5, 'date' => '2024-09-05']
        ];
    }
    public function render()
    {
        return view('livewire.dashboard.user-feedback');
    }
}
