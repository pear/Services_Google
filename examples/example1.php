<?php
require_once("Google.php");
error_reporting(E_ALL);

$key = "KEY HERE";

// Create the object
$google = new Services_Google($key);

// Setup query options, in this case limit to 100 results total.
$google->queryOptions['limit'] = 100;

// Run the search
$google->search("PEAR");

// Loop through the results, $google->fetch() will return false once
// it reaches the 100th result, or no more results are available.
foreach($google as $key => $result) {
    echo $key."\t".$result->title."\n";
}
?>