<?php
    require "head.php";
    require "header.php";
?>
<section>
    <h2 id="pagesPitres">Chapitre 1</h2>

<?php
    $fourColumns = 0;
    $rowNumber = 0;
    $bootstrapColWidth = 12 / $fourColumns;
    $rows= [];
?>

<div class="row">
<?php
    foreach($rows as $row) {?>  
    <div class="col-md-<?php echo $bootstrapColWidth; ?>">
        <div class="containerMini">
            <img src="assets/img/home-mini-1.jpg">
        </div>
<?php
    $rowNumber++;
    if($fourColumns == 4) echo '</div><div class="row">';
}
?>
</div>
</section>
<?php
    require "footer.php";
?>

