<?php
//Get the uploaded file information
$name_of_uploaded_file =
    basename($_FILES['uploaded_file']['name']);

//get the file extension of the file
$type_of_uploaded_file =
    substr($name_of_uploaded_file,
    strrpos($name_of_uploaded_file, '.') + 1);

$size_of_uploaded_file =
    $_FILES["uploaded_file"]["size"]/1024;//size in KBs

//Settings
$max_allowed_file_size = 5000; // size in KB
$allowed_extensions = array("doc", "docx", "pdf", "zip");
$upload_folder = '../uploads/';
//Validations
if($size_of_uploaded_file > $max_allowed_file_size )
{
  $errors .= "\n Size of file should be less than $max_allowed_file_size";
}

//------ Validate the file extension -----
$allowed_ext = false;
for($i=0; $i<sizeof($allowed_extensions); $i++)
{
  if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0)
  {
    $allowed_ext = true;
  }
}

if(!$allowed_ext)
{
  $errors .= "\n The uploaded file is not supported file type. ".
  " Only the following file types are supported: ".implode(',',$allowed_extensions);
}

//copy the temp. uploaded file to uploads folder
$path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
$tmp_path = $_FILES["uploaded_file"]["tmp_name"];

if(is_uploaded_file($tmp_path))
{
  if(!copy($tmp_path,$path_of_uploaded_file))
  {
    $errors .= '\n error while copying the uploaded file';
  }
}

//Creating Mail Varibles
$name = stripslashes($_POST['naam'])."\r\n";
$message = str_replace ("\n", '<br/>', stripslashes($_POST['message']))."\r\n";
$email = stripslashes($_POST['email'])."\r\n";
$adres = stripslashes($_POST['adres'])."\r\n";


$server = "http://www.lannooprint.be";
$subject = "Lannoo online";
$host = "ann.vandommele@lannooprint.be";

$body = <<<EOD
<img src="http://www.lannooprint.be/img/mail/header.png" alt="Lannoo-online" height="93" width="327">
<br><br><br>
$message<br><br><br>
<strong>Naam:</strong> $name<br>
<strong>Email:</strong> $email<br>
<strong>Adres:</strong> $adres<br><br>

<strong>Attachment:</strong> <a href="$server/uploads/$name_of_uploaded_file">$name_of_uploaded_file</a><br>

EOD;

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From:" . $email;
    $headers .= 'Bcc: pieter.denorre@lannooprint.be, wouter.casaert@lannooprint.be ';

$mail_status = mail($host, $subject, $body, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Bedankt voor uw mail.');
        window.location = 'http://www.lannooprint.be';
    </script>
<?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Uw mail is niet verzonden, probeer later opnieuw.');
        window.location = 'http://www.lannooprint.be';
    </script>
<?php }  ?>
<?php
} else {   ?>
      <script language="javascript" type="text/javascript">
          window.location = 'http://www.lannooprint.be';
      </script>
  <?php
  } 
?>
