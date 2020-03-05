<DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <?
    $active_page = "active-game"; 
    include("private/views/nav-bar.php"); 
    ?>
    
    <div class="row">
        <? for ($i = 0; $i < 5; $i++) { ?>
            <div class="col s4">
                <? 
                $tableCardName = $i;
                include("private/views/table-card.php");  
                ?>
            </div>
        <? } ?>        
    </div>

    <div class="row">
        <? for ($x = 0; $x < 5; $x++) { ?>
            <div class="col s12">
                <? include("private/views/chip-value.php"); ?>
            </div>
        <? } ?>      
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>