@extends('layouts.site')

@section('conteudo')
    <div class="navegacaoForum">
        <ul>
            <li><a href="forum-projetos.html">Projetos</a></li>
            <li>
                <a href="forum-reclamacoes.html">Reclamações</a>
            </li>
            <li>
                <a href="forum-duvidas.html">Dúvidas</a>
            </li>
        </ul>
    </div>

    <div class="conteudoForum">
        <div class="filtros">
            <form>
                <h2>FILTROS</h2>
                <br />
                <h3>TAGS</h3>

                <input type="checkbox" name="tagEducacao" id="Tageducacao" />
                <label>Educação</label><br />

                <input type="checkbox" name="TagInfraestrutura" id="TagInfraestrutura" />
                <label>Insfraestrutura</label><br />

                <input type="checkbox" name="TagSustentabilidade" id="TagSustentabilidade" />
                <label>Sustentabilidade</label><br />

                <input type="checkbox" name="TagPolitica" id="TagPolitica" />
                <label>Política</label><br />

                <input type="checkbox" name="TagTecnologia" id="TagTecnologia" />
                <label>Tecnologia</label><br />

                <input type="checkbox" name="TagCidadania" id="TagCidadania" />
                <label>Cidadania</label><br />

                <input type="checkbox" name="TagSaude" id="TagSaude" />
                <label>Saúde</label><br />

                <input type="checkbox" name="TagLazer" id="TagLazer" />
                <label>Lazer</label><br />

                <input type="checkbox" name="TagSegurancaPublica" id="TagSegurancaPublica" />
                <label>Segurança Pública</label><br />

                <input type="checkbox" name="TagEmpregabilidade" id="TagEmpregabilidade" />
                <label>Empregabilidade e Renda</label><br />

                <input type="checkbox" name="TagAdministracao" id="TagAdministracao" />
                <label>Administração Pública</label><br />

                <input type="checkbox" name="TagTransporte" id="TagTransporte" />
                <label>Transporte</label><br />

                <input type="checkbox" name="TagDireitosHumanos" id="TagDireitosHumanos" />
                <label>Direitos Humanos e Inclusão</label><br />

                <input type="checkbox" name="TagPlanejamento" id="TagPlanejamento" />
                <label>Planejamento e Orçamento</label><br />

                <br />
                <h3>POPULARIDADE</h3>

                <input type="checkbox" name="TagMaisVotos" id="TagMaisVotos" />
                <label>Mais Votos</label><br />

                <input type="checkbox" name="TagMaisComentados" id="TagMaisComentados" />
                <label>Mais Comentados</label><br />
            </form>
        </div>

        <div class="organizacao">
            <div class="interacaoForum">
                <form>
                    <input type="text" name="pesquisarPublicacao" id="pesquisarPublicacao"
                        placeholder="Pesquisar por uma publicação..." />
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
                            que sua publicação esteja em conformidade com as regras da
                            plataforma Todos por Um. Lembre-se: qualquer conteúdo
                            inadequado, malicioso ou que viole nossas diretrizes será
                            removido. O usuário responsável poderá receber um strike ou
                            até perder o acesso à conta.
                        </p>
                        <hr id="linha" />
                        <form>
                            <label class="titulo">Tags</label><br />

                            <input type="checkbox" name="educacao" id="educacao" class="tagOpcao" />
                            <label>Educação</label>

                            <input type="checkbox" name="infraestrutura" id="infraestrutura" class="tagOpcao" />
                            <label>Infraestrutura</label>

                            <input type="checkbox" name="sustentabilidade" id="sustentabilidade" class="tagOpcao" />
                            <label>Sustentabilidade</label>

                            <input type="checkbox" name="politica" id="politica" class="tagOpcao" />
                            <label>Política</label>

                            <input type="checkbox" name="tecnologia" id="tecnologia" class="tagOpcao" />
                            <label>Tecnologia</label>

                            <input type="checkbox" name="cidadania" id="cidadania" class="tagOpcao" />
                            <label>Cidadania</label>

                            <input type="checkbox" name="saude" id="saude" class="tagOpcao" />
                            <label>Saúde</label>

                            <input type="checkbox" name="lazer" id="lazer" class="tagOpcao" />
                            <label>Lazer</label>

                            <input type="checkbox" name="seguranca" id="seguranca" class="tagOpcao" />
                            <label>Segurança Pública</label>

                            <input type="checkbox" name="renda" id="renda" class="tagOpcao" />
                            <label>Empregabilidade e Renda</label>

                            <input type="checkbox" name="administracao" id="administracao" class="tagOpcao" />
                            <label>Administração Pública</label>

                            <input type="checkbox" name="transporte" id="transporte" class="tagOpcao" />
                            <label>Transporte</label>

                            <input type="checkbox" name="direitos" id="direitos" class="tagOpcao" />
                            <label>Direitos Humanos e Inclusão</label>

                            <input type="checkbox" name="planejamento" id="planejamento" class="tagOpcao" />
                            <label>Planejamento e Orçamento</label>

                            <br /><br />
                            <label for="tituloPublicacao" class="titulo">Título da publicação</label>
                            <br />
                            <input type="text" name="tituloPublicacao" id="tituloPublicacao" class="campo" />

                            <br /><br />
                            <label class="titulo">Conteúdo da publicação</label>
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
                                <li>Infraestrutura</li>
                                <li>Natureza</li>
                            </ul>
                        </div>
                        <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                    </div>
                    <h3>Projeto “Praça Viva” - Revitalização de Espaços Públicos</h3>
                    <p>
                        <strong>Objetivo:</strong> Transformar praças abandonadas ou
                        pouco utilizadas em espaços comunitários ativos, com
                        infraestrutura básica (bancos, iluminação, lixeiras), área
                        verde, brinquedos para crianças e espaços para atividades
                        culturais e esportivas.
                    </p>
                    <div class="interacoes">
                        <img src="img/palm-of-hand.png" width="25" /> 43
                        <img src="img/chat (1).png" width="25" /> 12
                    </div>
                </section>

                <section class="destaque">
                    <div class="cabeca">
                        <div class="tagsDestaque">
                            <ul>
                                <li>Infraestrutura</li>
                                <li>Natureza</li>
                            </ul>
                        </div>
                        <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                    </div>
                    <h3>Projeto “Praça Viva” - Revitalização de Espaços Públicos</h3>
                    <p>
                        <strong>Objetivo:</strong> Transformar praças abandonadas ou
                        pouco utilizadas em espaços comunitários ativos, com
                        infraestrutura básica (bancos, iluminação, lixeiras), área
                        verde, brinquedos para crianças e espaços para atividades
                        culturais e esportivas.
                    </p>
                    <div class="interacoes">
                        <img src="img/palm-of-hand.png" width="25" /> 43
                        <img src="img/chat (1).png" width="25" /> 12
                    </div>
                </section>

                <section class="destaque">
                    <div class="cabeca">
                        <div class="tagsDestaque">
                            <ul>
                                <li>Infraestrutura</li>
                                <li>Natureza</li>
                            </ul>
                        </div>
                        <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                    </div>
                    <h3>Projeto “Praça Viva” - Revitalização de Espaços Públicos</h3>
                    <p>
                        <strong>Objetivo:</strong> Transformar praças abandonadas ou
                        pouco utilizadas em espaços comunitários ativos, com
                        infraestrutura básica (bancos, iluminação, lixeiras), área
                        verde, brinquedos para crianças e espaços para atividades
                        culturais e esportivas.
                    </p>
                    <div class="interacoes">
                        <img src="img/palm-of-hand.png" width="25" /> 43
                        <img src="img/chat (1).png" width="25" /> 12
                    </div>
                </section>

                <section class="destaque">
                    <div class="cabeca">
                        <div class="tagsDestaque">
                            <ul>
                                <li>Infraestrutura</li>
                                <li>Natureza</li>
                            </ul>
                        </div>
                        <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                    </div>
                    <h3>Projeto “Praça Viva” - Revitalização de Espaços Públicos</h3>
                    <p>
                        <strong>Objetivo:</strong> Transformar praças abandonadas ou
                        pouco utilizadas em espaços comunitários ativos, com
                        infraestrutura básica (bancos, iluminação, lixeiras), área
                        verde, brinquedos para crianças e espaços para atividades
                        culturais e esportivas.
                    </p>
                    <div class="interacoes">
                        <img src="img/palm-of-hand.png" width="25" /> 43
                        <img src="img/chat (1).png" width="25" /> 12
                    </div>
                </section>

                <section class="destaque">
                    <div class="cabeca">
                        <div class="tagsDestaque">
                            <ul>
                                <li>Infraestrutura</li>
                                <li>Natureza</li>
                            </ul>
                        </div>
                        <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                    </div>
                    <h3>Projeto “Praça Viva” - Revitalização de Espaços Públicos</h3>
                    <p>
                        <strong>Objetivo:</strong> Transformar praças abandonadas ou
                        pouco utilizadas em espaços comunitários ativos, com
                        infraestrutura básica (bancos, iluminação, lixeiras), área
                        verde, brinquedos para crianças e espaços para atividades
                        culturais e esportivas.
                    </p>
                    <div class="interacoes">
                        <img src="img/palm-of-hand.png" width="25" /> 43
                        <img src="img/chat (1).png" width="25" /> 12
                    </div>
                </section>

                <section class="destaque">
                    <div class="cabeca">
                        <div class="tagsDestaque">
                            <ul>
                                <li>Infraestrutura</li>
                                <li>Natureza</li>
                            </ul>
                        </div>
                        <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                    </div>
                    <h3>Projeto “Praça Viva” - Revitalização de Espaços Públicos</h3>
                    <p>
                        <strong>Objetivo:</strong> Transformar praças abandonadas ou
                        pouco utilizadas em espaços comunitários ativos, com
                        infraestrutura básica (bancos, iluminação, lixeiras), área
                        verde, brinquedos para crianças e espaços para atividades
                        culturais e esportivas.
                    </p>
                    <div class="interacoes">
                        <img src="img/palm-of-hand.png" width="25" /> 43
                        <img src="img/chat (1).png" width="25" /> 12
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
