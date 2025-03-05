@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'error-list']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
