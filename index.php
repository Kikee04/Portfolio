<?php
// Portfolio - Enrique Barranco
// Compatible con XAMPP / PHP
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Enrique Barranco — Sistemas, Redes & Automatización IA</title>

  <!-- Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&family=Syne:wght@400;600;700;800&display=swap" rel="stylesheet"/>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css"/>
</head>
<body>

<!-- ===================== NAVBAR ===================== -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#hero">
      <span class="brand-bracket">[</span>
      <span class="brand-name">EB</span>
      <span class="brand-bracket">]</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="toggler-icon"><i class="bi bi-grid-3x3"></i></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav gap-1">
        <?php
        $nav_items = [
          ['href' => '#hero',        'label' => 'Inicio',     'icon' => 'house'],
          ['href' => '#sobre-mi',    'label' => 'Sobre mí',   'icon' => 'person'],
          ['href' => '#experiencia', 'label' => 'Experiencia','icon' => 'briefcase'],
          ['href' => '#educacion',   'label' => 'Educación',  'icon' => 'mortarboard'],
          ['href' => '#skills',      'label' => 'Skills',     'icon' => 'cpu'],
          ['href' => '#contacto',    'label' => 'Contacto',   'icon' => 'send'],
        ];
        foreach ($nav_items as $item): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= $item['href'] ?>">
            <i class="bi bi-<?= $item['icon'] ?> nav-icon"></i>
            <?= $item['label'] ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- ===================== HERO ===================== -->
<section id="hero" class="hero-section">
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow-1"></div>
  <div class="hero-glow-2"></div>

  <div class="container hero-container">
    <div class="row align-items-center min-vh-100 py-5">

      <!-- LEFT: Text -->
      <div class="col-lg-7 hero-text-col">
        <div class="hero-badge">
          <span class="badge-dot"></span>
          Disponible para nuevas oportunidades
        </div>
        <h1 class="hero-name">
          Enrique<br/>
          <span class="name-accent">Barranco</span>
        </h1>
        <div class="hero-subtitle">
          <span class="subtitle-prefix">_</span>
          <span class="typed-text" id="typedText"></span>
          <span class="cursor-blink">|</span>
        </div>
        <p class="hero-description">
          Técnico en Sistemas e Infraestructuras con experiencia en entornos Windows y Linux,
          automatización de procesos con IA y administración de redes corporativas.
          Siempre en busca del siguiente reto técnico.
        </p>
        <div class="hero-buttons">
          <a href="#experiencia" class="btn-primary-custom">
            <i class="bi bi-terminal"></i> Ver experiencia
          </a>
          <a href="#contacto" class="btn-secondary-custom">
            <i class="bi bi-arrow-right"></i> Contactar
          </a>
        </div>
      </div>

      <!-- RIGHT: Terminal card -->
      <div class="col-lg-5 hero-terminal-col">
        <div class="terminal-card">
          <div class="terminal-header">
            <span class="t-dot t-red"></span>
            <span class="t-dot t-yellow"></span>
            <span class="t-dot t-green"></span>
            <span class="t-title">enrique@sistemas:~</span>
          </div>
          <div class="terminal-body" id="terminalBody">
            <div class="t-line"><span class="t-prompt">$</span> <span class="t-cmd">./iniciar_perfil.sh</span></div>
            <div class="t-output t-delay-1">Iniciando perfil profesional...</div>
            <div class="t-line t-delay-2"><span class="t-prompt">$</span> <span class="t-cmd">check --sistemas</span></div>
            <div class="t-output t-ok t-delay-3"><i class="bi bi-check-circle-fill"></i> Windows Server ... <span class="t-status">OK</span></div>
            <div class="t-output t-ok t-delay-3"><i class="bi bi-check-circle-fill"></i> Linux/ASIR      ... <span class="t-status">OK</span></div>
            <div class="t-output t-ok t-delay-3"><i class="bi bi-check-circle-fill"></i> Active Directory... <span class="t-status">OK</span></div>
            <div class="t-line t-delay-4"><span class="t-prompt">$</span> <span class="t-cmd">check --redes</span></div>
            <div class="t-output t-ok t-delay-5"><i class="bi bi-check-circle-fill"></i> VLAN / Switching... <span class="t-status">OK</span></div>
            <div class="t-output t-ok t-delay-5"><i class="bi bi-check-circle-fill"></i> DHCP / DNS      ... <span class="t-status">OK</span></div>
            <div class="t-line t-delay-6"><span class="t-prompt">$</span> <span class="t-cmd">check --automatizacion-ia</span></div>
            <div class="t-output t-ok t-delay-7"><i class="bi bi-check-circle-fill"></i> n8n / APIs      ... <span class="t-status">OK</span></div>
            <div class="t-output t-ok t-delay-7"><i class="bi bi-check-circle-fill"></i> IA Workflows    ... <span class="t-status">OK</span></div>
            <div class="t-line t-delay-8"><span class="t-prompt">$</span> <span class="t-cmd">status</span></div>
            <div class="t-output t-ready t-delay-9">▶ Perfil listo. Disponible para nuevos proyectos.</div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Scroll indicator -->
  <div class="scroll-indicator">
    <div class="scroll-line"></div>
    <span>scroll</span>
  </div>
