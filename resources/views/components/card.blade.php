<div class="flex justify-evenly flex-row">
    <div class="max-w-sm rounded-xl overflow-hidden shadow-lg bg-neutral-900 w-[22rem]">
        <h1 class="text-4xl mb-2 font-ancient text-center">{{ $name }}</h1>
        <p>{{ $description }}</p>
        <a href="{{ route('detailSpell', ['thing'=>$url]) }}"><button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded my-5">Know
                more</button></a>
    </div>
</div>

{{-- <h1>laravel é mto bom</h1>
    <p>{{ $message }}</p>
    <button>{{ $button }}</button> --}}
