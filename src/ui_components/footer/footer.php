<!-- 
REQUIRES:

$ui_component_footer_title: string
-->
<?php 
// Load default Values if not set by parent
if(!isset($ui_component_footer_title)) { $ui_component_footer_title = 'Footer'; }

?>

<footer class="footer-wrapper">
    <?="<h1 class=\"footer-wrapper__title\">$ui_component_footer_title</h1>"?>
</footer>