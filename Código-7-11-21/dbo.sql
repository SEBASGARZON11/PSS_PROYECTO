-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2021 a las 23:25:12
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `CodiCargo` int(11) NOT NULL,
  `CarDescripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`CodiCargo`, `CarDescripcion`) VALUES
(1, 'Empleado'),
(2, 'Administrador ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCate` int(10) UNSIGNED NOT NULL,
  `estado` int(11) NOT NULL,
  `NombCate` varchar(45) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCate`, `estado`, `NombCate`, `Descripcion`) VALUES
(1, 1, 'Vestidos', 'bonitos '),
(2, 1, 'Camisetas', NULL),
(3, 1, 'Abrigos ejemplo', ''),
(4, 1, 'Gorras', 'prueba'),
(5, 1, 'Pantalonetas', ''),
(6, 1, 'Chalecos', ''),
(7, 1, 'Bolsos de mano', ''),
(8, 1, 'Accesorios', ''),
(9, 1, 'Calcetines', ''),
(10, 1, 'Ropa interior', ''),
(11, 1, 'Chaquetas', ''),
(12, 1, 'Buzos', ''),
(13, 1, 'Camisa polo2 tecno', 'manga larga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devoluciones`
--

CREATE TABLE `devoluciones` (
  `id_devolucion` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `persona_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `devoluciones`
--

INSERT INTO `devoluciones` (`id_devolucion`, `producto_id`, `total`, `descripcion`, `persona_id`, `fecha`) VALUES
(16, 9, 1, 'El producto está defectuoso.', 1003534664, '2021-03-06 23:51:19'),
(23, 12, 1, '', 1003534666, '2021-09-27 14:55:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `nombre_estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id_factura` int(11) NOT NULL,
  `codigo_factura` varchar(250) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha_factura` varchar(250) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `productos` text NOT NULL,
  `productos_esp` varchar(250) NOT NULL,
  `iva` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id_factura`, `codigo_factura`, `usuario_id`, `fecha_factura`, `cliente_id`, `productos`, `productos_esp`, `iva`, `subtotal`, `total`) VALUES
(13, 'IEA2021030610', 3, '2021/03/06', 1, '[{\"idprod\":\"6\",\"cantidad\":\"2\",\"precio\":84000,\"nombre\":\"Falda de cuero\",\"valor_unitario\":\"42000\"},{\"idprod\":\"7\",\"cantidad\":\"1\",\"precio\":21000,\"nombre\":\"Camiseta Calvin Clain\",\"valor_unitario\":\"21000\"},{\"idprod\":\"4\",\"cantidad\":\"3\",\"precio\":180000,\"nombre\":\"Buzo Nike\",\"valor_unitario\":\"60000\"}]', '[\"6\",\"7\",\"4\"]', 50, 285000, 427500),
(14, 'IEA2021030624', 2, '2021/03/06', 1003534663, '[{\"idprod\":\"6\",\"cantidad\":\"2\",\"precio\":84000,\"nombre\":\"Falda de cuero\",\"valor_unitario\":\"42000\"},{\"idprod\":\"7\",\"cantidad\":\"11\",\"precio\":231000,\"nombre\":\"Camiseta Calvin Clain\",\"valor_unitario\":\"21000\"}]', '[\"6\",\"7\"]', 5, 315000, 330750),
(15, 'IEA2021030739', 2, '2021/03/07', 1003534663, '[{\"idprod\":\"8\",\"cantidad\":\"2\",\"precio\":60000,\"nombre\":\"Chaqueta nike\",\"valor_unitario\":\"30000\"},{\"idprod\":\"7\",\"cantidad\":\"3\",\"precio\":63000,\"nombre\":\"Camiseta Calvin Clain\",\"valor_unitario\":\"21000\"}]', '[\"8\",\"7\"]', 19, 123000, 146370),
(17, 'IEA2021030755', 2, '2021/03/07', 1003534663, '[{\"idprod\":\"9\",\"cantidad\":\"15\",\"precio\":178500,\"nombre\":\"Pantaloneta\",\"valor_unitario\":\"11900\"},{\"idprod\":\"7\",\"cantidad\":\"1\",\"precio\":21000,\"nombre\":\"Camiseta Calvin Clain\",\"valor_unitario\":\"21000\"}]', '[\"9\",\"7\"]', 30, 199500, 259350),
(18, 'IEA2021030773', 2, '2021/03/07', 1, '[{\"idprod\":\"10\",\"cantidad\":\"1\",\"precio\":10000,\"nombre\":\"Camiseta Peppa Pig\",\"valor_unitario\":\"10000\"},{\"idprod\":\"9\",\"cantidad\":\"1\",\"precio\":11900,\"nombre\":\"Pantaloneta\",\"valor_unitario\":\"11900\"},{\"idprod\":\"8\",\"cantidad\":\"1\",\"precio\":30000,\"nombre\":\"Chaqueta nike\",\"valor_unitario\":\"30000\"},{\"idprod\":\"7\",\"cantidad\":\"1\",\"precio\":21000,\"nombre\":\"Camiseta Calvin Clain\",\"valor_unitario\":\"21000\"},{\"idprod\":\"6\",\"cantidad\":\"1\",\"precio\":42000,\"nombre\":\"Falda de cuero\",\"valor_unitario\":\"42000\"},{\"idprod\":\"4\",\"cantidad\":\"1\",\"precio\":60000,\"nombre\":\"Buzo Nike\",\"valor_unitario\":\"60000\"}]', '[\"10\",\"9\",\"8\",\"7\",\"6\",\"4\"]', 60, 174900, 279840),
(22, 'IEA2021031082', 8, '2021/03/10', 1003534664, '[{\"idprod\":\"9\",\"cantidad\":\"500\",\"precio\":5950000,\"nombre\":\"Pantaloneta\",\"valor_unitario\":\"11900\"}]', '[\"9\"]', 0, 5950000, 5950000),
(23, 'IEA20210323105', 2, '2021/03/23', 1003534664, '[{\"idprod\":\"6\",\"cantidad\":\"500\",\"precio\":21000000,\"nombre\":\"Falda de cuero\",\"valor_unitario\":\"42000\"},{\"idprod\":\"9\",\"cantidad\":\"55\",\"precio\":654500,\"nombre\":\"Pantaloneta\",\"valor_unitario\":\"11900\"}]', '[\"6\",\"9\"]', 19, 21654500, 24990000),
(24, 'IEA20210927129', 2, '2021/09/27', 1, '', '', 0, 0, 0),
(26, 'IEA20210927180', 2, '2021/09/27', 1, '[{\"idprod\":\"12\",\"cantidad\":\"55\",\"precio\":2217600,\"nombre\":\"BOLSO CRUZADO FASHION CON CADENA\",\"valor_unitario\":\"40320\"}]', '[\"12\"]', 19, 2217600, 2638944),
(28, 'IEA20211018181', 2, '2021/10/18', 1003534665, '[{\"idprod\":\"15\",\"cantidad\":\"20\",\"precio\":420000,\"nombre\":\"camiseta tecno\",\"valor_unitario\":\"21000\"}]', '[\"15\"]', 5, 420000, 441000),
(29, 'IEA20211019210', 14, '2021/10/19', 1, '[{\"idprod\":\"15\",\"cantidad\":\"100\",\"precio\":2100000,\"nombre\":\"camiseta tecno\",\"valor_unitario\":\"21000\"}]', '[\"15\"]', 5, 2100000, 2205000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inventario` int(11) NOT NULL,
  `tipomovimiento_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inventario`, `tipomovimiento_id`, `producto_id`, `total`) VALUES
