<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Link;

class EnlaceOrganizacion extends Component
{

    public $youtube, $vimeo, $linkedin, $facebook, $website, $enlace_id;
   
    public $accion = "store";
    public $form = "ver";

    public function render()
    {
        $enlaces = Link::where('user_id', auth()->user()->id)
                             ->latest()
                             ->take(1)
                             ->get();

        return view('livewire.user.enlace-organizacion', compact('enlaces'));
    }

    public function storeEnlace()
    {

        //Este método comprueba que se rellenen estos campos
        // $this->validate([
        //     'youtube' => ['required', 'regex:%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x'],
        //     'vimeo' => ['required', 'regex:/\/\/(www\.)?vimeo.com\/(\d+)($|\/)/'],
        //     'linkedin' => 'required',
        //     'facebook' => 'required',
        //     'website' => 'required',
        // ]);

        //Este método guarda los datos en la bbdd
        Link::create([
            'youtube' => $this->youtube,
            'vimeo' => $this->vimeo,
            'linkedin' => $this->linkedin,
            'facebook' => $this->facebook,
            'website' => $this->website,
            'user_id' => auth()->user()->id
        ]);

        
        //resetea los imputs y me devuelve el botón de guardar, este es el método del boton cancelar
        $this->reset(['youtube', 'vimeo', 'linkedin', 'facebook', 'website', 'accion', 'form']);

        session()->flash('message', 'Links guardados correctamente.');
    }

    public function edit(Link $enlace){
        $this->youtube = $enlace->youtube;
        $this->vimeo = $enlace->vimeo;
        $this->linkedin = $enlace->linkedin;
        $this->facebook = $enlace->facebook;
        $this->website = $enlace->website;
        $this->enlace_id = $enlace->id;
        

        //de esta forma reemplazo el valor de acción declarado arriba e iniciado con el valor store
        //a el valor update cada vez que hagan clic en el botón edit
        $this->accion = "update";
        $this->form = "ocultar";
    }

    public function update(){

        //Este método comprueba que se rellenen estos campos
        // $this->validate([
        //     'youtube' => ['required', 'regex:%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x'],
        //     'vimeo' => ['required', 'regex:/\/\/(www\.)?vimeo.com\/(\d+)($|\/)/'],
        //     'linkedin' => 'required',
        //     'facebook' => 'required',
        //     'website' => 'required',
        // ]);

        //Este método me trae el objeto para ser actualizado
           $enlace = Link::find($this->enlace_id);

        //Este método actualiza el objeto 
           $enlace->update([
            'youtube' => $this->youtube,
            'vimeo' => $this->vimeo,
            'linkedin' => $this->linkedin,
            'facebook' => $this->facebook,
            'website' => $this->website,
           ]);
           //Este método resetea los inputs después de utilizarlos
        $this->youtube = '';
        $this->vimeo = '';
        $this->linkedin = '';
        $this->facebook = '';
        $this->website = '';

           //resetea los imputs y me devuelve el botón de guardar
           $this->reset(['accion', 'form']);
           session()->flash('messageupdate', 'Los links han sido actualizados correctamente.');
    }

    public function default(){
        
        //resetea los imputs y me devuelve el botón de guardar, este es el método del boton cancelar
        $this->reset(['youtube', 'vimeo', 'linkedin', 'facebook', 'website', 'accion', 'form']);

    }

    public function destroy(Link $enlace){

        $enlace->delete();
        session()->flash('messagedestroy', 'Enalces eliminados correctamente.');
    }
}
