
1 - Build and start the image from your terminal:
docker-compose build
make start
make composer-install

2 - Add domain to local 'hosts' file:
127.0.0.1    localhost

3 - Set key for application:
make ssh
php artisan key:generate

4- Make sure that you have installed migrations:
make migrate

5 - Go to localhost:8084

6- Have Fun!

Requests:

GET '/' ==> home (redirects to either login or tasks)
GET 'login' ==> login page
POST 'login' ==> posts credentials to validator
GET 'register' ==> register page
POST 'register' ==> posts registered info and seeds to database
GET 'tasks' ==> gets tasks of user
POST 'tasks' ==> create a new task
PATCH 'tasks/{task}' ==> updates task (mark as done)
DELETE 'tasks/{task}' ==> delete task
