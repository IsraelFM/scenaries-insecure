build:
	docker-compose build

up:
	docker-compose up

prune:
	docker system prune -a -f --volumes

down:
	docker-compose down

removeall:
	docker-compose rm -v -s 

sh\:learsi:
	docker-compose exec --user=root learsi sh
	
sh\:webserver:
	docker-compose exec --user=root webserver sh

sh\:database:
	docker-compose exec --user=root database sh