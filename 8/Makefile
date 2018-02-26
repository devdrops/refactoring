.PHONY: codesniffer

codesniffer:
	docker run -it --rm \
		-v $(CURDIR):/code \
		-w /code \
		devdrops/php-toolbox \
		phpcs --standard=PSR2 .
