<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 1 out"); // GPIO 1 - Relay 2 : Vodka
exec("gpio mode 6 out"); // GPIO 6 - Relay 7 : Jus de Cranberry
exec("gpio mode 7 out"); // GPIO 7 - Relay 8 : Jus de Pamplemousse
exec("gpio write 1 0");
exec("gpio write 6 0");
exec("gpio write 7 0");
sleep (40);
exec("gpio write 1 1");
sleep (120);
exec("gpio write 6 1");
sleep (30);
exec("gpio write 7 1");
?>

  <div class="w3-container w3-center">
      <h3>Votre Sea Breeze est prêt</h3>
      <div class="w3-section">
          <form>
    <input type="button" value="RETOURNER AU BAR" class="w3-bar-item w3-button w3-teal" onclick="window.location.href='http://192.168.1.24/cocktails/'" style="width: 100%;height: 150px">
</form>     
             
      </div>
        
    </div>