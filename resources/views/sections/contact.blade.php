@php $c = $p['contact']; @endphp
<section id="contact" class="scroll-mt-0 bg-lime text-ink">
    <div class="wrap py-16 lg:py-20">
        <div class="flex flex-wrap justify-between gap-4">
            <p class="font-mono text-[11px] uppercase tracking-[0.12em]">11 / Start a conversation</p>
            <p class="font-mono text-[11px] uppercase tracking-[0.12em]">▸ {{ $c['status'] }}</p>
        </div>
        <div class="mt-10 flex items-start justify-between gap-8">
            <h2 class="display text-[clamp(3rem,8.5vw,8rem)]">{!! nl2br(e($c['title'])) !!}</h2>
            <x-arrow class="hidden size-16 shrink-0 stroke-[0.6] md:block" />
        </div>
        <div class="mt-14 flex flex-wrap items-end justify-between gap-8">
            <div>
                <p class="text-xs">Have a project in mind, or just want to say hello?</p>
                <a href="mailto:{{ $p['email'] }}" class="mt-3 inline-block border-b-2 border-ink text-2xl font-normal">{{ $p['email'] }}</a>
            </div>
            <p class="max-w-[14rem] text-xs leading-relaxed">{!! nl2br(e($c['note'])) !!}</p>
        </div>
    </div>
</section>
