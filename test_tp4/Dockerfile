FROM internetsystemsconsortium/bind9:9.18

# Copie les fichiers de configuration et de zone
COPY named.conf /etc/bind/named.conf
COPY 2tl7.zone /etc/bind/2tl7.zone

# Expose le port 53 pour les requêtes DNS
EXPOSE 53/udp
EXPOSE 53/tcp

# Commande pour lancer Bind9
CMD ["named", "-g"]

