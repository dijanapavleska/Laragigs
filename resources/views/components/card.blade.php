<div {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6']) }}>

    {{-- surround something with the component tags --}}
    {{ $slot }}

</div>