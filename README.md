#### QueenTechSolutions ####
## Requirement ##
# php ^8.0.2 or php 8.1.2
# mysql 8.0

##### or file docker ####
## docker-compose.yml

##### #####  ##### #####  ##### #####  #####  #####  #####
# git clone https://github.com/mostafasamirs/QueenTechSolutions.git

### install  the application ###
# composer install


## 
### run the application database ### 
## connected database name -> queentechsolutions
## or look at .env 
# php artisan migrate:fresh --seed

### run the application storage ###
# php artisan storage:link

### run the application server ###
# php artisan serve
# npm run dev
# http://127.0.0.1:8000
##### #####  ##### #####  ##### #####  #####  #####  #####
