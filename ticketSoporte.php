<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./img/redValor.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Ticket Soporte</title>
</head>
<body>
<section class="soporte">
    <div class="container">
        <center>
        <h3>TICKET SOPORTE</h3>
        <img src="./img/redValor.png" alt="redValor.png">
        </center>
        <br>
    </div>
    <div class="container">
        <form action="ticketSoporte_backend.php" method="POST" id="SoporteForm" class="login-input" >
            <fieldset>
                <div class="mb-3">
                    <input type="text" id="negrita" value='CentralRV' disabled>
                    <input type="text" name="dispositivo" id="dispositivo" placeholder="Dispositivo" title="Dispositivo" required><b>* (Obligatorio)</b> <i class="bi bi-info-circle-fill" data-bs-toggle="modal" data-bs-target="#ayudaDispositivo"></i>

                    <!--Ayuda dispositivo-->
                    <div class="modal fade" id="ayudaDispositivo" tabindex="-1" aria-labelledby="ayudaMapsLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ayudaMapsLabel">¿Dónde obtengo el número de dispositivo?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                <p>1) Buscá en la parte inferior derecha el Nombre en MicroSip</p>
                                    <img class="img-fluid" src="./img/posicion.png" alt="ayudaMaps1.jpg" style="max-height: 300px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="id" value=" <?php echo $Id; ?>">

                    <div class="modal fade" id="ayudaRedValor" tabindex="-1" aria-labelledby="ayudaMapsLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ayudaMapsLabel">¿Dónde obtengo el id?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                <p>1) Buscá tu id en NeoTel</p>
                                    <img class="img-fluid" src="./img/NeoTel.png" alt="ayudaMaps1.jpg" style="max-height: 300px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </fieldset>
            <br>
            <div class="mb-3">
                <label for="txtSoporte" class="form-label">
                <div id="negrita">
                Ingresar Id * (Obligatorio)
                <i class="bi bi-info-circle-fill" data-bs-toggle="modal" data-bs-target="#ayudaRedValor"></i>
                </div>
                <br>
                    <span>Id Usuario</span>
                    <input type="number" name="id" placeholder="Ej:1234" title="Ej:1234" required>
                </label>
            </div>

            
            
            <span>
                <div id="negrita">
                Seleccionar soporte * (Obligatorio)
                </div>

            </span>
            <br>
            
            <div class="mb-3">
                <select name="soporte" id="soporte" required>
                    <option value="Eber" title="Eber">Eber</option>
                    <option value="Tomas" title="Tomas">Tomas</option>
                    <option value="Gabriel" title="Gabriel">Gabriel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="txtSoporte" class="form-label">Comentanos el problema:</label>
                <textarea class="form-control" id="txtSoporte" rows="3" name="problem" required></textarea>
            </div>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <input class="btn btn-success" type="submit" value="Reportar">
                <input  class="btn btn-danger" type="reset" value="Cancelar" onclick="alert('Se canceló su ticket, muchas gracias por usar el soporte de Red Valor');">
            </div>
        </form>
    </div>
</section>
</body>
</html>