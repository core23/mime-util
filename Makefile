all:
	@echo "Please choose a task."

cs:
	vendor/bin/php-cs-fixer fix --verbose

cs_dry_run:
	vendor/bin/php-cs-fixer fix --verbose --dry-run

test:
	vendor/bin/phpunit -c phpunit.xml.dist
