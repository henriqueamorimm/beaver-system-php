<?php

 function Db(){
    return new PDO("mysql:host=localhost;dbname=lojavirtual", "root", "");
 }