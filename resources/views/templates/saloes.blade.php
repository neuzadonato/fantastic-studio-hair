<section class="about-section section-padding" id="section_3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white text-center mb-4">Nossos salões parceiros</h1>

                <div class="row g-3 py-3 justify-content-center">
                    @foreach($saloes as $salao)
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <a href="{{ route('site.salao', [$salao->nome, $salao->id]) }}">
                                <div class="card p-4 border bg-white">
                                    <h1>{{ $salao->nome }}</h1>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
</section>
