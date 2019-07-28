<html>
    <head>
        <style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("wt.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body background="wt.jpg">
<center>
<font color="black"><h1><u>White Tiger Zone</u></h1></center>




<p></p><center><table border="2">
<form action="" method=post>
<tr><td>Victim's Email: </td><td><input type=text name=email size=30></td></tr>
<tr><td>Sender name: </td><td><input type=text name=name size=30></td></tr>
<tr><td>Sender's Email Address: </td><td><input type=text name=sender size=30></td></tr>
<tr><td>Subject: </td><td><input type=text name=subject size=30></td></tr>
<tr><td>Content: </td><td><textarea rows=10 cols=30 name=content></textarea></td></tr>
<tr><td><input type=submit value="Send Mail"></td></tr>
</form>
</table></center></font>
</body>
</html>

<?php
$email = $_POST['email'];
$content = nl2br($_POST['content']);
$content .= "";
$name = $_POST['name'];

$sender = $_POST['sender'];

$subject = $_POST['subject'];

$headers = "From: $name "."<".$sender.">\r\n";
//add boundary string and mime type specification
//$headers .= 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//send the email
mail($email, $subject, $content, $headers );

?>
