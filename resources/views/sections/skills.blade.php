@php $s = $p['skills']; @endphp
<section id="skills" class="scroll-mt-8 bg-panel">
    <div class="wrap py-24 lg:py-32">
        <p class="label-lime">07 / Skills</p>
        <div class="mt-6 flex flex-wrap items-end justify-between gap-6">
            <h2 class="display text-[clamp(2.4rem,5vw,4.5rem)]">{{ $s['title'] }}</h2>
            <p class="max-w-[16rem] text-sm text-mute">{{ $s['note'] }}</p>
        </div>
        <div class="mt-14 grid gap-x-8 gap-y-12 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($s['groups'] as $g)
                <div class="border-t border-line pt-5">
                    <h3 class="label mb-5">{{ $g['name'] }}</h3>
                    <ul class="flex flex-wrap gap-2">
                        @foreach ($g['items'] as $i)
                            <li class="rounded-full border border-paper/20 px-3.5 py-1.5 text-sm">{{ $i }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>
