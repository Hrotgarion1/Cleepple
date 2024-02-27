<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UsersIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function render()
    {
        $roles = Role::all();
        // Metodo para hacer un buscador

        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                ->orWhere('role_id', 'LIKE', '%' . $this->search . '%')
                ->paginate(8);

        return view('livewire.admin.users-index', compact('users', 'roles'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
