<?php
require_once 'credentials.class.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <title>CharityCoins</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>Mining via Javascript and WebGL</title>
      <script>
         var g_user = '<?php echo $username ?>';
         var g_password = '<?php echo $password ?>';
         var g_url = '<?php echo $url ?>';
         var g_port = '<?php echo $port ?>';
      </script>

      <SCRIPT src="http://code.jquery.com/jquery-1.11.0.min.js"></SCRIPT>
      <SCRIPT src="sha256.js"></SCRIPT>
      <SCRIPT src="util.js"></SCRIPT>
      <SCRIPT src="work-manager.js"></SCRIPT>
      <SCRIPT src="glminer.js"></SCRIPT>
    </head>
    <body>
        <div id="control">
    		<input type="radio" name="method" value="js" style="display: none;">
    		<input type="radio" name="method" value="jsworker" style="display: none;">
    		<input type="radio" name="method" value="webgl" checked="checked" style="display: none;">
    		<INPUT id="threads" value="1024" style="display: none;"/>
    		<input type="checkbox" id="testmode"  style="display: none;">
    		<button id="start" onclick="begin_mining();" style="display: none;"></button>
        </div>
        
        <div id="left">
            <div id="logo">
                <h2 style="color:gold;">CharityCoins</h2>
                <img src="img/logo.png" style="width:100%;">
        		<br>Total Hashes: <INPUT id="total-hashes" /><br>
        		<br>Hash/s: <INPUT id="hashes-per-second" /><br>
        		<INPUT id="target" style="display: none;" /><br>
        		<INPUT id="golden-ticket" style="display: none;" /><br>
        		<textarea id="info" style="width: 400px; height: 300px; display: none;"></textarea>
            </div>
        </div>
        
        <div id="middle">
            <div id="charity1" class="charity">
                <h3>American Red Cross</h3>
                <img src="img/arc.png" style="width:20%;">
                <input id="select1" type="button" value="Select" onclick="select1(); handleDonateClick();" />
            </div>
            
            <div id="charity2" class="charity">
                <h3>Prodigal Son Solutions</h3>
                <img src="img/pss.png" style="width:20%;">
                <input id="select2" type="button" value="Select" onclick="select2(); handleDonateClick();" />
            </div>
            
            <div id="charity3" class="charity">
                <h3>SASE</h3>
                <img src="img/sase.png" style="width:20%;">
                <input id="select3" type="button" value="Select" onclick="select3(); handleDonateClick();" />
            </div>
            
            <div id="counter" style="text-align:center;" stlye="backgroundColor:black; width:100%; text-align:center;">
                <span id="donate_message" style="text-align:center; width:100%;">You could have donated:</span>
                <span id="donated"></span>
            </div>
        </div>
        
        <div id="right">
            <h2>Top Donators</h2>
            <div id="donators">
                    Lynx Titan
                <br>Razor Beast
                <br>Randalicious
                <br>Oskar
                <br>Daniel Duck
                <br>sneeze777a9A
                <br>Duration
                <br>Capt King
                <br>DedWilson
                <br>Zulu
                <br>Mini Finbarr
                <br>AndrewWigins
                <br>Rigondeaux
                <br>EG Froggen
                <br>X Mars
                <br>Twitch Fear
                <br>Whips
                <br>Skill Hopper
                <br>Pano
                <br>Synd
                <br>Oslo
                <br><br><br>
            </div>
            <div id="amount">
                    $12.83
                <br>$10.23
                <br>$9.22
                <br>$6.43
                <br>$5.32
                <br>$5.31
                <br>$4.64
                <br>$4.32
                <br>$4.10
                <br>$4.01
                <br>$3.95
                <br>$3.50
                <br>$3.42
                <br>$3.36
                <br>$3.28
                <br>$3.16
                <br>$3.03
                <br>$2.98
                <br>$2.94
                <br>$2.91
                <br>$2.88
                <br><br><br>
                
            </div>
        </div>
        
        <div id="nav">
            <h3>
             <a href="demo.html">Test an Example</a>
             <a href="index.html">Get for Your Site</a>
             <a href="index.html">Donate to Us</a>
            </h3>
        </div>
        

        <div width='100%'>
        <table id="example" class="display" cellspacing="0" width='100%'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Amount Raised</th>
                <th>Non-Profit</th>
            </tr>
        </thead>
        <tbody style='color:black'>
            <tr>
                <td>Lynx Titan</td>
                <td>$12.83</td>
                <td>After School Clubs</td>
            </tr>
            <tr>
                <td>Attack Rabbit</td>
                <td>$10.45</td>
                <td>Goodwill</td>
            </tr>
            <tr>
                <td>Gay Warrior</td>
                <td>$6.43</td>
                <td>American Red Cross</td>
            </tr>
            <tr>
                <td>Alfredo4Life</td>
                <td>$2.10</td>
                <td>American Red Cross</td>
            </tr>
            <tr>
                <td>anonymous</td>
                <td>$1.12</td>
                <td>After School Clubs</td>
            </tr>
            <tr>
                <td>anonymous</td>
                <td>$.83</td>
                <td>Americans for Trumps</td>
            </tr>

            <tr>
                <td>Razor Beast</td>
                <td>$10.23</td>
                <td>After School Clubs</td>
            </tr>
            <tr>
                <td>Oskar</td>
                <td>$9.22</td>
                <td>Big Brothers Big Sisters</td>
            </tr>
            <tr>
                <td>Capt King</td>
                <td>$7.23</td>
                <td>Big Brothers Big Sisters</td>
            </tr>
            <tr>
                <td>Elefat</td>
                <td>$6.22</td>
                <td>SASE</td>
            </tr>
            <tr>
                <td>Lyle</td>
                <td>$5.32</td>
                <td>SASE</td>
            </tr>
            <tr>
                <td>Oslo</td>
                <td>$3.75</td>
                <td>SASE</td>
            </tr>
        </tbody>
    </table>
    </div>
<script src=//code.jquery.com/jquery-1.12.3.js></script>
<script src=https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
        <script src="https://www.google.com/jsapi"></script>
        <script>
            google.load('jquery', '1.3.1');
        </script>
        <script src=//code.jquery.com/jquery-1.12.3.js></script>
        <script src=https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        <script src="script.js"></script>
    </body>
</html>
