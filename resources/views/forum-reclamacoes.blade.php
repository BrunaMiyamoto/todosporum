@extends('layouts.site')

@section('conteudo')
    <div class="bg-white shadow-[0px_0px_6px_rgba(0,0,0,0.5)] max-w-80 rounded-md py-2 my-5 mx-auto">
        <ul class="flex justify-center gap-5 text-[#e9702a] font-semibold ">
            <li><a href="{{ route('forumProjetos') }}">Projetos</a></li>
            <li>
                <a href="{{ route('forumReclamacoes') }}">Reclamações</a>
            </li>
            <li>
                <a href="{{ route('forumDuvidas') }}">Dúvidas</a>
            </li>
        </ul>
    </div>

    <div class="max-w-5xl grid  py-10 gap-7 px-8 mx-auto">

        <div class="">
            <div class=" py-5 flex gap-4 ">
                <form>
                    <input class="bg-[#ebf2fa] rounded-lg text-xs" type="text" name="pesquisarPublicacao"
                        id="pesquisarPublicacao" placeholder="Pesquisar por uma publicação..." />
                </form>
                <a href="{{ route('admin.postagem.cadastrar') }}" id="abreModal"
                    class="bg-[#629643] text-white rounded-lg px-4 py-1 ">
                    Faça uma publicação
                </a>

                {{-- <div id="modal" class="modal someModal">
                    <div class="conteudoModal">
                        <span id="fechaModal" class="fechaModal">x</span>
                        <h2 id="modalTitulo">FAÇA SUA PUBLICAÇÃO</h2>
                        <hr id="linha" />
                        <p>
                            <strong>Leia atentamente antes de publicar no nosso fórum.</strong><br /><br />

                            Preencha corretamente os campos solicitados e certifique-se de
                            que sua reclamação esteja em conformidade com as regras da
                            plataforma Todos por Um. Lembre-se: qualquer conteúdo
                            inadequado, malicioso ou que viole nossas diretrizes será
                            removido. O usuário responsável poderá receber um strike ou
                            até perder o acesso à conta.
                        </p>
                        <hr id="linha" />
                        <form>
                            <label for="tituloPublicacao" class="titulo">Título da reclamação</label>
                            <br />
                            <input type="text" name="tituloPublicacao" id="tituloPublicacao" class="campo" />

                            <br /><br />
                            <label class="titulo">Conteúdo da reclamação</label>
                            <br />
                            <textarea name="conteudoPublicacao" id="conteudoPublicacao" class="campo" rows="5" cols="100"></textarea>

                            <br /><br />
                            <input type="checkbox" name="cienteBotao" id="cienteBotao" class="tagOpcao" />
                            <label>Estou ciente das regras do site Todos por Um em relação a
                                postagems e tomo qualquer responsabilidade sobre minha
                                postagem.</label>

                            <div id="botaoPosicao">
                                <br /><br />
                                <button type="submit" class="botaoConfirmar">
                                    Publicar
                                </button>
                                <button type="reset" class="botaoConfirmar">Limpar</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>

            <div>
                <section class="bg-white rounded-lg shadow-[0px_0px_6px_rgba(0,0,0,0.5)] mb-6 p-5 ">
                    <div class="flex justify-between py-1">
                        <div class="">
                            <ul class="flex gap-3 pb-3">
                                <li class="bg-red-700 text-white font-semibold  rounded-lg px-2 py-1">Aberto</li>
                            </ul>
                        </div>
                        <div class="text-[#333333]">Projeto por: Usuário00003</div>
                    </div>
                    <h3 class="text-[#e9702a] font-bold pb-1">Buracos na Rua Prejudicam Moradores</h3>
                    <p>
                        <strong>Descrição:</strong> Minha rua está cheia de buracos há
                        meses, o que tem dificultado muito a circulação de carros e
                        pedestres. Quando chove, a situação piora ainda mais, formando
                        poças grandes e perigosas. Já ocorreram pequenos acidentes e
                        danos a veículos. Peço que a prefeitura realize a manutenção
                        urgente do asfalto para garantir mais segurança e qualidade de
                        vida para todos os moradores.
                    </p>
                    <div class="flex gap-2 pt-3 justify-end">
                        <img src="{{ asset('assets/img/palm-of-hand.png') }}" width="20" /> 43
                        <img src="{{ asset('assets/img/chat (1).png') }}" width="20" /> 12
                    </div>
                </section>

                <section class="bg-white rounded-lg shadow-[0px_0px_6px_rgba(0,0,0,0.5)] mb-6 p-5 ">
                    <div class="flex justify-between py-1">
                        <div class="">
                            <ul class="flex gap-3 pb-3">
                                <li class="bg-[#629643] text-white font-semibold  rounded-lg px-2 py-1">Resolvido</li>
                            </ul>
                        </div>
                        <div class="text-[#333333]">Projeto por: Usuário00003</div>
                    </div>
                    <h3 class="text-[#e9702a] font-bold pb-1">Buracos na Rua Prejudicam Moradores</h3>
                    <p>
                        <strong>Descrição:</strong> Minha rua está cheia de buracos há
                        meses, o que tem dificultado muito a circulação de carros e
                        pedestres. Quando chove, a situação piora ainda mais, formando
                        poças grandes e perigosas. Já ocorreram pequenos acidentes e
                        danos a veículos. Peço que a prefeitura realize a manutenção
                        urgente do asfalto para garantir mais segurança e qualidade de
                        vida para todos os moradores.
                    </p>
                    <div class="flex gap-2 pt-3 justify-end">
                        <img src="{{ asset('assets/img/palm-of-hand.png') }}" width="20" /> 43
                        <img src="{{ asset('assets/img/chat (1).png') }}" width="20" /> 12
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
