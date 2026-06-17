@extends('layouts.site')

@section('conteudo')
    <div class="rosa">
        <div class="esquerda">
            <form>
                <h2>ENTRE EM CONTATO</h2>
                <p>
                    Preencha o formulário e a equipe do Todos Por Um entrara em
                    contato brevemente com você.
                </p>

                <label for="nome" class="campo">Nome completo</label><br />
                <input type="text" name="nome" id="nome" class="contato" placeholder="Digite aqui..." />
                <br />
                <br />

                <label for="email" class="campo">E-mail</label><br />
                <input type="email" name="email" id="email" class="contato" placeholder="Digite aqui..." />
                <br />
                <br />
                <label for="contatar" class="campo">Motivo do contato</label><br />
                <select name="motivo" id="motivo" class="contato">
                    <option id="selecione">Selecione...</option>
                    <option>Reclamações</option>
                    <option>Dúvidas</option>
                    <option>Problema no Login</option>
                    <option>Reportar erro no site</option>
                    <option>Atualização/Correção de dados pessoais</option>
                    <option>Sugestão de melhoria</option>
                </select>
                <br />
                <br />

                <label for="descricao" class="campo">Descrição</label><br />
                <textarea name="descricao" id="descricao" class="contato" rows="10" cols="40" placeholder="Digite aqui..."></textarea>

                <br /><br />
                <button class="botao" type="reset">Limpar</button>
                <button class="botao" type="submit">Enviar</button>
            </form>
        </div>

        <div class="direita">
            <p id="pUm">
                Você também pode entrar em contato <br />com a equipe Todos Por Um
                por meio <br />de uma de nossas redes de <br />comunicação:
            </p>

            <section class="infos">
                <div>
                    <img src="img/telephone-call.png" alt="Telefone" height="30" />
                </div>
                <p>Telefone: <br />(14) 00000-0000</p>
            </section>

            <section class="infos">
                <img src="img/email.png" alt="E-mail" height="30" />
                <p>
                    E-mail: <br />
                    todosporum@gmail.com
                </p>
            </section>

            <hr class="linha" />
            <p>Nossas redes sociais:</p>
            <div id="rede">
                <img src="img/youtube-circle.png" alt="Ícone Youtube" width="30" />
                <img src="img/twitter-alt-circle.png" alt="Ícone Twitter" width="30" />
                <img src="img/whatsapp-circle.png" alt="Ícone Whatsapp" width="30" />
                <img src="img/facebook (1).png" alt="Ícone Facebook" width="30" />
                <img src="img/instagram-circle.png" alt="Ícone Instagram" width="30" />
            </div>
        </div>
    </div>
@endsection
