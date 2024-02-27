<?php

namespace App\Http\Livewire\User;

use App\Models\Blogpost;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;
    
    //Método para resetear la pagina que tiene la variable $search
    //y se activa cada vez que la variable cambia
    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        //where('user_id', auth()->user()->id) para que me devuelva los registros del usuario autentificado
        $postblogs = Blogpost::where('user_id', auth()->user()->id)
                  //Filtro del buscador sincronizado con la variable $search y que busca en el campo name
                             ->where('name', 'LIKE','%' . $this->search . '%')
                             ->latest('id')
                             ->paginate(10);

        return view('livewire.user.index', compact('postblogs'));
    }
}
