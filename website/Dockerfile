# Birate Kabanza arthur r0889635
# the image to be used 

FROM ubuntu:22.04

# No interaction while installing or building the image
#  no dialog or question will asked

ENV DEBIAN_FRONTEND noninteractive


# to update the ubuntu when building the image

RUN apt-get update 

# installing the apache2 server 
RUN apt-get -y install apache2

# apache2-utils provides add-on programs usefull for a web server (set of utility programs for web )
RUN apt-get -y install apache2-utils

#  installing the php with version 8.1
RUN apt-get -y install php8.1

# installing the squile modules
 RUN  apt-get install php8.1-sqlite

# provide the php module for the Apache2 server
RUN apt-get -y install libapache2-mod-php

# the php-cgi will help test our build or to interact with external applications
RUN apt install -y php-cgi


# php-fpm used to speed up website performance
# php-mysqli allow to access to mysql database

RUN apt-get install -y php-fpm  php-mysqli

# updating the ubuntu system once again
RUN apt-get update

# removing the original index.html 
RUN rm  /var/www/html/index.html

# copying the index.php from our local host to the html folder of the the ubuntu image 
# COPY instructions let us copy from the host into the image
COPY /sites/index.php /var/www/html

         
# set the port Apache2 listen                  
EXPOSE 80

# to start  the apache2 server

ENTRYPOINT [ "apache2ctl" ]

# to run bapache2 service on the foreground
CMD [  "-DFOREGROUND" ]