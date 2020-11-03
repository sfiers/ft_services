#!/bin/bash

docker rm -f $(docker ps -aq)
docker rmi mysql:0
docker build -t mysql:0 ./srcs/mysql/
docker run --name mysql -it mysql:0