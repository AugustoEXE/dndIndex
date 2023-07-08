@extends('inc.base')

@section('content')
    <div class="m-auto w-3/4 text-center flex flex-wrap gap-5">
        <div class="w-screen">
            <h1 class="font-ancient text-5xl">{{$spell->name}}</h1>
        </div>

        <div class="grid grid-cols-12 ">
            <div class="border col-span-2 row-span-3 text-5xl font-ancient py-3">Level</div>
            <div class="border col-span-10 row-span-3 text-5xl font-ancient py-3 {{$spell->level <= 3 ? 'text-green-600' : ($spell->level <= 6 ? 'text-yellow-500' : 'text-red-500');}}">{{$spell->level}}</div>
            <div class="border col-span-2">description</div>
            <div class="border col-span-10">{{$spell->desc[0]}}</div>
            <div class="border col-span-6">Components</div>
            <div class="border col-span-3">Range: </div>
            <div class="border col-span-3">{{$spell->range}}</div>


            @foreach ($spell->components as $component)
            @if ($component == 'V')
            <div class="border col-span-2 row-span-2">Verbal</div>
            @elseif ($component == 'S')
            <div class="border col-span-2 row-span-2" >Somatic</div>
            @else
            <div class="border col-span-2 row-span-2">Material: <b>{{$spell->material ?? ''}}</b></div>
            @endif
            @endforeach

            <div class="border col-span-2 row-span-2">On higher levels</div>
            <div class="border col-span-4 row-span-2">{{$spell->higher_level[0] ?? ''}}</div>



        </div>

    </div>
@endsection
