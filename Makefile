UNAME := $(shell uname -s)
COMPOSE=docker-compose
RUN=$(COMPOSE) run --rm tools
COMPOSER=composer
SYMFONY=app/console

all: configure start install

configure:
	@touch ./data/.bash_history
	@echo "WWW_DATA_UID=`id -u`\nWWW_DATA_GUID=`id -g`\nLOCAL_IP=`ip route get 1 | awk '{print $$NF;exit}'`" | tee docker/settings/env_access > /dev/null
	$(COMPOSE) build

start:
	$(COMPOSE) up -d

install: composer

composer:
	$(RUN) $(COMPOSER) install --no-interaction --prefer-dist

cs:
	$(RUN) bin/php-cs-fixer fix
