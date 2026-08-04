@extends('layouts.site')

@section('conteudo')
    <div class="max-w-7xl mx-auto py-8 px-5 font-sans">
        <div class="titulosecao">
            <h2 class="text-start text-[#05668D] pt-4 font-bold text-xl">ARTIGO</h2>
            <h3 class="font-bold py-4 text-sm">Mulheres e Representatividade na Política Local: Por Que Isso Importa?</h3>
            <p class="text-sm text-[#8d8c8c]">Escrito por: Artigo teste feito por Inteligência Artificial</p>
            <p class="border-b-2 border-[#05668D] pb-5 max-w-7xl mx-auto text-sm text-[#8d8c8c]">Publicado em: 04/08/2026</p>

        </div>

        <div class="grid grid-cols-1 gap-9 sm:grid-cols-[1fr_1fr] mx-auto">
            <div class="pt-8 text-justify text-sm ">
                <p class="pb-3">
                    Se você fosse montar uma comissão para planejar o transporte público de uma cidade, chamaria apenas
                    pessoas que só andam de carro particular? Provavelmente não, pois quem não utiliza o ônibus diariamente
                    não conhece as reais dificuldades de quem espera no ponto à noite.

                    Na política ocorre o mesmo fenômeno: quem vivencia os problemas tem muito mais sensibilidade para propor
                    as soluções.

                    Apesar de as mulheres representarem mais de 51% da população brasileira, a média de presença feminina
                    nas Câmaras Municipais no Brasil ainda é historicamente baixa. Essa sub-representação impacta
                    diretamente o tipo de lei que é discutido e aprovado na sua cidade.
                </p>
                <p class="pb-3">
                    <strong>Como a diversidade altera a pauta de leis?</strong>
                    Quando mulheres, negros, pessoas com deficiência e lideranças comunitárias ocupam cadeiras nas Câmaras
                    de Vereadores ou participam ativamente da elaboração de leis de iniciativa popular, a agenda pública
                    muda significativamente:

                    Políticas de Combate à Violência de Gênero: Criação de centros de referência para acolhimento de
                    mulheres em situação de vulnerabilidade e programas municipais de patrulha e proteção.

                    Infraestrutura com Olhar Social: Iluminação pública reforçada em trajetos escolares e pontos de ônibus,
                    além do planejamento de calçadas acessíveis para carrinhos de bebê e cadeirantes.

                    Apoio à Maternidade e Primeira Infância: Leis que garantem a ampliação de vagas em creches de tempo
                    integral, permitindo que mães possam trabalhar e estudar.
                </p>
                <p class="pb-3">
                    <strong>O papel da cota de gênero e o engajamento cívico</strong>
                    A legislação eleitoral brasileira estabelece que cada partido deve preencher o mínimo de 30% e o máximo
                    de 70% de candidaturas para cada gênero. No entanto, a verdadeira mudança ocorre quando a sociedade
                    civil utiliza a internet e as redes comunitárias para dar visibilidade a pautas inclusivas, apoiar
                    projetos criados por lideranças femininas e exigir que os conselhos municipais reflitam a real
                    diversidade da população.

                    A política só se torna verdadeiramente democrática quando a mesa de decisões tem a cara e a voz de toda
                    a sociedade.
                </p>




            </div>
            <div class="pt-9">

                <img src={{ asset('assets/img/photo-1573496359142-b8d87734a5a2.avif') }}
                    class=" mx-auto max-h-[550px] w-full flex-shrink-0" alt="Imagem de Barack Obama em ligação" />

            </div>
        </div>
    </div>
@endsection
