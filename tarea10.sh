#!/bin/bash

echo "Iniciando configuracion de firewall - Ejercicio 10"

#Rechazando las conexiones por la interfaz eth0
sudo iptables -I INPUT -i eth0  -j DROP
sudo iptables -A OUTPUT -o eth0  -j DROP

#Permitiendo las conexiones por la interfaz eth1
sudo iptables -A INPUT -i eth1  -j ACCEPT
sudo iptables -A OUTPUT -o eth1  -j ACCEPT

#sudo iptables -L -nv -line--numbers
echo "Fin de la configuracion de firewall - Ejercicio 10"
#fin del archivo
