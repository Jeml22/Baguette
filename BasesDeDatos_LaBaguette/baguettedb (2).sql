-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2023 a las 17:26:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baguettedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajeros`
--

CREATE TABLE `cajeros` (
  `identificacion` int(11) NOT NULL COMMENT 'Numero de identificación del cajero',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre del cajero',
  `apellido` varchar(255) NOT NULL COMMENT 'Apellido del cajero',
  `numero_de_contacto` varchar(20) NOT NULL COMMENT 'Número de contacto del cajero'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL COMMENT 'Numero entero consecutivo autoincremental',
  `tdoc` varchar(50) NOT NULL COMMENT 'tipo de documento del ciente',
  `ndocu` int(10) NOT NULL COMMENT 'numero unico e irrepetible del documento del cliente',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre y apellido del cliente',
  `fnaci` varchar(255) NOT NULL COMMENT 'dia de nacimiento del cliente',
  `correo` varchar(100) NOT NULL COMMENT 'Correo electronico del cliente',
  `direccion` varchar(100) NOT NULL COMMENT 'Dirección de vivienda del cliente',
  `numcont` varchar(13) NOT NULL COMMENT 'Numero de contacto del cliente',
  `contra` varchar(40) NOT NULL COMMENT 'codigo numericio  clave para ingresar',
  `codigos` int(6) NOT NULL COMMENT 'código de recuperación aleatorio',
  `role_id` int(2) DEFAULT NULL COMMENT 'Roles \r\n1Cliente\r\n2Admin\r\n3Supervisor',
  `regisFecha` date NOT NULL COMMENT 'fecha del registro de un usuario',
  `regisHora` time(6) NOT NULL COMMENT 'hora de registro de un usuario o cliente',
  `fechaContra` date NOT NULL COMMENT 'fecha de cambio de contraseña',
  `horaContra` time(6) NOT NULL COMMENT 'hora del cambio de contraseña de un cliente o ususario',
  `numeroTarjeta` int(17) NOT NULL,
  `titularTarjeta` varchar(50) NOT NULL,
  `tarjetaDebito1` varchar(7) NOT NULL,
  `tarjetaCredito2` varchar(7) NOT NULL,
  `fechaVencimiento` int(5) NOT NULL,
  `pinTarjeta` int(3) NOT NULL,
  `correoElectronico` varchar(30) NOT NULL,
  `Cuenta` int(17) NOT NULL,
  `Banco` int(3) NOT NULL,
  `cuentaAhorros` int(7) NOT NULL,
  `cuentaCorriente` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `tdoc`, `ndocu`, `nombre`, `fnaci`, `correo`, `direccion`, `numcont`, `contra`, `codigos`, `role_id`, `regisFecha`, `regisHora`, `fechaContra`, `horaContra`, `numeroTarjeta`, `titularTarjeta`, `tarjetaDebito1`, `tarjetaCredito2`, `fechaVencimiento`, `pinTarjeta`, `correoElectronico`, `Cuenta`, `Banco`, `cuentaAhorros`, `cuentaCorriente`) VALUES
(1, 'CC', 1047393266, 'Jose Esteban', '2005-06-13', 'jemeneses31@gmail.com', 'cra 10E 06-67', '3148511969', 'j13e14m15', 480689, 1, '2023-08-30', '07:16:13.000000', '2023-08-30', '07:45:39.000000', 0, '', '', '', 0, 0, '', 0, 0, 0, 0),
(2, 'CC', 1083866827, 'Brayan Armando Parra Barrios', '2004-07-01', 'baparra728@gmail.com', 'calle 5 #13-15', '3134156651', '1234', 0, 2, '2023-08-30', '07:41:37.000000', '0000-00-00', '00:00:00.000000', 0, '', '', '', 0, 0, '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `idcontacto` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `correo` varchar(50) NOT NULL,
  `mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`idcontacto`, `nombre`, `apellido`, `correo`, `mensaje`) VALUES
