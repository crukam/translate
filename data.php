<?php
   /*---------------------------------------------*
    * php function (fetching data from json file) *
    * parameter: language                         *
    * return: json data                           *
    * type: associative array                     *
    *---------------------------------------------*/
   function fetch_data($language){
       if(strlen($language)){
        $file_name= $language.".json";
        $json_data = file_get_contents($file_name);
        return json_decode($json_data,true);
       }
    }
?>