## Laravel 5 Skeleton

This is the skeleton I use when starting a new project in Laravel 5. To create this skeleton I did the following:

1. Created a new laravel application using `laravel new l5skel`

2. Ran `php artisan fresh` to remove much of the scaffolding that I didn't want.
 
3. Made `artisan` executable so I can just type `./artisan` instead of `php artisan`.

4. Removed all of the stuff related to `gulp` and `less` etc, as I tend to add back only what I need as I create a new project.

5. Added a controversial `Models` folder under `App`. In most cases this is where I keep my models, but it is easy enough to remove as the application morphs into a more complex structure.

6. Added the `spatie/laravel-tail` package to restore `php artisan tail` functionality.

7. Added the `Illumunate HTML` package to restore Laravel Forms and HTML helper functionality that I loved in Laravel 4.

8. Also moved the `Views` folder from `resources` to `App`, because, well, I prefer it there. :-)

9. Added a basic Bootstrap CSS layout for quickly mocking up new sites.
 
10. Included jQuery and the standard Internet Explorer fixes. This may seem trivial, but it has taken a lot of effort to figure out what files can be loaded from CDNs and what files need to be loaded locally in order for all of this stuff to work correctly.

I have also added a Generic exception class and an email helper class that simplifies the task of sending emails to myself when serious errors occur.

### Contributing To This Project

If you have a good idea for something that I should include in this project, feel free send send a pull request. If you discover any issues, feel free to log an issue.

### License

This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
