FROM ubuntu

RUN apt-get update && apt-get install apache2 php libapache2-mod-php php-mcrypt php-mysql -y

RUN a2enmod rewrite

ENV INSTALL_PATH /var/www/html/wpezops1/

WORKDIR $INSTALL_PATH

COPY . .

EXPOSE 80

CMD apachectl -D FOREGROUND
