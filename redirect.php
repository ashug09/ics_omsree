<?php
$URL = "http://findjobalerts.com";
if( headers_sent() ) { echo("<script>location.href='$URL'</script>"); }
else { header("Location: $URL"); }
exit;
?>
