@props([
    'date', 'profile', 'name', 'message', 'position'
])
{{-- Cards --}}
<div class="shrink-0 w-full sm:w-3/4 md:w-2/5 h-auto py-5 px-5 rounded bg-pre-extra-green bg-opacity-90 border border-slate-300 border-opacity-30 shadow-md spin-items" style="--position: {{ $position }};">
    {{-- top section --}}
    <div class="h-auto w-full flex gap-4">
        {{-- Avatar --}}
        <div class="w-12 h-12 zeembiavatar"> 
            <div class="ring-primary ring-offset-base-100 w-24 rounded-full ring ring-offset-2">
               <div class="text-3xl font-bold text-opacity-90 w-full h-full rounded-full bg-pre-dark-green flex items-center justify-center">
                    {{ $profile }}
               </div>
            </div>
        </div>
        <div>
            <p class="text-xs text-slate-400">
                {{ $date }}
            </p>
            <h4 class="text-slate-200 text-xl font-bold">
                {{ $name }}
            </h4>
            <x-rating-component :type="false"/>
        </div>
    </div>
    {{-- bottom section --}}
    <div class="w-full h-24 mt-3 text-sm overflow-hidden truncate-4">
        {{ $message }}
    </div>
    <div class="w-full h-auto mt-1">
        <button class="w-auto px-3 py-1 rounded bg-slate-500 bg-opacity-30 float-right text-slate-300 hover:bg-opacity-50">No</button>
        <button class="w-auto px-3 py-1 me-2 rounded bg-green-500 float-right text-slate-100 bg-opacity-80 hover:bg-opacity-100">Yes</button>
    </div>
</div>