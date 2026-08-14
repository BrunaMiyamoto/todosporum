-- =============================================================================
--  todos_por_um — dados de demonstração (seed)
-- =============================================================================
--
--  ⚠  SOMENTE PARA AMBIENTE LOCAL. As senhas abaixo são públicas.
--
--      admin@todosporum.test    senha: admin123
--      autor@todosporum.test    senha: autor123
--      leitor@todosporum.test   senha: leitor123
--
-- =============================================================================

SET NAMES utf8mb4;

USE `todos_por_um`;


-- -----------------------------------------------------------------------------
SET FOREIGN_KEY_CHECKS = 0;

TRUNCATE TABLE `postagens_has_tags`;
TRUNCATE TABLE `comentarios`;
TRUNCATE TABLE `tags`;
TRUNCATE TABLE `postagens`;
TRUNCATE TABLE `aprenda_sobres`;
TRUNCATE TABLE `usuarios`;

SET FOREIGN_KEY_CHECKS = 1;


-- -----------------------------------------------------------------------------
--  Usuários
-- -----------------------------------------------------------------------------
INSERT INTO `usuarios`
    (`id`, `nome`, `nome_social`, `email`, `senha`, `cpf`, `dt_nasc`, `perfil`,
     `cep`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `uf`)
VALUES
    (1, 'Marina Alves de Souza', NULL, 'admin@todosporum.test',
     '$2y$12$GC357BQrAij9HO1xr66cSeAAgD4iLYIq0EoJX8RHegEGCBhnC3kle',
     '11122233344', '1988-03-12', 'admin',
     '01310100', 'Avenida Paulista', '1578', 'Conjunto 42', 'Bela Vista', 'São Paulo', 'SP'),

    (2, 'Rafael Nunes Pereira', NULL, 'autor@todosporum.test',
     '$2y$12$IMsYKkkiZL98pdHIgcA1Tuc0waGbnrBLA8jqWCB6iKB/jh4BTZ1Ae',
     '22233344455', '1995-07-30', 'autor',
     '20040020', 'Rua da Assembleia', 's/n', NULL, 'Centro', 'Rio de Janeiro', 'RJ'),

    (3, 'Camila dos Santos Rocha', 'Cami Rocha', 'leitor@todosporum.test',
     '$2y$12$TlpDDm1SCfejR8NiK./snOmVi2D9qIYUcKI3ygp6vJ2VFKqk4zliC',
     '33344455566', '2001-11-05', 'leitor',
     '30130010', 'Avenida Afonso Pena', '867B', 'Apto 301', 'Centro', 'Belo Horizonte', 'MG'),

    (4, 'João Batista de Oliveira', NULL, 'joao@todosporum.test',
     '$2y$12$TlpDDm1SCfejR8NiK./snOmVi2D9qIYUcKI3ygp6vJ2VFKqk4zliC',
     '44455566677', '1979-01-23', 'leitor',
     '80010000', 'Rua XV de Novembro', '210', NULL, 'Centro', 'Curitiba', 'PR');



-- -----------------------------------------------------------------------------
--  Postagens do feed
-- -----------------------------------------------------------------------------
INSERT INTO `postagens` (`id`, `usuario_id`, `categoria`, `conteudo`, `likes`, `dt_post`)
VALUES
    (1, 2, 'campanha',
     'Nossa campanha de agasalhos começa nesta segunda! Os pontos de coleta estarão '
     'abertos das 8h às 18h em todas as unidades parceiras. Cada peça doada aquece '
     'alguém neste inverno.',
     42, '2026-05-04 09:15:00'),

    (2, 1, 'voluntariado',
     'Estamos com 15 vagas abertas para voluntários na horta comunitária do Jardim '
     'União. Não é preciso experiência: a equipe ensina tudo no primeiro dia.',
     28, '2026-05-06 14:02:00'),

    (3, 3, 'relato',
     'Participei do mutirão de sábado e queria dividir uma coisa: em quatro horas, '
     'trinta pessoas reformaram a biblioteca inteira da escola. Sozinha eu não teria '
     'pintado nem uma parede.',
     91, '2026-05-09 20:41:00'),

    (4, 2, 'campanha',
     'Chegamos a 1.200 cestas básicas entregues neste semestre. Obrigado a cada '
     'pessoa que doou, transportou, montou e distribuiu.',
     156, '2026-05-12 11:30:00'),

    (5, 4, 'duvida',
     'Alguém sabe se a coleta de eletrônicos aceita monitor antigo? Tenho dois aqui '
     'em casa e não quero descartar no lixo comum.',
     7, '2026-05-14 18:55:00');


