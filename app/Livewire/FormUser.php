<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Dato;

class FormUser extends Component
{
    public $nombre = '';

    public $email = '';

    public $telefono = '';

    public function save()
    {
        Dato::create([
            'nombre' => $this->nombre,
            'email' => $this->email,
            'telefono' => $this->telefono
        ]);
 
        // return redirect()->to('/form');
    }

    public function render()
    {
        return view('livewire.form-user');
    }
}
