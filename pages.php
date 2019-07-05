<?php
    require "head.php";
    require "header.php";
?>
<section>
    <div class="centered">
        <h2 id="pagesPitres">Chapitre 1</h2>

        <div class="row">

            <?php for ( $x = 1 ; $x < 99 ; $x++ ) { ?>

            <div class="col-md-3">

                <div class="col-md-12">

                    <div class="offset-md-1 col-md-11">

                        <section class="cards">



                            <article class="card" >
                                <img src="assets/img/ch1/wu_ep1_0000<?=$x?>.jpg" alt="Page suivante 1" />
                            </article>
                        </section>
                    </div>

                </div>

            </div>
            <?php } ?>

        </div>





    </div>

</section>
<?php
    require "footer.php";
?>