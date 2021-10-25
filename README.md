## About Freelancer

It was develop using laravel 8.

I am creating a digital freelance site where users post some basic information about themselves and an hourly rate in a currency of their choosing. Anyone can view a specific user on the platform and view their hourly rate in any currency.

I used service container and interface for switch between Local and External Exchange rate

I used https://exchangeratesapi.io/ external Exchange rate, It can be improve by using authorize version

## HOW to install

1.  > composer install / update
2.  > Update .env according to your need, .env.example is provided you may rename this to .env
3.  > if you use .env.example provide need to run following commad to have sqlite DB
    > touch database/database.sqlite
4.  > you may need to change EXCHANGE_URL at env.example to currency exchange api.
5.  > php artisan serve

## How to test and run

### from terminal / command prompt nun the following command

1.  > php artisan test
2.  > php artisan serve

## Note

It was created a very basic view with form inputs no form, Frontend validation and error handeling is not in place but in controller validation is in place.
