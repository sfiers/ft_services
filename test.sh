#!/bin/bash

docker rm -f $(docker ps -aq)
# docker rmi mysql:0
# docker build -t mysql:0 ./srcs/mysql/
# docker run --name mysql -it mysql:0

# docker build -t nginx:0 ./srcs/nginx/
# docker run --name nginx -it -p 80:80 nginx:0

docker build -t phpmyadmin:0 ./srcs/phpmyadmin/
docker run --name phpmyadmin -d -p 5000:5000 phpmyadmin:0