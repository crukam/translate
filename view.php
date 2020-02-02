<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>backend task</title>
</head>
<body>
<Form name ="form1" Method ="Post" ACTION ="view.php">
 <label for="radio_buttom">Select language :</label>
 <P>
<Input type = 'Radio' Name ='language' value= 'french'>French
<Input type = 'Radio' Name ='language' value= 'english'>English 
<Input type = 'Radio' Name ='language' value= 'pirate'>Pirate<P>
<label for="radio_buttom">Select string :</label>
 <P>
 <Input type = 'Radio' Name ='key_string' value= 'HEADER'>HEADER
 <Input type = 'Radio' Name ='key_string' value= 'SUBMIT_BUTTON'>SUBMIT_BUTTON
 <Input type = 'Radio' Name ='key_string' value= 'NEXT_BUTTON'>NEXT_BUTTON
 <Input type = 'Radio' Name ='key_string' value= 'FORM_INTRO'>FORM_INTRO
 <P><P>
  <input type="submit" value="submit">
</Form>
    
</body>
</html>

<?php
  include "module.php";
   $selected_lang = $_POST["language"];
   $selected_keystring =$_POST["key_string"];
   echo key_value($selected_lang,$selected_keystring);
  

?>