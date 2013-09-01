<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'hello.php';
        
            echo '<h1>WorkingWithGIT</h1>';
            $git = new git();
            echo '<p>' . $git->sayHello() . '</p>';
        ?>
    </body>
</html>
