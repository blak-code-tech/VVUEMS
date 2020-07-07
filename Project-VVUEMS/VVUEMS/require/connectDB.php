<?php
$conn = mysqli_connect('localhost', 'root', '', 'vvuems');
if(!$conn){
    die('<div class=alert alert-warning>
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	Connection failed</div>');
}

?>