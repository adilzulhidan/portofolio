@php $w = $p['work']; @endphp
<section id="work" class="wrap scroll-mt-8 pb-24 pt-8 lg:pb-32">
    <p class="label-lime">02 / Selected work</p>
    <div class="mt-6 flex flex-wrap items-end justify-between gap-6">
        <h2 class="display text-[clamp(2.6rem,6vw,5.5rem)]">{{ $w['title'] }}</h2>
        <p class="max-w-[16rem] text-sm text-mute">{{ $w['note'] }}</p>
    </div>

    <div class="mt-14 space-y-6">
        @foreach ($w['items'] as $it)
            <article class="grid overflow-hidden lg:min-h-[28rem] lg:grid-cols-[minmax(0,1fr)_minmax(0,1.5fr)]" style="background: {{ $it['bg'] }}">
                <div class="flex flex-col justify-between gap-12 p-8 md:p-10">
                    <div class="flex flex-wrap items-baseline justify-between gap-3">
                        <h3 class="text-2xl tracking-tight">{{ $it['name'] }}</h3>
                        <span class="label">{{ $it['ownership'] }}</span>
                    </div>
                    <div>
                        <p class="label mb-4">{{ $it['tag'] }}</p>
                        <p class="display text-[clamp(2rem,3.6vw,3.4rem)]">{{ $it['headline'] }}</p>
                        <p class="mt-5 max-w-sm text-sm leading-relaxed text-paper/60">{{ $it['desc'] }}</p>
                        <ul class="mt-6 flex flex-wrap gap-2">
                            @foreach ($it['tags'] as $t)
                                <li class="rounded-full border border-paper/20 px-3 py-1 font-mono text-[11px] text-paper/70">{{ $t }}</li>
                            @endforeach
                        </ul>
                        @if (!empty($it['image']))
                            <div class="mt-8 flex gap-6 text-sm">
                                <a href="{{ asset($it['image']) }}" target="_blank" rel="noopener noreferrer" data-lightbox-trigger data-lightbox-title="{{ $it['name'] }}" data-lightbox-alt="{{ $it['image_alt'] }}" class="inline-flex items-center gap-1.5 hover:text-lime">View screenshot <x-arrow class="size-3.5" /></a>
                            </div>
                        @endif
                    </div>
                </div>
                @if (!empty($it['image']))
                    <a href="{{ asset($it['image']) }}" target="_blank" rel="noopener noreferrer" data-lightbox-trigger data-lightbox-title="{{ $it['name'] }}" data-lightbox-alt="{{ $it['image_alt'] }}" class="flex min-h-64 items-center justify-center p-3 transition-opacity hover:opacity-90 md:p-5" style="background-color: {{ $it['preview_bg'] }}" aria-label="Preview screenshot: {{ $it['image_alt'] }}">
                        <img src="{{ asset($it['image']) }}" alt="{{ $it['image_alt'] }}" loading="lazy" class="max-h-[38rem] w-full object-contain shadow-xl">
                    </a>
                @else
                    <div class="flex min-h-64 items-center justify-center bg-[#070b16] p-4 md:p-7" role="img" aria-label="Illustrative view of the SecDetector passive scan workspace; no scan results are shown.">
                        <div class="w-full max-w-2xl overflow-hidden rounded-xl border border-white/10 bg-[#0c1221] shadow-2xl shadow-black/30">
                            <div class="flex items-center justify-between gap-4 border-b border-white/[.07] px-4 py-3 md:px-5">
                                <div class="flex items-center gap-2.5">
                                    <span class="grid size-8 place-items-center rounded-lg bg-gradient-to-br from-blue-500 to-indigo-600 text-sm font-bold text-white">S</span>
                                    <span class="text-sm font-semibold text-white">SecDetector</span>
                                </div>
                                <span class="rounded-full border border-blue-400/20 bg-blue-400/[.07] px-2.5 py-1 font-mono text-[9px] uppercase tracking-wider text-blue-200">Prototype UI preview</span>
                            </div>
                            <div class="p-4 md:p-5">
                                <div class="flex flex-wrap items-end justify-between gap-3">
                                    <div>
                                        <p class="label !text-[9px]">Authorized local / lab target</p>
                                        <h4 class="mt-1 text-lg font-semibold tracking-tight text-white">Scan workspace</h4>
                                    </div>
                                    <span class="rounded-md border border-white/10 bg-white/[.03] px-2 py-1 font-mono text-[9px] uppercase tracking-wider text-slate-400">GET · no payloads</span>
                                </div>
                                <div class="mt-4 flex items-center gap-2 rounded-lg border border-white/10 bg-[#070b14] px-3 py-2.5">
                                    <span class="min-w-0 flex-1 truncate font-mono text-[10px] text-slate-400">http://127.0.0.1:3000</span>
                                    <span class="rounded-md bg-blue-600 px-2.5 py-1.5 text-[9px] font-semibold text-white">Review</span>
                                </div>
                                <div class="mt-3 grid gap-2 sm:grid-cols-3">
                                    <div class="rounded-lg border border-white/[.07] bg-white/[.025] p-3">
                                        <p class="font-mono text-[9px] uppercase tracking-wider text-blue-200">01 / Response</p>
                                        <p class="mt-2 text-xs font-medium text-slate-200">Security headers</p>
                                        <p class="mt-1 text-[10px] text-slate-500">Evidence-based observations</p>
                                    </div>
                                    <div class="rounded-lg border border-white/[.07] bg-white/[.025] p-3">
                                        <p class="font-mono text-[9px] uppercase tracking-wider text-indigo-200">02 / Page</p>
                                        <p class="mt-2 text-xs font-medium text-slate-200">Forms &amp; inputs</p>
                                        <p class="mt-1 text-[10px] text-slate-500">Structure overview</p>
                                    </div>
                                    <div class="rounded-lg border border-white/[.07] bg-white/[.025] p-3">
                                        <p class="font-mono text-[9px] uppercase tracking-wider text-violet-200">03 / Research</p>
                                        <p class="mt-2 text-xs font-medium text-slate-200">One-shot model</p>
                                        <p class="mt-1 text-[10px] text-slate-500">Similarity, not verdict</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </article>
        @endforeach
    </div>
</section>
