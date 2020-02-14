<?php header("Content-type: text/html; charset=iso-8859-1");
if (!$_GET['id']) {
  echo "server work fine";
}else{
  $userInput = $_GET['id'];

  $saperate = explode("-", $userInput);
  $str = $saperate[0];
  $option = $saperate[1];

  dec($str,$option);

}

function dec($str,$option)
{
  $arr = array();
  $str_ascii = array();
  $acii_arr = array();
  $str_enc = "";
  $enc = "";
  for ($i=0; $i < strlen($str); $i++)
  {
    array_push($arr,$str[$i]);
    $str_ascii[$i] = ord($arr[$i])-$option;
    $acii_arr[$i] = $str_ascii[$i];     //ไว้คิดต่อ
    $str_enc = $str_enc.chr($acii_arr[$i]);
  }
  echo $str_enc;
  // echo "from dec()-->".$str_enc."<br>";
}

?>
