@php $a = $p['about']; @endphp
<section id="about" class="wrap scroll-mt-8 py-24 lg:py-32">
    <div class="grid items-start gap-14 lg:grid-cols-2 lg:gap-24">
        <figure>
            @if (file_exists(public_path($a['photo'])))
                <img src="{{ asset($a['photo']) }}" alt="Portrait of {{ $p['mark'] }}" class="aspect-square w-full object-cover grayscale" loading="lazy">
            @else
                <div class="aspect-square w-full bg-[radial-gradient(70%_70%_at_40%_35%,#3a3f3c,#0b0d0c)]" role="img" aria-label="Photo placeholder"></div>
            @endif
            <figcaption class="label mt-3 flex justify-between !text-[10px]"><span>{{ $a['caption'] }}</span><span>Fig. 01</span></figcaption>
        </figure>
        <div>
            <p class="label-lime">04 / About</p>
            <h2 class="display mt-6 text-[clamp(2.2rem,4vw,3.6rem)] !leading-[1.02]">{!! nl2br(e($a['title'])) !!}</h2>
            <div class="mt-8 max-w-lg space-y-5 text-sm leading-relaxed text-mute">
                @foreach ($a['paragraphs'] as $para)<p>{{ $para }}</p>@endforeach
            </div>
            <div class="mt-8 flex items-center justify-between border-t border-line pt-5">
                <span class="label !text-[10px]">Learning through practice</span>
                <span class="accent text-3xl text-paper">{{ $a['signature'] }}</span>
            </div>
        </div>
    </div>
</section>
