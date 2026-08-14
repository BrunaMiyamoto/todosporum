-- =============================================================================
--  todos_por_um — schema completo
-- =============================================================================
--

-- =============================================================================

SET NAMES utf8mb4;
SET SQL_MODE = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
SET time_zone = '-03:00';


CREATE DATABASE IF NOT EXISTS `todos_por_um`
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE `todos_por_um`;


-- ---------------------------------------------------------------------------
--  todos_por_um — 001 — usuários
-- ---------------------------------------------------------------------------


CREATE TABLE IF NOT EXISTS `usuarios` (
    `id`            INT UNSIGNED NOT NULL AUTO_INCREMENT,

    `nome`          VARCHAR(100) NOT NULL,
    `nome_social`   VARCHAR(100) DEFAULT NULL,

    `email`         VARCHAR(180) NOT NULL,
    `senha`         VARCHAR(255) NOT NULL COMMENT 'hash de password_hash() — nunca texto puro',

    `cpf`           CHAR(11) NOT NULL COMMENT 'apenas dígitos, sem pontos ou traço',
    `dt_nasc`       DATE NOT NULL,

    `perfil`        VARCHAR(20) NOT NULL DEFAULT 'leitor',

    -- Endereço (todo opcional)
    `cep`           CHAR(8) DEFAULT NULL COMMENT 'apenas dígitos',
    `rua`           VARCHAR(100) DEFAULT NULL,
    `numero`        VARCHAR(10) DEFAULT NULL COMMENT 'texto: aceita "s/n", "123A"',
    `complemento`   VARCHAR(60) DEFAULT NULL,
    `bairro`        VARCHAR(100) DEFAULT NULL,
    `cidade`        VARCHAR(100) DEFAULT NULL,
    `uf`            CHAR(2) DEFAULT NULL,

    `ativo`         TINYINT(1) NOT NULL DEFAULT 1,

    `criado_em`     TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `atualizado_em` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),
    UNIQUE KEY `uk_usuarios_email` (`email`),
    UNIQUE KEY `uk_usuarios_cpf` (`cpf`),
    KEY `ix_usuarios_perfil` (`perfil`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- ---------------------------------------------------------------------------
--  todos_por_um — 002 — postagens do feed
-- ---------------------------------------------------------------------------
--
--
-- ---------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `postagens` (
    `id`            INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `usuario_id`    INT UNSIGNED NOT NULL,

    `categoria`     VARCHAR(50) NOT NULL,
    `conteudo`      MEDIUMTEXT NOT NULL,

    `likes`         INT UNSIGNED NOT NULL DEFAULT 0,

    `dt_post`       TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `atualizado_em` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),

    -- Ordenação do feed: mais recentes primeiro.
    KEY `ix_postagens_data` (`dt_post` DESC),
    KEY `ix_postagens_categoria` (`categoria`, `dt_post` DESC),
    KEY `ix_postagens_usuario` (`usuario_id`, `dt_post` DESC),

    CONSTRAINT `fk_postagens_usuario`
        FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- ---------------------------------------------------------------------------
--  todos_por_um — 003 — conteúdos da seção "Aprenda Sobre"
-- ---------------------------------------------------------------------------
-- ---------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `aprenda_sobres` (
    `id`            INT UNSIGNED NOT NULL AUTO_INCREMENT,

    -- NULL quando o autor é removido (ver ON DELETE SET NULL abaixo).
    `usuario_id`    INT UNSIGNED DEFAULT NULL,

    `titulo`        VARCHAR(255) NOT NULL,
    `resumo`        TEXT DEFAULT NULL,
    `conteudo`      MEDIUMTEXT NOT NULL,

    `capa`          VARCHAR(255) DEFAULT NULL COMMENT 'caminho ou URL da imagem de capa',
    `videos`        VARCHAR(255) DEFAULT NULL COMMENT 'URL de um vídeo; para vários, crie uma tabela filha',

    `tipo`          VARCHAR(45) NOT NULL DEFAULT 'artigo',

    `dt_publi`      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `atualizado_em` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),

    KEY `ix_aprenda_data` (`dt_publi` DESC),
    KEY `ix_aprenda_tipo` (`tipo`, `dt_publi` DESC),
    KEY `ix_aprenda_usuario` (`usuario_id`),

    CONSTRAINT `fk_aprenda_usuario`
        FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
        ON DELETE SET NULL
        ON UPDATE CASCADE
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- ---------------------------------------------------------------------------
--  todos_por_um — 004 — comentários das postagens
-- ---------------------------------------------------------------------------
--
-- ---------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `comentarios` (
    `id`          INT UNSIGNED NOT NULL AUTO_INCREMENT,

    `postagem_id` INT UNSIGNED NOT NULL,
    `usuario_id`  INT UNSIGNED NOT NULL,

    `conteudo`    TEXT NOT NULL,

    `dt_coment`   TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),

    -- Carregar os comentários de uma postagem em ordem cronológica.
    KEY `ix_comentarios_postagem` (`postagem_id`, `dt_coment`),
    KEY `ix_comentarios_usuario` (`usuario_id`),

    CONSTRAINT `fk_comentarios_postagem`
        FOREIGN KEY (`postagem_id`) REFERENCES `postagens` (`id`)
        ON DELETE CASCADE
        ON UPDATE CASCADE,

    CONSTRAINT `fk_comentarios_usuario`
        FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------------------------------
--  Compatibilidade (opcional)
-- -----------------------------------------------------------------------------
--  Descomente se o seu PHP ainda escreve "cometarios" nas queries. A view é
--  atualizável: SELECT, INSERT, UPDATE e DELETE funcionam normalmente por ela.
--  Depois de corrigir o código, apague a view com: DROP VIEW `cometarios`;
--
-- CREATE OR REPLACE VIEW `cometarios` AS SELECT * FROM `comentarios`;

-- ---------------------------------------------------------------------------
--  todos_por_um — 005 — tags e o vínculo com as postagens
-- ---------------------------------------------------------------------------
--
-- ---------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `tags` (
    `id`        INT UNSIGNED NOT NULL AUTO_INCREMENT,

    `nome`      VARCHAR(100) NOT NULL,
    `slug`      VARCHAR(120) NOT NULL COMMENT 'versão para URL: sem acento, sem espaço',

    `criado_em` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),
    UNIQUE KEY `uk_tags_nome` (`nome`),
    UNIQUE KEY `uk_tags_slug` (`slug`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `postagens_has_tags` (
    `postagem_id` INT UNSIGNED NOT NULL,
    `tag_id`      INT UNSIGNED NOT NULL,

    -- O par é a chave primária: uma tag não se repete na mesma postagem.
    PRIMARY KEY (`postagem_id`, `tag_id`),

    -- Caminho inverso: "quais postagens têm esta tag?"
    KEY `ix_tags_postagens` (`tag_id`, `postagem_id`),

    CONSTRAINT `fk_pht_postagem`
        FOREIGN KEY (`postagem_id`) REFERENCES `postagens` (`id`)
        ON DELETE CASCADE
        ON UPDATE CASCADE,

    CONSTRAINT `fk_pht_tag`
        FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;
