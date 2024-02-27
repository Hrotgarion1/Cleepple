<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Address;
use App\Models\Province;
use App\Models\Country;

class DireccionUsuario extends Component
{
    public $countries;
    public $provinces;//provinces es el select relacionado al modelo que estoy utilizando (Address)

    //para el id no puedo utilizar $id así que le pongo otro nombre, en este caso $direccion_id
    //y se lo paso al edit y al update.
    public $street, $town, $phone, $postcode, $country, $address_id, $province, $direccion_id;
   
    public $accion = "store";
    public $form = "ver";

    public function mount()
    {
        $this->countries = Country::all();
        $this->provinces = collect();
    }

    public function render()
    {
        $direccions = Address::where('user_id', auth()->user()->id)
                             ->with('province.country')
                             ->latest()
                             ->take(1)
                             ->get();
        
        return view('livewire.user.direccion-usuario', compact('direccions'));
    }

    //Este es el método que hace dinámicos los selects
    public function updatedCountry($value)
    {
        $this->provinces = Province::where('country_id', $value)->get();
        $this->province = $this->provinces->first()->id ?? null;
    }

    public function storeUser()
    {

        //Este método comprueba que se rellenen estos campos
        $this->validate([
            'street' => 'required',
            'town' => 'required',
            'phone' => 'required',
            'postcode' => 'required',
            'province' => 'required',
            'country' => 'required',
        ]);

        //Este método guarda los datos en la bbdd
        Address::create([
            'street' => $this->street,
            'town' => $this->town,
            'phone' => $this->phone,
            'postcode' => $this->postcode,
            'province_id' => $this->province,
            'user_id' => auth()->user()->id
        ]);

        //Este método resetea los inputs después de utilizarlos
        $this->provinces = collect();
        //resetea los imputs y me devuelve el botón de guardar, este es el método del boton cancelar
        $this->reset(['street', 'town', 'phone', 'postcode', 'country', 'province', 'accion', 'form']);

        session()->flash('message', 'Dirección guardada correctamente.');
    }

    public function edit(Address $direccion){
        $this->street = $direccion->street;
        $this->town = $direccion->town;
        $this->phone = $direccion->phone;
        $this->postcode = $direccion->postcode;
        $this->province = $direccion->province->id;
        $this->country = $direccion->province->country->name;
        $this->direccion_id = $direccion->id;
        

        //de esta forma reemplazo el valor de acción declarado arriba e iniciado con el valor store
        //a el valor update cada vez que hagan clic en el botón edit
        $this->accion = "update";
        $this->form = "ocultar";
    }

    public function update(){

        //Este método comprueba que se rellenen estos campos
        $this->validate([
            'street' => 'required',
            'town' => 'required',
            'phone' => 'required',
            'postcode' => 'required',
            'province' => 'required',
            'country' => 'required',
        ]);

        //Este método me trae el objeto para ser actualizado
           $direccion = Address::find($this->direccion_id);

        //Este método actualiza el objeto 
           $direccion->update([
               'street' => $this->street,
               'town' => $this->town,
               'phone' => $this->phone,
               'postcode' => $this->postcode,
               'country' => $this->country,
               'province_id' => $this->province,
           ]);
           //Este método resetea los inputs después de utilizarlos
        $this->street = '';
        $this->town = '';
        $this->phone = '';
        $this->postcode = '';
        $this->country = '';
        $this->province = '';
        $this->provinces = collect();

           //resetea los imputs y me devuelve el botón de guardar
           $this->reset(['accion', 'form']);
           session()->flash('messageupdate', 'La dirección a sido actualizada correctamente.');
    }

    public function default(){
        //Este método resetea los inputs después de utilizarlos
        $this->provinces = collect();
        //resetea los imputs y me devuelve el botón de guardar, este es el método del boton cancelar
        $this->reset(['street', 'town', 'phone', 'postcode', 'country', 'province', 'accion', 'form']);

    }

    public function destroy(Address $direccion){

        $direccion->delete();
        session()->flash('messagedestroy', 'Dirección eliminada correctamente.');
    }
}
