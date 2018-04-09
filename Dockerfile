# install ubuntu
FROM ubuntu:16.04
MAINTAINER kukaro <justkukaro@naver.com>
RUN apt-get -y update
RUN apt-get -y upgrade

# install php
RUN apt-get -y install php

# install apache2
RUN apt-get -y install apache2

# Enalbe apache mods
RUN apt install libapache2-mod-php7.0 libapache2-mod-php
RUN a2enmod php7.0
RUN a2enmod rewrite

# Make port 80 available to the world outside
EXPOSE 80

ADD CI /var/www/html/app

CMD /usr/sbin/apache2ctl -D FOREGROUND
