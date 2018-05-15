# install ubuntu
FROM ubuntu:16.04
MAINTAINER kukaro <justkukaro@naver.com>
RUN apt-get -y update && apt-get -y upgrade

# install php
RUN apt-get -y install php
RUN apt-get -y install php7.0-mysql

# install apache2
RUN apt-get -y install apache2

# install git
RUN apt-get -y install git

# install npm
RUN apt-get -y install nodejs 
RUN apt-get -y install npm
RUN apt-get install -y build-essential
RUN cp /usr/bin/nodejs /usr/bin/node

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
RUN rm /var/www/html/index.html

# Set configulation
ADD 000-default.conf /etc/apache2/sites-available/
ADD apache2.conf /etc/apache2/
ADD servername.conf /etc/apache2/conf-available/
ADD bower.json /var/www/html
ADD .bowerrc /var/www/html

# Restart apache
RUN a2enconf servername

# Bower install
RUN cd /var/www/html/ && bower install --allow-root

CMD /usr/sbin/apache2ctl -D FOREGROUND