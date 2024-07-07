<div class="my-3 p-3 rounded-md bg-white bg-opacity-10 border border-white border-opacity-10">
    <div class="flex">
        {{-- Avatar --}}
        <div>
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
        </div>
        <div class="flex-1">
            <h3 class="inline-block ml-3 text-slate-100 font-bold">
                <span>{{ $name }}</span> <br>
                <span class="text-slate-300 text-sm font-normal">{{ $date }}</span>
            </h3>
            {{-- Message Content --}}
            <p class="py-3 text-slate-100">
                @if ($reply)
                <span class="inline-block text-sm text-slate-300 mb-3">

                    <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(203 213 225);transform: ;msFilter:;"><path d="M10 11h6v7h2v-8a1 1 0 0 0-1-1h-7V6l-5 4 5 4v-3z"></path></svg>

                    replied to
                    <a href="#" class="text-pre-yellow text-bold hover:underline">
                    @Mg Mg
                    </a>
                </span>
                 <br>
                @endif
                {{ $message }}
            </p>
            <div class="py-2 flex justify-between items-center">
                <div>
                    <a href="#" class="text-sm text-pre-yellow opacity-80 hover:opacity-90 hover:underline">
                        20 replies >
                    </a>
                </div>
                <div>
                    <x-like-button :count="'100'" class="float-right" />
                    <x-like-button :count="'5'" :rotate="true"/>
                </div>
        
            </div>
        </div>
    </div>

    {{ $slot }}
</div>