
1 - Build and start the image from your terminal:<br>
<b>docker-compose build</b><br>
<b>make start</b><br>
<b>make composer-install</b><br>

2 - Add domain to local 'hosts' file:<br>
<b>127.0.0.1    localhost</b>

3 - Set key for application:<br>
<b>make ssh</b><br>
<b>php artisan key:generate</b>

4- Make sure that you have installed migrations:<br>
<b>make migrate</b>

5 - Go to:<br>
<b>localhost:8084</b>

6- Have Fun!

Requests:

GET '/' ==> home (redirects to either login or tasks)<br>
GET 'login' ==> login page<br>
POST 'login' ==> posts credentials to validator<br>
GET 'register' ==> register page<br>
POST 'register' ==> posts registered info and seeds to database<br>
GET 'tasks' ==> gets tasks of user<br>
POST 'tasks' ==> create a new task<br>
PATCH 'tasks/{task}' ==> updates task (mark as done)<br>
DELETE 'tasks/{task}' ==> delete task<br>
