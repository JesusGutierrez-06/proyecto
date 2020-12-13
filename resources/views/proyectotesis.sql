-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2020 at 08:19 PM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyectotesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_capa`
--

CREATE TABLE `area_capa` (
  `id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `area_laboral`
--

CREATE TABLE `area_laboral` (
  `id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `capacitacion`
--

CREATE TABLE `capacitacion` (
  `id` int NOT NULL,
  `tipo_capa_id` int NOT NULL,
  `estudiante_id` int NOT NULL,
  `area_capa_id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `institucion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fechainicio` date DEFAULT NULL,
  `fechafin` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrera`
--

CREATE TABLE `carrera` (
  `id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `id` int NOT NULL,
  `empresa_id` int NOT NULL,
  `users_id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `celular` int DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contrato`
--

CREATE TABLE `contrato` (
  `id` int NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE `departamento` (
  `id` int NOT NULL,
  `nombre` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Santa Cruz', 1, '2020-12-06 19:34:19', '2020-12-06 19:34:19'),
(2, 'Pando', 1, '2020-12-06 19:34:19', '2020-12-06 19:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `id` int NOT NULL,
  `dpto_id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `url_pagina` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `celular` int DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `nit` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechaalta` date DEFAULT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`id`, `dpto_id`, `nombre`, `direccion`, `url_pagina`, `descripcion`, `celular`, `telefono`, `nit`, `logo`, `fechaalta`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sofia', '4to anillo, parque industrial', 'www.sofia.com', 'empresa distribuidora aviocola', 723123, 342142, '1242324', NULL, NULL, 1, '2020-12-06 19:58:57', '2020-12-07 12:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `estado_civil`
--

CREATE TABLE `estado_civil` (
  `id` int NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `estado_civil`
--

INSERT INTO `estado_civil` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Soltero/a', 1, '2020-12-06 19:58:57', '2020-12-06 19:58:57'),
(2, 'Casado/a', 1, '2020-12-06 19:58:57', '2020-12-06 19:58:57'),
(5, 'Divorciado/a', 1, '2020-12-06 19:58:57', '2020-12-06 19:58:57'),
(6, 'Viudo/a', 1, '2020-12-06 19:58:57', '2020-12-06 19:58:57'),
(7, 'Concubinato', 1, '2020-12-06 19:58:57', '2020-12-06 19:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int NOT NULL,
  `tipo_sangre_id` int NOT NULL,
  `estado_civil_id` int NOT NULL,
  `provincia_id` int NOT NULL,
  `users_id` int NOT NULL,
  `genero_id` int NOT NULL,
  `matricula` int NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidop` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidom` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechanac` date NOT NULL,
  `telefono` int DEFAULT NULL,
  `celular` int DEFAULT NULL,
  `dni` int NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `strpassword` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechaalta` date DEFAULT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`id`, `tipo_sangre_id`, `estado_civil_id`, `provincia_id`, `users_id`, `genero_id`, `matricula`, `nombre`, `apellidop`, `apellidom`, `fechanac`, `telefono`, `celular`, `dni`, `direccion`, `foto`, `email`, `strpassword`, `fechaalta`, `estado`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, 7, 2, 1123123, 'jesus reinaldo', 'gutierrez', 'sipe', '2000-02-04', 3424124, 6572723, 323123, 'Zona barrio lindo', NULL, NULL, NULL, NULL, 1, '2020-12-07 20:39:07', '2020-12-08 23:58:15'),
(3, 1, 1, 1, 24, 1, 13123123, 'maria', 'guzman', 'suarez', '2000-02-03', 324242, 7123123, 123123123, 'Zona barrio lindo', NULL, NULL, NULL, NULL, 1, '2020-12-08 00:32:47', '2020-12-08 00:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `estudios_idioma`
--

CREATE TABLE `estudios_idioma` (
  `id` int NOT NULL,
  `idioma_id` int NOT NULL,
  `estudiante_id` int NOT NULL,
  `hablar` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `escribir` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `leer` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exp_laboral`
--

CREATE TABLE `exp_laboral` (
  `id` int NOT NULL,
  `area_laboral_id` int NOT NULL,
  `estudiante_id` int NOT NULL,
  `institucion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `puesto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fechainicial` date NOT NULL,
  `fechafin` date NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `id` int NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `genero`
--

INSERT INTO `genero` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Femenino', 1, '2020-12-06 21:51:50', '2020-12-06 21:51:50'),
(2, 'Masculino', 1, '2020-12-06 18:08:29', '2020-12-06 18:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `idioma`
--

CREATE TABLE `idioma` (
  `id` int NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inf_vocacional`
--

CREATE TABLE `inf_vocacional` (
  `id` int NOT NULL,
  `carrera_id` int NOT NULL,
  `estudiante_id` int NOT NULL,
  `semestre` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `institucion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date DEFAULT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_12_07_150315_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oferta_laboral`
--

CREATE TABLE `oferta_laboral` (
  `id` int NOT NULL,
  `carrera_id` int NOT NULL,
  `empresa_id` int NOT NULL,
  `salario_id` int NOT NULL,
  `tipo_sueldo_id` int NOT NULL,
  `contrato_id` int NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `requisito` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `publicado` date DEFAULT NULL,
  `vencimiento` date DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `celular` int DEFAULT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int NOT NULL,
  `users_id` int NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidop` varchar(80) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidom` varchar(80) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `carnet` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `celular` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postular_oferta`
--

CREATE TABLE `postular_oferta` (
  `id` int NOT NULL,
  `estudiante_id` int NOT NULL,
  `oferta_laboral_id` int NOT NULL,
  `fecha_postulacion` date NOT NULL,
  `estado_preseleccion` int DEFAULT NULL,
  `estado_final_contrato` int DEFAULT NULL,
  `aspiracion_salarial` int DEFAULT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provincia`
--

CREATE TABLE `provincia` (
  `id` int NOT NULL,
  `dpto_id` int NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `provincia`
--

INSERT INTO `provincia` (`id`, `dpto_id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 'warnes', 1, '2020-12-06 19:54:20', '2020-12-06 19:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `referencia`
--

CREATE TABLE `referencia` (
  `id` int NOT NULL,
  `estudiante_id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidop` varchar(70) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidom` varchar(70) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `trabajo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salario`
--

CREATE TABLE `salario` (
  `id` int NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('VY3ZBYr5avXbJ7itGucG7bITRkcP74i4MsTZ6tKJ', 7, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTm5FaVpTcFFXYjFuOFRZNHFHTDk2SnJNczZjY0JJVEpveGlBRFFuQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRtUWRHQ3pMak9zMVR5NEZwNk41Y0tlQ0NMaC9tNDNWLkcyM0xlZENlRENnV3VRak9STFlHbSI7fQ==', 1607473114);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `email`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 7, 'jesusgutierrez0106@gmail.com\'s Team', 1, '2020-12-07 15:52:17', '2020-12-07 15:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_capa`
--

CREATE TABLE `tipo_capa` (
  `id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_sangre`
--

CREATE TABLE `tipo_sangre` (
  `id` int NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tipo_sangre`
--

INSERT INTO `tipo_sangre` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'O negativo.', 1, '2020-12-06 19:58:57', '2020-12-06 19:58:57'),
(2, 'O positivo.', 1, '2020-12-06 19:58:57', '2020-12-06 19:58:57'),
(3, 'A negativo', 1, '2020-12-06 21:51:50', NULL),
(4, 'A positivo', 1, '2020-12-06 19:58:57', '2020-12-06 19:58:57'),
(5, 'B negativo', 1, '2020-12-06 19:58:57', '2020-12-06 19:58:57'),
(6, 'B positivo', 1, '2020-12-06 19:58:57', '2020-12-06 19:58:57'),
(7, 'AB negativo', 1, '2020-12-06 19:58:57', '2020-12-06 19:58:57'),
(8, 'AB positivo', 1, '2020-12-06 18:08:29', '2020-12-06 18:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_sueldo`
--

CREATE TABLE `tipo_sueldo` (
  `id` int NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 1, '2020-12-06 18:08:29', '2020-12-06 18:08:29'),
(2, 'Estudiante', 1, '2020-12-06 18:08:29', '2020-12-06 18:08:29'),
(3, 'Empresa', 1, '2020-12-06 18:09:44', '2020-12-06 18:09:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `tipo_usuario_id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `tipo_usuario_id`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `profile_photo_path`, `estado`, `created_at`, `updated_at`) VALUES
(7, 1, 'jesusgutierrez0106@gmail.com', NULL, '$2y$10$mQdGCzLjOs1Ty4Fp6N5cKeCCLh/m43V.G23LedCeDCgWuQjORLYGm', NULL, NULL, NULL, NULL, 0, '2020-12-07 15:52:17', '2020-12-07 15:52:17'),
(8, 2, 'Casimiro@gmail.com', NULL, '$2y$10$McDUDt9VdOsrtrbrdSS.d.Ieua6D9eAlInB2oYB.s8OCDhUCMgRBy', NULL, NULL, NULL, NULL, 0, '2020-12-07 16:56:27', '2020-12-07 16:56:27'),
(9, 3, 'gamin@gmail.com', NULL, '$2y$10$ZNsynXO/Y4eZNj0YfPgrZeeiSe7OteoF0EcPQVfCAu/JuSy.kdVoa', NULL, NULL, NULL, NULL, 0, '2020-12-07 17:16:08', '2020-12-07 17:16:08'),
(10, 3, 'puedeserzaszar@gmail.com', NULL, '$2y$10$9VgaV7sc7c3DEPoYtddUnurpZmztPw5QPg.M19aLkhLjwybwn5t6m', NULL, NULL, NULL, NULL, 1, '2020-12-07 21:44:35', '2020-12-07 21:44:35'),
(11, 2, 'asd@gmal.com', NULL, '$2y$10$OnxrFYtfxNS9wiXEIEBDseDc9.JlWtxp3judpMorf6sxLvzLjIriK', NULL, NULL, NULL, NULL, 1, '2020-12-07 21:47:58', '2020-12-07 21:47:58'),
(13, 2, 'elmlefco1@gmail.com', NULL, '$2y$10$pEi.30Ddvt6fo5cbMhA3D.P8N2p9FOaQKlvzzaIHr1By6cAaDiTVe', NULL, NULL, NULL, NULL, 1, '2020-12-07 21:54:12', '2020-12-07 21:54:12'),
(14, 2, 'prueba@gmail.com', NULL, '$2y$10$upGMrR7VAkRfg3kMrmtxUeMP7W6Dhym5qr1TVi59.rM4UVvOY.6EW', NULL, NULL, NULL, NULL, 1, '2020-12-07 22:04:15', '2020-12-07 22:04:15'),
(17, 2, 'prueba1@gmail.com', NULL, '$2y$10$GSgbuFw7S1YLv36C0TJDbey5d.3vsqnmD6sWV3fgUaf651nfVHt1O', NULL, NULL, NULL, NULL, 1, '2020-12-07 22:06:26', '2020-12-07 22:06:26'),
(18, 2, 'prueba2@gmail.com', NULL, '$2y$10$96npF8rF.ORaewtKR2MNjuR/2GQZoerhd.UqgiuO3mcfl.2WViFB2', NULL, NULL, NULL, NULL, 1, '2020-12-07 22:07:42', '2020-12-07 22:07:42'),
(19, 2, 'prueba3@gmail.com', NULL, '$2y$10$f4YagUGEsg5UIN1Lm.qDZuHh5f.N2dR9J/L4zjoWqCtxHQMmb5N2u', NULL, NULL, NULL, NULL, 1, '2020-12-07 22:35:08', '2020-12-07 22:35:08'),
(21, 2, 'prueba4@gmail.com', NULL, '$2y$10$gOcRHTQ.RM3gGfSeu2SAMOd9ZuZP0sL45RZlUr//HDvWmR.ymUygG', NULL, NULL, NULL, NULL, 1, '2020-12-07 22:38:59', '2020-12-07 22:38:59'),
(23, 2, 'prueba5@gmail.com', NULL, '$2y$10$VKDqr8q8RzrzHvfnZXMWbeCsw6J1KQ8GbgMnXJc3.WNE.IpBExKTO', NULL, NULL, NULL, NULL, 1, '2020-12-07 22:39:48', '2020-12-07 22:39:48'),
(24, 2, 'prueba6@gmail.com', NULL, '$2y$10$rkiGQonvMNSblt5zD.lF.upV3IrBNJk3OQcTWWUEPf8K2Z8p16E8i', NULL, NULL, NULL, NULL, 1, '2020-12-08 00:24:15', '2020-12-08 00:24:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_capa`
--
ALTER TABLE `area_capa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_laboral`
--
ALTER TABLE `area_laboral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `capacitacion_estudiante_id` (`estudiante_id`),
  ADD KEY `capacitacion_area_capa_id` (`area_capa_id`),
  ADD KEY `capacitacion_tipo_capa_id` (`tipo_capa_id`);

--
-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacto_empresa_id` (`empresa_id`),
  ADD KEY `contacto_users_id` (`users_id`);

--
-- Indexes for table `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_departamento_id` (`dpto_id`);

--
-- Indexes for table `estado_civil`
--
ALTER TABLE `estado_civil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estudiante_users_id` (`users_id`),
  ADD KEY `estudiante_tipo_sangre_id` (`tipo_sangre_id`),
  ADD KEY `estudiante_estado_civil_id` (`estado_civil_id`),
  ADD KEY `estudiante_genero_id` (`genero_id`),
  ADD KEY `estudiante_provincia_id` (`provincia_id`);

--
-- Indexes for table `estudios_idioma`
--
ALTER TABLE `estudios_idioma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estudios_idioma_estudiante_id` (`estudiante_id`),
  ADD KEY `estudios_idioma_idioma_id` (`idioma_id`);

--
-- Indexes for table `exp_laboral`
--
ALTER TABLE `exp_laboral`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exp_laboral_estudiante_id` (`estudiante_id`),
  ADD KEY `exp_laboral_area_laboral_id` (`area_laboral_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inf_vocacional`
--
ALTER TABLE `inf_vocacional`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inf_vocacional_estudiante_id` (`estudiante_id`),
  ADD KEY `inf_vocacional_carrera_id` (`carrera_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oferta_laboral`
--
ALTER TABLE `oferta_laboral`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oferta_laboral_carrera_id` (`carrera_id`),
  ADD KEY `oferta_laboral_salario_id` (`salario_id`),
  ADD KEY `oferta_laboral_tipo_sueldo_id` (`tipo_sueldo_id`),
  ADD KEY `oferta_laboral_contrato_id` (`contrato_id`),
  ADD KEY `oferta_laboral_empresa_id` (`empresa_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_users_id` (`users_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postular_oferta`
--
ALTER TABLE `postular_oferta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postular_oferta_estudiante_id` (`estudiante_id`),
  ADD KEY `postular_oferta_oferta_laboral_id` (`oferta_laboral_id`);

--
-- Indexes for table `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provincia_departamento_id` (`dpto_id`);

--
-- Indexes for table `referencia`
--
ALTER TABLE `referencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referencia_estudiante_id` (`estudiante_id`);

--
-- Indexes for table `salario`
--
ALTER TABLE `salario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `tipo_capa`
--
ALTER TABLE `tipo_capa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_sangre`
--
ALTER TABLE `tipo_sangre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_sueldo`
--
ALTER TABLE `tipo_sueldo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_tipo_usuario_id` (`tipo_usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_capa`
--
ALTER TABLE `area_capa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `area_laboral`
--
ALTER TABLE `area_laboral`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `capacitacion`
--
ALTER TABLE `capacitacion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estado_civil`
--
ALTER TABLE `estado_civil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `estudios_idioma`
--
ALTER TABLE `estudios_idioma`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exp_laboral`
--
ALTER TABLE `exp_laboral`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inf_vocacional`
--
ALTER TABLE `inf_vocacional`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oferta_laboral`
--
ALTER TABLE `oferta_laboral`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postular_oferta`
--
ALTER TABLE `postular_oferta`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `referencia`
--
ALTER TABLE `referencia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salario`
--
ALTER TABLE `salario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipo_capa`
--
ALTER TABLE `tipo_capa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_sangre`
--
ALTER TABLE `tipo_sangre`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tipo_sueldo`
--
ALTER TABLE `tipo_sueldo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD CONSTRAINT `capacitacion_area_capa_id` FOREIGN KEY (`area_capa_id`) REFERENCES `area_capa` (`id`),
  ADD CONSTRAINT `capacitacion_estudiante_id` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiante` (`id`),
  ADD CONSTRAINT `capacitacion_tipo_capa_id` FOREIGN KEY (`tipo_capa_id`) REFERENCES `tipo_capa` (`id`);

--
-- Constraints for table `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_empresa_id` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `contacto_users_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_departamento_id` FOREIGN KEY (`dpto_id`) REFERENCES `departamento` (`id`);

--
-- Constraints for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_estado_civil_id` FOREIGN KEY (`estado_civil_id`) REFERENCES `estado_civil` (`id`),
  ADD CONSTRAINT `estudiante_genero_id` FOREIGN KEY (`genero_id`) REFERENCES `genero` (`id`),
  ADD CONSTRAINT `estudiante_provincia_id` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`),
  ADD CONSTRAINT `estudiante_tipo_sangre_id` FOREIGN KEY (`tipo_sangre_id`) REFERENCES `tipo_sangre` (`id`),
  ADD CONSTRAINT `estudiante_users_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `estudios_idioma`
--
ALTER TABLE `estudios_idioma`
  ADD CONSTRAINT `estudios_idioma_estudiante_id` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiante` (`id`),
  ADD CONSTRAINT `estudios_idioma_idioma_id` FOREIGN KEY (`idioma_id`) REFERENCES `idioma` (`id`);

--
-- Constraints for table `exp_laboral`
--
ALTER TABLE `exp_laboral`
  ADD CONSTRAINT `exp_laboral_area_laboral_id` FOREIGN KEY (`area_laboral_id`) REFERENCES `area_laboral` (`id`),
  ADD CONSTRAINT `exp_laboral_estudiante_id` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiante` (`id`);

--
-- Constraints for table `inf_vocacional`
--
ALTER TABLE `inf_vocacional`
  ADD CONSTRAINT `inf_vocacional_carrera_id` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`),
  ADD CONSTRAINT `inf_vocacional_estudiante_id` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiante` (`id`);

--
-- Constraints for table `oferta_laboral`
--
ALTER TABLE `oferta_laboral`
  ADD CONSTRAINT `oferta_laboral_carrera_id` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`),
  ADD CONSTRAINT `oferta_laboral_contrato_id` FOREIGN KEY (`contrato_id`) REFERENCES `contrato` (`id`),
  ADD CONSTRAINT `oferta_laboral_empresa_id` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `oferta_laboral_salario_id` FOREIGN KEY (`salario_id`) REFERENCES `salario` (`id`),
  ADD CONSTRAINT `oferta_laboral_tipo_sueldo_id` FOREIGN KEY (`tipo_sueldo_id`) REFERENCES `tipo_sueldo` (`id`);

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_users_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `postular_oferta`
--
ALTER TABLE `postular_oferta`
  ADD CONSTRAINT `postular_oferta_estudiante_id` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiante` (`id`),
  ADD CONSTRAINT `postular_oferta_oferta_laboral_id` FOREIGN KEY (`oferta_laboral_id`) REFERENCES `oferta_laboral` (`id`);

--
-- Constraints for table `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `provincia_departamento_id` FOREIGN KEY (`dpto_id`) REFERENCES `departamento` (`id`);

--
-- Constraints for table `referencia`
--
ALTER TABLE `referencia`
  ADD CONSTRAINT `referencia_estudiante_id` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiante` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_tipo_usuario_id` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
