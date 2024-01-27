FROM debian:bookworm

RUN DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get upgrade -y
RUN apt install apache2 wget unzip -y

RUN apt-get install php8.2 php8.2-cli php8.2-common \
	php8.2-imap php8.2-redis php8.2-snmp php8.2-xml \
	php8.2-mysqli php8.2-zip php8.2-mbstring php8.2-curl libapache2-mod-php -y

RUN cd /var/www/html && wget https://wordpress.org/latest.zip && unzip latest.zip && rm latest.zip
RUN cd /var/www/html/ && chown -R www-data:www-data wordpress/ && \
	chown -R www-data:www-data wordpress/ && \
	find wordpress/ -type d -exec chmod 755 {} \; -o -type f -exec chmod 644 {} \;

COPY wp-config.php /var/www/html/wordpress/wp-config.php
COPY wordpress.conf /etc/apache2/sites-available/wordpress.conf

RUN a2enmod rewrite
RUN a2ensite wordpress.conf

RUN apachectl -t

CMD ["apachectl", "-D", "FOREGROUND"]
