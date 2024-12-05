@php
    print_r($options);
    
    @endphp
    <select name="{{ $name ?? ''}}">
    <option value="{{ $defaultValue ?? $defaultText ?? ''}}">{{ $defaultText ?? $defaultValue ?? ''}}</option>
    
    @foreach ($options as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
</select>