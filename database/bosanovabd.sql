-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-08-2015 a las 00:50:51
-- Versión del servidor: 5.5.44-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bosanovabd`http://paraisolinux.com/diagramas-er-phpmyadmin/
CREATE DATABASE bosanovabd;
USE bosanovabd;
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `cargo_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cargo_nombre` varchar(30) NOT NULL,
  `cargo_descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cargo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `curso_id` bigint(20) NOT NULL,
  `curso_cantidad_estudiantes` int(11) NOT NULL,
  `curso_nombre` varchar(20) NOT NULL,
  `director_curso_id` bigint(20) NOT NULL,
  PRIMARY KEY (`curso_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_demograficos`
--

CREATE TABLE IF NOT EXISTS `datos_demograficos` (
  `dato_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `estudiante_id` bigint(20) NOT NULL,
  `dato_lugar_ocupa_hermanos` int(11) NOT NULL,
  `dato_tipo_vivienda|` varchar(50) NOT NULL,
  `dato_cantidad_veces_come_diario` int(11) NOT NULL,
  `dato_vive_con` varchar(100) NOT NULL,
  `dato_años_perdidos` int(11) NOT NULL,
  `dato_descripcion_años_perdidos` varchar(100) NOT NULL,
  `dato_problema_salud` varchar(100) DEFAULT NULL,
  `dato_tratamiento_problema_salud` varchar(150) DEFAULT NULL,
  `dato_medicamento_tomado` varchar(100) DEFAULT NULL,
  `dato_otro_problema` varchar(100) DEFAULT NULL,
  `dato_otra_terapia` varchar(150) DEFAULT NULL,
  `dato_asignatura_facilita` varchar(100) NOT NULL,
  `dato_asignatura_dificulta` varchar(100) NOT NULL,
  `dato_tipo_sangre` varchar(5) NOT NULL,
  `dato_rh` varchar(10) NOT NULL,
  PRIMARY KEY (`dato_id`),
  KEY `estudiante_id` (`estudiante_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desempeño`
--

CREATE TABLE IF NOT EXISTS `desempeño` (
  `desempeño_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `desempeño_descripcion` varchar(255) NOT NULL,
  `periodo_id` bigint(20) NOT NULL,
  `materia_id` bigint(20) NOT NULL,
  PRIMARY KEY (`desempeño_id`),
  KEY `periodo_id` (`periodo_id`,`materia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `estudiante_id` bigint(20) NOT NULL,
  `estudiante_nombre` varchar(30) NOT NULL,
  `estudiante_primer_apellido` varchar(30) NOT NULL,
  `estudiante_segundo_apellido` varchar(30) DEFAULT NULL,
  `estudiante_fecha_nacimiento` date NOT NULL,
  `estudiante_grado_id` bigint(20) NOT NULL,
  `estudiante_curso_id` bigint(20) NOT NULL,
  `estudiante_estado` varchar(20) NOT NULL,
  `estudiante_jornada` varchar(20) NOT NULL,
  `estudiante_antiguo` varchar(5) NOT NULL,
  `estudiante_genero` varchar(20) NOT NULL,
  `estudiante_estrato` int(11) NOT NULL,
  `estudiante_eps` varchar(50) NOT NULL,
  `estudiante_etnia` varchar(50) DEFAULT NULL,
  `estudiante_padre` int(11) DEFAULT NULL,
  `estudiante_madre` int(11) DEFAULT NULL,
  `estudiante_acudiente` int(11) NOT NULL,
  `estudiante_telefono_fijo` bigint(20) NOT NULL,
  `estudiante_celular` bigint(20) NOT NULL,
  `estudiante_direccion` varchar(50) NOT NULL,
  `estudiante_barrio` varchar(50) NOT NULL,
  `estudiante_correo` varchar(50) NOT NULL,
  PRIMARY KEY (`estudiante_id`),
  KEY `estudiante_grado_id` (`estudiante_grado_id`,`estudiante_curso_id`,`estudiante_padre`,`estudiante_madre`,`estudiante_acudiente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE IF NOT EXISTS `grado` (
  `grado_id` bigint(20) NOT NULL,
  `grado_nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`grado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logro`
--

CREATE TABLE IF NOT EXISTS `logro` (
  `logro_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `logro_descripcion` varchar(255) NOT NULL,
  `materia_id` bigint(20) NOT NULL,
  `logro_juicio_valorativo` varchar(20) NOT NULL,
  `periodo_id` bigint(20) NOT NULL,
  PRIMARY KEY (`logro_id`),
  KEY `materia_id` (`materia_id`,`periodo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `materia_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `materia_nombre` varchar(30) NOT NULL,
  `materia_intensidad_horaria` bigint(20) NOT NULL,
  PRIMARY KEY (`materia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
  `nota_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `logro_id` bigint(20) NOT NULL,
  `estudiante_id` bigint(20) NOT NULL,
  `materia_id` bigint(20) NOT NULL,
  `periodo_id` bigint(20) NOT NULL,
  `nota_c_1` int(11) DEFAULT NULL,
  `nota_c_2` int(11) DEFAULT NULL,
  `nota_c_3` int(11) DEFAULT NULL,
  `nota_c_4` int(11) DEFAULT NULL,
  `nota_c_5` int(11) DEFAULT NULL,
  `nota_p_1` int(11) DEFAULT NULL,
  `nota_p_2` int(11) DEFAULT NULL,
  `nota_p_3` int(11) DEFAULT NULL,
  `nota_p_4` int(11) DEFAULT NULL,
  `nota_p_5` int(11) DEFAULT NULL,
  `nota_a_1` int(11) DEFAULT NULL,
  `nota_a_2` int(11) DEFAULT NULL,
  `nota_a_3` int(11) DEFAULT NULL,
  `nota_a_4` int(11) DEFAULT NULL,
  `nota_a_5` int(11) DEFAULT NULL,
  `nota_parcial` int(11) DEFAULT NULL,
  PRIMARY KEY (`nota_id`),
  KEY `estudiante_id` (`estudiante_id`,`materia_id`,`periodo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observacion`
--

CREATE TABLE IF NOT EXISTS `observacion` (
  `observacion_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `observacion_descripcion` varchar(255) NOT NULL,
  `observacion_fecha` date NOT NULL,
  `estudiante_id` bigint(20) NOT NULL,
  PRIMARY KEY (`observacion_id`),
  KEY `estudiante_id` (`estudiante_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE IF NOT EXISTS `periodo` (
  `periodo_id` bigint(20) NOT NULL,
  `periodo_descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`periodo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `personal_id` bigint(20) NOT NULL,
  `personal_primer_apellido` varchar(30) NOT NULL,
  `pers_segundo_apellido` varchar(30) DEFAULT NULL,
  `pers_nombres` varchar(50) NOT NULL,
  `pers_tipo_id` varchar(20) NOT NULL,
  `pers_sexo` varchar(20) NOT NULL,
  `pers_nacionalidad` varchar(50) NOT NULL,
  `pers_clase_libreta_militar` varchar(20) DEFAULT NULL,
  `pers_numero_libreta_militar` bigint(20) DEFAULT NULL,
  `pers_distrito_militar` varchar(50) DEFAULT NULL,
  `pers_pais_nacimiento` varchar(50) NOT NULL,
  `pers_depto_nacimiento` varchar(50) NOT NULL,
  `pers_municipio` varchar(50) NOT NULL,
  `pers_direccion` varchar(50) NOT NULL,
  `pers_telefono_fijo` bigint(20) DEFAULT NULL,
  `pers_celular` bigint(20) NOT NULL,
  `pers_correo` varchar(50) NOT NULL,
  `edu_bas_primaria` varchar(20) NOT NULL,
  `edu_bas_secundaria` varchar(20) NOT NULL,
  `edu_bas_media` varchar(20) NOT NULL,
  `edu_bas_titulo_obtenido` varchar(50) DEFAULT NULL,
  `edu_bas_fecha_grado` date DEFAULT NULL,
  `edu_sup_modalidad_academica` varchar(20) DEFAULT NULL,
  `edu_sup_semestres_aprobados` int(11) DEFAULT NULL,
  `edu_sup_graduado` varchar(5) DEFAULT NULL,
  `edu_sup_estudios_titulos_obtenidos` varchar(100) NOT NULL,
  `edu_sup_fecha_terminacion` date NOT NULL,
  `edu_sup_num_tarjeta_profesional` bigint(20) NOT NULL,
  `edu_sup_modalidad_academica_2` varchar(20) DEFAULT NULL,
  `edu_sup_semestres_aprobados_2` int(11) DEFAULT NULL,
  `edu_sup_graduado_2` varchar(5) DEFAULT NULL,
  `edu_sup_estudios_titulos_obtenidos_2` varchar(100) DEFAULT NULL,
  `edu_sup_fecha_terminacion_2` date DEFAULT NULL,
  `edu_sup_num_tarjeta_profesional_2` bigint(20) DEFAULT NULL,
  `edu_sup_modalidad_academica_3` varchar(20) DEFAULT NULL,
  `edu_sup_semestres_aprobados_3` int(11) DEFAULT NULL,
  `edu_sup_graduado_3` varchar(5) DEFAULT NULL,
  `edu_sup_estudios_titulos_obtenidos_3` varchar(100) DEFAULT NULL,
  `edu_sup_fecha_terminacion_3` date DEFAULT NULL,
  `edu_sup_num_tarjeta_profesional_3` bigint(20) DEFAULT NULL,
  `edu_sup_modalidad_academica_4` varchar(20) DEFAULT NULL,
  `edu_sup_semestres_aprobados_4` int(11) DEFAULT NULL,
  `edu_sup_graduado_4` varchar(5) DEFAULT NULL,
  `edu_sup_estudios_titulos_obtenidos_4` varchar(100) DEFAULT NULL,
  `edu_sup_fecha_terminacion_4` date DEFAULT NULL,
  `edu_sup_num_tarjeta_profesional_4` bigint(20) DEFAULT NULL,
  `edu_sup_modalidad_academica_5` varchar(20) DEFAULT NULL,
  `edu_sup_semestres_aprobados_5` int(11) DEFAULT NULL,
  `edu_sup_graduado_5` varchar(5) DEFAULT NULL,
  `edu_sup_estudios_titulos_obtenidos_5` varchar(100) DEFAULT NULL,
  `edu_sup_fecha_terminacion_5` date DEFAULT NULL,
  `edu_sup_num_tarjeta_profesional_5` bigint(20) DEFAULT NULL,
  `pers_idioma_1` varchar(20) NOT NULL,
  `pers_idioma_1_habla` varchar(15) NOT NULL,
  `pers_idioma_1_lee` varchar(15) NOT NULL,
  `pers_idioma_1_escribe` varchar(15) NOT NULL,
  `pers_idioma_2` varchar(20) DEFAULT NULL,
  `pers_idioma_2_habla` varchar(15) DEFAULT NULL,
  `pers_idioma_2_lee` varchar(15) DEFAULT NULL,
  `pers_idioma_2_escribe` varchar(15) DEFAULT NULL,
  `empresa_actual` varchar(50) NOT NULL,
  `emp_act_tipo_entidad` varchar(20) NOT NULL,
  `emp_act_pais` varchar(50) NOT NULL,
  `emp_act_depto` varchar(50) NOT NULL,
  `emp_act_municipio` varchar(50) NOT NULL,
  `emp_act_correo` varchar(50) NOT NULL,
  `emp_act_telefonos` bigint(20) NOT NULL,
  `emp_act_fecha_ingreso` date NOT NULL,
  `emp_act_fecha_retiro` date NOT NULL,
  `emp_act_cargo` varchar(50) NOT NULL,
  `emp_act_dependencia` varchar(30) NOT NULL,
  `emp_act_direccion` varchar(50) NOT NULL,
  `emp_ant_nombre` varchar(50) DEFAULT NULL,
  `emp_ant_tipo_entidad` varchar(20) DEFAULT NULL,
  `emp_ant_pais` varchar(50) DEFAULT NULL,
  `emp_ant_depto` varchar(50) DEFAULT NULL,
  `emp_ant_municipio` varchar(50) DEFAULT NULL,
  `emp_ant_correo` varchar(50) DEFAULT NULL,
  `emp_ant_telefonos` bigint(20) DEFAULT NULL,
  `emp_ant_fecha_ingreso` date DEFAULT NULL,
  `emp_ant_fecha_retiro` date DEFAULT NULL,
  `emp_ant_cargo` varchar(50) DEFAULT NULL,
  `emp_ant_dependencia` varchar(30) DEFAULT NULL,
  `emp_ant_direccion` varchar(50) DEFAULT NULL,
  `emp_otra1_nombre` varchar(50) DEFAULT NULL,
  `emp_otra1_tipo_entidad` varchar(20) DEFAULT NULL,
  `emp_otra1_pais` varchar(50) DEFAULT NULL,
  `emp_otra1_depto` varchar(50) DEFAULT NULL,
  `emp_otra1_municipio` varchar(50) DEFAULT NULL,
  `emp_otra1_correo` varchar(50) DEFAULT NULL,
  `emp_otra1_telefono` bigint(20) DEFAULT NULL,
  `emp_otra1_fecha_ingreso` date DEFAULT NULL,
  `emp_otra1_fecha_retiro` date DEFAULT NULL,
  `emp_otra1_cargo` varchar(50) DEFAULT NULL,
  `emp_otra1_dependencia` varchar(30) DEFAULT NULL,
  `emp_otra1_direccion` varchar(50) DEFAULT NULL,
  `emp_otra2_nombre` varchar(50) DEFAULT NULL,
  `emp_otra2_tipo_entidad` varchar(20) DEFAULT NULL,
  `emp_otra2_pais` varchar(50) DEFAULT NULL,
  `emp_otra2_depto` varchar(50) DEFAULT NULL,
  `emp_otra2_municipio` varchar(50) DEFAULT NULL,
  `emp_otra2_correo` varchar(50) DEFAULT NULL,
  `emp_otra2_telefono` bigint(20) DEFAULT NULL,
  `emp_otra2_fecha_ingreso` date DEFAULT NULL,
  `emp_otra2_fecha_retiro` date DEFAULT NULL,
  `emp_otra2_cargoemp_otra2_cargo` varchar(50) DEFAULT NULL,
  `emp_otra2_dependencia` varchar(30) DEFAULT NULL,
  `emp_otra2_direccion` varchar(50) DEFAULT NULL,
  `pers_exp_servidor_publico_años` int(11) DEFAULT NULL,
  `pers_exp_servidor_publico_meses` int(11) DEFAULT NULL,
  `pers_exp_empleado_sector_privado_años` int(11) DEFAULT NULL,
  `pers_exp_empleado_sector_privado_meses` int(11) DEFAULT NULL,
  `pers_exp_independiente_años` int(11) DEFAULT NULL,
  `pers_exp_independiente_meses` int(11) DEFAULT NULL,
  `pers_exp_total_años` int(11) DEFAULT NULL,
  `pers_exp_total_meses` int(11) DEFAULT NULL,
  `pers_juramento` varchar(5) NOT NULL,
  `pers_observaciones_recurso_humano` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`personal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_estudio_biopsicosocial`
--

CREATE TABLE IF NOT EXISTS `pregunta_estudio_biopsicosocial` (
  `pregunta_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pregunta_descripcion` varchar(150) NOT NULL,
  PRIMARY KEY (`pregunta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_director_curso`
--

CREATE TABLE IF NOT EXISTS `relacion_director_curso` (
  `rel_direc_curso_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `personal_id` bigint(20) NOT NULL,
  `curso_id` bigint(20) NOT NULL,
  PRIMARY KEY (`rel_direc_curso_id`),
  KEY `personal_id` (`personal_id`,`curso_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_grado_materia`
--

CREATE TABLE IF NOT EXISTS `relacion_grado_materia` (
  `rel_grado_mat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `grado_id` bigint(20) NOT NULL,
  `materia_id` bigint(20) NOT NULL,
  PRIMARY KEY (`rel_grado_mat_id`),
  KEY `grado_id` (`grado_id`,`materia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_materia_estudiante`
--

CREATE TABLE IF NOT EXISTS `relacion_materia_estudiante` (
  `rel_mat_estu_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `estudiante_id` bigint(20) NOT NULL,
  `materia_id` bigint(20) NOT NULL,
  `rel_mat_estu_año` int(11) NOT NULL,
  `rel_mat_estu_estado_final` varchar(20) DEFAULT NULL,
  `rel_mat_estu_nota_final` int(11) DEFAULT NULL,
  PRIMARY KEY (`rel_mat_estu_id`),
  KEY `estudiante_id` (`estudiante_id`,`materia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_personal_cargo`
--

CREATE TABLE IF NOT EXISTS `relacion_personal_cargo` (
  `rel_pers_cargo_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `personal_id` bigint(20) NOT NULL,
  `cargo_id` bigint(20) NOT NULL,
  PRIMARY KEY (`rel_pers_cargo_id`),
  KEY `personal_id` (`personal_id`,`cargo_id`),
  KEY `cargo_id` (`cargo_id`),
  KEY `cargo_id_2` (`cargo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_profesor`
--

CREATE TABLE IF NOT EXISTS `relacion_profesor` (
  `relacion_profesor_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `personal_id` bigint(20) NOT NULL,
  `materia_id` bigint(20) NOT NULL,
  PRIMARY KEY (`relacion_profesor_id`),
  KEY `personal_id` (`personal_id`,`materia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_responsable_estudiante`
--

CREATE TABLE IF NOT EXISTS `relacion_responsable_estudiante` (
  `relacion_respon_estu_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `responsable_estudiante_id` bigint(20) NOT NULL,
  `estudiante_id` bigint(20) NOT NULL,
  `relacion_respon_estu_parentesco` varchar(30) NOT NULL,
  PRIMARY KEY (`relacion_respon_estu_id`),
  KEY `relacion_respon_estu` (`responsable_estudiante_id`,`estudiante_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable_estudiante`
--

CREATE TABLE IF NOT EXISTS `responsable_estudiante` (
  `responsable_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `responsable_nombre` varchar(30) NOT NULL,
  `responsable_primer_apellido` varchar(30) NOT NULL,
  `responsable_segundo_apellido` varchar(30) DEFAULT NULL,
  `responsable_fecha_nacimiento` date NOT NULL,
  `responsable_nivel_educativo` varchar(100) NOT NULL,
  `responsable_direccion` varchar(50) NOT NULL,
  `responsable_barrio` varchar(50) NOT NULL,
  `responsable_telefono_fijo` bigint(20) DEFAULT NULL,
  `responsable_celular` bigint(20) NOT NULL,
  PRIMARY KEY (`responsable_id`),
  KEY `responsable_id` (`responsable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_estudio_biopsicosocial`
--

CREATE TABLE IF NOT EXISTS `respuesta_estudio_biopsicosocial` (
  `respuesta_estudio_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `estudiante_id` bigint(20) NOT NULL,
  `pregunta_id` bigint(20) NOT NULL,
  `respuesta` varchar(10) NOT NULL,
  PRIMARY KEY (`respuesta_estudio_id`),
  KEY `estudiante_id` (`estudiante_id`,`pregunta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
