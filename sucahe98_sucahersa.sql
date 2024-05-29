-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2024 at 03:26 PM
-- Server version: 10.5.24-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sucahe98_sucahersa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bajas`
--

CREATE TABLE `bajas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `productos` text NOT NULL,
  `impuesto` float NOT NULL,
  `neto` float NOT NULL,
  `total` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `bajas`
--

INSERT INTO `bajas` (`id`, `codigo`, `id_sucursal`, `id_usuario`, `productos`, `impuesto`, `neto`, `total`, `fecha`) VALUES
(29, 1, 32, 31, '[{\"id\":\"146\",\"factura\":\"F705253\",\"descripcion\":\"BOLSA ALTA ROLLO 20X30\",\"cantidad\":\"2\",\"existencias\":\"0\",\"precio\":\"51.2058\",\"total\":\"102.41\"},{\"id\":\"147\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 20X30\",\"cantidad\":\"6\",\"existencias\":\"90\",\"precio\":\"56.0168\",\"total\":\"336.1\"},{\"id\":\"148\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 25X35\",\"cantidad\":\"8\",\"existencias\":\"65\",\"precio\":\"96.5958\",\"total\":\"772.77\"},{\"id\":\"149\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 30X40\",\"cantidad\":\"5\",\"existencias\":\"69\",\"precio\":\"97.0183\",\"total\":\"485.09\"},{\"id\":\"150\",\"factura\":\"F701855\",\"descripcion\":\"BOLSA ALTA ROLLO 35X45\",\"cantidad\":\"5\",\"existencias\":\"76\",\"precio\":\"114.959\",\"total\":\"574.8\"},{\"id\":\"151\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 40X60\",\"cantidad\":\"2\",\"existencias\":\"19\",\"precio\":\"140.392\",\"total\":\"280.78\"},{\"id\":\"152\",\"factura\":\"F701855\",\"descripcion\":\"BOLSA ALTA ROLLO 50X70\",\"cantidad\":\"2\",\"existencias\":\"9\",\"precio\":\"174.574\",\"total\":\"349.15\"},{\"id\":\"145\",\"factura\":\"F695852\",\"descripcion\":\"BOLSA ALTA ROLLO 15X25\",\"cantidad\":\"1\",\"existencias\":\"9\",\"precio\":\"54.392\",\"total\":\"54.39\"},{\"id\":\"155\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA BAJA CORTADA NEGRA 90X120\",\"cantidad\":\"20\",\"existencias\":\"260\",\"precio\":\"3.422\",\"total\":\"68.44\"},{\"id\":\"153\",\"factura\":\"F705253\",\"descripcion\":\"BOLSA BAJA CORTADA 80X120\",\"cantidad\":\"20\",\"existencias\":\"70\",\"precio\":\"3.25\",\"total\":\"65\"},{\"id\":\"164\",\"factura\":\"c320982\",\"descripcion\":\"GUANTES DE NITRILO CHICOS  SM\",\"cantidad\":\"6\",\"existencias\":\"7\",\"precio\":\"89\",\"total\":\"534\"},{\"id\":\"166\",\"factura\":\"C286946\",\"descripcion\":\"GUANTES DE NITRILO GRANDES  LG\",\"cantidad\":\"1\",\"existencias\":\"16\",\"precio\":\"89\",\"total\":\"89\"},{\"id\":\"156\",\"factura\":\"3651ED9E5115   \",\"descripcion\":\"ROLLO TERMICO 80X70MM\",\"cantidad\":\"35\",\"existencias\":\"47\",\"precio\":\"14\",\"total\":\"490\"},{\"id\":\"177\",\"factura\":\"CE18842\",\"descripcion\":\"PAPEL HIGIENICO KOVU 12180\",\"cantidad\":\"4\",\"existencias\":\"39\",\"precio\":\"26.5033\",\"total\":\"106.01\"},{\"id\":\"178\",\"factura\":\"CE18842\",\"descripcion\":\"TOALLA INTERDOBLADA KIHARA 12200\",\"cantidad\":\"4\",\"existencias\":\"24\",\"precio\":\"9.4108\",\"total\":\"37.64\"},{\"id\":\"179\",\"factura\":\"CE17916\",\"descripcion\":\"SILYP LIVISU 1 LT LIMPIADOR DE VIDRIOS Y SUPERFICIES\",\"cantidad\":\"1\",\"existencias\":\"0\",\"precio\":\"30.17\",\"total\":\"30.17\"},{\"id\":\"228\",\"factura\":\"CE18990\",\"descripcion\":\"FIBRA BRILLOSA GRANDE DE METAL\",\"cantidad\":\"2\",\"existencias\":\"48\",\"precio\":\"10.62\",\"total\":\"21.24\"},{\"id\":\"233\",\"factura\":\"INV202400470\",\"descripcion\":\"PAÑO DE MICROFIBRA\",\"cantidad\":\"4\",\"existencias\":\"404\",\"precio\":\"7.57\",\"total\":\"30.28\"},{\"id\":\"234\",\"factura\":\"E89199\",\"descripcion\":\"SANITIZANTE\",\"cantidad\":\"188\",\"existencias\":\"39812\",\"precio\":\"0.05075\",\"total\":\"9.54\"},{\"id\":\"171\",\"factura\":\"CE18842\",\"descripcion\":\"SAK DETERGENTE MULTIPROPOSITOS\",\"cantidad\":\"30\",\"existencias\":\"160\",\"precio\":\"12.93\",\"total\":\"387.9\"},{\"id\":\"172\",\"factura\":\"CE18842\",\"descripcion\":\"SAK LMP MULTILIMPIADOR PARA PISOS Y SUPERFICIES\",\"cantidad\":\"40\",\"existencias\":\"110\",\"precio\":\"6.03\",\"total\":\"241.2\"},{\"id\":\"213\",\"factura\":\"088965\",\"descripcion\":\"BOLIGRAFO P FINO STICK AZL PRE C 12 BIC\",\"cantidad\":\"2\",\"existencias\":\"46\",\"precio\":\"2.77333\",\"total\":\"5.55\"},{\"id\":\"195\",\"factura\":\"FNC087328\",\"descripcion\":\"GRAPA STANDARD CAJA C 5000 SMART\",\"cantidad\":\"6\",\"existencias\":\"18\",\"precio\":\"2.28375\",\"total\":\"13.7\"},{\"id\":\"200\",\"factura\":\"FNC088334\",\"descripcion\":\"CUADERNO ESP 100H PROF C5 MEGAPLUS\",\"cantidad\":\"1\",\"existencias\":\"9\",\"precio\":\"15.6\",\"total\":\"15.6\"},{\"id\":\"169\",\"factura\":\"C317497\",\"descripcion\":\"COFIAS DESECHABLES \",\"cantidad\":\"100\",\"existencias\":\"850\",\"precio\":\"0.45\",\"total\":\"45\"},{\"id\":\"168\",\"factura\":\"C311132\",\"descripcion\":\"CUBIERTA BUCAL\",\"cantidad\":\"3\",\"existencias\":\"7\",\"precio\":\"27.5\",\"total\":\"82.5\"}]', 836.522, 5228.26, 6064.78, '2024-05-28 17:53:46'),
(30, 2, 34, 31, '[{\"id\":\"147\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 20X30\",\"cantidad\":\"2\",\"existencias\":\"88\",\"precio\":\"56.0168\",\"total\":\"112.03\"},{\"id\":\"148\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 25X35\",\"cantidad\":\"12\",\"existencias\":\"53\",\"precio\":\"96.5958\",\"total\":\"1159.15\"},{\"id\":\"149\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 30X40\",\"cantidad\":\"8\",\"existencias\":\"61\",\"precio\":\"97.0183\",\"total\":\"776.15\"},{\"id\":\"150\",\"factura\":\"F701855\",\"descripcion\":\"BOLSA ALTA ROLLO 35X45\",\"cantidad\":\"6\",\"existencias\":\"70\",\"precio\":\"114.959\",\"total\":\"689.75\"},{\"id\":\"151\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 40X60\",\"cantidad\":\"1\",\"existencias\":\"18\",\"precio\":\"140.392\",\"total\":\"140.39\"},{\"id\":\"155\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA BAJA CORTADA NEGRA 90X120\",\"cantidad\":\"20\",\"existencias\":\"240\",\"precio\":\"3.422\",\"total\":\"68.44\"},{\"id\":\"153\",\"factura\":\"F705253\",\"descripcion\":\"BOLSA BAJA CORTADA 80X120\",\"cantidad\":\"20\",\"existencias\":\"50\",\"precio\":\"3.25\",\"total\":\"65\"},{\"id\":\"167\",\"factura\":\"C303437\",\"descripcion\":\"GUANTES DE NITRILO EXTRA GRANDES  XL\",\"cantidad\":\"3\",\"existencias\":\"16\",\"precio\":\"89\",\"total\":\"267\"},{\"id\":\"169\",\"factura\":\"C317497\",\"descripcion\":\"COFIAS DESECHABLES \",\"cantidad\":\"50\",\"existencias\":\"800\",\"precio\":\"0.45\",\"total\":\"22.5\"},{\"id\":\"168\",\"factura\":\"C311132\",\"descripcion\":\"CUBIERTA BUCAL\",\"cantidad\":\"3\",\"existencias\":\"4\",\"precio\":\"27.5\",\"total\":\"82.5\"},{\"id\":\"176\",\"factura\":\"CE18842\",\"descripcion\":\"JABON LIQUIDO PARA MANOS 1 LT\",\"cantidad\":\"1\",\"existencias\":\"28\",\"precio\":\"20.26\",\"total\":\"20.26\"},{\"id\":\"177\",\"factura\":\"CE18842\",\"descripcion\":\"PAPEL HIGIENICO KOVU 12180\",\"cantidad\":\"3\",\"existencias\":\"36\",\"precio\":\"26.5033\",\"total\":\"79.51\"},{\"id\":\"178\",\"factura\":\"CE18842\",\"descripcion\":\"TOALLA INTERDOBLADA KIHARA 12200\",\"cantidad\":\"2\",\"existencias\":\"22\",\"precio\":\"9.4108\",\"total\":\"18.82\"},{\"id\":\"234\",\"factura\":\"E89199\",\"descripcion\":\"SANITIZANTE\",\"cantidad\":\"300\",\"existencias\":\"39512\",\"precio\":\"0.05075\",\"total\":\"15.23\"},{\"id\":\"171\",\"factura\":\"CE18842\",\"descripcion\":\"SAK DETERGENTE MULTIPROPOSITOS\",\"cantidad\":\"40\",\"existencias\":\"120\",\"precio\":\"12.93\",\"total\":\"517.2\"},{\"id\":\"207\",\"factura\":\"FNC088965\",\"descripcion\":\"MARCADOR PERMAN GRSO NEG CJA 14 ESTERBRO\",\"cantidad\":\"2\",\"existencias\":\"26\",\"precio\":\"16.4093\",\"total\":\"32.82\"},{\"id\":\"213\",\"factura\":\"088965\",\"descripcion\":\"BOLIGRAFO P FINO STICK AZL PRE C 12 BIC\",\"cantidad\":\"2\",\"existencias\":\"44\",\"precio\":\"2.77333\",\"total\":\"5.55\"},{\"id\":\"156\",\"factura\":\"3651ED9E5115   \",\"descripcion\":\"ROLLO TERMICO 80X70MM\",\"cantidad\":\"30\",\"existencias\":\"17\",\"precio\":\"14\",\"total\":\"420\"}]', 718.768, 4492.3, 5211.07, '2024-05-28 18:40:13'),
(31, 3, 37, 31, '[{\"id\":\"147\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 20X30\",\"cantidad\":\"4\",\"existencias\":\"84\",\"precio\":\"56.0168\",\"total\":\"224.07\"},{\"id\":\"148\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 25X35\",\"cantidad\":\"8\",\"existencias\":\"45\",\"precio\":\"96.5958\",\"total\":\"772.77\"},{\"id\":\"149\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 30X40\",\"cantidad\":\"4\",\"existencias\":\"57\",\"precio\":\"97.0183\",\"total\":\"388.07\"},{\"id\":\"150\",\"factura\":\"F701855\",\"descripcion\":\"BOLSA ALTA ROLLO 35X45\",\"cantidad\":\"3\",\"existencias\":\"67\",\"precio\":\"114.959\",\"total\":\"344.88\"},{\"id\":\"151\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 40X60\",\"cantidad\":\"1\",\"existencias\":\"17\",\"precio\":\"140.392\",\"total\":\"140.39\"},{\"id\":\"152\",\"factura\":\"F701855\",\"descripcion\":\"BOLSA ALTA ROLLO 50X70\",\"cantidad\":\"2\",\"existencias\":\"7\",\"precio\":\"174.574\",\"total\":\"349.15\"},{\"id\":\"155\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA BAJA CORTADA NEGRA 90X120\",\"cantidad\":\"20\",\"existencias\":\"220\",\"precio\":\"3.422\",\"total\":\"68.44\"},{\"id\":\"153\",\"factura\":\"F705253\",\"descripcion\":\"BOLSA BAJA CORTADA 80X120\",\"cantidad\":\"20\",\"existencias\":\"30\",\"precio\":\"3.25\",\"total\":\"65\"},{\"id\":\"165\",\"factura\":\"c320982\",\"descripcion\":\"GUANTES DE NITRILO MEDIANOS  MD\",\"cantidad\":\"2\",\"existencias\":\"0\",\"precio\":\"89\",\"total\":\"178\"},{\"id\":\"223\",\"factura\":\"C328926\",\"descripcion\":\"GUANTES DE NITRILO MEDIANOS  MD\",\"cantidad\":\"2\",\"existencias\":\"38\",\"precio\":\"89\",\"total\":\"178\"},{\"id\":\"167\",\"factura\":\"C303437\",\"descripcion\":\"GUANTES DE NITRILO EXTRA GRANDES  XL\",\"cantidad\":\"1\",\"existencias\":\"15\",\"precio\":\"89\",\"total\":\"89\"},{\"id\":\"169\",\"factura\":\"C317497\",\"descripcion\":\"COFIAS DESECHABLES \",\"cantidad\":\"50\",\"existencias\":\"750\",\"precio\":\"0.45\",\"total\":\"22.5\"},{\"id\":\"168\",\"factura\":\"C311132\",\"descripcion\":\"CUBIERTA BUCAL\",\"cantidad\":\"3\",\"existencias\":\"1\",\"precio\":\"27.5\",\"total\":\"82.5\"},{\"id\":\"156\",\"factura\":\"3651ED9E5115   \",\"descripcion\":\"ROLLO TERMICO 80X70MM\",\"cantidad\":\"17\",\"existencias\":\"0\",\"precio\":\"14\",\"total\":\"238\"},{\"id\":\"235\",\"factura\":\"B9338FCCC466\",\"descripcion\":\"ROLLO TERMICO 80X70MM\",\"cantidad\":\"13\",\"existencias\":\"437\",\"precio\":\"14\",\"total\":\"182\"},{\"id\":\"180\",\"factura\":\"CE18396\",\"descripcion\":\"TRAPEADOR DE MICROFIBRA\",\"cantidad\":\"2\",\"existencias\":\"21\",\"precio\":\"110.034\",\"total\":\"220.07\"},{\"id\":\"229\",\"factura\":\"CE18990\",\"descripcion\":\"JALADOR PISOS INTERCAMBIABLE 50CM\",\"cantidad\":\"1\",\"existencias\":\"9\",\"precio\":\"65.52\",\"total\":\"65.52\"},{\"id\":\"176\",\"factura\":\"CE18842\",\"descripcion\":\"JABON LIQUIDO PARA MANOS 1 LT\",\"cantidad\":\"1\",\"existencias\":\"27\",\"precio\":\"20.26\",\"total\":\"20.26\"},{\"id\":\"177\",\"factura\":\"CE18842\",\"descripcion\":\"PAPEL HIGIENICO KOVU 12180\",\"cantidad\":\"4\",\"existencias\":\"32\",\"precio\":\"26.5033\",\"total\":\"106.01\"},{\"id\":\"178\",\"factura\":\"CE18842\",\"descripcion\":\"TOALLA INTERDOBLADA KIHARA 12200\",\"cantidad\":\"4\",\"existencias\":\"18\",\"precio\":\"9.4108\",\"total\":\"37.64\"},{\"id\":\"232\",\"factura\":\"CE18990\",\"descripcion\":\"SILYP LIVISU 1 LT LIMPIADOR DE VIDRIOS Y SUPERFICIES\",\"cantidad\":\"1\",\"existencias\":\"29\",\"precio\":\"31.12\",\"total\":\"31.12\"},{\"id\":\"173\",\"factura\":\"CE17826\",\"descripcion\":\"SCOTHC BRITE FIBRA P96 VERDE\",\"cantidad\":\"1\",\"existencias\":\"45\",\"precio\":\"13.36\",\"total\":\"13.36\"},{\"id\":\"228\",\"factura\":\"CE18990\",\"descripcion\":\"FIBRA BRILLOSA GRANDE DE METAL\",\"cantidad\":\"1\",\"existencias\":\"47\",\"precio\":\"10.62\",\"total\":\"10.62\"},{\"id\":\"233\",\"factura\":\"INV202400470\",\"descripcion\":\"PAÑO DE MICROFIBRA\",\"cantidad\":\"4\",\"existencias\":\"400\",\"precio\":\"7.57\",\"total\":\"30.28\"},{\"id\":\"171\",\"factura\":\"CE18842\",\"descripcion\":\"SAK DETERGENTE MULTIPROPOSITOS\",\"cantidad\":\"40\",\"existencias\":\"80\",\"precio\":\"12.93\",\"total\":\"517.2\"},{\"id\":\"172\",\"factura\":\"CE18842\",\"descripcion\":\"SAK LMP MULTILIMPIADOR PARA PISOS Y SUPERFICIES\",\"cantidad\":\"40\",\"existencias\":\"70\",\"precio\":\"6.03\",\"total\":\"241.2\"},{\"id\":\"191\",\"factura\":\"FNC087904\",\"descripcion\":\"PAPEL BOND 37K CTA BCO C 500H SMARTMULT\",\"cantidad\":\"250\",\"existencias\":\"2250\",\"precio\":\"0.12034\",\"total\":\"30.09\"},{\"id\":\"207\",\"factura\":\"FNC088965\",\"descripcion\":\"MARCADOR PERMAN GRSO NEG CJA 14 ESTERBRO\",\"cantidad\":\"2\",\"existencias\":\"24\",\"precio\":\"16.4093\",\"total\":\"32.82\"},{\"id\":\"213\",\"factura\":\"088965\",\"descripcion\":\"BOLIGRAFO P FINO STICK AZL PRE C 12 BIC\",\"cantidad\":\"2\",\"existencias\":\"42\",\"precio\":\"2.77333\",\"total\":\"5.55\"},{\"id\":\"200\",\"factura\":\"FNC088334\",\"descripcion\":\"CUADERNO ESP 100H PROF C5 MEGAPLUS\",\"cantidad\":\"1\",\"existencias\":\"8\",\"precio\":\"15.6\",\"total\":\"15.6\"}]', 752.018, 4700.11, 5452.13, '2024-05-28 19:08:17'),
(32, 4, 35, 31, '[{\"id\":\"147\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 20X30\",\"cantidad\":\"2\",\"existencias\":\"82\",\"precio\":\"56.0168\",\"total\":\"112.03\"},{\"id\":\"148\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA ALTA ROLLO 25X35\",\"cantidad\":\"4\",\"existencias\":\"41\",\"precio\":\"96.5958\",\"total\":\"386.38\"},{\"id\":\"150\",\"factura\":\"F701855\",\"descripcion\":\"BOLSA ALTA ROLLO 35X45\",\"cantidad\":\"1\",\"existencias\":\"66\",\"precio\":\"114.959\",\"total\":\"114.96\"},{\"id\":\"155\",\"factura\":\"F708455\",\"descripcion\":\"BOLSA BAJA CORTADA NEGRA 90X120\",\"cantidad\":\"20\",\"existencias\":\"200\",\"precio\":\"3.422\",\"total\":\"68.44\"},{\"id\":\"223\",\"factura\":\"C328926\",\"descripcion\":\"GUANTES DE NITRILO MEDIANOS  MD\",\"cantidad\":\"2\",\"existencias\":\"36\",\"precio\":\"89\",\"total\":\"178\"},{\"id\":\"169\",\"factura\":\"C317497\",\"descripcion\":\"COFIAS DESECHABLES \",\"cantidad\":\"50\",\"existencias\":\"700\",\"precio\":\"0.45\",\"total\":\"22.5\"},{\"id\":\"235\",\"factura\":\"B9338FCCC466\",\"descripcion\":\"ROLLO TERMICO 80X70MM\",\"cantidad\":\"10\",\"existencias\":\"427\",\"precio\":\"14\",\"total\":\"140\"},{\"id\":\"177\",\"factura\":\"CE18842\",\"descripcion\":\"PAPEL HIGIENICO KOVU 12180\",\"cantidad\":\"2\",\"existencias\":\"30\",\"precio\":\"26.5033\",\"total\":\"53.01\"},{\"id\":\"228\",\"factura\":\"CE18990\",\"descripcion\":\"FIBRA BRILLOSA GRANDE DE METAL\",\"cantidad\":\"1\",\"existencias\":\"46\",\"precio\":\"10.62\",\"total\":\"10.62\"},{\"id\":\"171\",\"factura\":\"CE18842\",\"descripcion\":\"SAK DETERGENTE MULTIPROPOSITOS\",\"cantidad\":\"10\",\"existencias\":\"70\",\"precio\":\"12.93\",\"total\":\"129.3\"},{\"id\":\"172\",\"factura\":\"CE18842\",\"descripcion\":\"SAK LMP MULTILIMPIADOR PARA PISOS Y SUPERFICIES\",\"cantidad\":\"10\",\"existencias\":\"60\",\"precio\":\"6.03\",\"total\":\"60.3\"},{\"id\":\"191\",\"factura\":\"FNC087904\",\"descripcion\":\"PAPEL BOND 37K CTA BCO C 500H SMARTMULT\",\"cantidad\":\"100\",\"existencias\":\"2150\",\"precio\":\"0.12034\",\"total\":\"12.03\"},{\"id\":\"202\",\"factura\":\"FNC088334\",\"descripcion\":\"ENGRAPADORA METAL MED SMART\",\"cantidad\":\"1\",\"existencias\":\"1\",\"precio\":\"59.29\",\"total\":\"59.29\"}]', 215.498, 1346.86, 1562.36, '2024-05-28 20:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(15, 'PLASTICOS', '2024-05-08 18:00:44'),
(16, 'HIGIENE LABORAL', '2024-05-16 20:55:41'),
(17, 'INFORMATICA', '2024-05-08 22:58:21'),
(18, 'LIMPIEZA CENTRO DE TRABAJO', '2024-05-16 21:04:48'),
(19, 'POES', '2024-05-16 21:05:28'),
(20, 'HIGIENE PERSONAL', '2024-05-16 22:07:23'),
(21, 'PAPELERÍA', '2024-05-17 18:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `factura` text NOT NULL,
  `proveedor` text NOT NULL,
  `categoria` text NOT NULL,
  `codigo` text NOT NULL,
  `descripcion` text NOT NULL,
  `precio_sin_iva` float NOT NULL,
  `precio_con_iva` float NOT NULL,
  `total` float NOT NULL,
  `existencias` int(10) NOT NULL,
  `unidad` text NOT NULL,
  `bajas` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `factura`, `proveedor`, `categoria`, `codigo`, `descripcion`, `precio_sin_iva`, `precio_con_iva`, `total`, `existencias`, `unidad`, `bajas`, `fecha`) VALUES
(145, 'F695852', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR1525', 'BOLSA ALTA ROLLO 15X25', 54.392, 63.0947, 489.528, 9, 'Rollos', 1, '2023-12-27'),
(146, 'F705253', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR2030', 'BOLSA ALTA ROLLO 20X30', 51.2058, 59.3987, 0, 0, 'Rollos', 2, '2024-03-14'),
(147, 'F708455', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR2030', 'BOLSA ALTA ROLLO 20X30', 56.0168, 64.9795, 4593.38, 82, 'Rollos', 14, '2024-04-12'),
(148, 'F708455', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR2535', 'BOLSA ALTA ROLLO 25X35', 96.5958, 112.051, 3960.43, 41, 'Rollos', 32, '2024-04-12'),
(149, 'F708455', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR3040', 'BOLSA ALTA ROLLO 30X40', 97.0183, 112.541, 5530.04, 57, 'Rollos', 17, '2024-04-12'),
(150, 'F701855', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR3545', 'BOLSA ALTA ROLLO 35X45', 114.959, 133.352, 7587.29, 66, 'Rollos', 15, '2024-02-15'),
(151, 'F708455', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR4060', 'BOLSA ALTA ROLLO 40X60', 140.392, 162.855, 2386.66, 17, 'Rollos', 4, '2024-04-12'),
(152, 'F701855', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR5070', 'BOLSA ALTA ROLLO 50X70', 174.574, 202.506, 1222.02, 7, 'Rollos', 4, '2024-02-15'),
(153, 'F705253', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BBC80120', 'BOLSA BAJA CORTADA 80X120', 3.25, 3.77, 97.5, 30, 'Bolsas', 60, '2024-03-14'),
(154, 'F708455', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BBC80120', 'BOLSA BAJA CORTADA 80X120', 3.25, 3.77, 812.5, 250, 'Bolsas', 0, '2024-04-12'),
(155, 'F708455', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BBCNE90120', 'BOLSA BAJA CORTADA NEGRA 90X120', 3.422, 3.96952, 684.4, 200, 'Bolsas', 80, '2024-04-12'),
(156, '3651ED9E5115   ', 'SALINAS PEÑA LUIS RENE', 'INFORMATICA', 'RT8070', 'ROLLO TERMICO 80X70MM', 14, 16.24, 0, 0, 'Piezas', 82, '2024-04-11'),
(157, '.', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'RDPA', 'ROLLO DE PELICULA ADHERIBLE', 0, 0, 0, 2, 'Rollos', 0, '2024-05-09'),
(158, '.', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'PP', 'PELICULA PLASTICA ', 0, 0, 0, 1, 'Rollos', 0, '2024-05-10'),
(159, '.', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'CU2', 'CHAROLA DE UNICEL 2', 0, 0, 0, 10, 'Bolsas', 0, '2024-05-10'),
(160, '.', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'CU855', 'CHAROLA DE UNICEL 855', 0, 0, 0, 22, 'Bolsas', 0, '2024-05-10'),
(161, '.', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'CU007', 'CHAROLA DE UNICEL 007', 0, 0, 0, 26, 'Bolsas', 0, '2024-05-10'),
(162, '.', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'CU066', 'CHAROLA DE UNICEL 066', 0, 0, 0, 22, 'Bolsas', 0, '2024-05-10'),
(163, '.', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'CU1014', 'CHAROLA DE UNICEL 1014', 0, 0, 0, 6, 'Bolsas', 0, '2024-05-10'),
(164, 'c320982', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'GDNCSM', 'GUANTES DE NITRILO CHICOS  SM', 89, 103.24, 623, 7, 'Cajas', 6, '2024-04-04'),
(165, 'c320982', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'GDNMMD', 'GUANTES DE NITRILO MEDIANOS  MD', 89, 103.24, 0, 0, 'Cajas', 2, '2024-04-04'),
(166, 'C286946', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'GDNGLG', 'GUANTES DE NITRILO GRANDES  LG', 89, 103.24, 1424, 16, 'Cajas', 1, '2023-10-23'),
(167, 'C303437', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'GDNEGXL', 'GUANTES DE NITRILO EXTRA GRANDES  XL', 89, 103.24, 1335, 15, 'Cajas', 4, '2023-12-28'),
(168, 'C311132', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'CB', 'CUBIERTA BUCAL', 27.5, 31.9, 27.5, 1, 'Cajas', 9, '2024-02-09'),
(169, 'C317497', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'CD', 'COFIAS DESECHABLES ', 0.45, 0.522, 315, 700, 'Piezas', 250, '2024-03-14'),
(170, 'CE17916', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'SCL30LC', 'SILYP CL30 LIMPIADOR CLORADO', 4.74, 5.4984, 758.4, 160, 'Litros', 0, '2023-12-31'),
(171, 'CE18842', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'SDM', 'SAK DETERGENTE MULTIPROPOSITOS', 12.93, 14.9988, 905.1, 70, 'Litros', 120, '2024-05-04'),
(172, 'CE18842', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'SLMPPYS', 'SAK LMP MULTILIMPIADOR PARA PISOS Y SUPERFICIES', 6.03, 6.9948, 361.8, 60, 'Litros', 90, '2024-05-04'),
(173, 'CE17826', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'SBFP96V', 'SCOTHC BRITE FIBRA P96 VERDE', 13.36, 15.4976, 601.2, 45, 'Piezas', 1, '2023-12-18'),
(174, 'CE17916', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'SBFP96V', 'SCOTHC BRITE FIBRA P96 VERDE', 13.36, 15.4976, 668, 50, 'Piezas', 0, '2023-12-31'),
(175, 'CE17916', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'SGA1LTSPM', 'SILYP GEL ANTIBACTERIAR 1 LT SANITIZANTE PARA MANOS', 53.45, 62.002, 1122.45, 21, 'Litros', 0, '2023-12-31'),
(176, 'CE18842', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'JLPM1LT', 'JABON LIQUIDO PARA MANOS 1 LT', 20.26, 23.5016, 547.02, 27, 'Litros', 2, '2024-05-04'),
(177, 'CE18842', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'PHK12180', 'PAPEL HIGIENICO KOVU 12180', 26.5033, 30.7438, 795.099, 30, 'Piezas', 13, '2024-05-04'),
(178, 'CE18842', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'TIK12200', 'TOALLA INTERDOBLADA KIHARA 12200', 9.4108, 10.9165, 169.394, 18, 'Piezas', 10, '2024-05-04'),
(179, 'CE17916', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'SL1LTLDVYS', 'SILYP LIVISU 1 LT LIMPIADOR DE VIDRIOS Y SUPERFICIES', 30.17, 34.9972, 0, 0, 'Litros', 1, '2023-12-31'),
(180, 'CE18396', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'POES', 'TDM', 'TRAPEADOR DE MICROFIBRA', 110.034, 127.64, 2310.71, 21, 'Piezas', 2, '2024-03-05'),
(181, 'CE18396', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'POES', 'AI1LT', 'ATOMIZADOR INDUSTRIAL 1 LT', 28.7776, 33.382, 57.5552, 2, 'Piezas', 0, '2024-03-05'),
(182, 'CE18396', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'POES', 'JP30CMPC', 'JALADOR PROF 30CM P CRISTALES', 49.9362, 57.926, 549.298, 11, 'Piezas', 0, '2024-03-05'),
(183, 'CE18396', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'POES', 'EADFDPVC6P', 'ESCOBA ANGULAR DE FIBRA DE PVC 6 PULGADAS', 67.72, 78.5552, 948.08, 14, 'Piezas', 0, '2024-03-05'),
(184, 'CE18396', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'POES', 'CRS13L', 'CUBETA RIGIDA SABLON 13L', 68.5616, 79.5315, 685.616, 10, 'Piezas', 0, '2024-03-05'),
(185, 'CE18396', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'POES', 'CSTOFF17LT', 'CUBETA SABLON TOFF 17LT', 84.644, 98.187, 169.288, 2, 'Piezas', 0, '2024-03-05'),
(186, 'CE18396', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'POES', 'EMFDPPP', 'ESCOBETA MULTIUSOS FIBRA DE PPP', 88.0216, 102.105, 792.194, 9, 'Piezas', 0, '2024-03-05'),
(187, 'CE18396', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'POES', 'RPECG', 'RACK PORTA ESCOBA  C GANCHOS', 268.316, 311.246, 2683.16, 10, 'Piezas', 0, '2024-03-05'),
(188, 'CE18396', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'POES', 'EP250ML', 'ENVASE PEAD 250ML', 7.6191, 8.83816, 30.4764, 4, 'Piezas', 0, '2024-03-05'),
(189, 'CE18396', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'POES', 'CTPPBT', 'CEPILLO TIPO PLANCHA PBT', 87.1772, 101.126, 784.595, 9, 'Piezas', 0, '2024-03-05'),
(191, 'FNC087904', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'PB37KCBC500HS', 'PAPEL BOND 37K CTA BCO C 500H SMARTMULT', 0.12034, 0.139594, 258.731, 2150, 'Hojas', 350, '2024-03-08'),
(193, 'FNC088334', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'CF6648C', 'CARTULINA FLUOR 66X48C', 5.12, 5.9392, 76.8, 15, 'Piezas', 0, '2024-04-08'),
(195, 'FNC087328', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'GSCC5000S', 'GRAPA STANDARD CAJA C 5000 SMART', 2.28375, 2.64915, 41.1075, 18, 'Piezas', 6, '2024-02-12'),
(196, 'FNC088334', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'BPFSAPC12B', 'BOLIGRAFO P FINO STICK AZL PRE C 12 BIC', 2.6008, 3.01693, 156.048, 60, 'Piezas', 0, '2024-04-08'),
(197, 'FNC088334', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'SBGK90GC50M', 'SOBRE BOL GOLDEN KRAFT 90GRCOIN C 50 MAPASA', 30.6, 35.496, 61.2, 2, 'Piezas', 0, '2024-04-08'),
(198, 'FNC088334', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'FCOCC100S', 'FOLDER CARTULINA OFI CREMA CJA 100 SMART', 160.33, 185.983, 160.33, 1, 'Cajas', 0, '2024-04-08'),
(199, 'FNC088334', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'MTTCP100S', 'MICA TRANSPARENTE T CTA PTE 100 SMART', 75.24, 87.2784, 75.24, 1, 'Piezas', 0, '2024-04-08'),
(200, 'FNC088334', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'CE100HPC5M', 'CUADERNO ESP 100H PROF C5 MEGAPLUS', 15.6, 18.096, 124.8, 8, 'Piezas', 2, '2024-04-08'),
(201, 'FNC088334', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'DPCCBS', 'DESPACHADOR P CINTA CH BLT SMART', 40.89, 47.4324, 40.89, 1, 'Piezas', 0, '2024-04-08'),
(202, 'FNC088334', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'EMMS', 'ENGRAPADORA METAL MED SMART', 59.29, 68.7764, 59.29, 1, 'Piezas', 1, '2024-04-08'),
(203, 'FNC088334', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'CATT1192465MJ', 'CINTA ADH TRANS T119 24X65M JANEL', 16.45, 19.082, 32.9, 2, 'Piezas', 0, '2024-04-08'),
(204, 'FNC088334', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'CATT1191233MJ', 'CINTA ADH TRANS T119 12X33M JANEL', 4.63, 5.3708, 13.89, 3, 'Piezas', 0, '2024-04-08'),
(205, '088965', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'PB37KCBC500HS', 'PAPEL BOND 37K CTA BCO C 500H SMARTMULT', 0.11534, 0.133794, 576.7, 5000, 'Hojas', 0, '2024-05-10'),
(206, '088965', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'GSCC5000S', 'GRAPA STANDARD CAJA C 5000 SMART', 0.658333, 0.763667, 158, 240, 'Piezas', 0, '2024-05-10'),
(207, 'FNC088965', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'MPGNC14E', 'MARCADOR PERMAN GRSO NEG CJA 14 ESTERBRO', 16.4093, 19.0348, 393.823, 24, 'Piezas', 4, '2024-05-10'),
(208, '088965', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'EMMS', 'ENGRAPADORA METAL MED SMART', 39.86, 46.2376, 119.58, 3, 'Piezas', 0, '2024-05-10'),
(209, 'FNC088965', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'MPPNCC12T', 'MARCADOR P PIZARRON NEGRO CJA C 12 TIZAPEN', 9.4375, 10.9475, 113.25, 12, 'Piezas', 0, '2024-05-10'),
(210, '088965', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'CNGGCSBS', 'CUTTER NAVAJA GDE GUIA COL SOLID BLT SMART', 15.8, 18.328, 79, 5, 'Piezas', 0, '2024-05-10'),
(211, '088965', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'THS8PBS', 'TIJERA HOGAR SOFT 8 PULGADAS BLT SMARTY', 28.96, 33.5936, 144.8, 5, 'Piezas', 0, '2024-05-10'),
(212, '088965', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'CEM8DDCS', 'CALCULADORA ESCRIT MED 8D DUO COLOR SMARTECH', 44.37, 51.4692, 221.85, 5, 'Piezas', 0, '2024-05-10'),
(213, '088965', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BPFSAPC12B', 'BOLIGRAFO P FINO STICK AZL PRE C 12 BIC', 2.77333, 3.21706, 116.48, 42, 'Piezas', 6, '2024-05-10'),
(214, '088965', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'CATT1191833MJ', 'CINTA ADH TRANS T119 18X33M JANEL', 6.5, 7.54, 19.5, 3, 'Piezas', 0, '2024-05-10'),
(215, '088965', 'TONY TIENDAS S.A. DE C.V.', 'PAPELERÍA', 'CE100HPC5M', 'CUADERNO ESP 100H PROF C5 MEGAPLUS', 15.26, 17.7016, 152.6, 10, 'Piezas', 0, '2024-05-10'),
(216, 'F712076', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR2030', 'BOLSA ALTA ROLLO 20X30', 51.7569, 60.038, 2484.33, 48, 'Rollos', 0, '2024-05-13'),
(217, 'F712076', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR2535', 'BOLSA ALTA ROLLO 25X35', 97.0398, 112.566, 8539.5, 88, 'Rollos', 0, '2024-05-13'),
(218, 'F712076', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR3040', 'BOLSA ALTA ROLLO 30X40', 101.784, 118.07, 4071.37, 40, 'Rollos', 0, '2024-05-13'),
(219, 'F710276', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR4060', 'BOLSA ALTA ROLLO 40X60', 149.548, 173.476, 3589.15, 24, 'Rollos', 0, '2024-05-13'),
(220, 'F712076', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BAR5070', 'BOLSA ALTA ROLLO 50X70', 190.241, 220.68, 5707.24, 30, 'Rollos', 0, '2024-05-13'),
(221, 'F712076', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'BBCNE90120', 'BOLSA BAJA CORTADA NEGRA 90X120', 3.422, 3.96952, 1711, 500, 'Piezas', 0, '2024-05-13'),
(222, 'C328926', 'MSC INDUSTRIAL SUPPLY, S. DE R. L. DE C.V.', 'HIGIENE PERSONAL', 'GDNCSM', 'GUANTES DE NITRILO CHICOS  SM', 89, 103.24, 5340, 60, 'Cajas', 0, '2024-05-21'),
(223, 'C328926', 'MSC INDUSTRIAL SUPPLY, S. DE R. L. DE C.V.', 'HIGIENE PERSONAL', 'GDNMMD', 'GUANTES DE NITRILO MEDIANOS  MD', 89, 103.24, 3204, 36, 'Cajas', 4, '2024-05-21'),
(224, 'C328926', 'MSC INDUSTRIAL SUPPLY, S. DE R. L. DE C.V.', 'HIGIENE PERSONAL', 'CD', 'COFIAS DESECHABLES ', 0.45, 0.522, 450, 1000, 'Piezas', 0, '2024-05-21'),
(225, 'C328926', 'MSC INDUSTRIAL SUPPLY, S. DE R. L. DE C.V.', 'HIGIENE PERSONAL', 'CB', 'CUBIERTA BUCAL', 13.75, 15.95, 550, 40, 'Cajas', 0, '2024-05-21'),
(226, 'CE18990', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'SDM', 'SAK DETERGENTE MULTIPROPOSITOS', 12.93, 14.9988, 7758, 600, 'Litros', 0, '2024-05-27'),
(227, 'CE18990', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'SLMPPYS', 'SAK LMP MULTILIMPIADOR PARA PISOS Y SUPERFICIES', 6.03, 6.9948, 3618, 600, 'Litros', 0, '2024-05-27'),
(228, 'CE18990', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'LIMPIEZA CENTRO DE TRABAJO', 'FBGDM', 'FIBRA BRILLOSA GRANDE DE METAL', 10.62, 12.3192, 488.52, 46, 'Piezas', 4, '2024-05-27'),
(229, 'CE18990', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'LIMPIEZA CENTRO DE TRABAJO', 'JPI50CM', 'JALADOR PISOS INTERCAMBIABLE 50CM', 65.52, 76.0032, 589.68, 9, 'Piezas', 1, '2024-05-27'),
(230, 'CE18990', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'HIGIENE PERSONAL', 'PHK12180', 'PAPEL HIGIENICO KOVU 12180', 26.5033, 30.7439, 1272.16, 48, 'Rollos', 0, '2024-05-27'),
(231, 'CE18990', 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'PLASTICOS', 'TIK12200', 'TOALLA INTERDOBLADA KIHARA 12200', 9.41083, 10.9166, 677.58, 72, 'Piezas', 0, '2024-05-27'),
(232, 'CE18990', 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'LIMPIEZA CENTRO DE TRABAJO', 'SL1LTLDVYS', 'SILYP LIVISU 1 LT LIMPIADOR DE VIDRIOS Y SUPERFICIES', 31.12, 36.0992, 902.48, 29, 'Piezas', 1, '2024-05-27'),
(233, 'INV202400470', 'PACKLIFE SA DE CV', 'LIMPIEZA CENTRO DE TRABAJO', 'PDM', 'PAÑO DE MICROFIBRA', 7.57, 8.7812, 3028, 400, 'Piezas', 8, '2024-02-09'),
(234, 'E89199', 'DIKEN INTERNACIONAL S DE RL DE CV', 'LIMPIEZA CENTRO DE TRABAJO', 'SAN', 'SANITIZANTE', 0.05075, 0.05887, 2005.23, 39512, 'Mililitros', 488, '2024-02-15'),
(235, 'B9338FCCC466', 'SALINAS PEÑA LUIS RENE', 'INFORMATICA', 'RT8070', 'ROLLO TERMICO 80X70MM', 14, 16.24, 5978, 427, 'Rollos', 23, '2024-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `productos2`
--

CREATE TABLE `productos2` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `nombre_producto` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=Aria DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `productos2`
--

INSERT INTO `productos2` (`id`, `codigo`, `nombre_producto`, `fecha`) VALUES
(24, 'BAR1525', 'BOLSA ALTA ROLLO 15X25', '2024-05-08 18:03:34'),
(25, 'BAR2030', 'BOLSA ALTA ROLLO 20X30', '2024-05-08 18:04:50'),
(26, 'BAR2535', 'BOLSA ALTA ROLLO 25X35', '2024-05-08 18:05:22'),
(27, 'BAR3040', 'BOLSA ALTA ROLLO 30X40', '2024-05-08 18:05:59'),
(28, 'BAR3545', 'BOLSA ALTA ROLLO 35X45', '2024-05-08 18:06:54'),
(29, 'BAR4060', 'BOLSA ALTA ROLLO 40X60', '2024-05-08 18:07:55'),
(30, 'BAR5070', 'BOLSA ALTA ROLLO 50X70', '2024-05-08 18:08:31'),
(31, 'BBC80120', 'BOLSA BAJA CORTADA 80X120', '2024-05-08 18:10:54'),
(32, 'BBCNE90120', 'BOLSA BAJA CORTADA NEGRA 90X120', '2024-05-08 18:11:49'),
(33, 'CU007', 'CHAROLA DE UNICEL 007', '2024-05-08 20:41:02'),
(34, 'CU066', 'CHAROLA DE UNICEL 066', '2024-05-08 20:39:18'),
(35, 'CU2', 'CHAROLA DE UNICEL 2', '2024-05-08 20:40:25'),
(36, 'CU855', 'CHAROLA DE UNICEL 855', '2024-05-08 20:41:49'),
(37, 'CU1014', 'CHAROLA DE UNICEL 1014', '2024-05-08 20:46:47'),
(38, 'RDPA', 'ROLLO DE PELICULA ADHERIBLE', '2024-05-25 15:42:39'),
(39, 'GDNCSM', 'GUANTES DE NITRILO CHICOS  SM', '2024-05-25 15:43:18'),
(40, 'GDNMMD', 'GUANTES DE NITRILO MEDIANOS  MD', '2024-05-25 15:43:51'),
(41, 'GDNGLG', 'GUANTES DE NITRILO GRANDES  LG', '2024-05-25 15:44:13'),
(42, 'GDNEGXL', 'GUANTES DE NITRILO EXTRA GRANDES  XL', '2024-05-25 15:44:44'),
(43, 'CD', 'COFIAS DESECHABLES ', '2024-05-25 15:48:38'),
(44, 'CB', 'CUBIERTA BUCAL', '2024-05-25 15:49:06'),
(45, 'RT8070', 'ROLLO TERMICO 80X70MM', '2024-05-08 23:00:59'),
(46, 'PP', 'PELICULA PLASTICA ', '2024-05-25 15:50:24'),
(94, 'SAN', 'SANITIZANTE', '2024-05-28 17:24:38'),
(48, 'PDM', 'PAÑO DE MICROFIBRA', '2024-05-25 15:51:49'),
(49, 'SLMPPYS', 'SAK LMP MULTILIMPIADOR PARA PISOS Y SUPERFICIES', '2024-05-25 15:52:17'),
(50, 'SDM', 'SAK DETERGENTE MULTIPROPOSITOS', '2024-05-25 15:52:49'),
(51, 'PHK12180', 'PAPEL HIGIENICO KOVU 12180', '2024-05-25 15:53:16'),
(52, 'SCL30LC', 'SILYP CL30 LIMPIADOR CLORADO', '2024-05-25 15:54:01'),
(53, 'SJLPM', 'SAK JABON LIQUIDO PARA MANOS', '2024-05-25 15:54:26'),
(54, 'FBGDM', 'FIBRA BRILLOSA GRANDE DE METAL', '2024-05-25 15:55:08'),
(55, 'SBFP96V', 'SCOTHC BRITE FIBRA P96 VERDE', '2024-05-25 16:19:18'),
(56, 'TIK12200', 'TOALLA INTERDOBLADA KIHARA 12200', '2024-05-25 15:56:13'),
(57, 'SL1LTLDVYS', 'SILYP LIVISU 1 LT LIMPIADOR DE VIDRIOS Y SUPERFICIES', '2024-05-25 15:56:46'),
(58, 'SGA1LTSPM', 'SILYP GEL ANTIBACTERIAR 1 LT SANITIZANTE PARA MANOS', '2024-05-25 15:57:24'),
(59, 'JLPM1LT', 'JABON LIQUIDO PARA MANOS 1 LT', '2024-05-25 15:58:07'),
(60, 'JPI50CM', 'JALADOR PISOS INTERCAMBIABLE 50CM', '2024-05-25 15:58:40'),
(61, 'TDM', 'TRAPEADOR DE MICROFIBRA', '2024-05-17 15:19:57'),
(62, 'RPCB', 'RECOGEDOR PLASTICO CON BASTON', '2024-05-25 15:59:05'),
(63, 'AI1LT', 'ATOMIZADOR INDUSTRIAL 1 LT', '2024-05-17 14:33:33'),
(64, 'BFDV120MT', 'BASTON FIBRA DE VIDRIO 1.20MT', '2024-05-17 14:47:22'),
(65, 'JP30CMPC', 'JALADOR PROF 30CM P CRISTALES', '2024-05-17 15:31:35'),
(66, 'EADFDPVC6P', 'ESCOBA ANGULAR DE FIBRA DE PVC 6 PULGADAS', '2024-05-17 14:52:19'),
(67, 'CRS13L', 'CUBETA RIGIDA SABLON 13L', '2024-05-17 14:53:55'),
(68, 'CSTOFF17LT', 'CUBETA SABLON TOFF 17LT', '2024-05-17 14:55:08'),
(69, 'EMFDPPP', 'ESCOBETA MULTIUSOS FIBRA DE PPP', '2024-05-17 14:56:06'),
(70, 'RPECG', 'RACK PORTA ESCOBA  C GANCHOS', '2024-05-17 14:56:50'),
(71, 'EP250ML', 'ENVASE PEAD 250ML', '2024-05-17 14:57:40'),
(72, 'CTPPBT', 'CEPILLO TIPO PLANCHA PBT', '2024-05-17 14:58:28'),
(73, 'PB37KCBC500HS', 'PAPEL BOND 37K CTA BCO C 500H SMARTMULT', '2024-05-17 18:53:35'),
(74, 'GSCC5000S', 'GRAPA STANDARD CAJA C 5000 SMART', '2024-05-17 21:32:33'),
(75, 'MPGNC14E', 'MARCADOR PERMAN GRSO NEG CJA 14 ESTERBRO', '2024-05-17 18:59:22'),
(76, 'EMMS', 'ENGRAPADORA METAL MED SMART', '2024-05-17 22:16:41'),
(77, 'MPPNCC12T', 'MARCADOR P PIZARRON NEGRO CJA C 12 TIZAPEN', '2024-05-17 19:01:54'),
(78, 'CNGGCSBS', 'CUTTER NAVAJA GDE GUIA COL SOLID BLT SMART', '2024-05-17 19:02:41'),
(79, 'THS8PBS', 'TIJERA HOGAR SOFT 8 PULGADAS BLT SMARTY', '2024-05-17 19:03:21'),
(80, 'CEM8DDCS', 'CALCULADORA ESCRIT MED 8D DUO COLOR SMARTECH', '2024-05-17 19:04:05'),
(81, 'BPFSAPC12B', 'BOLIGRAFO P FINO STICK AZL PRE C 12 BIC', '2024-05-17 19:04:57'),
(82, 'CATT1191833MJ', 'CINTA ADH TRANS T119 18X33M JANEL', '2024-05-17 20:07:20'),
(83, 'CE100HPC5M', 'CUADERNO ESP 100H PROF C5 MEGAPLUS', '2024-05-17 20:08:02'),
(85, 'CF6648C', 'CARTULINA FLUOR 66X48C', '2024-05-17 21:15:37'),
(86, 'MPDNC14S', 'MARCADOR PERMAN DELG NEG CJA 14 SHARPIE', '2024-05-17 21:24:06'),
(87, 'SBGK90GC50M', 'SOBRE BOL GOLDEN KRAFT 90GRCOIN C 50 MAPASA', '2024-05-17 21:44:05'),
(88, 'BNA75CP400HMT', 'BLOCK NOTAS ADH 7.5X7.5 C PTEL 400H MEMO TIP', '2024-05-17 21:52:33'),
(89, 'FCOCC100S', 'FOLDER CARTULINA OFI CREMA CJA 100 SMART', '2024-05-17 21:58:45'),
(90, 'MTTCP100S', 'MICA TRANSPARENTE T CTA PTE 100 SMART', '2024-05-17 22:06:02'),
(91, 'DPCCBS', 'DESPACHADOR P CINTA CH BLT SMART', '2024-05-17 22:13:15'),
(92, 'CATT1191233MJ', 'CINTA ADH TRANS T119 12X33M JANEL', '2024-05-17 22:20:47'),
(93, 'CATT1192465MJ', 'CINTA ADH TRANS T119 24X65M JANEL', '2024-05-17 22:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `direccion` text NOT NULL,
  `correo` text NOT NULL,
  `telefono` text NOT NULL,
  `regimen` text NOT NULL,
  `rfc` text NOT NULL,
  `iva` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `direccion`, `correo`, `telefono`, `regimen`, `rfc`, `iva`, `fecha`) VALUES
(6, 'POLIETILENOS DEL CENTRO, S.A. DE C.V.', 'BLVD. VENUSTIANAO CARRANZA No. 703 CP 37390 COL. SAN MIGUEL, LEON, GUANAJUATO, MEXICO', 'ventas.pce@reyma.com.mx', '(477) 715-4617', 'General de Ley Personas Morales', 'PCE810908KY3', 16, '2024-05-08 17:59:47'),
(7, 'MSC INDUSTRIAL SUPPLY, S. DE R. L. DE C.V.', 'PRIV. TAPACHULA 595 COL. PUENTE ALTO C.P. 32695 CHIHUAHUA, MEXICO', 'gmaldonado@mscdirect.com.mx', '(656) 611-9677', 'General de Ley Personas Morales', 'MIN181018TM6', 16, '2024-05-08 22:47:34'),
(8, 'SALINAS PEÑA LUIS RENE', 'IGNACIO CAMARGO NUM. 141, COL. CELAYA CENTRO, C.P. 38000, CELAYA, GUANAJUATO', 'ventasrollcel@hotmail.com', '(442) 457-5331', 'Personas Físicas con Actividades Empresariales y Profesionales', 'SAPL8212263NA', 16, '2024-05-08 22:57:27'),
(9, 'SISTEMAS INTEGRALES DE LIMPIEZA Y PROTECCION, S.A.', 'MENA #110, COL. CENTRO VALLE DE SANTIAGO, C.P. 38400, VALLE DE SANTIAGO, GUANAJUATO, MEXICO', 'ventas@silyp.com.mx', '(464) 157-0524', 'General de Ley Personas Morales', 'SIL130301PH4', 16, '2024-05-08 23:26:17'),
(10, 'PACKLIFE SA DE CV', 'HERNAN CORTES 6831 INTERIOR B COLONIA MIGUEL DE LA MADRID HURTADO CP 45239 ZAPOPAN JALISCO MEXICO', 'contacto@packlife.mx', '(333) 100-8642', 'General de Ley Personas Morales', 'PAC130412341', 16, '2024-05-10 17:26:36'),
(12, 'TONY TIENDAS S.A. DE C.V.', 'AV. URANO 585 B FRACC. JARDINES DE MOCAMBO BOCA DEL RIO VERACRUZ C.P. 94299', 'ventasweb@tony.mx', '(229) 134-9423', 'General de Ley Personas Morales', 'NE', 16, '2024-05-17 20:43:07'),
(13, 'DIKEN INTERNACIONAL S DE RL DE CV', 'AV. INDUSTRIA AEROESPACIAL, 2900, COL. PARQUE INDUSTRIAL SALTILLO RAMOS ARIZPE, RAMOS ARIZPE, C.P. 25900, COAHUILA DE ZARAGOZA, MEXICO', 'auditoria.bajio@dikeninternacional.com', '(844) 866-7520', 'General de Ley Personas Morales', 'DIN150103FC9', 16, '2024-05-28 17:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `sucursales`
--

CREATE TABLE `sucursales` (
  `id` int(11) NOT NULL,
  `tipo` text NOT NULL,
  `nombre` text NOT NULL,
  `telefono` text NOT NULL,
  `direccion` text NOT NULL,
  `altas` int(11) NOT NULL,
  `ultima_alta` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `sucursales`
--

INSERT INTO `sucursales` (`id`, `tipo`, `nombre`, `telefono`, `direccion`, `altas`, `ultima_alta`, `fecha`) VALUES
(28, 'B', 'SILAO', '(472) 722-2380', 'CALLE. RAUL BAILLERES # 153 COL. SILAO CENTRO CP. 36100 SILAO DE LA VICTORIA GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:08:34'),
(29, 'A', 'GUANAJUATO', '(473) 733-0079', 'CARR. EUQUERIO GUERRERO # COL. ARROYO VERDE CP. 36256 GUANAJUATO GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:08:17'),
(30, 'B', 'MANUEL DE AUSTRI', '(477) 313-8075', 'BLVD. MANUEL AUSTRI # 2202 A COL. SAN JOSÉ OBRERO CP. 37319 LEÓN GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:08:03'),
(31, 'C', 'MIGUEL ALEMAN', '(477) 713-3774', 'AV. MIGUEL ALEMAN NO. 612 D COL. BELLAVISTA CP. 37360 LEÓN GTO.', 0, '0000-00-00 00:00:00', '2024-05-08 17:07:42'),
(32, 'A', 'DELTA', '(477) 830-2213', 'BLVD. DELTA # 914 COL. VALLE DELTA CP. 37538 LEÓN GTO.', 498, '2024-05-28 11:53:46', '2024-05-28 17:53:46'),
(33, 'C', 'TELLEZ CRUCES', '(477) 775-7152', 'BLVD. TELLEZ CRUCES # 2326 A COL. SAN JOSÉ DEL CONSUELO CP. 37200 LEÓN, GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:07:04'),
(34, 'A', 'BELISARIO DOMINGUEZ', '(477) 713-5269', 'AV. BELISARIO DOMINGUEZ # 511 INT. B COL. BELLAVISTA CP. 37360 LEÓN GTO', 505, '2024-05-28 12:40:13', '2024-05-28 18:40:13'),
(35, 'C', 'TORRES LANDA', '(477) 499-1186', 'BLVD. TORRES LANDA PTE. # 3110 COL. LA PISCINA CP. 37440 LEÓN GTO', 213, '2024-05-28 14:17:22', '2024-05-28 20:17:22'),
(36, 'B', 'CARRO VERDE', '(477) 713-9620', 'CALLE. CHUPARROSA # 251 COL. SAN JUAN DE DIOS CP. 37004 LEÓN GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:06:04'),
(37, 'A', 'VALTIERRA', '(477) 251-8952', 'BLVD. VICENTE VALTIERRA #715 COL. LA BRISA CP. 37240 LEÓN GTO', 504, '2024-05-28 13:08:17', '2024-05-28 19:08:17'),
(38, 'B', 'MOROLEON', '(445) 457-1143', 'CALLE. HEROICO COLEGIO MILITAR # 21 COL. CENTRO CP. 38800 MOROLEON GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:05:24'),
(39, 'B', 'VALLE MENA', '(456) 106-0201', 'AV. MENA # 201 COL. VALLE DE SANTIAGO CENTRO CP. 38400 VALLE DE SANTIAGO GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:05:04'),
(40, 'B', 'ALLENDE', '(411) 155-1963', 'CALLE. ALLENDE # 209 A COL. CORTAZAR CENTRO CP.38300 CORTAZAR GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:04:49'),
(41, 'PLUS A', 'FRANCISCO JUÁREZ', '(461) 609-0109', 'CALLE. FRANSICO JUÁREZ # 630 COL. SANTA ANITA CP. 38040 CELAYA GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:04:25'),
(42, 'B', 'EL ENCANTO', '(462) 123-2553', 'CALLE. PASEO DE LA ACACIA # 153 LOC. 3 COL. EL ENCANTO CP. 36687 IRAPUATO GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:04:06'),
(43, 'PLUS A', 'LOS REYES', '(462) 398-5741', 'BLVD. LOS REYES # 32 CP. 36825 IRAPUATO GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:03:52'),
(44, 'B', 'FLORESTA', '(462) 114-0125', 'CALLE. PASEO FLORESTA #697 A COL. RESIDENCIAL FLORESTA CP. 36595 IRAPUATO GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:03:21'),
(45, 'A', 'LEANDRO VALLE', '(462) 626-1900', 'CALLE. LEANDRO VALLE # 358 B COL. IRAPUATO CENTRO CP. 36500 IRAPUATO GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:03:00'),
(46, 'C', 'SAN JAVIER', '(464) 178-5522', 'CALLE. GUADALUPE NO. 316 COL. SAN JAVIER CP. 36765 SALAMANCA GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:02:43'),
(47, 'B', 'LOCAL 38 102', '(464) 648-6160', 'MERCADO TOMASA ESTEVES LOCAL. 38 SALAMANCA CENTRO CP. 36700 SALAMANCA GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:02:29'),
(48, 'B', 'LA GLORIA', '(464) 162-6950', 'CALLE. SAN RAFAEL NO. 403 COL. LA GLORIA CP. 36773 SALAMANCA GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:02:01'),
(49, 'A', 'FRANCISCO VILLA', '(646) 647-3444', 'CALLE. FRANCISCO VILLA # 230 SALAMANCA CENTRO CP. 36700 SALAMANCA GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:01:41'),
(50, 'C', 'MOLINITO', '(464) 690-2624', 'AV. COMUNICACIÓN NTE. # 201 COL. EL CERRITO CP. 36775 SALAMANCA GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:01:20'),
(51, 'C', 'LOS PINOS', '(464) 649-3920', 'CALLE. DAVID ALFARO SIQUEIROS #114 COL. LOS PINOS CP. 36780 SALAMANCA GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:01:07'),
(52, 'C', 'BARLOVENTO', '(464) 126-4439', 'CALLE PUERTO SAVEEDRA # 100 INT. 7 FRACCIONAMIENTO BARLOVENTO CP. 36885 SALAMANCA GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:00:51'),
(53, 'C', 'BARAHONA', '(464) 126-1206', 'CALLE IRAPUATO # 1003 INT. 1 COL. GUANAJUATO CP. 36780 SALAMANCA GTO', 0, '0000-00-00 00:00:00', '2024-05-08 17:00:28'),
(57, '', 'OFICINA ADMINISTRATIVA LOS PINOS', '(464) 649-3920', 'DAVID ALFARO SIQUEIROS 114, LOS PINOS, 36780 SALAMANCA, GTO.', 0, '0000-00-00 00:00:00', '2024-05-25 14:59:15'),
(58, '', 'OFICINA ADMINISTRATIVA LA GLORIA', '(464) 162-6950', 'SAN RAFAEL 209, LA GLORIA, 36773 SALAMANCA, GTO.', 0, '0000-00-00 00:00:00', '2024-05-25 15:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `usuario` text NOT NULL,
  `password` text NOT NULL,
  `perfil` text NOT NULL,
  `foto` text NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(13, 'Admin', 'admin', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'Administrador', '', 1, '2024-05-08 16:13:02', '2024-05-11 15:43:11'),
(28, 'Gerardo muñoz', 'Gerardo', '$2a$07$asxx54ahjppf45sd87a5auRajNP0zeqOkB9Qda.dSiTb2/n.wAC/2', 'Consultor', '', 1, '0000-00-00 00:00:00', '2024-05-07 15:56:54'),
(31, 'José Román García Moreno', 'José Román', '$2a$07$asxx54ahjppf45sd87a5auaJk9fntucBYyJYm3n0ALlRTqtbGFwJq', 'Gestor', '', 1, '2024-05-28 14:20:45', '2024-05-28 20:20:45'),
(32, 'María Angélica Flores Ojeda', 'María Angélica', '$2a$07$asxx54ahjppf45sd87a5auJnyEWu2I/LGrsdLfMawEZGMwUWnuJ6a', 'Administrador', '', 1, '2024-05-28 14:10:44', '2024-05-28 20:10:44'),
(33, 'Rosa Herlinda Herrera Granados', 'Rosa Herlinda', '$2a$07$asxx54ahjppf45sd87a5aumDRtj0NoVUaxQV.LscqgnWgdB1yvW0a', 'Administrador', '', 1, '2024-05-10 10:37:35', '2024-05-10 16:37:35'),
(34, 'Giovanny Martínez', 'Giovanny', '$2a$07$asxx54ahjppf45sd87a5auYSNHC/kJa9L9m59C4DUsXrFBYSN90Uq', 'Administrador', '', 1, '2024-05-28 14:31:44', '2024-05-28 20:31:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bajas`
--
ALTER TABLE `bajas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos2`
--
ALTER TABLE `productos2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bajas`
--
ALTER TABLE `bajas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `productos2`
--
ALTER TABLE `productos2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
