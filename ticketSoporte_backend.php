<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/redValor.png" type="image/x-icon">
    <title></title>
</head>
<body>
    
</body>
</html>
<?php
$Device = $_POST['dispositivo'];
$Id = $_POST['id'];
$Problem = $_POST['problem'];
$Support = $_POST['soporte'];

switch($Support){
    case 'Eber':
        header("Location: https://web.whatsapp.com/send?phone=5492616625137&text=+CENTRALRV%24$Device%0A+Usuario+%3A+%24$Id+%0A+Problema%3A+%24$Problem");
        break;
        case 'Tomas':
            header("Location: https://web.whatsapp.com/send?phone=5492613042182&text=+CENTRALRV%24$Device%0A+Usuario+%3A+%24$Id+%0A+Problema%3A+%24$Problem");
            break;
            case 'Gabriel':
               header("Location: https://web.whatsapp.com/send?phone=5492612590713&text=+CENTRALRV%24$Device%0A+Usuario+%3A+%24$Id+%0A+Problema%3A+%24$Problem");
                break;  
}



?>