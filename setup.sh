#!/bin/bash

echo "\n#--------------------------MINIKUBE SETUP--------------------------------\n"

#checking if brew is installed
which -s brew
if [[ $? != 0 ]] ; then
	echo "Installing Brew..."
	rm -rf $HOME/.brew && git clone --depth=1 https://github.com/Homebrew/brew $HOME/.brew && export PATH=$HOME/.brew/bin:$PATH && brew update && echo "export PATH=$HOME/.brew/bin:$PATH" >> ~/.zshrc &> /dev/null
fi

#checking if minikube is installed
which -s minikube
if [[ $? != 0 ]] ; then
	echo -ne "\033[1;31m+>\033[0;33m Minikube installation ...\n"
	if brew install minikube &> /dev/null
	then
		echo -ne "\033[1;32m+>\033[0;33m Minikube installed ! \n"
	else
		echo -ne "\033[1;31m+>\033[0;33m Error... During minikube installation. \n"
		return 0
	fi
fi

echo "set minikube_home"
export MINIKUBE_HOME=/Users/$(whoami)/goinfre

echo "Deleting previous cluster if there is one"
minikube delete

echo "Starting Minikube (it might take a while)"
minikube start --vm-driver=virtualbox
eval $(minikube docker-env)

echo "\n#-------------------------------- LUNCH DASHBOARD ----------------------------\n"
minikube dashboard &

echo "\n#-------------------------- METALLB CONFIG ------------------------------\n"

kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/metallb.yaml
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"

#ConfigMap MetalLB
kubectl apply -f ./srcs/yaml/metallb-configmap.yaml

# echo "\n#----------------------------- NGINX  ----------------------------\n"

#remove existing nginx image
docker rmi imagenginx

#buld nginx image
docker build -t imagenginx ./srcs/nginx/

#nginx deployment and service
kubectl apply -f ./srcs/yaml/nginx.yaml