@props([
    'name',
    'type' => 'text',
    'placeholder' => Str::title($name),
    'icon' => "",
])

<div class="input-group @error($name) is-invalid @enderror">
    <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
        value="{{ old($name) }}" placeholder="{{ $placeholder }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="{{ $icon }}"></span>
        </div>
    </div>
</div>
@error($name)
    <div class="error invalid-feedback">
        {{ $message }}
    </div>
@enderror
