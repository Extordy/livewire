<div class="form-group">
    <label>Titulo</label>
    <!-- conentando a propiedad titulo podrio del componente-->
    <input type="text" class="form-control" wire:model='title'>
    <!-- mostrar mensaje de error-->
    @error('title')<span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Contenido</label>
    <!-- conentando a propiedad titulo podrio del componente-->
    <textarea class="form-control" wire:model='body'></textarea>
    <!-- mostrar mensaje de error-->
    @error('body')<span>{{ $message }}</span> @enderror
</div>