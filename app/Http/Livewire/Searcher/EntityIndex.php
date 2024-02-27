<?php

namespace App\Http\Livewire\Searcher;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class EntityIndex extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $roles = Role::all();
        // Metodo para hacer un buscador

        $users = User::where('role_id', '5')->paginate('8');
                //   where('name', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                // ->orWhere('role_id', 'LIKE', '%' . $this->search . '%')
                // ->paginate(8);

        return view('livewire.searcher.entity-index', compact('users', 'roles'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
