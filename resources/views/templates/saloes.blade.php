<section class="about-section section-padding" id="section_3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white text-center mb-4">NOSSOS SALÕES PARCEIROS</h1>

                <style>
                    .container1 {
                        max-width: 360px;
                        margin: 0 auto;
                        padding: 20px;
                        background-color: white;
                        border-radius: 130px;
                        margin-top: 50px;
                    }
                </style>
            <div class="container1">
                <form action="{{ route('home') }}" method='GET' class="d-flex flex-row gap-3">
                    @csrf

                    <div>
                        <label for="tipo">Tipos de serviços:</label>
                        <input type="text" class="form-control" name="busca">
                    </div>

                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </div>
                <div class="row g-3 py-3 text-center justify-content-center">
                    @foreach($saloes as $salao)
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <a href="{{ route('site.salao', [$salao->nome, $salao->id]) }}">
                                <div class="card p-4 border bg-white">
                                    <div class="foto text-center">
                                        <img class="img-fluid" src="/storage/{{ $salao->foto }}" />
                                    </div>

                                    <h2>{{ $salao->nome }}</h2>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    @if(empty($saloes->all()))
                        <h1 class="my-3 text-white">Não encontramos nenhum salão!</h1>
                    @endif
                </div>
                <div class="d-flex justify-content-center">
                    {{ $saloes->links() }}
                </div>

            </div>

        </div>
    </div>
</section>
