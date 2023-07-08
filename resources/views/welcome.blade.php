@extends('inc.base')

@section('content')
    <div class="m-auto w-3/4 text-center">
        <h1 class=" text-7xl font-ancient mb-10">Choose a Category</h1>

        <div class="flex justify-evenly  flex-row">
            <div class="inline hover:scale-105 hover:transition">
                <a href="{{ route('home', ['type' => 'spells']) }}" class="hover:scale-150 hover:transition inline" >
                    <div
                        class="max-w-sm rounded overflow-hidden shadow-lg bg-gradient-to-b from-neutral-900 via-neutral-800 to-blue-500">
                        <img class="w-full" src="{{ asset('img/spell.png') }}">
                        <div class="px-6 py-4">
                            <div class=" text-5xl mb-2 font-ancient">Spells</div>
                        </div>
                </a>
            </div>
        </div>
        <div class="flex justify-evenly  flex-row">
            <div class="inline hover:scale-105 hover:transition">
                <a href="{{ route('home', ['type' => 'spells']) }}" class="hover:scale-150 hover:transition inline" >
                    <div
                        class="max-w-sm rounded overflow-hidden shadow-lg bg-gradient-to-b from-neutral-900 via-neutral-800 to-red-500">
                        <img class="w-100" src="{{ asset('img/weapon.png') }}" >
                        <div class="px-6 py-4">
                            <div class=" text-5xl mb-2 font-ancient">Weapons</div>
                        </div>
                </a>
            </div>
        </div>

    </div>
@endsection
{{-- <a href="{{ route('home', ['type'=>'spells']) }}"><button>aqui</button></a> --}}
