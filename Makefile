all: help
SHELL:=/bin/bash

.PHONY: help up debug down shell install logs test

help: Makefile
	@sed -n 's/^##//p' $<

## install: 	        Install packages.
install:
	export XDEBUG_ENABLED=0;	docker-compose run --rm php composer install
	@ln -sf ../doc/hooks .git/ && echo "hooks initialized"

## up:		        Init environment.
up:
	export XDEBUG_ENABLED=0;	docker-compose up -d

## down: 		        Down environment.
down:
	export XDEBUG_ENABLED=0;	docker-compose down

## logs: 		        Show logs.
logs:
	export XDEBUG_ENABLED=0;	docker-compose logs -f

## shell:                 Interactive shell to use commands inside docker
shell:
	export XDEBUG_ENABLED=0;	docker-compose exec php bash

## all_tests: 		Run all unit tests
all_tests:
	export XDEBUG_ENABLED=0;	docker-compose exec php bin/phpunit -c phpunit.xml