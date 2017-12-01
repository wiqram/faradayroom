FROM richarvey/nginx-php-fpm:latest

MAINTAINER vikram bharwani

VOLUME /var/www/html 

COPY . /var/www/html/

WORKDIR /var/www/html

#RUN apt-get update \
#	&& docker-php-source extract \
# 	&& docker-php-ext-install mysqli \
# 	&& docker-php-ext-install pdo_mysql 
#    && apt-get -y install libssl-dev libc-client2007e-dev libkrb5-dev \
#    && docker-php-ext-configure imap --with-imap-ssl --with-kerberos \
#    && docker-php-ext-install imap	
# Overridable environment variables
#	ENV DOCUMENT_ROOT=/var/www/html \
#   PHP_MEMORY_LIMIT=128M \
#   PHP_ERROR_REPORTING="E_ALL & ~E_DEPRECATED & ~E_STRICT"
#RUN echo "HTTP server running on guest" > /var/www/html/index.html
	
# Expose HTTP
EXPOSE 80 443