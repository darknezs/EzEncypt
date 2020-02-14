<?php header("Content-type: text/html; charset=iso-8859-1");
if (!$_GET['id']) {
  echo "server work fine";
}else {
  $userInput = $_GET['id'];

  $saperate = explode("-", $userInput);
  $str = $saperate[0];
  $option = $saperate[1];

  enc($str,$option);
}

function enc($str,$option)
{
  // $str = "abcd";
  $arr = array();
  $str_ascii = array();
  $acii_arr = array();
  $str_enc = "";
  $enc = "";
  for ($i=0; $i < strlen($str); $i++)
  {
    array_push($arr,$str[$i]);
    $str_ascii[$i] = ord($arr[$i])+$option;
    $acii_arr[$i] = $str_ascii[$i];     //ไว้คิดต่อ
    $str_enc = $str_enc.chr($acii_arr[$i]);
  }
   // echo "from enc()-->".$str_enc."<br>";
   echo $str_enc;
   // dec($str_enc);
  // echo ord($arr[0]);   // str --> ascii
}



// function ascii2String()
// {
//   $a=[48, 49, 50];
//   foreach($a as $i)
//   {
//       echo "The character equivalent of
//                    ASCII value of ", $i, " is ";
//       echo chr($i+20), "\n";   //ascii --> str
//       echo "<br>";
//   }
// }


?>
