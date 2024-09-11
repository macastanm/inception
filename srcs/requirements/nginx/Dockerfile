FROM debian:bullseye

EXPOSE 443

ARG DOMAIN_NAME CERT_DIR CERTIFICATE KEY COUNTRY STATE LOCALITY ORGANIZATION UNIT DOMAIN_NAME

RUN apt update && apt install -y --no-install-recommends \
    nginx \
    openssl

RUN mkdir ${CERT_DIR}

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout ${KEY} \
    -out ${CERTIFICATE} \
    -subj "/C=${COUNTRY}/ST=${STATE}/L=${LOCALITY}/O=${ORGANIZATION}/OU=${UNIT}/CN=${DOMAIN_NAME}"


#COPY index.html /usr/share/nginx/html

COPY ./conf/nginx.conf etc/nginx/

RUN sed -i "s#{{DOMAIN_NAME}}#$DOMAIN_NAME#g" etc/nginx/nginx.conf

RUN sed -i "s#{{CERTIFICATE}}#$CERTIFICATE#g" etc/nginx/nginx.conf

RUN sed -i "s#{{KEY}}#$KEY#g" etc/nginx/nginx.conf

CMD ["nginx", "-g", "daemon off;"]