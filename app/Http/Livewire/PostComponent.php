<?php

namespace App\Http\Livewire;


use Livewire\Component;
//agregar Post
use App\Models\Post;
//paginacion
use Livewire\WithPagination;

class PostComponent extends Component
{
    //indicamos que se use la paginacion 
    use WithPagination;
    public function render()
    {
        //retorna la vistadel componente ordenande secendente id a los posts
        return view('livewire.post-component',[
            'posts' => Post::orderBy('id','desc')->paginate(8)
        ]);
    }

    //metodo para eliminar post
    public function destroy($id)
    {
        Post::destroy($id);
    }

}
