all:
	@echo "Please choose a task."

test:
	phpunit -c phpunit.xml.dist

fix:
	php-cs-fixer fix -v
