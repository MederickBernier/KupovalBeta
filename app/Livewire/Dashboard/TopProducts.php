<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class TopProducts extends Component
{

    public $topProducts;

    public function mount(){
        // Mock Data for Top Products
        $this->topProducts = [
            ["name" => "Wireless Headphones", "category" => "Electronics", "sales" => 120, "revenue" => 2999.99],
            ["name" => "Yoga Mat", "category" => "Sports", "sales" => 80, "revenue" => 1599.99],
            ["name" => "Smartphone Stand", "category" => "Accessories", "sales" => 95, "revenue" => 949.95],
            ["name" => "Laptop Sleeve", "category" => "Electronics", "sales" => 60, "revenue" => 899.99],
            ["name" => "Desk Lamp", "category" => "Home", "sales" => 50, "revenue" => 750.00],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.top-products');
    }
}
