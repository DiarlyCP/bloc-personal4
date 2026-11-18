<?php
// Datos personales y artículos centralizados en un solo archivo
$perfil = [
    "nombre" => "Diarly Tatiana Cabanillas Polo",
    "titulo_blog" => "DIARLY TATIANA | BLOG",
    "subtitulo" => "Ingeniería de Sistemas e Informática • Décimo Ciclo • UNS",
    "ubicacion" => "Nuevo Chimbote, Áncash - Perú",
    "fecha" => "Miércoles, 18 de Noviembre de 2026",
    "bio_corta" => "Estudiante de 10mo ciclo en la Universidad Nacional del Santa. Apasionada por el análisis de datos, el desarrollo de software móvil y web, la arquitectura empresarial y las tecnologías en la nube.",
    "correo" => "tatiana.cp.ing@gmail.com",
    "github" => "https://github.com/DiarlyCP",
    "foto" => "perfil.png"
];

$portada = [
    "kicker" => "Bitácora Académica & Tecnológica 2026",
    "titulo" => "Construyendo soluciones digitales desde la Ingeniería de Sistemas",
    "resumen" => "Un espacio personal donde comparto mis aprendizajes en el décimo ciclo universitario, proyectos de desarrollo móvil y web, análisis de datos, experiencias internacionales y reflexiones sobre tecnología."
];

