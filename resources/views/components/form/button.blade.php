@props([
    'type' => 'submit', // type: String
    'block' => false, // type: Boolean
    'primary' => false, // type: boolean
    'success' => false, // type: boolean
    'secondary' => false, // type: boolean
    'warning' => false, // type: boolean
    'danger' => false, // type: boolean
    'info' => false, // type: boolean
])

<button type="submit" @class([
    'btn', //
    'btn-block' => $block,
    'btn-primary' => $primary OR (
        !$primary AND
        !$success AND
        !$secondary AND
        !$warning AND
        !$danger AND
        !$info
    ),
    'btn-success' => $success,
    'btn-secondary' => $secondary,
    'btn-warning' => $warning,
    'btn-danger' => $danger,
    'btn-info' => $info,
])>
    {{ $slot }}
</button>
