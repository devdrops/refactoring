.PHONY: complexity

complexity:
	docker run -it --rm \
		-v $(CURDIR):/code \
		-w /code \
		devdrops/php-toolbox \
		phpmd src text /code/ruleset.xml
