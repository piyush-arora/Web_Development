<?php
error_reporting(0);
set_time_limit(0);
$host = "127.0.0.1";
$port = 1234;
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create
socket\n");
echo 'socket is successfully created';
$result = socket_bind($socket, $host, $port) or die("Could not bind to
socket\n");
echo 'socket is successfully bind';
$result = socket_listen($socket) or die("Could not set up socket
listener\n");

echo "Waiting for connections... \n";
while(1)
{
	$spawn[++$i] = socket_accept($socket) or die("Could not accept incoming
	connection\n");
	
	echo "_______________________________________________________\n";
	$input = socket_read($spawn[$i],1024);
	$client = $input;

	echo $client ."\n";

	socket_close($spawn[$i]);
	echo "_______________________________________________________\n";
}
socket_close($socket);
?>