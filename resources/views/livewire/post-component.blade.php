<div class="row">
    <div class="col-sm-3">
        {{-- Utilizo comillas dobles para que funcione de manera dinámica --}}
        @include("livewire.$view")
    </div>
    <div class="col-sm-9">
        @include('livewire.table')
    </div>
</div>
