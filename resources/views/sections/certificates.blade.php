@php $c = $p['certificates']; @endphp
<section id="certificates" class="scroll-mt-8 border-t border-line">
    <div class="wrap py-24 lg:py-32">
        <p class="label-lime">06 / Certificates</p>
        <div class="mt-6 flex flex-wrap items-end justify-between gap-6">
            <h2 class="display text-[clamp(2.6rem,6vw,5.5rem)]">{{ $c['title'] }}</h2>
            <p class="max-w-[18rem] text-sm leading-relaxed text-mute">{{ $c['note'] }}</p>
        </div>

        <div class="mt-14 grid gap-6 lg:grid-cols-2">
            @foreach ($c['items'] as $certificate)
                <article class="group overflow-hidden border border-line bg-panel">
                    <a href="{{ asset($certificate['image']) }}" target="_blank" rel="noopener noreferrer" data-lightbox-trigger data-lightbox-title="{{ $certificate['title'] }}" data-lightbox-alt="{{ $certificate['alt'] }}" data-lightbox-document="{{ asset($certificate['file']) }}" aria-label="Preview {{ $certificate['title'] }} certificate">
                        <img src="{{ asset($certificate['image']) }}" alt="{{ $certificate['alt'] }}" loading="lazy" class="aspect-[1.48] w-full bg-white object-contain transition-transform duration-500 group-hover:scale-[1.02]">
                    </a>
                    <div class="flex flex-wrap items-end justify-between gap-5 p-6 md:p-8">
                        <div>
                            <p class="label mb-3">{{ $certificate['issuer'] }} <span class="px-1 text-lime">·</span> {{ $certificate['date'] }}</p>
                            <h3 class="max-w-xl text-xl leading-snug tracking-tight md:text-2xl">{{ $certificate['title'] }}</h3>
                            @if (isset($certificate['result']))
                                <p class="mt-3 label-lime">{{ $certificate['result'] }}</p>
                            @endif
                        </div>
                        <div class="flex items-center gap-5 text-sm">
                            <a href="{{ asset($certificate['file']) }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 hover:text-lime">View <x-arrow class="size-3.5" /></a>
                            <a href="{{ asset($certificate['file']) }}" download class="inline-flex items-center gap-2 text-mute hover:text-lime">Download</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
