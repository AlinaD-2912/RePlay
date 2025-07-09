<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Replay')</title>
    @include('partials.head-links')
</head>
<body>

@include('partials.header')

<main>
    @yield('content')
</main>

@include('partials.footer')

</body>
</html>
