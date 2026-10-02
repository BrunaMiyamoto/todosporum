@extends('layouts.site')

@section('conteudo')
    <div class="max-w-7xl mx-auto">
        <div class="container-botoes ">
            <ul class="flex justify-center text-white">
                <li class="bg-[#629643] rounded-md my-8 mx-3 p-1.5 text-center">
                    <a href="{{ route('politicaPrivacidade') }}" class="btn-privacidade">Política de Privacidade</a>
                </li>
                <li class="bg-[#629643] rounded-md my-8 mx-3 p-1.5 text-center">
                    <a href="{{ route('politicaCookies') }}" class="btn-cookies">Política de Cookies</a>
                </li>
                <li class="bg-[#629643] rounded-md my-8 mx-3 p-1.5 text-center">
                    <a href="{{ route('termosUso') }}" class="btn-termos de uso">Termos de Uso</a>
                </li>
            </ul>
        </div>
    </div>
    {{-- testando --}}

    <div class="max-w-7xl mx-auto">
        <h1 class="text-[#05668d] font-bold ml-8">POLÍTICA DE COOKIES</h1>
        <p class="text-[#9DAAB9] ml-8 border-b pb-4 mx-auto">Publicado em: 14/11/2025</p>

        <p class="text-justify py-3 px-8">
            Esta Política de Cookies explica como a plataforma Todos Por Um utiliza cookies e tecnologias semelhantes
            para reconhecer, personalizar e melhorar sua experiência ao navegar em nosso site.

        <p class="text-justify py-3 px-8">
            <strong>1. O que são Cookies?</strong> Cookies
            são pequenos arquivos de texto armazenados no seu computador ou dispositivo móvel quando você visita um site.
            Eles são amplamente utilizados para fazer os sites funcionarem com mais eficiência, guardar preferências de
            navegação e fornecer dados analíticos aos proprietários do sistema.
        </p>
        <p class="text-justify py-3 px-8">
            <strong>2. Tipos de Cookies Utilizados:</strong>
            Nossa
            Plataforma utiliza as seguintes categorias de cookies:Cookies Estritamente Necessários: Fundamentais para a
            navegação básica, autenticação de login, segurança e acesso à área restrita do assinante. Sem eles, o site não
            funciona corretamente.Cookies Funcionais: Salvam suas preferências e configurações de navegação (como idioma ou
            localização), evitando que você precise preenchê-las novamente a cada visita.Cookies Analíticos e de Desempenho:
            Coletam informações anônimas sobre como os Usuários interagem com o site (ex: páginas mais visitadas, tempo de
            permanência e taxa de erros). Utilizamos esses dados para otimizar a velocidade, estrutura e relevância do
            conteúdo.Cookies de Terceiros e Marketing: Posicionados por parceiros de tecnologia (gateways de pagamento,
            ferramentas de chat, redes sociais ou analytics) para permitir integração com ferramentas externas ou medir a
            eficiência de nossas campanhas de comunicação.
        </p>
        <div class="text-justify py-3 px-8">
            <strong>3. Tabela Resumida de Cookies</strong>

            <table class="border-2 border-black">
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Função
                            Principal</th>
                        <th>Duração</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="">
                        <td>Autenticação (Sessão)</td>
                        <td>Manter o Usuário logado na área restrita durante a navegação.</td>
                        <td>Sessão
                            (deletado ao fechar o navegador)</td>
                    </tr>
                    <tr>
                        <td> Segurança e Prevenção</td>
                        <td> Proteger contra ataques maliciosos (ex: CSRF, abuso de
                            formulários).</td>
                        <td> Persistente (até 1 ano)</td>
                    </tr>
                    <tr>
                        <td>Preferências</td>
                        <td>Armazenar consentimentos de cookies e configurações
                            locais.</td>
                        <td> Persistente (até 1 ano)</td>
                    </tr>
                    <tr>
                        <td>Análise (Ex: Google Analytics)</td>
                        <td>Gerar relatórios estatísticos anônimos sobre uso
                            da
                            plataforma.</td>
                        <td>Persistente (até 2 anos)</td>
                    </tr>
                    <tr>
                        <td>Gateway de Pagamento</td>
                        <td>Garantir a segurança na transação financeira e
                            prevenção
                            de fraudes.</td>
                        <td>Sessão / Persistente</td>
                    </tr>

                </tbody>

            </table>
        </div>
        <p class="text-justify py-3 px-8">
            <strong>4. Como Gerenciar ou Desativar Cookies?</strong> Você pode alterar ou bloquear o uso de
            cookies a qualquer momento diretamente nas configurações do seu navegador de internet.Abaixo estão os links para
            o suporte dos principais navegadores:Google Chrome: Configurações > Privacidade e segurança > Cookies e outros
            dados do siteMozilla Firefox: Opções > Privacidade e Segurança > Cookies e dados de sitesSafari: Preferências >
            Privacidade > Bloquear todos os cookiesMicrosoft Edge: Configurações > Permissões do site > Cookies e dados do
            siteAtenção: A desativação total dos cookies estritamente necessários pode impossibilitar o funcionamento de
            recursos essenciais da área logada e o agendamento de serviços na Plataforma.

        <p class="text-justify mb-24 py-3 px-8">
            <strong>5. Dúvidas e Contato:</strong>
            Se você tiver dúvidas sobre nossa Política de Cookies ou sobre o tratamento de dados pessoais na plataforma,
            entre em contato
            através do nosso canal de suporte:E-mail de Suporte: [seu-email@sua-empresa.com.br]Localização: Marília/SP -
            Brasil
        </p>

    </div>
@endsection
