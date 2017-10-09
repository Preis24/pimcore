FROM nginx:alpine

COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./web /var/www/web

RUN chown -R nginx:nginx /var/www/web/var