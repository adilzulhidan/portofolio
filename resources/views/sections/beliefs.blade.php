<section class="border-y border-line">
    <div class="wrap grid gap-8 py-20 lg:grid-cols-[1fr_2.4fr] lg:py-24">
        <div>
            <p class="label-lime">10 / A few things I believe</p>
            <p class="mt-3 text-xs text-mute">Not rules. Just a compass.</p>
        </div>
        <ul class="space-y-3 text-[clamp(1.5rem,2.6vw,2.2rem)] font-light tracking-tight">
            @foreach ($p['beliefs'] as $i => $b)
                <li @class(['accent' => $i === 1])>{{ $b }}</li>
            @endforeach
        </ul>
    </div>
</section>
