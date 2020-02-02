
   
      <?php
       include "data.php";
       /*----------------------------------------------------*
        * php function                                       *
        * parameter:key_string                               *
        * return: default key_value                          *
        * type:string                                        *
        *----------------------------------------------------*/
       function key_english($key){
           $ass_arr = fetch_data("english");
           return $ass_arr[$key];
       }

       /*------------------------------------------------------*
        *  php function                                        *
        *  parameter: language, key_string                     *
        *  return: key_value                                   *
        *  type: string                                        *
        *------------------------------------------------------*/ 
       function key_value($lang,$key_string){
        $ass_array= fetch_data($lang);
        return  strlen($ass_array[$key_string])>0 ? $ass_array[$key_string]: key_english($key_string);;
       }
     
      ?>
    
