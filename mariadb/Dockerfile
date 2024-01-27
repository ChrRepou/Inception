FROM debian:bookworm as builder

RUN apt-get update && apt-get upgrade -y && \
    DEBIAN_FRONTEND=noninteractive apt install -y dirmngr ca-certificates software-properties-common apt-transport-https curl

RUN curl -fsSL http://mirror.mariadb.org/PublicKey_v2 | gpg --dearmor | tee /usr/share/keyrings/mariadb.gpg > /dev/null
RUN echo "deb [arch=amd64,arm64,ppc64el signed-by=/usr/share/keyrings/mariadb.gpg] http://mirror.mariadb.org/repo/11.2/debian/ $(lsb_release -cs) main" | tee /etc/apt/sources.list.d/mariadb.list
RUN apt update
RUN apt install mariadb-server -y
RUN rm -rf /var/lib/apt/lists/*

COPY mariadb.cnf /etc/mysql/my.cnf

RUN mkdir /docker-entrypoint-initdb.d/
COPY init.sql /docker-entrypoint-initdb.d/

RUN mysql_install_db --user=root --datadir=/var/lib/mysql

FROM debian:bookworm

RUN apt-get update && apt-get upgrade -y && \
    DEBIAN_FRONTEND=noninteractive apt install -y dirmngr ca-certificates software-properties-common apt-transport-https curl

RUN curl -fsSL http://mirror.mariadb.org/PublicKey_v2 | gpg --dearmor | tee /usr/share/keyrings/mariadb.gpg > /dev/null
RUN echo "deb [arch=amd64,arm64,ppc64el signed-by=/usr/share/keyrings/mariadb.gpg] http://mirror.mariadb.org/repo/11.2/debian/ $(lsb_release -cs) main" | tee /etc/apt/sources.list.d/mariadb.list
RUN apt update
RUN apt install mariadb-server -y
RUN rm -rf /var/lib/apt/lists/*

RUN mkdir -p /var/run/mysqld/
RUN chown -R mysql:mysql /var/run/mysqld/

COPY mariadb.cnf /etc/mysql/my.cnf

COPY --from=builder /var/lib/mysql /var/lib/mysql

CMD ["mysqld", "--user=mysql", "--console"]
