FROM debian:bookworm

RUN apt-get update -y && apt-get install mariadb-server -y

COPY ./mariadb.cnf /etc/mysql/mariadb.conf.d/

COPY ./create_db.sh /

CMD ["/create_db.sh"]