<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Diarly Tatiana Cabanillas Polo">
  <meta name="description" content="Portafolio y blog académico de Diarly Tatiana Cabanillas Polo, estudiante de Ingeniería de Sistemas e Informática en la UNS. Proyectos, experiencias y CV.">
  <meta name="theme-color" content="#fbf9f6">
  <title>Diarly Tatiana Cabanillas Polo · Portafolio & Blog</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
  <style>
    :root {
      --paper: #fbf9f6;
      --white: #ffffff;
      --ink: #1f1a1d;
      --muted: #594e54;
      --accent: #7c2d3e;       /* Borgoña / Vino elegante */
      --accent-dark: #591c2a;
      --soft-tint: #f3e8eb;    /* Rosa pálido editorial */
      --warm-badge: #f5ebd6;   /* Crema dorado suave */
      --line: #e4dce0;
      --display: "Instrument Serif", Georgia, serif;
      --body: "DM Sans", system-ui, sans-serif;
    }

    *, *::before, *::after { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body { margin: 0; color: var(--ink); background: var(--paper); font: 1rem/1.65 var(--body); }
    button { font: inherit; }
    a { color: inherit; text-underline-offset: .22em; }
    img { display: block; width: 100%; height: auto; }
    h1, h2, h3, p, figure { margin: 0; }
    h1, h2, h3 { text-wrap: balance; }
    :focus-visible { outline: 3px solid var(--accent); outline-offset: 4px; }
    [id] { scroll-margin-top: 6rem; }
    .wrap { width: min(calc(100% - 3rem), 1136px); margin-inline: auto; }
    .skip { position: fixed; z-index: 10; left: 1rem; top: 1rem; padding: .5rem 1rem; background: var(--white); transform: translateY(-200%); }
    .skip:focus { transform: none; }

    /* Cabecera */
    .header { position: sticky; top: 0; z-index: 5; background: #fbf9f6f2; border-bottom: 1px solid var(--line); backdrop-filter: blur(12px); }
    .header-inner { min-height: 70px; display: flex; justify-content: space-between; align-items: center; gap: 1.1rem; }
    .brand { display: inline-flex; align-items: center; gap: .65rem; font-weight: 700; text-decoration: none; white-space: nowrap; }
    .monogram { display: grid; place-items: center; width: 2.3rem; aspect-ratio: 1; color: var(--accent); background: var(--soft-tint); border: 1px solid #dec6cd; border-radius: 50%; font: 1.2rem/1 var(--display); }
    nav ul { display: flex; flex-wrap: wrap; gap: .65rem clamp(.85rem, 2vw, 1.8rem); list-style: none; margin: 0; padding: 0; }
    nav a { color: var(--muted); font-size: .88rem; font-weight: 700; text-decoration: none; transition: color .2s; }
    nav a:hover { color: var(--accent); text-decoration: underline; }

    /* Hero */
    .hero { display: grid; grid-template-columns: minmax(0, 1.32fr) minmax(0, 1fr); gap: clamp(1.6rem, 6vw, 5.5rem); align-items: center; padding-block: clamp(2.7rem, 7vw, 6rem) clamp(3rem, 7vw, 5.2rem); }
    .hero-copy { animation: arrive .7s ease-out both; }
    .overline { display: flex; align-items: center; gap: .55rem; margin-bottom: .9rem; color: var(--accent); font-size: .74rem; font-weight: 700; letter-spacing: .12em; line-height: 1.35; text-transform: uppercase; }
    .overline::before { content: ""; width: .55rem; height: .55rem; flex: none; border-radius: 50%; background: var(--accent); }
    h1 { font: 400 clamp(3.4rem, 7.5vw, 6.6rem)/.88 var(--display); letter-spacing: -.025em; }
    h1 em { display: block; color: var(--accent); font-weight: 400; }
    .intro { max-width: 50ch; margin-top: 1.45rem; color: var(--muted); font-size: clamp(1rem, 1.5vw, 1.15rem); }
    .actions { display: flex; flex-wrap: wrap; gap: .75rem; margin-top: 1.5rem; }
    .button { display: inline-flex; align-items: center; justify-content: center; gap: .6rem; min-height: 46px; padding: .6rem 1.2rem; border: 1px solid var(--accent); border-radius: 100px; color: var(--accent); background: transparent; cursor: pointer; font-size: .88rem; font-weight: 700; text-decoration: none; transition: transform .22s ease, background .22s ease, color .22s ease; }
    .button.primary { color: #fff; background: var(--accent); }
    .button:hover { transform: translateY(-2px); background: var(--soft-tint); }
    .button.primary:hover { background: var(--accent-dark); color: #fff; }

    /* Retrato */
    .portrait { position: relative; isolation: isolate; width: 100%; max-width: 370px; justify-self: center; padding: .65rem .65rem 0; animation: arrive .75s .12s ease-out both; }
    .portrait::before { content: ""; position: absolute; z-index: -1; inset: -2% -5% 6% 4%; border-radius: 49% 49% 20px 20px; background: var(--soft-tint); transform: rotate(6deg); }
    .portrait::after { content: ""; position: absolute; z-index: 1; width: clamp(36px, 7vw, 68px); aspect-ratio: 1; right: -4%; top: 8%; border-radius: 50%; background: var(--warm-badge); border: 5px solid var(--paper); pointer-events: none; }
    .portrait img { aspect-ratio: 4 / 5; object-fit: cover; object-position: top center; border-radius: 46% 46% 17px 17px / 28% 28% 17px 17px; background: var(--white); box-shadow: 0 12px 28px rgba(31, 26, 29, 0.08); }
    @keyframes arrive { from { opacity: .72; transform: translateY(12px); } to { opacity: 1; transform: none; } }

    /* Secciones */
    .section { padding-block: clamp(3rem, 6vw, 5.2rem); border-top: 1px solid var(--line); }
    .section h2 { font: 400 clamp(2.5rem, 5vw, 4.5rem)/.98 var(--display); letter-spacing: -.015em; }
    .section-intro { max-width: 62ch; margin-top: .75rem; color: var(--muted); }

    /* Proyecto Destacado */
    .project { display: grid; grid-template-columns: minmax(0, 1.15fr) minmax(0, .95fr); align-items: stretch; margin-top: 1.75rem; overflow: hidden; border: 1px solid var(--line); border-radius: 24px; background: var(--white); }
    .project-copy { align-self: center; padding: clamp(1.5rem, 4vw, 3.2rem); }
    .meta { color: var(--accent); font-size: .75rem; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; }
    .project h3, .card h3, .resume-side h3 { margin-top: .28rem; font: 400 clamp(1.9rem, 3.5vw, 2.95rem)/1.05 var(--display); }
    .project p + p, .card p + p { margin-top: .7rem; }
    .project h3 + p, .card h3 + p { margin-top: .7rem; }
    .copy { color: var(--muted); }
    .tags { display: flex; flex-wrap: wrap; gap: .4rem; padding: 0; margin: 1.1rem 0 0; list-style: none; }
    .tags li { padding: .26rem .68rem; border: 1px solid #e3cbd2; border-radius: 100px; background: #faf2f4; color: var(--accent); font-size: .76rem; font-weight: 700; }

    /* Panel visual del proyecto destacado */
    .project-highlight-box { background: linear-gradient(145deg, var(--soft-tint) 0%, #f6efe9 100%); padding: clamp(1.5rem, 3.5vw, 2.5rem); display: flex; flex-direction: column; justify-content: center; gap: 1rem; border-left: 1px solid var(--line); }
    .mini-stat { background: var(--white); border: 1px solid var(--line); border-radius: 16px; padding: 1.1rem 1.25rem; }
    .mini-stat strong { display: block; color: var(--accent); font-size: .78rem; text-transform: uppercase; letter-spacing: .06em; margin-bottom: .25rem; }
    .mini-stat p { font-size: .92rem; color: var(--ink); line-height: 1.45; }

    /* Grilla de 2 columnas */
    .two-columns { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 1.1rem; margin-top: 1.1rem; }
    .card { padding: clamp(1.35rem, 3vw, 2.1rem); border: 1px solid var(--line); border-radius: 20px; background: var(--white); transition: transform .2s ease, box-shadow .2s ease; }
    .card:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(31, 26, 29, 0.05); }
    .card h3 { font-size: clamp(1.7rem, 3vw, 2.25rem); }
    .card.soft { background: #f6f2f4; border-color: #e4d8dd; }

    /* CV / Currículum */
    .cv-heading { display: flex; flex-wrap: wrap; align-items: end; justify-content: space-between; gap: .9rem; }
    .resume { display: grid; grid-template-columns: minmax(0, 1.35fr) minmax(0, .85fr); gap: 1.1rem; margin-top: 1.5rem; }
    .resume-side { padding: clamp(1.35rem, 3.6vw, 2.25rem); border: 1px solid var(--line); border-radius: 20px; background: var(--white); }
    .resume-side.skills { background: var(--soft-tint); border-color: #e0cbd2; }
    .resume-side h3 { margin: 0 0 .6rem; font-size: clamp(1.8rem, 3vw, 2.45rem); }
    .resume-side h3:not(:first-child) { margin-top: 1.35rem; padding-top: 1.1rem; border-top: 1px solid var(--line); }
    .resume-list { list-style: none; padding: 0; margin: 0; }
    .resume-list li + li { margin-top: .7rem; }
    .resume-list span { display: block; color: var(--muted); font-size: .88rem; }
    .skills dl { margin: 0; }
    .skills dl div { display: flex; justify-content: space-between; align-items: baseline; gap: 1rem; padding-block: .52rem; border-bottom: 1px solid #dec6cd; }
    .skills dt { font-weight: 700; }
    .skills dd { margin: 0; color: var(--muted); font-size: .9rem; text-align: right; }
    .print-name { display: none; }

    /* Footer */
    .footer { border-top: 1px solid var(--line); padding-block: 1.6rem; }
    .footer .wrap { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: .5rem 1rem; }
    .footer p, .footer a { color: var(--muted); font-size: .88rem; }

    @media (max-width: 760px) {
      .hero { grid-template-columns: minmax(0, 1.08fr) minmax(0, .92fr); gap: 1.2rem; }
      h1 { font-size: clamp(2.9rem, 8vw, 4.6rem); }
      .project { grid-template-columns: minmax(0, 1fr); }
      .project-highlight-box { border-left: 0; border-top: 1px solid var(--line); }
    }

    @media (max-width: 580px) {
      .wrap { width: calc(100% - 2rem); }
      [id] { scroll-margin-top: 8rem; }
      .header-inner { flex-direction: column; align-items: start; gap: .3rem; padding-block: .5rem .6rem; }
      nav ul { gap: .25rem .95rem; }
      nav a { font-size: .8rem; }
      .hero, .two-columns, .resume { grid-template-columns: minmax(0, 1fr); }
      .hero { gap: 1.6rem; }
      .portrait { width: min(82%, 270px); }
    }

    @media print {
      @page { margin: 15mm; }
      body { background: white; color: black; font-size: 10.5pt; }
      .header, .skip, .footer, main > :not(#cv), #print-cv { display: none !important; }
      #cv { width: 100%; padding: 0; border: 0; }
      #cv .section-intro { color: black; }
      #cv h2 { font-size: 22pt; }
      .print-name { display: block; margin-bottom: .55rem; font-size: 17pt; font-weight: bold; }
      .resume { display: block; margin-top: 1rem; }
      .resume-side, .resume-side.skills { padding: 0; border: 0; background: white; }
      .resume-side + .resume-side { margin-top: 1rem; }
      .resume-side h3, .resume-side h3:not(:first-child) { padding: 0; border: 0; font-size: 14pt; }
      .resume-list span, .skills dd { color: black; }
      .skills dl div { padding-block: .17rem; max-width: 24rem; }
    }
  </style>
</head>
<body id="inicio">
  <a class="skip" href="#contenido">Ir al contenido</a>

  <header class="header">
    <div class="wrap header-inner">
      <a class="brand" href="#inicio"><span class="monogram" aria-hidden="true">DT</span> Diarly Tatiana</a>
      <nav aria-label="Navegación principal">
        <ul>
          <li><a href="#proyectos">Proyectos</a></li>
          <li><a href="#experiencia">Experiencia</a></li>
          <li><a href="#blog">Bitácora</a></li>
          <li><a href="#cv">CV</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="contenido">
    <!-- Hero Principal -->
    <section class="wrap hero" aria-labelledby="nombre">
      <div class="hero-copy">
        <p class="overline">Portafolio &amp; Bitácora · Nuevo Chimbote, Perú</p>
        <h1 id="nombre">Diarly Tatiana <em>Cabanillas Polo</em></h1>
        <p class="intro">Estudio Ingeniería de Sistemas e Informática en la Universidad Nacional del Santa (10.º ciclo). Me apasiona el análisis de datos, el desarrollo de software móvil y web, y la arquitectura empresarial aplicada a soluciones reales.</p>
        <div class="actions">
          <a class="button primary" href="#proyectos">Ver mis proyectos <span aria-hidden="true">↘</span></a>
          <a class="button" href="#cv">Consultar mi CV</a>
        </div>
      </div>
      <figure class="portrait">
        <img src="Foto cv 1.png" alt="Retrato profesional de Diarly Tatiana Cabanillas Polo">
      </figure>
    </section>

    <!-- Sección Proyectos -->
    <section class="wrap section" id="proyectos" aria-labelledby="titulo-proyectos">
      <h2 id="titulo-proyectos">Proyectos destacados</h2>
      <p class="section-intro">Sistemas móviles, plataformas web y propuestas tecnológicas desarrolladas durante los últimos semestres de carrera e iniciativas de innovación.</p>

      <!-- Proyecto Principal -->
      <article class="project">
        <div class="project-copy">
          <p class="meta">Proyecto Móvil &amp; Visión Artificial · 2026</p>
          <h3>PetPoint</h3>
          <p class="copy">Aplicación móvil nativa para Android diseñada para identificar, geolocalizar y reunir mascotas perdidas en Chimbote y Nuevo Chimbote. Integra modelos de inteligencia artificial para reconocimiento visual y mapas en tiempo real.</p>
          <p class="copy">Desarrollada bajo arquitectura MVVM con sincronización en la nube y almacenamiento local para garantizar respuesta rápida en campo.</p>
          <ul class="tags">
            <li>Kotlin</li>
            <li>Android Studio</li>
            <li>YOLOv8 &amp; DINOv2</li>
            <li>Firebase</li>
            <li>Google Maps SDK</li>
            <li>MVVM</li>
          </ul>
        </div>
        <div class="project-highlight-box">
          <div class="mini-stat">
            <strong>Enfoque Técnico</strong>
            <p>Reconocimiento de características visuales de mascotas mediante visión por computadora combinado con alertas geolocalizadas.</p>
          </div>
          <div class="mini-stat">
            <strong>Impacto &amp; Emprendimiento</strong>
            <p>Proyecto estructurado con validación de usuarios y plan de negocio para incubación universitaria (Incuba / EQUIPU).</p>
          </div>
        </div>
      </article>

      <!-- Otros Proyectos en 2 columnas -->
      <div class="two-columns">
        <article class="card">
          <p class="meta">Proyecto de Tesis · Web &amp; Gestión Documental</p>
          <h3>Sistema Web UGEL Santa</h3>
          <p class="copy">Plataforma web desarrollada con PHP y MySQL bajo arquitectura en capas y metodología Scrum para optimizar el seguimiento, registro y atención de expedientes en el Área de Actas y Certificados de la UGEL Santa.</p>
          <ul class="tags">
            <li>PHP</li>
            <li>MySQL</li>
            <li>Arquitectura en Capas</li>
            <li>Scrum</li>
          </ul>
        </article>

        <article class="card">
          <p class="meta">SaaS &amp; Inteligencia Artificial</p>
          <h3>RestaurantCloud AI</h3>
          <p class="copy">Plataforma web multi-tenant desplegada con PostgreSQL y Docker que incorpora pronóstico de demanda, recomendaciones inteligentes de inventario y un asistente generativo para la gestión operativa de restaurantes.</p>
          <ul class="tags">
            <li>PostgreSQL</li>
            <li>Docker</li>
            <li>SaaS Multi-tenant</li>
            <li>IA Generativa</li>
          </ul>
        </article>

        <article class="card soft">
          <p class="meta">Hackatón TransformaGob 2026 · PCM</p>
          <h3>BarraCero · Alerta Albarracina</h3>
          <p class="copy">Solución cívica desarrollada junto al equipo Brain Master para el reto de respuesta ciudadana impulsado por el Laboratorio de Gobierno y Transformación Digital.</p>
          <ul class="tags">
            <li>Innovación Pública</li>
            <li>Trabajo Colaborativo</li>
            <li>Prototipado Rápido</li>
          </ul>
        </article>

        <article class="card soft">
          <p class="meta">Arquitectura Empresarial</p>
          <h3>Modernización Tributaria Municipal</h3>
          <p class="copy">Modelado de arquitectura empresarial con TOGAF ADM y ArchiMate (capas de motivación, aplicación y tecnología) orientado a modernizar la administración tributaria en la Municipalidad Distrital de Nuevo Chimbote.</p>
          <ul class="tags">
            <li>TOGAF ADM</li>
            <li>ArchiMate</li>
            <li>Gestión Pública</li>
          </ul>
        </article>
      </div>
    </section>

    <!-- Sección Experiencia y Pasantías -->
    <section class="wrap section" id="experiencia" aria-labelledby="titulo-experiencia">
      <h2 id="titulo-experiencia">Experiencia y pasantías</h2>
      <p class="section-intro">Formación práctica en instituciones públicas, movilidad académica internacional y talleres de emprendimiento tecnológico.</p>

      <div class="two-columns">
        <article class="card">
          <p class="meta">Movilidad Internacional · Tenerife, España</p>
          <h3>Universidad de La Laguna (ULL)</h3>
          <p class="copy">Estancia académica internacional e intercambio universitario en España, incluyendo visitas técnicas al Centro de Procesamiento de Datos (CPD) y actividades de integración académica en ingeniería informática.</p>
          <ul class="tags">
            <li>Intercambio Internacional</li>
            <li>Infraestructura CPD</li>
            <li>2025</li>
          </ul>
        </article>

        <article class="card">
          <p class="meta">Prácticas Pre-Profesionales · Nuevo Chimbote</p>
          <h3>UGEL Santa · Área de Actas y Certificados</h3>
          <p class="copy">Soporte administrativo, gestión documentaria, orientación ciudadana, control de expedientes en Excel y asistencia técnica básica al personal administrativo en la Unidad de Gestión Educativa Local del Santa.</p>
          <ul class="tags">
            <li>Trámite Documentario</li>
            <li>Gestión en Excel</li>
            <li>Soporte al Usuario</li>
          </ul>
        </article>

        <article class="card soft">
          <p class="meta">Movilidad Nacional · Arequipa, Perú</p>
          <h3>Pasantía Universitaria Nacional</h3>
          <p class="copy">Programa de intercambio y pasantía académica realizado en Arequipa durante el 2026, fortaleciendo competencias de investigación, análisis y trabajo multidisciplinario.</p>
          <ul class="tags">
            <li>Movilidad Académica</li>
            <li>2026</li>
          </ul>
        </article>

        <article class="card soft">
          <p class="meta">Emprendimiento &amp; Innovación · EQUIPU</p>
          <h3>Laboratorio de Emprendimientos 2026</h3>
          <p class="copy">Participación en talleres especializados de validación con clientes, modelos de negocio, marketing digital y presentaciones pitch para proyectos tecnológicos universitarios.</p>
          <ul class="tags">
            <li>Validación de Producto</li>
            <li>Pitch &amp; Startups</li>
            <li>EQUIPU</li>
          </ul>
        </article>
      </div>
    </section>

    <!-- Sección Bitácora / Reflexiones -->
    <section class="wrap section" id="blog" aria-labelledby="titulo-blog">
      <h2 id="titulo-blog">Notas de décimo ciclo</h2>
      <p class="section-intro">Reflexiones breves sobre datos, desarrollo de software y lo que significa cerrar la etapa universitaria.</p>

      <div class="two-columns">
        <article class="card">
          <p class="meta">Análisis de Datos · 15 Nov 2026</p>
          <h3>¿Por qué me interesa el análisis de datos en Sistemas?</h3>
          <p class="copy">A lo largo de la carrera construimos bases de datos y aplicaciones, pero interpretar qué nos dicen los datos para mejorar procesos reales y apoyar la toma de decisiones es donde encuentro mayor impacto.</p>
        </article>

        <article class="card">
          <p class="meta">Cloud &amp; Web · 18 Nov 2026</p>
          <h3>De local a la nube: desplegando portafolios en Vercel</h3>
          <p class="copy">Llevar un proyecto desde nuestro entorno local hacia GitHub y publicarlo con despliegue continuo en Vercel permite compartir nuestro trabajo técnico de manera limpia, rápida y profesional.</p>
        </article>
      </div>
    </section>

    <!-- Sección CV -->
    <section class="wrap section" id="cv" aria-labelledby="titulo-cv">
      <div class="cv-heading">
        <div>
          <h2 id="titulo-cv">Currículum Vitae</h2>
          <p class="section-intro">Resumen académico, competencias técnicas y herramientas que manejo en desarrollo y análisis.</p>
        </div>
        <button class="button" id="print-cv" type="button" onclick="window.print()">Imprimir / Guardar PDF</button>
      </div>

      <p class="print-name">Diarly Tatiana Cabanillas Polo — Ingeniería de Sistemas e Informática</p>

      <div class="resume">
        <div class="resume-side">
          <h3>Formación Académica</h3>
          <ul class="resume-list">
            <li>
              <strong>Ingeniería de Sistemas e Informática (10.º ciclo)</strong>
              <span>Universidad Nacional del Santa (UNS) · Nuevo Chimbote, Perú</span>
            </li>
            <li>
              <strong>Estancia Académica Internacional</strong>
              <span>Universidad de La Laguna (ULL) · Tenerife, España (2025)</span>
            </li>
            <li>
              <strong>Pasantía Universitaria Nacional</strong>
              <span>Programa de Movilidad Académica · Arequipa, Perú (2026)</span>
            </li>
          </ul>

          <h3>Experiencia y Participación</h3>
          <ul class="resume-list">
            <li>
              <strong>Practicante Pre-Profesional · Área de Actas y Certificados</strong>
              <span>UGEL Santa · Gestión documentaria, atención al usuario y soporte técnico</span>
            </li>
            <li>
              <strong>Desarrolladora &amp; Líder de Proyecto · PetPoint</strong>
              <span>Aplicación móvil Android en Kotlin con integración de IA y geolocalización</span>
            </li>
            <li>
              <strong>Participante · Hackatón TransformaGob 2026 &amp; EQUIPU</strong>
              <span>Desarrollo de prototipos cívicos y validación de emprendimientos tecnológicos</span>
            </li>
          </ul>
        </div>

        <div class="resume-side skills">
          <h3>Habilidades Técnicas</h3>
          <dl>
            <div>
              <dt>Lenguajes</dt>
              <dd>Kotlin, PHP, Python, SQL, JavaScript, HTML/CSS</dd>
            </div>
            <div>
              <dt>Móvil &amp; Web</dt>
              <dd>Android Studio (MVVM, Room), Laragon, Bootstrap</dd>
            </div>
            <div>
              <dt>Bases de Datos</dt>
              <dd>MySQL, PostgreSQL, Firebase Firestore</dd>
            </div>
            <div>
              <dt>Datos &amp; Oficina</dt>
              <dd>Excel avanzado (tablas dinámicas), Google Colab</dd>
            </div>
            <div>
              <dt>Cloud &amp; Sistemas</dt>
              <dd>Google Cloud (Compute Engine), Docker, Linux, Git</dd>
            </div>
            <div>
              <dt>Arquitectura &amp; UX</dt>
              <dd>TOGAF, ArchiMate, Bizagi, Figma, Canva</dd>
            </div>
          </dl>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="wrap">
      <p>&copy; 2026 Diarly Tatiana Cabanillas Polo · Nuevo Chimbote, Perú</p>
      <p>
        <a href="mailto:tatiana.cp.ing@gmail.com">tatiana.cp.ing@gmail.com</a> &middot;
        <a href="https://github.com/DiarlyCP" target="_blank" rel="noopener">GitHub</a> &middot;
        <a href="#inicio">Subir &uarr;</a>
      </p>
    </div>
  </footer>
</body>
</html>
