<?php

echo "\nRubén : Dejé la instalación de XDebug a la mitad. Entiendo que sencillamente instalar la extensión no es suficiente... Mis pasos :\n1- Instalé la extensión (no funcionaba).\n2- Instalé xDebug en MacOS usando HomeBrew... La extensión de VS Code continuaba sin funcionar.\nEste tutorial que está muy bien si usas PC : https://www.youtube.com/watch?v=HrQWtbxY1Hs\nUsé el INSTALLATION WIZARD copiando y pegando TODO el texto de XAMPP (http://localhost/dashboard/phpinfo.php) y obteniendo así instrucciones de la web oficial de Xdebug\n\n3- Regresé al Terminal e hice lo que verás a continuación :\n\n\n~ % php -v\n   (PHP 8.3.9)\n   with Xdebug v3.3.2, Copyright (c) 2002-2024, by Derick Rethans\n   with Zend OPcache v8.3.9, Copyright (c), by Zend Technologies\n\n~ % cd xdebug-3.3.2\ncd: no such file or directory: xdebug-3.3.2\n\n~ % phpize\nCannot find config.m4.\nMake sure that you run '/usr/local/bin/phpize' in the top level source directory of the module\n\n~ % brew install php && brew install autoconf (en este punto hizo un UPDATE de HomeBrew + update de PHP + instaló una serie de php dependencies + ME DA UNOS CAVEATS) - LOS REPRODUZCO COMENTADOS EN EL CÓDIGO DEBAJO DE ESTE ECHO + termina dando un ==> Summary 🍺  /usr/local/Cellar/php/8.3.11: 524 files, 87.2MB + hace un 'brew cleanup php' y un 'brew clenup' eliminando versiones anteriores de PHP y del propio HomeBrew... Terminada la limpieza me da los mismos CAVEATS añadiendo : Warning: autoconf 2.72 is already installed and up-to-date.\n\n~ % phpize\nCannot find config.m4.\nMake sure that you run '/usr/local/bin/phpize' in the top level source directory of the module\n\n~ % brew services start php\n==> Tapping homebrew/services\n==> Successfully started `php` (label: homebrew.mxcl.php)\n\n~ % php-config --version\n8.3.11\n\n~ % /Applications/XAMPP/xamppfiles/bin/phpize-8.2.4\nCannot find config.m4.\nMake sure that you run '/Applications/XAMPP/xamppfiles/bin/phpize-8.2.4' in the top level source directory of the module\n\n\n4- Xdebug existe, pero está instalado en el directorio DOWNLOADS : /downloads/xdebub-3.3.2/xdebub-3.3.2/xdebug.ini !! (brew no busca el lugar indicado para descomprimir e instalar, lo hace directamente en downloads, pero los tutoriales no advierten de ello)\n5- La ruta a php.ini : /Applications/XAMPP/xamppfiles/etc/php.ini\n\n\n6- Regresé al Terminal :\nfrankpulidoalvarez@Franks-iMac Downloads % cd xdebug-3.3.2\nfrankpulidoalvarez@Franks-iMac xdebug-3.3.2 % cd xdebug-3.3.2\nfrankpulidoalvarez@Franks-iMac xdebug-3.3.2 % phpize\nConfiguring for:\nPHP Api Version:         20230831\nZend Module Api No:      20230831\nZend Extension Api No:   420230831\nfrankpulidoalvarez@Franks-iMac xdebug-3.3.2 % ./configure\n...";

// Los CAVEATS antes de dar el SUMMARY y comenzar con el cleanup de PHP y del propio HomeBrew
/*
==> Caveats
To enable PHP in Apache add the following to httpd.conf and restart Apache:
    LoadModule php_module /usr/local/opt/php/lib/httpd/modules/libphp.so

    <FilesMatch \.php$>
        SetHandler application/x-httpd-php
    </FilesMatch>

Finally, check DirectoryIndex includes index.php
    DirectoryIndex index.php index.html

The php.ini and php-fpm.ini file can be found in:
    /usr/local/etc/php/8.3/

To start php now and restart at login:
  brew services start php
Or, if you don't want/need a background service you can just run:
  /usr/local/opt/php/sbin/php-fpm --nodaemonize
*/


// Los CAVEATS una vez hecho el cleanup de PHP y del propio HomeBrew : IDÉNTICO AL ANTERIOR salco el warning final sobre autoconf 2.72
/*
==> Caveats
==> php
To enable PHP in Apache add the following to httpd.conf and restart Apache:
    LoadModule php_module /usr/local/opt/php/lib/httpd/modules/libphp.so

    <FilesMatch \.php$>
        SetHandler application/x-httpd-php
    </FilesMatch>

Finally, check DirectoryIndex includes index.php
    DirectoryIndex index.php index.html

The php.ini and php-fpm.ini file can be found in:
    /usr/local/etc/php/8.3/

To start php now and restart at login:
  brew services start php
Or, if you don't want/need a background service you can just run:
  /usr/local/opt/php/sbin/php-fpm --nodaemonize
Warning: autoconf 2.72 is already installed and up-to-date.
To reinstall 2.72, run:
  brew reinstall autoconf
*/

?>