</section>

<!-- ===================== SOBRE MÍ ===================== -->
<section id="sobre-mi" class="section-pad">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">01 /</span>
      <h2 class="section-title">Sobre mí</h2>
      <div class="section-line"></div>
    </div>

    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div class="avatar-wrapper">
          <div class="avatar-ring">
            <div class="avatar-inner">
              <i class="bi bi-person-badge avatar-icon"></i>
            </div>
          </div>
          <div class="avatar-stats">
            <div class="stat-pill">
              <span class="stat-num">4+</span>
              <span class="stat-label">Empresas</span>
            </div>
            <div class="stat-pill">
              <span class="stat-num">2</span>
              <span class="stat-label">Titulaciones</span>
            </div>
            <div class="stat-pill">
              <span class="stat-num">∞</span>
              <span class="stat-label">Curiosidad</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="about-text-block">
          <p class="about-lead">
            Soy técnico en sistemas informáticos y redes con una fuerte orientación hacia la automatización
            inteligente de procesos y la administración de infraestructuras.
          </p>
          <p class="about-body">
            Actualmente amplío mi formación cursando el Grado Superior de ASIR en el CES Ramón y Cajal,
            consolidando conocimientos en Linux, virtualización, administración de redes y servicios en la nube.
            Mi trayectoria abarca entornos tan diversos como despachos de abogados, fundaciones tecnológicas
            y empresas de automatización con IA, lo que me ha forjado una visión técnica versátil y orientada
            a resultados.
          </p>
          <p class="about-body">
            Me motiva encontrar soluciones eficientes donde otros ven complejidad: desde montar y configurar
            infraestructuras desde cero hasta integrar flujos de automatización que ahorran horas de trabajo
            manual. Creo firmemente en el aprendizaje continuo y en la colaboración como motores del
            crecimiento profesional.
          </p>
          <div class="about-tags">
            <?php
            $tags = ['Windows Server','Linux','Redes','Virtualización','IA','n8n','Soporte Técnico','Active Directory'];
            foreach ($tags as $tag): ?>
            <span class="about-tag"><?= $tag ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== EXPERIENCIA ===================== -->
