<?php
if( isset($_POST['sub']) ){
  if( !isset($_POST['num'])){
      $error = "لطفا  فیلد را کامل کنید.";
  }else{
  }
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title> php تکلیف </title>
    <link rel="stylesheet" href="numstyle.css" />
  </head>

  <body>
    <div class="container">
      <div class="form">
          <p class="titr"><b>  php پروژه دریافت اعداد با </b><p>
            <form method='POST'>
	              <input type='number' name ='num'  /><br><br>
	              <input type='submit' name='submit' value='Submit'/>
            </form>
            <?php
 $num = $_POST["num"];

function countnum ($num){
if (isset($_POST['submit'])) {
    $arr = []; 

    if($num != -1){
        for($i = 0; $i < 1; $i++) {
            $arr[$i] = $num;
            }
        for($i = 0; $i < 1; $i++) {
            $arr[$i];
            }
        foreach($arr as $number){
         $number;
        }
    }
        elseif($num == -1){

            for($i = 0; $i < 1; $i++) {
                $arr[$i] = $num;
                }
            for($i = 0; $i < 1; $i++) {
                $arr[$i];
                }
                    
    foreach($arr as $number){
        echo $number;
        }
    
    }
}

}
Countnum($num);

?>
        </div>
      </div>
  </body>
</html>
