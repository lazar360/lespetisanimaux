<?php include("../Commons/header.php"); ?>

<?= (styleTitreNiveau1("Odin", COLOR_PENSIONNAIRE)) ?>


<div class="row border-dark rounded-lg m-2 align-items-center perso_bgGreen">
    <div class="col p-2 text-center">
        <img src="../../sources/images/Animaux/Chats/Framboise/Framboise.jpg" class="img-thumbnail" alt="framboise" style="max-height: 180px;">
    </div>
    <div class="col-2 col-md-1 border-left border-right border-dark text-center">
        <img src="../../sources/images/Autres/icones/chienOk.png" class="img-fluid" alt="chien ok" style="width: 50px;">
        <img src="../../sources/images/Autres/icones/chatOk.png" class="img-fluid" alt="chat ok" style="width: 50px;">
        <img src="../../sources/images/Autres/icones/babyOk.png" class="img-fluid" alt="bébé ok" style="width: 50px;">

    </div>
    <div class="col-6 col-md-4 text-center">
        <div class="mb-2">Née : ++/++/++++</div>
        <div class="my-3">
            <span class="badge badge-warning m-1 p-2 d-none d-sm-inline">douce</span>
            <span class="badge badge-warning m-1 p-2 d-none d-sm-inline">calme</span>
            <span class="badge badge-warning m-1 p-2 d-none d-md-inline">joueuse</span>
        </div>
    </div>
    <div class="col-12 col-md-4">
        Frais d'adoption : 60 € <br>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
    </div>
</div>

<div class="row no-gutters align-items-center">

    <div class="col-12 col-lg-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active bg-dark"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active bg-dark"></li>
            </ol>
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <img class="img-thumbnail" style="height: 500px;" src="../../sources/images/Animaux/Chats/Framboise/Framboise.jpg" alt="Framboise">
                </div>
                <div class="carousel-item">
                    <img class="img-thumbnail" style="height: 500px;" src="../../sources/images/Animaux/Chats/Odin/Odin.jpg" alt="Odin">
                </div>
                <div class="carousel-item">
                    <img class="img-thumbnail" style="height: 500px;" src="../../sources/images/Animaux/Chats/Odin/Odin5.jpg" alt="Odin5">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="col-12 col-lg-6">
        <div>
            <?= (styleTitreNiveau2("Qui suis-je ?", COLOR_PENSIONNAIRE)) ?>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        </div>
        <hr>

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur iste minima non modi sed, similique totam ea magnam aspernatur dolorem temporibus perspiciatis. Praesentium minima dolorum laudantium sunt. Autem, quo minima?    


    </div>
</div>

<?php include("../Commons/footer.php") ?>