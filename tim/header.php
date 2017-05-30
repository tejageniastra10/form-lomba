
<?php
  include("session.php");
  include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php echo $_SESSION['nama_lomba_diikuti']; ?> | <?php echo $_SESSION['nama_tim']; ?> </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style type="text/css">
    .responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167F92;
}
.responstable tr {
  border: 1px solid #D9E4E6;
  text-align: center;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
  text-align: center;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #34495E;
  color: #FFF;
  padding: 1em;
  text-align: center;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) span {
  display: none;
  text-align: center;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
  text-align: center;
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
    text-align: center;
  }
  .responstable th:nth-child(2):after {
    display: none;
    text-align: center;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
  text-align: center;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
  text-align: center;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
    text-align: center;
  }
}
.responstable th,
.responstable td {
  text-align: center;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th,
  .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167F92;
}
</style>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="index.php"> <?php echo $_SESSION['nama_lomba_diikuti']; ?> | <?php echo $_SESSION['nama_tim']; ?>  </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href=../user/index.php>Dashboard<b></b></a>
                </li>
            </ul>