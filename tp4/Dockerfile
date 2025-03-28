FROM ubuntu/bind9


COPY ./config/named.conf /etc/bind/named.conf
COPY ./config/2tl2-7.zone /etc/bind/2tl2-7.zone


RUN apt-get update && apt-get -y install nano	
RUN chown -R bind:bind /etc/bind && chmod -R 777 /etc/bind

CMD ["/usr/sbin/named", "-g", "-c", "/etc/bind/named.conf", "-u", "bind"]
