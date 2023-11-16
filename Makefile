install: # create dependencies
	composer install

brain-games: # start brain-games
	./bin/brain-games

validate:
	composer validate

lint: # start phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin

