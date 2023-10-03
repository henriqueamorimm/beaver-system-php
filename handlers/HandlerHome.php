<?php
function Home() {
if ($_SERVER['REQUEST_URI'] === '/home') {
  header('Location: ../');
  exit();
}
return;
}
?>