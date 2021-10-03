all:
	mkdir -p /home/hcharlsi/data/wordpress
	mkdir -p /home/hcharlsi/data/mariadb
	cd ./srcs && docker-compose up --build -d

utils:
	sudo apt-get -y update
	sudo apt-get -y upgrade
	sudo apt-get install curl
	sudo apt-get install apt-transport-https
	sudo apt-get install ca-certificates
	sudo apt-get install software-properties-common

docker:
	curl -fsSl https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
	sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"
	sudo apt-get update
	apt-cache policy docker-cesudo
	sudo apt-get install docker-ce
	sudo apt-get install -y pip
	sudo pip install docker-compose
	sudo usermod -aG docker $$(whoami)
	systemctl restart docker

clean:
	docker-compose -f ./srcs/docker-compose.yml down

fclean: clean
	sudo rm -rf /home/hcharlsi/data/wordpress
	sudo rm -rf /home/hcharlsi/data/mariadb
	docker rmi -f $$(docker images -qa)
	docker volume rm $$(docker volume ls -q)
	docker system prune -a --force

.PHONY: utils docker clean fclean