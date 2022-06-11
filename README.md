# Juego Cuatro En Linea - Adaptación del ambiente de trabajo

Si sigue las instrucciones a continuación, podrá jugar al mítico cuatro en línea en su computadora programado en **PHP**. Se requieren dos jugadores que se enfrentarán localmente hasta que uno de los dos consiga ganar.

## Requerimientos
Para empezar, es _necesario_ que tenga instalado correctamente en su computadora:
- **[Docker Desktop](https://www.docker.com/get-started/)**
- **[DDEV](https://ddev.readthedocs.io/en/stable/)**
- **[GIT](https://git-scm.com/book/es/v2/Inicio---Sobre-el-Control-de-Versiones-Instalaci%C3%B3n-de-Git)**

Cada hipervinculo lo redireccionará a las páginas oficiales de cada programa. Simplemente siga las instrucciones de instalación dependiendo su sistema operativo.

## Obtener el código
Una vez instalados los requerimientos puede descargar el código para luego continuar con las configuraciones del juego, en este caso clonaremos el repositorio:
1. En consola utilice <code>cd</code> hasta llegar a la ubicación donde desee.
2. Allí utilice <code>mkdir "nombre"</code> para crear un directorio nuevo y asignarle un nombre. Luego, muévase al mismo utilizando <code>cd "nombre"</code> nuevamente.
3. Utilice el comando <code>git clone https://github.com/Gonzacaser/cuatroenlinea</code> para clonar la carpeta _cuatroenlinea_, allí están todos los archivos de nuestro juego.
4. Use <code>cd cuatroenlinea</code> una vez más para ingresar a la carpeta clonada.

## Ejecutar Docker Desktop
Es importante abrir Docker, seguir las instrucciones y asegurarse que se esté ejecutando antes de configurar DDEV.

## Configurar DDEV
Como este programa utiliza DDEV debe ser configurado manualmente para cada proyecto. Para ello, dentro de la misma carpeta:
1. Primero hay que ingresar <code>ddev config</code> esto nos pedirá que ingresemos:
    - Proyect Name: puede ser cualquiera, si se deja en blanco será _cuatroenlinea_.
    - Docroot Location: este campo suele dejarse en blanco ya que los archivos del programa están en el mismo directorio.
    - Proyect Type: en nuestro caso debe ser _**laravel**_
2. Aunque ya deberíamos estar en condiciones de usar <code>ddev start</code> primero debemos instalar **composer** para ello ingresamos <code>ddev composer install</code> (Esto puede demorar un tiempo)
3. Crear el archivo de ambiente para el proyecto **.env**. Para ello utilizamos <code>cp .env.example .env</code>
4. Crear una clave de autenticación para el proyecto, basta con escribir <code>php artisan key:generate</code>

## Correr el juego
Si todo salió bien y no obtuvimos ningún mensaje de error finalmente estamos en condiciones de hacer <code>ddev start</code>. Debemos obtener una salida similar:

![image](https://user-images.githubusercontent.com/102709364/173168781-981b6cec-b6da-42fa-8474-888792d6e5a3.png)

Ahora podemos hacer <code>CTRL + CLICK</code> en alguno de los dos links y seremos redireccionados a la página de **Laravel** en nuestro navegador:

![image](https://user-images.githubusercontent.com/102709364/173168825-269ffa9b-8cb0-4a05-a66a-5a43b2cae3d8.png)

_**Felicidades!**_ Una vez aquí podemos jugar al _4 En Linea_ simplemente agregando <code>/jugar/1</code> al final de la URL en mi caso <code>https://cuatroenlinea.ddev.site/jugar/1</code>:

![image](https://user-images.githubusercontent.com/102709364/173169009-ff904874-90ec-4a22-bdb4-a9c55a334c89.png)

## Cerrar la aplicación
No se recomienda cerrar la terminal deteniendo los programas a la fuerza. Incluso algunos procesos podrían persistir en segundo plano. Por eso utilizaremos <code>ddev stop</code> con esto se nos indicará que se eliminan los contenedores, y una vez el proyecto sea detenido podremos utilizar <code>exit</code> y cerrar Docker Desktop y/o el navegador también.
