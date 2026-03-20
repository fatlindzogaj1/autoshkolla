<?php

use Livewire\Component;

new #[\Livewire\Attributes\Layout('layouts::app')] class extends Component {
    //
};

?>

<div>
    <section id="hero" class="bauhaus-section overflow-hidden bg-[var(--color-bauhaus-canvas)]">
        <div class="bauhaus-container grid items-stretch gap-8 lg:grid-cols-[1.15fr_0.85fr] lg:gap-12">
            <div class="space-y-8">
                <div class="inline-flex items-center gap-3 border-2 border-black bg-white px-4 py-2 lg:border-4">
                    <span class="size-3 rounded-full bg-[var(--color-bauhaus-red)]"></span>
                    <span class="size-3 bg-[var(--color-bauhaus-yellow)]"></span>
                    <span class="bauhaus-triangle block size-3 bg-[var(--color-bauhaus-blue)]"></span>
                    <span class="bauhaus-kicker">Platformë për teste teorike</span>
                </div>

                <div class="space-y-6">
                    <h1 class="bauhaus-display max-w-3xl leading-25 tracking-wide">
                        Praktiko patentën me formë të qartë dhe ritëm të fortë.
                    </h1>

                    <p class="max-w-2xl text-lg font-medium leading-relaxed text-black/75 lg:text-xl">
                        Auto Test e kthen përgatitjen teorike në një eksperiencë vizuale, të organizuar dhe të drejtpërdrejtë — pa zhurmë, pa konfuzion, vetëm ushtrime që të afrojnë te provimi real.
                    </p>
                </div>

                <div class="flex flex-col gap-4 sm:flex-row">
                    <a id="fillo" href="{{ route('testet.index') }}" class="bauhaus-button bauhaus-button--red" wire:navigate>
                        Fillo Praktikën
                        <span aria-hidden="true">→</span>
                    </a>

                    <a href="#metoda" class="bauhaus-button bauhaus-button--outline">
                        Si Funksionon
                    </a>
                </div>

                <div class="grid gap-4 sm:grid-cols-3">
                    <div class="bauhaus-card bg-[var(--color-bauhaus-yellow)]">
                        <span class="bauhaus-kicker">Format</span>
                        <p class="mt-4 text-3xl font-black uppercase tracking-[-0.06em]">B</p>
                        <p class="mt-2 text-sm font-medium uppercase tracking-[0.18em]">Blic pyetje</p>
                    </div>
                    <div class="bauhaus-card bg-white">
                        <span class="bauhaus-kicker">Fokus</span>
                        <p class="mt-4 text-3xl font-black uppercase tracking-[-0.06em]">24/7</p>
                        <p class="mt-2 text-sm font-medium uppercase tracking-[0.18em]">Praktikë kur të duash</p>
                    </div>
                    <div class="bauhaus-card bg-[var(--color-bauhaus-red)] text-white">
                        <span class="bauhaus-kicker text-white/80">Qëllimi</span>
                        <p class="mt-4 text-3xl font-black uppercase tracking-[-0.06em]">A+</p>
                        <p class="mt-2 text-sm font-medium uppercase tracking-[0.18em] text-white/80">Besim për provimin</p>
                    </div>
                </div>
            </div>

            <div class="relative min-h-[420px] overflow-hidden border-4 border-black bg-[var(--color-bauhaus-blue)] p-6 bauhaus-shadow-lg sm:min-h-[520px] lg:p-8">
                <div class="bauhaus-dot-grid absolute inset-0 opacity-20"></div>
                <div class="absolute -left-10 top-10 size-32 rounded-full border-4 border-black bg-[var(--color-bauhaus-yellow)] sm:size-44"></div>
                <div class="absolute right-8 top-10 size-24 rotate-45 border-4 border-black bg-white sm:size-32"></div>
                <div class="absolute bottom-6 left-6 size-28 border-4 border-black bg-[var(--color-bauhaus-red)] sm:size-36"></div>
                <div class="bauhaus-triangle absolute bottom-8 right-8 h-32 w-32 border-4 border-black bg-[var(--color-bauhaus-yellow)] sm:h-44 sm:w-44"></div>

                <div class="relative z-10 flex h-full flex-col">
                    <div class="flex justify-between text-xs font-bold uppercase tracking-[0.35em] text-white/80 sm:text-sm">
                        <span>Form</span>
                        <span>Function</span>
                    </div>

                    <div class="flex flex-1 items-center justify-center">
                        <div class="mx-auto max-w-sm space-y-4 border-4 border-black bg-white p-5 text-black bauhaus-shadow-sm sm:p-6">
                            <p class="bauhaus-kicker text-[var(--color-bauhaus-blue)]">Simulim modernist</p>
                            <h2 class="bauhaus-subheading">
                                Pyetje të qarta. Navigim i shpejtë. Vendime të sakta.
                            </h2>
                            <p class="text-base font-medium leading-relaxed text-black/70">
                                Çdo seksion është ndërtuar si kompozim: pyetje, ritëm, përsëritje dhe përqendrim total te rezultatet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bauhaus-section bg-[var(--color-bauhaus-yellow)]">
        <div class="bauhaus-container">
            <div class="grid overflow-hidden border-4 border-black bg-[var(--color-bauhaus-yellow)] sm:grid-cols-2 lg:grid-cols-4">
                <div class="border-b-4 border-black p-6 sm:border-r-4 lg:border-b-0">
                    <p class="bauhaus-kicker">Ushtrime</p>
                    <p class="mt-3 text-5xl font-black uppercase tracking-[-0.08em]">∞</p>
                    <p class="mt-3 max-w-[16rem] text-base font-medium leading-relaxed">Praktikë e pafundme për të ndërtuar refleks të saktë teorik.</p>
                </div>
                <div class="border-b-4 border-black p-6 lg:border-b-0 lg:border-r-4">
                    <p class="bauhaus-kicker">Format provimi</p>
                    <p class="mt-3 text-5xl font-black uppercase tracking-[-0.08em]">01</p>
                    <p class="mt-3 max-w-[16rem] text-base font-medium leading-relaxed">Rrjedhë e qartë që imiton mënyrën si mendon në provimin real.</p>
                </div>
                <div class="border-b-4 border-black p-6 sm:border-r-4 sm:border-b-0">
                    <p class="bauhaus-kicker">Ritëm</p>
                    <p class="mt-3 text-5xl font-black uppercase tracking-[-0.08em]">200%</p>
                    <p class="mt-3 max-w-[16rem] text-base font-medium leading-relaxed">Më pak humbje kohe, më shumë fokus te shenjat, rregullat dhe situatat.</p>
                </div>
                <div class="p-6">
                    <p class="bauhaus-kicker">Rezultat</p>
                    <p class="mt-3 text-5xl font-black uppercase tracking-[-0.08em]">GO</p>
                    <p class="mt-3 max-w-[16rem] text-base font-medium leading-relaxed">Hyr në provim me besim, qetësi dhe memorie më të fortë vizuale.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testet" class="bauhaus-section bg-white">
        <div class="bauhaus-container space-y-10">
            <div class="max-w-3xl space-y-4">
                <p class="bauhaus-kicker text-[var(--color-bauhaus-red)]">Blloqet kryesore</p>
                <h2 class="bauhaus-subheading">Tre mënyra për të ushtruar pa dalë nga ritmi.</h2>

            </div>

            <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                <article class="bauhaus-card">
                    <div class="absolute right-5 top-5 size-4 rounded-full border-2 border-black bg-[var(--color-bauhaus-red)]"></div>
                    <p class="bauhaus-kicker text-[var(--color-bauhaus-blue)]">01</p>
                    <h3 class="mt-4 text-2xl font-black uppercase tracking-[-0.05em]">Teste të pafundme</h3>
                    <p class="mt-4 text-base font-medium leading-relaxed text-black/70">
                        Kthehu te pyetjet sa herë të duash dhe ndërto memorie të qëndrueshme për rregullat kryesore.
                    </p>
                </article>

                <article class="bauhaus-card bg-[var(--color-bauhaus-blue)] text-white">
                    <div class="absolute right-5 top-5 size-4 border-2 border-black bg-[var(--color-bauhaus-yellow)]"></div>
                    <p class="bauhaus-kicker text-white/80">02</p>
                    <h3 class="mt-4 text-2xl font-black uppercase tracking-[-0.05em]">Simulim i provimit</h3>
                    <p class="mt-4 text-base font-medium leading-relaxed text-white/80">
                        Struktura e ushtrimit të mban afër ndjenjës reale të testimit dhe të ndihmon me menaxhimin e ritmit.
                    </p>
                </article>

                <article class="bauhaus-card bg-[var(--color-bauhaus-yellow)] ">
                    <div class="bauhaus-triangle absolute right-5 top-5 size-4 border-2 border-black bg-[var(--color-bauhaus-red)]"></div>
                    <p class="bauhaus-kicker text-[var(--color-bauhaus-red)]">03</p>
                    <h3 class="mt-4 text-2xl font-black uppercase tracking-[-0.05em]">Mëso rregullat</h3>
                    <p class="mt-4 text-base font-medium leading-relaxed text-black/70">
                        Përqendrohu te logjika e trafikut, jo vetëm te memorizimi i përgjigjeve.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section id="metoda" class="bauhaus-section bg-[var(--color-bauhaus-red)] text-white">
        <div class="bauhaus-container space-y-10">
            <div class="max-w-3xl space-y-4">
                <p class="bauhaus-kicker text-[var(--color-bauhaus-yellow)]">Si funksionon</p>
                <h2 class="bauhaus-subheading">Proces i thjeshtë, mekanik dhe i përsëritshëm.</h2>
                <p class="text-lg font-medium leading-relaxed text-white/80">
                </p>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
                <article class="bauhaus-card bg-white text-black">
                    <div class="mb-6 inline-flex size-14 rotate-45 items-center justify-center border-2 border-black bg-[var(--color-bauhaus-yellow)] text-2xl font-black lg:size-16 lg:border-4">
                        <span class="-rotate-45">1</span>
                    </div>
                    <h3 class="text-2xl font-black uppercase tracking-[-0.05em]">Zgjidh modul</h3>
                    <p class="mt-4 text-base font-medium leading-relaxed text-black/70">Nis me pyetjet bazë ose futu direkt në simulim të plotë.</p>
                </article>

                <article class="bauhaus-card bg-[var(--color-bauhaus-yellow)] text-black">
                    <div class="mb-6 inline-flex size-14 rotate-45 items-center justify-center border-2 border-black bg-white text-2xl font-black lg:size-16 lg:border-4">
                        <span class="-rotate-45">2</span>
                    </div>
                    <h3 class="text-2xl font-black uppercase tracking-[-0.05em]">Përgjigju shpejt</h3>
                    <p class="mt-4 text-base font-medium leading-relaxed text-black/70">Fokuso reagimin dhe kuptimin, jo vetëm memorien mekanike.</p>
                </article>

                <article class="bauhaus-card bg-[var(--color-bauhaus-blue)] text-white">
                    <div class="mb-6 inline-flex size-14 rotate-45 items-center justify-center border-2 border-black bg-[var(--color-bauhaus-red)] text-2xl font-black text-white lg:size-16 lg:border-4">
                        <span class="-rotate-45">3</span>
                    </div>
                    <h3 class="text-2xl font-black uppercase tracking-[-0.05em]">Rikthehu te gabimet</h3>
                    <p class="mt-4 text-base font-medium leading-relaxed text-white/80">Shih modelet ku gabon më shpesh dhe mbylle boshllëkun me praktikë të përsëritur.</p>
                </article>

                <article class="bauhaus-card bg-white text-black">
                    <div class="mb-6 inline-flex size-14 rotate-45 items-center justify-center border-2 border-black bg-[var(--color-bauhaus-red)] text-2xl font-black text-white lg:size-16 lg:border-4">
                        <span class="-rotate-45">4</span>
                    </div>
                    <h3 class="text-2xl font-black uppercase tracking-[-0.05em]">Hyr me besim</h3>
                    <p class="mt-4 text-base font-medium leading-relaxed text-black/70">Kur struktura bëhet e njohur, presioni i provimit bie ndjeshëm.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="avantazhet" class="bauhaus-section bg-[var(--color-bauhaus-blue)] text-white">
        <div class="bauhaus-container grid gap-8 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
            <div class="space-y-4">
                <p class="bauhaus-kicker text-[var(--color-bauhaus-yellow)]">Avantazhet</p>
                <h2 class="bauhaus-subheading">Një identitet i fortë vizual që të mban në fokus.</h2>

            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <div class="bauhaus-card bg-white text-black">
                    <div class="mb-4 inline-flex size-10 items-center justify-center rounded-full border-2 border-black bg-[var(--color-bauhaus-yellow)] text-lg font-black">✓</div>
                    <h3 class="text-xl font-black uppercase tracking-[-0.05em]">Kontrast i lartë</h3>
                    <p class="mt-3 text-base font-medium leading-relaxed text-black/70">Ngjyra primare, bordura të forta dhe hapësira të pastra për lexim më të qartë.</p>
                </div>

                <div class="bauhaus-card bg-[var(--color-bauhaus-yellow)] text-black sm:translate-y-8">
                    <div class="mb-4 inline-flex size-10 items-center justify-center rounded-full border-2 border-black bg-white text-lg font-black">✓</div>
                </div>

                <div class="bauhaus-card bg-[var(--color-bauhaus-red)] text-white">
                    <div class="mb-4 inline-flex size-10 items-center justify-center rounded-full border-2 border-black bg-[var(--color-bauhaus-yellow)] text-lg font-black text-black">✓</div>
                    <h3 class="text-xl font-black uppercase tracking-[-0.05em]">Mobile first</h3>
                </div>

                <div class="bauhaus-card bg-white text-black">
                    <div class="mb-4 inline-flex size-10 items-center justify-center rounded-full border-2 border-black bg-[var(--color-bauhaus-blue)] text-lg font-black text-white">✓</div>
                    <h3 class="text-xl font-black uppercase tracking-[-0.05em]">CTA e dukshme</h3>
                    <p class="mt-3 text-base font-medium leading-relaxed text-black/70">Pikat kryesore të veprimit janë të qarta dhe me feedback të menjëhershëm.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bauhaus-section border-b-0 bg-[var(--color-bauhaus-yellow)]">
        <div class="bauhaus-container relative overflow-hidden border-4 border-black bg-[var(--color-bauhaus-yellow)] px-6 py-10 bauhaus-shadow-lg sm:px-10 lg:px-14 lg:py-16">
            <div class="absolute -left-8 -top-8 size-28 rounded-full border-4 border-black bg-white/50 sm:size-40"></div>
            <div class="absolute -bottom-10 right-8 size-24 rotate-45 border-4 border-black bg-[var(--color-bauhaus-red)]/60 sm:size-36"></div>

            <div class="relative z-10 max-w-4xl space-y-6">
                <p class="bauhaus-kicker text-[var(--color-bauhaus-red)]">Gati për provim?</p>
                <h2 class="bauhaus-display max-w-3xl text-3xl sm:text-5xl lg:text-7xl">
                    Ndërto rutinën tënde të praktikës dhe hyr në test me qetësi.
                </h2>

                <div class="flex flex-col gap-4 sm:flex-row">
                    <a href="#hero" class="bauhaus-button bauhaus-button--blue">Kthehu në krye</a>
                    <a href="#kontakt" class="bauhaus-button bauhaus-button--outline">Na kontakto</a>
                </div>
            </div>
        </div>
    </section>
</div>
