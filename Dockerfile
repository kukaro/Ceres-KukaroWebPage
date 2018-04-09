# install ubuntu
FROM ubuntu:16.04
MAINTAINER kukaro <justkukaro@naver.com>
RUN apt-get -y update
RUN apt-get -y upgrade

# install php
RUN apt-get -y install php

# install apache2
RUN apt-get -y install apache2

# Make port 80 available to the world outside
EXPOSE 80

ADD app /var/www/html/app

CMD /usr/sbin/apache2ctl -D FOREGROUND
