<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="css/main.css">
    <title>Compra de plugin</title>
</head>
<body>
    <h1>Alejandro Leal</h1>
    <?php
      $var = 1;
      $var2 = 2;

      echo "Resultado: ".$var + $var2;
    ?>
    <p> Una vez realizado su pago, se enviara a WhatsApp <br> donde podrás compartirme el comprobante de pago <br> y por medio del chat te compartiré el plugin <br> <strong>menu-digita.zip</strong></p>
    <p> Contacto directo: <a href="https://wa.me/522761018606">WhatsApp</a></p>
    <script src="https://www.paypal.com/sdk/js?client-id=BAAxJSwtGHntvbdbtwkg93JlSOOfwmuoPWK07thxV6OusIWOE94SbU_4UTBIKDqYd1UkZas5jbN2mc3tvw&components=hosted-buttons&disable-funding=venmo&currency=USD"></script>
    <div id="paypal-container-9767L96S3X54E"></div>
    <script>
      paypal.HostedButtons({
        hostedButtonId: "9767L96S3X54E",
      }).render("#paypal-container-9767L96S3X54E")
    </script>
</body>
</html>