(7, 1, 4, 1146),
(8, 1, 6, 79478),
(9, 1, 7, 1120),
(10, 1, 8, 997),
(11, 1, 9, 519),
(12, 1, 10, 1014),
(13, 1, 11, 1000),
(14, 1, 1, 2300),
(15, 1, 5, 1000),
(16, 1, 2, 1000),
(17, 1, 12, 945),
(18, 1, 15, 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `id_movimiento` int(11) NOT NULL,
  `factura_id` text DEFAULT NULL,
  `tipomovimiento_id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id_movimiento`, `factura_id`, `tipomovimiento_id`, `producto_id`, `usuario_id`, `total`, `fecha`) VALUES
(28, NULL, 1, 7, 3, 35, '2021-03-06 16:45:07'),
(35, NULL, 1, 4, 3, 50, '2021-03-06 18:48:05'),
(42, 'IEA2021030610', 2, NULL, 3, NULL, '2021-03-06 22:27:34'),
(43, 'IEA2021030624', 2, NULL, 2, NULL, '2021-03-06 22:51:48'),
(46, 'IEA2021030739', 2, NULL, 2, NULL, '2021-03-06 23:14:55'),
(48, NULL, 3, 9, 3, 1, '2021-03-06 23:51:20'),
(49, NULL, 1, 9, 2, 90, '2021-03-07 04:10:02'),
(50, NULL, 1, 10, 2, 15, '2021-03-07 04:10:14'),
(51, 'IEA2021030755', 2, NULL, 2, NULL, '2021-03-07 04:15:48'),
(52, 'IEA2021030773', 2, NULL, 2, NULL, '2021-03-07 04:17:14'),
(57, NULL, 1, 7, 3, 70, '2021-03-08 13:52:24'),
(58, NULL, 1, 4, 3, 34, '2021-03-08 13:54:34'),
(61, NULL, 1, 4, 2, 70, '2021-03-09 22:20:46'),
(64, NULL, 1, 6, 2, 80000, '2021-03-09 22:24:00'),
(66, NULL, 1, 11, 3, 1000, '2021-03-10 02:59:35'),
(67, NULL, 1, 8, 3, 1000, '2021-03-10 03:00:16'),
(68, NULL, 1, 9, 3, 1000, '2021-03-10 03:00:37'),
(69, NULL, 1, 4, 3, 1000, '2021-03-10 03:01:42'),
(70, NULL, 1, 7, 3, 1000, '2021-03-10 03:02:05'),
(71, NULL, 1, 1, 3, 1000, '2021-03-10 03:07:37'),
(72, NULL, 1, 1, 3, 1000, '2021-03-10 03:08:10'),
(73, NULL, 1, 10, 3, 1000, '2021-03-10 03:08:45'),
(76, NULL, 1, 5, 2, 1000, '2021-03-10 03:41:22'),
(77, NULL, 1, 2, 2, 1000, '2021-03-10 03:43:14'),
(78, NULL, 1, 12, 2, 1000, '2021-03-10 03:47:27'),
(79, NULL, 1, 1, 8, 300, '2021-03-10 14:04:50'),
(81, 'IEA2021031082', 2, NULL, 8, NULL, '2021-03-10 14:10:46'),
(82, NULL, 1, 7, 2, 45, '2021-03-23 14:37:11'),
(84, 'IEA20210323105', 2, NULL, 2, NULL, '2021-03-23 14:45:19'),
(86, 'IEA20210927129', 2, NULL, 2, NULL, '2021-09-27 13:11:53'),
(88, 'IEA20210927180', 2, NULL, 2, NULL, '2021-09-27 14:50:43'),
(91, NULL, 1, 15, 2, 100, '2021-10-18 17:54:18'),
(94, 'IEA20211018181', 2, NULL, 2, NULL, '2021-10-18 17:59:25'),
(96, NULL, 1, 15, 14, 100, '2021-10-19 12:30:32'),
(97, 'IEA20211019210', 2, NULL, 14, NULL, '2021-10-19 12:32:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `PersoNombres` varchar(75) DEFAULT NULL,
  `Correo` varchar(25) DEFAULT NULL,
  `TipoDoc` enum('Cédula de ciudadanía','Cédula de extranjería','Pasaporte MS') DEFAULT NULL,
  `documento` bigint(20) DEFAULT NULL,
  `Direccion` varchar(20) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `PersoNombres`, `Correo`, `TipoDoc`, `documento`, `Direccion`, `Telefono`, `estado`) VALUES
