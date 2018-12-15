## Installation
<p> after clone the project please follow this steps and run this commands </p>

- <code>composer install</code> to install backend 
- <p> after run composer install copy or change .env.example file to .env and change the following fields </p>
    <ol>
    <li> <code> DB_DATABASE=homestead </code> </li>
    <li> <code> DB_USERNAME=homestead </code> </li>
    <li> <code> DB_PASSWORD=secret </code> </li>
    </ol>
- <p> run the following command <code> php artisan key:generate </code> </p>
- <p> run the following command <code> php artisan migrate </code> </p>
- <p> run the following command <code> php artisan db:seed </code> this will generate some articles , categories and add admin user  </p>

<p> admin user to login with: </p>

<ul>
    <li> admin = <code> admin@blog.com </code> </li>
    <li> password = <code> secret </code> </li>
</ul>
