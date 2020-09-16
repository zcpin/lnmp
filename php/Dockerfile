FROM php:7.4-fpm-alpine

RUN sed -i  's/dl-cdn.alpinelinux.org/mirrors.tuna.tsinghua.edu.cn/g' /etc/apk/repositories \ 
&& docker-php-ext-install pdo_mysql \
&& apk add ${PHPIZE_DEPS} \
&& pecl install redis-5.3.1 \
&& docker-php-ext-enable redis \
&& apk del ${PHPIZE_DEPS}