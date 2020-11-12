# PHP & NGINX Windows services

## Установка PHP и Nginx

### PHP
Скачать и извлечь [PHP7.3](https://windows.php.net/downloads/releases/php-7.3.24-nts-Win32-VC15-x64.zip) например в c:\soft\php

* Положить в корневую папку файлы php-fpm.xml и service.exe
* Отредактировать php.ini
* В файле php-fpm.xml прописать путь до php и указать нужный порт
* Файл service.exe переименовать в php-fpm.exe

Установить php-fpm как сервис:

``php-fpm.exe install``

Запустить сервис:

``php-fpm.exe start``

### Nginx

* Скачать и извлечь [Nginx](https://nginx.org/download/nginx-1.18.0.zip) например в c:\soft\nginx
* Положить в корневую папку файлы nginx-service.xml и service.exe
* Заменить конфигурационный файл nginx ./conf/nginx.conf файлом nginx.conf и отредактировать его под свои хосты
* В файле nginx-service.xml прописать путь до nginx
* Файл service.exe переименовать в nginx-service.exe

Установить nginx как сервис:

``nginx-service.exe install``

Запустить сервис:

``nginx-service.exe start``

### Завершение установки

* Прописать хосты в C:\WINDOWS\System32\drivers\etc\hosts 
* В браузере набрать нужный адрес и убедиться что все работает