<section id="experiencia" class="section-pad section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">02 /</span>
      <h2 class="section-title">Experiencia</h2>
      <div class="section-line"></div>
    </div>

    <div class="timeline">
      <?php
      $experiences = [
        [
          'company'  => 'LANTI AI',
          'role'     => 'Técnico de Automatización & IA',
          'icon'     => 'robot',
          'type'     => 'Automatización · IA · Marketing',
          'color'    => 'green',
          'skills'   => ['Automatización de Procesos','Inteligencia Artificial','Marketing Digital','APIs','n8n'],
          'desc'     => 'Diseño e implementación de flujos de automatización inteligente con herramientas de IA. Integración de APIs y orquestación de procesos para reducir trabajo manual y mejorar la eficiencia operativa.',
        ],
        [
          'company'  => 'Grupo Solutia',
          'role'     => 'Técnico Informático',
          'icon'     => 'pc-display',
          'type'     => 'Sistemas · Hardware · Soporte',
          'color'    => 'teal',
          'skills'   => ['Instalación de Equipos','Configuración de Sistemas','Soporte Técnico','Redes','Hardware'],
          'desc'     => 'Instalación, configuración y mantenimiento de equipos informáticos en entorno corporativo. Resolución de incidencias técnicas y soporte a usuarios finales con alta satisfacción de cliente.',
        ],
        [
          'company'  => 'CIAC',
          'role'     => 'Técnico Informático',
          'icon'     => 'server',
          'type'     => 'Windows · Hardware · Soporte',
          'color'    => 'lime',
          'skills'   => ['Windows Server','Hardware','Sistemas','Soporte Técnico','Diagnóstico'],
          'desc'     => 'Administración de sistemas Windows, gestión de hardware y prestación de soporte técnico especializado. Configuración y mantenimiento de equipos en entorno institucional.',
        ],
        [
          'company'  => 'Despacho Abogados GAYA',
          'role'     => 'Técnico de Soporte & Administración',
          'icon'     => 'briefcase',
          'type'     => 'Soporte · Reparación · Administración',
          'color'    => 'emerald',
          'skills'   => ['Reparación de Equipos','Administración','Soporte','Ofimática','Mantenimiento'],
          'desc'     => 'Mantenimiento y reparación del parque informático del despacho. Soporte técnico a profesionales jurídicos y gestión administrativa de incidencias tecnológicas.',
        ],
      ];

      foreach ($experiences as $i => $exp): ?>
      <div class="timeline-item" data-aos="fade-up">
        <div class="timeline-connector">
          <div class="timeline-node color-<?= $exp['color'] ?>">
            <i class="bi bi-<?= $exp['icon'] ?>"></i>
          </div>
          <?php if ($i < count($experiences) - 1): ?>
          <div class="timeline-vline"></div>
          <?php endif; ?>
        </div>
        <div class="timeline-card glass-card color-<?= $exp['color'] ?>">
          <div class="card-inner">
            <div class="exp-header">
              <div>
                <h3 class="exp-company"><?= $exp['company'] ?></h3>
                <h4 class="exp-role"><?= $exp['role'] ?></h4>
              </div>
              <span class="exp-type-badge"><?= $exp['type'] ?></span>
            </div>
            <p class="exp-desc"><?= $exp['desc'] ?></p>
            <div class="skill-chips">
              <?php foreach ($exp['skills'] as $s): ?>
              <span class="chip"><?= $s ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===================== EDUCACIÓN ===================== -->
<section id="educacion" class="section-pad">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">03 /</span>
      <h2 class="section-title">Educación</h2>
      <div class="section-line"></div>
    </div>

    <div class="row g-4">
      <?php
      $education = [
        [
          'degree'  => 'ASIR',
          'full'    => 'Administración de Sistemas Informáticos en Red',
          'center'  => 'C.E.S Ramón y Cajal',
          'status'  => 'En curso',
          'icon'    => 'hdd-network',
          'skills'  => ['Linux', 'Redes', 'Windows Server', 'Virtualización', 'Scripting', 'Cloud'],
          'desc'    => 'Grado Superior enfocado en administración de infraestructuras, servicios de red, virtualización y seguridad informática.',
          'badge'   => 'Grado Superior',
        ],
        [
          'degree'  => 'SMR',
          'full'    => 'Sistemas Microinformáticos y Redes',
          'center'  => 'CES Lope de Vega',
          'status'  => 'Completado',
          'icon'    => 'cpu',
          'skills'  => ['Hardware', 'Sistemas', 'Soporte Técnico', 'Ofimática', 'Redes Locales', 'Mantenimiento'],
          'desc'    => 'Formación técnica en montaje, configuración y mantenimiento de sistemas microinformáticos y redes de área local.',
          'badge'   => 'Grado Medio',
        ],
      ];
      foreach ($education as $edu): ?>
      <div class="col-lg-6">
        <div class="edu-card glass-card">
          <div class="edu-card-header">
            <div class="edu-icon-wrap">
              <i class="bi bi-<?= $edu['icon'] ?>"></i>
            </div>
            <div class="edu-meta">
              <span class="edu-badge"><?= $edu['badge'] ?></span>
              <span class="edu-status <?= $edu['status'] === 'En curso' ? 'status-active' : 'status-done' ?>">
                <span class="status-dot"></span><?= $edu['status'] ?>
              </span>
            </div>
          </div>
          <div class="edu-body">
            <h3 class="edu-degree"><?= $edu['degree'] ?></h3>
            <p class="edu-full"><?= $edu['full'] ?></p>
            <p class="edu-center"><i class="bi bi-building"></i> <?= $edu['center'] ?></p>
            <p class="edu-desc"><?= $edu['desc'] ?></p>
            <div class="skill-chips">
              <?php foreach ($edu['skills'] as $s): ?>
              <span class="chip chip-sm"><?= $s ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===================== SKILLS ===================== -->
