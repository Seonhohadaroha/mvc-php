# Arquitectura MVC

App realizada en __PHP__ con arquitectura Modelo - Vista - Controlador *(MVC)*, se implementan los principios __SOLID__, tambien se implenta __PDO__ para el manejo de la Base de Datos.

Cuenta con uso de __constantes__, archivos __.htaccess__

## Carpeta config

Contiene las variables de configuración y conexión de base de datos, lo que facilita, la rápida puesta en marcha del proyecto.

## Carpeta controller

Esta carpeta es donde deben ir todos los controladores de la aplicación, ya que los archivos están configurados de tal manera que se puedan leer los controladores desde esta carpeta.

## Carpeta Models

Contiene todos los modelos __(tablas)__ de la base de datos.

## Carpeta Views

El proyecto se ha desarrollado de tal manera que los archivos de __header.php__ y __footer.php__ son estáticos teniendo un área en el body de la página que es la que va cambiando a medida que se va navegando por la App.

Esta carpeta contiene cada una de la vistas que son requeridas, lo que hace el código flexible y de fácil mantenimiento.

## Carpeta libraries

La clase __Controller__ es la que contiene los métodos model() y view() que le dan la funcionalidad al proyecto de modelo, vista, controlador.

La clase __Core__ se encarga de tomar de la URL los parámetros necesarios, para de ellos sacar el *controlador*, el *método* y los parámetros.

La clase __DB__ es la encargada de conectarse a la base de datos en conjunto con las constantes pasadas desde el archivo config.php en la carpeta __config__ , esta clase es la que ejecuta los queries, realiza consultas parametrizadas, obtiene todos o un registro de las tablas, contador de registros devueltos.