$secciones = [
    "datos" => [
        "tag" => "Análisis de Datos",
        "titulo" => "¿Por qué me interesa el análisis de datos en Ingeniería de Sistemas?",
        "autor" => "Diarly Cabanillas",
        "fecha" => "15 Nov 2026",
        "resumen" => "A lo largo de la carrera vemos código y bases de datos, pero entender qué nos dicen esos números para tomar decisiones estratégicas en organizaciones reales es lo que más me apasiona."
    ],
    "decimo" => [
        "tag" => "Décimo Ciclo",
        "titulo" => "Lo que aprendí llegando al décimo ciclo de Ingeniería de Sistemas",
        "autor" => "Diarly Cabanillas",
        "fecha" => "10 Nov 2026",
        "resumen" => "Un repaso por los retos de los últimos semestres en la UNS, la gestión de proyectos de tesis, el trabajo en equipo y cómo aplicamos la ingeniería de software a problemas reales."
    ],
    "movil" => [
        "tag" => "Desarrollo Móvil & IA",
        "titulo" => "PetPoint: Integrando Kotlin, Firebase y visión artificial para ayudar mascotas",
        "autor" => "Diarly Cabanillas",
        "fecha" => "04 Nov 2026",
        "resumen" => "El proceso de diseñar una aplicación nativa en Android Studio con arquitectura MVVM, Google Maps y modelos de reconocimiento para reunir mascotas perdidas en Chimbote y Nuevo Chimbote."
    ],
    "web" => [
        "tag" => "Desarrollo Web & Cloud",
        "titulo" => "Desplegando aplicaciones PHP en Vercel con flujo continuo en GitHub",
        "autor" => "Diarly Cabanillas",
        "fecha" => "28 Oct 2026",
        "resumen" => "Cómo estructurar proyectos web en PHP y llevarlos a producción en la nube utilizando repositorios de GitHub y entornos serverless modernos."
    ],
    "arquitectura" => [
        "tag" => "Arquitectura Empresarial",
        "titulo" => "Modernización de procesos con TOGAF ADM y modelado ArchiMate",
        "autor" => "Diarly Cabanillas",
        "fecha" => "20 Oct 2026",
        "resumen" => "La importancia de alinear las capas de negocio, aplicación y tecnología al analizar la transformación digital en instituciones públicas y administración municipal."
    ],
    "experiencia" => [
        "tag" => "Experiencia Académica",
        "titulo" => "Aprendizajes de mis pasantías e intercambios universitarios",
        "autor" => "Diarly Cabanillas",
        "fecha" => "14 Oct 2026",
        "resumen" => "Desde la pasantía internacional en la Universidad de La Laguna en Tenerife hasta las experiencias académicas y pre-profesionales que marcaron mi crecimiento profesional."
    ],
    "hackathon" => [
        "tag" => "Innovación Cívica",
        "titulo" => "Participación en Hackatones y laboratorios de emprendimiento",
        "autor" => "Diarly Cabanillas",
        "fecha" => "05 Oct 2026",
        "resumen" => "El valor de colaborar bajo presión para prototipar soluciones tecnológicas con impacto social, validando ideas desde la perspectiva del usuario."
    ],
    "personal" => [
        "tag" => "Personal & Equilibrio",
        "titulo" => "Entre código, diseño y música: cómo desconecto en mis tiempos libres",
        "autor" => "Diarly Cabanillas",
        "fecha" => "28 Sep 2026",
        "resumen" => "No todo es código y servidores: explorar herramientas de diseño gráfico, disfrutar de buena música y compartir tiempo en familia son mi mejor recarga de energía."
    ],
    "cloud" => [
        "tag" => "Cloud Computing & Redes",
        "titulo" => "Explorando máquinas virtuales, Linux y servicios en Google Cloud",
        "autor" => "Diarly Cabanillas",
        "fecha" => "18 Sep 2026",
        "resumen" => "Prácticas de despliegue en instancias Compute Engine, redes VPC, administración de servidores Linux y contenedores Docker."
    ],
    "sistemas" => [
        "tag" => "Sistemas de Gestión",
        "titulo" => "Digitalización y seguimiento documental con PHP y MySQL",
        "autor" => "Diarly Cabanillas",
        "fecha" => "10 Sep 2026",
        "resumen" => "Cómo el diseño de bases de datos relacionales bien estructuradas agiliza la atención al ciudadano y el control de expedientes administrativos."
    ]
];
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blog Personal de Diarly Tatiana Cabanillas Polo - Ingeniería de Sistemas e Informática">
    <meta name="author" content="Diarly Tatiana Cabanillas Polo">

    <title>DIARLY TATIANA | Blog Personal 2026</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Merriweather:wght@700;900&display=swap" rel="stylesheet">

    <style>
      :root {
        --blog-primary: #1d4ed8;       /* Azul cobalto profesional */
        --blog-primary-dark: #1e3a8a;  /* Azul marino profundo */
        --blog-accent: #0ea5e9;        /* Celeste vibrante */
        --blog-dark: #0f172a;          /* Pizarra oscuro */
        --blog-gray-bg: #f1f5f9;       /* Fondo gris suave */
        --blog-border: #e2e8f0;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background-color: var(--blog-gray-bg);
        color: #1e293b;
      }

      /* Barra superior institucional */
      .top-utility-bar {
        background-color: var(--blog-dark);
        color: #cbd5e1;
        font-size: 0.8rem;
        padding: 7px 0;
      }

      .status-badge {
        background-color: var(--blog-primary);
        color: #fff;
        font-weight: 700;
        padding: 3px 9px;
        border-radius: 4px;
        font-size: 0.72rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
      }

      /* Cabecera principal con foto de perfil */
      .main-header {
        background-color: #ffffff;
        border-bottom: 3px solid var(--blog-primary);
        padding: 20px 0;
      }

      .profile-avatar {
        width: 82px;
        height: 82px;
        border-radius: 50%;
        object-fit: cover;
        object-position: top;
        border: 3px solid var(--blog-primary);
        box-shadow: 0 4px 10px rgba(29, 78, 216, 0.18);
      }

      .brand-logo {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 800;
        font-size: 1.95rem;
        color: var(--blog-dark) !important;
        letter-spacing: -0.5px;
        text-decoration: none !important;
        line-height: 1.1;
      }

      .brand-logo span {
        color: var(--blog-primary);
      }

      .brand-subtitle {
        font-size: 0.85rem;
        font-weight: 600;
        color: #475569;
        margin-top: 4px;
      }

      .btn-contact-header {
        background-color: #eff6ff;
        color: var(--blog-primary);
        border: 1px solid #bfdbfe;
        font-weight: 700;
        font-size: 0.82rem;
        padding: 8px 16px;
        border-radius: 6px;
        transition: all 0.2s;
        text-decoration: none !important;
        display: inline-block;
      }

      .btn-contact-header:hover {
        background-color: var(--blog-primary);
        color: #ffffff;
      }

      /* Barra de navegación */
      .nav-blog {
        background-color: var(--blog-primary);
        box-shadow: 0 3px 8px rgba(15, 23, 42, 0.12);
      }

      .nav-blog .nav-link {
        color: #ffffff !important;
        font-weight: 700;
        font-size: 0.83rem;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        padding: 12px 16px;
        transition: background 0.2s;
      }

      .nav-blog .nav-link:hover {
        background-color: var(--blog-primary-dark);
      }

      /* Portada Hero */
      .hero-portada {
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
        border-left: 6px solid var(--blog-accent);
        color: #ffffff;
        border-radius: 8px;
        padding: 2.25rem;
        margin-top: 1.5rem;
        margin-bottom: 1.75rem;
        box-shadow: 0 10px 25px rgba(15, 23, 42, 0.12);
      }

      .hero-kicker {
        display: inline-block;
        background-color: var(--blog-accent);
        color: #0f172a;
        font-weight: 800;
        font-size: 0.74rem;
        text-transform: uppercase;
        padding: 4px 12px;
        border-radius: 4px;
        margin-bottom: 12px;
        letter-spacing: 0.6px;
      }

      .hero-portada h1 {
        font-family: 'Merriweather', serif;
        font-weight: 900;
        font-size: 2rem;
        line-height: 1.3;
        margin-bottom: 0.75rem;
      }

      .hero-portada p.lead {
        font-size: 1.08rem;
        color: #e2e8f0;
        font-weight: 400;
        margin-bottom: 0;
      }

      /* Tarjetas de artículos */
      .blog-card {
        background-color: #ffffff;
        border: 1px solid var(--blog-border);
        border-top: 4px solid var(--blog-primary);
        border-radius: 8px;
        height: 100%;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
      }

      .blog-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(15, 23, 42, 0.08);
      }

      .section-tag {
        display: inline-block;
        background-color: #eff6ff;
        color: var(--blog-primary);
        font-weight: 700;
        font-size: 0.74rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 3px 10px;
        border-radius: 4px;
        margin-bottom: 10px;
      }

      .blog-title {
        font-family: 'Merriweather', serif;
        font-weight: 700;
        font-size: 1.12rem;
        line-height: 1.4;
        margin-bottom: 8px;
        color: #0f172a;
      }

      .blog-meta {
        font-size: 0.78rem;
        color: #64748b;
        font-weight: 600;
        margin-bottom: 12px;
      }

      .blog-summary {
        font-size: 0.93rem;
        color: #334155;
        line-height: 1.6;
      }

      .section-divider {
        border-left: 4px solid var(--blog-primary);
        padding-left: 12px;
        font-weight: 800;
        font-size: 1.15rem;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        color: #0f172a;
        margin: 2rem 0 1.15rem 0;
      }

      /* Tarjeta Sobre Mí */
      .about-box {
        background-color: #ffffff;
        border: 1px solid var(--blog-border);
        border-radius: 8px;
        padding: 1.75rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
      }

      .about-photo-lg {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        object-position: top;
        border: 4px solid var(--blog-primary);
      }

      .skill-pill {
        display: inline-block;
        background-color: #f1f5f9;
        color: #1e293b;
        border: 1px solid #cbd5e1;
        font-size: 0.8rem;
        font-weight: 600;
        padding: 4px 12px;
        border-radius: 20px;
        margin: 3px 4px 3px 0;
      }

      /* Footer */
      .site-footer {
        background-color: var(--blog-dark);
        color: #94a3b8;
        padding: 2.25rem 0;
        margin-top: 3.5rem;
        border-top: 4px solid var(--blog-primary);
        font-size: 0.88rem;
      }

      .site-footer strong {
        color: #ffffff;
      }
    </style>
  </head>

  <body>
    <!-- Barra superior -->
    <div class="top-utility-bar">
      <div class="container d-flex justify-content-between align-items-center">
        <div>
          <span class="status-badge mr-2">PORTAFOLIO & BLOG</span>
          <span><?php echo $perfil["fecha"]; ?> &bull; <?php echo $perfil["ubicacion"]; ?></span>
        </div>
        <div class="d-none d-md-block">
          <span>Ingeniería de Sistemas e Informática</span>
        </div>
      </div>
    </div>

    <!-- Cabecera Principal con Foto -->
    <header class="main-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8 d-flex align-items-center justify-content-center justify-content-md-start">
            <img src="<?php echo $perfil["foto"]; ?>" alt="Diarly Tatiana" class="profile-avatar mr-3">
            <div>
              <a class="brand-logo" href="#inicio">DIARLY <span>TATIANA</span></a>
              <div class="brand-subtitle"><?php echo $perfil["subtitulo"]; ?></div>
            </div>
          </div>
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
            <a href="#sobre-mi" class="btn-contact-header">Conoce mi perfil &darr;</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Menú de Secciones -->
    <nav class="navbar navbar-expand-lg nav-blog p-0 sticky-top">
      <div class="container">
        <button class="navbar-toggler text-white py-2" type="button" data-toggle="collapse" data-target="#navbarSecciones">
          &#9776; Secciones del Blog
        </button>
        <div class="collapse navbar-collapse" id="navbarSecciones">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="#datos-decimo">Datos &amp; 10mo Ciclo</a></li>
            <li class="nav-item"><a class="nav-link" href="#proyectos">Proyectos Software</a></li>
            <li class="nav-item"><a class="nav-link" href="#arquitectura-exp">Arquitectura &amp; Experiencias</a></li>
            <li class="nav-item"><a class="nav-link" href="#cloud-sistemas">Cloud &amp; Sistemas</a></li>
            <li class="nav-item"><a class="nav-link" href="#personal">Personal</a></li>
            <li class="nav-item"><a class="nav-link" href="#sobre-mi">Sobre mí</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container" id="inicio">
      <!-- Portada Hero -->
      <section class="hero-portada">
        <span class="hero-kicker"><?php echo $portada["kicker"]; ?></span>
        <h1><?php echo $portada["titulo"]; ?></h1>
        <p class="lead"><?php echo $portada["resumen"]; ?></p>
      </section>

      <!-- Sección 1: Datos y Décimo Ciclo -->
      <div class="section-divider" id="datos-decimo">Análisis de Datos y Vida Universitaria</div>
      <div class="row">
        <div class="col-md-6 mb-4">
          <article class="card blog-card">
            <div class="card-body d-flex flex-column">
              <div><span class="section-tag"><?php echo $secciones["datos"]["tag"]; ?></span></div>
              <h3 class="blog-title"><?php echo $secciones["datos"]["titulo"]; ?></h3>
              <div class="blog-meta">Por <?php echo $secciones["datos"]["autor"]; ?> &bull; <?php echo $secciones["datos"]["fecha"]; ?></div>
              <p class="blog-summary mb-0"><?php echo $secciones["datos"]["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-6 mb-4">
          <article class="card blog-card">
            <div class="card-body d-flex flex-column">
              <div><span class="section-tag"><?php echo $secciones["decimo"]["tag"]; ?></span></div>
              <h3 class="blog-title"><?php echo $secciones["decimo"]["titulo"]; ?></h3>
              <div class="blog-meta">Por <?php echo $secciones["decimo"]["autor"]; ?> &bull; <?php echo $secciones["decimo"]["fecha"]; ?></div>
              <p class="blog-summary mb-0"><?php echo $secciones["decimo"]["resumen"]; ?></p>
            </div>
          </article>
        </div>
      </div>

      <!-- Sección 2: Proyectos de Software -->
      <div class="section-divider" id="proyectos">Desarrollo Móvil y Web</div>
      <div class="row">
        <div class="col-md-6 mb-4">
          <article class="card blog-card">
            <div class="card-body d-flex flex-column">
              <div><span class="section-tag"><?php echo $secciones["movil"]["tag"]; ?></span></div>
              <h3 class="blog-title"><?php echo $secciones["movil"]["titulo"]; ?></h3>
              <div class="blog-meta">Por <?php echo $secciones["movil"]["autor"]; ?> &bull; <?php echo $secciones["movil"]["fecha"]; ?></div>
              <p class="blog-summary mb-0"><?php echo $secciones["movil"]["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-6 mb-4">
          <article class="card blog-card">
            <div class="card-body d-flex flex-column">
              <div><span class="section-tag"><?php echo $secciones["web"]["tag"]; ?></span></div>
              <h3 class="blog-title"><?php echo $secciones["web"]["titulo"]; ?></h3>
              <div class="blog-meta">Por <?php echo $secciones["web"]["autor"]; ?> &bull; <?php echo $secciones["web"]["fecha"]; ?></div>
              <p class="blog-summary mb-0"><?php echo $secciones["web"]["resumen"]; ?></p>
            </div>
          </article>
        </div>
      </div>

      <!-- Sección 3: Arquitectura y Experiencias -->
      <div class="section-divider" id="arquitectura-exp">Arquitectura Empresarial y Trayectoria</div>
      <div class="row">
        <div class="col-md-6 mb-4">
          <article class="card blog-card">
            <div class="card-body d-flex flex-column">
              <div><span class="section-tag"><?php echo $secciones["arquitectura"]["tag"]; ?></span></div>
              <h3 class="blog-title"><?php echo $secciones["arquitectura"]["titulo"]; ?></h3>
              <div class="blog-meta">Por <?php echo $secciones["arquitectura"]["autor"]; ?> &bull; <?php echo $secciones["arquitectura"]["fecha"]; ?></div>
              <p class="blog-summary mb-0"><?php echo $secciones["arquitectura"]["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-6 mb-4">
          <article class="card blog-card">
            <div class="card-body d-flex flex-column">
              <div><span class="section-tag"><?php echo $secciones["experiencia"]["tag"]; ?></span></div>
              <h3 class="blog-title"><?php echo $secciones["experiencia"]["titulo"]; ?></h3>
              <div class="blog-meta">Por <?php echo $secciones["experiencia"]["autor"]; ?> &bull; <?php echo $secciones["experiencia"]["fecha"]; ?></div>
              <p class="blog-summary mb-0"><?php echo $secciones["experiencia"]["resumen"]; ?></p>
            </div>
          </article>
        </div>
      </div>

      <!-- Sección 4: Cloud, Sistemas e Innovación -->
      <div class="section-divider" id="cloud-sistemas">Cloud Computing, Sistemas e Innovación</div>
      <div class="row">
        <div class="col-md-4 mb-4">
          <article class="card blog-card">
            <div class="card-body d-flex flex-column">
              <div><span class="section-tag"><?php echo $secciones["cloud"]["tag"]; ?></span></div>
              <h3 class="blog-title"><?php echo $secciones["cloud"]["titulo"]; ?></h3>
              <div class="blog-meta">Por <?php echo $secciones["cloud"]["autor"]; ?> &bull; <?php echo $secciones["cloud"]["fecha"]; ?></div>
              <p class="blog-summary mb-0"><?php echo $secciones["cloud"]["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-4 mb-4">
          <article class="card blog-card">
            <div class="card-body d-flex flex-column">
              <div><span class="section-tag"><?php echo $secciones["sistemas"]["tag"]; ?></span></div>
              <h3 class="blog-title"><?php echo $secciones["sistemas"]["titulo"]; ?></h3>
              <div class="blog-meta">Por <?php echo $secciones["sistemas"]["autor"]; ?> &bull; <?php echo $secciones["sistemas"]["fecha"]; ?></div>
              <p class="blog-summary mb-0"><?php echo $secciones["sistemas"]["resumen"]; ?></p>
            </div>
          </article>
        </div>
        <div class="col-md-4 mb-4">
          <article class="card blog-card">
            <div class="card-body d-flex flex-column">
              <div><span class="section-tag"><?php echo $secciones["hackathon"]["tag"]; ?></span></div>
              <h3 class="blog-title"><?php echo $secciones["hackathon"]["titulo"]; ?></h3>
              <div class="blog-meta">Por <?php echo $secciones["hackathon"]["autor"]; ?> &bull; <?php echo $secciones["hackathon"]["fecha"]; ?></div>
              <p class="blog-summary mb-0"><?php echo $secciones["hackathon"]["resumen"]; ?></p>
            </div>
          </article>
        </div>
      </div>

      <!-- Sección 5: Personal y Sobre Mí -->
      <div class="section-divider" id="personal">Rincón Personal y Perfil de Autora</div>
      <div class="row">
        <div class="col-md-5 mb-4">
          <article class="card blog-card">
            <div class="card-body d-flex flex-column">
              <div><span class="section-tag"><?php echo $secciones["personal"]["tag"]; ?></span></div>
              <h3 class="blog-title"><?php echo $secciones["personal"]["titulo"]; ?></h3>
              <div class="blog-meta">Por <?php echo $secciones["personal"]["autor"]; ?> &bull; <?php echo $secciones["personal"]["fecha"]; ?></div>
              <p class="blog-summary mb-0"><?php echo $secciones["personal"]["resumen"]; ?></p>
            </div>
          </article>
        </div>

        <div class="col-md-7 mb-4" id="sobre-mi">
          <div class="about-box h-100">
            <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-start">
              <img src="<?php echo $perfil["foto"]; ?>" alt="Diarly Tatiana Cabanillas Polo" class="about-photo-lg mb-3 mb-sm-0 mr-sm-4">
              <div>
                <span class="section-tag">Sobre la autora</span>
                <h4 class="font-weight-bold mb-1" style="color: #0f172a;"><?php echo $perfil["nombre"]; ?></h4>
                <p class="text-muted small mb-2"><?php echo $perfil["subtitulo"]; ?></p>
                <p class="blog-summary mb-3"><?php echo $perfil["bio_corta"]; ?></p>
                
                <div class="mb-3">
                  <span class="skill-pill">Kotlin &amp; Android</span>
                  <span class="skill-pill">PHP &amp; MySQL</span>
                  <span class="skill-pill">Análisis de Datos</span>
                  <span class="skill-pill">Google Cloud</span>
                  <span class="skill-pill">TOGAF / ArchiMate</span>
                </div>

                <div class="small">
                  <strong>Correo:</strong> <a href="mailto:<?php echo $perfil["correo"]; ?>"><?php echo $perfil["correo"]; ?></a> &bull;
                  <strong>GitHub:</strong> <a href="<?php echo $perfil["github"]; ?>" target="_blank">DiarlyCP</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="site-footer">
      <div class="container text-center">
        <p class="mb-1"><strong><?php echo $perfil["nombre"]; ?></strong> &mdash; Blog Personal 2026</p>
        <p class="mb-2">Ingeniería de Sistemas e Informática &bull; Universidad Nacional del Santa</p>
        <p class="mb-0"><a href="#inicio" class="text-white">Volver arriba &uarr;</a></p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
