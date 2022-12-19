 @props([
    'name', // item name
    'icon' => $slot->isNotEmpty() ? '' : 'far fa-circle', // item icon
    'to' => '#', // link url
    'isActive' => false, // current menu is active or not
])

 {{-- @throw(empty($name), 'Name props is required.') --}}

 @empty($name)
    @php
        throw new Exception('Name prop is required');
    @endphp
@endempty

 {{-- @throw(['Name prop is required']) --}}

 <li @class([
     'nav-item', // common class
     'menu-open' => $isActive && $slot->isNotEmpty(),
 ])>
     <a href="{{ $to }}" @class([
         'nav-link', // common class
         'active' => $isActive,
     ])>
         <i class="nav-icon {{ $icon }}"></i>
         <p>
             {{ $name }}
             @if ($slot->isNotEmpty())
                 <i class="right fas fa-angle-left"></i>
             @endif
         </p>
     </a>

     @if ($slot->isNotEmpty())
         <ul class="nav nav-treeview">
             {{ $slot }}
         </ul>
     @endif
 </li>
