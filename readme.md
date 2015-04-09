## Laravel 5 Skeleton App

This is the skeleton app I use when starting a new project in Laravel 5. The default Laravel skeleton app is OK, but
I found myself repeating the same hour's worth of effort each time I used it as the base for a new app, so I decided to
create this skeleton app instead to save myself that time in the future.

To create this skeleton app I did the following:

1. Created a new laravel application using `laravel new l5skel`

2. Ran `php artisan fresh` to remove much of the scaffolding that I didn't want.
 
3. Removed all of the stuff related to `gulp` and `less` etc, as I tend to add back only what I need as I create a new
project.

4. Added the controversial `Models` folder under `App`. In most cases this is where I keep my models, but it is easy
enough to remove as the application morphs into a more complex structure.

5. Moved the `Views` folder from `resources` to `App`, because, well, I prefer it there. :-)

6. Added the `spatie/laravel-tail` package to restore `php artisan tail` functionality.

7. Added the `illuminate/html` package to restore the Laravel Forms and HTML helper functionality that I so loved in
Laravel 4.

8. Changed the `App\Exceptions\Handler` class to log exceptions using `Illuminate\Log` rather than calling the
`parent::report()` method, which calls `Monolog\Logger` directly. I did this because of the next change...

9. Added some code to listen for all `Log` events so that I can email the serious errors to myself.

10. Added a basic Bootstrap CSS layout for quickly mocking up new sites, which  includes jQuery and the standard
Internet Explorer fixes. This may seem trivial, but it has taken a lot of effort to figure out what files can be loaded
from CDNs and what files need to be loaded locally in order for all of this stuff to work correctly.

I have also added a `Generic` exception class and a `QuickMail` helper class, which simplifies the task of sending
emails to myself when serious errors occur.

### Using this package

If you're using this package as the start of a new project, the easist thing to do is probably download the zip file,
unpack that and then run `composer install` to download the dependencies. Don't forget to rename .env.example to .env
and fill in the blanks!

### Contributing To This Project

If you have a good idea for something that I should include in this project, feel free send send a pull request. If you
discover any bugs, feel free to log an issue. You can also contact me via twitter: [https://twitter.com/jamesggordon]

### License

This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
