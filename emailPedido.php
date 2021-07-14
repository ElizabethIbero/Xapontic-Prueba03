<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    require $_SERVER['DOCUMENT_ROOT'].'/imagen_digital/activos/lib/vendor/autoload.php';

    $to = $_SESSION["emailCliente"];
    $cliente = $_SESSION["administrador"];
    $asunto = "Confirmación pedido Xapontic";

    $msgHTML = "<div style='
        width: 80%;
        padding: 15px;
        font-family: arial, helvetica, sans-serif;
        font-size: 14px;'>";

        $msgHTML = $msgHTML."Estimado(a) ".$cliente.":<br><br>";
        $msgHTML = $msgHTML."Se ha colocado una orden de compra con los siguientes productos: <br><br>";

        $msgHTML = $msgHTML."<table border='0' cellpadding='5' cellspacing='1' style='font-family:arial, helvetica, sans-serif; font-size:14px; background:rgb(106,35,136);'>";
        
        $msgHTML = $msgHTML."<tr><td colspan='4' style='font-size:16px;font-weight:bold;color:#FFFFFF'>Orden No: ".$idPedido."</td></tr>";

        $msgHTML = $msgHTML."<tr style='background:rgb(255,255,255); font-size:16px'>";
        $msgHTML = $msgHTML."<th align='left' style='min-width:400px;'>Producto</th><th align='right' style='min-width:150px;'>Precio</th><th>Cantidad</th><th align='right' style='min-width:150px;'>Subtotal</th>";
       
        for ($i=0; $i<count($carrito); $i++){
            $msgHTML = $msgHTML."<tr style='background:#FFFFFF';>";
            $msgHTML = $msgHTML."<td>".$carrito[$i]["producto"]."</td>";
            $msgHTML = $msgHTML."<td align='right'>".number_format($carrito[$i]["precio"],2,".",",")."</td>";
            $msgHTML = $msgHTML."<td align='center'>".$carrito[$i]["cantidad"]."</td>";
            $msgHTML = $msgHTML."<td align='right'>".number_format($carrito[$i]["precio"]*$carrito[$i]["cantidad"],2,".",",")."</td>";
            $msgHTML = $msgHTML."</tr>";
        }
        
        $msgHTML = $msgHTML."<tr style='background:rgb(235,235,235);'>";
        $msgHTML = $msgHTML."<td align='right' colspan='4'>";

        $msgHTML = $msgHTML."<table border='0' cellpadding='5'>";
        $msgHTML = $msgHTML."<tr>";
        $msgHTML = $msgHTML."<td align='right'>Subtotal:</td>";
        $msgHTML = $msgHTML."<td align='right'>".number_format($totalSinIVA,2,".",",")."</td>";
        $msgHTML = $msgHTML."</tr>";

        $msgHTML = $msgHTML."<tr>";
        $msgHTML = $msgHTML."<td align='right'>IVA:</td>";
        $msgHTML = $msgHTML."<td align='right'>$".number_format($iva,2,".",",")."</td>";
        $msgHTML = $msgHTML."</tr>";

        $msgHTML = $msgHTML."<tr>";
        $msgHTML = $msgHTML."<td align='right'>Envío:</td>";
        $msgHTML = $msgHTML."<td align='right'>".number_format($envio,2,".",",")."</td>";
        $msgHTML = $msgHTML."</tr>";

        $msgHTML = $msgHTML."<tr>";
        $msgHTML = $msgHTML."<td align='right' style='font-size:16px;font-weight:bold;'>Total:</td>";
        $msgHTML = $msgHTML."<td align='right' style='font-size:16px;font-weight:bold;'>".number_format($totalPagar,2,".",",")."</td>";
        $msgHTML = $msgHTML."</tr>";
        $msgHTML = $msgHTML."</table>";

        $msgHTML = $msgHTML."</td></tr>";

        $msgHTML = $msgHTML."</table><br><br>";

        $msgHTML = $msgHTML."Inmediatamente procesaremos su orden.<br><br>";
        $msgHTML = $msgHTML."Cordialmente, <br><br><br> Xapontic - Yomolatel";
    $msgHTML = $msgHTML."</div>";
    
    $mail = new PHPMailer;
   
    $mail->isSMTP();
    $mail->SMTPDebug  = 0;
    $mail->DebugOutput = 'html';
    
    //$mail->Host = 'smtp.gmail.com'; // si se usa gmail como host

    $mail->Host = 'smtp.office365.com';

    $mail->SMTPAuth  = true;
   
            $mail->Username = "a2084045@correo.uia.mx";
            $mail->Password = "Tel3620#";
            
            $mail->SMTPSecure = 'tls';
			$mail->Port = 587;
			$mail->CharSet = 'UTF-8';
    
    $mail->setFrom('a2084045@correo.uia.mx', 'Xapontic');
    $mail->addReplyTo('vaneliz3620@hotmail.com', 'proyecto xapontic');
    $mail->addAddress($to);

    $mail->Subject = $asunto;

    $mail->isHTML(true);
    $mail->Body    = $msgHTML;

    

    if (!$mail->send()) {
        $flagEmail = false;
    }    

    ?>