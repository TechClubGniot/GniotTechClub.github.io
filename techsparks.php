<?php
header("Content-disposition: attachment; filename=techsparks.apk");
header("Content-type: application/apk");
readfile("techsparks.apk");?>