<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class TopCustomers extends Component
{
    public $topCustomers = [];

    public function mount(){
        // Mock Data for top customers
        $this->topCustomers = [
            ['name' => 'Alice Johnson', 'total_spent' => 1200.50, 'orders' => 15],
            ['name' => 'Bob Smith', 'total_spent' => 980.75, 'orders' => 10],
            ['name' => 'Charlie Brown', 'total_spent' => 750.25, 'orders' => 8],
            ['name' => 'Diana Prince', 'total_spent' => 630.00, 'orders' => 7],
            ['name' => 'Ethan Hunt', 'total_spent' => 500.00, 'orders' => 5],
        ];
    }
    public function render()
    {
        return view('livewire.dashboard.top-customers');
    }
}
