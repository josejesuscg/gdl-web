<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. A, totam id omnis alias corrupti quibusdam, itaque rerum quia tenetur voluptatibus necessitatibus placeat aperiam corporis exercitationem rem perspiciatis laudantium vel nam?
    </p>
  </section> <!--seccion-->

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/mp4">
        <source src="video/video.ogv" type="video/mp4">
      </video>
    </div> <!--contenedor video-->
     
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del Evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fas fa-code"></i> Talleres</a>
            <a href="#conferencias"><i class="fas fa-comment"></i> Conferencias</a>
            <a href="#seminarios"><i class="fas fa-university"></i> Seminarios</a>
          </nav>


          <div id="talleres" class="info-curso ocultar clearfix"> 
                <div class="detalle-evento">
                  <h3>HTML5, CSS3 y JavaScript</h3>
                  <p><i class="fas fa-clock"></i> 16:00 hrs</p>
                  <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
                  <p><i class="fas fa-user"></i> Juan Pablo De la Torre Valdez</p>
                </div>
                <div class="detalle-evento">
                  <h3>Responsive Web Design</h3>
                  <p><i class="fas fa-clock"></i> 20:00 hrs</p>
                  <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
                  <p><i class="fas fa-user"></i> Juan Pablo De la Torre Valdez</p>
                </div>
                <a href="" class="button float-right"> Ver todos</a>
          </div><!--TALLERES CIERRE-->

          <div id="conferencias" class="info-curso ocultar clearfix"> 
            <div class="detalle-evento">
              <h3>Como ser freelancer</h3>
              <p><i class="fas fa-clock"></i> 10:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
              <p><i class="fas fa-user"></i> Gregorio Sanchez </p>
            </div>
            <div class="detalle-evento">
              <h3>Tecnologias del Futuro</h3>
              <p><i class="fas fa-clock"></i> 17:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
              <p><i class="fas fa-user"></i> Susan Sanchez</p>
            </div>
            <a href="" class="button float-right"> Ver todos</a>
          </div><!--TALLERES CIERRE-->

          <div id="seminarios" class="info-curso ocultar clearfix"> 
            <div class="detalle-evento">
              <h3>Diseño UI/UX para moviles</h3>
              <p><i class="fas fa-clock"></i> 17:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 11 de Dic</p>
              <p><i class="fas fa-user"></i> Harold Garcia</p>
            </div>
            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="fas fa-clock"></i> 10:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 11 de Dic</p>
              <p><i class="fas fa-user"></i> Susana Rivera</p>
            </div>
            <a href="" class="button float-right"> Ver todos</a>
      </div><!--TALLERES CIERRE-->
        </div><!--Programa-evento cierre-->
      </div><!--Contenedor cierre-->
    </div><!---Contenido-Programa cierre-->
  </section><!--programa -->
  

  
<?php include_once 'includes/templates/invitados.php'; ?>

  
  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p>Invitados</li>
        <li><p class="numero"></p>Talleres</li>
        <li><p class="numero"></p>Dias</li>
        <li><p class="numero"></p>Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>

          <div class="tabla-precio">
            <h3>Pase por dia</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>

            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>

          <div class="tabla-precio">
            <h3>Todos los dias</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>

            <a href="#" class="button">Comprar</a>
          </div>
        </li>
        <li>

          <div class="tabla-precio">
            <h3>Pase por 2 dias</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>

            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>

  </section>

  <div id="mapa" class="mapa">

  </div>

  <section class="seccion">
    <h2>testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor fuga libero sit architecto eos id obcaecati porro eum incidunt?</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen testimonial">
            <cite>
              Oswaldo Aponte Escobedo <span>Diseñador en @PRISMA</span>
            </cite>

          </footer>
        </blockquote>
      </div> <!--testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor fuga libero sit architecto eos id obcaecati porro eum incidunt?</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen testimonial">
            <cite>
              Oswaldo Aponte Escobedo <span>Diseñador en @PRISMA</span>
            </cite>

          </footer>
        </blockquote>
      </div> <!--testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolor fuga libero sit architecto eos id obcaecati porro eum incidunt?</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen testimonial">
            <cite>
              Oswaldo Aponte Escobedo <span>Diseñador en @PRISMA</span>
            </cite>

          </footer>
        </blockquote>
      </div> <!--testimonial-->
  </div>

  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>registrate al newslatter</p>
      <h3>gdlwebcamp</h3>
      <a href="#" class="button transparente">Registro</a>
    </div> <!--conntenido-->
  </div> <!--newsletter-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p>dias</li>
        <li><p id="horas" class="numero"></p>horas</li>
        <li><p id="minutos" class="numero"></p>minutos</li>
        <li><p id="segundos" class="numero"></p>segundos</li>
      </ul>
    </div>
  </section>

  <?php include_once 'includes/templates/footer.php'; ?>

 