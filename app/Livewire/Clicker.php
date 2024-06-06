<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public function handleClick()
    {
        return dd('Hello World');
    }
    public function render()
    {
        $title = "Intro to LiveWire";
        $users = User::all();
        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users,
        ]);
    }
}
