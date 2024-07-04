<div class="zeembibreadcrumbs text-sm">
    <ul>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 28 28" style="fill: #ffffff60;transform: ;msFilter:;"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"></path></svg>
        @foreach ($links as $link)
        <li>
            <a href="{{ $link['url'] }}">
              {{ $link['label'] }}
            </a>
        </li>
        @endforeach
    </ul>
</div>