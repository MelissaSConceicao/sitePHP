<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    
        <title>Reino Animalia<?php echo $_GET['op']; ?></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Cabeçalho -->
                    <nav class="navbar navbar-light bg-light">
                        <a class="navbar-brand" href="index.php?op=1">
                            <img src="img/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                            Reino Animalia
                        </a>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Menu -->
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a href="index.php?op=1">Home</a>
                                </li>
                                <!-- Menu Reinos-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Reinos
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Reino Monera</a>
                                        <a class="dropdown-item" href="#">Reino Protista</a>
                                        <a class="dropdown-item" href="#">Reino Fungi</a>
                                        <a class="dropdown-item" href="#">Reino Plantae</a>
                                    </div>
                                </li>
                                <!-- Menu Filos-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Filos
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a href="index.php?op=2">Annelida</a><br>
                                        <a href="index.php?op=3">Mollusca</a><br>
                                        <a href="index.php?op=4">Platyhelminthes</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            







        <?php if ($_GET['op'] == 1){ ?>
            <div class="row">
                <div class="col">
                    <!-- Carrossel -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/caracol2.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/Caravela.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/rinoceronte.png" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        

        <div class="row">
            <div class="col">&nbsp;</div>
        </div>

        <div class="row">
            <div class="col">
            <figure class="figure">
                <img src="img/esponja.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">Uma esponja do filo dos Poríferos.</figcaption>
                </figure>
            </div>
            <div class="col">
            <figure class="figure">
                <img src="img/ave.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption text-center">Uma ave do filo dos Cordados</figcaption>
                </figure>
            </div>
            <div class="col">
            <figure class="figure">
                <img src="img/polipo.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption text-end">Um pólipo do filo dos Cnidários</figcaption>
                </figure>
            </div>
        </div>

        </div>   








        <?php }elseif($_GET['op'] == 2){ ?>
            <div class="row">
              <div class="col">&nbsp;</div>
            </div>

            <!-- Imagem -->
            <div class="row">
              <div class="col">
                <img src="img/minhocas.jpg">
                <div class="row">
                  <div class="col">&nbsp;</div>
                </div>

                <!-- Texto embaixo da imagem -->
                <h4>Anelídeos</h4>
                <p>São animais invertebrados, de corpo mole, cilíndrico e dividido em anéis(metâmero).</p>

                <p>Eles são animais tribláticos (apresentam três folhetos embrionários), celomados (cavidade na mesoderme onde fica o fluído celômico e as vísceras do animal; em troca do esqueleto, o celoma fornece sustentação e locomoção) e apresentam simetria bilateral.</p>

                <p>Entre os animais que fazem parte desse filo, temos a <strong>minhoca</strong>, um animal muito usado como isca em pescarias e conhecido pela capacidade de formação do húmus.</p>
              </div>

              <!-- Título em cima do acordeão -->
              <div class="col">
                <h4>Classes dos anelídeos</h4>
                <div class="row">
                  <div class="col">&nbsp;</div>
                </div>

                <!-- Acordeão -->
                <div class="accordion" id="accordionPanelsStayOpenExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading1">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                        Oligoquetas
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading1">
                      <div class="accordion-body">
                        Esses animais possuem algumas cerdas em seus corpos, estruturas rígidas quitinosas que ajudam na locomoção. São encontrados normalmente em solos úmidos, mas podem aparecer em água doce ou salgada. Um exemplo de oligoquetas são as minhocas.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading2">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                        Poliquetas
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                      <div class="accordion-body">
                        São animais que se diferenciam dos outros anelídeos por possuírem <strong>parapódios</strong> - extensões de cada lado do metâmero, como se fossem minúsculas nadadeiras - com grande quantidade de cerdas. Grande parte dos representantes é marinha, possui cabeça diferenciada com estruturas sensoriais, sexo separado e, geralmente, apresenta brânquias. Como exemplo de poliquetas, podemos citar as espécies do gênero Nereis.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                        Hirudíneos
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                      <div class="accordion-body">
                        Esse grupo apresenta indivíduos com corpo achatado dorsoventralmente, sem parapódios e cerdas. A maioria dos representantes são de água doce. Uma característica marcante desses animais é a presença de ventosas que garantem a locomoção e a fixação do animal. São organismos hermafroditas. Um exemplo de hirudíneos, podemos citar todas são as sanguessugas.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading4">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                        ...
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
                      <div class="accordion-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod architecto quae aliquam quibusdam optio explicabo soluta nam obcaecati, officiis veniam modi odio eum voluptatem nihil vel perferendis mollitia! Veritatis, accusamus.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading5">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                        ...
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
                      <div class="accordion-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod architecto quae aliquam quibusdam optio explicabo soluta nam obcaecati, officiis veniam modi odio eum voluptatem nihil vel perferendis mollitia! Veritatis, accusamus.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading6">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapse6">
                        ...
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6">
                      <div class="accordion-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod architecto quae aliquam quibusdam optio explicabo soluta nam obcaecati, officiis veniam modi odio eum voluptatem nihil vel perferendis mollitia! Veritatis, accusamus.
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ^ Fim Acordeão -->
              </div>
              <!-- ^ Fim Coluna -->
             </div>
             <!-- ^ Fim Row -->   
          </div>
          <!-- ^ Fim Conteiner-->









        <?php } elseif($_GET['op'] == 3){ ?>
            <div class="row">
              <div class="col">&nbsp;</div>
            </div>

            <!-- Imagem -->
            <div class="row">
              <div class="col">
                <img src="img/caracol.jpg">
                <div class="row">
                  <div class="col">&nbsp;</div>
                </div>

                <!-- Texto embaixo da imagem -->
                <h4>Moluscos</h4>
                <p>Esses animais são invertebrados e de corpo mole, geralmente protegido por uma concha. Polvos, por exemplo, não possuem concha, diferente das lulas que possuem uma concha interna e reduzida. Eles são animais tribláticos (apresentam três folhetos embrionários), celomados (cavidade na mesoderme onde fica o fluído celômico e as vísceras do animal; em troca do esqueleto, o celoma fornece sustentação e locomoção) e apresentam simetria bilateral.</p>

                <p>Os moluscos podem ser encontrados tanto em ambiente aquático quanto terrestre. O filo Mollusca é o segundo maior filo de invertebrados - sendo o primeiro, os artrópodes - com mais de 100 mil espécies conhecidas e divididas em várias classes, sendo Bivalvia, Gastropoda e Cephalopoda as três principais.</p>

                <p>Alguns dos representantes mais conhecidos deste filo são os <strong>caracóis</strong>, <strong>polvos</strong>, <strong>ostras</strong> e <strong>mechilhões</strong>.</p>
              </div>

              <!-- Título em cima do acordeão -->
              <div class="col">
                <h4>Classes dos moluscos</h4>
                <div class="row">
                  <div class="col">&nbsp;</div>
                </div>

                <!-- Acordeão -->
                <div class="accordion" id="accordionPanelsStayOpenExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Bivalvia
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                      <div class="accordion-body">
                        Esta classe se destaca por uma concha de duas valvas que envolvem o corpo do molusco, sendo o fechamento dessa concha é determinado pela contração de músculos adutores. Como representantes, há os mariscos, ostras e mexilhões. Esses animais são encontrados tanto em água doce quanto em salgada e alimentam-se por meio de filtração.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Cephalopoda
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                      <div class="accordion-body">
                        Nesse grupo, existem espécies altamente especializadas e consideradas os moluscos mais ativos. Esses animais possuem, geralmente, conchas reduzidas ou ausentes, e destacam-se pela presença de tentáculos que partem de sua cabeça. Para nadar ativamente, os cefalópodes lançam jatos de água que lhe garantem uma velocidade considerável. Alguns desses cefalópodes são o polvo, a lula e o nautilus.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Gastropoda
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                      <div class="accordion-body">
                        A maior e mais diversificada classe de molucos, representada por caramujos aquáticos, caracoís e lesmas. Essa é a única classe moluscos terrestres, e por causa de sua grande variedade de espécies, é difícil fazer uma caracterização geral. Mas, podemos dizer que esses animais utilizam a rádula para conseguir seu alimento e apresentam uma rotação da massa visceral de 180º no sentido anti-horário em relação ao pé. Essa torção garante, por exemplo, que as brânquias e o ânus estejam localizados na parte anterior do corpo.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading4">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                        Amphineura
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
                      <div class="accordion-body">
                        Organismo possuidor de concha formada por um conjunto de oito placas articuladas, circundadas por um cinturão dérmico. O pé é bem desenvolvido e adaptado à forma de locomoção (animais rastejantes).
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading5">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                        Scaphopoda
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
                      <div class="accordion-body">
                        animais formados por concha única com formato cônico, aberta nas extremidades. São exclusivamente marinhos, vivendo enterrados na areia, hábito proporcionado a especialidade dos pés, conferindo a capacidade de escavar.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading6">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapse6">
                        Aplacophora e Monoplacophora
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6">
                      <div class="accordion-body">
                        Aplacophora: Molusco de pequena dimensão e sem concha, assemelhando-se a vermes.
                        <br />
                        <br />
                        Monoplacophora: Seres que possuem uma única concha em forma de capuz, revestindo totalmente o pé e a massa visceral.
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ^ Fim Acordeão -->
              </div>
              <!-- ^ Fim Coluna -->
             </div>
             <!-- ^ Fim Row -->   
          </div>
          <!-- ^ Fim Conteiner-->











        <?php } elseif($_GET['op'] == 4){ ?>
            <!-- Divisa do menu para o conteúdo -->
            <div class="row">
              <div class="col">&nbsp;</div>
            </div>

            <!-- Imagem -->
            <div class="row">
              <div class="col">
                <img src="img/planaria.jpg">
                <div class="row">
                  <div class="col">&nbsp;</div>
                </div>

                <!-- Texto embaixo da imagem -->
                <h4>Platelmintos</h4>
                <p>Animais invertebrado e com corpo achatado dorsoventralmente - também conhecidos como vermes achatados - podem ter vida livre (em ambientes aquáticos ou terrestres), representados pelas <strong>planárias</strong> ou ser parasitas de outros animais, inclusive o homem. São tribláticos (apresentam três folhetos embrionários), acelomados (sem celoma; A única cavidade que o embrião desses animais têm é o arquêntero, de onde surge o sistema digestório.) e apresentam simetria bilateral</p>

                <p>Algum dos representantes de vida livre desse filo são as planárias.
                  <br />
                  Alguns dos representantes de vida parasitária são <em>Schistosoma mansoni</em> e <em>Taenia</em>.
                </p>
                <p>
              </div>

              <!-- Título em cima do acordeão -->
              <div class="col">
                <h4>Classes dos platelmintos</h4>
                <div class="row">
                  <div class="col">&nbsp;</div>
                </div>

                <!-- Acordeão -->
                <div class="accordion" id="accordionPanelsStayOpenExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading1">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                        Turbellaria
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading1">
                      <div class="accordion-body">
                        Composta por animais de vida livre são hermafroditas, cuja autofecundação normalmente é rara. Durante a cópula os animais pareiam seus poros genitais e trocam células espermáticas que irão fecundar cada óvulo, formando vários zigotos. Uma cápsula é então sintetizada ao redor de cada zigoto, conferindo-lhes proteção, para que desse momento em diante possam ser depositados junto ao substrato onde habitam.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading2">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                        Trematoda
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
                      <div class="accordion-body">
                        Composta por animais parasitas, podendo ser tanto endoparasitas(dentro do hospedeiro) como ectoparasitas(fora do hospedeiro), com ventosas circundando a boca e outra na região ventral, utilizadas na fixação do parasita ao hospedeiro.
                        <br />
                        Existem espécies hermafroditas (<em>Fasciola hepatica</em>, parasitas do fígado de carneiro e também humano) e espécies de sexos separados (<em>Schistosoma mansoni</em>, parasitas de vasos intestinais e veias do fígado humano).
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                        Cestoda
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                      <div class="accordion-body">
                        são parasitas intestinais de animais vertebrados e humanos, representados principalmente pelas tênias.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading4">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                        ...
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
                      <div class="accordion-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod architecto quae aliquam quibusdam optio explicabo soluta nam obcaecati, officiis veniam modi odio eum voluptatem nihil vel perferendis mollitia! Veritatis, accusamus.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading5">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                        ...
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
                      <div class="accordion-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod architecto quae aliquam quibusdam optio explicabo soluta nam obcaecati, officiis veniam modi odio eum voluptatem nihil vel perferendis mollitia! Veritatis, accusamus.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-heading6">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapse6">
                        ...
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6">
                      <div class="accordion-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod architecto quae aliquam quibusdam optio explicabo soluta nam obcaecati, officiis veniam modi odio eum voluptatem nihil vel perferendis mollitia! Veritatis, accusamus.
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ^ Fim Acordeão -->
              </div>
              <!-- ^ Fim Coluna -->
             </div>
             <!-- ^ Fim Row -->   
          </div>
          <!-- ^ Fim Conteiner-->


        <?php } else{ ?>
            <h1>CONTEÚDO DA OPÇÃO 3</h1>
        <?php } ?>
    </body>
</html>