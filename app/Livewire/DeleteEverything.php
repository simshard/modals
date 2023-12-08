<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteEverything extends Component
{
    public $showModal = false;

    public function handle()
    {
        dd('delete everything');
    }

    public function render()
    {
        return view('livewire.delete-everything');
    }
}
