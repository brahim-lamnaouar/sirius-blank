user := $(shell id -u)
group := $(shell id -g)

dc := USER_ID=$(user) GROUP_ID=$(group) docker-compose
php := $(dc) run --rm -w /var/www -p 8000:8000 php php

.PHONY: help
help: ## Show this help manual
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: dev
dev: ## Lance le serveur de développement
	$(php) -S 0.0.0.0:8000 -t public -d display_errors=1

.PHONY: clean
clean: ## Clean containers
	$(dc) -f docker-compose.yml down --volumes