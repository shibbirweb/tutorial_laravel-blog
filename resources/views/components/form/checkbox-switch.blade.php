@props([
    'name' => '',
    'offText' => 'No',
    'onText' => 'Yes',
    'onColor' => 'success',
    'offColor' => 'danger',
    'value' => '1',
])

@propsValidation([
empty($name) => 'Name prop is required',
])

<input type="checkbox" name="{{ $name }}" data-on-text="{{ $onText }}" data-off-text="{{ $offText }}"
    value="{{ $value }}" data-bootstrap-switch data-off-color="{{ $offColor }}"
    data-on-color="{{ $onColor }}" {{ $attributes }} data-wrapper-class="@error($name) is-invalid @enderror" />

@error($name)
    <div class="error invalid-feedback">
        {{ $message }}
    </div>
@enderror

@pushOnce('script')
    @vite([
        'resources/assets/template/plugins/bootstrap-switch/js/bootstrap-switch.min.js', // Bootstrap Switch
    ])

    <script type="module">
    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
</script>
@endpushOnce
