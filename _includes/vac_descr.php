   <?php include 'php/db_config.php' ?>
    <?php include 'php/db_connect.php' ?>
    <?php
        $id = $_REQUEST["id"];
        $vac=mysql_query("
            SELECT *
            FROM vacatures
            WHERE vac_id = '$id'
            ");
        $v1=html_entity_decode(mysql_result($vac,$i,"vac_id"));
        $v2=html_entity_decode(mysql_result($vac,$i,"vac_functie"));
        $v3=html_entity_decode(mysql_result($vac,$i,"vac_spec"));
        $v4=html_entity_decode(mysql_result($vac,$i,"vac_txt"));
    ?>

<div id="vac_cont">
    <div id="vac_nav" >
        <div id="sluit"></div>
    </div>
    <h1 id="vac_title">Jobs</h1>
    <?php
        $result=mysql_query("
            SELECT *
            FROM vacatures
            WHERE vac_active = 1
        ");
        $numa=mysql_numrows($result);
        mysql_close();
            if (!empty($numa)) {
    ?>
    <?php
        $i=0;
        while ($i < $numa) {
            $f1=html_entity_decode(mysql_result($result,$i,"vac_id"));
            $f2=html_entity_decode(mysql_result($result,$i,"vac_functie"));
            $f3=html_entity_decode(mysql_result($result,$i,"vac_spec"));
            $f4=html_entity_decode(mysql_result($result,$i,"vac_txt"));
    ?>
<div id="vacs" >

    <a href="jobs.php?id=<?php echo htmlspecialchars($f1); ?>"><?php echo ($f2); ?><br>
    <span id="spec"><?php echo htmlspecialchars($f3); ?></span></a>
</div>

<?php
    $i++;
    }
}
?>
<script src="_js/vacs.js"></script>
</div>