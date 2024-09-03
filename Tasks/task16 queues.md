
## Laravel Queues

        While building your web application, you may have some tasks, such as parsing and storing an uploaded CSV file, that take too long to perform during a typical web request. Thankfully, Laravel allows you to easily create queued jobs that may be processed in the background. By moving time intensive tasks to a queue, your application can respond to web requests with blazing speed and provide a better user experience to your customers.

        Laravel's queue configuration options are stored in your application's config/queue.php 


To set up and use queues in Laravel, you define jobs and workers, configure your queue connection in the .env file, and run the workers using a command like:


## creating a job

php artisan make:job WelcomeEmailJob

## in the Controller 

WelcomeEmailJob::dispatch($user);

## in terminal

php artisan queue:work


