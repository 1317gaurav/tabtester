FROM php:7.3-apache

COPY src /var/www/html


RUN \
    
    apt-get update \
    && apt-get install -y --no-install-recommends sendmail \
    && rm -rf /var/lib/apt/lists/* \

    && echo "sendmail_path=sendmail -t -i" >> /usr/local/etc/php/conf.d/sendmail.ini \
    
    && echo "smtp=ildcsmtp.office.taboola.com" >> /usr/local/etc/php/conf.d/sendmail.ini \
    && echo "smtp_server=ildcsmtp.office.taboola.com" >> /usr/local/etc/php/conf.d/sendmail.ini \
    
    && echo '#!/bin/bash' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && echo 'set -euo pipefail' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && echo 'echo "172.30.16.58 $(hostname) ildcsmtp.office.taboola.com" >> /etc/hosts' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && echo 'echo "$(head -n 1 /etc/hosts) $(echo $(head -n 1 /etc/hosts) | awk "{print $2}").ildcsmtp.office.taboola.com" >> /etc/hosts' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && echo 'service sendmail restart' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && echo 'source /etc/apache2/envvars' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && echo 'exec apache2 -D FOREGROUND' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && chmod -R 777 /var/www/html/feedback/Feedback/users.json \
    && chmod +x /usr/local/bin/docker-entrypoint-wrapper.sh
   


EXPOSE 80
ENTRYPOINT ["docker-entrypoint-wrapper.sh"]
