@props([
    'type' => 'submit', // type: String
    'block' => false, // type: Boolean
    'primary' => false, // type: boolean
])

<button type="submit" @class([
    'btn', //
    'btn-block' => $block,
    'btn-primary' => $primary,
])>
    {{ $slot }}
</button>
