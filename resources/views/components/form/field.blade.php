@props(['name', 'label', 'type' => 'text'])

<div>
    <label for="{{ $name }}" class="block text-sm font-medium">{{ $label }}</label>
    <input type="{{ $type }}" class="input" name="{{ $name }}" id="{{ $name }}" @if($type !== 'password') value="{{ old($name, "") }}" @endif {{ $attributes }}>

    @error($name)
        <p class="error">{{ $message }}</p>
    @enderror
</div>
