@extends('layouts.site')

@section('conteudo')
     <div id="blocos">
        <div class="abasConfig">
          <ul>
            <li>
              <img src="img/user.png" alt="Sua conta" width="30" /><a
                href="sua-conta.html"
                >Sua conta</a
              >
            </li>
            <li>
              <img src="img/comment.png" alt="Suas postagens" width="30" /><a
                href="suas-postagens.html"
                >Suas postagens</a
              >
            </li>
            <li>
              <img
                src="img/lock.png"
                alt="Segurança e privacidade"
                width="30"
              /><a href="seguranca-privacidade.html">Segurança e privacidade</a>
            </li>
            <li>
              <img
                src="img/setting-lines.png"
                alt="Acessibilidade"
                width="30"
              /><a href="acessibilidade.html">Acessibilidade</a>
            </li>
            <li>
              <img src="img/logout.png" alt="Sair" width="30" /><a
                href="login.html"
                >Sair</a
              >
            </li>
          </ul>
        </div>

        <div class="abaAberta">
          <h2>SEGURANÇA E PRIVACIDADE</h2>
          <hr class="linhaAba" />
          <p>Navegaçao pública</p>
          <br />

          <label>Aninomato</label>
          <input type="checkbox" name="anonimato" id="anonimato" />

          <br /><br />
          <p class="explicacao">
            Sua conta será definida como privada e seu nome será substituído por
            um identificador genérico. Você ainda poderá gerenciar suas
            postagens e interagir nos comentários de outros usuários.
          </p>

          <hr class="linhaAba" />
          <form>
            <p>Suas informações</p>
            <br />

            <label for="email" class="tituloCampo">Seu e-mail</label>
            <br />
            <input
              type="text"
              name="email"
              id="email"
              class="campo"
              placeholder="gab**********@gmail.com"
            />
            <button type="submit" class="botaoAlterar">Alterar e-mail</button>

            <br /><br />

            <label for="senha" class="tituloCampo">Sua senha</label>
            <br />
            <input
              type="password"
              name="senha"
              id="senha"
              class="campo"
              placeholder="************"
            />
            <button type="submit" class="botaoAlterar">Alterar senha</button>

            <hr class="linhaAba" />
            <p>Políticas e Termos de Uso</p>
            <br />
            <p class="explicacao">
              <strong
                ><a href="#">Políticas</a> e
                <a href="#">Termos de Uso.</a></strong
              >
              Nosso compromisso é garantir uma experiência segura, ética e
              alinhada aos princípios de respeito, integridade e cooperação que
              norteiam o Todos por Um. Recomendamos que leia atentamente todas
              as disposições abaixo para compreender as regras que orientam o
              uso de nossos recursos e a proteção de suas informações.
            </p>
            <br />
            <p class="explicacao">
              Ao acessar ou utilizar nossa plataforma, você declara estar ciente
              e de acordo com estes Termos e Políticas. Caso tenha dúvidas,
              nossa equipe está disponível para esclarecimentos por meio dos
              canais de contato oficiais.
            </p>
          </form>
        </div>
      </div>
 
    @endsection