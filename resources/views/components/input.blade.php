<div class="mb-6">
    <label for="{{ $name }}" class="inline-block text-lg mb-2">{{ $label }}</label>
    <input
        type="{{ $type }}"
        class="border border-gray-200 rounded p-2 w-full"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ $value ?? '' }}"
        placeholder="{{ $placeholder ?? '' }}"
        {{ $attributes }}
    />
    @if ($error)
        <p class="text-red-500 text-xs mt-1">{{ $error }}</p>
    @endif
</div>
