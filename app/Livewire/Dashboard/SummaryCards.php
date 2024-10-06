<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class SummaryCards extends Component
{
    public $totalUsers;
    public $totalOrders;
    public $totalProducts;
    public $totalRevenue;

    public function mount(){
        // Mock Data for now
        $this->totalUsers = 150;
        $this->totalOrders = 75;
        $this->totalProducts = 300;
        $this->totalRevenue = 12345.67;
    }
    public function render()
    {
        return view('livewire.dashboard.summary-cards');
    }
}
