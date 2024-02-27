<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Organization;
use App\Models\Province;
use App\Models\Country;
use App\Models\Especializacion;
use App\Models\Profesion;
use App\Models\Empleado;
//para el logo de la organización
use Livewire\WithFileUploads;

class DireccionOrganizacion extends Component
{
    use WithFileUploads;

    //Estas variables son para los que tienen su propia base de datos
    public $countries;
    public $provinces;//provinces es el select relacionado al modelo que estoy utilizando (Address)
    public $empleados;
    public $profesions;
    public $especializacions;
    

    //para el id no puedo utilizar $id así que le pongo otro nombre, en este caso $direccion_id
    //y se lo paso al edit y al update.
    public $name, $url, $empleado, $cif, $town, $street, $number, $postcode, $phone, $email, $bio,  $country, $organization_id, $province, $profesion, $especializacion, $direccion_id;
   
    public $accion = "store";
    public $form = "ver";

    public function mount()
    {
        $this->empleados = Empleado::all();
        $this->countries = Country::all();
        $this->provinces = collect();
        $this->profesions = Profesion::all();
        $this->especializacions = collect();
    }


    public function render()
    {
        $direccions = Organization::where('user_id', auth()->user()->id)
                                  ->with('province.country')
                                  ->latest()
                                  ->take(1)
                                  ->get();
        return view('livewire.user.direccion-organizacion', compact('direccions'));
    }

    //Este es el método que hace dinámicos los selects País y Provincia
    public function updatedCountry($value)
    {
        $this->provinces = Province::where('country_id', $value)->get();
        $this->province = $this->provinces->first()->id ?? null;
    }

    //Este es el método que hace dinámicos los selects de profesion y especialización
    public function updatedProfesion($value)
    {
        $this->especializacions = Especializacion::where('profesion_id', $value)->get();
        $this->especializacion = $this->especializacions->first()->id ?? null;
    }

    public function storeOrganization()
    {

        //Este método comprueba que se rellenen estos campos
        $this->validate([
            'name' => 'required',
            'profesion' => 'required',
            'especializacion' => 'required',
            'empleado' => 'required',
            'cif' => 'required',
            'town' => 'required',
            'street' => 'required',
            'number' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'bio' => 'required',
            'province' => 'required',
            'country' => 'required',
            'url' => 'image|max:5120', // 5MB Max
        ]);

        //Este método guarda los datos en la bbdd
        Organization::create([
            'url' => $this->url->store('logos'),
            'name' => $this->name,
            'empleado_id' => $this->empleado,
            'cif' => $this->cif,
            'town' => $this->town,
            'street' => $this->street,
            'number' => $this->number,
            'postcode' => $this->postcode,
            'phone' => $this->phone,
            'email' => $this->email,
            'bio' => $this->bio,
            'province_id' => $this->province,
            'especializacion_id' => $this->especializacion,
            'user_id' => auth()->user()->id
            
        ]);

        //Este método resetea los inputs después de utilizarlos
        $this->provinces = collect();
        $this->especializacions = collect();
        //resetea los imputs y me devuelve el botón de guardar, este es el método del boton cancelar
        $this->reset(['url', 'name', 'empleado', 'cif', 'town', 'street', 'number', 'postcode', 'phone', 'email', 'bio', 'country', 'province', 'profesion', 'especializacion', 'accion', 'form']);

        session()->flash('message', 'Datos de la organización guardados correctamente.');
    }

    public function edit(Organization $direccion){
        $this->url = $direccion->url;
        $this->name = $direccion->name;
        $this->especializacion = $direccion->especializacion->id;
        $this->profesion = $direccion->especializacion->profesion->name;
        $this->empleado = $direccion->empleado->id;
        $this->cif = $direccion->cif;
        $this->town = $direccion->town;
        $this->street = $direccion->street;
        $this->number = $direccion->number;
        $this->postcode = $direccion->postcode;
        $this->phone = $direccion->phone;
        $this->email = $direccion->email;
        $this->bio = $direccion->bio;
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
            'url' => 'image|max:5120', // 5MB Max
            'name' => 'required',
            'profesion' => 'required',
            'especializacion' => 'required',
            'empleado' => 'required',
            'cif' => 'required',
            'town' => 'required',
            'street' => 'required',
            'number' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'bio' => 'required',
            'province' => 'required',
            'country' => 'required',
            
        ]);

        //Este método me trae el objeto para ser actualizado
           $direccion = Organization::find($this->direccion_id);

        //Este método actualiza el objeto 
           $direccion->update([
               'url' => $this->url->store('logos'),
               'name' => $this->name,
               'profesion' => $this->profesion,
               'especializacion_id' => $this->especializacion,
               'empleado_id' => $this->empleado,
               'cif' => $this->cif,
               'town' => $this->town,
               'street' => $this->street,
               'number' => $this->number,
               'postcode' => $this->postcode,
               'phone' => $this->phone,
               'email' => $this->email,
               'bio' => $this->bio,
               'province_id' => $this->province,
               'country' => $this->country,
               
               
           ]);
           //Este método resetea los inputs después de utilizarlos
           $this->url = '';
           $this->name = '';
           $this->profesion = '';
           $this->especializacion = '';
           $this->empleado = '';
           $this->cif = '';
           $this->town = '';
           $this->street = '';
           $this->number = '';
           $this->postcode = '';
           $this->phone = '';
           $this->email = '';
           $this->bio = '';
           $this->country = '';
           $this->province = '';
           $this->provinces = collect();
           $this->especializacions = collect();

           //resetea los imputs y me devuelve el botón de guardar
           $this->reset(['accion', 'form']);
           session()->flash('messageupdate', 'Los datos de la organización han sido actualizados correctamente.');
    }

    public function default(){
        //Este método resetea los inputs después de utilizarlos
        $this->provinces = collect();
        $this->especializacions = collect();
        //resetea los imputs y me devuelve el botón de guardar, este es el método del boton cancelar
        $this->reset(['url', 'name', 'profesion', 'especializacion', 'empleado', 'cif', 'town', 'street', 'number', 'postcode', 'phone', 'email', 'bio', 'country', 'province', 'accion', 'form']);

    }

    public function destroy(Organization $direccion){

        $direccion->delete();
        session()->flash('messagedestroy', 'Datos de la organización eliminados correctamente.');
    }
}
