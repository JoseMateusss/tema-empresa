<?php get_header(); ?>

<header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Lavagens a domicílio Silva</h1>
          
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75">Serviços de higienização e lavagens a seco, contrate nossos serviços sem sair de casa, sua comodidade é a nossa prioridade.</p>
          <a class="btn btn-efeitos btn-xl js-scroll-trigger" href="#about">Saiba Mais</a>
        </div>
      </div>
    </div>
  </header>  

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Sobre a empresa</h2>
          
          <p class="text-white-50 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
          <a class="btn btn-efeitos btn-xl js-scroll-trigger" href="#services">Conheça nossos serviços</a>
        </div>
      </div>
    </div>
  </section>

  <!-- services Section -->
  <section id="services" class="page-section bg-primary1" >
      <div class="container">
        <div class="row">
          <div class="col-sm-12 pb-5">
            <h2 class="text-white mt-0">Nossos serviços</h2>
            <p class="text-white-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
          <div class="col-sm-4 mb-5">
             <div class="card  shadow-card" style="width: 18rem;">
                <img src="img/ima-header.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lavagem de estofados</p>
                </div>
              </div>
          </div>
          <div class="col-sm-4 mb-5">
             <div class="card shadow-card" style="width: 18rem;">
                <img src="img/cadeira.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lavagem de cadeiras</p>
                </div>
              </div>
          </div>
          <div class="col-sm-4 mb-5">
             <div class="card ml-3 shadow-card" style="width: 18rem;">
                <img src="img/carpete.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lavagem de carpetes</p>
                </div>
              </div>
          </div>
          <div class="col-sm-4 mb-5">
             <div class="card  shadow-card" style="width: 18rem;">
                <img src="img/img-header.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lavagem de veículo completa</p>
                </div>
              </div>
          </div>
          <div class="col-sm-4 mb-5">
             <div class="card shadow-card" style="width: 18rem;">
                <img src="img/pintura.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">revitalização de pintura</p>
                </div>
              </div>
          </div>
          <div class="col-sm-4 mb-5">
             <div class="card ml-3 shadow-card" style="width: 18rem;">
                <img src="img/farol.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">revitalização de farois</p>
                </div>
              </div>
          </div>
        </div>
        <section id="allServices">
          <div class="row">
            <div class="col-sm-4 mb-5">
             <div class="card  shadow-card" style="width: 18rem;">
                <img src="img/ima-header.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lavagem de estofados</p>
                </div>
              </div>
          </div>
          <div class="col-sm-4 mb-5">
             <div class="card shadow-card" style="width: 18rem;">
                <img src="img/cadeira.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lavagem de cadeiras</p>
                </div>
              </div>
          </div>
          <div class="col-sm-4 mb-5">
             <div class="card ml-3 shadow-card" style="width: 18rem;">
                <img src="img/carpete.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lavagem de carpetes</p>
                </div>
              </div>
          </div>
          <div class="col-sm-4 mb-5">
             <div class="card  shadow-card" style="width: 18rem;">
                <img src="img/img-header.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Lavagem de veículo completa</p>
                </div>
              </div>
          </div>
          <div class="col-sm-4 mb-5">
             <div class="card shadow-card" style="width: 18rem;">
                <img src="img/pintura.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">revitalização de pintura</p>
                </div>
              </div>
          </div>
          <div class="col-sm-4 mb-5">
             <div class="card ml-3 shadow-card" style="width: 18rem;">
                <img src="img/farol.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">revitalização de farois</p>
                </div>
              </div>
          </div>
        </section>
           <a class="btn btn-efeitos btn-xl js-scroll-trigger" id="showServices">Ver todos os serviços</a>

      </div>
    </section>
<section class="page-section bg-primary map" id="localizacao">
 <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center:{lat:  -5.744509458350604, lng: -35.24621048569423},
          zoom: 17,
          styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#46bcec"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }
                ]
          
        });

        var marker = new google.maps.Marker({
            position: {lat:  -5.744509458350604, lng: -35.24621048569423},
            map:map
        });

        attachSecretMessage(marker);

       function attachSecretMessage(marker) {
        var infowindow = new google.maps.InfoWindow({
          content: '<h5>Lavagens a domicílio Silva - Avenida Governador Antônio de Melo e Souza, 2139 - Potengi, Natal - RN</h5>'
        });

        marker.addListener('click', function() {
          infowindow.open(marker.get('map'), marker);
        });
      }
    }
     
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDV9rjWaT7OFIj1Zt0VcMxY29_AhhFXNm4&callback=initMap"
    async defer></script>
</section>
  <!-- Contact Section -->
  

  <section class="page-section bg-primary contact"> 
        <div class="container" id="contact">
         <div class="row justify-content-center py-5" >
            <div class="col-sm-12 text-center">
              <h2 class="text-white mt-0">Fale conosco</h2>
              
            </div>

          <div class="row mx-auto ">

                
                <div class="col-lg-6 col-sm-12 contact">
                  <div class="title-form mt-lg-0 mt-sm-2">Parece que você está interessado nos nossos serviços. Obrigado por considerar nossa empresa!</div>
                  <div class="text-flow">
                    <br>
                    <p class="text-flow">Se pudermos ajudar você com alguma coisa, é só entrar em contato através deste formulário, ou em qualquer uma de nossas redes sociais através dos links:</p> 
                    <br>
                  </div>
                  <div class="row mb-3 icones">
                    <div class="col-xs-4 ">
                        <a href="https://www.facebook.com/lavagensaseco.2019" target="_blank"><i class="fab fa-facebook-square fa-4x" ></i></a>
                    </div>
                    <div class="col-xs-4 ml-5">
                        <a href="https://www.instagram.com/lavagensadomicilioo/" target="_blank"><i class="fab fa-instagram fa-4x"></i></a>
                    </div>
                    <div class="col-xs-4 ml-5">
                        <a href="https://api.whatsapp.com/send?l=pt&amp;phone=558487892310" target="_blank"><i class="fab fa-whatsapp fa-4x"></i></a>
                    </div>
                    
                  </div>
                    
                </div>

                <div class="col-lg-6 col-sm-12">
                  <form>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                        <!-- Nome Completo   -->
                          <label class="text-flow" for="inputNome">Nome Completo*</label>
                          <input type="text" class="form-control" id="inputNome" placeholder="Seu Nome Completo">
                        </div>
                        <div class="form-group col-md-6">
                        <!-- E-mail -->
                          <label class="text-flow" for="inputEmail">E-mail*</label>
                          <input type="email" class="form-control" id="inputEmail" placeholder="seuemail@exemplo.com">
                        </div>
                      </div>
                       <div class="form-row">
                        <div class="form-group col-md-6">
                        <!-- Telefone -->
                          <label class="text-flow" for="inputTelefone">Telefone*</label>
                          <input type="text" class="form-control" id="inputTelefone" placeholder="(XX) X XXXX-XXXX">
                        </div>
                        <div class="form-group col-md-6">
                        <!-- Assunto -->
                          <label class="text-flow" for="inputAssunto">Assunto*</label>
                          <input type="text" class="form-control" id="inputAssunto" placeholder="Título da Mensagem">
                        </div>
                      </div>
                        <div class="form-group">
                         <label class="text-flow" for="textAreaMensagem">Mensagem*</label>
                         <textarea class="form-control" id="textAreaMensagem" rows="3"></textarea>
                      </div>

                      <button type="submit" class="btn btn-efeitos pl-4 pr-4 float-lg-right mt-3">Enviar</button>
                  </form>
                   
                  
  </section>

                           
    
<?php get_footer();?>