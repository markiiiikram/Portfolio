if{
$mailheader = "from:" .$name.$surname."<" '$email.">\r\n";

$recipient ="markskobelevs@gmail.com";

mail($recipient,$subject,$message, $mailheader)
}
else{
    die("$Error");
}

