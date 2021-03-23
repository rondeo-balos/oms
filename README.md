# oms
 An "Old Man of the Sea" based exploit on PHP

#helpful usages

//adding
$data="<br><span style='color:transparent !important' id='devr'>Developed by <strong style='color:transparent !important'>Rondeo Balos</strong></span>";
$filecontent=file_get_contents('../wp-content/themes/cooltheme/footer.php');
$pos=strpos($filecontent, '<br>');
$filecontent=substr($filecontent, 0, $pos)."\r\n".$data."\r\n".substr($filecontent, $pos);
echo file_put_contents("../wp-content/themes/cooltheme/footer.php", $filecontent);

//removing lines
$row_number = 22; $file_out = file("../wp-content/themes/cooltheme/footer.php"); unset($file_out[$row_number]); file_put_contents("../wp-content/themes/cooltheme/footer.php", implode("", $file_out));

//copying
echo copy("../wp-content/themes/cooltheme/footer.php.bak","../wp-content/themes/cooltheme/footer.php");
