# lumen-generator

!! WORK IN PROGRESS > ANGULAR/VUE GENERATOR !!

Model, controller provider and service generator for lumen 6.x and angular 6/vue2 from DB schema.

## Installation

Use composer to install it in your lumen project.

`composer require rustyphp/lumen-generator`

Modify your bootstrap/app.php providers to add generators to Artisan.


```php
$app->register(rusty\lumenGenerator\Provider\GeneratorServiceProvider::class);
```
## Usage
### Scaffolding from DB

You need a database connection setup in your project.

Build CRUD models and controllers with various commands (List of available commands will be updated with development progress):

```shell
  lumen:ctrl      Generate CRUD controller for a table name.
  lumen:ctrls     Generate CRUD controllers for all tables.
  lumen:model     Generate Eloquent model according to table passed in argument.
  lumen:models    Generate Eloquent models for all tables.
```

Default configuration is the following ( you can override them with -c option in command line to provide another config.php file):

```php
    'lumen_model_namespace'       	=> 'App\Models',
    'lumen_ctrl_namespace'       	=> 'App\Http\Controllers',
    'base_class_lumen_model_name' 	=> \rusty\lumenGenerator\Model\MicroServiceExtendModel::class,
    'base_class_lumen_ctrl_name' 	=> \rusty\lumenGenerator\Controller\CrudExtendController::class,
    'lumen_model_output_path'     	=> app_path() . '/Models',
    'lumen_ctrl_output_path'      	=> app_path() . '/Http/Controllers',
    'no_timestamps'   				=> null,
    'date_format'     				=> null,
	'connection'      				=> null,
	'add_route'      				=> null,
	'add_cache'      				=> null,
```

Use command help for more infos

```shell
$ php artisan lumen:ctrl -h
```
Generation of controllers and models extend lushdigital/microservice-crud.

### Usage of Generated Controllers and models

By default all controllers provide a set of applicable routes what you can add to your routes/web.php:



```php
//for full tables retrieve
$router->get(   '/model',                 'ModelController@index');

//for paginated tables retrieve
$router->get(   '/model',                 'ModelController@get');


$router->get(   '/model/{id}/{relation}', 'ModelController@getRelationList');
$router->get(   '/model/{id}',            'ModelController@show');
$router->post(  '/model',                 'ModelController@store');
$router->put(   '/model/{id}',            'ModelController@update');
$router->delete('/model/{id}',            'ModelController@destroy');
```

You can add all routes to your web.php using -a option in the lumen:ctrls command.


## License
[MIT](https://choosealicense.com/licenses/mit/)
