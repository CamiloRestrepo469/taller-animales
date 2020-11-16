
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Blog Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">

    <!-- Bootstrap core CSS -->
<link href="<?php echo(base_url('public/estilos/min.css')) ?>" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo(base_url('public/estilos/blogg.css')) ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo(base_url('public/estilos/blog.css')) ?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      <!-- <a class="btn btn-sm btn-outline-success" href="<?php echo(base_url('public/usuario')) ?>">Regístrate</a> -->
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Hogar de paso para Animales</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="<?php echo(base_url('public/animales/listado')) ?>" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-success" href="<?php echo(base_url('public/animales')) ?>">Regístra tu mascota</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted-success" href="<?php echo(base_url("https://www.fundacion-affinity.org/perros-gatos-y-personas/busco-un-animal-de-compania/las-razones-detras-del-abandono-de-una-mascota"))?>">No nos abandones</a>
      <a class="p-2 text-muted-success" href="<?php echo(base_url("http://www.mascotea.net/es/blog/2014/08/21/refugios-de-animales"))?>">Tipos de refugios</a>
      <a class="p-2 text-muted-success" href="<?php echo(base_url("https://www.fundacion-affinity.org/perros-gatos-y-personas/que-hacer-si-encuentras-un-perro-perdido-o-abandonado"))?>"> mascota perdida</a>
      <a class="p-2 text-muted-success" href="<?php echo(base_url("https://www.nationalgeographicla.com/animales/2018/03/6-consejos-para-admirar-la-fauna-silvestre"))?>">Fauna silvestre perdida </a>
      <a class="p-2 text-muted-success" href="<?php echo(base_url("https://www.fundaciontepa.org/"))?>">Adopta</a>
      <a class="p-2 text-muted-success" href="<?php echo(base_url("https://www.purina.es/perros/adoptar-un-perro/antes-de-adoptar-un-perro/requisitos-para-adoptar-un-perro"))?>">Politicas</a>
  
    </nav>
  </div>

  
      <div class="row p-2">
         <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
             <div id="refugio" class="col col-12 px-0">
               <h1 class="display-4 font-italic">Refugio de animales</h1>
                  <p class="lead my-3">Un refugio de animales es una instalación que sirve como espacio de acogida a animales sin hogar, perdidos o abandonados, en su mayoría, perros y gatos. Sin embargo, se encuentran también animales salvajes, exóticos de importación, o animales de gran tamaño, como elefantes, caballos, etc</p>
                  <p class="lead mb-0"><a href="https://es.wikipedia.org/wiki/Refugio_de_animales" class="text-white font-weight-bold">sigue leyendo...</a></p>
              
                      <div id="avatar" class="col col-12 px-0">
                    
                    <img  src="<?php echo(base_url('http://placeimg.com/640/480/animals')) ?>" class="d-block w-100" alt="avatar" width="100" height="490"  >
                    </div>
      
               </div>
         </div>
    
       </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"></strong>
           <h3 class="d-inline-block mb-2 text-success">Mascota</h3>
          <!-- <div class="mb-1 text-muted">slonnnsn</div> --> 
          <p class="card-text mb-auto">Un animal de compañía, mascota o animal doméstico, es un animal domesticado que se conserva con el propósito de brindar compañía o para el disfrute del cuidador.</p>
          <a href="<?php echo(base_url('https://es.wikipedia.org/wiki/Animal_de_compa%C3%B1%C3%ADa')) ?>" class="stretched-link">sigue leyendo</a>
        </div>
        <div class="col p-6 d-flex flex-column position-static">
        
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns=" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
          <img  src="<?php echo(base_url('public/img/mascotas.jpg')) ?>" class="bd-placeholder-img" alt="avatar" width="100%" height="100%" focusable="false" >
          
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success"></strong>
          <h3 class="d-inline-block mb-2 text-success">Flora y fauna</h3>
          <!-- <div class="mb-1 text-muted">Nov 11</div> -->
          <p class="mb-auto">son el conjunto de seres vivos que forman parte de un ecosistema. Flora hace referencia a las especies vegetales, mientras que fauna es el término utilizado para categorizar a los animales.</p>
          <a href="<?php echo(base_url('https://www.diferenciador.com/flora-y-fauna/')) ?>" class="stretched-link">sigue leyendo</a>
        </div>
        <div class="col p-6 d-flex flex-column position-static">
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
          <img  src="<?php echo(base_url('public/img/Guacamalla.jpg')) ?>" class="bd-placeholder-img" alt="avatar" width="100%" height="100%" focusable="false" >
        </div>
      </div>
    </div>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
      refugio de animales
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">Protectoras de animales</h2>
      

        <p>Una Protectora de animales se rige por un principio claro y simple: el respeto a la dignidad del animal. Estas organizaciones se posicionan en contra de toda acción de maltrato hacia los animales, sea cual sea su motivo. Sólo emplean el sacrificio de los animales que acogen cuando éstos padecen una enfermedad terminal y cuando existe un peligro para la sociedad. Las protectoras de animales basan su actividad en acoger los diferentes animales que carecen de hogar. Las ayudas que reciben suelen ser de voluntarios que acogen temporalmente a los animales del albergue, generalmente los de corta edad. Existen diferentes modos de colaborar:</p>
        <hr>
        <p>Haciéndose socios de la protectora.<br>Haciendo donativos económicos o bien materiales que sirvan de ayuda a los animales.</p>
        <blockquote>
          <p>Colaborando en cualquier actividad  <strong>(sacándoles a pasear, vacunarles, limpiarles, etc.).</strong> Divulgando información.</p>
        </blockquote>
        <p> <em></em> Apadrinando los animales que se encuentran en la protectora.</p>
        <h2>Fauna silvestre o salvaje</h2>
        <p>La fauna se divide en distintos tipos de acuerdo al origen geográfico de donde provienen las especies que habitan un ecosistema o biotopo. La fauna silvestre o salvaje es aquella que vive en libertad y no ha sido domesticada.

