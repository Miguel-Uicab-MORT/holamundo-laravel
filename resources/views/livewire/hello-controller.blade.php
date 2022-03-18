<div>

    @if ($peoples == null)
        <div class="flex items-center justify-center">
            <h1 class="text-2xl font-bold text-white">
                Ingresa tu nombre
            </h1>
        </div>
        <div class="flex items-center justify-center mt-4">
            {!! Form::text('name', null, ['class' => 'text-lg rounded-md font-semibold text-center', 'wire:model' => 'name']) !!}
        </div>

        <div class="flex items-center justify-center mt-2">
            <x-jet-input-error for="name" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-jet-secondary-button wire:click="store">
                Continuar
            </x-jet-secondary-button>
        </div>
    @else
        <h1 class="text-2xl font-bold text-white">
            Hola
            @foreach ($peoples as $person)
                {{ $person->name }}
            @endforeach
        </h1>
        <div class="flex items-center justify-center mt-4">
            <x-jet-secondary-button wire:click="restart">
                Salir
            </x-jet-secondary-button>
        </div>
    @endif

</div>
