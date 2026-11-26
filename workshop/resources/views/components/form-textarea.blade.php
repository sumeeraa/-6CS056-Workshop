@props([
    'name',
    'label',
    'value' => null,
    'required' => false
])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        class="form-control"
        @required($required)
        {{ $attributes }}
    >{{ old($name, $value) }}</textarea>

    @error($name)
        <p class="error">{{ $message }}</p>
    @enderror
</div>
