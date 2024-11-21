FROM ubuntu/apache2:2.4-24.04_edge

RUN apt update && apt upgrade -y
RUN apt install libapache2-mod-php8.3 -y
RUN apt install php8.3-mysql -y
RUN apt install curl -y
RUN apt install nano -y
RUN apt install iproute2 -y
RUN apt install sudo -y

RUN useradd -ms /bin/bash gabriel
RUN usermod -aG sudo gabriel

USER gabriel