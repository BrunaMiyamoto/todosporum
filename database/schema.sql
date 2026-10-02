-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/08/2026 às 14:27
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `todos_por_um`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aprenda_sobre`
--

CREATE TABLE `aprenda_sobre` (
  `id` int(11) NOT NULL,
  `dt_publi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `autor` varchar(100) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `conteudo` mediumtext NOT NULL,
  `capa` varchar(255) NOT NULL,
  `resumo` text NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `videos` varchar(255) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `aprenda_sobre`
--

INSERT INTO `aprenda_sobre` (`id`, `dt_publi`, `autor`, `titulo`, `conteudo`, `capa`, `resumo`, `usuario_id`, `videos`, `tipo`) VALUES
(1, '2026-05-03 03:00:00', 'Ana Martins', 'Introdução à Participação Cidadã', 'A participação cidadã é um dos pilares da democracia moderna. Por meio dela, a população pode contribuir com sugestões, fiscalizar ações governamentais e participar de consultas públicas. Ferramentas digitais têm ampliado o acesso da sociedade aos processos de tomada de decisão.', '', 'Entenda como a participação da população contribui para decisões mais transparentes e eficazes na administração pública.', 1, '', 'Artigo'),
(2, '2026-05-07 03:00:00', 'Carlos Oliveira', 'Sustentabilidade em Áreas Urbanas', 'O crescimento das cidades exige soluções sustentáveis para reduzir impactos ambientais. Entre as principais iniciativas estão a criação de áreas verdes, incentivo ao transporte sustentável, gestão eficiente de resíduos e uso consciente dos recursos naturais.', '', 'Conheça práticas sustentáveis que podem ser implementadas em cidades para melhorar a qualidade de vida.', 1, '', 'Artigo'),
(3, '2026-05-10 03:00:00', 'Fernanda Souza', 'O Papel das Ciclovias na Mobilidade Urbana', 'As ciclovias incentivam o uso da bicicleta como meio de transporte, reduzindo congestionamentos e emissões de poluentes. Além disso, promovem hábitos saudáveis e aumentam a segurança dos ciclistas quando adequadamente planejadas.', '', 'Descubra como as ciclovias contribuem para um trânsito mais eficiente e sustentável.', 1, '', 'Artigo'),
(4, '2026-05-13 03:00:00', 'Ricardo LIma', 'Educação Ambiental para Comunidades', 'A conscientização ambiental é essencial para o desenvolvimento sustentável. Programas educacionais ajudam a população a compreender a importância da reciclagem, preservação dos recursos naturais e redução do desperdício.', '', 'Saiba como a educação ambiental pode transformar hábitos e fortalecer a preservação do meio ambiente.', 1, '', 'Artigo'),
(5, '2026-05-17 03:00:00', 'Juliana Pereira', 'Tecnologia e Transparência Pública', 'Plataformas digitais permitem que cidadãos acompanhem gastos públicos, projetos em andamento e indicadores governamentais. A transparência fortalece a confiança entre população e administração pública.', '', 'Veja como a tecnologia pode aumentar a transparência na gestão pública.', 1, '', 'Artigo'),
(6, '2026-05-20 03:00:00', 'Marcelo Costa', 'Como Funciona o Orçamento Participativo', 'O orçamento participativo é um mecanismo que permite aos cidadãos influenciar a destinação de recursos públicos. Por meio de reuniões e consultas, a população apresenta demandas e ajuda a definir prioridades para investimentos.', '', 'Aprenda os conceitos básicos do orçamento participativo e sua importância para a comunidade.', 1, '', 'Artigo'),
(7, '2026-05-23 03:00:00', 'Patrícia Almeida', 'A Importância das Áreas Verdes nas Cidades', 'Parques, praças e jardins contribuem para a redução da temperatura urbana, melhoria da qualidade do ar e promoção do bem-estar da população. Além disso, oferecem espaços para lazer e convivência social.', '', 'Entenda os benefícios ambientais e sociais das áreas verdes urbanas.', 1, '', 'Artigo'),
(8, '2026-05-26 03:00:00', 'Gustavo Nunes', 'Inclusão Digital e Cidadania', 'A inclusão digital possibilita que mais pessoas tenham acesso a serviços públicos, educação e informação. O uso consciente da tecnologia amplia oportunidades e reduz desigualdades sociais.', '', 'Descubra como o acesso à tecnologia fortalece a participação social.', 1, '', 'Artigo'),
(9, '2026-05-28 03:00:00', 'Larissa Mendes', 'Gestão de Resíduos Sólidos', 'A gestão eficiente dos resíduos envolve coleta seletiva, reciclagem, compostagem e destinação adequada dos materiais. Essas práticas reduzem impactos ambientais e promovem o uso sustentável dos recursos.', '', 'Conheça os desafios e soluções para o gerenciamento adequado dos resíduos urbanos.', 1, '', 'Artigo'),
(10, '2026-05-30 03:00:00', 'Eduardo Ribeiro', 'Cidades Inteligentes: Conceitos e Aplicações', 'Cidades inteligentes utilizam sensores, sistemas integrados e análise de dados para otimizar serviços públicos, mobilidade, segurança e sustentabilidade. O objetivo é melhorar a qualidade de vida dos cidadãos por meio da inovação tecnológica.', '', 'Explore como a tecnologia está transformando a administração e os serviços urbanos.', 1, '', 'Artigo'),
(11, '2026-08-15 12:25:57', 'Artigo teste feito por Inteligência Artificial', 'A Receita da Mudança: Como Estruturar um Projeto de Lei do Zero', 'Já teve uma ideia incrível para melhorar o seu bairro, mas achou que transformar essa proposta em lei era algo exclusivo para políticos e advogados? A verdade é que criar um Projeto de Lei é um processo muito parecido com seguir uma receita de bolo. Para que a sua demanda comunitária saia do papel e seja analisada na Câmara Municipal, ela precisa ser estruturada em partes fundamentais: a ementa, os artigos com o detalhamento das regras, a previsão de impacto orçamentário e uma justificativa sólida embasada nos problemas reais da sua região. Entenda a lógica por trás da técnica legislativa e descubra como traduzir os anseios da sua rua em normas jurídicas claras e eficientes.', 'photo-1541872703-74c5e44368f9.avif', 'Não precisa ser jurista para propor soluções para a sua cidade. Aprenda os elementos fundamentais de um Projeto de Lei e como construir uma justificativa sólida para resolver problemas reais.', 1, '', 'artigo'),
(12, '2026-08-15 12:25:57', 'Artigo teste feito por Inteligência Artificial', 'Projeto de Lei de Iniciativa Popular: Como Mobilizar a Cidade', 'A Constituição Federal garante que o poder de criar leis não pertence apenas aos vereadores e ao prefeito, mas também à própria população. Por meio do Projeto de Lei de Iniciativa Popular, a comunidade pode elaborar uma proposta e apresentá-la diretamente no Legislativo local. Para que o documento tenha validade jurídica oficial, é necessário cumprir requisitos formais, como a coleta de assinaturas de pelo menos 5% do eleitorado do município, acompanhadas dos dados do título de eleitor. Com o suporte de fóruns digitais e redes de colaboração comunitária, organizar esses movimentos cívicos e alcançar o quórum necessário ficou muito mais acessível, permitindo que a voz do seu bairro chegue com força total à mesa de votação.', 'photo-1529107386315-e1a2ed48a620.avif', 'A Constituição Federal garante ao povo o poder de legislar diretamente. Descubra os requisitos formais de coleta de assinaturas e como organizar um movimento cívico eficaz.', 1, '', 'artigo'),
(13, '2026-08-15 12:25:57', 'Artigo teste feito por Inteligência Artificial', 'Da Ideia à Sanção: O Caminho de um Projeto na Câmara Municipal', 'O que acontece exatamente com uma proposta legislativa após ser entregue na Câmara de Vereadores? Entender a tramitação de uma lei é essencial para saber o momento certo de cobrar e apoiar os seus representantes. O processo funciona como um rigoroso controle de qualidade: primeiro, o texto passa pela triagem jurídica da Comissão de Constituição e Justiça (CCJ), segue para as comissões temáticas de saúde, educação e finanças, e só então é levado ao plenário para debate e votação de todos os vereadores. Se aprovado, o projeto é enviado ao Prefeito, que pode sancionar a nova lei ou aplicar um veto, o qual ainda pode ser derrubado pelo próprio Legislativo.', 'photo-1577495508048-b635879837f1.avif', 'O que acontece depois que uma proposta chega ao Legislativo? Acompanhe cada etapa da tramitação e saiba exatamente quando cobrar posicionamento dos parlamentares.', 1, '', 'artigo'),
(14, '2026-08-15 12:25:57', 'Artigo teste feito por Inteligência Artificial', 'Controle Social e Cidadania: Como Fiscalizar o Poder Público', 'O exercício da cidadania e da democracia não se encerra no momento em que digitamos o número do candidato na urna eletrônica. O verdadeiro acompanhamento da gestão pública acontece no dia a dia por meio do Controle Social. Todo cidadão possui o direito e o dever de monitorar a aplicação das verbas públicas e a atuação dos vereadores e do prefeito. Ferramentas legais poderosas como a Lei de Acesso à Informação (LAI), os Portais da Transparência, as Audiências Públicas e os Conselhos Municipais existem justamente para garantir que você possa solicitar documentos, fiscalizar licitações de obras e participar diretamente das decisões que afetam a qualidade de vida da sua comunidade.', 'photo-1573164713714-d95e436ab8d6.avif', 'A democracia não se esgota nas urnas. Conheça as Audiências Públicas, a Lei de Acesso à Informação e o Portal da Transparência como ferramentas de transformação social.', 1, '', 'artigo'),
(15, '2026-08-15 12:25:57', 'Artigo teste feito por Inteligência Artificial', 'De Onde Vem e Para Onde Vai o Dinheiro da Sua Cidade?', 'O orçamento municipal é o verdadeiro mapa estratégico de uma cidade, pois é nele que se define quais bairros receberão investimentos prioritários e quais pautas correm o risco de ser esquecidas. A distribuição de recursos da prefeitura não ocorre de forma improvisada; ela é regida por três leis fundamentais: o Plano Plurianual (PPA), a Lei de Diretrizes Orçamentárias (LDO) e a Lei Orçamentária Anual (LOA). Compreender como essas leis são elaboradas e participar das audiências públicas do Orçamento Participativo é o caminho mais eficaz para garantir que o dinheiro arrecadado através dos seus impostos seja destinado ao combate às desigualdades sociais e à melhoria dos serviços essenciais.', 'capa.png', 'Entenda o orçamento municipal e aprenda como o Plano Plurianual, a LDO e a LOA definem os investimentos no seu bairro.', 1, '', 'artigo'),
(16, '2026-08-15 12:25:57', 'Artigo teste feito por Inteligência Artificial', 'Mulheres e Representatividade na Política Local: Por Que Isso Importa?', 'Apesar de as mulheres representarem mais de metade da população brasileira, a sua presença nas cadeiras das Câmaras Municipais e nos cargos executivos ainda é historicamente desproporcional. A falta de representatividade feminina e de minorias nos espaços de tomada de decisão afeta diretamente a formulação das políticas públicas locais. Quando mulheres e lideranças comunitárias ocupam cargos políticos ou participam ativamente da criação de projetos de lei, a pauta da cidade se amplia para incluir ações prioritárias de combate à violência de gênero, ampliação da rede de creches, saúde preventiva e iluminação pública voltada para a segurança nos pontos de ônibus.', 'capa.png', 'A importância da representatividade feminina na formulação de políticas públicas locais e no combate às desigualdades sociais.', 1, '', 'artigo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cometarios`
--

CREATE TABLE `cometarios` (
  `id` int(11) NOT NULL,
  `conteudo` text NOT NULL,
  `dt_coment` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `postagem_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cometarios`
--

INSERT INTO `cometarios` (`id`, `conteudo`, `dt_coment`, `postagem_id`, `usuario_id`) VALUES
(1, 'Concordo totalmente. Passei por essa avenida ontem e a situação está crítica.', '2026-05-10 03:00:00', 1, 3),
(2, 'Você pode fazer a solicitação diretamente pelo portal da prefeitura.', '2026-05-12 03:00:00', 2, 4),
(3, 'Excelente iniciativa! Eu participaria da horta comunitária.', '2026-05-14 03:00:00', 3, 6),
(4, 'A falta de iluminação realmente aumentou os casos de vandalismo.', '2026-05-16 03:00:00', 4, 2),
(5, 'Sim, qualquer cidadão pode assistir às sessões presencialmente.', '2026-05-18 03:00:00', 5, 8),
(6, 'As ciclovias ajudariam muito na mobilidade urbana.', '2026-05-20 03:00:00', 6, 10),
(7, 'O problema ocorre frequentemente após os finais de semana.', '2026-05-22 03:00:00', 7, 9),
(8, 'O orçamento participativo normalmente ocorre por meio de audiências públicas.', '2026-05-24 03:00:00', 8, 10),
(9, 'Um aplicativo assim facilitaria muito o envio de denúncias.', '2026-05-26 03:00:00', 9, 5),
(10, 'Já presenciei quase acidentes nesse cruzamento.', '2026-05-28 03:00:00', 10, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagens`
--

CREATE TABLE `postagens` (
  `id` int(11) NOT NULL,
  `likes` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `dt_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `categorias` varchar(50) NOT NULL,
  `conteudo` mediumtext NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `postagens`
--

INSERT INTO `postagens` (`id`, `likes`, `dt_post`, `categorias`, `conteudo`, `usuario_id`, `titulo`) VALUES
(1, 0000000145, '2026-05-10 03:00:00', 'Reclamação', 'Gostaria de registrar a quantidade de buracos existentes na Avenida Central. Além de causar danos aos veículos, eles representam risco para motociclistas.', 3, 'Buracos na Avenida Central'),
(2, 0000000089, '2026-05-12 03:00:00', 'Dúvida', 'Alguém sabe qual é o procedimento correto para solicitar a poda de uma árvore que está encostando na rede elétrica?', 4, 'Como solicitar poda de árvore?'),
(3, 0000000230, '2026-05-14 03:00:00', 'Projeto', 'Proponho a criação de uma horta comunitária em um terreno público atualmente sem utilização. A ideia é incentivar a participação da comunidade e a produção de alimentos.', 6, 'Criação de Horta Comunitária'),
(4, 0000000178, '2026-05-16 03:00:00', 'Reclamação', 'Diversas ruas do bairro estão com postes apagados há semanas, aumentando a sensação de insegurança durante a noite.', 2, 'Iluminação insuficiente no bairro Jardim Sol'),
(5, 0000000067, '2026-05-18 03:00:00', 'Dúvida', 'Gostaria de saber se qualquer cidadão pode participar das sessões da câmara municipal e como funciona o processo.', 8, 'Como participar das sessões da câmara?'),
(6, 0000000312, '2026-05-20 03:00:00', 'Projeto', 'Sugiro a ampliação da malha cicloviária para incentivar o uso de bicicletas e reduzir o trânsito na região central.', 10, 'Implantação de Ciclovias'),
(7, 0000000201, '2026-05-22 03:00:00', 'Reclamação', 'A praça do bairro está acumulando lixo há vários dias. É necessária uma limpeza urgente para evitar problemas de saúde pública.', 9, 'Acúmulo de lixo em praça pública'),
(8, 0000000054, '2026-05-24 03:00:00', 'Dúvida', 'Como funciona o orçamento participativo e de que forma os cidadãos podem contribuir com sugestões?', 10, 'Dúvida sobre orçamento participativo'),
(9, 0000000285, '2026-05-26 03:00:00', 'Projeto', 'Proponho o desenvolvimento de um aplicativo que permita aos cidadãos registrar problemas urbanos diretamente para os órgãos responsáveis.', 5, 'Aplicativo para denúncias urbanas'),
(10, 0000000163, '2026-05-28 03:00:00', 'Reclamação', 'O cruzamento entre as ruas das Flores e Primavera está sem sinalização adequada, aumentando o risco de acidentes.', 1, 'Falta de sinalização em cruzamento');

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagens_has_tags`
--

CREATE TABLE `postagens_has_tags` (
  `postagem_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `postagens_has_tags`
--

INSERT INTO `postagens_has_tags` (`postagem_id`, `tag_id`) VALUES
(1, 2),
(2, 11),
(3, 3),
(4, 2),
(5, 4),
(6, 11),
(7, 11),
(8, 14),
(9, 5),
(10, 12);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tags`
--

INSERT INTO `tags` (`id`, `nome`) VALUES
(1, 'Educação'),
(2, 'Infraestrutura'),
(3, 'Sustentabilidade'),
(4, 'Política'),
(5, 'Tecnologia'),
(6, 'Cidadania'),
(7, 'Saúde'),
(8, 'Lazer'),
(9, 'Segurança Pública'),
(10, 'Empregabilidade e Renda'),
(11, 'Administração Pública'),
(12, 'Transporte'),
(13, 'Direitos Humanos e Inclusão'),
(14, 'Planejamento e Orçamento');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `dt_nasc` date NOT NULL,
  `nome_social` varchar(100) DEFAULT NULL,
  `perfil` varchar(20) NOT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `cpf`, `dt_nasc`, `nome_social`, `perfil`, `cep`, `rua`, `bairro`, `numero`, `cidade`) VALUES
(1, 'Bruna Miyamoto', 'bruna@gmail.com', '12345678911', '1998-04-16', '', 'admin', '17506030', 'rua vinte e quatro de dezembro', 'somenzari', 1234, 'Marília'),
(2, 'Carlos Pereira', 'carlinhos@gmail.com', '16789112256', '1988-05-16', '', 'usuário', '17500030', 'rua bassan', 'somenzari', 1234, 'Marília'),
(3, 'Pedro Santos', 'pedro@gmail.com', '89112287944', '1995-02-11', 'Roberta', 'usuário', '', '', '', 0, 'Marília'),
(4, 'Paula Oliveira', 'Paulo@gmail.com', '16789111235', '1991-08-12', 'Paulo', 'usuário', '17500000', 'rua paraíba', 'centro', 1234, 'Marília'),
(5, 'Beatriz', 'beatriz@gmail.com', '67891124561', '2000-02-22', '', 'admin', '', '', '', 0, 'Marília'),
(6, 'Fernanda', 'fernandinha@gmail.com', '14567891121', '2007-01-16', '', 'admin', '17506030', 'rua vinte e quatro de dezembro', 'somenzari', 0, 'Marília'),
(7, 'João Silva', 'João@gmail.com', '12345165778', '1998-03-18', '', 'usuário', '', '', '', 0, 'São Paulo'),
(8, 'Camila Santos', 'Camila@gmail.com', '18911326788', '1999-05-13', '', 'moderador', '17006000', 'rua quinze de novembro', 'felicidade', 1234, 'Curitiba'),
(9, 'Ricardo Miyamoto', 'ricardomiyamoto@gmail.com', '78911323456', '1959-09-07', '', 'usuário', '17506030', 'rua vinte e quatro de dezembro', 'somenzari', 1234, 'Marília'),
(10, 'Larissa', 'Larissa@gmail.com', '12391121735', '1995-02-09', '', 'moderador', '17506030', 'rua vinte e quatro de dezembro', 'somenzari', 1234, 'Arapoti');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aprenda_sobre`
--
ALTER TABLE `aprenda_sobre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `cometarios`
--
ALTER TABLE `cometarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postagem_id` (`postagem_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `postagens_has_tags`
--
ALTER TABLE `postagens_has_tags`
  ADD KEY `postagem_id` (`postagem_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Índices de tabela `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aprenda_sobre`
--
ALTER TABLE `aprenda_sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `cometarios`
--
ALTER TABLE `cometarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `postagens`
--
ALTER TABLE `postagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `aprenda_sobre`
--
ALTER TABLE `aprenda_sobre`
  ADD CONSTRAINT `aprenda_sobre_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Restrições para tabelas `cometarios`
--
ALTER TABLE `cometarios`
  ADD CONSTRAINT `cometarios_ibfk_1` FOREIGN KEY (`postagem_id`) REFERENCES `postagens` (`id`),
  ADD CONSTRAINT `cometarios_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Restrições para tabelas `postagens`
--
ALTER TABLE `postagens`
  ADD CONSTRAINT `postagens_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Restrições para tabelas `postagens_has_tags`
--
ALTER TABLE `postagens_has_tags`
  ADD CONSTRAINT `postagens_has_tags_ibfk_1` FOREIGN KEY (`postagem_id`) REFERENCES `postagens` (`id`),
  ADD CONSTRAINT `postagens_has_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
