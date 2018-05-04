# install ubuntu
FROM ubuntu:16.04
MAINTAINER kukaro <justkukaro@naver.com>
RUN apt-get -y update && apt-get -y upgrade

# install php
RUN apt-get -y install php

# install apache2
RUN apt-get -y install apache2

# install npm
RUN apt-get -y install nodejs 
RUN apt-get -y install npm

# install bower
RUN npm install -g bower

# Enalbe apache mods
RUN apt install libapache2-mod-php7.0 libapache2-mod-php
RUN a2enmod php7.0
RUN a2enmod rewrite

# Make port 80 available to the world outside
EXPOSE 80

# Import php project
ADD CI /var/www/html/

# Set configulation
ADD 000-default.conf /etc/apache2/sites-available/
ADD apache2.conf /etc/apache2/
ADD servername.conf /etc/apache2/conf-available/

# Restart apache
RUN a2enconf servername

CMD /usr/sbin/apache2ctl -D FOREGROUND
