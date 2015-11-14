<?php
// For PHP 5 and up
# accept a term (keyword)
# respond with a value
//$query = $_REQUEST['q'];
header("Content-type: text/xml");
print("");
$string = <<<XML
<entries>
  <definition name="definition">
     a statement of the exact meaning of a word, especially in a dictionary.
   </definition>
  <definition name="bar">
     a place that sells alcholic beverages      
   </definition>
  <definition name="ajax">
       technique which involves the use of javascript and xml
   </definition>
</entries>

XML;
$xml = new SimpleXMLElement($string);
echo $xml->asXML();
//print $query;
//print "<br>";
//print($definition[$query]);
?>