(1, 'SERGIO', 'ZULETA', 'sergiozuleta153@gmail.cm', 'HAY BUÃ‘UELOS? SI NO PA CUANDO'),
(3, 'manquillo', 'coqui', 'manquillo@gmailcom', 'hay pan?'),
(4, 'pepe', 'picaso', 'pepe@gmail.com', 'hola quiero pan de la abuela y como y porque tan caro. '),
(5, 'pepe', 'picaso', 'pepe@gmail.com', 'hola quiero pan de la abuela y como y porque tan caro. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `imgProduc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `imgProduc`) VALUES
(1, 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Baguette/Baguette%20(1).webp?raw=true'),
(2, 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Baguette/Baguette%20(2).webp?raw=true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciarsesions`
--

CREATE TABLE `iniciarsesions` (
  `id_usuario` int(11) NOT NULL,
  `tdoc` text NOT NULL,
  `numb` int(10) NOT NULL,
  `contra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `iniciarsesions`
--

INSERT INTO `iniciarsesions` (`id_usuario`, `tdoc`, `numb`, `contra`) VALUES
(1, 'ce', 4566, '45645645645456'),
(2, 'ce', 4566, '456'),
(3, 'ce', 4566, '456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL COMMENT 'Codigo del Pedido',
  `nom_producto` varchar(255) NOT NULL COMMENT 'Nombre del Producto',
  `cantidad` int(11) NOT NULL COMMENT 'Cantidad del Producto',
  `estado` enum('pendiente','enviado','recibido') NOT NULL COMMENT 'Estado del Pedido',
  `estado_producto` enum('disponible','agotado') NOT NULL COMMENT 'Estado del Producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `nom_producto`, `cantidad`, `estado`, `estado_producto`) VALUES
(0, 'pan de la abuela', 3, 'pendiente', 'disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_otros`
--

CREATE TABLE `productos_otros` (
  `id_producto` int(11) NOT NULL COMMENT 'identificador del producto',
  `precio` decimal(10,0) NOT NULL COMMENT 'precio del producto',
  `cantidad_disponible` int(11) NOT NULL COMMENT 'cantidad del producto',
  `nombre_p` varchar(30) NOT NULL COMMENT 'nombre del producto',
  `tipo_prod` varchar(30) NOT NULL COMMENT 'tipo de producto',
  `peso` int(11) NOT NULL COMMENT 'gramaje',
  `descripcion` varchar(150) NOT NULL COMMENT 'breve descripción del producto',
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos_otros`
--

INSERT INTO `productos_otros` (`id_producto`, `precio`, `cantidad_disponible`, `nombre_p`, `tipo_prod`, `peso`, `descripcion`, `img1`, `img2`) VALUES
(1, 1500, 10, 'Chocolate en leche', 'novedades-otros', 150, 'delicioso chocolate espumoso con leche tibia', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Chocolate%20en%20leche/Chocolateenleche%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Chocolate%20en%20leche/Chocolateenleche%20(1).webp?raw=true'),
(2, 3000, 10, 'Nevado de café', 'novedades-otros', 150, 'basado en espuma chantillí y esta hecha con café fresco ', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Nevado%20de%20cafe/Nevadodecafe%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Nevado%20de%20cafe/Nevadodecafe%20(1).webp?raw=true'),
(3, 1500, 10, 'té', 'novedades-otros', 150, 'La bebida que denominamos té es un extracto acuoso que se obtiene de las hojas y brotes del arbusto del té', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/T%C3%A9/t%C3%A9%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/T%C3%A9/t%C3%A9%20(1).webp?raw=true'),
(4, 2000, 10, 'Cebada', 'novedades-otros', 150, 'es una bebida vegetal muy sabrosa e indicada para niños y adultos. Una bebida que aportará nutrientes necesarios para tu organismo', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Cebada/cebaada%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Cebada/cebaada%20(1).webp?raw=true'),
(5, 2000, 10, 'Avena cubana', 'novedades-otros', 150, 'avena fresca indicada para un día de calor', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Avena%20cubana/avenacubana%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Avena%20cubana/avenacubana%20(1).webp?raw=true'),
(6, 3000, 10, 'Jugo de guanábana en leche ', 'novedades-otros', 200, 'Este delicioso jugo tiene como propiedades reducir el estrés, estreñimiento, fatiga entre otros.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Jugo%20de%20guanabana%20en%20leche/Jugodeguanabana%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Novedades/Jugo%20de%20guanabana%20en%20leche/Jugodeguanabana%20(1).webp?raw=true'),
(7, 2000, 50, 'Chocolatina jumbo', 'Dulces', 20, 'En una Jumbo Maní podrás sentir la suavidad del chocolate que se derrite en tu boca mezclado con un crujiente maní delicadamente horneado', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Chocolatina%20jumbo/Chocolatinajumbo%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Chocolatina%20jumbo/Chocolatinajumbo%20(1).webp?raw=true'),
(8, 500, 80, 'Bombón bum unidad', 'Dulces', 10, 'un asombroso dulce de corteza de caramelo y relleno de chicle', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Bombon%20bum%20unidad/bombon%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Bombon%20bum%20unidad/bombon%20(1).webp?raw=true'),
(9, 200, 100, 'Gomitas', 'Dulces', 4, 'las gomitas están compuestas a base de grenetina, azúcar, colorante y saborizante artificial un caramelo blando emblemático', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Gomitas/Gomitas%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Gomitas/Gomitas%20(1).webp?raw=true'),
(10, 500, 40, 'Frunas', 'Dulces', 10, 'un caramelo blando emblemático', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/frunas/Frunas%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/frunas/Frunas%20(1).webp?raw=true'),
(11, 2500, 100, 'M&M', 'Dulces', 50, 'Los M&M\'s son pequeños pedazos de chocolate con leche revestidos de azúcar', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/M_M/M&M\'s%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/M_M/M&M\'s%20(1).webp?raw=true'),
(12, 1000, 100, 'Trident', 'Dulces', 10, 'Mastiquemos y desbloqueemos una actitud más fresca', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Trident/trident%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Dulces/1/Trident/trident%20(1).webp?raw=true'),
(13, 1500, 50, 'Choclitos', 'Empaquetados', 50, 'snack rico, crujiente, divertido que te lleva a una inigualable experiencia de sabor.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Choclitos/choclitos(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Choclitos/choclitos(1).webp?raw=true'),
(14, 2000, 10, 'Sabritas personal', 'Empaquetados', 60, 'papitas crocantes de diferente sabor', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Sabritas%20personal/sabritaspersonal%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Sabritas%20personal/sabritaspersonal%20(1).webp?raw=true'),
(15, 2500, 10, 'Detodito', 'Empaquetados', 60, 'snack de diferente sabores, limón, picante, natural, mixto', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Detodito/detoditos%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Detodito/detoditos%20(1).webp?raw=true'),
(16, 7800, 10, 'Sabritas familiar', 'Empaquetados', 100, 'papitas crocantes de diferente sabor tamaño familiar', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Sabritas%20familiar/sabritasfamiliar%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Sabritas%20familiar/sabritasfamiliar%20(1).webp?raw=true'),
(17, 500, 30, 'Tocineta', 'Empaquetados', 40, 'Snack de tocineta, papitas crocantes', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Tocineta/tocinetas%20(1).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Tocineta/tocinetas%20(1).webp?raw=true'),
(18, 9000, 20, 'Pringles', 'Empaquetados', 250, 'Degusta el único snack apilable, que abraza la lengua y deleita las papilas gustativas!', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Pringles/springles%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Empaquetados/Pringles/springles%20(1).webp?raw=true'),
(19, 1000, 10, 'Aromatica', 'Bebidas', 150, 'son plantas muy utilizadas en la cocina mediterránea por sus cualidades aromáticas y condimentarías', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Aromatica/aromatica%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Aromatica/aromatica%20(1).webp?raw=true'),
(20, 2000, 10, 'Café', 'Bebidas', 150, 'es la bebida que se obtiene mediante el percolado de agua caliente a través de los granos tostados y molidos de los frutos de la planta del café', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Cafe/Cafe%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Cafe/Cafe%20(1).webp?raw=true'),
(21, 3500, 10, 'Capuchino', 'Bebidas', 150, 'es una bebida nacida en Austria, preparada con café expreso y leche montada con vapor ', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Capuchino/capuchino%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Capuchino/capuchino%20(1).webp?raw=true'),
(22, 7800, 5, 'Cerveza tradicional', 'Bebidas', 150, 'ingredientes totalmente naturales, que no llevan aditivos artificiales ni conservantes, simplemente agua', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Cerveza%20tradicional/cerveza%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Cerveza%20tradicional/cerveza%20(1).webp?raw=true'),
(23, 2500, 16, 'Coca-Cola', 'Bebidas', 100, 'el refresco más reconocido del mundo, bueno para sed', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Coca-cola/Coca-cola%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Coca-cola/Coca-cola%20(1).webp?raw=true'),
(24, 5000, 15, 'Jugo de guanábana en agua', 'Bebidas', 100, 'contiene vitamina c que es reconocida por fortalecer tu sistema inmunitario y es de gran ayuda para prevenir problemas en tu salud tan comunes como lo', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Jugo%20de%20guanabana%20en%20agua/Jugodeguanabana%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20otros/Bebidas/Jugo%20de%20guanabana%20en%20agua/Jugodeguanabana%20(1).webp?raw=true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_panes`
--

CREATE TABLE `productos_panes` (
  `id_producto` int(11) NOT NULL COMMENT 'identificador del producto',
  `precio` decimal(10,0) NOT NULL COMMENT 'precio del producto',
  `cantidad_disponible` int(11) NOT NULL COMMENT 'cantidad del producto',
  `nombre_p` varchar(30) NOT NULL COMMENT 'nombre del producto',
  `tipo_prod` varchar(30) NOT NULL COMMENT 'tipo de producto',
  `peso` int(11) NOT NULL COMMENT 'gramaje',
  `descripcion` varchar(150) NOT NULL COMMENT 'breve descripción del producto',
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos_panes`
--

INSERT INTO `productos_panes` (`id_producto`, `precio`, `cantidad_disponible`, `nombre_p`, `tipo_prod`, `peso`, `descripcion`, `img1`, `img2`) VALUES
(1, 5000, 10, 'Baguette', 'novedades', 500, 'Pan elaborado con técnicas artesanales y preferentes (levaduras naturales), de crecimiento lento, con todos los beneficios de la harina de centeno.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Baguette/Baguette%20(1).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Baguette/Baguette%20(2).webp?raw=true'),
(2, 2000, 40, 'Pan de la abuela', 'novedades', 400, 'Es la preferencia de algunos clientes, la razón es por su sabor de queso exquisitez.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20la%20abuela/Pan%20de%20la%20abuela%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20la%20abuela/Pan%20de%20la%20abuela%20(1).webp?raw=true'),
(3, 2000, 10, 'pan con queso', 'novedades', 400, 'pan artesanal rellena de queso y una suavidad maravillosa.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso/Pan%20con%20queso%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso/Pan%20con%20queso%20(1).webp?raw=true'),
(4, 2000, 10, 'pan de arequipe', 'novedades', 450, 'pan relleno de arequipe dulce y la suavidad del pan es la mejor', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20arequipe/Pan%20de%20arequipe%20(1).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20de%20arequipe/Pan%20de%20arequipe%20(2).webp?raw=true'),
(5, 3000, 10, 'pan con queso y jamón ', 'novedades', 500, 'suavidad de pan hecha con harinas queso y mortadela de calidad .', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso%20y%20jam%C3%B3n/Pan%20con%20queso%20y%20jam%C3%B3n%20(1).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Pan%20con%20queso%20y%20jam%C3%B3n/Pan%20con%20queso%20y%20jam%C3%B3n%20(2).webp?raw=true'),
(6, 1500, 40, 'Croissant', 'novedades', 200, 'Panecillo aceitoso de pasta de hojaldre, cocido al horno, con forma de media luna.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Croissant/Croissant%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Novedades/Croissant/Croissant%20(1).webp?raw=true'),
(7, 700, 100, 'Buñuelos', 'panes', 70, 'son buñuelos muy esponjosos además están con buena cantidad de queso', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bu%C3%B1uelos/bu%C3%B1uelos(1).webp?raw=true'),
(8, 700, 100, 'Almojábanas', 'panes', 60, 'Su nombre deriva del árabe al-muyabbana, que podría traducirse como \"la quesada\" o \"la que tiene queso\", o como \"torta\".', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(1).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Almojabanas/Almojabana%20(2).webp?raw=true'),
(9, 200, 300, 'Bizcocho de achira', 'panes', 10, '>es un amasijo que se hace con el almidón de achira o sagú (Canna indica), que es una planta de origen sudamericano usada por los pueblos prehispánico', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Bizcocho%20de%20achira/Bizcocho%20(1).webp?raw=true'),
(10, 500, 10, 'Bizcocho de cuajada', 'panes', 40, 'Cuajada Fresca, Se mezclan bien todos los ingredientes y se muelen juntos. Se amasan bien y se dejan descansar un poco. Se hacen los bizcochos de cuaj', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/bizcocho%20de%20cuajada/Bizcochodecuajada%20(1).webp?raw=true'),
(11, 800, 100, 'pan de bono', 'panes', 70, 'pan con una contextura suave y a la vez dura, pan de queso.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20bono/Pandebono%20(1).webp?raw=true'),
(12, 800, 100, 'pan de yuca', 'panes', 50, 'se prepara con almidón o harina de yuca, queso, mantequilla y huevos.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Pan/1/Pan%20de%20yuca/Pandeyuca%20(1).webp?raw=true'),
(13, 500, 90, 'cucas', 'galletas', 90, 'Galletas morenas endulzadas con melao de panela', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Cucas/Cucas%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Cucas/Cucas%20(1).webp?raw=true'),
(14, 500, 100, 'panderos', 'galletas', 20, 'Los panderos tienen una textura crujiente y son ligeramente endulzados con un toque de sabor anís.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Panderos/Panderos%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Panderos/Panderos%20(1).webp?raw=true'),
(15, 400, 100, 'merengos', 'galletas', 10, 'Estos postres que producen suspiros al unirse con frutas y salsas los convierten en unos pequeños acompañantes de sabor exquisito.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Merengos/Merengos%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Merengos/Merengos%20(1).webp?raw=true'),
(16, 500, 40, 'galletas de chocolate', 'galletas', 500, 'Receta de Galletas de mantequilla rellena con chocolate.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20chocolate/Galletasdechocolate%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20chocolate/Galletasdechocolate%20(1).webp?raw=true'),
(17, 3000, 200, 'galletas de leche', 'galletas', 400, 'Disfruta esta deliciosa y exquisita receta de galletas la vaquita.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20leche/Galletasdeleche%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Galletas%20de%20leche/Galletasdeleche%20(1).webp?raw=true'),
(18, 500, 50, 'tostadas', 'galletas', 30, 'tostadas son de contextura duro y rapidas de preparar.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Tostadas/Tostadas%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pan/Galletas/1/Tostadas/Tostadas%20(1).webp?raw=true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_pasteles`
--

CREATE TABLE `productos_pasteles` (
  `id_producto` int(11) NOT NULL COMMENT 'identificador del producto',
  `precio` decimal(10,0) NOT NULL COMMENT 'precio del producto',
  `cantidad_disponible` int(11) NOT NULL COMMENT 'cantidad del producto',
  `nombre_p` varchar(30) NOT NULL COMMENT 'nombre del producto',
  `tipo_prod` varchar(30) NOT NULL COMMENT 'tipo de producto',
  `peso` int(11) NOT NULL COMMENT 'gramaje',
  `descripcion` varchar(150) NOT NULL COMMENT 'breve descripción del producto',
  `img1` text NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos_pasteles`
--

INSERT INTO `productos_pasteles` (`id_producto`, `precio`, `cantidad_disponible`, `nombre_p`, `tipo_prod`, `peso`, `descripcion`, `img1`, `img2`) VALUES
(1, 1500, 10, 'torta de nuez', 'novedades-pasteles', 150, 'esta novedad es una de las tortas mas deliciosas pedidas por los clientes ya sea por su esponjosidad y su gran sabor a nuez y ', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20de%20nuez/Tortadenuez%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20de%20nuez/Tortadenuez%20(1).webp?raw=true'),
(2, 4000, 20, 'postres de maracuyá', 'novedades-pasteles', 150, '70 g de mantequilla sin sal a temperatura ambiente · 75 g de aceite de canola o vegetal · 740 g de azúcar blanca · 6 huevos · ', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Postre%20de%20maracuya/Postredemaracuya%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Postre%20de%20maracuya/Postredemaracuya%20(1).webp?raw=true'),
(3, 5000, 10, 'Red velvet cake', 'novedades-pasteles', 150, 'Tres sabores fuertes se mezclan para darle al Red Velvet Cake ese gusto particular: la vainilla de base, una insinuación de ch', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Red%20velvet%20cake/Redvelvetcake%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Red%20velvet%20cake/Redvelvetcake%20(1).webp?raw=true'),
(4, 2500, 10, 'Torta aliñada casera', 'novedades-pasteles', 150, 'cremar mantequilla, azúcar y la ralladura de naranja hasta que observemos que la mantequilla tomó un tono más claro.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20ali%C3%B1ada%20casera/tostali%C3%B1adacasera%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Torta%20ali%C3%B1ada%20casera/tostali%C3%B1adacasera%20(1).webp?raw=true'),
(5, 3000, 30, 'Brownie', 'novedades-pasteles', 200, 'Al quedarse compacto, crujiente por fuera y tierno por dentro, el brownie presenta un color marrón oscuro que hace que este no', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Brownie/Brownie%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Brownie/Brownie%20(1).webp?raw=true'),
(6, 1000, 20, 'Cupcakes', 'novedades-pasteles', 200, 'ingredientes para conseguir el sabor y color que mejor complementa al bizcocho preparado. Aquí  no puede faltar el chocolate, l', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Cupackes/cupcake%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Novedades/Cupackes/cupcake%20(1).webp?raw=true'),
(7, 500, 20, 'Torta de banano', 'pasteles fermentados', 150, 'torta esponjosa basada en en banano y con pedacitos de queso.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20banano/tortadebanano%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20banano/tortadebanano%20(1).webp?raw=true'),
(8, 1500, 5, 'Choco Frambuesa', 'pasteles fermentados', 250, 'su propio nombre deleita lo delicioso que es ya que lleva chocolate con frambuesas en la arriba del pastel.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Choco%20franbuesa/Chocofranbuesa%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Choco%20franbuesa/Chocofranbuesa%20(1).webp?raw=true'),
(9, 1500, 35, 'Torta de café', 'pasteles fermentados', 150, 'esta torta es una de las mas vendidas ya sea por su delicioso sabor a café.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20cafe/tortadecafe%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20cafe/tortadecafe%20(1).webp?raw=true'),
(10, 1000, 20, 'Torta auyama', 'pasteles fermentados', 150, 'La torta de auyama tipo pudín, en esta torta les ofrecemos con pedacitos de queso para más sabor.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20auyama/Tortadeauyama%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20auyama/Tortadeauyama%20(1).webp?raw=true'),
(11, 1000, 20, 'Torta de coco', 'pasteles fermentados', 200, 'Las esponjosas capas de pastel se cubren de un sabroso glaseado de coco y trozos de coco para crear lo que será la torta más c', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20coco/Tortadecoco%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Torta%20de%20coco/Tortadecoco%20(1).webp?raw=true'),
(12, 2000, 10, 'Patel de mantequilla', 'pasteles fermentados', 150, 'La tarta dulce consiste en un relleno de mantequilla, azúcar, almíbar y huevo, horneados en una masa de hojaldre hasta que el ', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Pastel%20de%20mantequilla/Pasteldemantequilla%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20Fermentados/Pastel%20de%20mantequilla/Pasteldemantequilla%20(1).webp?raw=true'),
(13, 4500, 30, 'Ponqué tradicional', 'pasteles esponjosos', 100, 'El Ponqué Ramo Tradicional es la semilla con la que inició la historia de la compañía y el origen de las caras de ponqué de lo', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Ponque%20tradicional/ponquetradicional%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Ponque%20tradicional/ponquetradicional%20(1).webp?raw=true'),
(14, 1000, 10, 'postre de limón', 'pasteles esponjosos', 100, 'Este delicioso postre está hecho con zumo natural de limón, crema de leche, galletas caseras y leche condensada.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Postre%20de%20limon/Postredelimon%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Postre%20de%20limon/Postredelimon%20(1).webp?raw=true'),
(15, 1500, 15, 'Torta húmeda de chocolate', 'pasteles esponjosos', 280, 'pastel tradicionalmente redondo compuesto de una o más capas de masa dulce cocida al horno rellenadas y decoradas con crema p', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Torta%20humeda%20de%20chocolate/torta%20chocolate%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Torta%20humeda%20de%20chocolate/torta%20chocolate%20(1).webp?raw=true'),
(16, 1000, 6, 'pastel de queso japones', 'pasteles esponjosos', 150, 'pastel suave y esponjoso que recuerda al algodón y es uno de los postres típicos de los  restaurantes y cafeterías japonesas.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20queso%20japones/esponjoso%20japones%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20queso%20japones/esponjoso%20japones%20(1).webp?raw=true'),
(17, 1500, 10, 'Donas', 'pasteles esponjosos', 100, 'pan dulce que se hornea o se fríe. Algunas donas se hacen en forma de aro, mientras que otras se ven más como bollos y están l', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Donas/Donas%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Donas/Donas%20(1).webp?raw=true'),
(18, 1500, 10, 'Pastel de plátano esponjoso', 'pasteles esponjosos', 200, 'Este banana bread o pan de plátano es un auténtico festival de sabores.', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20platano%20esponjoso/Pasteldeplatano%20(2).webp?raw=true', 'https://github.com/Ronaldo07rgr/Repositorio_LaBaguette/blob/master/assets/static/Catalogo%20de%20pasteles/Pasteles%20esponjosos/Pastel%20de%20platano%20esponjoso/Pasteldeplatano%20(1).webp?raw=true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL COMMENT 'Identificacion del proveedor',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre del proveedor',
  `Producto_proveedor` varchar(50) NOT NULL COMMENT 'Producto que ofrece\r\n',
  `numero_de_contacto` varchar(20) NOT NULL COMMENT 'Numero del contacto del proveedor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperaciones`
--

CREATE TABLE `recuperaciones` (
  `id` int(11) NOT NULL,
  `codigo` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `recuperaciones`
--

INSERT INTO `recuperaciones` (`id`, `codigo`) VALUES
(1, 1454414),
(2, 454654),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0),
(31, 0),
(32, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(37, 0),
(38, 0),
(39, 0),
(40, 0),
(41, 0),
(42, 0),
(43, 0),
(44, 0),
(45, 0),
(46, 0),
(47, 0),
(48, 0),
(49, 0),
(50, 0),
(51, 0),
(52, 0),
(53, 0),
(54, 0),
(55, 0),
(56, 0),
(57, 0),
(58, 0),
(59, 0),
(60, 0),
(61, 0),
(62, 0),
(63, 0),
(64, 0),
(65, 0),
(66, 0),
(67, 0),
(68, 0),
(69, 0),
(70, 0),
(71, 0),
(72, 0),
(73, 0),
(74, 0),
(75, 0),
(76, 0),
(77, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'Cliente'),
(2, 'Administrador'),
(3, 'supervisor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL COMMENT 'Registro unico de la venta',
  `fecha` date NOT NULL COMMENT 'Fecha en la que se realizó la venta',
  `hora` time NOT NULL COMMENT 'Hora en la que se realizó la venta',
  `total` decimal(10,2) NOT NULL COMMENT 'Valor de total de la venta',
  `factura` varchar(255) NOT NULL COMMENT 'Factura generada por la venta',
  `cajero_identificacion` int(11) NOT NULL COMMENT 'Numero de identificacion del cajero'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idcontacto`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `iniciarsesions`
--
ALTER TABLE `iniciarsesions`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `productos_otros`
--
ALTER TABLE `productos_otros`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `productos_panes`
--
ALTER TABLE `productos_panes`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `productos_pasteles`
--
ALTER TABLE `productos_pasteles`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `recuperaciones`
--
ALTER TABLE `recuperaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numero entero consecutivo autoincremental', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `idcontacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `iniciarsesions`
--
ALTER TABLE `iniciarsesions`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos_otros`
--
ALTER TABLE `productos_otros`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador del producto', AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `productos_panes`
--
ALTER TABLE `productos_panes`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador del producto', AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `productos_pasteles`
--
ALTER TABLE `productos_pasteles`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador del producto', AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificacion del proveedor';

--
-- AUTO_INCREMENT de la tabla `recuperaciones`
--
ALTER TABLE `recuperaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
