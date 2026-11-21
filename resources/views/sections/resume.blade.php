@php $r = $p['resume']; @endphp
<section id="resume" class="scroll-mt-8 border-t border-line">
    <div class="wrap py-24 lg:py-32">
        <p class="label-lime">05 / Resume</p>
        <div class="mt-6 flex flex-wrap items-end justify-between gap-8">
            <h2 class="display max-w-3xl text-[clamp(2.4rem,5vw,4.5rem)]">{{ $r['title'] }}</h2>
            <a href="{{ $p['cv'] }}" download class="btn btn-lime">Download CV <x-arrow /></a>
        </div>
        <p class="mt-8 max-w-3xl text-base leading-relaxed text-mute">{{ $r['summary'] }}</p>

        <div class="mt-16 grid gap-16 lg:grid-cols-[1.7fr_1fr]">
            <div>
                <h3 class="label mb-4">Experience</h3>
                <ul class="border-t border-line">
                    @foreach ($r['experience'] as $x)
                        <li class="grid gap-3 border-b border-line py-7 md:grid-cols-[9rem_1fr]">
                            <span class="label pt-1">{{ $x['period'] }}</span>
                            <div>
                                <p class="text-xl font-light tracking-tight">{{ $x['role'] }} <span class="text-mute">· {{ $x['org'] }}</span></p>
                                <p class="mt-2 max-w-lg text-sm leading-relaxed text-mute">{{ $x['desc'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="space-y-12">
                <div>
                    <h3 class="label mb-4">Education</h3>
                    <ul class="border-t border-line">
                        @foreach ($r['education'] as $x)
                            <li class="border-b border-line py-5">
                                <p>{{ $x['title'] }}</p>
                                <p class="mt-1 text-sm text-mute">{{ $x['org'] }}</p>
                                <p class="label mt-2 !text-[10px]">{{ $x['period'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="label mb-4">Core skills</h3>
                    <ul class="flex flex-wrap gap-2">
                        @foreach ($r['skills'] as $skill)
                            <li class="rounded-full border border-line px-3 py-2 text-xs text-paper/80">{{ $skill }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="label mb-4">Certifications</h3>
                    <ul class="border-t border-line">
                        @foreach ($r['certifications'] as $x)
                            <li class="flex items-baseline justify-between gap-4 border-b border-line py-5">
                                <div><p>{{ $x['title'] }}</p><p class="mt-1 text-sm text-mute">{{ $x['org'] }}</p></div>
                                @if (!empty($x['year']))
                                    <span class="label !text-[10px]">{{ $x['year'] }}</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
