@props([
    'type' => 'text',
    'name' => '', // type: String; value: any
    'placeholder' => Str::of($name ?? '')
        ->replace('_', ' ')
        ->title(), // type: String, value: Any
    'value' => '', // type: String
    'class' => '',
])

@propsValidation([
empty($name) => 'Name prop is required',
])
@if ($type === 'textarea')
    <textarea class="form-control @error('content') is-invalid @enderror {{ $class }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}" {{ $attributes }}>{{ $value }}</textarea>
@else
    <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror {{ $class }}"
        name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}" {{ $attributes }} />
@endif

@error($name)
    <div class="error invalid-feedback">
        {{ $message }}
    </div>
@enderror
