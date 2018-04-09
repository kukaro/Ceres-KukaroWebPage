# install ubuntu
FROM ubuntu:16.04
RUN apt-get -y update

# install php
RUN apt-get -y install php

# Make port 80 available to the world outside
EXPOSE 80

# run bash
RUN ls
