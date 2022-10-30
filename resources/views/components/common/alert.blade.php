@props([
'message',
'type' => 'info'
])

<div @class([ 'alert alert-dismissible fade show' , 'alert-danger'=> $type === 'error',
    'alert-' . $type => $type != 'error',
    ])
    role="alert">
    <strong>{{ ucfirst($type) }}!</strong> {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