(1, 'Camilo Cruz', 'ccsoler0111@gmail.com', 'Cédula de ciudadanía', 1021213210, 'Cra 12 # 26 - 15', '3005678945', 1),
(1003534662, 'Cristian Rivera Herrera', 'cristian@gmail.com', 'Cédula de ciudadanía', 1047852310, 'Calle 03 # 25- 356', '3174523658', 1),
(1003534663, 'Amanda Gómez Cruz', 'amanda@gmail.com', 'Cédula de ciudadanía', 75412530, 'Edificio  Pino', '3251420120', 1),
(1003534664, 'Rooney Bernal', 'rooney@gmail.com', 'Cédula de ciudadanía', 1024523620, 'Cra 26 #56-12', '3144523625', 1),
(1003534665, 'Sebastian Perez', 'sebas78@gmail.com', 'Cédula de ciudadanía', 1002384909, 'medellin', '3113536488', 1),
(1003534666, 'Patricia Oliveros', 'asfb78@gmail.com', 'Cédula de ciudadanía', 24568, 'Cali', '3113536789', 1),
(1003534667, 'Laura Soler', 'Laura09@gmail.com', 'Cédula de ciudadanía', 1003546485, 'carrera 7 1 49', '31535475879', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `pregunta`, `fecha`) VALUES
(1, '¿Persona Favorita?', '2021-02-25 21:07:50'),
(2, '¿Lugar de nacimiento?', '2021-02-25 21:07:50'),
(3, '¿Nombre de tu mascota?', '2021-02-25 21:07:50'),
(4, '¿Música favorito?', '2021-03-01 18:50:37'),
(5, '¿Deporte favorito?', '2021-03-01 18:52:54'),
(6, '¿Nombre de abuelo materno?', '2021-03-01 18:53:21'),
(8, '¿Color favorito?', '2021-03-10 13:55:07'),
(9, '¿Canción Favorita?', '2021-10-22 10:43:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idprod` int(10) UNSIGNED NOT NULL,
  `Nombproduc` varchar(60) NOT NULL,
  `PrecCompproduc` float NOT NULL,
  `PrecVentProduc` float NOT NULL,
  `Color` varchar(10) DEFAULT NULL,
  `Iva` float DEFAULT NULL,
  `Estado` enum('Disponible','Agotado') DEFAULT NULL,
  `Material` varchar(20) DEFAULT NULL,
  `Talla` enum('XS','S','M','L','XL','XXL','Otra') DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Proveedores_CodiProve` int(10) UNSIGNED NOT NULL,
  `Categorias_idCate` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idprod`, `Nombproduc`, `PrecCompproduc`, `PrecVentProduc`, `Color`, `Iva`, `Estado`, `Material`, `Talla`, `Descripcion`, `Proveedores_CodiProve`, `Categorias_idCate`) VALUES
