@php
    $colors = ['r' => 'Rood', 'g' => 'Groen', 'b' => 'Blue'];
@endphp
<form>
    <input type="text" name="{{ $slot }}">
    <button type="submit">{{ $buttonText ?? 'Zoeken'}}</button>
    <x-forms.select name="colors" defaultValue="test" :options="$colors"></x-forms.select>
</form>