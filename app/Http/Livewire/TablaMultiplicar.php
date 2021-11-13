<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class TablaMultiplicar extends Component

{
    public $number = 1, $site;
    public function render()
    {

        $respuesta = HTTP::get('https://mzznzefp.lucusvirtual.es/api/multiplicar/'.$this->number);
        $res = $respuesta->json();
        return view('livewire.tabla-multiplicar', compact('res'));
    }



}
