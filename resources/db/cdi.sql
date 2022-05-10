-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Maio-2022 às 15:59
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cdi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dependentes`
--

CREATE TABLE `dependentes` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sexo` tinyint(4) NOT NULL,
  `parentesco` varchar(4) NOT NULL,
  `nascimento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ativo` tinyint(4) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dependentes`
--

INSERT INTO `dependentes` (`id`, `id_usuario`, `cpf`, `nome`, `sexo`, `parentesco`, `nascimento`, `ativo`, `updated_at`, `created_at`, `deleted_at`) VALUES
(13, 39, '22222222222', 'Ana Cristina Santos Silva de Carvalho', 1, '3', '2022-04-28 18:45:42', 1, '2022-04-28 18:45:42', '2022-04-28 18:45:33', '2022-04-28 18:45:42'),
(14, 38, '04682477501', 'CAIQUE NEIVA PIRES MATOS', 0, '2', '2022-04-28 20:14:43', 1, '2022-04-28 20:14:43', '2022-04-28 19:22:12', '2022-04-28 20:14:43'),
(15, 38, '04682477501', 'CAIQUE NEIVA PIRES MATOS', 1, '2', '2022-04-28 20:15:05', 1, '2022-04-28 20:15:05', '2022-04-28 19:22:29', '2022-04-28 20:15:05'),
(16, 38, '04682477501', 'Ana Cristina Santos Silva de Carvalho', 2, '1', '2022-04-28 20:14:39', 1, '2022-04-28 20:14:39', '2022-04-28 19:24:12', '2022-04-28 20:14:39'),
(17, 38, '04682477501', 'Ana Cristina Santos Silva de Carvalho', 2, '3', '2022-04-04 03:00:00', 1, '2022-04-28 20:20:46', '2022-04-28 20:17:48', NULL),
(18, 38, '04682477504', 'Ana Cristina Santos Silva de Carvalho', 1, '2', '2022-04-15 03:00:00', 1, '2022-04-28 20:23:03', '2022-04-28 20:23:03', NULL),
(19, 40, '82024126090', 'João Marcos', 1, '1', '1991-12-12 03:00:00', 1, '2022-04-29 14:22:41', '2022-04-29 14:22:41', NULL),
(20, 59, '57354027065', 'Lauro de Freitas', 0, '1', '2022-05-19 03:00:00', 1, '2022-05-02 14:43:14', '2022-05-02 14:43:14', NULL),
(21, 62, '75286806058', 'Rupios', 0, '1', '2021-10-04 03:00:00', 1, '2022-05-02 14:59:44', '2022-05-02 14:59:44', NULL),
(22, 62, '75286806058', 'Líbios', 0, 'HI', '2021-10-20 03:00:00', 1, '2022-05-02 14:59:44', '2022-05-02 14:59:44', NULL),
(23, 63, '68033128011', 'Caique Matos Teste', 1, '0', '2022-05-19 03:00:00', 1, '2022-05-03 17:26:52', '2022-05-02 15:08:33', NULL),
(24, 67, '56202518022', 'Jovi', 1, '0', '2022-05-03 03:00:00', 1, '2022-05-06 11:24:35', '2022-05-06 11:24:35', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `pergunta` varchar(400) NOT NULL,
  `resposta` text NOT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `faqs`
--

INSERT INTO `faqs` (`id`, `pergunta`, `resposta`, `ativo`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 'Como faço para realizar o pagamento em boleto?', 'Para realizar o pagamento você deve ir para a página de Pagamentos acessando o menu Planos > pagamentos, depois, selecione a opção \"boleto\" e basta fechar o navegador.', 1, NULL, '2022-05-03 14:10:59', '2022-05-03 12:26:44'),
(2, 'Onde posso atualizar minha senha?', 'Clique na sua foto no canto superior direito da tela e em seguida em configurações.', 1, NULL, '2022-05-04 18:12:35', '2022-05-03 13:53:43'),
(3, 'Onde posso excluir minha conta?', 'Para excluir sua conta é necessário entrar em contato através de 74 99999999.', 1, NULL, '2022-05-04 13:28:19', '2022-05-03 13:56:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2022_04_29_160010_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome_titular` varchar(255) DEFAULT NULL,
  `cpf_titular` varchar(11) DEFAULT NULL,
  `numero_cartao` varchar(16) DEFAULT NULL,
  `validade_cartao` timestamp NULL DEFAULT NULL,
  `valor` int(11) NOT NULL DEFAULT 0,
  `adesao` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 - Aguardando, 1 - Confirmado',
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `id_usuario`, `nome_titular`, `cpf_titular`, `numero_cartao`, `validade_cartao`, `valor`, `adesao`, `status`, `data`, `updated_at`, `created_at`) VALUES
(6, 37, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-04-27 14:35:06', '2022-04-27 14:35:06', '2022-04-27 14:35:06'),
(7, 38, NULL, NULL, NULL, NULL, 0, NULL, 0, '2020-04-27 18:52:24', '2022-04-27 20:03:57', '2022-04-27 18:52:24'),
(8, 39, NULL, NULL, NULL, NULL, 0, NULL, 0, '2022-04-27 14:35:06', '2022-04-27 20:06:53', '2022-04-27 14:35:06'),
(9, 40, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-04-28 20:24:06', '2022-04-28 20:24:06', '2022-04-28 20:24:06'),
(10, 57, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-02 13:56:15', '2022-05-02 13:56:15', '2022-05-02 13:56:15'),
(11, 59, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-02 14:43:14', '2022-05-02 14:43:14', '2022-05-02 14:43:14'),
(12, 60, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-02 14:52:33', '2022-05-02 14:52:33', '2022-05-02 14:52:33'),
(13, 61, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-02 14:57:42', '2022-05-02 14:57:42', '2022-05-02 14:57:42'),
(14, 62, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-02 14:59:44', '2022-05-02 14:59:44', '2022-05-02 14:59:44'),
(15, 63, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-02 15:08:33', '2022-05-02 15:08:33', '2022-05-02 15:08:33'),
(16, 67, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-06 11:24:35', '2022-05-06 11:24:35', '2022-05-06 11:24:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admnistrador', 'web', '2022-04-29 19:23:46', '2022-04-29 19:23:52'),
(2, 'editor', 'web', '2022-04-29 19:23:56', '2022-04-29 19:23:59'),
(3, 'consultor', 'web', '2022-04-29 19:24:01', '2022-04-29 19:24:04'),
(4, 'cliente', 'web', '2022-04-29 19:24:01', '2022-04-29 19:24:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_usuario`
--

CREATE TABLE `role_usuario` (
  `id_role` bigint(20) NOT NULL,
  `id_usuario` bigint(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `role_usuario`
--

INSERT INTO `role_usuario` (`id_role`, `id_usuario`, `updated_at`, `created_at`) VALUES
(1, 53, '2022-04-29 20:02:46', '2022-04-29 20:02:46'),
(3, 55, '2022-04-29 20:02:46', '2022-04-29 20:02:46'),
(1, 56, '2022-05-02 11:35:45', '2022-05-02 11:35:45'),
(1, 54, '2022-05-02 13:45:18', '2022-05-02 13:45:18'),
(4, 57, '2022-05-02 13:56:15', '2022-05-02 13:56:15'),
(4, 37, '2022-05-02 14:04:26', '2022-05-02 14:04:26'),
(4, 58, '2022-05-02 14:05:45', '2022-05-02 14:05:45'),
(4, 59, '2022-05-02 14:43:14', '2022-05-02 14:43:14'),
(4, 60, '2022-05-02 14:52:33', '2022-05-02 14:52:33'),
(4, 61, '2022-05-02 14:57:42', '2022-05-02 14:57:42'),
(4, 62, '2022-05-02 14:59:43', '2022-05-02 14:59:43'),
(4, 63, '2022-05-02 15:08:33', '2022-05-02 15:08:33'),
(3, 66, '2022-05-05 20:11:50', '2022-05-05 20:11:50'),
(2, 65, '2022-05-05 20:12:02', '2022-05-05 20:12:02'),
(4, 67, '2022-05-06 11:24:35', '2022-05-06 11:24:35'),
(1, 64, '2022-05-06 15:42:26', '2022-05-06 15:42:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL,
  `nascimento` timestamp NULL DEFAULT current_timestamp(),
  `ativo` tinyint(4) NOT NULL DEFAULT 1,
  `sexo` tinyint(4) DEFAULT NULL,
  `estado_civil` tinyint(4) DEFAULT NULL,
  `celular` varchar(11) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `local_retirada` varchar(50) DEFAULT NULL,
  `como_conheceu` varchar(50) DEFAULT NULL,
  `renda` tinyint(4) DEFAULT NULL,
  `profissao` varchar(255) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(6) DEFAULT NULL,
  `complemento` varchar(80) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `cpf`, `nascimento`, `ativo`, `sexo`, `estado_civil`, `celular`, `telefone`, `local_retirada`, `como_conheceu`, `renda`, `profissao`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `remember_token`, `email_verified_at`, `deleted_at`, `updated_at`, `created_at`) VALUES
(64, 'Aroldo Pascoale', 'aroldo@gmail.com', '$2y$10$0uAPEy5TotTMWeXNAOb8ve7KiM70RQSdFweR3TTOsUgxe8BaE/iA.', '08588922002', '2022-05-02 03:00:00', 1, 0, NULL, '74999111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-06 15:34:39', '2022-05-05 19:24:43'),
(65, 'Roberto Marinho', 'roberto@gmail.com', '$2y$10$4QPoFjoQ18Ks99Q4JqU6xuXfjB8za83UIzSHtf1vGZUx64/xNB/ju', '18264008003', '2022-05-02 03:00:00', 1, 1, NULL, '74999999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-05 20:12:02', '2022-05-05 20:07:28'),
(66, 'Rosa Maria', 'rosamaria@gmail.com', '$2y$10$MhA0yQho1uwaqv7.gQVJ6e8VZBPSl/ImXIhn5WdLk8j.ATOL/R8b2', '09307242089', '2022-05-09 03:00:00', 1, 0, NULL, '87999999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-05 20:11:50', '2022-05-05 20:11:50'),
(67, 'Seu Leôncio', 'seuleoncio@gmail.como', '$2y$10$GtmZGUGdadVsnBKJI6wuTu4qu7oMxmCHN6ooWhjOizjW/8RohHRUq', '66349648072', '2022-05-01 03:00:00', 1, 1, 2, '98777777777', '9887777777', 'AK', '4', 4, 'Latifundiário', '56327010', 'Rua Pantanal', '23', 'Casarão', 'Boa Esperança', 'Petrolina', 'PE', NULL, NULL, NULL, '2022-05-06 11:37:02', '2022-05-06 11:24:34');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dependentes`
--
ALTER TABLE `dependentes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Índices para tabela `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Índices para tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Índices para tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Índices para tabela `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dependentes`
--
ALTER TABLE `dependentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