<section id="skills" class="section-pad section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">04 /</span>
      <h2 class="section-title">Skills</h2>
      <div class="section-line"></div>
    </div>

    <div class="row g-4">
      <?php
      $skill_cats = [
        [
          'cat'   => 'Sistemas',
          'icon'  => 'hdd-stack',
          'color' => 'green',
          'skills' => [
            ['name' => 'Windows Server', 'icon' => 'windows', 'lvl' => 85],
            ['name' => 'Linux',           'icon' => 'terminal', 'lvl' => 80],
            ['name' => 'Active Directory','icon' => 'diagram-3','lvl' => 78],
            ['name' => 'VirtualBox',      'icon' => 'boxes',    'lvl' => 82],
          ],
        ],
        [
          'cat'   => 'Redes',
          'icon'  => 'diagram-2',
          'color' => 'teal',
          'skills' => [
            ['name' => 'VLAN',     'icon' => 'share',       'lvl' => 80],
            ['name' => 'DHCP',     'icon' => 'router',      'lvl' => 85],
            ['name' => 'DNS',      'icon' => 'globe2',      'lvl' => 83],
            ['name' => 'Switching','icon' => 'git-merge',   'lvl' => 78],
          ],
        ],
        [
          'cat'   => 'Automatización',
          'icon'  => 'robot',
          'color' => 'lime',
          'skills' => [
            ['name' => 'IA / LLMs',        'icon' => 'cpu-fill',       'lvl' => 80],
            ['name' => 'APIs REST',         'icon' => 'braces',         'lvl' => 75],
            ['name' => 'n8n',              'icon' => 'diagram-3-fill', 'lvl' => 82],
            ['name' => 'Automatización',   'icon' => 'gear-wide-connected','lvl' => 84],
          ],
        ],
        [
          'cat'   => 'Soporte & Herramientas',
          'icon'  => 'tools',
          'color' => 'emerald',
          'skills' => [
            ['name' => 'Soporte Técnico', 'icon' => 'headset',       'lvl' => 92],
            ['name' => 'Hardware',        'icon' => 'motherboard',   'lvl' => 88],
            ['name' => 'Ofimática',       'icon' => 'file-earmark-text', 'lvl' => 90],
            ['name' => 'Diagnóstico',     'icon' => 'search',        'lvl' => 86],
          ],
        ],
      ];

      foreach ($skill_cats as $cat): ?>
      <div class="col-lg-6">
        <div class="skill-card glass-card color-<?= $cat['color'] ?>">
          <div class="skill-cat-header">
            <div class="skill-cat-icon color-<?= $cat['color'] ?>">
              <i class="bi bi-<?= $cat['icon'] ?>"></i>
            </div>
            <h3 class="skill-cat-name"><?= $cat['cat'] ?></h3>
          </div>
          <div class="skill-list">
            <?php foreach ($cat['skills'] as $sk): ?>
            <div class="skill-item">
              <div class="skill-item-meta">
                <span class="skill-item-icon"><i class="bi bi-<?= $sk['icon'] ?>"></i></span>
                <span class="skill-item-name"><?= $sk['name'] ?></span>
                <span class="skill-item-pct"><?= $sk['lvl'] ?>%</span>
              </div>
              <div class="skill-bar-track">
                <div class="skill-bar-fill color-<?= $cat['color'] ?>" style="--bar-w:<?= $sk['lvl'] ?>%"></div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===================== CONTACTO ===================== -->
