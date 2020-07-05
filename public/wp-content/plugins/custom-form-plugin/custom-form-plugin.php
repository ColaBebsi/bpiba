<?php
/*
* Plugin Name: Custom Login Form
* Description: Custom Login Form
* Version: 1.0
* Author: ColaBebsi
*/


function custom_form_function() {

$html = "<form class=\"form-signin\">

<img class=\"mb-4\" src=\"https://login.bonnieracademy.se/pluginfile.php/1/theme_nebula/loginlogo/1593119559/login-logo2.png\" alt=\"\" width=\"400\" height=\"\">

<label for=\"inputEmail\" class=\"sr-only\">Användarnamn</label>
<input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Användarnamn\" required autofocus>

<label for=\"inputPassword\" class=\"sr-only\">Lösenord</label>
<input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Lösenord\" required>

<div class=\"checkbox mb-2\">
  <label>
    <input type=\"checkbox\" value=\"remember-me\"> Kom ihåg
  </label>
</div>
<div class=\"checkbox mb-3\" id=\"forgot-pass\">
  <a href=\"#\">Glömt lösenord?</a>
</div>

<button class=\"btn btn-sm btn-primary btn-block\" type=\"submit\">Logga in</button>

</form>";

return $html;

}

add_shortcode('custom_form', 'custom_form_function');
?>