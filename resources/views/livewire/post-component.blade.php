<div class="row">
    <!-- incluir vista a trabajar de carpeta y un a variable que invicara la vista -->
    <div class="col-sm-3">
        @include("livewire.$view")
    </div>
    <!--incruir seccion de tablaa -->
    <div class="col-sm-9">
        @include('livewire.table')
    </div>
</div>
