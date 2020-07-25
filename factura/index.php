<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>factura</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="control-bar">
  <div class="container">
    <div class="row">
      <div class="col-2-4">
        <div class="slogan">Facturación </div>
        
      </div>
      <div class="col-4 text-right">
        <a href="javascript:window.print()">Imprimir</a>
      </div><!--.col-->
    </div><!--.row-->
  </div><!--.container-->
</div><!--.control-bar-->

<header class="row">
  <div class="logoholder text-center" >
    <img src="assets/img/logo.png">
  </div><!--.logoholder-->

  <div class="me">
    <p contenteditable>
      <strong>Sistema Tienda Virtual UTN.</strong><br>
      Quesada<br>
      Costa Rica<br>
      
    </p>
  </div><!--.me-->

  <div class="info">
    
  </div><!-- .info -->

  <div class="bank">
  <p contenteditable>
      Web: <a href="">www.utnOnline.com</a><br>
      E-mail: <a href="">jodavasi@hotmail.com</a><br>
      Tel: +506 86418614<br>
      Twitter: @jodavasi
    </p>
  </div><!--.bank-->

</header>


<div class="row section">

	<div class="col-2">
    <h1 contenteditable>Factura</h1>
  </div><!--.col-->

  <div class="col-2 text-right details">
    <p contenteditable>
      Fecha: <input type="text" class="datePicker" /><br>
      Factura #: <input type="text" value="100" /><br>
     Vence: <input class="twoweeks" type="text"/>
    </p>
  </div><!--.col-->
  
  
  
  <div class="col-2">
    

    <p contenteditable class="client">
      <strong>Facturar a</strong><br>
      [Nombre cliente]<br>
      [cedula]<br>
	  [Usuario]<br>
	  
    </p>
  </div><!--.col-->
  
  
 

  

</div><!--.row-->

<div class="row section" style="margin-top:-1rem">
<div class="col-1">
	<table style='width:100%'>
    <thead contenteditable>
	<tr class="invoice_detail">
      <th width="25%" style="text-align">Vendido por</th>
       <!-- <th width="25%">Orden de compra </th> -->
      <th width="20%">Enviar por</th>
      <th width="30%">Términos y condiciones</th>
	 </tr> 
    </thead>
    <tbody contenteditable>
	<tr class="invoice_detail">
      <td width="25%" style="text-align">Tienda Virtual UTN</td>
       <!-- <td width="25%">#PO-2020 </td> -->
      <td width="20%">Correos de Costa Rica</td>
      <td width="30%">Pagado</td>
	 </tr>
	</tbody>
	</table>
</div>

</div><!--.row-->

<div class="invoicelist-body">
  <table>
    <thead contenteditable>
      <th width="5%">Código</th>
      <th width="10%">Descripción</th>
      <th width="15%">Cantidad</th>
      <th width="10%">Precio</th>
    </thead>
    <tbody>
      <tr>
        <td width='5%'><a class="" href="#"></a><span contenteditable>12345</span></td>
        <td width='60%'><span contenteditable>Descripción</span></td>
        <td class="amount"><input type="text" value="1"/></td>
        <td class="rate"><input type="text" value="99" /></td>
        
      </tr>
    </tbody>
  </table>
</div><!--.invoice-body-->

<div class="invoicelist-footer">
  <table contenteditable>
    <tr>
      <td><strong>Total:</strong></td>
      <td id="total_price"></td>
    </tr>
  </table>
</div>


<footer class="row">
  <div class="col-1 text-center">
    <p class="notaxrelated" contenteditable>El monto de la factura incluye el impuesto sobre las ventas.</p>
    
  </div>
</footer>


</body>
</html>