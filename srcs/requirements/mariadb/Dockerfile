FROM debian:bullseye

EXPOSE 3306

RUN apt update && apt upgrade -y && apt install -y mariadb-server

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/.

COPY tools/mariadb-run.sh /bin/

RUN chmod +x /bin/mariadb-run.sh

ENTRYPOINT ["sh", "/bin/mariadb-run.sh"]