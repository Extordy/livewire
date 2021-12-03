<h2>Editar Post</h2>
<!--agregar el elemento de formulario-->
@include('livewire.form')
<!-- evento al voton para llamar al metodo store-->
<button wire:click='update' class="btn btn-primary">
    Actualizar
</button>

<button wire:click='default' class="btn btn-link">
    Cancelar
</button>