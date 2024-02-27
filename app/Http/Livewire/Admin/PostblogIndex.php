<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blogpost;
use Livewire\Component;
use Livewire\WithPagination;

class PostblogIndex extends Component
{
    use WithPagination;
    //Metodo para que la pagina no use tailwind y use boostrap
    protected $paginationTheme = "bootstrap";

    public $search;
    //Método para resetear la pagina que tiene la variable $search
    //y se activa cada vez que la variable cambia
    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        //where('user_id', auth()->user()->id) para que me devuelva los registros del usuario autentificado
        //Filtro del buscador sincronizado con la variable $search y que busca en el campo name
        $postblogs = Blogpost::where('name', 'LIKE','%' . $this->search . '%')
                             ->latest('id')
                             ->paginate(10);
                  
        return view('livewire.admin.postblog-index', compact('postblogs'));
    }
}
