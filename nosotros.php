<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quienes somos</title>
  <meta charset="utf-8">
  <meta name="author" content="AMDECO" />
  <meta name="viewport" content="width=device-width" />
  <link rel="icon" href="images/deco.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <header>
    <?php include './include/header.php'; ?>
  </header>
  <div class="fluid-container p-5" style="background-color: var(--custom-color-dark); color: var(--custom-color-light)">
    <div class="container">
      <div class="row m-2">
        <div class="col-lg-6 d-flex justify-content-center">
          <img src="images/casa_amdeco.jpeg" class="rounded-pill" alt="Imagem da Casa AMDECO">
        </div>
        <div class="col-lg-6">
          <h1 class="mt-4 text-center">Sobre Nosotros</h1>
          <p class="text-center fw-lighter">
            Somos una entidad de carácter departamental, persona colectiva de derecho privado, sin fines de lucro, establecida al amparo de las previsiones legales contempladas por los Artículos 21 numeral 4 y 302 numerales 2, 34, 35 y 42 de la Constitución Política del Estado Plurinacional vigente, Artículo 12 numeral 15 de la Ley de Municipalidades y los Artículos 58 y siguientes del Código Civil. Con esencia democrática, participativa y municipalista, integrada por los Municipios de Cochabamba.
            (Cfr. Estatuto Orgánico de AMDECO: Art. 1).
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <h2 class="text-center">ESTRUCTURA DE REPRESENTACIÓN DE AMDECO</h2>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center">
          El sistema de representación de la AMDECO parte de la consideración de que la población de cada una de las unidades territoriales municipales del Departamento de Cochabamba está políticamente representada por sus respectivos Gobiernos Autónomos Municipales, máxima forma de representación del actual sistema democrático establecido por la Constitución Política del Estado. La AMDECO representa a cada uno de esos Gobiernos Autónomos Municipales, por lo que se constituye a su vez en la representación política de las autonomías municipales del Departamento. AMDECO desarrolla su naturaleza institucional, por un lado a través de la representación política departamental, nacional e internacional de los Gobiernos Autónomos Municipales de Cochabamba y por otro, mediante el fortalecimiento de las capacidades institucionales de gestión de los mismos. La actual estructura de representación de la AMDECO es la siguiente:
        </p>
        <ul class="col-lg-12 d-flex flex-column justify-content-center align-items-center">
          <li>Congreso o Asamblea Departamental de Gobiernos Autónomos Municipales;</li>
          <li>Consejo Directivo;</li>
          <li>Estructura Técnica Ejecutiva.</li>
        </ul>
        <div class="row">
          <div class="col-lg-6">
            <img src="images/cochabamba3.jpg" class="img-fluid mt-3" alt="Imagen de Cochabamba">
          </div>
          <div class="col-lg-6">
            <h3>Nuestro Equipo</h3>
            <div class="row">
              <div class="col-6">
                <img src="images/cochabamba3.jpg" class="img-fluid mt-3" alt="Imagen de Cochabamba">
              </div>
              <div class="col-6">
                <img src="images/cochabamba5.jpg" class="img-fluid mt-3" alt="Imagen de Cochabamba">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- HACER EL ACCORDION -->
  <div class="row py-5 my-5" style="background-color: var(--custom-color-light);">
    <div class="d-flex flex-column justify-content-center5 align-items-center">
      <h2 class="text-center" style="color: var(--custom-color-primary);">FAQ</h2>
      <div class="accordion col-lg-8" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              NUESTROS OBJETIVOS INSTITUCIONALES
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body" style="color: var(--custom-color-dark);">
              <ul>
                <li>Promover y profundizar la integración Regional, Nacional e Internacional, a través del impulso al Sistema Asociativo Municipal en el Departamento de Cochabamba, con el fin de fortalecer el desarrollo Nacional, Departamental, Regional y Municipal.</li><br>
                <li>Representación exclusiva y única de todo los Gobiernos Municipales de Cochabamba, ante las Autoridades del Gobierno Central, Instituciones y Organismos Públicos y Privados nacionales e Internacionales, sean estos de Cooperación, de inversión o de Relacionamiento.</li><br>
                <li>Impulsar el fortalecimiento institucional de los Gobiernos Municipales integrantes de la Asociación, las Mancomunidades constituidas por ellos y de las Instituciones creadas para la participación ciudadana.</li><br>
                <li>Prestar servicios o brindar asesoramiento para fortalecer la gestión a sus miembros y otros que soliciten, a través de sus unidades especializadas, empresas, sociedades o de Consultoría en los ámbitos técnico, financiero, jurídico, planificación, proyectos, , capacitación, administrativo, productivo, desarrollo humano, desarrollo económico local y otros, sin fines de lucro.</li><br>
                <li>Participar o ser parte de empresas, sociedades con entidades públicas y/o privadas, promover o constituirlas para fomentar el desarrollo y la participación Municipal.</li><br>
                <li>Aquellos que sean complementarios y conexos con los anteriores.</li><br>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              QUÉ SIGNIFICAN LAS SIGLAS DE AMDECO?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body" style="color: var(--custom-color-dark);">
              <strong>Asociación de Gobiernos Autónomos Municipales de Cochabamba.</strong>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              MISIÓN & VISIÓN
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body" style="color: var(--custom-color-dark);">
              <ul>
                <h4>Misión</h4>
                <li>
                  AMDECO al 2023 es una entidad con institucionalidad y sostenibilidad técnica, legal y financiera, que se encuentra a la vanguardia del fortalecimiento institucional y defensa de los intereses comunes de la autonomía municipal en Bolivia.
                </li>
                <h4>Visión</h4>
                <li>
                  Representar los intereses de los Gobiernos Autónomos Municipales del Departamento de Cochabamba y fortalecersus capacidades de gestión municipal para el desarrollo local y de su Autonomía.
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <footer>
    <?php include './include/footer.php'; ?>
  </footer>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>