# Requirements
To clone and run this application, you will need the following tools installed:
- Git
- Node.js
- XAMPP
- Composer
- IDE (VSCode)

# I. Create a database
<b>1.) Open the XAMPP control panel and start the <i>Apache</i> and <i>MySQL</i> modules.</b><br /><br />

<b>2.) Open any browser and navigate to <i>http://localhost/phpmyadmin/</i></b> <br /><br />

<b>3.) Create a database and name it "laravel_api". </b> <br /><br />

# II. How to run the server
<b>1.) Open any terminal and clone this repository.</b><br /><br />
https://github.com/xhacker14x/tms-api.git<br /><br />

<b>2.) Open the cloned project on your IDE (VSCode).</b> <br /><br />

<b>3.) Run the codes below on the terminal.</b> <br /><br />
composer install<br />
cp .env.example .env<br />
php artisan key:generate<br /><br />

<b>4.) Locate and open the .ENV file and follow the configuration below. </b><br /><br />
DB_HOST=127.0.0.1<br />
DB_PORT=3306<br />
DB_DATABASE=laravel_api <br />
DB_USERNAME=root <br />
DB_PASSWORD= <br /><br />

<b>5.) Create a table by running the codes below on the terminal. </b><br /><br />
php artisan migrate<br /><br />

<b>6.) Start the server by running the codes below on the terminal.</b> <br /><br />
<i>php artisan serve --port=8080</i> <br /><br />

<b>7.) Done, you can now clone and start the ReactJS App.</b> <br /><br />

<b>NOTE:</b> Make sure the API Server is running on this port http://127.0.0.1:8080
