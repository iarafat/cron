**Practice with cron job using laravel task scheduling.**

Cron jobs will select a random word from the console command WordOfTheDay class array and send emails to every user with the word.

##### For local testing
* git clone https://github.com/iarafat/cron.git
* composer install
* cp .env.example .env (Put DB and Mail credential)
* php artisan key:generate
* php artisan migrate:fresh --seed
* (* * * * * php /full_path/cron/artisan schedule:run >> /dev/null 2>&1
)
* php artisan schedule:run


##### Articles
1. https://en.wikipedia.org/wiki/Cron
2. https://tutsforweb.com/how-to-set-up-task-scheduling-cron-job-in-laravel/
3. https://appdividend.com/2018/03/01/laravel-cronjob-scheduling-tutorial/
4. https://www.cloudways.com/blog/laravel-cron-job-scheduling/
5. https://scotch.io/@Kidalikevin/how-to-set-up-cron-job-in-laravel
6. https://code.tutsplus.com/tutorials/tasks-scheduling-in-laravel--cms-29815
