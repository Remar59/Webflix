<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Document</title>
</head>
<body>

    <nav class="bg-gray-800 border-gray-200 dark:bg-gray-900 text-white">
        <div class="flex flex-wrap justify-between mx-auto max-w-screen-xl p-8">
        <a href="/">Accueil</a>
        <a href="/categories">Catégories</a>
        <a href="/movies">Films</a>
        <a href="/fiorella">Présentation</a>
        <a href="/a-propos">A propos</a>
        </div>

    </nav>

    @yield('content')

    <footer class="bg-gray-800 border-gray-200 dark:bg-gray-900 text-white my-12 p-4 px-14">
        webflix &copy; {{ date('Y') }}
    </footer>
</body>
</html>