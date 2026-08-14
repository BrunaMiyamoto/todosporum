-- =============================================================================
--  todos_por_um — 003 — conteúdos da seção "Aprenda Sobre"
-- =============================================================================
--
--
-- =============================================================================

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
