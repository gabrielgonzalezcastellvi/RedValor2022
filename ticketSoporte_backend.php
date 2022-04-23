<?php
$Device = $_POST['dispositivo'];
$Id = $_POST['id'];
$Problem = $_POST['problem'];
$Support = $_POST['soporte'];

if(!empty($Problem)){
$to = 'gabrielubuntu320@gmail.com';
$asunto = 'Soporte Nuevo Ticket de: '.$Id;
$problem_send = "De: $Id \n";
$problem_send .= "Problema: $Problem";

mail($to, $asunto, $problem_send);

switch($Support){
    case 'Eber':
        header("Location: https://api.whatsapp.com/send?phone=5492616625137&text= CENTRALRV$Device%0A Usuario : $Id %0A Problema: $Problem");
        break;
        case 'Tomas':
            header("Location: https://api.whatsapp.com/send?phone=5492613042182&text= CENTRALRV$Device%0A Usuario : $Id %0A Problema: $Problem");
            break;
            case 'Gabriel':
                header("Location: https://api.whatsapp.com/send?phone=5492612590713&text= CENTRALRV$Device%0A Usuario : $Id %0A Problema: $Problem");
                break;  
}

}

?>