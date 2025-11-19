@props([
    'name' => '',
    'type' => 'text',
    'placeholder' => '',
    'value' => '',
    'id' => null,
])

<div class="flex flex-col gap-1">
    {{ $slot }}
    <input id="{{ $id ?? $name }}" type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}" @class([
            'input bg-base-100 font-medium w-full rounded-none',
            'input-error' => $errors->has($name),
            'border-0' => !$errors->has($name),
        ]) {{ $attributes }}>

    @error($name)
        <span class="text-error font-medium text-xs mt-1 flex">

            {{ $message }}</span>
    @enderror
</div>
