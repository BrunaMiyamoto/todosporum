-- =============================================================================
--  todos_por_um — 004 — comentários das postagens
-- =============================================================================

-- =============================================================================

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
