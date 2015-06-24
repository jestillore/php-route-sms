<?php
/**
 * Created by PhpStorm.
 * User: cerberus
 * Date: 6/25/15
 * Time: 12:09 AM
 */

namespace Jestillore\PhpRouteSms;


use Illuminate\Support\Facades\Facade;

class PhpRouteSms extends Facade {

    public static function getFacadeAccessor() {
        return 'Jestillore\PhpRouteSms\RouteSms';
    }

}