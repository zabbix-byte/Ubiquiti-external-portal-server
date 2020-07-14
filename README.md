##[Servidor APACHE / NGINX]
- RUTA > guest/s/[id site ubinquiti]
- Es importante una IP V4


##[Dentro de la configuacion del ubinquiti]
- Crear site 
- Crear usuario administrador
- Activar opciones avanzadas del site
- Activar Guest y poner site personalizado ip de servidor de site si utilizas https es importante tener el certificado apache ssl si no no funccionara ademas de usuario ssl en
el ubinquiti
- añadir dentro de la opciones de red la opcion de incio sin contraseña y guest .


##[Instalacion de la api]

- PHP / composer 
- instalar composer en la ruta de la aplicacion 
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

php -r "if (hash_file('sha384', 'composer-setup.php') === 'e5325b19b381bfd88ce90a5ddb7823406b2a38cff6bb704b0acc289a09c8128d4a8ce2bbafcd1fcbdc38666422fe2806') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

php composer-setup.php

php -r "unlink('composer-setup.php');"


##[Instalas la API] 

php composer.phar require art-of-wifi/unifi-api-client

- Opcion 2 
-- dentro del composer JSON añades :

{
    "require": {
        "art-of-wifi/unifi-api-client": "^1.1"
    }
}




##[informacion]
- dbconfig > contiene la conexion con la base de datos Mysql.

- Connection > contiene los parametros de la api y la verificacion de usuario de la base de datos .

- index > contiene la interficie web del login .

- assets > contiene la libreria fundation .

##[Infomacion]

- ztrunk@protonmail.com
