-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2020 a las 05:56:45
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estufa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(5, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(7, '2016_06_01_000004_create_oauth_clients_table', 2),
(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0c3ca51bf324165d4ff0e2a1663aa89e07d1f84b223ed8c4e8692768086a8fb00e78815f14c176b1', 1, 2, NULL, '[]', 0, '2020-04-10 05:35:09', '2020-04-10 05:35:09', '2021-04-09 22:35:09'),
('143621c83a451be24f0357ad80375c47bb28713e27121220d67dbe9ccd7f4c2345dec21bdffa9a00', 1, 2, NULL, '[]', 0, '2020-04-02 08:39:55', '2020-04-02 08:39:55', '2021-04-02 01:39:55'),
('44f8b7cee4541e770accadcd51620742ae823d86c3213f5e95fa3997e930592851e630c3b7b1ffbd', 1, 2, NULL, '[]', 0, '2020-04-08 06:09:50', '2020-04-08 06:09:50', '2021-04-07 23:09:50'),
('4b105d67a20ee664a921096caefcf5f8005d64810a121f23ab50b75b8dd475859acf5fe3160e5151', 1, 2, NULL, '[]', 0, '2020-04-10 04:16:13', '2020-04-10 04:16:13', '2021-04-09 21:16:13'),
('635f4672eb579cb81a84e0d5b34a04c8231c753f63eaa2a82076ea394bafebedac3511dde2949b55', 1, 2, NULL, '[]', 0, '2020-04-10 05:37:39', '2020-04-10 05:37:39', '2021-04-09 22:37:39'),
('7c39ebc43ccc65fe7422f62823d87aa61019d0830293a02f0d5c624efee90e2dc851975d17560665', 1, 2, NULL, '[]', 0, '2020-04-14 12:12:51', '2020-04-14 12:12:51', '2021-04-14 05:12:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', '3FFpxr1GYcZFht4G5bnbdTqiAlkpg0LDZZxdtnF4', 'http://localhost', 1, 0, 0, '2020-04-02 08:02:40', '2020-04-02 08:02:40'),
(2, NULL, 'Laravel Password Grant Client', 'NzYyK2shv2Hbyb3wZIxF34yk7NyBUrTFpBeIuEOh', 'http://localhost', 0, 1, 0, '2020-04-02 08:02:40', '2020-04-02 08:02:40'),
(3, NULL, 'Laravel Personal Access Client', 'IKPrl0cIZyPq4lAbkS2ontHf7XB7RIVUk990thDj', 'http://localhost', 1, 0, 0, '2020-04-08 06:09:30', '2020-04-08 06:09:30'),
(4, NULL, 'Laravel Password Grant Client', 'OgB8jGfaB0qc5IyiL7AKQG7tL525RmoVh4FnZGCq', 'http://localhost', 0, 1, 0, '2020-04-08 06:09:30', '2020-04-08 06:09:30'),
(5, NULL, 'Laravel Personal Access Client', 'JUm6iMFuYq7i3FwoXFfiWJeJf8GEpSJyJhyoLJBv', 'http://localhost', 1, 0, 0, '2020-04-10 03:41:21', '2020-04-10 03:41:21'),
(6, NULL, 'Laravel Password Grant Client', 'XmtCjzSUbxBL0wNDOrmqlb7rWJ57Bl7oetEjqvK0', 'http://localhost', 0, 1, 0, '2020-04-10 03:41:22', '2020-04-10 03:41:22'),
(7, NULL, 'Laravel Personal Access Client', '9peNqNXsJdrnS1Wqr2C1sya1yo53SC8VYEupInfG', 'http://localhost', 1, 0, 0, '2020-04-10 04:01:30', '2020-04-10 04:01:30'),
(8, NULL, 'Laravel Password Grant Client', 'bn20sZE3KnIzrVyLHMZ14VzZqg9f7MpSH2ZBM9P6', 'http://localhost', 0, 1, 0, '2020-04-10 04:01:31', '2020-04-10 04:01:31'),
(9, NULL, 'Laravel Personal Access Client', 'xcrNE59bHl3eE1PT92EGsU3AyfYxcejZOIm0PzaR', 'http://localhost', 1, 0, 0, '2020-04-10 05:33:49', '2020-04-10 05:33:49'),
(10, NULL, 'Laravel Password Grant Client', 'IcTaxZW4EfbrEjBGbqnEN9qELjUfME6CLyicZfZe', 'http://localhost', 0, 1, 0, '2020-04-10 05:33:49', '2020-04-10 05:33:49'),
(11, NULL, 'Laravel Personal Access Client', 'zNnou5S27Pogbe3Bt0hSKksVx2qVFMDQsAJkqSAo', 'http://localhost', 1, 0, 0, '2020-04-14 12:22:07', '2020-04-14 12:22:07'),
(12, NULL, 'Laravel Password Grant Client', 'jWT9KsdiwAtwhZwBb75GlxAuHf5KGvK1Jn0DY0fT', 'http://localhost', 0, 1, 0, '2020-04-14 12:22:07', '2020-04-14 12:22:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-04-02 08:02:40', '2020-04-02 08:02:40'),
(2, 3, '2020-04-08 06:09:30', '2020-04-08 06:09:30'),
(3, 5, '2020-04-10 03:41:21', '2020-04-10 03:41:21'),
(4, 7, '2020-04-10 04:01:31', '2020-04-10 04:01:31'),
(5, 9, '2020-04-10 05:33:49', '2020-04-10 05:33:49'),
(6, 11, '2020-04-14 12:22:07', '2020-04-14 12:22:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('078ca09025dbd4403720a1b126787fc2a7624b7dc8ca4413447a614cb47aadfe43fe35ac25be82f3', '7c39ebc43ccc65fe7422f62823d87aa61019d0830293a02f0d5c624efee90e2dc851975d17560665', 0, '2021-04-14 05:12:51'),
('228134d56793fef87358dd2ec4eaf53c29fa7758f46db30043297819b62b899beeadc35d879dc87c', '4b105d67a20ee664a921096caefcf5f8005d64810a121f23ab50b75b8dd475859acf5fe3160e5151', 0, '2021-04-09 21:16:13'),
('34415a43db7f68c49f458ad8ced22de43203b23f4bfe2a23f60ab2079c4e1ab5837750e2239a9bd5', '635f4672eb579cb81a84e0d5b34a04c8231c753f63eaa2a82076ea394bafebedac3511dde2949b55', 0, '2021-04-09 22:37:39'),
('6187a49cdd2b9a516bd13ca8f0e7bf64c9cb94e4a3b58cb2dadf9427a2e59add34e681352c88b31a', '143621c83a451be24f0357ad80375c47bb28713e27121220d67dbe9ccd7f4c2345dec21bdffa9a00', 0, '2021-04-02 01:39:56'),
('cf91db8ad0d5636e4534a874e1e4d479b665fc38d1ae7252207c4af830074f4bbe0198da974445e1', '44f8b7cee4541e770accadcd51620742ae823d86c3213f5e95fa3997e930592851e630c3b7b1ffbd', 0, '2021-04-07 23:09:50'),
('e4f3d9ae060b8c27487598fefd092cb3ec481d50b32f95e7941511d2666c6badb6c16c8b29849c1d', '0c3ca51bf324165d4ff0e2a1663aa89e07d1f84b223ed8c4e8692768086a8fb00e78815f14c176b1', 0, '2021-04-09 22:35:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `id` int(11) NOT NULL,
  `tipo_tarea` varchar(100) DEFAULT NULL,
  `encargado` varchar(50) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `foto_resultado` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `modelo_estufa` varchar(30) DEFAULT NULL,
  `precio_estufa` int(11) DEFAULT NULL,
  `pieza` varchar(30) DEFAULT NULL,
  `precio_pieza` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`id`, `tipo_tarea`, `encargado`, `descripcion`, `estado`, `material`, `fecha`, `ubicacion`, `foto_resultado`, `created_at`, `updated_at`, `id_user`, `modelo_estufa`, `precio_estufa`, `pieza`, `precio_pieza`) VALUES
(13, 'Instalacion', 'fer', 'TareaInstalacion', 'Terminado', NULL, '2020-02-01', 'ubicacion', 'Bk1MEAHTBn5amLvlwysOGHg1agGgG3jteG7j7OLE.jpeg', '2020-04-13 13:07:10', '2020-04-28 10:50:19', 1, 'aaa5060', 500, NULL, NULL),
(14, 'Reparacion', 'encargadoEdit', 'descripcionEdit', 'estadoEdit', 'modeloEdit', '2020-02-01', 'ubicacionEdit', 'JsEPqRMyiqc2gU7aYzyr4Yqk9exBMqvBf66O5fe7.png', '2020-04-13 13:07:34', '2020-04-28 10:54:03', 1, NULL, NULL, 'piezaEdit', 600),
(15, 'Instalacion', 'encargadoEdit', 'descripcionEdit', 'estadoEdit', NULL, '2020-02-01', 'casa', '0eJtP3upb1HVYz7wrvICFYRoc0taCIa1O22Qz7hs.jpeg', '2020-04-14 11:27:49', '2020-04-28 10:55:04', 1, 'modeloEdit', 500, NULL, NULL),
(16, 'Reparacion', 'fer', 'TareaRepararPendiente', 'Pendiente', NULL, '2020-02-01', 'ubicacion', 'LOw363qS4caLZpW6gsnPSNodgM5XJmHEJylA1lbZ.jpeg', '2020-04-14 11:30:35', '2020-04-28 10:54:14', 1, NULL, NULL, 'pieza de arriba', 6900),
(17, 'Instalacion', 'fer', 'tareaApi', 'estado', NULL, '2020-02-01', 'ubicacion', '6xARZPgyYpXEJjiaSAfJaZ4m4odoto2gmSkU7Crl.jpeg', '2020-04-14 12:23:56', '2020-04-28 10:50:40', 1, 'aaa12', 500, NULL, NULL),
(18, 'Reparacion', 'fer', 'tareaApi', 'estado', 'material', '2020-02-01', 'ubicacion', 'Q71eepvqJpyWQyQGLTSSxeR6DI7lLTe0tf4x2jfY.jpeg', '2020-04-14 12:25:40', '2020-04-28 10:54:26', 1, NULL, NULL, 'pieza', 890),
(19, 'Reparacion', 'fer', 'tareaApi', 'estado', 'material', '2020-02-01', 'ubicacion', 't94kFxqIU4y9vW1fGpA192lbPWqGxPt6RWYe5aKI.jpeg', '2020-04-14 12:25:57', '2020-04-28 10:54:39', 1, NULL, NULL, 'pieza', 890),
(20, 'Instalacion', 'fer', 'tareaApi2', 'estado', NULL, '2020-02-01', 'ubicacion', '7VS68CVRsxunI8O8jQWmZBBAIhR7YwkUanx5TrvY.jpeg', '2020-04-14 12:26:37', '2020-04-28 10:50:49', 1, 'aaa12', 500, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuarios`
--

CREATE TABLE `tipos_usuarios` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos_usuarios`
--

INSERT INTO `tipos_usuarios` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Trabajador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_tipo_usuario` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `tipo`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `id_tipo_usuario`) VALUES
(1, 'Administrador', 'Fer', 'fer@gmail.com', NULL, '$2y$10$tkHI8epv5YhGhDIEHsBpHuhiaKzK3sCC9D7L6XbjPZdlDWorWrLr.', 'qhEXMlafBmsZB0heUjQoCMAxJXArQIg8h9B6uM0XFDxJzJVSByEi7nqPf6h0', '2020-04-02 07:57:18', '2020-04-02 07:57:18', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
