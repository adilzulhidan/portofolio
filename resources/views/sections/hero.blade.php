@php $h = $p['hero']; @endphp
<section class="relative overflow-hidden">
    <div class="wrap flex min-h-[100svh] flex-col justify-between gap-10 pb-10 pt-28">
        <p class="label flex items-center gap-2"><span class="size-1.5 rounded-full bg-lime"></span>{{ $p['role'] }}</p>

        <div class="relative grid items-center gap-8 lg:grid-cols-[1.35fr_1fr]">
            <div class="relative z-10">
                <h1 class="display text-[clamp(3rem,9vw,8.5rem)]">{!! nl2br(e($h['title'])) !!}</h1>
                <p class="accent mt-6 text-[clamp(1.6rem,3.4vw,3rem)] leading-tight">{{ $h['subtitle'] }}</p>
            </div>
            <div class="hero-portrait-scene mx-auto w-full max-w-[430px] lg:max-w-none">
                <div class="hero-portrait-frame">
                    <img src="{{ asset($h['image']) }}" alt="Portrait of Adil Zulhidan" class="hero-portrait-image" fetchpriority="high">
                    <div class="hero-portrait-shade" aria-hidden="true"></div>
                </div>
                <div class="hero-float-card hero-float-card--top" aria-hidden="true">
                    <span class="label !text-[9px]">IT · SECURITY</span>
                </div>
                <div class="hero-float-card hero-float-card--bottom" aria-hidden="true">
                    <span class="size-2 rounded-full bg-lime"></span>
                    <span class="text-xs tracking-wide">Build. Test. Improve.</span>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap items-end justify-between gap-8">
            <div class="max-w-md">
                <p class="text-lg leading-relaxed text-mute">{{ $h['intro'] }}</p>
                <a href="#work" class="btn btn-lime mt-8">{{ $h['cta'] }} <x-arrow /></a>
            </div>
            <div class="label space-y-4 text-right">
                @foreach ($h['meta'] as $m)<p>{{ $m }}</p>@endforeach
            </div>
        </div>
    </div>
</section>
