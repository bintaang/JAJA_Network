<?php

namespace App\Livewire;

use Livewire\Component;


class DataInput extends Component
{

    public function update(){
        session()->flash('success', 'Profil berhasil diperbarui!');
        session()->flash('error', 'Profil gagal diperbarui!');
    }
    public function render()
    {
        return view('livewire.data-input');
    }
}
