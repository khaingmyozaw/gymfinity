<label for="{{ $id }}" class="w-full md:w-4/5 flex p-3 rounded border border-slate-500 border-opacity-30 flex">

    {{ $slot }}

    <input type="{{ $type }}" name="{{ $id }}" id="{{ $id }}" class="w-full ms-2 bg-slate-100 outline-none text-slate-700" placeholder="{{ $placeholder }}">

</label>