<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use App\Models\Blogpost;
use App\Models\Categoriapost;
use App\Models\Profesion;
use App\Models\Especializacion;
use App\Models\Province;
use App\Models\Typepost;
use Livewire\WithPagination;

class BlogpostComponent extends Component
{

    use WithPagination;

    
    public $typepost_id;
    public $province_id;
    public $categoriapost_id;

    public function render()
    {
       
        $typeposts = Typepost::all();
        $provinces = Province::all();
        $categoriaposts = Categoriapost::all();

        $blogposts = Blogpost::where('status', 2)
                    
                    ->typepost($this->typepost_id)
                    ->province($this->province_id)
                    ->categoriapost($this->categoriapost_id)
                    ->latest('id')
                    ->paginate(8);

        return view('livewire.blog.blogpost-component', compact('blogposts', 'categoriaposts', 'typeposts', 'provinces'));
    }

    public function resetFilters(){
        $this->reset(['typepost_id', 'categoriapost_id', 'province_id']);
    }

    //Le paso la variable declarada en la ruta y le indico que pertenece al modelo Blogpost
    public function show(Blogpost $blogpost){

        $similares = Blogpost::where('categoriapost_id', $blogpost->categoriapost_id)
                   ->where('status', 2)
                   //metodo para que los post similares no incluyan al propio post 
                   ->where('id', '!=', $blogpost->id)
                   ->latest('id')
                   ->take(4)
                   ->get();

        return view('posts.show', compact('blogpost', 'similares'));
    }

    public function category(Categoriapost $categoriapost){

        $blogposts = $categoriapost->blogposts()->where('status', 2)->latest('id')->paginate(6);

        return view('posts.category', compact('blogposts', 'categoriapost'));
    }

    public function province(Province $province){

        $blogposts = $province->blogposts()->where('status', 2)->latest('id')->paginate(6);

        return view('posts.province', compact('blogposts', 'province'));
    }

    public function type(Typepost $typepost){

        $blogposts = $typepost->blogposts()->where('status', 2)->latest('id')->paginate(6);

        return view('posts.type', compact('blogposts', 'typepost'));
    }

    public function profesion(Profesion $profesion){
        
        $blogposts = $profesion->blogposts()->where('status', 2)->latest('id')->paginate(4);

        return view('posts.profesion', compact('blogposts', 'profesion'));
    }

    public function especializacion(Especializacion $especializacion){
        
        $blogposts = $especializacion->blogposts()->where('status', 2)->latest('id')->paginate(4);

        return view('posts.especializacion', compact('blogposts', 'especializacion'));
    }
}
