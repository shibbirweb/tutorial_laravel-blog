@props([
    'name', // type: String; value: any
    'placeholder' => Str::of($name)
        ->replace('_', ' ')
        ->title(), // type: String, value: Any
    'icon' => '', // type: string; value: icon css's value
    'icon_position' => 'end', // type: String; value: start|end
    'value' => '', // type: String
])

<div>
    <div class="input-group @error($name) is-invalid @enderror">

        @if ($icon_position === 'start')
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <span class="{{ $icon }}"></span>
                </div>
            </div>

            <input class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
                value="{{ old($name, $value) }}" placeholder="{{ $placeholder }}" {{ $attributes }}>
        @else
            <input class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
                value="{{ old($name, $value) }}" placeholder="{{ $placeholder }}" {{ $attributes }}>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="{{ $icon }}"></span>
                </div>
            </div>
        @endif
    </div>
    @error($name)
        <div class="error invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
