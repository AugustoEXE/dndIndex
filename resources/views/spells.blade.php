@extends('inc.base')

@section('content')
    <div class="m-auto w-3/4 text-center flex flex-wrap gap-5">

        <div class="w-screen">
            <h1 class="font-ancient text-5xl">All the spells are Here. </h1>
            <h2 class="font-ancient text-4xl my-3">Take a look:</h2>
        </div>

        @foreach ($data as $spell)
            <x-card name="{{$spell->name}}" description="descrição" url="{{$spell->url}}"> </x-card>
        @endforeach
    </div>
@endsection