(1, 'Camiseta Polo', 20000, 23800, 'azul', 19, 'Agotado', 'seda', NULL, '', 8, 2),
(2, 'Camiseta Nike importada', 35000, 45000, 'negro', 5, 'Disponible', 'algodon', 'M', '', 6, 2),
(4, 'Buzo Nike', 40000, 60000, '', 50, 'Disponible', 'Algodón perchado', 'XL', '', 7, 12),
(5, 'Camiseta manga larga', 10000, 11500, '', 15, 'Disponible', 'tela de seda', NULL, '', 8, 2),
(6, 'Falda de cuero', 40000, 42000, 'Negra', 5, 'Disponible', 'Cuero', 'XS', '', 8, 4),
(7, 'Camiseta Calvin Clain', 15000, 21000, 'Azul claro', 40, 'Disponible', 'Algodón perchado', 'XS', '', 6, 2),
(8, 'Chaqueta nike', 25000, 30000, 'Negra', 20, 'Disponible', 'Impermedable', 'XXL', '', 8, 11),
(9, 'Pantaloneta', 10000, 11900, 'Blanco', 19, 'Disponible', 'Tela licrada', 'L', '', 7, 5),
(10, 'Camiseta Peppa Pig', 10000, 10000, 'rosado', 0, 'Disponible', 'Algodón perchado', 'XL', '', 6, 2),
(11, 'Medias ', 36000, 40320, 'negro', 12, 'Disponible', 'algodón', NULL, '', 6, 9),
(12, 'BOLSO CRUZADO FASHION CON CADENA', 36000, 40320, 'negro', 12, 'Disponible', 'cuero', NULL, '', 13, 7),
(13, 'Medias Deportivas  ', 36000, 45360, 'negro', 26, 'Disponible', 'algodón', 'S', 'Buena Calidad.', 13, 9),
(14, 'medias  spn', 36000, 40320, 'negro', 12, 'Disponible', 'algodón', NULL, 'pequeñas', 13, 9),
(15, 'camiseta tecno', 20000, 21000, 'blanco', 5, 'Disponible', 'algodon', 'M', 'Nuevo producto 18102021', 15, 2),
(16, 'camiseta tecnos', 0, 0, '', 0, 'Disponible', '', NULL, '', 16, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `CodiProve` int(10) UNSIGNED NOT NULL,
  `ProveNombres` varchar(75) NOT NULL,
  `ProveNumDoc` int(10) UNSIGNED NOT NULL,
  `Correo` varchar(20) DEFAULT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`CodiProve`, `ProveNombres`, `ProveNumDoc`, `Correo`, `Direccion`, `Telefono`, `estado`) VALUES
