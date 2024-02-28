<script>
    window.open()
</script>

<?php

$ip = $_SERVER['REMOTE_ADDR'];
$iteration = 255;
$server = '';


if ($ip == '192.168.7.34' && $ip != '38.50.163.162') {

    $server = '192.168.7.34';

}
if ($ip == '::1') {
    $server = '192.168.7.34';
}

if ($ip == '38.50.163.162' && $ip != '192.168.7.34') {

    $server = '38.50.163.162';
    
}

if ($ip != '38.50.163.162' && $ip != '192.168.7.34' && $ip != '::1') {

        $server = '38.50.163.162';
  
}

for ($i=0; $i <= $iteration; $i++) { 

    if ($ip != '38.50.163.162' && $ip == '192.168.7.'.$i) {
        $server = '192.168.7.34';
    }

}


define("SERVER_ON", $server.':8585');

//echo 'Ya sabes, tu dirección IP es' . $ipRemote . ' ?';

# ROUTE
const SERVER = SERVER_ON;