## Middlelware
    - Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application. 

## types of middleware
    - Included in Laravel 
        -  Default Middleware Groups
        -  like: 
              -  Illuminate\Cookie\Middleware\EncryptCookies
              -  Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.
        -  API Default Middleware Groups
        -  like:
              -   Illuminate\Routing\Middleware\SubstituteBindings.
    - Additional middleware written by developer
## Registering Middleware
    - Global Middleware
        -  running during every HTTP request.
        -   The append method adds the middleware to the end of the list of global middleware
        -   If you would like to add a middleware to the beginning of the list, you should use the prepend method
    - Assigning Middleware to Routes 
        - You may assign multiple middleware to the route by passing an array of middleware names to the middleware method:
        - middleware([First::class, Second::class]);
## making new middleware
    - php artisan make:middleware Owner  //in cmd
    - write the logic in handle method 
    - add middleware()  to the route
 