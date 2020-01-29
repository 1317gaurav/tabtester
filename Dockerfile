FROM php:7.3-apache

COPY src /var/www/html

# https://github.com/docker-library/wordpress/issues/30#issuecomment-351462895
# https://github.com/docker-library/postgres/issues/296#issuecomment-308698059
RUN \
    #
    # Install sendmail
    apt-get update \
    && apt-get install -y --no-install-recommends sendmail \
    && rm -rf /var/lib/apt/lists/* \
    #
    # Configure php to use sendmail
    && echo "sendmail_path=sendmail -t -i" >> /usr/local/etc/php/conf.d/sendmail.ini \
    #
    # Create script to use as new entrypoint, which
    # 1. Creates a localhost entry for container hostname in /etc/hosts
    # 2. Restarts sendmail to discover this entry
    # 3. Calls original docker-entrypoint.sh
    && echo '#!/bin/bash' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && echo 'set -euo pipefail' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && echo 'echo "127.0.0.1 $(hostname) localhost localhost.localdomain" >> /etc/hosts' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && echo 'echo "$(head -n 1 /etc/hosts) $(echo $(head -n 1 /etc/hosts) | awk "{print $2}").localdomain" >> /etc/hosts' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && echo 'service sendmail restart' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && echo 'source /etc/apache2/envvars' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && echo 'exec apache2 -D FOREGROUND' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
    && chmod +x /usr/local/bin/docker-entrypoint-wrapper.sh

# RUN apt-get update && \
#     apt-get install -y sendmail sendmail-cf m4 && \
#     yes 'y' | sendmailconfig && \
#     echo "$(head -n 1 /etc/hosts) $(echo $line | awk '{print $2}').localdomain" >> /etc/hosts && \
#     echo 'sendmail_path = "/usr/sbin/sendmail -t -i"' > /usr/local/etc/php/conf.d/mail.ini

# RUN apt-get update && \
#     apt-get install -y msmtp && \
#     apt-get clean && \
#     mkdir -p  /etc/msmtp && \
#     echo "FromLineOverride=YES" >> /etc/msmtp/msmtp.conf && \
#     echo 'sendmail_path = "/usr/bin/msmtp -t"' > /usr/local/etc/php/conf.d/mail.ini

EXPOSE 80
ENTRYPOINT ["docker-entrypoint-wrapper.sh"]
# CMD ["apache2-foreground"]
