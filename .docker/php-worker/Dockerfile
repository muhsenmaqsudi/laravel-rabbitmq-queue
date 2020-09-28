FROM muhsenmaqsudi/laravel_progress

RUN apt-get update && \
    apt-get install -y supervisor

COPY ./supervisor  /etc/supervisor/

ENTRYPOINT ["/usr/bin/supervisord", "-n", "-c",  "/etc/supervisor/supervisord.conf"]

WORKDIR /etc/supervisor/conf.d/
