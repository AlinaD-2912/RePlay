<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Backoffice')</title>
    @include('partials.head-links')
</head>
<body>

@include('partials.header')

<main>
    @yield('contenu')
</main>

@include('partials.footer')

</body>
</html>
