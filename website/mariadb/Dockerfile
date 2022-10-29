FROM ubuntu:22.04
ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update
RUN apt-get -y install curl
RUN apt-get -y install apt-transport-https curl
RUN  curl -o /etc/apt/trusted.gpg.d/mariadb_release_signing_key.asc 'https://mariadb.org/mariadb_release_signing_key.asc'
RUN sh -c "echo 'deb https://ftp.nluug.nl/db/mariadb/repo/10.7/ubuntu jammy main' >>/etc/apt/sources.list"
RUN apt-get update
RUN apt-get -y install mariadb-server
# ENTRYPOINT [ "service","mariadb","start"]
ENTRYPOINT [ "mysqld" ]
CMD [ "-DFOREGROUND" ]

EXPOSE 3306

# ENV MYSQL_ROOT_PASSWORD gagaarthur
# ENV  MYSQL_ROOT_NAME Birate
# COPY ./mariadb/students(1).sql  /docker-entrypoint-initdb.d






# RUN apt-get update

# RUN apt install -y mysql-server

# ENV  MYSQL_DATABASE=milestone1
# ENV  MYSQL_USER=Birate
# ENV  MYSQL_PASSWORD=gagaarthur 
# RUN apt-get update
# ENV  MYSQL_DATABASE=milestone1
# ENV  MYSQL_USER=kabanza
# ENV  MYSQL_PASSWORD=gagaar
# COPY  ./milestone1 docker-entrypoint-initdb.d
# RUN apt install -y systemd
# RUN apt install -y tcl

# RUN  usermod -d /var/lib/mysql/ mysql
# # RUN service start mysql.service
# COPY ./database/students(1).sql /docker-entrypoint-initdb.d/init.sql

# CMD service mysql start
          








# RUN apt-get update

# RUN  apt-get install apt-transport-https curl\
# curl -o /etc/apt/trusted.gpg.d/mariadb_release_signing_key.asc 'https://mariadb.org/mariadb_release_signing_key.asc'\
#  sh -c "echo 'deb https://mariadb.mirror.wearetriple.com/repo/10.6/ubuntu jammy main' >>/etc/apt/sources.list"\
# apt-get update \
# apt-get install -y mariadb-server


# RUN  mysql - u root
