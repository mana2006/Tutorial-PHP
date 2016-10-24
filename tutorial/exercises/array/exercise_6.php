<p></p>
<b>6.</b> Write a PHP script which decode the following JSON string.<br>
<i>Sample JSON code :</i><br>
{"Title": "The Cuckoos Calling",<br>
"Author": "Robert Galbraith",<br>
"Detail": {<br>
    "Publisher": "Little Brown"<br>
    }
}<br>
<i>Expected Output : </i> <br>
Title : The Cuckoos Calling<br>
Author : Robert Galbraith<br>
Publisher : Little Brown<br>

<p><b>Answer:</b></p>
<?php 
$stringJson =' {"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
} }';

$decode = json_decode($stringJson, true);
$string = "";

foreach ($decode as $key => $value) {
    if (!is_array($value)) {
        $string .= "$key : $value <br>" ;
    } else {
        foreach ($value as $key => $value1) {
            $string .= "$key : $value1 <br>" ;
        }
    }
}

echo $string ."<br>";


?>

<p></p>

<b>Other way:</b> <br>

<?php 
function w3rfunction($value,$key)
{
    echo "$key : $value"."<br>";
}
$a = '{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail":{ "Publisher": "Little Brown" }  }';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"w3rfunction");
?>