<?php 

if(!isset($pgName)){
    $pgName = '';
}

if(!isset($pgClass)){
    $pgClass = '';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COMP 1950 - <?php echo $pgName; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Open+Sans:400,400i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" href="/styles/styles.css">
</head>
<body class="<?php echo $pgClass; ?>">
<div class="wrapper">
<header>
    <div class="header-row-01">
        <h1 class="logo"><a href="./index.php">COMP 1950</a></h1>
        <button class="hamburger">
            <span class="hamburger-content">
                <span class="hamburger-icon" tabindex="-1">&#9776;</span>
                <span class="hamburger-text">Menu</span>
            </span>
        </button>
    </div>
    <?php 
    
    include 'nav.php';

    ?>
</header>
<main>