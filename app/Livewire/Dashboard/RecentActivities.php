<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class RecentActivities extends Component
{
    public $activities;

    public function mount(){
        // Mock data for recent activities
        $this->activities = [
            ['type' => 'User', 'message' => 'Alice Johnson registered an account', 'date' => '2024-09-15'],
            ['type' => 'Product', 'message' => 'New product "Wireless Headphones" added', 'date' => '2024-09-14'],
            ['type' => 'Order', 'message' => 'Order #1055 has been shipped', 'date' => '2024-09-13'],
            ['type' => 'User', 'message' => 'Bob Smith updated his profile', 'date' => '2024-09-12'],
            ['type' => 'Product', 'message' => 'Product "Bluetooth Speaker" stock updated', 'date' => '2024-09-11'],
        ];
    }
    public function render()
    {
        return view('livewire.dashboard.recent-activities');
    }
}
