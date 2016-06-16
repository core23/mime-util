all:
	@echo "Please choose a task."

cs:
	php-cs-fixer fix --verbose

cs_dry_run:
	php-cs-fixer fix --verbose --dry-run

test:
	phpunit -c phpunit.xml.dist
