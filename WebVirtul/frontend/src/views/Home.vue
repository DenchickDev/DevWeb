<template>
  <main role="main">

    <div id="carousel" class="carousel slide" data-ride="carousel">
      <!-- Индикаторы -->
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <!--<div class="carousel-inner">
          <div class="carousel-item active">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
              <div class="container">
                  <div class="carousel-caption text-left">
                      <h1>Example headline.</h1>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
              <div class="container">
                  <div class="carousel-caption">
                      <h1>Another example headline.</h1>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
              <div class="container">
                  <div class="carousel-caption text-right">
                      <h1>One more for good measure.</h1>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                  </div>
              </div>
          </div>
      </div>-->
      <div class="carousel-inner" >

        <div class="carousel-item active">
          <div >
            <div class = "cover_background" style="background-image: url(../../public/css/image/Fotoshop.png);background-repeat:no-repeat; background-position: center; background-size: auto; height: 500px">
              <img class="img-fluid" src="../../public/css/image/Photoshop.png" alt="Responsive image">
            </div>

          </div>
          <div class="container">
            <div class="carousel-caption text-left">
              <!--<h1>Обработка фотографий</h1>-->
              <router-link to="/fotoprocessing">
                <p><a class="btn btn-lg btn-primary" role="button" style="color: white">Узнать больше</a></p>
              </router-link>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div >
            <div class = "cover_background" style="background-image: url(../../public/css/image/tmp3.jpg);background-repeat:no-repeat; background-position: center; background-size: auto; height: 500px">
              <img class="img-fluid" src="../../public/css/image/Audio2.png" alt="Responsive image">
            </div>
            <!--                    <img class="img-fluid" src="static/css/image/tmp4.jpg" alt="Responsive image">-->
          </div>
          <div class="container">
            <div class="carousel-caption text-left">
              <!--<h1>Обработка звука</h1>-->
              <router-link to="/audioprocessing">
                <p><a class="btn btn-lg btn-primary" role="button" style="color: white">Узнать больше</a></p>
              </router-link>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div >
            <div class = "cover_background" style="background-image: url(../../public/css/image/tmp3.jpg);background-repeat:no-repeat; background-position: center; background-size: auto; height: 500px">
              <img class="img-fluid" src="../../public/css/image/Video.png" alt="Responsive image">
            </div>
            <!--                    <img class="img-fluid" src="static/css/image/tmp4.jpg" alt="Responsive image">-->
          </div>
          <div class="container">
            <div class="carousel-caption text-left">
              <!--<h1>Видеомонтаж</h1>-->
              <router-link to="/videoediting">
                <p><a class="btn btn-lg btn-primary" role="button" style="color: white">Узнать больше</a></p>
              </router-link>
            </div>
          </div>
        </div>
      </div>
      <!-- Элементы управления -->
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Предыдущий</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Следующий</span>
      </a>
    </div>


    <!--<div id="myCarousel" class="carousel slide p-0" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="static/css/image/tmp.jpg" width="550" height="318" alt="Responsive image">
<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="static/css/image/tmp.jpg"/></svg>
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>-->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row" style="margin-top: 62px">
        <div class="col-lg-4">
          <!--                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->

          <img class="round" src="../../public/css/image/Zombi3.png" alt="Responsive image">
          <h2>Dead Knight</h2>
          <p>Игра в жанре платформер, рассказывающая о любви пережившей смерть. Суть игры заключается в том, что главный персонаж проходя через множество преград и ловушек стремится к тому, что бы спасти свою любовь.</p>
          <router-link to="/deadknight">
            <p><a class="btn btn-secondary" role="button" style="color: white;">Подробнее &raquo;</a></p>
          </router-link>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="round" src="../../public/css/image/youtube-logo2.png" alt="Responsive image">
          <h2>YouTube</h2>
          <p>Мы создали ряд интересных проектов, которые мы стремимся развивать вместе с вами.</p>
          <router-link to="/youtube">
            <p><a class="btn btn-secondary" role="button" style="color: white">Подробнее &raquo;</a></p>
          </router-link>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="round" src="../../public/css/image/instagram-logo2.png" alt="Responsive image">
          <h2>Instagram</h2>
          <p>Инстаграм для дополнения наших проектов ютуба, развития индивидуальных проектов и для более удобного общения с нашей аудиторией.</p>
          <router-link to="/instagram">
            <p><a class="btn btn-secondary" role="button" style="color: white">Подробнее &raquo;</a></p>
          </router-link>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Вступай в нашу команду. <span class="text-muted">Раскрой свой потенциал.</span></h2>
          <p class="lead">Мы - это команда мечтателей, которая хочет чуточку изменить мир и раскрыть свой потенциал</p>
        </div>
        <div class="col-md-5">
          <img class="onus" src="../../public/css/image/Crew.jpg" alt="Responsive image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Выбери чем ты хочешь заниматься. <span class="text-muted">От нас развитие и поддержка.</span></h2>
          <p class="lead">Главное понять чего хочешь именно ты, найти свою цель и идти к ней. Занимайся именно тем, что тебе нравится, не бойся начинать, ведь никогда не бывает поздно. Каждый из нас ответит и обсудит с тобой любой вопрос.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="img-fluid onus" src="../../public/css/image/Dream.jpg" alt="Responsive image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Необходимы наши услуги ?<span class="text-muted">Качественно. Быстро.</span></h2>
          <p class="lead">Мы занимаемся дизайном, media-продакшном, разрабатываем сайты и ведём разработку игр и программных продуктов.</p>
        </div>
        <div class="col-md-5">
          <img class="onus" src="../../public/css/image/Services.jpg" alt="Responsive image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->



  </main>
</template>

<script>
// @ is an alias to /src
//import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'home'
}
</script>
