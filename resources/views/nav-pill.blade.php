<li class="nav-item">
    <a class="nav-link {{$active}}" href="{{url($url)}}">
        @if ($underscore == '1')<u>{{ $title }}</u>
        @else
            {{ $title }}
        @endif
            <span class="sr-only"></span></a>
</li>
