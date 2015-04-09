## Laravel 5 Skeleton

This is the skeleton I use when starting a new project in Laravel 5. To create this skeleton I did the following:

1. Created a new laravel application using `laravel new l5skel`

2. Ran `php artisan fresh` to remove much of the scaffolding that I didn't want.
 
3. Removed all of the stuff related to `gulp` and `less` etc, as I tend to add back only what I need as I create a new project.

4. Added the controversial `Models` folder under `App`. In most cases this is where I keep my models, but it is easy enough to remove as the application morphs into a more complex structure.

5. Also moved the `Views` folder from `resources` to `App`, because, well, I prefer it there. :-)

6. Added the `spatie/laravel-tail` package to restore `php artisan tail` functionality.

7. Added the `illuminate/html` package to restore Laravel Forms and HTML helper functionality that I so loved in Laravel 4.

8. Changed the App\Exceptions\Handler class to log exceptions using `Illuminate\Log` rather than going directly to `Monolog\Logger/`.

9. Added some code to catch all errors being thrown at the log so I can email them to myself.

10. Added a basic Bootstrap CSS layout for quickly mocking up new sites, which  includes jQuery and the standard Internet Explorer fixes. This may seem trivial, but it has taken a lot of effort to figure out what files can be loaded from CDNs and what files need to be loaded locally in order for all of this stuff to work correctly.

I have also added a Generic exception class and an email helper class that simplifies the task of sending emails to myself when serious errors occur.

### Contributing To This Project

If you have a good idea for something that I should include in this project, feel free send send a pull request. If you discover any bugs, feel free to log an issue.

### License

This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
