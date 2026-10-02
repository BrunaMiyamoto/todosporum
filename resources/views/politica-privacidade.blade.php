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
        <h1 class="text-[#05668d] font-bold ml-8">POLÍTICA DE PRIVACIDADE</h1>
        <p class="text-[#9DAAB9] ml-8 border-b pb-4 mx-auto">Publicado em: 14/11/2025</p>

        <p class="text-justify py-3 px-8">
            Esta Política de Privacidade descreve como a plataforma Todos Por Um, coleta, usa, armazena e compartilha dados
            pessoais de seus usuários, em conformidade com a Lei Geral de Proteção de Dados Pessoais (LGPD - Lei nº
            13.709/2018).

            Ao utilizar nosso site e serviços, você concorda com a coleta e uso de informações de acordo com esta política.
        </p>
        <p class="text-justify py-3 px-8">
            <strong>1. Dados Pessoais Coletados</strong>
            Coletamos os dados necessários para a prestação de nossos serviços, intermediação de demandas comunitárias e
            oferta de mentorias empresariais. Os dados podem incluir:

            Dados de Cadastro: Nome completo, CPF, e-mail, telefone de contato, endereço residencial ou comercial e senha de
            acesso.

            Dados Empresariais (quando aplicável): CNPJ, razão social, nome fantasia, segmento de atuação, regime tributário
            (ex: MEI) e necessidades específicas de gestão/marketing/jurídico.

            Dados de Zeladoria e Interações Comunitárias: Fotos, descrições, endereços de ocorrências locais (ex:
            iluminação, buracos, infraestrutura) e interações em fóruns/painéis da plataforma.

            Dados de Pagamento: Informações de cartão de crédito e histórico de transações (processados de forma segura por
            gateways de pagamento terceirizados parceiros).

            Dados de Navegação: Endereço IP, tipo de navegador, páginas visitadas, tempo de permanência e cookies de sessão.
        </p>
        <p class="text-justify py-3 px-8">
            <strong>2. Finalidades do Tratamento de Dados</strong>
            Seus dados pessoais são tratados para as seguintes finalidades legítimas:

            Prestação de Serviços e Mentorias: Permitir o agendamento de sessões com mentores/especialistas, tirar dúvidas
            jurídicas/contábeis e entregar recursos dos planos assinados.

            Intermediação de Demandas Locais: Organizar, mapear e consolidar solicitações de melhorias em infraestrutura e
            zeladoria urbana perante órgãos públicos ou concessionárias de serviços.

            Processamento de Pagamentos e Gestão de Assinaturas: Viabilizar cobranças recorrentes, emissão de notas fiscais
            e gerenciamento de planos ativados.

            Comunicação com o Usuário: Enviar notificações sobre atualizações de chamados, lembretes de reuniões, novidades
            da plataforma e suporte ao cliente.

            Segurança e Prevenção à Fraude: Garantir a autenticidade dos cadastros e a integridade da plataforma.

            Cumprimento de Obrigações Legais: Atender exigências fiscais, regulatórias ou ordens judiciais.
        </p>
        <p class="text-justify py-3 px-8">
            <strong>3. Compartilhamento de Dados Pessoais</strong>
            A [Nome da Plataforma/Empresa] não vende nem aluga seus dados pessoais. O compartilhamento ocorre apenas nas
            seguintes hipóteses:

            Órgãos Públicos e Concessionárias: Em casos de solicitações de infraestrutura urbana (ex: Prefeitura, DAEM,
            CPFL), os dados da ocorrência e localização podem ser apresentados de forma individualizada ou agregada para
            viabilizar a resolução do problema.

            Parceiros de Serviços e Mentores: Advogados, contadores ou consultores cadastrados que prestam os atendimentos
            ou mentorias contratadas.

            Provedores de Tecnologia: Empresas de hospedagem de dados, sistemas de CRM, envio de e-mails e gateways de
            pagamento (que possuem suas próprias políticas de privacidade).

            Determinação Legal: Quando exigido por lei, regulamentação ou autoridade judicial competente.
        </p>
        <p class="text-justify py-3 px-8">
            <strong>4. Armazenamento e Segurança dos Dados</strong>
            Adotamos medidas técnicas e organizacionais adequadas para proteger seus dados pessoais contra acessos não
            autorizados, perda, alteração ou destruição.

            Os dados de pagamento são criptografados através de protocolos padrões da indústria (SSL/TLS).

            O acesso aos dados pessoais é restrito aos colaboradores e parceiros que necessitam dessas informações para a
            prestação do serviço.

            Mantemos os dados apenas pelo tempo necessário para cumprir as finalidades descritas nesta política ou conforme
            exigido pela legislação aplicável.
        </p>
        <p class="text-justify py-3 px-8">
            <strong>Direitos do Titular dos Dados (LGPD)</strong>
            Em conformidade com o artigo 18 da LGPD, você tem o direito de, a qualquer momento e mediante requisição
            gratuita:

            Confirmar a existência de tratamento de seus dados pessoais.

            Acessar os dados mantidos pela plataforma.

            Solicitar a correção de dados incompletos, inexatos ou desatualizados.

            Solicitar a anonimização, bloqueio ou eliminação de dados desnecessários ou excessivos.

            Solicitar a portabilidade dos dados a outro fornecedor de serviço.

            Revogar o consentimento previamente concedido.

            Solicitar a exclusão definitiva da sua conta e dados (ressalvadas as obrigações legais de retenção de dados).
        </p>
        <p class="text-justify py-3 px-8">
            <strong>6. Uso de Cookies e Tecnologias de Rastreamento</strong>
            Utilizamos cookies para melhorar a navegação, personalizar a experiência do usuário e analisar o tráfego da
            plataforma.

            Cookies Necessários: Essenciais para o funcionamento do site e acesso à área logada.

            Cookies Analíticos: Ajudam a entender como os visitantes interagem com o site, permitindo melhorias contínuas.

            Você pode ajustar as configurações do seu navegador para recusar ou apagar cookies, embora isso possa afetar a
            funcionalidade de algumas partes da plataforma.
        </p>
        <p class="text-justify mb-24 py-3 px-8">
            <strong>7. Alterações nesta Política de Privacidade</strong>
            Reservamo-nos o direito de atualizar esta Política de Privacidade a qualquer momento para refletir melhorias no
            sistema ou mudanças legislativas. Recomendamos a consulta periódica desta página. Notificaremos os usuários
            cadastrados em caso de alterações significativas.

            8. Encarregado de Proteção de Dados (DPO) e Contato
            Para exercer seus direitos de titular, tirar dúvidas ou fazer solicitações relativas à privacidade dos seus
            dados, entre em contato com nosso Encarregado pelo Tratamento de Dados Pessoais (DPO):

            Encarregado (DPO): [Nome do Responsável ou Equipe de Privacidade]

            E-mail de Contato: [seu-email@sua-empresa.com.br]

            Endereço do Escritório: [Endereço Físico Completo, se houver, ou Cidade/Estado - Marília/SP]
        </p>
    </div>
@endsection
