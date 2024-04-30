To run:

docker-compose up -d --build

docker-compose exec php bin/console doctrine:migrations:migrate --no-interaction

To import posts:

docker-compose exec php bin/console app:import-posts   