-- -----------------------------------------------------------------------------
--  Comentários
--  (tabela `comentarios` — no dump original o nome estava escrito "cometarios")
-- -----------------------------------------------------------------------------
INSERT INTO `comentarios` (`id`, `postagem_id`, `usuario_id`, `conteudo`, `dt_coment`)
VALUES
    (1, 1, 3, 'Já separei quatro cobertores aqui. Posso levar no ponto do Centro?', '2026-05-04 10:02:00'),
    (2, 1, 2, 'Pode sim, Camila! O ponto do Centro funciona também aos sábados.',    '2026-05-04 10:20:00'),
    (3, 2, 4, 'Tenho disponibilidade nas manhãs de quarta. Como faço a inscrição?',  '2026-05-06 15:11:00'),
    (4, 3, 1, 'Que relato lindo. Vamos repetir o mutirão em junho.',                 '2026-05-09 21:03:00'),
    (5, 3, 2, 'A biblioteca ficou irreconhecível. Parabéns ao time todo!',           '2026-05-10 08:30:00'),
    (6, 4, 3, 'Mil e duzentas! Ano passado inteiro foram 800.',                      '2026-05-12 12:15:00'),
    (7, 5, 1, 'Aceita sim, João. Monitor, CPU e notebook entram na coleta.',         '2026-05-14 19:40:00');


-- -----------------------------------------------------------------------------
--  Tags
-- -----------------------------------------------------------------------------
INSERT INTO `tags` (`id`, `nome`, `slug`) VALUES
    (1, 'Doação',         'doacao'),
    (2, 'Voluntariado',   'voluntariado'),
    (3, 'Meio Ambiente',  'meio-ambiente'),
    (4, 'Educação',       'educacao'),
    (5, 'Inverno',        'inverno'),
    (6, 'Alimentação',    'alimentacao');


-- -----------------------------------------------------------------------------
--  Vínculo postagem <-> tag
-- -----------------------------------------------------------------------------
INSERT INTO `postagens_has_tags` (`postagem_id`, `tag_id`) VALUES
    (1, 1), (1, 5),
    (2, 2), (2, 3),
    (3, 2), (3, 4),
    (4, 1), (4, 6),
    (5, 3);


-- -----------------------------------------------------------------------------
--  Conteúdos da seção "Aprenda Sobre"
--  A coluna `autor` foi removida: o nome vem de usuarios.nome via usuario_id.
-- -----------------------------------------------------------------------------
INSERT INTO `aprenda_sobres`
    (`id`, `usuario_id`, `titulo`, `resumo`, `conteudo`, `capa`, `videos`, `tipo`, `dt_publi`)
VALUES
    (1, 2, 'Como organizar uma campanha de arrecadação',
     'Um guia em cinco passos para sair da ideia e chegar na primeira entrega, '
     'mesmo com equipe pequena.',
     'Toda campanha começa com uma pergunta simples: quem precisa do quê, e até quando? '
     'Antes de pedir doação, converse com quem vai receber...',
     'capas/campanha-arrecadacao.webp', NULL, 'artigo', '2026-04-18 10:00:00'),

    (2, 1, 'Descarte correto de eletrônicos',
     'O que fazer com aquele computador velho que está ocupando espaço há anos.',
     'Um monitor antigo jogado no lixo comum leva chumbo e mercúrio para o solo. '
     'A boa notícia é que o descarte correto é mais simples do que parece...',
     'capas/descarte-eletronicos.webp', 'https://exemplo.test/videos/descarte', 'video',
     '2026-04-25 16:30:00'),

    (3, 2, 'Primeiros passos como voluntário',
     'O que esperar do primeiro dia, o que levar e o que ninguém te conta antes.',
     'Ninguém chega pronto. O primeiro dia de voluntariado costuma ser mais sobre '
     'observar do que sobre fazer, e está tudo bem...',
     NULL, NULL, 'artigo', '2026-05-02 09:00:00'),

    (4, NULL, 'Cartilha: segurança alimentar em doações',
     'Boas práticas de armazenamento e transporte de alimentos doados.',
     'Alimento doado é alimento que precisa chegar em condições de ser consumido. '
     'Esta cartilha reúne as regras básicas de temperatura, prazo e transporte...',
     'capas/cartilha-alimentos.webp', NULL, 'cartilha', '2026-05-08 13:45:00');

-- O registro 4 tem usuario_id NULL de propósito: é o estado em que um conteúdo
-- fica quando o autor sai da plataforma (ON DELETE SET NULL). O artigo continua
-- publicado, apenas sem autor associado.


-- -----------------------------------------------------------------------------
--  Conferência
-- -----------------------------------------------------------------------------
SELECT 'usuarios'           AS tabela, COUNT(*) AS registros FROM `usuarios`
UNION ALL SELECT 'postagens',          COUNT(*) FROM `postagens`
UNION ALL SELECT 'comentarios',        COUNT(*) FROM `comentarios`
UNION ALL SELECT 'tags',               COUNT(*) FROM `tags`
UNION ALL SELECT 'postagens_has_tags', COUNT(*) FROM `postagens_has_tags`
UNION ALL SELECT 'aprenda_sobres',     COUNT(*) FROM `aprenda_sobres`;
