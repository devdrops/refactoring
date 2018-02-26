.PHONY: unusedcode

unusedcode:
	docker run -it --rm \
		-v $(CURDIR):/code \
		-w /code \
		devdrops/php-toolbox \
		phpmd src text unusedcode
