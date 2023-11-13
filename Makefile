install: # create dependencies
	composer install

brain-games: # start brain-games
	./bin/brain-games

validate:
	composer validate