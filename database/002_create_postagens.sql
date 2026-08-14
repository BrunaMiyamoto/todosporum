-- =============================================================================
--  todos_por_um — 002 — postagens do feed
-- =============================================================================

-- =============================================================================

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
