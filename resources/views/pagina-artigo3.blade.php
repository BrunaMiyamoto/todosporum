@extends('layouts.site')

@section('conteudo')
    <div class="max-w-7xl mx-auto py-8 px-5 font-sans">
        <div class="titulosecao">
            <h2 class="text-start text-[#05668D] pt-4 font-bold text-xl">ARTIGO</h2>
            <h3 class="font-bold py-4 text-sm">Da Ideia à Sanção: O Caminho de um Projeto na Câmara Municipal.</h3>
            <p class="text-sm text-[#8d8c8c]">Escrito por: Artigo teste feito por Inteligência Artificial</p>
            <p class="border-b-2 border-[#05668D] pb-5 max-w-7xl mx-auto text-sm text-[#8d8c8c]">Publicado em: 04/08/2026</p>

        </div>

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-[1fr_1fr] mx-auto">
            <div class="pt-8 text-justify text-sm ">
                <p class="pb-3">
                    Muitos cidadãos acreditam que, ao entregar um projeto na Câmara de Vereadores, ele vai direto para a
                    votação de "sim ou não". Na realidade, o processo legislativo é como um controle de qualidade de uma
                    fábrica: o projeto passa por vários testes rigorosos antes de ir para a "prateleira" das leis vigentes.

                    Acompanhe as quatro etapas fundamentais da tramitação:
                </p>
                <p class="pb-3">
                    <strong>1. Protocolo e Leitura no Expediente</strong>
                    O projeto é entregue na Secretaria da Câmara, recebe um número oficial e é lido publicamente na sessão
                    subsequente. A partir deste momento, ele se torna um documento público.
                </p>
                <p class="pb-3">
                    <strong>2. A Fase Crítica: As Comissões Temáticas</strong>
                    Antes de ir a plenário, o projeto é fatiado e analisado por grupos menores de vereadores chamados de
                    Comissões Permanentes:

                    Comissão de Constituição e Justiça (CCJ): É o filtro jurídico. Analisa se a proposta é constitucional
                    (se não fere leis federais/estaduais) e se a redação atende à técnica legislativa.

                    Comissão de Finanças e Orçamento: Avalia o custo e a viabilidade financeira da proposta.

                    Comissões de Mérito (Educação, Direitos Humanos, Meio Ambiente...): Avaliam a utilidade social do
                    projeto.

                    Observação: Se a CCJ der parecer de "Inconstitucionalidade", o projeto pode ser arquivado ali mesmo, a
                    menos que haja recurso.
                </p>

                <p class="">
                    <strong>3. A Votação no Plenário</strong>
                    Superadas as comissões, o projeto entra na Ordem do Dia para votação por todos os vereadores.

                    Dependendo do assunto (por exemplo, alteração na Lei Orgânica ou impostos), é necessário Quórum
                    Qualificado (voto favorável de 2/3 dos vereadores). Para assuntos comuns, exige-se Maioria Simples
                    (metade mais um dos presentes).

                    Em muitos casos, o projeto precisa passar por duas votações (1º e 2º turno) com intervalo de dias entre
                    elas.
                </p>

                <p class="text-justify text-sm pt-3">
                    <strong>4. O Desfecho: Sanção, Veto e Promulgação</strong>
                    Se aprovado na Câmara, o texto segue para o Poder Executivo (Prefeito):

                    Sanção: O Prefeito concorda com a lei e a assina. Ela é publicada no Diário Oficial e entra em vigor.

                    Veto (Total ou Parcial): O Prefeito discorda da lei (por achar inconstitucional ou contrária ao
                    interesse público). Ele devolve o texto para a Câmara, que pode votar para derrubar o veto e fazer a lei
                    valer mesmo sem a concordância do Prefeito!
                </p>


            </div>
            <div class="pt-9">

                <img src={{ asset('assets/img/photo-1577495508048-b635879837f1.avif') }}
                    class=" mx-auto max-h-[520px] w-full object-cover flex-shrink-0"
                    alt="Imagem de Barack Obama em ligação" />

            </div>
        </div>
    </div>
@endsection
