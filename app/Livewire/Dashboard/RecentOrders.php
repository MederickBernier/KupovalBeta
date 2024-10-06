<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class RecentOrders extends Component
{
    public $recentOrders;

    public function mount(){
        // Mock data
        $this->recentOrders = [
            ["Order ID" => 101, "Customer" => "Alice Johnson", "Status" => "Completed", "Total" => 150.00, "Date" => "2024-09-01"],
            ["Order ID" => 102, "Customer" => "Bob Smith", "Status" => "Pending", "Total" => 200.00, "Date" => "2024-09-02"],
            ["Order ID" => 103, "Customer" => "Charlie Brown", "Status" => "Shipped", "Total" => 250.00, "Date" => "2024-09-03"],
            ["Order ID" => 104, "Customer" => "Diana Prince", "Status" => "Processing", "Total" => 175.00, "Date" => "2024-09-04"],
            ["Order ID" => 105, "Customer" => "Ethan Hunt", "Status" => "Cancelled", "Total" => 50.00, "Date" => "2024-09-05"],
        ];
    }
    public function render()
    {
        return view('livewire.dashboard.recent-orders');
    }
}