Conjunto de animales, (invertebrados, reptiles, aves, anfibios,  y mamíferos) que viven  libremente y fuera del control del hombre en ambientes naturales. 1​Los invertebrados muchas veces suelen ser considerados fuera de la definición de fauna silvestre, generalmente viven dentro de un ecosistema natural como lo es un bosque, selva, desierto, manglar etc.  Cuando viven en un lugar diferente a su ecosistema natural es porque han sido extraídos por el hombre para diversos fines pero se siguen considerando fauna silvestre.</p>
        <h3>VALOR</h3>
        <p>En general, se dice que la Fauna Silvestre es uno de los “recursos” naturales renovables básicos, junto al agua, el aire, el suelo y la vegetación; es decir, un beneficio que podemos utilizar y reponer para utilizarlo continuamente.</p>
        <pre><code>patrimonio natural</code></pre>
        <p>Normalmente, la sociedad valora las cosas de acuerdo a su utilidad, es decir, le otorga un valor real o económico, expresado generalmente en dinero.</p>
        <h3>EXPLOTACIÓN</h3>
        <p>Durante muchos años  se consideró a la fauna como un recurso natural inagotable, el cual era explotado de una forma descabellada , al grado que se extinguieron especies muchas especies de las que hoy conocemos su historia, y muchas se encuentran  amenazadas o en peligro crítico  de extinción, debido a la intensa “demanda” y explotación  por parte del humano  que  le ha dado  fines diversos  , como comida,  fuente de comercio para pieles animales de exhibición etc</p>
        <ul>
          <li>Especie nativa.</li>
          <li>Especie introducida</li>
          <li>Especie invasora</li>
        </ul>
        
        <p>El criterio de recurso natural inagotable ahora a cambiado

