<?php

namespace App\Http\Livewire\CleepCard;

use App\Models\Category;
use Livewire\Component;
use App\Models\Curriculo;
use App\Models\Study;
// Estos son para enviar mails
use Illuminate\Support\Facades\Mail;
use App\Mail\CurriculoEstudioMail;

class CurriculoEstudio extends Component
{
    public $curriculo, $email, $study, $categories, $curso, $organization, $fechaIni, $fechaFin, $category_id = 1;

    protected $rules = [
        'study.curso' => 'required',
        'study.category_id' => 'required',
        'study.organization' => 'required',
        'study.fechaIni' => 'required',
        'study.fechaFin' => 'required',
    ];

    public function mount(Curriculo $curriculo){
        $this->curriculo = $curriculo;
        $this->categories = Category::all();
        $this->study = new Study();
    }

    public function render()
    {
        return view('livewire.cleep-card.curriculo-estudio');
    }

    public function store(){
        $rules = [
            'curso' => 'required',
            'category_id' => 'required',
            'organization' => 'required',
            'fechaIni' => 'required',
            'fechaFin' => 'required',
        ];

        $this->validate($rules);
        Study::create([
            'curso' => $this->curso,
            'category_id' => $this->category_id,
            'organization' => $this->organization,
            'fechaIni' => $this->fechaIni,
            'fechaFin' => $this->fechaFin,
            'curriculo_id' => $this->curriculo->id,
        ]);
        
        $this->reset(['curso', 'category_id', 'organization', 'fechaIni', 'fechaFin']);
        $this->curriculo = Curriculo::find($this->curriculo->id);
    }

    public function edit(Study $study){
        $this->resetValidation();
        $this->study = $study;
    }

    public function update(){
        $this->validate();

        $this->study->save();
        $this->study = new Study();

        $this->curriculo = Curriculo::find($this->curriculo->id);
    }

    public function cancel(){
        $this->study = new Study();
    }

    public function destroy(Study $study){
        $study->delete();
        $this->curriculo = Curriculo::find($this->curriculo->id);
    }

    /*Lo utilizo para enviar los emails de verificacion, no tocar*/
    public function verificate(Study $item){
            
        // $this->organization = $item->organization;
        // $this->email = $item->email;
        // $this->curso = $item->curso;
        // $this->fechaIni = $item->fechaIni;
        // $this->fechaFin = $item->fechaFin;

        //Enviar el correo
        // $mail = new CurriculoEstudioMail();

        // Mail::to($mail)->send($mail);

        
        session()->flash('message', 'Se a solicitado la verificación correctamente.');
    }
}


