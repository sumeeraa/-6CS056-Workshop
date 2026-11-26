@props([
    'name',
    'label',
    'type' => 'text',
    'value' => null,
    'required' => false
])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        class="form-control"
        @required($required)
        {{ $attributes }}
    >

    @error($name)
        <p class="error">{{ $message }}</p>
    @enderror
</div>
