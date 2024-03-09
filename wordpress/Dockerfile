FROM debian:bookworm

RUN apt-get update && apt-get upgrade -y
RUN apt-get install nginx wget unzip -y

RUN apt-get install php8.2 php8.2-cli php8.2-common \
    php8.2-imap php8.2-redis php8.2-snmp php8.2-xml \
    php8.2-mysqli php8.2-zip php8.2-mbstring php8.2-curl -y

RUN cd /var/www/html && wget https://wordpress.org/latest.zip && unzip latest.zip && rm latest.zip
RUN chown -R www-data:www-data /var/www/html/wordpress && \
    find /var/www/html/wordpress/ -type d -exec chmod 755 {} \; -o -type f -exec chmod 644 {} \;

COPY wp-config.php /var/www/html/wordpress/wp-config.php
COPY nginx.conf /etc/nginx/sites-available/default

CMD ["nginx", "-g", "daemon off;"]
