<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @hasSection('title')
        @yield('title') - Saaze
        @else
        Saaze
        @endif
    </title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.5/dist/base.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.5/dist/components.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.5/dist/utilities.min.css" />
</head>

<body>
    <header class="p-6 sm:px-10 sm:flex sm:justify-between sm:items-center mb-10 sm:mb-20">
        <div class="mb-4 sm:mb-0">
            <a href="/" class="text-xl text-purple-600">Saaze</a>
        </div>
        <nav>
            <ul class="flex">
                <li><a href="/" class="text-purple-600">Home</a></li>
                <li class="ml-10"><a href="/about" class="text-purple-600">About</a></li>
                <li class="ml-10"><a href="/blog" class="text-purple-600">Blog</a></li>
            </ul>
        </nav>
    </header>
    <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto px-6 my-10 sm:my-20">
        @yield('content')
    </div>
    <footer class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto px-6 my-20 sm:my-32">
        <p class="text-center text-gray-600 text-xs sm:text-base">Copyright &copy; {{ date('Y') }}</p>
    </footer>
</body>

</html>
