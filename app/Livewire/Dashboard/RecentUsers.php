<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class RecentUsers extends Component
{
    public $recentUsers;

    public function mount(){
        // Mock Data for Recent Users
        $this->recentUsers = [
            ["name" => "Alice Johnson", "email" => "alice@example.com", "role" => "client", "created_at" => "2024-09-20"],
            ["name" => "Bob Smith", "email" => "bob@example.com", "role" => "admin", "created_at" => "2024-09-19"],
            ["name" => "Charlie Brown", "email" => "charlie@example.com", "role" => "client", "created_at" => "2024-09-18"],
            ["name" => "Diana Prince", "email" => "diana@example.com", "role" => "client", "created_at" => "2024-09-17"],
            ["name" => "Ethan Hunt", "email" => "ethan@example.com", "role" => "client", "created_at" => "2024-09-16"],
        ];
    }
    public function render()
    {
        return view('livewire.dashboard.recent-users');
    }
}
