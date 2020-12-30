<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Floating WhatsApp Button Demo</title>
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="floating-wpp.css">
    <script type="text/javascript" src="floating-wpp.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif
        }
    </style>
</head>

<body>
    <div id="myButton"></div>
</body>

<script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '5491133359850',
            popupMessage: 'Hello, how can we help you?',
            message: "I'd like to order a pizza",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Welcome!',
            headerColor: 'crimson',
            backgroundColor: 'crimson',
            buttonImage: '<img src="burger.svg" />'
        });
    });
</script>

</html>
?>
