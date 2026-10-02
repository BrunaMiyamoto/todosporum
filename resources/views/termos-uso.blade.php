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
        <h1 class="text-[#05668d] font-bold ml-8">TERMOS DE USO</h1>
        <p class="text-[#9DAAB9] ml-8 border-b pb-4 mx-auto">Publicado em: 14/11/2025</p>

        <p class="text-justify py-3 px-8">
            Estes Termos de Uso regem o acesso e a utilização do site e dos serviços oferecidos pela plataforma Todos Por
            Um, com sede na cidade de
            Marília/SP.

            Ao cadastrar-se ou utilizar qualquer funcionalidade da Plataforma, você "Usuário" declara ter lido,
            compreendido e aceito integralmente estes Termos de Uso.
        </p>
        <p class="text-justify py-3 px-8">
            <strong>1. Objeto e Serviços Prestados:</strong>
            A Plataforma atua como um ecossistema digital independente focado no desenvolvimento do comércio local,
            inteligência comunitária e suporte à gestão microempresarial na cidade de Marília e região. Os serviços
            abrangem:

            Para Micro e Pequenas Empresas (Plano Empresas): Mapeamento de dores locais, mentorias individuais recorrentes,
            canal de apoio para dúvidas regulatórias/jurídicas básicas, vitrine de visibilidade regional e acesso a rede de
            parcerias com descontos comerciais.

            Para Cidadãos e Moradores (Plano Cidadão): Registro, organização e acompanhamento coletivo de demandas de
            infraestrutura e zeladoria urbana (ex: iluminação, vias públicas e serviços concedidos), bem como conteúdos de
            capacitação civil e comunitária.
        </p>
        <p class="text-justify py-3 px-8">
            <strong>2. Cadastro e Responsabilidades do Usuário:</strong>
            Elegibilidade: O cadastro para contratação de planos empresariais é exclusivo para maiores de 18 anos ou
            emancipados legais, detentores de CNPJ ou comprovadamente atuantes como microempreendedores (incluindo MEI).

            Veracidade das Informações: O Usuário se compromete a fornecer dados exatos, precisos e verdadeiros,
            responsabilizando-se civil e criminalmente por qualquer informação falsa ou desatualizada.

            Guarda de Credenciais: O login e a senha de acesso são pessoais e intransferíveis. O Usuário é o único
            responsável pelas atividades realizadas em sua conta.

            Conduta na Plataforma: É estritamente proibido:

            Publicar conteúdo difamatório, ilícito, de cunho discriminatório ou ofensivo a terceiros, agentes públicos ou
            concorrentes;

            Criar solicitações de zeladoria falsas, manipuladas ou com o intuito de prejudicar terceiros;

            Utilizar robôs, scrapers ou tecnologias automatizadas para extrair dados da Plataforma.
        </p>
        <p class="text-justify py-3 px-8">
            <strong>3. Planos, Cobrança, Cancelamento e Reembolso:</strong>
            Assinaturas Recorrentes: A contratação dos planos (mensais ou anuais) é feita sob a modalidade de assinatura com
            renovação automática no cartão de crédito ou meio de pagamento cadastrado.

            Reajuste de Valores: Os valores das mensalidades poderão ser reajustados periodicamente, mediante aviso prévio
            de no mínimo 30 (trinta) dias enviado ao e-mail cadastrado pelo Usuário.

            Cancelamento: O Usuário pode solicitar o cancelamento da assinatura a qualquer momento através do painel da sua
            conta. O cancelamento interromperá as cobranças do ciclo seguinte, mantendo-se o acesso ativo até o término do
            período já pago.

            Direito de Arrependimento: Conforme o Código de Defesa do Consumidor, o Usuário tem o prazo de 7 (sete) dias
            corridos, a contar da data de contratação inicial do plano, para solicitar o cancelamento com reembolso integral
            dos valores pagos.
        </p>
        <p class="text-justify py-3 px-8">
            <strong>4. Escopo de Atuação e Limitação de Responsabilidade:</strong>
            Natureza de Intermediação e Orientação: A Plataforma não se confunde com o Poder Público, concessionárias de
            serviços públicos ou órgãos de classe.

            Demandas de Infraestrutura Urbana: A Plataforma consolida e direciona reclamações da comunidade às autoridades
            ou concessionárias competentes, mas não garante prazo ou execução das obras e reparos, visto que tais atos
            dependem exclusivamente da administração pública municipal ou empresas concedidas.

            Mentorias e Orientações: As sessões de suporte e respostas jurídicas, contábeis ou de marketing têm caráter
            orientativo e consultivo. A Plataforma e seus mentores não se responsabilizam por decisões operacionais, fiscais
            ou judiciais tomadas autonomamente pelo Usuário.

            Indisponibilidade do Sistema: A Plataforma não responde por eventuais instabilidades temporárias decorrentes de
            manutenção técnica, falhas em provedores de internet ou casos fortuitos e de força maior.
        </p>
        <p class="text-justify py-3 px-8">
            <strong>5. Propriedade Intelectual:</strong>
            Todo o conteúdo disponível na Plataforma, incluindo marcas, logotipos, layouts, códigos de programação, banco de
            dados, artigos e modelos de documentos disponibilizados são de propriedade exclusiva da [Nome da
            Plataforma/Empresa] ou de seus licenciantes, sendo protegidos pela legislação de direitos autorais e propriedade
            industrial.
        </p>
        <p class="text-justify mb-24 py-3 px-8">
            <strong>6. Modificações dos Termos:</strong>
            A Plataforma reserva-se o direito de alterar estes Termos de Uso a qualquer momento. Alterações substanciais
            serão informadas com antecedência através do site ou e-mail. A continuidade do uso do serviço após a atualização
            implica a aceitação tácita dos novos termos.

            7. Foro e Legislação Aplicável
            Estes Termos são regidos e interpretados segundo as leis da República Federativa do Brasil. Fica eleito o Foro
            da Comarca de Marília, Estado de São Paulo, para dirimir qualquer controvérsia decorrente deste documento, com
            renúncia expressa a qualquer outro, por mais privilegiado que seja.
        </p>

    </div>
@endsection
