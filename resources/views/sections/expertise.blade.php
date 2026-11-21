@php $e = $p['expertise']; @endphp
<section class="bg-panel">
    <div class="wrap grid gap-14 py-24 lg:grid-cols-[1fr_1.9fr] lg:py-32">
        <div>
            <p class="label-lime">03 / What I bring</p>
            <h2 class="display mt-6 text-[clamp(2.4rem,4.4vw,4rem)]">{!! nl2br(e($e['title'])) !!}</h2>
            <p class="mt-8 leading-relaxed text-mute">{!! nl2br(e($e['note'])) !!}</p>
        </div>
        <ul class="border-t border-line">
            @foreach ($e['items'] as $i => $it)
                <li class="grid grid-cols-[2.5rem_1fr_auto] gap-2 border-b border-line py-8">
                    <span class="label pt-2">{{ sprintf('%02d', $i + 1) }}</span>
                    <div>
                        <h3 class="text-[clamp(1.6rem,2.4vw,2.2rem)] font-light tracking-tight">{{ $it['title'] }}</h3>
                        <p class="mt-2 text-mute">{{ $it['desc'] }}</p>
                        <p class="label mt-3 !text-[10px]">{{ implode(' / ', $it['tags']) }}</p>
                    </div>
                    <x-arrow class="mt-2 size-4 text-paper/70" />
                </li>
            @endforeach
        </ul>
    </div>
</section>
