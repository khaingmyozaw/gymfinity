<div class="zeembibreadcrumbs text-sm">
    <ul>
        @foreach ($links as $link)
        <li>
            <a href="{{ $link['url'] }}">
              {{-- @foreach ($icons as $icon) --}}
                  {!! $icon !!}
              {{-- @endforeach --}}
              {{ $link['label'] }}
            </a>
        </li>
        @endforeach
    </ul>
</div>