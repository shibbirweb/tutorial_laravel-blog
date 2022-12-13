 @props([
    'name', // item name
    'icon' => '', // item icon
    'to' => '#', // link url
    'isActive' => false, // current menu is active or not
])

 <li @class([
     'nav-item', // common class
     'menu-open' => $isActive,
 ])>
     <a href="{{ $to }}" @class([
         'nav-link', // common class
         'active' => $isActive,
     ])>
         <i class="nav-icon fas {{ $icon }}"></i>
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
