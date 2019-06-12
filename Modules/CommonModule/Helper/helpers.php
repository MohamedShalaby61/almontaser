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
if (!function_exists('yajra_lang')){
    function yajra_lang(){
        $yajra_trans =  [
            "sProcessing"=> __('commonmodule::main.download'),
            "sLengthMenu"=> __('commonmodule::main.show')." _MENU_".__('commonmodule::main.records'),
            "sZeroRecords"=> __('commonmodule::main.zero_record'),
            "sEmptyTable"=> __('commonmodule::main.none_record_table'),
            "sInfo"=> __('commonmodule::main.showing')." ".__('commonmodule::main.records').__('commonmodule::main.ofthe')." _START_ ".__('commonmodule::main.of')." _END_ ".__('commonmodule::main.ofatotalof')." _TOTAL_ ".__('commonmodule::main.records'),
            "sInfoEmpty"=> __('commonmodule::main.zero_records'),
            "sInfoFiltered"=> "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix"=> "",
            "sSearch"=> __('commonmodule::main.search'),
            "sUrl"=> "",
            "sInfoThousands"=> ",",
            "sLoadingRecords"=> "Cargando...",
            "oPaginate"=> [
                "sFirst"=> __('commonmodule::main.first'),
                "sLast"=> __('commonmodule::main.last'),
                "sNext"=> __('commonmodule::main.next'),
                "sPrevious"=> __('commonmodule::main.previous'),
            ],
            "oAria"=> [
                "sSortAscending"=> "=> Activar para ordenar la columna de manera ascendente",
                "sSortDescending"=> "=> Activar para ordenar la columna de manera descendente"
            ],
        ];
        return json_encode($yajra_trans,JSON_UNESCAPED_UNICODE);
    }
}