Los animales silvestres tienen valor desde muchos puntos de vista como el estético, económico, comercial y cinegético entre otros, pero pocas veces son percibidos con un valor ecológico.</p>
      </div><!-- /.blog-post -->

      <div class="blog-post">
        <h2 class="blog-post-title">REPRODUCCIÓN </h2>
        <p class="blog-post-meta"></p>

        <p>En los zoológicos modernos existen algunos objetivos como; recreación, educación, conservación e investigación, y en estas dos últimas entra la reproducción involucrándose algunas áreas como: anatomía, fisiología, endocrinología, nutrición, patología, manejo y etología que conlleva expertos en cada uno de los distintos temas.</p>
        <blockquote>
          <p>El sistema inmunológico de los animales silvestres se adquiere por medio de las características parentales, <strong>sistema inmunológico de los animales</strong> El sistema inmunológico de los animales silvestres se adquiere por medio de las características parentales, la información genética y la experiencia adquirida en la naturaleza. La reproducción de la fauna contiene a la selección natural como un factor importante  para la preservación de la especie por medio del mayor éxito en la supervivencia individual o de una manada o grupo de individuos.</p>
        </blockquote>
        <p>Los animales silvestres tienen su ciclo de vida <em>en áreas geográficas naturales</em>   en donde se han adaptado a las diferentes características que sus  nichos les ofrecen y que  además en su nicho encuentran  los elementos necesarios para satisfacer sus necesidades energéticas, fisiológicas, metabólicas y reproductivas.</p>
      </div><!-- /.blog-post -->

      

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="https://www.quo.es/naturaleza/g47790/animales-mas-viejos-del-mundo/">Más viejo</a>
        <a class="btn btn-outline-secondary" href="https://pixabay.com/es/images/search/los%20animales%20j%C3%B3venes/" >Más joven</a>
      </nav>

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">La diversidad de los animales</h4>
        <p class="mb-0">El Reino Animal <em>es el que ha alcanzado mayor diversidad de vida</em>  , pues superan el millón las especies animales descritas hasta el presente, si bien los científicos estiman que puede haber varias decenas de millones de especies aún por descubrir..</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Archivo</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="<?php echo(base_url('https://www.semana.com/nacion/articulo/sequia-en-casanare-deja-20000-animales-muertos/381115-3/')) ?> ">marzo 2014</a></li>
          <li><a href="<?php echo(base_url('https://www.bbc.com/mundo/noticias/2014/02/140219_trafico_ilegal_fauna_america_amv')) ?>">Febrero 2014</a></li>
          <li><a href="<?php echo(base_url('https://www.elespectador.com/noticias/bogota/a-partir-del-1-de-enero-de-2014-vehiculos-de-traccion-animal-seran-decomisados/')) ?>">enero 2014</a></li>
          <li><a href="<?php echo(base_url('https://elpais.com/hemeroteca/2013-12-11/')) ?>">Diciembre 2013</a></li>
          <li><a href="<?php echo(base_url('https://www.bbc.com/mundo/noticias/2015/11/151130_colombia_avistan_hipopotamos_pablo_escobar_bd')) ?>">Noviembre 2015</a></li>
          <li><a href="<?php echo(base_url('https://www.elnortedecastilla.es/sociedad/201610/03/animales-nuevo-grial-humanidad-20160927123439.html')) ?>">Octubre 2016</a></li>
          <li><a href="<?php echo(base_url('https://www.infobae.com/america/mexico/2020/09/18/19-s-ellos-fueron-los-perros-rescatistas-heroes-despues-del-terremoto-de-2017/')) ?>">Septiembre 2017</a></li>
          <li><a href="<?php echo(base_url('https://elpais.com/elpais/2018/08/30/album/1535656013_850978.html')) ?>">Agosto 2018</a></li>
          <li><a href="<?php echo(base_url('https://es.mongabay.com/2019/07/animales-nuevas-especies-2019/')) ?>">Julio 2019</a></li>
          <li><a href="<?php echo(base_url('https://www.eitb.eus/es/tag/animales/')) ?>">Junio 2020</a></li>
          <li><a href="<?php echo(base_url('https://www.bbc.com/mundo/noticias/2012/05/120521_animales_infanticidio_lp')) ?>">Mayo 2012</a></li>
          <li><a href="<?php echo(base_url('https://www.bbc.com/mundo/video_fotos/2011/04/110418_galeria_animales_raros_extintos_lh')) ?>">Abril 2011</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Sigueme</h4>
        <ol class="list-unstyled">
          <li><a href="<?php echo(base_url('https://github.com/login')) ?>">GitHub</a></li>
          <li><a href="#<?php echo(base_url('https://twitter.com/?lang=es')) ?>">Twitter</a></li>
          <li><a href="#<?php echo(base_url('https://www.facebook.com/')) ?>">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>&copy; kamilo-2020</p>
  <p>
    <a href="<?php echo(base_url('public/indexani')) ?>">Volver arriba</a>
  </p>
</body>
</html>
