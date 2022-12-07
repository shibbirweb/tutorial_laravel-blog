@props([
    'message',
    'type' => 'info', // ['success', 'info', 'error', 'warning', 'question']
    'confirmation' => false,
    'autoHide' => false,
    'timer' => 3000,
    'position' => 'top-end', // type: string //value: 'top', 'top-start', 'top-end', 'center', 'center-start', 'center-end', 'bottom', 'bottom-start', or 'bottom-end'
])

@push('script')
    <script type="module">
    $(document).ready(function() {

        const Toast = Swal.mixin({
            toast: true,
            position: '{{ $position }}',
            showConfirmButton: {{ $confirmation ? 'true' : 'false' }},
            timer: {{ $autoHide ? $timer : 'false' }},
        });

        Toast.fire({
            icon: '{{ $type }}',
            title: '{{ $message }}'
        })
    })
</script>
@endpush
