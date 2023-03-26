To run a test project from timedoor you have to : 
    - Run the command git clone <URL repository> to download the project from GitHub.
    - Go to the project directory and run the composer install command to install all the dependencies required by the project.
    - Duplicate the .env.example file and rename it to .env. Adjust database settings such as database name, username, and password in the .env file according to your         database configuration.
    - Run the php artisan key:generate command to generate the required Laravel application key.
    - Run the php artisan migrate command to create the necessary database tables for this project.
    - Run the php artisan db:seed command to enter the required dummy data.
    - Run the php artisan serve command to start up the local web server and start running your application.
