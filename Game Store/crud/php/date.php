<?php

function dateee($icon,$placeholder,$name,$value){
$elem="
    	<div class=\"input-group mb-2\">
       		<div class=\"input-group-text bg-warning\">$icon</div>
	   			<input type=\"number\" name='$name' autocomplete=\"off\" placeholder='$placeholder' value='$value' class=\"form-control\" id=\"inlineFormInputGroup\">   	
	    </div>
  	
";

echo $elem;

}