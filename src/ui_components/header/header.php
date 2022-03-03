<!-- 
REQUIRES:

$ui_component_header_title: string
-->
<?php 
// Load default Values if not set by parent
if(!isset($ui_component_header_title)) { $ui_component_header_title = 'Header'; }

?>

<header class="header-wrapper">
    <?="<h1 class=\"header-wrapper__title\">$ui_component_header_title</h1>"?>
</header>