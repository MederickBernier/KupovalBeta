<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UpdateField extends Component
{
    public $field;
    public $value;
    public $isEditing = false;

    protected $rules = [
        'value' => 'required|min:3',
    ];

    public function mount($field){
        $this->field = $field;
        $this->value = Auth::user()->$field;
    }

    public function updateField(){
        $this->validate();
        $user = Auth::user();
        $user->{$this->field} = $this->value;
        $user->save();

        session()->flash('message', __('user_profile.update_success'));
        $this->isEditing = false;
    }
    public function render()
    {
        return view('livewire.profile.update-field');
    }
}
