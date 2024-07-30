<?php

$msg = "";
$encode = "";

if ($handle = opendir('.')){
    while (false !== ($file = readdir($handle))){
        if (($file != ".") && ($file != "..")) {
            $msg .= '<li><a href="'.$file.'">'.$file.'</a></li>';
            $base64 = base64_encode(file_get_contents($file));
            $encode .= '<li>
                <label>'.$file.'</label>
                <textarea cols="80" rows="10">data:image/jpeg;base64,'.$base64.'</textarea>
            </li>';
        }
    }

    closedir($handle);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File List</title>
</head>
<body>
    <h2>List files and directories...</h2>
    <p><a href="..\" style="text-decoration: none;">&#xab; Back</a> List of files :</p>
    <ul>
        <?php //echo $msg; ?>
        <?php echo $encode; ?>
    </ul>
</body>
</html>
