FROM php:8.1-apache
LABEL maintainer=compiler@aast.edu
RUN apt update
COPY index.php /var/www/html
COPY indexCalc.js /var/www/html