(6, 'Patricia Oliveros Soler', 4294967295, 'patricia_1965@hotmai', 'Cra 12 # 26 - 15', '741258963', 1),
(7, 'Juan Guillermo', 4294967295, 'juanguillermo@hotmai', '760001', '3121541230', 1),
(8, 'Jorge Rodriguez', 11341924, 'jorge@gmail.com', 'Calle 03 # 25- 356', '3133249437', 1),
(9, 'Mariana Nuñez', 524521320, 'mariana@gmail.com', 'Calle 03 # 20-35', '96584123', 1),
(10, 'Enrique López', 582365412, 'enrique@adidas.com', 'Cra 12 # 26 - 15', '1025412012', 1),
(12, 'Gonzalo Pérez', 203949282, 'Gonza45@gmail.com', 'Cali', '3113568493', 1),
(13, 'Juan Galindo', 2934495, 'juan78@gmail.com', 'valle', '', 1),
(14, 'Juan Galindo cruz', 2448853, 'reya34@gmail.com', 'Cali', '311353456', 1),
(15, 'Gonzalo ', 4294967295, 'gonzalo9@gmail.com', 'valle', '', 1),
(16, 'Tatiana soler', 1003662475, 'tsoler0111@gmail.com', 'Av. Cra 30 #', '3192185739', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `IdRegistro` int(10) UNSIGNED NOT NULL,
  `TipoVehiculo_IdTipVehi` int(10) UNSIGNED NOT NULL,
  `FechaIngreso` date NOT NULL,
  `FechaSalida` date DEFAULT NULL,
  `HoraIngreso` time NOT NULL,
  `HoraSalida` time DEFAULT NULL,
  `Placa` varchar(6) NOT NULL,
  `Estado` enum('Activo','Inactivo') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`IdRegistro`, `TipoVehiculo_IdTipVehi`, `FechaIngreso`, `FechaSalida`, `HoraIngreso`, `HoraSalida`, `Placa`, `Estado`) VALUES
(2, 2, '2021-11-06', '2021-11-06', '01:23:52', '02:21:28', 'ARH722', 'Inactivo'),
(3, 1, '2021-11-06', '0000-00-00', '02:20:38', '00:00:00', 'QLQ66F', 'Activo'),
(4, 3, '2021-11-06', '2021-11-06', '14:25:39', '07:32:43', 'QJKD23', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(10) UNSIGNED NOT NULL,
  `estado` int(11) NOT NULL,
  `cargo` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `estado`, `cargo`, `nombre`, `email`, `password`, `fecha`) VALUES
