<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class PendingReviews extends Component
{

    public $pendingReviews = [];

    public function mount(){
        // Mock Data for pending reviews
        $this->pendingReviews = [
            ['customer' => 'Alice Johnson', 'product' => 'Painting A', 'rating' => 5, 'date' => '2024-09-25', 'comment' => 'Amazing artwork!'],
            ['customer' => 'Bob Smith', 'product' => 'Sculpture B', 'rating' => 4, 'date' => '2024-09-20', 'comment' => 'Very detailed.'],
            ['customer' => 'Charlie Brown', 'product' => 'Photo Print C', 'rating' => 3, 'date' => '2024-09-18', 'comment' => 'Good quality.'],
            ['customer' => 'Diana Prince', 'product' => 'Art Book D', 'rating' => 2, 'date' => '2024-09-15', 'comment' => 'Not what I expected.'],
            ['customer' => 'Ethan Hunt', 'product' => 'Digital Art E', 'rating' => 1, 'date' => '2024-09-10', 'comment' => 'Disappointing.'],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.pending-reviews');
    }
}
