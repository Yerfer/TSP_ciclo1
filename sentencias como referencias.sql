UPDATE `videojuegos`.`videogame` SET `nombre` = 'prueba aletrada', `descripcion` = 'esta es la descripción2', `precio_dia` = '22222', `consola` = 'WII2', `stock` = '18', `imagen` = 'Url de la Imagen2', `video` = 'Url(ID) de Youtube2', `id_categoria` = '2' WHERE `videogame`.`id_vj` = 17;
DELETE FROM `videojuegos`.`videogame` WHERE `videogame`.`id_vj` = 17;


INSERT INTO `videojuegos`.`videogame` (`id_vj`, `nombre`, `descripcion`, `precio_dia`, `consola`, `stock`, `imagen`, `video`, `id_categoria`) VALUES (NULL, 'cosa1', 'asas', '12', 'assasaas', '21', 'asasas', 'awd', '1'), (NULL, 'ffaf', 'affafafafa', '412', 'vfaq', '32', 'waca', 'acw', '4');
UPDATE `videojuegos`.`videogame` SET `nombre` = 'cosa12', `descripcion` = 'asas2', ´precio_dia´ = '122', `consola` = 'assasaas2', `stock` = '212', `imagen` = 'asasas2', `video` = 'awd2', `id_categoria` = '2' WHERE `videogame`.`id_vj` = 18; 
UPDATE `videojuegos`.`videogame` SET `nombre` = 'ffaf22', `descripcion` = 'affafafafa22', `precio_dia` = '41222', `consola` = 'vfaq22', `stock` = '3222', `imagen` = 'waca22', `video` = 'acw22', `id_categoria` = '6' WHERE `videogame`.`id_vj` = 19;
DELETE FROM `videojuegos`.`videogame` WHERE `videogame`.`id_vj` = 18;
DELETE FROM `videojuegos`.`videogame` WHERE `videogame`.`id_vj` = 19;