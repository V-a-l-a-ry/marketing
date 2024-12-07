@props(['type'])

<div class="px-4 py-3 rounded border-l-4" :class="{
    'bg-green-100 border-green-400 text-green-700': '{{ $type }}' === 'success',
    'bg-red-100 border-red-400 text-red-700': '{{ $type }}' === 'error',
}">
    {{ $slot }}
</div>
