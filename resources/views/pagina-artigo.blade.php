@extends('layouts.site')

@section('conteudo')
    <div class="max-w-7xl mx-auto py-8 px-5 font-sans">
        <div class="titulosecao">
            <h2 class="text-start text-[#05668D] pt-4 font-bold text-xl">ARTIGO</h2>
            <h3 class="font-bold py-4 text-sm">A Receita da Mudança: Como Estruturar um Projeto de Lei.</h3>
            <p class="text-sm text-[#8d8c8c]">Escrito por: Artigo teste feito por Inteligência Artificial</p>
            <p class="border-b-2 border-[#05668D] pb-5 max-w-7xl mx-auto text-sm text-[#8d8c8c]">Publicado em: 04/08/2026</p>

        </div>

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-[1fr_1fr] mx-auto">
            <div class="pt-8 text-justify text-sm ">
                <p class="pb-3">
                    Transformar uma necessidade da sua comunidade em uma norma legal exige mais do que uma boa intenção:
                    exige
                    técnica legislativa e estratégia. No entanto, ao contrário do que muitos pensam, a estrutura de uma lei
                    segue
                    uma lógica muito organizada e compreensível. Pense no Projeto de Lei (PL) como o manual de instruções ou
                    a
                    receita de bolo para resolver um problema coletivo na cidade.

                    Para que a Câmara Municipal consiga analisar sua proposta, ela precisa ser dividida em partes
                    essenciais:
                </p>
                <p class="pb-3">
                    <strong>1. A Ementa (O "Título Executivo")</strong>
                    É a primeira frase que aparece no topo do documento. Ela serve para resumir, em poucas palavras, o
                    objetivo
                    exato da lei.

                    Exemplo simples: "Dispõe sobre a criação do Programa de Reforço de Iluminação Pública nos arredores das
                    escolas
                    municipais e dá outras providências."
                </p>
                <p class="pb-3">
                    <strong>2. O Corpo da Lei (Artigos, Parágrafos e Incisos)</strong>
                    Aqui é onde o "modo de preparo" é detalhado. Cada Artigo (Art.) trata de uma ideia principal:

                    Artigo 1º (O Objetivo): Define a ação principal da lei (o que será feito).

                    Artigo 2º (A Execução e Critérios): Estabelece como o serviço será prestado, quem são os beneficiários
                    (priorizando grupos vulneráveis, por exemplo) e os prazos.

                    Parágrafos (§) e Incisos (I, II, III): Servem para detalhar as exceções, regras específicas ou listas de
                    requisitos.
                </p>

                <p class="">
                    <strong>3. A Análise de Impacto Financeiro (De onde vem o dinheiro?)</strong>
                    Toda lei que gera custos para a prefeitura precisa respeitar a Lei de Responsabilidade Fiscal. Por isso,
                    o
                    texto
                    deve indicar de onde sairão os recursos (seja do orçamento já existente da Secretaria de Obras, de
                    fundos
                    específicos ou de parcerias públicos-privadas). Sem isso, o projeto é barrado por gerar despesa sem
                    previsão.
                </p>


            </div>
            <div class="pt-9">

                <img src={{ asset('assets/img/photo-1541872703-74c5e44368f9.avif') }}
                    class=" mx-auto max-h-96 flex-shrink-0" alt="Imagem de Barack Obama em ligação" />
                <p class="text-justify text-sm pt-3">
                    <strong>4. A Justificativa (O Coração da Proposta)</strong>
                    É a parte final do projeto, onde você argumenta o porquê daquela lei existir. Na justificativa,
                    apresentamos
                    dados sociais, relatos da comunidade, estatísticas de segurança ou desigualdade (ligadas às ODS da ONU)
                    e
                    explicamos os benefícios a curto, médio e longo prazo para o município.

                    Resumo da Dica do Professor: O segredo não está em usar termos difíceis ("juridiquês"), mas em
                    demonstrar
                    com
                    clareza qual problema é resolvido, quanto vai custar e como vai funcionar na prática.
                </p>
            </div>
        </div>
    </div>
@endsection
