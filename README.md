Инструкция к запуску
1 docker-compose up -d --build
2 docker-compose exec app bash
3 composer install
4 php artisan migrate:fresh --seed
 
