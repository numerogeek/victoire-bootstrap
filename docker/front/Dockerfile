FROM nginx:1.9

RUN apt-get update && apt-get install -y \
    libicu-dev \
    git

RUN rm /etc/nginx/conf.d/default.conf
