<?php
    require "head.php";
    require "header.php";
?>

<section>
    <h2 id="pagesPitres">Chapitre 1</h2>
    <div id="containerCards">
        <div class="row">
            <?php for ( $x = 1 ; $x < 83 ; $x++ ) { ?>
                <div class="col-md-3">
                    <div class="col-md-12">
                        <section class="cards">
                            <article class="card" >
                                <img src="assets/img/ch1/wu_ep1_<?=$x?>.jpg" alt="Page introuvable"/>
                            </article>
                        </section>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php
    require "footer.php";
?>