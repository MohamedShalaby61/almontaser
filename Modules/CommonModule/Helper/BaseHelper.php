<?php

namespace Modules\CommonModule\Helper;

trait BaseHelper
{


  function prepareDataForUpdate($arrayOfData, $column)
  {
    $newArray = [];
    foreach ($arrayOfData as $value) {
      $newArray[$column] = $value;
    }
    return $newArray;
  }
  /**
   * Convert Index Array To Assosiative array with {key:value}
   *
   * @param $arrayOfData  Indexed Array contain values
   * @param $column       Key
   * @return array        Assosiative array with {key:value}
   */
  function prepareData($arrayOfData, $column)
  {
    $newArray = [];
    foreach ($arrayOfData as $value) {
      $newArray[][$column] = $value;
    }
    return $newArray;
  }

  function prepareArray($arrayOfData)
  {
    $preparedData = [];
    foreach ($arrayOfData as $key => $array) {
      $i = 0;
      foreach ($array as $value) {
        $preparedData[$i][$key] = $value;
        $i++;
      }
    }

    return $preparedData;
  }

  function prepareArrayWithNewColumn($arrayOfData, $colName, $colValue)
  {
    $preparedData = [];
    foreach ($arrayOfData as $key => $array) {
      $i = 0;
      foreach ($array as $value) {
        $preparedData[$i][$key] = $value;
        $preparedData[$i][$colName] = $colValue;
        $i++;
      }
            // append new column
    }

    return $preparedData;
  }


  /**
   *  Extract Values of Specific key from Assosiative Aray
   *
   * @param $arrayOfData  Assosiative Array with {key:value}
   * @param $column       Key
   * @return array        Indexed Array containg value of key (ex-> [1,5,8])
   */
  function getArrayByKey($arrayOfData, $column)
  {
    $newArray = [];
    foreach ($arrayOfData as $row) {
      $newArray[] = $row[$column];
    }
    return $newArray;
  }




}