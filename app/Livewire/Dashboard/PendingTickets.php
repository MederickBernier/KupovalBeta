<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class PendingTickets extends Component
{
    public $pendingTickets;

    public function mount(){
        // Mock Data for Pending Support Tickets
        $this->pendingTickets = [
            ["id" => 1001, "subject" => "Login Issue", "customer" => "Alice Johnson", "status" => "Open", "submitted_on" => "2024-09-20"],
            ["id" => 1002, "subject" => "Payment Error", "customer" => "Bob Smith", "status" => "In Progress", "submitted_on" => "2024-09-19"],
            ["id" => 1003, "subject" => "Account Access", "customer" => "Charlie Brown", "status" => "Open", "submitted_on" => "2024-09-18"],
            ["id" => 1004, "subject" => "Bug Report", "customer" => "Diana Prince", "status" => "In Progress", "submitted_on" => "2024-09-17"],
            ["id" => 1005, "subject" => "Feature Request", "customer" => "Ethan Hunt", "status" => "Open", "submitted_on" => "2024-09-16"],
        ];
    }
    public function render()
    {
        return view('livewire.dashboard.pending-tickets');
    }
}
