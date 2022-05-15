all: up

up:
	@mkdir -p ./data/web
	@mkdir -p ./data/db
	@docker-compose -f ./srcs/docker-compose.yml up

down: 
	@echo "removing containers & images"
	@docker-compose -f ./srcs/docker-compose.yml down --rmi all


start:
	@echo "starting containers"
	@docker start nginx mariadb wordpress
	
stop:
	@echo "stopping containers"
	@docker stop nginx mariadb wordpress


fclean: down
	@echo "removing volumes"
	@docker volume rm srcs_db;
	@docker volume rm srcs_web;
	@echo "removing data"
	@rm -r ./data
	@docker system prune -a

re: fclean all

.PHONY: all up down fclean re