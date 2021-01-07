<?php
//include connect.php page for database connection
include('config/db.php');


//Total de estudiantes
$resultContarestudiantes = "SELECT count(*) from estudiantes";

    $contadordeestudiantes = mysqli_query($connection, $resultContarestudiantes);
     while ($row = mysqli_fetch_assoc($contadordeestudiantes))
    {
    $totaldeestudiantes= $row['count(*)'];
    }
//Grupo A
$resultContarestudiantes_secciongrupoa = "SELECT count(*) from estudiantes WHERE grupo = 'a'";

    $contadordeestudiantes_secciongrupoa = mysqli_query($connection, $resultContarestudiantes_secciongrupoa);
     while ($row = mysqli_fetch_assoc($contadordeestudiantes_secciongrupoa))
    {
    $totaldeestudiantes_secciongrupoa= $row['count(*)'];
    }

//Grupo B
$resultContarestudiantes_secciongrupob = "SELECT count(*) from estudiantes WHERE grupo = 'b'";

    $contadordeestudiantes_secciongrupob = mysqli_query($connection, $resultContarestudiantes_secciongrupob);
     while ($row = mysqli_fetch_assoc($contadordeestudiantes_secciongrupob))
    {
    $totaldeestudiantes_secciongrupob= $row['count(*)'];
    }

//Grupo C
$resultContarestudiantes_secciongrupoc = "SELECT count(*) from estudiantes WHERE grupo = 'c'";

    $contadordeestudiantes_secciongrupoc = mysqli_query($connection, $resultContarestudiantes_secciongrupoc);
     while ($row = mysqli_fetch_assoc($contadordeestudiantes_secciongrupoc))
    {
    $totaldeestudiantes_secciongrupoc= $row['count(*)'];
    }