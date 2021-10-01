<?php declare(strict_types=1); header('Set-Cookie: cross-site-cookie=bar; SameSite=None; Secure', false); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Prueba BECK:BAI - Síntomas de ansiedad</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
<body>
<div class="container">
        <h1 class="display-3">BECK:BAI</h1>
        <p class="text-justify"><strong>INSTRUCCIONES:</strong> En el recuadro de abajo hay una lista que contiene los síntomas más comunes de la ansiedad. Lea cuidadosamente cada afirmación e indique cuánto le ha molestado cada síntoma durante la última semana, inclusive hoy, marcando con una x según la intensidad de la molestia..</p>
        <form method="POST" action="VerificarDatos.php/"> 
        <!--Pregunta 1-->
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Inventario de síntomas de ansiedad (BECK:BAI)</a>
                        </h6>
                    </div>
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">  
                                    <br>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-left">Reactivo</th>
                                                <th scope="col" class="text-center">Poco o nada</th>
                                                <th scope="col" class="text-center">Más o menos</th>
                                                <th scope="col" class="text-center">Moderadamente</th>
                                                <th scope="col" class="text-center">Severamente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left">1. Entumecimiento, hormigueo de una o varias partes de su cuerpo</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase1" id="HORMIGUEO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase1" id="HORMIGUEO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase1" id="HORMIGUEO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase1" id="HORMIGUEO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">2. Sentir oleadas de calor (bochorno)</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase2" id="BOCHORNO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase2" id="BOCHORNO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase2" id="BOCHORNO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase2" id="BOCHORNO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">3. Debilitamiento de las piernas</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase3" id="PIERNAS" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase3" id="PIERNAS" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase3" id="PIERNAS" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase3" id="PIERNAS" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">4. Dificultad para relajarse</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase4" id="RELAJARSE" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase4" id="RELAJARSE" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase4" id="RELAJARSE" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase4" id="RELAJARSE" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">5. Miedo a que pase lo peor</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase5" id="PEOR" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase5" id="PEOR" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase5" id="PEOR" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase5" id="PEOR" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">6. Sensación de mareo</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase6" id="MAREO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase6" id="MAREO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase6" id="MAREO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase6" id="MAREO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">7. Opresión en el pecho o latidos acelerados</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase7" id="OPRESION" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase7" id="OPRESION" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase7" id="OPRESION" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase7" id="OPRESION" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">8. Inseguridad</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase8" id="INSEGURIDAD" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase8" id="INSEGURIDAD" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase8" id="INSEGURIDAD" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase8" id="INSEGURIDAD" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">9. Terror</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase9" id="TERROR" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase9" id="TERROR" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase9" id="TERROR" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase9" id="TERROR" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">10. Nerviosismo</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase10" id="NERVIOSISMO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase10" id="NERVIOSISMO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase10" id="NERVIOSISMO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase10" id="NERVIOSISMO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">11. Sensación de ahogo</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase11" id="AHOGO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase11" id="AHOGO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase11" id="AHOGO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase11" id="AHOGO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">12. Manos temblorosas</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase12" id="MANOS" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase12" id="MANOS" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase12" id="MANOS" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase12" id="MANOS" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">13. Cuerpo tembloroso</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase13" id="CUERPO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase13" id="CUERPO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase13" id="CUERPO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase13" id="CUERPO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">14. Miedo a perder el control</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase14" id="CONTROL" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase14" id="CONTROL" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase14" id="CONTROL" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase14" id="CONTROL" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">15. Dificultad para respirar</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase15" id="RESPIRAR" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase15" id="RESPIRAR" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase15" id="RESPIRAR" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase15" id="RESPIRAR" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">16. Miedo a morir</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase16" id="MORIR" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase16" id="MORIR" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase16" id="MORIR" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase16" id="MORIR" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">17. Asustado</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase17" id="ASUSTADO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase17" id="ASUSTADO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase17" id="ASUSTADO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase17" id="ASUSTADO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">18. Indigestión o malestar estomacal</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase18" id="INDIGESTION" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase18" id="INDIGESTION" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase18" id="INDIGESTION" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase18" id="INDIGESTION" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">19. Debilidad</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase19" id="DEBILIDAD" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase19" id="DEBILIDAD" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase19" id="DEBILIDAD" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase19" id="DEBILIDAD" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">20. Ruborizarse</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase20" id="RUBORIZARSE" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase20" id="RUBORIZARSE" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase20" id="RUBORIZARSE" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase20" id="RUBORIZARSE" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">21. Sudoración (no debida al calor)</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase21" id="SUDORACION" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase21" id="SUDORACION" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase21" id="SUDORACION" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="frase21" id="SUDORACION" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>                                         
                                        </tbody>
                                    </table> 
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <br>
                                    <div class="card">
                                        <div class="card-body">                   
                                            <p class="text-left">A partir de un nivel de ansiedad “Moderado” (puntaje de 16 – 30), es necesario referir al/la usuario/a a valoración psiquiátrica.</p>
                                        </div>
                                    </div>
                                </div> 
                            </div>   
                        </div>
                    </div>
                </div>                
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                    </div>
                    </div> 
            </form>
</div>
</div>
<footer class="container mt-5">
  <p>Desarrollado por <a target="_blank" href="https://osvaldogonzalez.name/"> Osvaldo Noe Gonzalez Del Rio</a> &copy; <?php echo date("Y"); ?> <a href="https://github.com/OsvaldoGDelRio">GitHub</a></p>
</footer>
</main><!-- /.container -->
</div>
</div>
</body>
</html>  