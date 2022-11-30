@props([
    'name' => config('app.name'),
])

@if (count(explode(' ', $name)) > 1)
    <b>{{ Str::beforeLast($name, ' ') }}</b>{{ Str::of($name)->afterLast(' ')->upper() }}
@else
    <b>{{ $name }}</b>
@endif
