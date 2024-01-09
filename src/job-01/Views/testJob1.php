<?php
 ob_start()
?>
   <div>Maleye you did it again</div>
<?php
 $content =  ob_get_clean();
 $title = "this is the job 01";
 require_once "template.php"
?>