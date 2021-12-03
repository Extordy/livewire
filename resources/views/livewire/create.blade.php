<h2>Nuevo Post</h2>
<!--agregar el elemento de formulario-->
@include('livewire.form')
<!-- evento al voton para llamar al metodo store-->
<button wire:click='store' class="btn btn-primary">
    Guardar
</button>