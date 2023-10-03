<?php
function LanguageController() {
$userLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$languages = json_decode(file_get_contents('../languages/lg.json'), true);

if (isset($languages[$userLanguage])) {
  $greeting = $languages[$userLanguage]['greeting'];
  $select = $languages[$userLanguage]['select'];
  $next = $languages[$userLanguage]['next-button'];
  $license = $languages[$userLanguage]['license'];
} else {
  $greeting = $languages['en']['greeting'];
  $select = $languages['en']['select'];
  $next = $languages['en']['next-button'];
  $license = $languages['en']['license'];
}

return;
}
?>