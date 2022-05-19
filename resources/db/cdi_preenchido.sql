-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Maio-2022 às 20:19
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
-- Estrutura da tabela `cartoes`
--

CREATE TABLE `cartoes` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `dependente_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0-Andamento, 1-Finalizado, 2-Entregue, 3-Cancelado',
  `ativo` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cartoes`
--

INSERT INTO `cartoes` (`id`, `usuario_id`, `dependente_id`, `status`, `ativo`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 67, NULL, 0, 1, NULL, '2022-05-11 20:35:58', '2022-05-11 20:35:58'),
(2, NULL, 28, 2, 1, NULL, '2022-05-16 19:53:28', '2022-05-11 20:44:07'),
(3, NULL, 24, 1, 1, NULL, '2022-05-16 19:53:45', '2022-05-11 20:44:07'),
(4, 77, NULL, 0, 1, NULL, '2022-05-12 12:43:34', '2022-05-12 12:43:34'),
(5, NULL, 31, 0, 1, NULL, '2022-05-12 12:43:34', '2022-05-12 12:43:34'),
(6, 78, NULL, 2, 1, '2022-05-16 19:47:40', '2022-05-16 19:47:40', '2022-05-12 13:17:54'),
(7, NULL, 32, 1, 1, '2022-05-16 19:38:26', '2022-05-16 19:38:26', '2022-05-12 13:17:54'),
(8, 79, NULL, 0, 1, NULL, '2022-05-12 13:58:16', '2022-05-12 13:36:34'),
(9, NULL, 33, 0, 1, NULL, '2022-05-12 13:36:34', '2022-05-12 13:36:34'),
(10, NULL, 34, 0, 1, '2022-05-12 14:06:00', '2022-05-12 14:06:00', '2022-05-12 13:36:34'),
(11, NULL, 32, 1, 1, '2022-05-16 19:40:58', '2022-05-16 19:40:58', '2022-05-12 16:17:54'),
(12, NULL, 32, 1, 1, '2022-05-16 19:50:40', '2022-05-16 19:50:40', '2022-05-12 19:17:54'),
(13, 78, NULL, 2, 1, '2022-05-16 19:50:33', '2022-05-16 19:50:33', '2022-05-12 16:17:54'),
(14, 78, NULL, 1, 1, NULL, '2022-05-16 19:50:53', '2022-05-12 19:17:54'),
(15, NULL, 32, 0, 1, NULL, '2022-05-16 22:46:57', '2022-05-12 22:17:54'),
(16, NULL, 38, 0, 1, NULL, '2022-05-16 20:31:08', '2022-05-16 20:31:08'),
(17, NULL, 39, 0, 1, NULL, '2022-05-16 20:31:24', '2022-05-16 20:31:24'),
(18, 80, NULL, 0, 1, NULL, '2022-05-18 18:29:18', '2022-05-18 18:29:18'),
(19, NULL, 40, 0, 1, NULL, '2022-05-18 18:29:18', '2022-05-18 18:29:18'),
(20, NULL, 41, 0, 1, NULL, '2022-05-18 18:29:18', '2022-05-18 18:29:18'),
(21, 81, NULL, 0, 1, NULL, '2022-05-18 18:34:05', '2022-05-18 18:34:05'),
(22, NULL, 42, 0, 1, NULL, '2022-05-18 18:34:05', '2022-05-18 18:34:05'),
(23, NULL, 43, 0, 1, NULL, '2022-05-18 18:34:05', '2022-05-18 18:34:05'),
(24, 82, NULL, 0, 1, NULL, '2022-05-18 18:41:47', '2022-05-18 18:41:47'),
(25, 83, NULL, 0, 1, NULL, '2022-05-18 18:43:31', '2022-05-18 18:43:31'),
(26, NULL, 44, 0, 1, NULL, '2022-05-18 18:43:31', '2022-05-18 18:43:31'),
(27, 84, NULL, 0, 1, NULL, '2022-05-18 18:45:44', '2022-05-18 18:45:44'),
(28, NULL, 45, 0, 1, NULL, '2022-05-18 18:45:44', '2022-05-18 18:45:44'),
(29, NULL, 46, 0, 1, NULL, '2022-05-18 18:45:44', '2022-05-18 18:45:44'),
(30, 85, NULL, 0, 1, NULL, '2022-05-18 18:55:46', '2022-05-18 18:55:46'),
(31, NULL, 47, 0, 1, NULL, '2022-05-18 18:55:46', '2022-05-18 18:55:46'),
(32, 86, NULL, 0, 1, NULL, '2022-05-18 19:11:45', '2022-05-18 19:11:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  `lida` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `email`, `assunto`, `mensagem`, `lida`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 'caiquepires91@gmail.com', 'Email para os confirmados', 'Muitas mensagens aqui\r\n\r\nvamos testar', 0, NULL, '2022-05-19 14:48:44', '2022-05-19 12:29:45'),
(3, 'armando@gmail.com', 'Dificuldades', 'Como faço para gerar um novo cartão de vantagens?', 1, NULL, '2022-05-19 14:47:42', '2022-05-19 14:18:40');

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
(24, 67, '56202518022', 'Jovi', 1, '0', '2022-05-03 03:00:00', 1, '2022-05-06 11:24:35', '2022-05-06 11:24:35', NULL),
(25, 71, '08229173001', 'Carlos Sampaio', 1, '0', '2022-04-05 03:00:00', 1, '2022-05-10 15:23:41', '2022-05-10 15:23:41', NULL),
(26, 73, '04688888888', 'Raimundo Rosano', 1, '3', '2022-05-05 03:00:00', 1, '2022-05-10 20:39:45', '2022-05-10 20:39:45', NULL),
(27, 75, '08229173001', 'Dependente 1', 1, '0', '2022-05-04 03:00:00', 1, '2022-05-11 17:33:44', '2022-05-11 17:33:44', NULL),
(28, 67, '53227540088', 'Joana Cabral', 0, '3', '2022-05-02 03:00:00', 1, '2022-05-11 18:55:26', '2022-05-11 18:55:26', NULL),
(29, 76, '04688888888', 'Zendaya', 0, '0', '2022-05-19 03:00:00', 1, '2022-05-12 12:01:33', '2022-05-12 12:01:33', NULL),
(30, 76, '08229173001', 'Tom Holland', 1, '0', '2022-05-19 03:00:00', 1, '2022-05-12 12:01:33', '2022-05-12 12:01:33', NULL),
(31, 77, '47720770064', 'Cebolinha Andrade', 1, '0', '2022-05-02 03:00:00', 1, '2022-05-12 12:43:34', '2022-05-12 12:43:34', NULL),
(32, 78, '19564323029', 'Hermione Granger', 1, '0', '2022-05-01 03:00:00', 1, '2022-05-12 13:17:54', '2022-05-12 13:17:54', NULL),
(33, 79, '00512219001', 'Marvolo Riddle', 1, '0', '1998-12-12 03:00:00', 1, '2022-05-12 13:36:34', '2022-05-12 13:36:34', NULL),
(34, 79, '94935671092', 'Vicência Santos', 0, '3', '2000-12-12 03:00:00', 1, '2022-05-12 13:36:34', '2022-05-12 13:36:34', NULL),
(35, 67, '15931647007', 'Gina Wisley', 0, '3', '2022-05-16 20:30:32', 1, '2022-05-16 20:30:32', '2022-05-16 20:26:44', '2022-05-16 20:30:32'),
(36, 67, '77808277045', 'Barta Wisley', 0, '3', '2022-05-16 20:27:43', 1, '2022-05-16 20:27:43', '2022-05-16 20:27:22', '2022-05-16 20:27:43'),
(37, 67, '37538393021', 'Bathilda Bagshot', 0, '2', '2022-05-16 20:30:29', 1, '2022-05-16 20:30:29', '2022-05-16 20:28:13', '2022-05-16 20:30:29'),
(38, 67, '47946820003', 'Lily Potter', 0, '2', '2022-05-04 03:00:00', 1, '2022-05-16 20:31:08', '2022-05-16 20:31:08', NULL),
(39, 67, '89311451010', 'Thiago Potter', 1, '1', '2022-05-10 03:00:00', 1, '2022-05-16 20:31:24', '2022-05-16 20:31:24', NULL),
(40, 80, '09506827052', 'Ray Delson', 1, '0', '2022-05-04 03:00:00', 1, '2022-05-18 18:29:18', '2022-05-18 18:29:18', NULL),
(41, 80, '09506827052', 'Raya Delli', 0, '3', '2022-05-03 03:00:00', 1, '2022-05-18 18:29:18', '2022-05-18 18:29:18', NULL),
(42, 81, '77628324088', 'Trunks sun', 1, '0', '2022-05-06 03:00:00', 1, '2022-05-18 18:34:05', '2022-05-18 18:34:05', NULL),
(43, 81, '77628324088', 'Goten sun', 1, '0', '1991-12-12 03:00:00', 1, '2022-05-18 18:34:05', '2022-05-18 18:34:05', NULL),
(44, 83, '69540298075', 'Miller Downton', 1, '0', '2022-05-06 03:00:00', 1, '2022-05-18 18:43:31', '2022-05-18 18:43:31', NULL),
(45, 84, '79950192030', 'Rebeca Severo', 0, '0', '2022-05-06 03:00:00', 1, '2022-05-18 18:45:44', '2022-05-18 18:45:44', NULL),
(46, 84, '79950192030', 'Milton Nascimneto', 1, '0', '2022-05-18 18:46:37', 1, '2022-05-18 18:46:37', '2022-05-18 18:45:44', '2022-05-18 18:46:37'),
(47, 85, '25296343000', 'Ivete Sangalo', 0, '0', '1999-12-12 03:00:00', 1, '2022-05-18 18:55:46', '2022-05-18 18:55:46', NULL);

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
(16, 67, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-06 11:24:35', '2022-05-06 11:24:35', '2022-05-06 11:24:35'),
(17, 68, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-10 14:15:16', '2022-05-10 14:15:16', '2022-05-10 14:15:16'),
(18, 69, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-10 14:25:25', '2022-05-10 14:25:25', '2022-05-10 14:25:25'),
(19, 70, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-10 15:21:10', '2022-05-10 15:21:10', '2022-05-10 15:21:10'),
(20, 71, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-10 15:23:41', '2022-05-10 15:23:41', '2022-05-10 15:23:41'),
(21, 72, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-10 18:31:51', '2022-05-10 18:31:51', '2022-05-10 18:31:51'),
(22, 73, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-10 20:39:45', '2022-05-10 20:39:45', '2022-05-10 20:39:45'),
(23, 74, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-11 14:40:25', '2022-05-11 14:40:25', '2022-05-11 14:40:25'),
(24, 75, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-11 17:33:44', '2022-05-11 17:33:44', '2022-05-11 17:33:44'),
(25, 76, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-12 12:01:33', '2022-05-12 12:01:33', '2022-05-12 12:01:33'),
(26, 77, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-12 12:43:34', '2022-05-12 12:43:34', '2022-05-12 12:43:34'),
(27, 78, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-12 13:17:54', '2022-05-12 13:17:54', '2022-05-12 13:17:54'),
(28, 79, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-12 13:36:34', '2022-05-12 13:36:34', '2022-05-12 13:36:34'),
(29, 80, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-18 18:29:18', '2022-05-18 18:29:18', '2022-05-18 18:29:18'),
(30, 81, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-18 18:34:05', '2022-05-18 18:34:05', '2022-05-18 18:34:05'),
(31, 82, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-18 18:41:47', '2022-05-18 18:41:47', '2022-05-18 18:41:47'),
(32, 83, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-18 18:43:31', '2022-05-18 18:43:31', '2022-05-18 18:43:31'),
(33, 84, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-18 18:45:44', '2022-05-18 18:45:44', '2022-05-18 18:45:44'),
(34, 85, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-18 18:55:46', '2022-05-18 18:55:46', '2022-05-18 18:55:46'),
(35, 86, NULL, NULL, NULL, NULL, 0, NULL, 1, '2022-05-18 19:11:45', '2022-05-18 19:11:45', '2022-05-18 19:11:45');

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
(1, 64, '2022-05-06 15:42:26', '2022-05-06 15:42:26'),
(4, 68, '2022-05-10 14:15:16', '2022-05-10 14:15:16'),
(4, 69, '2022-05-10 14:25:25', '2022-05-10 14:25:25'),
(4, 70, '2022-05-10 15:21:10', '2022-05-10 15:21:10'),
(4, 71, '2022-05-10 15:23:41', '2022-05-10 15:23:41'),
(4, 72, '2022-05-10 18:31:51', '2022-05-10 18:31:51'),
(4, 73, '2022-05-10 20:39:45', '2022-05-10 20:39:45'),
(4, 74, '2022-05-11 14:40:25', '2022-05-11 14:40:25'),
(4, 75, '2022-05-11 17:33:44', '2022-05-11 17:33:44'),
(4, 76, '2022-05-12 12:01:33', '2022-05-12 12:01:33'),
(4, 77, '2022-05-12 12:43:34', '2022-05-12 12:43:34'),
(4, 78, '2022-05-12 13:17:54', '2022-05-12 13:17:54'),
(4, 79, '2022-05-12 13:36:34', '2022-05-12 13:36:34'),
(4, 80, '2022-05-18 18:29:18', '2022-05-18 18:29:18'),
(4, 81, '2022-05-18 18:34:05', '2022-05-18 18:34:05'),
(4, 82, '2022-05-18 18:41:47', '2022-05-18 18:41:47'),
(4, 83, '2022-05-18 18:43:31', '2022-05-18 18:43:31'),
(4, 84, '2022-05-18 18:45:44', '2022-05-18 18:45:44'),
(4, 85, '2022-05-18 18:55:46', '2022-05-18 18:55:46'),
(4, 86, '2022-05-18 19:11:45', '2022-05-18 19:11:45');

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
  `nascimento` timestamp NULL DEFAULT NULL,
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
(64, 'Aroldo Pascoale', 'aroldo@gmail.com', '$2y$10$0uAPEy5TotTMWeXNAOb8ve7KiM70RQSdFweR3TTOsUgxe8BaE/iA.', '08588922002', '2022-05-02 03:00:00', 1, 0, NULL, '74999111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mZphAz8sEUhsYsgtteeH8osh7TFnVa01jPDsNnY7xc8eSMOMAcIq6uhy3Q6N', NULL, NULL, '2022-05-18 19:11:58', '2022-05-05 19:24:43'),
(65, 'Roberto Marinho', 'roberto@gmail.com', '$2y$10$4QPoFjoQ18Ks99Q4JqU6xuXfjB8za83UIzSHtf1vGZUx64/xNB/ju', '18264008003', '2022-05-02 03:00:00', 1, 1, NULL, '74999999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-05 20:12:02', '2022-05-05 20:07:28'),
(66, 'Rosa Maria', 'rosamaria@gmail.com', '$2y$10$MhA0yQho1uwaqv7.gQVJ6e8VZBPSl/ImXIhn5WdLk8j.ATOL/R8b2', '09307242089', '2022-05-09 03:00:00', 1, 0, NULL, '87999999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-05 20:11:50', '2022-05-05 20:11:50'),
(67, 'Seu Leôncio', 'seuleoncio@gmail.como', '$2y$10$blHh3zuxvtJ4hY7fbpx3Buun1ZHQfigex/MXGLdeQZEFVu2Ll9Wmy', '66349648072', '2022-05-01 03:00:00', 1, 1, 2, '98777777777', '9887777777', 'AK', '4', 4, 'Latifundiário', '56327010', 'Rua Pantanal', '23', 'Casarão', 'Boa Esperança', 'Petrolina', 'PE', 'L0o8CwEnDCFtbaNsblrdrRxKeJV4QjiK1jymnNEEMw94m9XC6jGeYwhqCeWOCOJK', NULL, NULL, '2022-05-19 12:32:49', '2022-05-06 11:24:34'),
(68, 'Caique Sócio', 'caiquetesterj@gmail.com', 'testes', '04682477501', NULL, 1, NULL, NULL, '74991104890', NULL, NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '23', 'Proximo a rua 20', 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, '2022-05-12 14:51:05', '2022-05-12 14:51:05', '2022-05-10 14:15:16'),
(69, 'CAIQUE NEIVA PIRES MATOS', 'caiquecliente@gmail.com', '$2y$10$mU6WwCqgr3A2KoU/CrnGVeK6vEJgenkinsrN/ABjK/wr9fwpR3DH6', '11992039046', NULL, 1, NULL, NULL, '74991104890', NULL, NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '51', 'Proximo a rua 20', 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, '2022-05-12 14:51:15', '2022-05-12 14:51:15', '2022-05-10 14:25:25'),
(70, 'Caique Matos Teste', 'caiquepiressoc@gmail.com', '$2y$10$vFyPFVm3zC3SsRWgvwj6mONWy9NgVrBMzA4dcEDFBLouyrmBqfLC2', '40230618081', NULL, 1, NULL, NULL, '74991104890', NULL, NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', 'Proximo a rua 20', 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, '2022-05-12 14:51:10', '2022-05-12 14:51:10', '2022-05-10 15:21:10'),
(71, 'CAIQUE NEIVA PIRES MATOS', 'caique@gmail.com', '$2y$10$wJnYhDOTVH/2FoDhzDCYa.fOELgV0cUoBz5A9fEpdjo7SzWoXw.7.', '08229173001', NULL, 1, NULL, NULL, '74991104890', NULL, NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '123', 'Casa', 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, '2022-05-12 14:51:17', '2022-05-12 14:51:17', '2022-05-10 15:23:41'),
(72, 'CAIQUE NEIVA PIRES MATOS', 'caiquepires91@gmail.com', '$2y$10$sc6EPgYoryRUx6z3sQU4Ne.he6Wwof7ZkES9GdXJBmNDAp2FYzDvG', '75157701047', NULL, 1, NULL, NULL, '74991104890', NULL, NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', 'Proximo a rua 20', 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, '2022-05-12 14:51:20', '2022-05-12 14:51:20', '2022-05-10 18:31:51'),
(73, 'Renato Azevedo', 'renatoazevedo@gmail.com', '$2y$10$rkLchKNSNZFO2/SxhnSxc.0omyc0rFM/MiU5TDERYSn5yFzQvnIyW', '11138860050', NULL, 1, NULL, NULL, '74991104890', NULL, NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', 'Proximo a rua 20', 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, '2022-05-12 14:52:15', '2022-05-12 14:52:15', '2022-05-10 20:39:45'),
(74, 'Morgana Valéria', 'morganavaleria@gmail.com', '$2y$10$rdtJI4BCvkfLz.EPh.ZqhOTn1SAFAmZpZqrrH7Dh0LtPD2.z5gU7S', '16485873058', NULL, 1, NULL, NULL, '74999999999', NULL, NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', NULL, 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, '2022-05-12 14:51:25', '2022-05-12 14:51:25', '2022-05-11 14:40:25'),
(75, 'Caique Matos', 'teste@gmail.com', '$2y$10$TDqNY4ck0my7mAM7BJ7rFuwjWrVLYWP41PqlLcS9rpm9Ddp1/nphq', '53227540088', NULL, 1, NULL, NULL, '74991104890', NULL, NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', NULL, 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, '2022-05-12 14:51:12', '2022-05-12 14:51:12', '2022-05-11 17:33:44'),
(76, 'Rosa Maria', 'rosamariadasneves@gmail.com', '$2y$10$v4zL3RqLIsXAXhySX4mMD.cCRL/TjUJ.5gZg7S3oxmtPuI2VLkwAu', '19999811035', NULL, 1, NULL, NULL, '74991104890', NULL, NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', 'Proximo a rua 20', 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, '2022-05-12 14:51:43', '2022-05-12 14:51:43', '2022-05-12 12:01:33'),
(77, 'Mônica Ferreria', 'monicaferreira@gmail.com', '$2y$10$byGDyjlFBgzOseADRAoAruFzDRb2S1XuWK/SC7dKbug7BnY5oe.r2', '47720770064', '2022-05-04 03:00:00', 1, 0, NULL, '74999999999', '', NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', NULL, 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, NULL, '2022-05-12 12:43:34', '2022-05-12 12:43:34'),
(78, 'Belatrix Lestrange', 'belatrix@gmail.com', '$2y$10$k4Nj8RTAigBlc73Jj0dccuoIPadIHymlg6j/yJ50p84bBGz.ePr0u', '68417803025', '2022-05-03 03:00:00', 1, 1, NULL, '74999999999', '', NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', NULL, 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, NULL, '2022-05-12 13:17:54', '2022-05-12 13:17:54'),
(79, 'Luna Lovegood', 'lunaluna@gmail.com', '$2y$10$EHg.KXcadMR/IGnreQJQbuG44l.Omi7ZLILjlH17uQ2BK7zbrlNr6', '63136709063', '1991-12-12 03:00:00', 1, 0, NULL, '73999999999', '', NULL, NULL, NULL, NULL, '44905000', 'Rua das Pontes', '87', NULL, 'Aguada Nova', 'Lapão', 'BA', NULL, NULL, NULL, '2022-05-12 13:36:34', '2022-05-12 13:36:34'),
(80, 'Bill Samá', 'billsama@gmail.com', '$2y$10$p.RDTePUzmouABinaoxk1eTfDQe5YtyxPZttN0Kw3ctZXzdLxXeOK', '36944312093', '1991-12-12 03:00:00', 1, 1, NULL, '87999999999', '', NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', NULL, 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, NULL, '2022-05-18 18:29:18', '2022-05-18 18:29:18'),
(81, 'Bulma San', 'bulmasan@gmail.com', '$2y$10$lRyP/NWiTieHmGbE19DBke1D5UbYoicGtH73EjuB4mU.yL9oXS8Pu', '70506665054', '1991-12-12 03:00:00', 1, 0, NULL, '87999999999', '', NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', 'Proximo a rua 20', 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, NULL, '2022-05-18 18:34:05', '2022-05-18 18:34:05'),
(82, 'Nolan Albforth', 'nolan@gmail.com', '$2y$10$dHWki8yNCUDtiCGLLrgxTe95va4DxC1QvdIPdNjNSCghZRHhBZBHa', '07218075002', '1991-12-12 03:00:00', 1, 0, NULL, '87999999999', '', NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', 'Proximo a rua 20', 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, NULL, '2022-05-18 18:41:47', '2022-05-18 18:41:47'),
(83, 'Alana Dourado', 'alana@gmail.com', '$2y$10$/7Nm4n9QBVh0kRstoeuwbO54E2eAr9K9LGxOmYqS1.obZtcNo05Ma', '28481385050', '1991-12-12 03:00:00', 1, 0, NULL, '87999999999', '', NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', 'Proximo a rua 20', 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, NULL, '2022-05-18 18:43:31', '2022-05-18 18:43:31'),
(84, 'Melinda Parreira', 'melinda@gmail.com', '$2y$10$FoiL9I1y5x6kxzdmeEQDD.BcysroppbjAUAnZdwZepkI8uCVwZAT.', '30953299031', '1991-12-12 03:00:00', 1, 1, NULL, '87999999999', '', NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', 'Proximo a rua 20', 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, NULL, '2022-05-18 18:45:44', '2022-05-18 18:45:44'),
(85, 'Renato Albuquerque', 'renato@gmail.com', '$2y$10$H4dv4bhWzTbxh5D31c468OrXaL/I3hxt6SknwCcHKFVbcXgOTL6B6', '98092592047', '1999-12-12 03:00:00', 1, 1, NULL, '45555555555', '', NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '12', 'Casa', 'Santo Antônio', 'Juazeiro', 'BA', NULL, NULL, NULL, '2022-05-18 18:55:46', '2022-05-18 18:55:46'),
(86, 'CAIQUE NEIVA PIRES MATOS', 'caiquepires91@gmail.com', '$2y$10$kwNMY/6yFrFc5grPFZ2N.OgMHEYrn2FUuVOrOJtqB.NWn8AfneEqS', '04131225069', '1991-12-12 03:00:00', 1, 1, NULL, '74999999999', '', NULL, NULL, NULL, NULL, '48903150', 'Rua Professor Olavo Balbino', '118', 'Proximo a rua 20', 'Santo Antônio', 'Juazeiro', 'BA', '3MliTR9kL24hmZBTiAwbOBMYQKUazbUZqPWGO79BCsuJOVPJcYifYTZH2eM6YEiO', NULL, NULL, '2022-05-19 13:44:19', '2022-05-18 19:11:45');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cartoes`
--
ALTER TABLE `cartoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de tabela `cartoes`
--
ALTER TABLE `cartoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `dependentes`
--
ALTER TABLE `dependentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

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
