<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudio;
use Livewire\WithPagination;

class EstudioComponent extends Component
{
    use WithPagination;

    public $estudio, $email, $centro, $curso, $fechaIni, $fechaFin, $estudio_id;
    public $isOpen = 0;
    public $isOpenVeri = 0;

    public function render()
    {
        /*$estudios = Estudio::all();*/
        $estudios = Estudio::with('user')->latest('id')->paginate(2);

        return view('livewire.estudios.estudio-component', compact('estudios'));
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal(){
        $this->isOpen = true;
    }

    public function closeModal(){
        $this->isOpen = false;
    }

    public function resetInputFields(){
        $this->centro = '';
        $this->curso = '';
        $this->fechaIni = '';
        $this->fechaFin = '';
        $this->estudio_id = '';
    }

    public function store(){
        $this->validate([

            'centro' => 'required',
            'curso' => 'required',
            'fechaIni' => 'required',
            'fechaFin' => 'required',

        ]);

        Estudio::updateOrCreate(['id' => $this->estudio_id] + ['user_id' => auth()->id()], [
             'centro' => $this->centro,
             'curso' => $this->curso,
             'fechaIni' => $this->fechaIni,
             'fechaFin' => $this->fechaFin,
        ]);

        session()->flash('message', $this->estudio_id ? 'El curso a sido actualizado correctamente.' : 'Se a creado un nuevo curso.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
        {
            $Estudio = Estudio::findOrFail($id);
            $this->estudio_id = $id;
            $this->centro = $Estudio->centro;
            $this->curso = $Estudio->curso;
            $this->fechaIni = $Estudio->fechaIni;
            $this->fechaFin = $Estudio->fechaFin;

            $this->openModal();
        }

        public function delete($id){

            Estudio::find($id)->delete();
            session()->flash('message', 'Curso eliminado correctamente.');
        }

        /*Lo utilizo para enviar los emails de verificacion, no tocar*/
        public function verificate(Estudio $estudio){
            

            $this->centro = $estudio->centro;
            $this->email = $estudio->email;
            $this->curso = $estudio->curso;
            $this->fechaIni = $estudio->fechaIni;
            $this->fechaFin = $estudio->fechaFin;

            $this->openModalVerificate();
            $this->resetInputFieldsVerificar();
            

            session()->flash('message', 'Se a solicitado la verificación correctamente.');
        }

        public function openModalVerificate(){
            $this->isOpenVeri = true;
        }
    
        public function closeModalVerificate(){
            $this->isOpenVeri = false;
            
        }

        public function resetInputFieldsVerificar(){
            $this->email = '';
            
        }

        public function status(Estudio $estudio){

            $estudio->status = 2;
            $estudio->save();
           
            return redirect()->route('livewire.estudios.estudio-component', $estudio);
        }

        public function statusBack(Estudio $estudio){

            $estudio->status = 2;
            $estudio->save();
    
            //Resetea las observaciones cuando vuelvo a solicitar la revisión del curso
            $estudio->observationEstudio->delete();
           
            return redirect()->route('livewire.estudios.estudio-component', $estudio);
        }

        public function statusDeny(Estudio $estudio){

            $estudio->status = 4;
            $estudio->save();
           
            return redirect()->route('livewire.estudios.estudio-component', $estudio);
        }

        public function observation(Estudio $estudio){

            return view('livewire.estudios.observation', compact('estudio'));
        }
}
