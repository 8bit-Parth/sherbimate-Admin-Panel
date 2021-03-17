<html>
<head>
</head>
<body>
    <?php 
    if(isset($_SESSION["errorMessage"])) {
    ?>
    <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
    <?php 
    unset($_SESSION["errorMessage"]);
    } 
    ?>
</body>
</html>
