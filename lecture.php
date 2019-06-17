<?php
    require "head.php";
?>
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarToggler">
        <a href="index.php" aria-label="Return to main page"><i class="fas fa-home"></i></a>
            </div>
        </div>
    </nav>
<section>
    <div class="containerPages">
        <div class="row" id="pageSize">
            <div class="col-12 text-center">
                <img src="assets/img/ch1/wu_ep1_00004.jpg" alt="Page" class="no-resize">
            </div>
        </div>
    </div>
    <div id ="flecheBas" class="row p-4">
            <div class="col-12 text-center">
                <a href="#" onclick="showDiv()"><i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
    <div id="hiddenDiv" style="display: none;">
        <div class="row pt-3">
            <div class="col-12 text-center">
                <a href="#" onclick="hideDiv()"><i class="fas fa-chevron-up"></i></a>
            </div>
        </div>
        <div class="carousel">
            <div class="carousel-row">
                <div class="carousel-tile"><img src="assets/img/ch1/carte_0_taizong.jpg" alt="Page précedente" class="previousNext"></div>
                <div class="carousel-tile"><img src="assets/img/ch1/wu_ep1_00003.jpg" alt="Page suivante 1" class="previousNext"></div>
                <div class="carousel-tile"><img src="assets/img/ch1/wu_ep1_00005.jpg" alt="Page suivante 2" class="previousNext"></div>
                <div class="carousel-tile"><img src="assets/img/ch1/wu_ep1_00006.jpg" alt="Page suivante 1" class="previousNext"></div>
                <div class="carousel-tile"><img src="assets/img/ch1/wu_ep1_00007.jpg" alt="Page suivante 2" class="previousNext"></div>
            </div>
        </div>

    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="assets/js/script.js"></script>
</body>

</html>