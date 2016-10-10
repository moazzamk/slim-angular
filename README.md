# Slim Angular Sample Application

This application finds prime numbers for a given threshold.


## Install the Application

Run this commands from the directory in the project's root directory

    php composer.phar install
    cd public; bower install


* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can also run this command. 

	php -S localhost:8000 -t public 

Run this command for PHP specs

	bin/phpspec run -vvv --format=pretty spec
	
Run this command for JS specs

    karma start

