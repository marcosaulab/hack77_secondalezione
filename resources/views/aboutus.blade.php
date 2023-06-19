<x-layout>

    <x-slot name="titlePage">
            About Us
    </x-slot>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>About Us</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row  my-5">
            @foreach ($staff as $person)
            <div class="col-12 col-md-3">
                <x-aboutuscard personName="{{ $person['name'] }}" personRole="{{ $person['role'] }}" />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
