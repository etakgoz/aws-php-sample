<?php
// delete cookie
setcookie("logged_in_user","",time()-1);
header("Location: .");