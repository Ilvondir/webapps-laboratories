<?php
  include('trip.php');
  require_once('vendor/autoload.php');

  $loader = new \Twig\Loader\FilesystemLoader('./templates');
  $twig = new \Twig\Environment($loader);

  echo $twig->render('zad6.twig', ['trips' => $trips]);
