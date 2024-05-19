-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2024 a las 02:40:51
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paleteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `ID` int(50) NOT NULL,
  `Suma` int(50) NOT NULL,
  `Producto` varchar(100) NOT NULL,
  `Total` int(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`ID`, `Suma`, `Producto`, `Total`, `fecha`) VALUES
(0, 0, '', 38, '2024-05-17'),
(0, 0, '', 21, '2024-05-17'),
(0, 0, '', 21, '2024-05-17'),
(0, 0, '', 15, '2024-05-17'),
(0, 0, '', 21, '2024-05-17'),
(0, 0, '', 21, '2024-05-17'),
(0, 0, '', 32, '2024-05-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha_envio` timestamp NOT NULL DEFAULT current_timestamp(),
  `nombre_remitente` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `correo`, `asunto`, `mensaje`, `fecha_envio`, `nombre_remitente`) VALUES
(1, '', 'oliver@alumnos.com', 'Reporte de ventas', '<hr>Fecha: 2024-05-18\r\nUsuario: oliver@alumnos.com\r\nTotal de venta: $38\r\nProductos vendidos:\r\nProducto: Paleta de Mango - Precio: $17\r\nProducto: Nieve de limon - Precio: $21\r\n<hr>Fecha: 2024-05-18\r\nUsuario: oliver@alumnos.com\r\nTotal de venta: $21\r\nProductos vendidos:\r\nProducto: Paleta de Oreo - Precio: $21\r\n<hr>Fecha: 2024-05-18\r\nUsuario: oliver@alumnos.com\r\nTotal de venta: $21\r\nProductos vendidos:\r\nProducto: Nieve de limon - Precio: $21\r\n<hr>Fecha: 2024-05-18\r\nUsuario: oliver@alumnos.com\r\nTotal de venta: $15\r\nProductos vendidos:\r\nProducto: Agua de limon con chia 500 ml - Precio: $15\r\n ', '2024-05-18 00:37:26', 'Oliver');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(255) NOT NULL,
  `nombre_cliente` varchar(100) NOT NULL,
  `descripcion_pedido` text NOT NULL,
  `fecha_pedido` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `nombre_cliente`, `descripcion_pedido`, `fecha_pedido`) VALUES
(1, 'Mario', 'Pedido de Leche', '2024-04-23'),
(2, 'Valeria', 'Pedido de Galletas', '2024-04-23'),
(3, 'Ioh', 'Cargamento de conos', '2024-05-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `stock`) VALUES
(1, 'Paleta de Mango', 'Deliciosa paleta de mango azucarada', 17.00, 26),
(14, 'Paleta de Oreo', 'Deliciosa paleta de oreo', 21.00, 44),
(15, 'Agua de limon con chia Lt', 'Deliciosa agua de limon con chia de litro', 25.00, 20),
(16, 'Agua de limon con chia 500 ml', 'Deliciosa agua de limon con chia de medio litro', 15.00, 20),
(17, 'Nieve de limon', 'Deliciosa nieve de limon', 21.00, 30),
(18, 'Nieve de pisteche', 'Deliciosa nieve de pistache', 21.00, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_comprados`
--

CREATE TABLE `productos_comprados` (
  `nombre` varchar(100) NOT NULL,
  `precio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos_comprados`
--

INSERT INTO `productos_comprados` (`nombre`, `precio`) VALUES
('Paleta de Mango', 17),
('Paleta de Oreo', 18),
('Nieve de pistacho', 21),
('Agua de limon con chia', 20),
('Paleta de maracuya', 21),
('Paleta de maracuya', 21),
('Paleta de Oreo', 18),
('Paleta de Mango', 17),
('Paleta de Oreo', 18),
('Agua de limon con chia', 20),
('Paleta de maracuya', 21),
('Paleta de Mango', 17),
('Paleta de Mango', 17),
('Paleta de vainilla', 18),
('Paleta de Mango', 17),
('Paleta de maracuya', 21),
('Paleta de Mango', 17),
('Paleta de Mango', 17),
('Paleta de Mango', 17),
('Paleta de Oreo', 18),
('Agua de limon con chia', 20),
('Paleta de maracuya', 21),
('Paleta de vainilla', 18),
('Nieve de pistacho', 21),
('Paleta de Mango', 17),
('Paleta de maracuya', 21),
('Paleta de Mango', 17),
('Paleta de maracuya', 21),
('Paleta de Oreo', 18),
('Agua de limon con chia', 20),
('Paleta de Mango', 17),
('Paleta de Mango', 17),
('Paleta de vainilla', 18),
('Nieve de pistacho', 21),
('Paleta de Mango', 17),
('Nieve de limon', 21),
('Paleta de Oreo', 21),
('Nieve de limon', 21),
('Agua de limon con chia 500 ml', 15),
('Paleta de Oreo', 21),
('Nieve de pisteche', 21),
('Paleta de Mango', 17),
('Agua de limon con chia 500 ml', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre_completo` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `rol` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre_completo`, `correo`, `usuario`, `contrasena`, `rol`) VALUES
('Oliver', 'oliver@alumnos.com', 'oliverto', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', NULL),
('Juan', 'juan@alumnos.com', 'juanin', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'administrador'),
('Valeria', 'valeria@alumnos.com', 'valeria', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', ''),
('Oliver', 'ggg@udg.mx', 'oliverto2', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '2'),
('Juan3', 'juan2@alumnos.com', 'juanin2', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'empleado'),
('Oliver', 'a@udg.mx', 'juan3', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'empleado'),
('MARIO', 'marioman@correo.com', 'juanin44', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'administrador'),
('MAX', 'max@almunos.com', 'MAX', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'empleado'),
('Calamardo', 'camilo@alumnos.com', 'calamardo', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'empleado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
