install: # create dependencies
	composer install

brain-games: # start brain-games
	./bin/brain-games

validate:
	composer validate

lint: # start phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-even: # start game
	./bin/brain-even

brain-calc: # start game
	./bin/brain-calc

brain-gcd: # start game
	./bin/brain-gcd