<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Midori - Japanese Culture Shop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body class="bg-stone-50">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-stone-200">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/" class="text-3xl font-bold text-emerald-700" style="font-family: 'Noto Serif JP', serif;">
                緑 <span class="text-stone-800">Midori</span>
            </a>
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" class="px-5 py-2 text-stone-700 hover:text-emerald-700 font-medium transition-colors">
                Login
                </a>
                <a href="{{ route('register') }}" class="px-5 py-2 bg-emerald-600 text-white rounded-full hover:bg-emerald-700 font-medium transition-colors shadow-lg shadow-emerald-600/20">
                Register
                </a>
            </div>
        </div>
    </nav>

    <section class="min-h-screen flex items-center justify-center relative overflow-hidden pt-20">
        
        <div class="absolute top-20 left-10 text-6xl opacity-20">🌸</div>
        <div class="absolute top-40 right-20 text-4xl opacity-30">🌸</div>
        <div class="absolute bottom-40 left-20 text-5xl opacity-25">🍃</div>
        <div class="absolute bottom-20 right-10 text-6xl opacity-20">🌸</div>

        <div class="relative z-10 text-center px-6 max-w-4xl mx-auto">
            <div class="mb-6">
                <span class="text-7xl">🏯</span>
            </div>
            <h1 class="text-6xl md:text-7xl font-bold text-stone-800 mb-4" style="font-family: 'Noto Serif JP', serif;">
                緑 <span class="text-emerald-600">Midori</span>
            </h1>
            <p class="text-xl text-stone-600 mb-2" style="font-family: 'Noto Serif JP', serif;">
            日本文化の美しさを世界へ
            </p>
            <p class="text-lg text-stone-500 mb-10 max-w-2xl mx-auto">
            A quiet journey into Japanese culture.
            </p>
            <a href="{{ route('register') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-emerald-600 to-teal-600 text-white text-lg font-semibold rounded-full hover:from-emerald-700 hover:to-teal-700 transition-all shadow-xl shadow-emerald-600/30 transform hover:scale-105">
                Start Your Journey
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-stone-800 mb-12" style="font-family: 'Noto Serif JP', serif;">
                Explore Our Collections
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="group relative bg-gradient-to-br from-rose-50 to-rose-100 rounded-2xl p-8 text-center hover:shadow-xl transition-all cursor-pointer border border-rose-200">
                    <span class="text-5xl mb-4 block">🍵</span>
                    <h3 class="text-xl font-semibold text-stone-800 mb-2">Matcha Sets</h3>
                </div>
                <div class="group relative bg-gradient-to-br from-amber-50 to-amber-100 rounded-2xl p-8 text-center hover:shadow-xl transition-all cursor-pointer border border-amber-200">
                    <span class="text-5xl mb-4 block">🎎</span>
                    <h3 class="text-xl font-semibold text-stone-800 mb-2">Decorations</h3>
                </div>
                <div class="group relative bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 text-center hover:shadow-xl transition-all cursor-pointer border border-purple-200">
                    <span class="text-5xl mb-4 block">🎌</span>
                    <h3 class="text-xl font-semibold text-stone-800 mb-2">Anime Collection</h3>
                </div>
                <div class="group relative bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-2xl p-8 text-center hover:shadow-xl transition-all cursor-pointer border border-emerald-200">
                    <span class="text-5xl mb-4 block">🌿</span>
                    <h3 class="text-xl font-semibold text-stone-800 mb-2">Studio Ghibli</h3>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-stone-900 text-stone-400 py-10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-2xl text-white mb-2" style="font-family: 'Noto Serif JP', serif;">緑 Midori</p>
            <p class="text-sm">Don't let you joy wait</p>
            <p class="text-xs mt-4">© {{ date('Y') }} Midori</p>
        </div>
    </footer>
</body>
</html>