(2, 1, 2, 'Camilo Cruz Soler', 'camilocruz43@gmail.com', '$2y$10$KgW5HrsEOcK8z4LoRYkZyeqYLl/zdK7RgSRrnF6pfWU7e/eDqwLcW', '2021-10-20 22:05:56'),
(3, 1, 1, 'Brayan Martinez Pérez', 'brayan1@gmail.com', '$2y$10$YFJ4i4rJianHxWU.Y7YDWuR/NAYr88fSYLIOsGtKMBIPq9FQNUCx2', '2021-08-20 12:32:31'),
(4, 1, 1, 'Juan Perez', 'juanperez@gmail.com', '$2y$10$xHbQ/gVv1jzOgjeFwK17SObG6YMP5xTF8T0ujF3uxfDbOCC7CN44.', '2021-03-23 14:52:01'),
(5, 1, 1, 'María Gómez', 'mariagomez@gmail.com', '$2y$10$wuazCtmmufJSgWh1mpi6H.HKh7nWgqkgIFc7ezgigDz1XTfqvqQH6', '2021-03-08 02:30:19'),
(6, 1, 1, 'Ferney Jimenez', 'ferney@gmail.com', '$2y$10$agl5XeAaXnWZZsu1MePBreS67VqUBUgmZ6FUh8Ga0rrYCKUmpE5qm', '2021-03-02 01:07:17'),
(7, 1, 1, 'Brandon García', 'brandon@gmail.com', '$2y$10$BQTU8frbRaawrjEXA2vdAe6wslwrbNba8jBO7ifGREt8uZBrrr2je', '2021-10-19 13:43:17'),
(8, 1, 2, 'Dylan Fajardo Duran', 'dfajardo26@misena.edu.co', '$2y$10$Y662RTZLprA7VKhEj86qXeCGlk9AcyK3PZaqglw5DBMR9zACHLs9C', '2021-03-10 02:43:38'),
(9, 1, 1, 'juan ', 'ccsoler034@gmail.com', '$2y$10$eW.JSq8qTO26OUcHwxOoDOPvkchf.gyu3ozKmcSK9QpfZAeMpKfva', '2021-10-18 18:24:20'),
(10, 1, 2, 'Dario perez', 'daijoi45@gmail.com', '$2y$10$PSgJ85r5Q/OXIIFDB5WA1u6FXWU.oDNnJ4WE2J6OvIO1hP.PVbcQ6', '2021-03-23 14:27:29'),
(11, 1, 4, 'Juan Garzón', 'garzon20@gmail.com', '$2y$10$mkCU0skrnKOWfosckHgtCO53RqRrbygyF8goyOAXrVtCuHzQkYEGi', '2021-06-30 01:51:16'),
(12, 1, 1, 'Camilo Suarez', 'Suarez@gmail.com', '$2y$10$bA8zSYuRFqQ8tQUgvg0UYe6jtTMIETMAujVm6.KnRoKdgy3IQdLB6', '2021-06-30 02:10:19'),
(13, 1, 5, 'Tatiana Perez', 'Tatianap1@gmail.com', '$2y$10$ztiGWYsi2h2cik1zYbij/uRQSjBOPUZKowDsNuMnrpUErkeOpbRMm', '2021-06-30 02:12:06'),
(14, 2, 1, 'Joan Ramírez', 'jhoan16@misena.edu.co', '$2y$10$HAhh6JvMbgTYZCrg/lMRVOwGfc.S7kylArqKNmji88LCqS0h8Mg5u', '2021-10-22 10:45:55'),
(15, 1, 1, 'juliana', 'cjahs16@misena.edu.co', '$2y$10$ibMPb3mE14xVpJCXZh8.xuJLT831T3e7qEVla.np0GLYUTyRt5nZm', '2021-10-19 12:25:17'),
(17, 1, 2, 'Jonathan Eduardo Diaz Daza', 'jediaz0252@misena.edu.co', '$2y$10$85ZFWD.sNsKxdOOICTy90eCXRmGB4PQlvaFT3.EdEGgI8caYKfkdO', '2021-11-06 19:20:13'),
(18, 1, 2, 'Juan Sebastian Garzón RIco', '1000123456@pss.com', '$2y$10$wvI2NmKZ6ws0hAwDHPFp9es1d2KQyhouMRAxlcvPqQymwwRIwId5a', '2021-11-04 03:36:14'),
(19, 1, 2, 'Pepito Juarez', 'pepito@prueba.com', '$2y$10$xKmxaiH3A.3T6U6glcKpSu08LRGYlUnXwfreEAv1DTd8vm1XAeoUW', '2021-11-04 03:39:26'),
(20, 1, 2, 'Pepito Juarez', 'pepito@prueba.com2', '$2y$10$VsGoufZ5gAwue.CGMkohMexoq5jxS5I9OfcHQGRY5Mo4Socgdy9He', '2021-11-04 03:41:17'),
(21, 1, 2, 'Daniel Gonzales', '5556@misena.com', '$2y$10$sRl.ar660fL0EHMpB279veDd/qaQTxjUwVcMXsmqXrOFTAEwAUH/K', '2021-11-04 03:44:06'),
(22, 1, 2, 'Maria José', 'Garva@misena.edu.co', '$2y$10$P9sJT3nRCuGpRUlvJHiCA.WWgpMQzqeFsoYHRJKn/eo67.WNxuVii', '2021-11-04 11:14:28'),
(23, 1, 2, 'Jeimmy  Tatiana Diaz Daza', 'jeimmy.26.d@gmail.com', '$2y$10$b5kNQSN/JBNQe4Q4E8RXgeviU7SgEs6uL/OFeWBQ4bvFOzBjtC0MK', '2021-11-06 16:07:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridades`
--

CREATE TABLE `seguridades` (
  `id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `respuesta` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `seguridades`
--

INSERT INTO `seguridades` (`id`, `pregunta_id`, `usuario_id`, `respuesta`, `fecha`) VALUES
(1, 3, 1, 'tomas', '2021-02-25 22:09:11'),
(2, 2, 2, 'viani', '2021-02-26 01:09:42'),
(3, 1, 3, 'chestercito', '2021-03-01 15:52:03'),
(4, 1, 4, 'jesus', '2021-03-01 17:30:15'),
(5, 3, 5, 'tomas', '2021-03-01 18:35:46'),
(6, 1, 6, 'jesus', '2021-03-02 01:07:29'),
(7, 6, 7, 'José', '2021-03-07 03:52:21'),
(8, 2, 8, 'Medellin', '2021-03-10 02:43:51'),
(9, 4, 9, 'salsa', '2021-03-10 13:50:57'),
(10, 8, 10, 'verde', '2021-03-23 14:27:51'),
(11, 8, 11, '', '2021-06-30 01:53:19'),
(12, 8, 12, 'azul', '2021-06-30 02:10:36'),
(13, 8, 13, 'rojo', '2021-06-30 02:12:15'),
(14, 8, 14, 'rojo', '2021-10-18 18:25:22'),
(15, 8, 15, 'rojo', '2021-10-19 12:25:30'),
(16, 2, 17, 'Bogotá', '2021-11-01 18:19:26'),
(17, 1, 18, 'Novia', '2021-11-04 03:36:26'),
(18, 9, 20, 'bohemian', '2021-11-04 03:42:54'),
(19, 1, 21, 'aaaa', '2021-11-04 03:44:15'),
(20, 2, 22, 'Neiva', '2021-11-04 11:10:13'),
(21, 2, 23, 'Bogotá', '2021-11-06 16:08:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovehi`
--

CREATE TABLE `tipovehi` (
  `IdTipVehi` int(11) NOT NULL,
  `TipoVehiculo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipovehi`
--

INSERT INTO `tipovehi` (`IdTipVehi`, `TipoVehiculo`) VALUES
(1, 'Moto'),
(2, 'Carro'),
(3, 'Cicla');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`CodiCargo`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCate`);

--
-- Indices de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD PRIMARY KEY (`id_devolucion`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD UNIQUE KEY `codigo_factura` (`codigo_factura`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inventario`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id_movimiento`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idprod`),
  ADD KEY `Productos_FKIndex2` (`Categorias_idCate`),
  ADD KEY `Productos_FKIndex1` (`Proveedores_CodiProve`) USING BTREE;

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`CodiProve`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`IdRegistro`),
  ADD KEY `Registro_FKIndex3` (`TipoVehiculo_IdTipVehi`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indices de la tabla `seguridades`
--
ALTER TABLE `seguridades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipovehi`
--
ALTER TABLE `tipovehi`
  ADD PRIMARY KEY (`IdTipVehi`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `CodiCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCate` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  MODIFY `id_devolucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003534668;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idprod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `CodiProve` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `IdRegistro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguridades`
--
ALTER TABLE `seguridades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tipovehi`
--
ALTER TABLE `tipovehi`
  MODIFY `IdTipVehi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
