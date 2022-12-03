## Instructions and requirements to run the test locally

To run the test locally, the first thing to keep in mind is that Laravel is a framework for PHP, so you must have a local web server such as Laragon, XAMPP, WAMPP, Vagrant and Laravel Homestead.

<strong>Resource:</strong> <a href="https://fofxacademy.com/how-to-setup-laragon-as-a-web-development-environment/" target="_blank">Laragon environment configuration</a>

Once our environment is configured, we must clone this project, url for cloning:

<strong>URL to clone:</strong> <span>https://github.com/davidsandovalg/test_ingenuity_and_solutions.git</span>

<strong>Resource:</strong> <a href="https://docs.github.com/en/repositories/creating-and-managing-repositories/cloning-a-repository" target="_blank">Cloning a repository</a>

Once the repository is cloned, we look for a file in our main branch called .env.example and for this case we rename the file to .env, where the configuration of this project is located.

Now that we have our .env file renamed, we continue with the execution of the following commands through our console/terminal, being in the main root of this project:

<strong>Step 1:</strong> Command that creates the database structure
<code>php artisan migrate</code>

<strong>Step 2:</strong> Command that automatically generates information in our database
<code>php artisan db:seed --class=DatabaseSeeder</code>

<strong>Step 3:</strong> Command to launch the server of a project/application, this would be running from the root of our app, remember that you must change the ip address to that of your machine and if you have position 80 occupied you can also change it to 3000, 8080, 8082 , etc.
<code>php artisan serve --host 192.168.0.200 --port 80</code>

<strong>Step 4:</strong> We enter our preferred web browser, click on the navigation bar and write the ip address that we assigned in step 3, if you changed port 80 for another, you must write it as follows:
<code>192.168.0.200:3000</code>

At this point, our application should already be working correctly.

## You can also enter the test web server published on free hosting

<strong>Project URL:</strong> <a href="https://davidfernandosandovalgomez.icu/" target="_blank">See web project</a>

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
