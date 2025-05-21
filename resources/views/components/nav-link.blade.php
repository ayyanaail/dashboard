@props([
    'href' => '#',
    'label' => '',
    'icon' => null,
    'badge' => null,
    'active' => false,
])

<a {{ $attributes->merge(['href' => $href, 'class' => 'group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold ' . ($active ? 'bg-gray-50 text-indigo-600 dark:bg-gray-700 dark:text-indigo-400' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600 dark:text-gray-200 dark:hover:bg-gray-700 dark:hover:text-indigo-400')]) }}>
    @if ($icon)
        <svg class="size-6 shrink-0 {{ $active ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-400 group-hover:text-indigo-600 dark:text-gray-500 dark:group-hover:text-indigo-400' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            {!! $icon !!}
        </svg>
    @elseif ($badge)
        <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-500 dark:group-hover:border-indigo-400 dark:group-hover:text-indigo-400">
            {{ $badge }}
        </span>
    @endif
    <span class="truncate">{{ $label }}</span>
    {{ $slot }}
</a>
