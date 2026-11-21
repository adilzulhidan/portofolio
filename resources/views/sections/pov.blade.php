@php $v = $p['pov']; @endphp
<section class="border-t border-line">
    <div class="wrap grid gap-10 py-20 lg:grid-cols-[1fr_2.4fr] lg:py-28">
        <p class="label">01 / The point of view</p>
        <div>
            <h2 class="text-[clamp(1.8rem,3.6vw,3.2rem)] font-light leading-[1.25] tracking-[-0.02em]">
                {{ $v['line1'] }}<br>{{ $v['line2'] }} <span class="accent">{{ $v['accent'] }}</span>
            </h2>
            <p class="mt-10 max-w-xl leading-relaxed text-mute">{{ $v['body'] }}</p>
        </div>
    </div>
</section>
