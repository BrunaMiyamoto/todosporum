-- =============================================================================
--  todos_por_um — 001 — usuários
-- =============================================================================
--
-- =============================================================================

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
