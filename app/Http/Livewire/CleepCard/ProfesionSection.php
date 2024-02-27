<?php

namespace App\Http\Livewire\CleepCard;

use App\Models\Curriculo;
use Livewire\Component;
use App\Models\Especializacion;
use App\Models\Profesion;


class ProfesionSection extends Component
{
    public $accion = "store";
    public $form = "ver";

    public $profesions;
    public $especializacions;

    // profesiones es para actualizar solo uno 
    public $sector, $profesiones, $profesion, $especializacion, $curriculo_id;
    

    public function mount()
    {
        $this->profesiones = new Curriculo();
        $this->profesions = Profesion::all();
        $this->especializacions = collect();
    }
    public function render()

    {
        $curriculos = Curriculo::where('user_id', auth()->user()->id)
        ->latest()
        ->get();

        return view('livewire.cleep-card.profesion-section', compact('curriculos'));
    }

    //Este es el método que hace dinámicos los selects de profesion y especialización
    public function updatedProfesion($value)
    {
        $this->especializacions = Especializacion::where('profesion_id', $value)->get();
        $this->especializacion = $this->especializacions->first()->id ?? null;
    }

    public function storeCurriculo()
    {

        //Este método comprueba que se rellenen estos campos
        $this->validate([
            'sector' => 'required',
            'profesion' => 'required',
            'especializacion' => 'required',
        ]);

        //Este método guarda los datos en la bbdd
        Curriculo::create([
            
            'sector' => $this->sector,
            'especializacion_id' => $this->especializacion,
            'user_id' => auth()->user()->id
            
        ]);

        
        $this->especializacions = collect();
        //resetea los imputs y me devuelve el botón de guardar, este es el método del boton cancelar
        $this->reset(['sector', 'profesion', 'especializacion']);

        session()->flash('message', 'Datos de la profesión guardados correctamente.');
    }

    public function edit(Curriculo $curriculo){

        $this->resetValidation();
       
        $this->profesiones = $curriculo;
        $this->sector = $curriculo->sector;
        $this->especializacion = $curriculo->especializacion->id;
        $this->profesion = $curriculo->especializacion->profesion->name;
        $this->curriculo_id = $curriculo->id;

     
 
    }

    public function update(){

        //Este método comprueba que se rellenen estos campos
        $this->validate([
            
            'sector' => 'required',
            'profesion' => 'required',
            'especializacion' => 'required',
            
        ]);

        $this->profesiones->save();
        $this->profesiones = new Curriculo();

        //Este método me trae el objeto para ser actualizado
           $curriculo = Curriculo::find($this->curriculo_id);

        //Este método actualiza el objeto 
           $curriculo->update([
               
               'sector' => $this->sector,
               'profesion' => $this->profesion,
               'especializacion_id' => $this->especializacion,
               
           ]);
           //Este método resetea los inputs después de utilizarlos
           $this->sector = '';
           $this->profesion = '';
           $this->especializacion = '';
           $this->especializacions = collect();

           $this->reset(['accion', 'form']);

           session()->flash('messageupdate', 'Los datos de la profesión han sido actualizados correctamente.');
    }

    public function default(){
        
        $this->especializacions = collect();
        $this->reset(['sector', 'profesion', 'especializacion', 'accion', 'form']);

    }

    public function cancel(){
        $this->profesiones = new Curriculo();
    }

    public function destroy(Curriculo $curriculo){

        $curriculo->delete();
        session()->flash('messagedestroy', 'Datos de la profesión eliminados correctamente.');
    }

    

    

    

  

}
