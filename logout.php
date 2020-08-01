<?php
// delete cookie
setcookie("isloggedin","",time()-1);
header("Location: .");