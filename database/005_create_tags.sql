-- =============================================================================
--  todos_por_um — 005 — tags e o vínculo com as postagens
-- =============================================================================
--
-- =============================================================================

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