<section id="contacto" class="section-pad">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">05 /</span>
      <h2 class="section-title">Contacto</h2>
      <div class="section-line"></div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <p class="contact-lead">
          ¿Tienes un proyecto o una oportunidad interesante?<br/>
          <span class="accent-text">Hablemos.</span>
        </p>
      </div>
    </div>

    <div class="row justify-content-center g-4 mt-2">
      <?php
      $contacts = [
        [
          'platform' => 'LinkedIn',
          'handle'   => 'Enrique Barranco Márquez',
          'url'      => 'https://www.linkedin.com/in/enrique-barranco-m%C3%A1rquez-569513352/',
          'icon'     => 'linkedin',
          'color'    => 'contact-linkedin',
          'desc'     => 'Perfil profesional',
        ],
        [
          'platform' => 'GitHub',
          'handle'   => 'Kikee04',
          'url'      => 'https://github.com/Kikee04',
          'icon'     => 'github',
          'color'    => 'contact-github',
          'desc'     => 'Repositorios y proyectos',
        ],
        [
          'platform' => 'Email',
          'handle'   => 'trabajoenrique05@gmail.com',
          'url'      => 'mailto:trabajoenrique05@gmail.com',
          'icon'     => 'envelope',
          'color'    => 'contact-email',
          'desc'     => 'Contacto directo',
        ],
      ];
      foreach ($contacts as $c): ?>
      <div class="col-lg-4 col-md-6">
        <a href="<?= $c['url'] ?>" target="_blank" class="contact-card glass-card <?= $c['color'] ?>">
          <div class="contact-icon">
            <i class="bi bi-<?= $c['icon'] ?>"></i>
          </div>
          <div class="contact-info">
            <span class="contact-platform"><?= $c['platform'] ?></span>
            <span class="contact-handle"><?= $c['handle'] ?></span>
            <span class="contact-desc"><?= $c['desc'] ?></span>
          </div>
          <div class="contact-arrow">
            <i class="bi bi-arrow-up-right"></i>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom terminal line -->
    <div class="contact-terminal">
      <span class="t-prompt">$</span>
      <span class="t-cmd">echo "Listo para el próximo reto. Contacta conmigo."</span>
      <span class="cursor-blink">|</span>
    </div>
  </div>
</section>

<!-- ===================== FOOTER ===================== -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-inner">
      <span class="footer-brand">Enrique Barranco</span>
      <span class="footer-sep">//</span>
      <span class="footer-copy">Sistemas · Redes · Automatización IA</span>
    </div>
    <div class="footer-credit">
      <span class="t-prompt">$</span> construido con <span class="accent-text">PHP + Bootstrap</span> — <?= date('Y') ?>
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
// ── Navbar scroll ──────────────────────────
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    navbar.classList.add('navbar-scrolled');
  } else {
    navbar.classList.remove('navbar-scrolled');
  }
});

// ── Active nav link on scroll ──────────────
const sections = document.querySelectorAll('section[id]');
const navLinks  = document.querySelectorAll('.nav-link');
window.addEventListener('scroll', () => {
  let current = '';
  sections.forEach(sec => {
    const top = sec.offsetTop - 100;
    if (window.scrollY >= top) current = sec.getAttribute('id');
  });
  navLinks.forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href') === '#' + current) link.classList.add('active');
  });
});

// ── Typed text effect ─────────────────────
const phrases = [
  'Técnico en Sistemas',
  'Administrador de Redes',
  'Automatización con IA',
  'Especialista en Infraestructura',
];
let pi = 0, ci = 0, deleting = false;
const el = document.getElementById('typedText');

function type() {
  const phrase = phrases[pi];
  if (!deleting) {
    el.textContent = phrase.substring(0, ci + 1);
    ci++;
    if (ci === phrase.length) {
      deleting = true;
      setTimeout(type, 2000);
      return;
    }
  } else {
    el.textContent = phrase.substring(0, ci - 1);
    ci--;
    if (ci === 0) {
      deleting = false;
      pi = (pi + 1) % phrases.length;
    }
  }
  setTimeout(type, deleting ? 55 : 95);
}
setTimeout(type, 800);

// ── Skill bar animation on scroll ─────────
const skillBars = document.querySelectorAll('.skill-bar-fill');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.width = entry.target.style.getPropertyValue('--bar-w') || entry.target.getAttribute('style').match(/--bar-w:([\d%]+)/)?.[1] || '0%';
      entry.target.classList.add('animated');
    }
  });
}, { threshold: 0.3 });
skillBars.forEach(bar => observer.observe(bar));

// ── Smooth scroll ─────────────────────────
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    e.preventDefault();
    const target = document.querySelector(a.getAttribute('href'));
    if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    // close mobile menu
    const menu = document.getElementById('navMenu');
    if (menu.classList.contains('show')) {
      bootstrap.Collapse.getInstance(menu)?.hide();
    }
  });
});

// ── Fade-in on scroll ─────────────────────
const fadeEls = document.querySelectorAll('.timeline-item, .edu-card, .skill-card, .contact-card, .about-text-block');
const fadeObs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      fadeObs.unobserve(e.target);
    }
  });
}, { threshold: 0.1 });
fadeEls.forEach(el => { el.classList.add('fade-item'); fadeObs.observe(el); });
</script>
</body>
</html>