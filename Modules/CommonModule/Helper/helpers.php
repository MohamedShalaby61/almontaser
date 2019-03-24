<?php
/**
 * Created by PhpStorm.
 * User: mallahsoft
 * Date: 3/6/19
 * Time: 12:11 PM
 */

if (!function_exists('ValueOf')) {

    function ValueOf($object, $lang, $variable)
    {
        if (isset($object->translate('' . $lang->lang)->$variable)) {
            $newVar = $object->translate('' . $lang->lang)->$variable;
        } else {
            $newVar = "";
        }
        return $newVar;
    }
}

