@props(['padding' => 'p-6'])

<div {{$attributes->merge(['class' => "bg-gray-50 border border-gray-200 rounded $padding"])}} >
    {{$slot}}
</div>
