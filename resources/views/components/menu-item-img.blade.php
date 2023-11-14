@props([
    'icon',
])

<svg class="menu-item__img" xmlns="http://www.w3.org/2000/svg" width="{{ $icon['sizeViewBox']['w'] }}" height="{{ $icon['sizeViewBox']['h'] }}" viewBox="0 0 {{ $icon['sizeViewBox']['w'] }} {{ $icon['sizeViewBox']['h'] }}" fill="none">
    <g clip-path="url(#{{ $icon['clip'] }})">
        {!! $icon['path'] !!}
    </g>
    <defs>
        <clipPath id="{{ $icon['clip'] }}">
            <rect width="{{ $icon['sizeRect']['w'] }}" height="{{ $icon['sizeRect']['h'] }}" fill="white" transform="translate({{ $icon['translate']['x'] }} {{ $icon['translate']['y'] }})"/>
        </clipPath>
    </defs>
</svg>
