<center>
    <br><br>
    <h1 style="color:blue">PHP</h1>
    <h1>Xss Injection Test</h1>
    <br><br><br>
    <form method = "POST">
        Username : <input type="text" name = "username" autocomplete="off"><br><br>
        <button type= "submit"> Send</button>
    </form>
</center>
<?php
    $query = htmlspecialchars($_POST['username']);
    if (isset($_POST['username'])) {
        if (strpos($query, '<') !== false) {
            echo  "<center><br><br><br>";
            echo 'XSS Injection Detected dont try again :P';
            echo  "</center>";  
        }
            else if (strpos($query, '/') !== false) {
            echo  "<center><br><br><br>";
            echo 'XSS Injection Detected dont try again :P';
            echo  "</center>";
        }   else if (strpos($query, 'alert') !== false) {
            echo  "<center><br><br><br>";
            echo 'XSS Injection Detected dont try again :P';
            echo  "</center>";
        }
            else {
            echo  "<center><br><br><br> Welcome ";
            echo  $query;
            echo  "</center>";
        }
    }
?>