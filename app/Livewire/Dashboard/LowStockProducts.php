<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class LowStockProducts extends Component
{
    public $lowStockProducts = [];

    public function mount(){
        // Mock Data for low stock products
        $this->lowStockProducts = [
            ['name' => 'Product A', 'stock' => 3],
            ['name' => 'Product B', 'stock' => 5],
            ['name' => 'Product C', 'stock' => 2],
            ['name' => 'Product D', 'stock' => 1],
            ['name' => 'Product E', 'stock' => 4],
        ];
    }
    public function render()
    {
        return view('livewire.dashboard.low-stock-products');
    }
}
