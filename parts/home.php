<!--- Slider -->
<div class="carousel slide" id="demo-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#demo-carousel" data-slide-to="1"></li>
        <li data-target="#demo-carousel" data-slide-to="2"></li>
        <li data-target="#demo-carousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" data-src="https://unsplash.it/800/400?random=1">
            <div class="carousel-caption sc-box">
                <h3><?php echo $lang['nav']['title1']['HomePage']['slider']['H']; ?></h3>
                <p><?php echo $lang['nav']['title1']['HomePage']['slider']['desc']; ?></p>
            </div>
        </div>
        <div class="carousel-item" data-src="https://unsplash.it/800/400?random=2">
            <div class="carousel-caption sc-box">
                <h3><?php echo $lang['nav']['title1']['HomePage']['slider']['H']; ?></h3>
                <p><?php echo $lang['nav']['title1']['HomePage']['slider']['desc1']; ?></p>
            </div>
        </div>
        <div class="carousel-item" data-src="https://unsplash.it/800/400?random=3">
            <div class="carousel-caption sc-box">
                <h3><?php echo $lang['nav']['title1']['HomePage']['slider']['H']; ?></h3>
                <p><?php echo $lang['nav']['title1']['HomePage']['slider']['desc2']; ?></p>
            </div>
        </div>
    </div><a class="left carousel-control" href="#demo-carousel" role="button" data-slide="prev"><span class="icon-prev" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#demo-carousel" role="button" data-slide="next"><span class="icon-next" aria-hidden="true"></span><span class="sr-only">Next</span></a>
</div>
<!--- Title -->
<div class="sc-box">
    <div class="row text-center">
        <div class="col-12 small">
            <img src="asset/img/iconsSVG.png" width="10%">
        </div>
    </div>
    <h2 class="text-center"><?php echo $lang['nav']['title1']['HomePage']['titleForPage']; ?></h2>
</div>
<!-- Descriptions -->
<div class="sc-box">
    <div class="row">
        <div class="col-12 col-md-8">
            <h5><?php echo $lang['nav']['title1']['HomePage']['history']['his']; ?></h5>
            <p><?php echo $lang['nav']['title1']['HomePage']['history']['descriptions1']; ?></p>
            <div class="mb-5">
            <a href="?page=his&language_=<?php echo $_GET['language_']; ?>" class="btn btn-lg btn-block col_crud"><?php echo $lang['nav']['title1']['HomePage']['history']['hisBtn']; ?></a>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <img alt="seat plan" src="../asset/img/Theater.jpg" width="100%" >
                </div>
                <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <img src="../asset/img/dokument-placeholder.jpg" alt="Request for public procurement" width="100%">
                            <div class="card-body col_crud">
                                <h6 class="card-title"><a href="http://www.pozoristemladih.ba/dok/Zahtjev-za-javne-nabavke1526888220.pdf" target="_blank">Public procurement</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <img src="../asset/img/dokument-placeholder.jpg" alt="Proposal project" width="100%">
                            <div class="card-body col_crud">
                                <h6 class="card-title"><a href="http://www.pozoristemladih.ba/dok/Pozoriste-mladih_Prijedlog-projekta1520342517.pdf" target="_blank">Proposal project</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <img src="../asset/img/dokument-placeholder.jpg" alt="Budget show" width="100%">
                            <div class="card-body col_crud">
                                <h6 class="card-title text-center"><a href="http://www.pozoristemladih.ba/dok/Pozoriste-mladih_Budzet-predstave1520342472.pdf" target="_blank">Budget show</a></h6>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="tab-pane" id="messages" role="tabpanel">
                    <div class="row mb-2">
                        <div class="col-12 col-md-4">
                            <img src="../asset/img/Elma.jpg" alt="Elma Ahmetovic" width="100%">
                        </div>
                        <div class="col-12 col-md-8">
                            <div id="accordion">
                                <div class="card mb-2">
                                    <div class="card-header" id="headingOne1">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                                Biographie
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordion">
                                        <div class="card-body">
                                            <h4>Elma Ahmetovic</h4>
                                            <small>31.12.1958</small>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo2">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                                                Performances
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion">
                                        <div class="card-body">
                                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img src="../asset/img/Alma.jpg" alt="Alma Merunka" width="100%">
                        </div>
                        <div class="col-12 col-md-8">
                            <div id="accordion">
                                <div class="card mb-2">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Biographie
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <h4>Alma Merunka</h4>
                                            <small>31.12.1958</small>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Performances
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="list-group mb-3" id="myList" role="tablist">
                <a class="list-group-item list-group-item-action  active mb-2" data-toggle="list" href="#home" role="tab">Seat plan</a>
                <a class="list-group-item list-group-item-action mb-2" data-toggle="list" href="#profile" role="tab">Applications documents</a>
                <a class="list-group-item list-group-item-action mb-2" data-toggle="list" href="#messages" role="tab">Ensemble</a>
            </div>


            <div class="text-center">
                <img class="rounded mx-auto d-block" src="asset/img/Rijeka005-300x200.jpg" width="100%">
            </div>
            <br>
            <div class="text-center">
                <img class="rounded mx-auto d-block" src="asset/img/veseli-muzicari-01.jpg" width="100%">
            </div>
        </div>
    </div>
</div>
