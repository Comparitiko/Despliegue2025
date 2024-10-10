FROM ubuntu/apache2:2.4-24.04_edge

RUN apt update && apt upgrade -y
RUN apt install libapache2-mod-php8.3 -y
RUN apt install php8.3-mysql -y
RUN apt install curl -y
RUN apt install nano -y
RUN apt-get update && apt-get install -y iproute2