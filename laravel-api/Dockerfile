# Dockerfile (Laravel)

FROM php:8.0-fpm

# Instalar dependências
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

# Copiar aplicação
COPY . /var/www

# Definir diretório de trabalho
WORKDIR /var/www

# Instalar dependências do Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer install

# Expor porta
EXPOSE 9000
