<?php
include 'database.php';
$phone=$_POST["phone1"];
echo("hello");
?>
<?php
function send($sms, $to) {

    $sms = urlencode($sms);
    $token = "5468f5bef8ca0f842d78078a25bf0c66";
    $sendercode="wecare";   
    $url = "http://sms.safechaser.com/httpapi/httpapi?token=".$token."&sender=".$sendercode."&number=".$to.'&route=2&type=1&sms='.$sms;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 50);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $datares = curl_exec($ch);
    curl_close($ch);
    return $datares;
}


$mob = $phone;
$msg = "hello employee you are booked for a service.Please check your profile ";
$mess="Hai , Your are booked for a service";
send($mess,$mob);






?>

