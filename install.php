#!/usr/bin/php
<?php
$user["fname"] = "Admin";
$user["lname"] = "Istrator";
$user["email"] = "admin@metahobby.com";
$user["passwd"] = hash("whirlpool", "password");
$user["admin"] = 1;
$user["banned"] = 0;
$user["id"] = 0;
if (!file_exists("./private"))
  mkdir("./private");
if (file_exists("./private/user"))
{
  echo "INSTALL HAS ALREADY BE RUN\n";
}
else {
  $tab[] = $user;
  file_put_contents("./private/user", serialize($tab));
  echo "SITE IS READY FOR ON SITE ADMIN\n";
  exit();
}
?>
