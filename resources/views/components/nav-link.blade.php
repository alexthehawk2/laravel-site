@props(['active' => false])
<a {{ $attributes }} class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white': 'rounded-md px-3 py-2 text-sm font-medium text-white' }}" aria-current="{{ $active ? 'page': 'false' }}">
    {{ $slot }}
</a>
