@props([
    'title',
    'icon',
    'key',
])

<div class="menu-item {{ explode('.', \Route::currentRouteName())[0] == $key ? 'menu-item--active' : '' }} ">
    <x-menu-item-spot />

    <x-menu-item-img :icon="$icon"  />

    <h3 class="menu-item__title">{{ $title }}</h3>
</div>
