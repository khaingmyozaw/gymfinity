<div class="my-3 p-3 rounded-md bg-white bg-opacity-10 border border-white border-opacity-10">
    <div class="flex">
         {{-- Avatar --}}
        <div class="zeembiavatar zeembiplaceholder">
            <div class="bg-neutral text-neutral-content w-12 rounded-full">
                @php
                    $fname = substr($name, 0, 1);
                @endphp
                @if($avatar == null)
                <span class="text-2xl">{{ strtoupper($fname) }}</span>
                @else 
                <img src="{{ config('app.url') }}/storage/{{ $avatar }}" alt="">
                @endif
              
            </div>
        </div>
        <h3 class="inline-block ml-3 text-slate-100 font-bold">
            <span>{{ $name }}</span> <br>
            <span class="text-slate-300 text-sm font-normal">{{ $date }}</span>
        </h3>
    </div>
    {{-- Message Content --}}
    <p class="pl-5 py-3 text-slate-100">
        {{ $message }}
    </p>
    <hr class="opacity-30 mt-5">
    <div class="py-2 flex justify-between items-center">
        <div>
            {{ $slot }}
        </div>
        <div>
            <x-like-button :count="'100'" class="float-right" />
            <x-like-button :count="'5'" :rotate="true"/>
        </div>

    </div>
</div>