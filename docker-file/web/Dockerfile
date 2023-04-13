# Use official version 7.0 PHP image
FROM php:7.0-apache
# Update all packages
RUN apt-get update
# Add nano text editor saying yes to install commands
RUN apt-get install -y nano

# Install PostgreSQL related extension with "docker-php-ext-install"
# libpq-dev provides minimum PostgreSQL binaries
# mbstring helps deal with multibyte encodings in PHP for different languages
# cleaning of packages done at the end
# since this source code was originally in another language, this may be unecessary for English
RUN  set  -ex  apk  --no-cache add postgresql-dev libpq-dev
RUN  apt-get   install   -y   libpq-dev   \
    &&   docker-php-ext-install  pdo  pdo_pgsql  pgsql  mbstring \
    && apt-get clean autoclean && apt-get autoremove --yes

# Copy PHP configuration file to the container
COPY   ./php.ini   /usr/local/etc/php/
