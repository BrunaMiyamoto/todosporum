@extends('layouts.site')

@section('titulo', 'Perguntas Frequentes | Todos Por Um')

@section('conteudo')

    <section class="bg-[#ebf2fa] min-h-screen py-12 px-5">

        <div class="max-w-5xl mx-auto">

            <!-- TÍTULO -->

            <div class="text-center mb-10">

                <h1 class="text-[#05668d] font-bold text-3xl md:text-4xl mb-4">
                    PERGUNTAS FREQUENTES
                </h1>

                <p class="text-neutral-700 text-base md:text-lg">
                    Tire suas dúvidas e descubra como participar
                    da transformação da nossa comunidade!
                </p>

            </div>

            <!-- CAMPO DE PESQUISA -->

            <div class="max-w-2xl mx-auto mb-10">

                <input type="search" id="pesquisaFaq" placeholder="Digite sua dúvida..." aria-label="Pesquisar perguntas"
                    class="w-full p-4 rounded-xl border border-[#99cef3]
                bg-white focus:outline-none focus:ring-2
                focus:ring-[#05668d] shadow-sm">

            </div>

            <!-- LISTA DE PERGUNTAS -->

            <div id="listaFaq" class="space-y-4">

                <!-- PERGUNTA 1 -->

                <div class="faq-item bg-white rounded-xl shadow-md p-5">

                    <button type="button"
                        class="perguntaFaq w-full flex justify-between items-center
                    text-left font-bold text-[#05668d]">

                        O que é o Todos Por Um?

                        <span class="text-[#e9702a] text-2xl">+</span>

                    </button>

                    <div class="respostaFaq hidden pt-4 text-neutral-700 leading-relaxed">

                        O Todos Por Um é uma plataforma digital independente
                        e sem fins lucrativos, destinada à população de Marília.
                        Seu objetivo é incentivar a participação cidadã,
                        permitindo que os moradores compartilhem ideias,
                        questões sociais e projetos para melhorar a comunidade.

                    </div>

                </div>

                <!-- PERGUNTA 2 -->

                <div class="faq-item bg-white rounded-xl shadow-md p-5">

                    <button type="button"
                        class="perguntaFaq w-full flex justify-between items-center
                    text-left font-bold text-[#05668d]">

                        Quem pode participar da plataforma?

                        <span class="text-[#e9702a] text-2xl">+</span>

                    </button>

                    <div class="respostaFaq hidden pt-4 text-neutral-700 leading-relaxed">

                        A plataforma é destinada aos cidadãos interessados
                        em participar das discussões, apresentar sugestões
                        e contribuir com ideias para o desenvolvimento
                        da cidade de Marília.

                    </div>

                </div>

                <!-- PERGUNTA 3 -->

                <div class="faq-item bg-white rounded-xl shadow-md p-5">

                    <button type="button"
                        class="perguntaFaq w-full flex justify-between items-center
                    text-left font-bold text-[#05668d]">

                        Como posso criar uma conta?

                        <span class="text-[#e9702a] text-2xl">+</span>

                    </button>

                    <div class="respostaFaq hidden pt-4 text-neutral-700 leading-relaxed">

                        Acesse a opção Login/Registre-se no menu principal
                        do site e procure a opção de cadastro para criar
                        sua conta e acessar as funcionalidades disponíveis.

                    </div>

                </div>

                <!-- PERGUNTA 4 -->

                <div class="faq-item bg-white rounded-xl shadow-md p-5">

                    <button type="button"
                        class="perguntaFaq w-full flex justify-between items-center
                    text-left font-bold text-[#05668d]">

                        Como posso cadastrar uma ideia ou projeto?

                        <span class="text-[#e9702a] text-2xl">+</span>

                    </button>

                    <div class="respostaFaq hidden pt-4 text-neutral-700 leading-relaxed">

                        Acesse sua conta e procure a opção de publicação
                        de projetos. Apresente sua proposta, descreva
                        o objetivo e compartilhe sua ideia com a comunidade.

                    </div>

                </div>

                <!-- PERGUNTA 5 -->

                <div class="faq-item bg-white rounded-xl shadow-md p-5">

                    <button type="button"
                        class="perguntaFaq w-full flex justify-between items-center
                    text-left font-bold text-[#05668d]">

                        Como funciona o fórum?

                        <span class="text-[#e9702a] text-2xl">+</span>

                    </button>

                    <div class="respostaFaq hidden pt-4 text-neutral-700 leading-relaxed">

                        O fórum é um espaço de participação cidadã,
                        onde os usuários podem compartilhar opiniões,
                        conhecer projetos e participar de discussões
                        sobre assuntos importantes para a comunidade.

                    </div>

                </div>

                <!-- PERGUNTA 6 -->

                <div class="faq-item bg-white rounded-xl shadow-md p-5">

                    <button type="button"
                        class="perguntaFaq w-full flex justify-between items-center
                    text-left font-bold text-[#05668d]">

                        Posso interagir com as ideias de outros usuários?

                        <span class="text-[#e9702a] text-2xl">+</span>

                    </button>

                    <div class="respostaFaq hidden pt-4 text-neutral-700 leading-relaxed">

                        Sim! A plataforma busca incentivar a troca de
                        experiências, opiniões e sugestões entre os cidadãos,
                        conforme as funcionalidades disponíveis no fórum.

                    </div>

                </div>

                <!-- PERGUNTA 7 -->

                <div class="faq-item bg-white rounded-xl shadow-md p-5">

                    <button type="button"
                        class="perguntaFaq w-full flex justify-between items-center
                    text-left font-bold text-[#05668d]">

                        Qual é o objetivo principal do projeto?

                        <span class="text-[#e9702a] text-2xl">+</span>

                    </button>

                    <div class="respostaFaq hidden pt-4 text-neutral-700 leading-relaxed">

                        Nosso objetivo é fortalecer a participação popular,
                        incentivar o debate público e contribuir para que
                        ideias e propostas da população possam chegar
                        à Câmara Municipal de Marília.

                    </div>

                </div>

                <!-- PERGUNTA 8 -->

                <div class="faq-item bg-white rounded-xl shadow-md p-5">

                    <button type="button"
                        class="perguntaFaq w-full flex justify-between items-center
                    text-left font-bold text-[#05668d]">

                        Como posso entrar em contato com a equipe?

                        <span class="text-[#e9702a] text-2xl">+</span>

                    </button>

                    <div class="respostaFaq hidden pt-4 text-neutral-700 leading-relaxed">

                        Você pode acessar a página Contato disponível
                        no menu principal do site para enviar suas dúvidas,
                        sugestões ou mensagens.

                    </div>

                </div>

            </div>

            <!-- MENSAGEM SEM RESULTADOS -->

            <p id="semResultado" class="hidden text-center text-neutral-600 mt-8">

                Nenhuma pergunta encontrada.
                Tente pesquisar com outras palavras.

            </p>

            <!-- ÁREA DE CONTATO -->

            <div class="bg-white rounded-xl shadow-md p-8 text-center mt-12">

                <h2 class="text-[#05668d] font-bold text-2xl mb-3">

                    Ainda tem dúvidas?

                </h2>

                <p class="text-neutral-700 mb-6">

                    Entre em contato conosco.
                    Será um prazer ajudar você!

                </p>

                <a href="{{ route('contato') }}"
                    class="inline-block bg-[#e9702a] hover:bg-[#cf5e20]
                text-white font-bold px-8 py-3 rounded-xl
                transition duration-300">

                    <i class="fa-solid fa-envelope mr-2"></i>
                    Entre em contato

                </a>

            </div>

        </div>

    </section>


    <!-- JAVASCRIPT DO FAQ -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const perguntas = document.querySelectorAll('.perguntaFaq');

            const pesquisa = document.getElementById('pesquisaFaq');

            const itens = document.querySelectorAll('.faq-item');

            const semResultado = document.getElementById('semResultado');


            // ABRIR E FECHAR PERGUNTAS

            perguntas.forEach(botao => {

                botao.addEventListener('click', function() {

                    const resposta = botao.nextElementSibling;

                    const icone = botao.querySelector('span');

                    resposta.classList.toggle('hidden');

                    icone.textContent = resposta.classList.contains('hidden') ?
                        '+' :
                        '-';

                });

            });


            // PESQUISAR PERGUNTAS

            pesquisa.addEventListener('input', function() {

                const texto = pesquisa.value
                    .toLowerCase()
                    .normalize('NFD')
                    .replace(/[\u0300-\u036f]/g, '');

                let encontrados = 0;

                itens.forEach(item => {

                    const conteudo = item.textContent
                        .toLowerCase()
                        .normalize('NFD')
                        .replace(/[\u0300-\u036f]/g, '');

                    const encontrou = conteudo.includes(texto);

                    item.classList.toggle('hidden', !encontrou);

                    if (encontrou) {

                        encontrados++;

                    } else {

                        const resposta = item.querySelector('.respostaFaq');

                        const icone = item.querySelector('span');

                        resposta.classList.add('hidden');

                        icone.textContent = '+';

                    }

                });

                semResultado.classList.toggle('hidden', encontrados > 0);

            });

        });
    </script>

@endsection
