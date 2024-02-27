<?php

namespace App\Http\Livewire\CleepCard;

use Livewire\Component;
use App\Models\Curriculo;
use App\Models\Expelabor;
use App\Models\CategoriaProfesional;
use App\Models\Jornada;
use App\Models\HorasExtra;
use App\Models\Province;
use App\Models\Country;

class CurriculoExpelabors extends Component
{
    public $countries;
    public $provinces;//provinces es el select relacionado al modelo que estoy utilizando (Address)

    public $curriculo, $expelabor, $cat_profes, $country, $province, $jornadas, $hora_extras, $organization, $description, $salary, $fechaIni, $fechaFin, $cat_prof_id, $jornada_id, $hora_extra_id;

    protected $rules = [
        'expelabor.organization' => 'required',
        'expelabor.description' => 'required',
        'expelabor.salary' => 'required',
        'expelabor.cat_prof_id' => 'required',
        'expelabor.jornada_id' => 'required',
        'expelabor.hora_extra_id' => 'required',
        'expelabor.fechaIni' => 'required',
        'expelabor.fechaFin' => 'required',
        'province' => 'required',
        'country' => 'required',
    ];

    public function mount(Curriculo $curriculo){
        $this->curriculo = $curriculo;
        $this->cat_profes = CategoriaProfesional::all();
        $this->jornadas = Jornada::all();
        $this->hora_extras = HorasExtra::all();
        $this->expelabor = new Expelabor();
        $this->countries = Country::all();
        $this->provinces = collect();
    }

    public function render()
    {
        return view('livewire.cleep-card.curriculo-expelabors');
    }

    //Este es el método que hace dinámicos los selects
    public function updatedCountry($value)
    {
        $this->provinces = Province::where('country_id', $value)->get();
        $this->province = $this->provinces->first()->id ?? null;
    }

    public function store(){
        $rules = [
            'organization' => 'required',
            'description' => 'required',
            'salary' => 'required',
            'cat_prof_id' => 'required',
            'jornada_id' => 'required',
            'hora_extra_id' => 'required',
            'fechaIni' => 'required',
            'fechaFin' => 'required',
            'province' => 'required',
            'country' => 'required',
        ];

        $this->validate($rules);
        Expelabor::create([
            'organization' => $this->organization,
            'description' => $this->description,
            'salary' => $this->salary,
            'cat_prof_id' => $this->cat_prof_id,
            'jornada_id' => $this->jornada_id,
            'hora_extra_id' => $this->hora_extra_id,
            'fechaIni' => $this->fechaIni,
            'fechaFin' => $this->fechaFin,
            'province_id' => $this->province,
            'curriculo_id' => $this->curriculo->id,
        ]);

        //Este método resetea los inputs después de utilizarlos
        $this->provinces = collect();
        
        $this->reset(['organization', 'description','country', 'province', 'salary', 'cat_prof_id', 'jornada_id', 'hora_extra_id', 'fechaIni', 'fechaFin']);
        $this->curriculo = Curriculo::find($this->curriculo->id);
    }

    public function edit(Expelabor $expelabor){
        $this->resetValidation();
        $this->expelabor = $expelabor;
    }

    public function update(){
        $this->validate();

        $this->expelabor->save();
        $this->expelabor = new Expelabor();

        $this->curriculo = Curriculo::find($this->curriculo->id);
    }

    public function cancel(){
        $this->expelabor = new Expelabor();
    }

    public function destroy(Expelabor $expelabor){
        $expelabor->delete();
        $this->curriculo = Curriculo::find($this->curriculo->id);
    }

    /*Lo utilizo para enviar los emails de verificacion, no tocar*/
    public function verificate(Expelabor $item){
            
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
