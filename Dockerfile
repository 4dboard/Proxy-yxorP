FROM donpablonow/yxorp:latest

# add bitbucket and github to known hosts for ssh needs
WORKDIR /root/.ssh
RUN chmod 0600 /root/.ssh \
    && ssh-keyscan -t rsa bitbucket.org >> known_hosts \
    && ssh-keyscan -t rsa github.com >> known_hosts

##
## Node Build Tools
##

# no need to cache clean in non-final build steps
ENV PATH /var/www/node_modules/.bin:$PATH
ENV NODE_PATH=/var/www/node_modules
WORKDIR /var/www/app

##
## We Are Go for Bower
##

# If you were to use Bower, this might be how to do it
# COPY ./bower.json .
# RUN bower install --allow-root

# add custom php-fpm pool settings, these get written at entrypoint startup
ENV FPM_PM_MAX_CHILDREN=20 \
    FPM_PM_START_SERVERS=2 \
    FPM_PM_MIN_SPARE_SERVERS=1 \
    FPM_PM_MAX_SPARE_SERVERS=3

RUN rm -r /var/www/app

WORKDIR /var/www/app

RUN git clone https://github.com/4dboard/proxy-yxorp /var/www/app

COPY --chown=www-data:www-data . .

# be sure nginx is properly passing to php-fpm and fpm is responding
HEALTHCHECK --interval=5s --timeout=3s \
  CMD curl -f http://localhost/cockpit || exit 1

WORKDIR /var/www/app/public
EXPOSE 80 443 9000 9001

CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]