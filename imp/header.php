<?php
    include_once 'backend/mysql.php';
    session_start();
?>

<html lang="de">
<head>
    <title>
        Arctice Minecraft
    </title>

    <link rel="icon" type="image/x-icon" href="/Arctice/favicon.ico">

    <meta charset="utf-8">

    <meta property="og:title" content="Arctice Minecraft">
    <meta property="og:site_name" content="modex.dev">
    <meta property="og:url" content="https://modex.dev/Arctice">
    <meta property="og:secure_url" content="https://modex.dev/Arctice">
    <meta property="og:description" content="Shows all current changes that I made to Vanilla MC">
    <meta property="og:image" content="https://modex.dev/Arctice/favicon.png" />

    <link rel="stylesheet" href="/Arctice/imp/style.css">

    <!-- Libraries -> Bootstrap / JQuery / DataTables -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>