@props([
    'name', // sub item name
    'icon' => 'far fa-circle', // item icon
    'to' => '#', // url
    'isActive' => false, // item is active or not
])

<li class="nav-item">
    <a href="{{ $to }}" @class([
        'nav-link', // common classes
        'active' => $isActive, // current item is active or not
    ])>
        <i class="nav-icon {{ $icon }}"></i>
        <p>{{ $name }}</p>
    </a>
</li>
