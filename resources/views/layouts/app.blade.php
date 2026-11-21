<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $p['name'] }} — {{ $p['role'] }}</title>
    <meta name="description" content="{{ $p['hero']['intro'] }}">
    <meta property="og:title" content="{{ $p['name'] }} — {{ $p['role'] }}">
    <meta property="og:description" content="{{ $p['hero']['intro'] }}">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#0b0d0c">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Instrument+Serif:ital@1&family=JetBrains+Mono:wght@400&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a href="#work" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded focus:bg-lime focus:px-3 focus:py-2 focus:text-ink">Skip to content</a>

    <header class="absolute inset-x-0 top-0 z-20">
        <div class="wrap flex items-center justify-between py-6">
            <a href="#top" class="flex items-center gap-4" aria-label="{{ $p['name'] }}, home">
                <span class="text-3xl font-semibold leading-none tracking-[-0.08em] text-lime">{{ $p['mark'] }}</span>
                <span class="hidden text-sm sm:inline">{{ $p['name'] }}</span>
            </a>
            <nav class="flex items-center gap-5 text-sm md:gap-8" aria-label="Main">
                <a href="#work" class="hidden hover:text-lime sm:inline">Work</a>
                <a href="#about" class="hidden hover:text-lime sm:inline">About</a>
                <a href="#resume" class="hidden hover:text-lime md:inline">Resume</a>
                <a href="#certificates" class="hidden hover:text-lime lg:inline">Certificates</a>
                <a href="#skills" class="hidden hover:text-lime md:inline">Skills</a>
                <a href="#contact" class="btn btn-ghost !py-3.5">Let’s talk <x-arrow /></a>
            </nav>
        </div>
    </header>

    <main id="top">
        @yield('content')
    </main>

    <footer class="border-t border-line">
        <div class="wrap grid gap-8 py-10 md:grid-cols-3 md:items-center">
            <p class="text-sm">{{ $p['name'] }}.</p>
            <ul class="flex flex-wrap gap-6 text-xs text-mute md:justify-center">
                @foreach ($p['socials'] as $s)
                    <li><a href="{{ $s['url'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 hover:text-lime">{{ $s['label'] }} <x-arrow class="size-3" /></a></li>
                @endforeach
            </ul>
            <a href="#top" class="label md:text-right hover:text-lime">Back to top ↑</a>
        </div>
        <div class="wrap pb-8"><p class="label !text-[10px]">© {{ now()->year }} {{ $p['name'] }}</p></div>
    </footer>

    <dialog id="portfolio-lightbox" class="portfolio-lightbox" aria-labelledby="portfolio-lightbox-title">
        <div class="portfolio-lightbox-panel">
            <div class="flex items-start justify-between gap-6">
                <div class="min-w-0">
                    <p class="label-lime">Preview</p>
                    <h2 id="portfolio-lightbox-title" data-lightbox-title class="mt-2 truncate text-lg font-medium tracking-tight text-paper">Project preview</h2>
                </div>
                <button type="button" data-lightbox-close class="portfolio-lightbox-close" aria-label="Close preview">Close <span aria-hidden="true">×</span></button>
            </div>
            <div class="portfolio-lightbox-media">
                <img data-lightbox-image alt="" class="max-h-[calc(100vh-12rem)] w-full object-contain">
            </div>
            <div class="flex flex-wrap justify-end gap-3">
                <a data-lightbox-image-link href="#" target="_blank" rel="noopener noreferrer" class="btn btn-ghost !py-3">Open image <x-arrow /></a>
                <a data-lightbox-document-link href="#" target="_blank" rel="noopener noreferrer" class="btn btn-lime !py-3" hidden>Open certificate PDF <x-arrow /></a>
            </div>
        </div>
    </dialog>
</body>
</html>
