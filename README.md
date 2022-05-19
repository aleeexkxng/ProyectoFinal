## ProyectoFinal

Nombre pagina: El rincon de boomer

---
## Integrantes del equipo:
-Alejandro Chávez Gómez
-Andrea Livier Camarena Álvarez


## Descripción proyecto:

El rincon del boomer es un pagina pensada para fungir como el centro de ayuda de miles de usuarios, estos usuarios pueden ser de cualquier edad, desde personas con mas experiencia que puedan ayudar a otros, hasta jovenes que busquen solucionar algun problema de "Adulto independiente". 

Nuestro sitio vive por y para los usuarios y nuestra principal diferencia es que se somos un sitio enteramente dedicado a nuestro topico, ya que somos concientes que existen por internet muchos otros blogs pero muchas veces puedes perderte en el mar de topicos que manejan, aquí tienes todo lo que necesitas en un mismo lugar. 

## Instalación:

1. Clonar proyecto: `git clone https://github.com/aleeexkxng/ProyectoFinal
2. Mover al directorio del proyecto con: `cd ProyectoFinal`
3. Realizar la instalacion de dependencias con : `composer install`
4. Crear un archivo .env en base al env.example con el comando : `cp .env.example .env`
5. Generar llave de encriptación con: `php artisan key:generate`
6. Configurar los datos de mailtrap en el archivo: `.env`
7. Crear la base de datos en tu sistema gestor de bases de datos: `CREATE DATABASE ProyectoFinal`
8. Configurar nombre de base de datos en .env 
9. Correr migraciones con: `php artisan migrate`
10. Ejecutar seeds(Para rellenar con los datos de prueba): `php artisan db:seed`



## Correos y contraseñas admin y usuario:

### Admin:
alex@test.com<br>
password

### Usuario:
livi@test.com<br>
password
