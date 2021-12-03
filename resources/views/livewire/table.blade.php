<h2>Listado de Post</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Contenido</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>
                <!-- metodo editar dentro del boton tabajando con el id-->
                <button wire:click="edit({{ $post->id }})" class="btn btn-primary">
                    Editar
                </button>
            </td>
            <td>
                <!--metodo eliminar dentro del boton recibiendo el id de la variable post -->
                <button wire:click='destroy({{ $post->id }})' class="btn btn-danger">
                    Eliminar
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$posts->links()}}