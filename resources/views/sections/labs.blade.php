@php $l = $p['labs']; @endphp
<section class="bg-panel">
    <div class="wrap py-20 lg:py-24">
        <p class="label-lime">09 / Off the clock</p>
        <div class="mt-5 flex flex-wrap items-end justify-between gap-6">
            <h2 class="display text-[clamp(2rem,4vw,3.4rem)]">{{ $l['title'] }}</h2>
            <p class="max-w-[16rem] text-xs text-mute">{{ $l['note'] }}</p>
        </div>
        <ul class="mt-10 grid gap-4 md:grid-cols-3">
            @foreach ($l['items'] as $n => $it)
                @php $g = ['radial-gradient(circle at 35% 40%,#d8f870,#6d7a2e 40%,#0b0d0c 75%)', 'conic-gradient(from 40deg,#0b0d0c,#d9d9d1,#2a2d2b,#bfc4bb,#0b0d0c)', 'radial-gradient(circle at 50% 30%,#e8e8e1,#a9aca6 45%,#2a2d2b 80%)'][$n % 3]; @endphp
                <li>
                    <div class="aspect-[4/3]" style="background: {{ $g }}" role="img" aria-label="{{ $it['title'] }}"></div>
                    <p class="mt-3 flex justify-between text-sm"><span>{{ $it['title'] }}</span><span class="label !text-[10px]">{{ $it['tag'] }}</span></p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
