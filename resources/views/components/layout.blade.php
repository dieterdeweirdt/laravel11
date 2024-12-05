<!-- resources/views/components/layout.blade.php -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel site' }}</title>
</head>
<body>
    <header>
        <div class="brand">Laravel site</div>
        <x-forms.searchform buttonText="Filteren">
            Dit is de zoekopdracht
        </x-forms.searchform>
    </header>
    <main>
    {{ $slot }}
    </main>
    <footer>
        &copy; {{ date('Y') }} - Arteveldehogeschool
    </footer>
</body>
</html>