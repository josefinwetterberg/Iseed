@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'dropdown-content'])

@php
$alignmentClasses = match ($align) {
    'left' => 'dropdown-align-left',
    'top' => 'dropdown-align-top',
    default => 'dropdown-align-right',
};

$width = match ($width) {
    '48' => 'dropdown-width-48',
    default => $width,
};
@endphp

<div class="dropdown" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="dropdown-enter"
            x-transition:enter-start="dropdown-enter-start"
            x-transition:enter-end="dropdown-enter-end"
            x-transition:leave="dropdown-leave"
            x-transition:leave-start="dropdown-leave-start"
            x-transition:leave-end="dropdown-leave-end"
            class="dropdown-menu {{ $width }} {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="dropdown-container {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
