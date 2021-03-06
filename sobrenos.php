<?php require_once('header.php'); ?>

    <!-- Banner inicial -->
    <section class="banner">
        <div class="card bg-dark text-white">
            <img class="card-img" src="img/watches/the-5th-IQYR7N67dhM-unsplash.jpg" alt="Imagem do card">
            <div class="card-img-overlay">
                <h5 class="card-title text-center">Bem-Vindo ao Wimart</h5>
            </div>
        </div>
    </section>

    <!-- nav bar interno da página -->
    <section class="navegacao">
        <nav class="navbar navbar-expand-lg navbar-light bg-light profile-navbar row">
            <div class="navbar col justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item px-5 col-md-">
                        <a class="nav-link" href="#empresa">A Empresa<span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item px-5">
                        <a class="nav-link" href="#lideranca">Liderança</a>
                    </li>
                    <li class="nav-item px-5">
                        <a class="nav-link" href="#cultura">Cultura</a>
                    </li>
                    <li class="nav-item px-5">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    


    <!-- Sobre a Empresa -->
    <section id="empresa" class="row mx-auto container-empresa">
        <div class="col">
            <h2 class="text-center">A Empresa</h2>
            <p class="text-center"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis quidem quos ex
                molestias sunt perferendis consectetur nihil. Amet obcaecati, cupiditate dignissimos id consequuntur
                incidunt facilis, iusto expedita esse, blanditiis maiores? Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Sint, aut. Tempora excepturi, similique nemo, adipisci tempore assumenda unde obcaecati
                nisi dolores id possimus eum repellat veritatis consequatur autem maiores error?</p>
        </div>
    </section>

    <!-- liderança -->
    <section id="lideranca" class="lideranca container">
        <div>
            <h2 class="text-center">Nosso Time</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="card my-3">
                        <img src="img/liderancas/ceo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CEO</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="card my-3">
                        <img src="img/liderancas/cfo.jpg" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CFO</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="card my-3">
                        <img src="img/liderancas/ctp.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CTO</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cultura -->
    <section id="cultura" class="row container-empresa mx-auto">
        <div class="col">
        <h2 class="text-center">Nossa Cultura</h2>
        <p class="text-center"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis quidem quos ex
            molestias sunt perferendis consectetur nihil. Amet obcaecati, cupiditate dignissimos id consequuntur
            incidunt facilis, iusto expedita esse, blanditiis maiores? Lorem ipsum dolor sit amet consectetur,
            adipisicing elit. Sint, aut. Tempora excepturi, similique nemo, adipisci tempore assumenda unde obcaecati
            nisi dolores id possimus eum repellat veritatis consequatur autem maiores error?</p>
            </div>
    </section>

    <!-- Contato -->

    <section id="contato">
        <form>
            <h2 class="my-3">Contato</h2>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" placeholder="Fale Conosco">Mensagem</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

<?php require_once('footer.php'); ?>