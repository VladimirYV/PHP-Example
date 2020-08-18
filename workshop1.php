<?php
$str1 = "A 'quote' is <b>bold</b>";

echo $str1."<BR>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities ($str1);

// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str1, ENT_QUOTES);
?>