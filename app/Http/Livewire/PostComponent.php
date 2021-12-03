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
    //crear propiedades a utilizar
    public $post_id,$title,$body;
    //añadir la vista que recivira la vista
    public $view = 'create';

    public function render()
    {
        //retorna la vistadel componente ordenande secendente id a los posts
        return view('livewire.post-component',[
            'posts' => Post::orderBy('id','desc')->paginate(8)
        ]);
    }
    //metodo store haciendo validacion de que es requerido el title y body
    public function store()
    {
        //validacion a que tengan contenido 
        $this->validate(['title' => 'required', 'body' => 'required']);
        //crear post utilizando los siguientes valires utilizando lo que hay en las propiedades
        $post = Post::create([
            'title' => $this->title,
            'body' => $this->body
        ]);
        //cuando se guarde que ejecute el metodo editar
        $this->edit($post->id);
    }
    //metodo para eliminar post
    public function destroy($id)
    {
        Post::destroy($id);
    }
    //metodo para editar post
    public function edit($id)
    {
        //buscar un post apartit de id
        $post = Post::find($id);
        //obtener id del post
        $this->post_id = $post->id;
        //variables igual a lo consultado
        $this->title = $post->title;
        $this->body = $post->body;
        //que vista ejecuatar
        $this->view = 'edit';
    }
    //metodo para actualizar post
    public function update()
    {
        //validacion a que tengan contenido 
        $this->validate(['title' => 'required', 'body' => 'required']);
        //buscar el post por id
        $post = Post::find($this->post_id);
        //actualizar los datos 
        $post->update([
            'title' => $this->title,
            'body' => $this->body
        ]);
        //que todo quede en blanco
        $this->default();
    }
    //metodo para especificar el predeterminado del formunalir
    public function default()
    {
        //elementos vacios
        $this->title = '';
        $this->body = '';
        //vista predeterminada
        $this->view = 'create';
    }
}
