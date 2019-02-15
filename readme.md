
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

-----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
| Domain | Method    | URI                    | Name             | Action                                                                 | Middleware   |
+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
|        | GET|HEAD  | /                      | home             | App\Http\Controllers\HomeController@index                              | web,auth     |
|        | GET|HEAD  | api/user               |                  | Closure                                                                | api,auth:api |
|        | GET|HEAD  | login                  | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest    |
|        | POST      | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web,guest    |
|        | POST      | logout                 | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web          |
|        | POST      | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest    |
|        | GET|HEAD  | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest    |
|        | POST      | password/reset         | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest    |
|        | GET|HEAD  | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest    |
|        | GET|HEAD  | register               | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest    |
|        | POST      | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web,guest    |
|        | GET|HEAD  | tasks                  | tasks.index      | App\Http\Controllers\TasksController@index                             | web,auth     |
|        | POST      | tasks                  | tasks.store      | App\Http\Controllers\TasksController@store                             | web,auth     |
|        | PUT|PATCH | tasks/{task}           | tasks.update     | App\Http\Controllers\TasksController@update                            | web,auth     |
|        | DELETE    | tasks/{task}           | tasks.destroy    | App\Http\Controllers\TasksController@destroy                           | web,auth     |
+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
