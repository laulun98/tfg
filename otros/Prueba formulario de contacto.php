<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Recoger los datos del formulario
$nombre = htmlspecialchars($_POST['nombre']); // Limpia la entrada
$email = htmlspecialchars($_POST['email']);
$mensaje = htmlspecialchars($_POST['mensaje']);

// Configuración del correo
$destinatario = "tu_email@ejemplo.com"; // ¡Cambia esto!
$asunto = "Nuevo mensaje de contacto desde tu web";
$cuerpo_email = "Nombre: $nombre\\nEmail: $email\\nMensaje:\\n$mensaje";
$headers = "From: $email" . "\\r\\n" .
           "Reply-To: $email" . "\\r\\n" .
           "X-Mailer: PHP/" . phpversion(); // Información del remitente

// Enviar el correo
if (mail($destinatario, $asunto, $cuerpo_email, $headers)) {
    echo "<p>¡Mensaje enviado exitosamente! Gracias por contactarnos.</p>";
} else {
    echo "<p>Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo.</p>";
}

} else {
echo "<p>Acceso denegado. Por favor, usa el formulario.</p>";
}

// Requiere la librería PHPMailer (instalar via Composer o descargar)
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP(); // Usar SMTP
$mail->Host = '[smtp.tudominio.com](http://smtp.tudominio.com/)'; // Tu servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'tu_usuario_smtp';
$mail->Password = 'tu_contraseña_smtp';
$mail->SMTPSecure = 'tls'; // o 'ssl'
$mail->Port = 587; // o 465

$mail->setFrom('info@tudominio.com', 'Tu Nombre');
$mail
?>




<form action="enviar.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" required></textarea>
    <br>
    <button type="submit">Enviar</button>
</form>





<?php
   //Reseteamos variables a 0.
   $nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];   
      $mensaje = $_POST['mensaje'];
      $para = 'andoporto@gmail.com';

      //Creamos cabecera.
      $headers = 'From' . " " . $email . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $subject;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $mensaje;
      $msjCorreo .= "\r\n";

    if (mail($para, $subject, $msjCorreo, $headers)) {
         echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
  }
?>






<form id="main-contact-form" class="contact-form" name="contact-form" action="enviar.php" method="POST">
      <div class="col-sm-5 col-sm-offset-1">
          <div class="form-group">
             <label>Nombre *</label>
             <input type="text" id="nombre" name="nombre" class="form-control" required="required">
           </div>

           <div class="form-group">
              <label>Email *</label>
              <input type="email" id="email" name="email" class="form-control" required="required">
           </div> 

           <div class="form-group">
               <label>Asunto *</label>
               <input type="text" id="subject" name="subject" class="form-control" required="required">
           </div>

           <div class="form-group">
                <label>Mensaje *</label>
                <textarea name="mensaje" id="mensaje" required="required" class="form-control" rows="8"></textarea>
           </div>                        

           <div class="form-group">
                <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg" value="Enviar" />
           </div>                      
      </div> 
</form>


<?php
       //Reseteamos variables a 0.
       $nombre = $email = $subject = $mensaje = $para = NULL;

       if (isset($_POST['submit'])) {

          //Obtenemos valores input formulario
          $nombre = $_POST['nombre'];
          $email = $_POST['email'];
          $subject = $_POST['subject'];   
          $mensaje = $_POST['mensaje'];
          $para = 'andoporto@gmail.com';


          //Compones nuestro correo electronico

          //Incluimos libreria PHPmailer (deberas descargarlo).
          require'class.phpmailer.php';

          //Nuevo correo electronico.
          $mail = new PHPMailer;
          //Caracteres.
          $mail->CharSet = 'UTF-8';

          //De dirección correo electrónico y el nombre
          $mail->From = "info@tudominio.com";
          $mail->FromName = "Nombre de dominio";

          //Dirección de envio y nombre.
          $mail->addAddress($para, $nombre);
          //Dirección a la que responderá destinatario.
          $mail->addReplyTo("info@tudominio.com","Tunombre");

          //BCC ->  incluir copia oculta de email enviado.
          $mail->addBCC("copia@tudominio.com");

          //Enviar codigo HTML o texto plano.
          $mail->isHTML(true);

          //Titulo email.
          $mail->Subject = "Nuestro titulo";
          //Cuerpo email con HTML.
          $mail->Body = "
                  <h1>Envio libreria PHPMailer</h1>

                  Nombre: $nombre<br /> 
                  Email: $email <br />
                  Asunto: $subject <br />
                 Mensaje: $mensaje <br />

          "; 

        //Comprobamos el envio.
        if(!$mail->send()) {                   
            echo "<script language='javascript'>
                alert('fallado');
             </script>";
        } else {
            echo "<script language='javascript'>
                alert('Mensaje enviado, muchas gracias.');
             </script>";
        } 
      }
    ?>