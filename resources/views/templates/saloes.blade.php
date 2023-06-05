<section class="about-section section-padding" id="section_3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white text-center mb-4">NOSSOS SALÕES PARCEIROS</h1>

                <form id="filtro-form">
                    <label for="tipo">Tipos de serviços:</label>
                    <select id="tipo" name="tipo">
                        <option value="todos">Todos</option>
                        <option value="corte">Corte</option>
                        <option value="escova">Escova</option>
                        <option value="hidratacao">Hidratação</option>
                        <option value="luzes">Luzes</option>
                        <option value="progressiva">Progressiva</option>
                        <option value="selagem">Selagem</option>
                        <option value="tintura">Tintura</option>
                        <option value="botox">Botox</option>
                        <option value="penteado">Penteado</option>
                        <option value="sobrancelhas">Sobrancelhas</option>
                        <option value="cilios">Cílios</option>
                        <option value="barba">Barba</option>
                        <option value="maquiagem">Maquiagem</option>
                        <option value="drenagem">Drenagem</option>
                        <option value="massagem">Massagem</option>
                        <option value="spa">Spa</option>
                        <option value="depilacao">Depilação</option>
                        <option value="manicure">Manicure</option>
                        <option value="pedicure">Pedicure</option>
                    </select>
                        <button type="submit">Filtrar</button>
                </form>

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
                </div>

            </div>

        </div>
    </div>
</section>
