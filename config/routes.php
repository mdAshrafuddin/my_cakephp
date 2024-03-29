<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
    /*
     * The default class to use for all routes
     *
     * The following route classes are supplied with CakePHP and are appropriate
     * to set as the default:
     *
     * - Route
     * - InflectedRoute
     * - DashedRoute
     *
     * If no call is made to `Router::defaultRouteClass()`, the class used is
     * `Route` (`Cake\Routing\Route\Route`)
     *
     * Note that `Route` does not do any inflections on URLs which will result in
     * inconsistently cased URLs when used with `{plugin}`, `{controller}` and
     * `{action}` markers.
     */
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {
        /*
         * Here, we are connecting '/' (base path) to a controller called 'Pages',
         * its action called 'display', and we pass a param to select the view file
         * to use (in this case, templates/Pages/home.php)...
         */
        // $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
        // users route
        $builder->connect('/users', ['controller' => 'Users', 'action' => 'index', 'index']);
        $builder->connect('/users/add', ['controller' => 'Users', 'action' => 'add', 'add']);
        $builder->connect('/users/userStatus/{id}/{status}', ['controller' => 'Users', 'action' => 'userStatus', 'userStatus']);
        $builder->connect('/users/edit/{id}', ['controller' => 'Users', 'action' => 'edit', 'edit'],
        ['id' => '\d+', 'pass' => ['id']]);
        $builder->connect('/users/delete/{id}', ['controller' => 'Users', 'action' => 'delete', 'delete'],
        ['id' => '\d+', 'pass' => ['id']]);
        $builder->connect('/users/view/{id}', ['controller' => 'Users', 'action' => 'view', 'view'],
        ['id' => '\d+', 'pass' => ['id']]);
        $builder->connect('/users/login', ['controller' => 'Users', 'action' => 'login', 'login']);
        $builder->connect('/users/singup', ['controller' => 'Users', 'action' => 'singup', 'singup']);
        $builder->connect('/users/logout', ['controller' => 'Users', 'action' => 'logout', 'logout']);

        // Students Route
        $builder->connect('/students', ['controller' => 'Students', 'action' => 'index', 'index']);
        $builder->connect('/students/view/{slug}', ['controller' => 'Students', 'action' => 'view', 'view'],
        ['slug' => '[a-z0-9-_]+', 'pass' => ['slug']]);
        $builder->connect('/students/edit/{slug}', ['controller' => 'Students', 'action' => 'edit', 'edit'],
        ['slug' => '[a-z0-9-_]+', 'pass' => ['slug']]);

        // articles Route
        $builder->connect('/articles', ['controller' => 'Articles', 'action' => 'index', 'index']);
        $builder->connect('/articles/add', ['controller' => 'Articles', 'action' => 'add', 'add']);

        /*
         * ...and connect the rest of 'Pages' controller's URLs.
         */
        $builder->connect('/pages/*', 'Pages::display');

        /*
         * Connect catchall routes for all controllers.
         *
         * The `fallbacks` method is a shortcut for
         *
         * ```
         * $builder->connect('/{controller}', ['action' => 'index']);
         * $builder->connect('/{controller}/{action}/*', []);
         * ```
         *
         * You can remove these routes once you've connected the
         * routes you want in your application.
         */
        $builder->fallbacks();
    });

    /*
     * If you need a different set of middleware or none at all,
     * open new scope and define routes there.
     *
     * ```
     * $routes->scope('/api', function (RouteBuilder $builder) {
     *     // No $builder->applyMiddleware() here.
     *
     *     // Parse specified extensions from URLs
     *     // $builder->setExtensions(['json', 'xml']);
     *
     *     // Connect API actions here.
     * });
     * ```
     */
};
