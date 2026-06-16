@extends('layouts.site')

@section('conteudo')
    <div class="navegacaoForum">
        <ul>
            <li>
                <a href="forum-projetos.html">Projetos</a>
            </li>
            <li>
                <a href="forum-reclamacoes.html">Reclamações</a>
            </li>
            <li><a href="forum-duvidas.html">Dúvidas</a></li>
        </ul>
    </div>

    <div class="conteudoForum">
        <div class="organizacao">
            <div class="interacaoForum">
                <form>
                    <input type="text" name="pesquisarPublicacao" id="pesquisarPublicacao"
                        placeholder="Pesquisar por uma dúvida..." />
                </form>

                <br />
                <button id="abreModal" class="botaoFazerpubli">
                    Faça uma publicação
                </button>

                <div id="modal" class="modal someModal">
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
                </div>
            </div>

            <div>
                <section class="destaque">
                    <div class="cabeca">
                        <div class="tagsDestaque">
                            <ul>
                                <li class="aberto">Aberto</li>
                            </ul>
                        </div>
                        <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                    </div>
                    <h3>
                        Como faço para levar minha ideia para a câmara pessoalmente?
                    </h3>
                    <p>
                        <strong>Descrição:</strong> Queria sair para levar minha ideia
                        até a câmara, mas não sei quais os documentos preciso ou se
                        preciso marcar um horário. Como funciona o atendimento lá e como
                        devo me preparar?
                    </p>
                    <div class="interacoes">
                        <img src="assets/img/palm-of-hand.png" width="25" /> 43
                        <img src="assets/img/chat (1).png" width="25" /> 12
                    </div>
                </section>

                <section class="destaque">
                    <div class="cabeca">
                        <div class="tagsDestaque">
                            <ul>
                                <li class="aberto">Aberto</li>
                            </ul>
                        </div>
                        <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                    </div>
                    <h3>
                        Como faço para levar minha ideia para a câmara pessoalmente?
                    </h3>
                    <p>
                        <strong>Descrição:</strong> Queria sair para levar minha ideia
                        até a câmara, mas não sei quais os documentos preciso ou se
                        preciso marcar um horário. Como funciona o atendimento lá e como
                        devo me preparar?
                    </p>
                    <div class="interacoes">
                        <img src="assets/img/palm-of-hand.png" width="25" /> 43
                        <img src="assets/img/chat (1).png" width="25" /> 12
                    </div>
                </section>

                <section class="destaque">
                    <div class="cabeca">
                        <div class="tagsDestaque">
                            <ul>
                                <li class="aberto">Aberto</li>
                            </ul>
                        </div>
                        <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                    </div>
                    <h3>
                        Como faço para levar minha ideia para a câmara pessoalmente?
                    </h3>
                    <p>
                        <strong>Descrição:</strong> Queria sair para levar minha ideia
                        até a câmara, mas não sei quais os documentos preciso ou se
                        preciso marcar um horário. Como funciona o atendimento lá e como
                        devo me preparar?
                    </p>
                    <div class="interacoes">
                        <img src="assets/img/palm-of-hand.png" width="25" /> 43
                        <img src="assets/img/chat (1).png" width="25" /> 12
                    </div>
                </section>

                <section class="destaque">
                    <div class="cabeca">
                        <div class="tagsDestaque">
                            <ul>
                                <li class="aberto">Aberto</li>
                            </ul>
                        </div>
                        <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                    </div>
                    <h3>
                        Como faço para levar minha ideia para a câmara pessoalmente?
                    </h3>
                    <p>
                        <strong>Descrição:</strong> Queria sair para levar minha ideia
                        até a câmara, mas não sei quais os documentos preciso ou se
                        preciso marcar um horário. Como funciona o atendimento lá e como
                        devo me preparar?
                    </p>
                    <div class="interacoes">
                        <img src="assets/img/palm-of-hand.png" width="25" /> 43
                        <img src="assets/img/chat (1).png" width="25" /> 12
                    </div>
                </section>

                <section class="destaque">
                    <div class="cabeca">
                        <div class="tagsDestaque">
                            <ul>
                                <li class="aberto">Aberto</li>
                            </ul>
                        </div>
                        <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                    </div>
                    <h3>
                        Como faço para levar minha ideia para a câmara pessoalmente?
                    </h3>
                    <p>
                        <strong>Descrição:</strong> Queria sair para levar minha ideia
                        até a câmara, mas não sei quais os documentos preciso ou se
                        preciso marcar um horário. Como funciona o atendimento lá e como
                        devo me preparar?
                    </p>
                    <div class="interacoes">
                        <img src="assets/img/palm-of-hand.png" width="25" /> 43
                        <img src="assets/img/chat (1).png" width="25" /> 12
                    </div>
                </section>

                <section class="destaque">
                    <div class="cabeca">
                        <div class="tagsDestaque">
                            <ul>
                                <li class="aberto">Aberto</li>
                            </ul>
                        </div>
                        <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                    </div>
                    <h3>
                        Como faço para levar minha ideia para a câmara pessoalmente?
                    </h3>
                    <p>
                        <strong>Descrição:</strong> Queria sair para levar minha ideia
                        até a câmara, mas não sei quais os documentos preciso ou se
                        preciso marcar um horário. Como funciona o atendimento lá e como
                        devo me preparar?
                    </p>
                    <div class="interacoes">
                        <img src="assets/img/palm-of-hand.png" width="25" /> 43
                        <img src="assets/img/chat (1).png" width="25" /> 12
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
