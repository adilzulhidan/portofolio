@php $pr = $p['process']; @endphp
<section class="wrap py-24 lg:py-32">
    <p class="label-lime">08 / How I work</p>
    <div class="mt-6 flex flex-wrap items-end justify-between gap-6">
        <h2 class="display text-[clamp(2.4rem,5vw,4.5rem)]">{{ $pr['title'] }}</h2>
        <p class="max-w-[17rem] text-sm leading-relaxed text-mute">{!! nl2br(e($pr['note'])) !!}</p>
    </div>
    <ol class="mt-14 grid gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($pr['steps'] as $i => $st)
            <li class="border-t border-line pt-6">
                <span class="accent text-5xl">{{ sprintf('%02d', $i + 1) }}</span>
                <h3 class="mt-10 text-lg">{{ $st['title'] }}</h3>
                <p class="mt-3 text-sm leading-relaxed text-mute">{{ $st['desc'] }}</p>
                <p class="label mt-6 !text-[10px]">{{ $st['tag'] }}</p>
            </li>
        @endforeach
    </ol>
</section>
