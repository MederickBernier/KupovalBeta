<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Announcements extends Component
{
    public $announcements = [];

    public function mount(){
        // Mock Data for announcements
        $this->announcements = [
            ['title' => 'New Feature Release', 'message' => 'We have just launched a new feature! Check it out in the settings.', 'date' => '2024-09-01'],
            ['title' => 'Maintenance Scheduled', 'message' => 'The platform will be undergoing maintenance on 2024-09-05.', 'date' => '2024-09-02'],
            ['title' => 'Holiday Notice', 'message' => 'Our support team will be unavailable on public holidays.', 'date' => '2024-09-03'],
            ['title' => 'Product Update', 'message' => 'New updates have been applied to improve user experience.', 'date' => '2024-09-04'],
            ['title' => 'Upcoming Event', 'message' => 'Join our upcoming webinar on "Best Practices for Online Security."', 'date' => '2024-09-05'],
        ];
    }
    public function render()
    {
        return view('livewire.dashboard.announcements');
    }
}
