<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($biodata['nama'] ?? 'My Portfolio') ?></title>

  <!-- Fonts & Bootstrap -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --primary: #111827;
      --primary-soft: #111827;
      --accent: #1f2937;
      --bg: #f9fafb;
      --card: #ffffff;
      --muted: #6b7280;
      --border: #e5e7eb;
      --btn: #111827;
      --btn-light: #f3f4f6;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: var(--bg);
      color: #111827;
      scroll-behavior: smooth;
      margin: 0;
      animation: fadeIn 1.5s ease-in-out;
    }

    @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    .logo {
      font-family: 'Playfair Display', serif;
      font-size: 1.3rem;
      background: linear-gradient(45deg, #111827, #4b5563);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
      -webkit-text-fill-color: transparent;
      letter-spacing: .06em;
      display: inline-flex;
      align-items: center;
      gap: .35rem;
    }

    .logo span.tag {
      font-family: 'Poppins', sans-serif;
      font-size: .7rem;
      padding: 2px 8px;
      border-radius: 999px;
      background: #e5e7eb;
      color: #374151;
    }

    .navbar {
      background: #ffffff;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
      padding: 0.5rem 1rem;
    }

    .nav-link {
      font-size: .9rem;
      font-weight: 500;
      color: #4b5563 !important;
      position: relative;
      padding: 0.4rem 1rem;
      transition: transform 0.2s ease;
    }

    .nav-link::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -4px;
      width: 0;
      height: 2px;
      background: #111827;
      transition: width .25s ease;
      border-radius: 999px;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
      width: 100%;
    }

    .nav-link.active {
      color: #111827 !important;
    }

    .nav-link:hover {
      transform: scale(1.05);
    }

    /* Hero Section */
    header.hero {
      padding: 4rem 0 2rem;
    }

    .hero-pill {
      display: inline-flex;
      align-items: center;
      gap: .4rem;
      padding: 4px 10px;
      border-radius: 999px;
      background: #e5e7eb;
      color: #374151;
      font-size: .8rem;
    }

    .hero-title {
      font-family: 'Playfair Display', serif;
      font-size: 2.5rem;
      line-height: 1.1;
      animation: fadeIn 1s ease-out;
    }

    .hero-avatar-wrap {
      position: relative;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .hero-btn-main {
      background: var(--btn);
      color: #ffffff;
      border-radius: 999px;
      padding-inline: 20px;
      font-weight: 500;
      border: none;
      transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .hero-btn-main:hover {
      background: #4b5563;
      color: #ffffff;
      transform: scale(1.05);
    }

    .hero-btn-ghost {
      border-radius: 999px;
      border: 1px solid var(--border);
      background: #ffffff;
      color: #111827;
      font-weight: 500;
      transition: transform 0.3s ease;
    }

    .hero-btn-ghost:hover {
      background: #f3f4f6;
      transform: scale(1.05);
    }

    .quick-stat {
      background: #ffffff;
      border-radius: 999px;
      padding: 6px 14px;
      font-size: .8rem;
      display: inline-flex;
      align-items: center;
      gap: .35rem;
      box-shadow: 0 8px 20px rgba(15, 23, 42, 0.08);
      margin: 2px;
    }

    .quick-stat span.value {
      font-weight: 600;
      color: #111827;
    }

    section {
      padding: 3rem 0;
    }

    .section-title {
      font-family: 'Playfair Display', serif;
      margin-bottom: .3rem;
    }

    .section-sub {
      color: var(--muted);
      font-size: .9rem;
      margin-bottom: 1.5rem;
    }

    .card-soft {
      background: var(--card);
      border-radius: 18px;
      border: 1px solid var(--border);
      box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
      padding: 1.5rem;
      transition: transform .25s ease, box-shadow .25s ease;
    }

    .card-soft:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 28px rgba(0,0,0,0.08);
    }

    .badge-soft {
      background: #e5e7eb;
      color: #374151;
      border-radius: 999px;
      padding: 2px 10px;
      font-size: .75rem;
    }

    .timeline-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #111827;
    }

    .skill-pill {
      border-radius: 999px;
      background: #f3f4f6;
      padding: 6px 12px;
      font-size: .8rem;
      display: inline-flex;
      align-items: center;
      gap: .35rem;
      margin: 4px;
    }

    /* Contact */
    .contact-card {
      background: #ffffff;
      border-radius: 18px;
      border: 1px solid var(--border);
      padding: 1.1rem 1.3rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: .9rem;
      box-shadow: 0 10px 25px rgba(15, 23, 42, 0.05);
    }

    .contact-card .icon-pill {
      width: 36px;
      height: 36px;
      border-radius: 999px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: #111827;
      color: #ffffff;
      margin-right: .7rem;
    }

    .contact-card a {
      font-size: .9rem;
      font-weight: 500;
    }

    .contact-card small {
      color: var(--muted);
      font-size: .78rem;
    }

    .contact-toggle {
      border-radius: 999px;
      padding-inline: 18px;
      font-size: .9rem;
      font-weight: 500;
    }

    /* Footer */
    footer {
      border-top: 1px solid var(--border);
      padding: 1.5rem 0 1rem;
      background: #ffffff;
      font-size: .85rem;
      color: var(--muted);
    }

    footer a {
      color: #4b5563;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    /* back-to-top */
    .back-to-top {
      position: fixed;
      right: 1.5rem;
      bottom: 1.5rem;
      width: 42px;
      height: 42px;
      border-radius: 999px;
      background: #111827;
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 10px 25px rgba(15, 23, 42, 0.35);
      border: none;
      cursor: pointer;
      z-index: 999;
      opacity: 0;
      pointer-events: none;
      transition: opacity .25s ease;
    }

    .back-to-top.show {
      opacity: 1;
      pointer-events: auto;
    }

    @media (max-width: 991.98px) {
      header.hero {
        padding-top: 5rem;
      }
      .hero-title {
        font-size: 2.15rem;
      }
      .hero-avatar {
        width: 190px;
        height: 190px;
      }
    }

    /* EDUCATION CARD – WHITE THEME */
    .edu-card-light {
      background: #ffffff;
      padding: 20px;
      border-radius: 16px;
      border: 1px solid #e5e7eb;
      text-align: center;
      box-shadow: 0 6px 20px rgba(0,0,0,0.05);
      height: 210px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .edu-card-light img {
      width: 60px;
      height: 60px;
      object-fit: contain;
      margin-bottom: 12px;
    }

    .edu-card-light h6 {
      font-size: .85rem;
      font-weight: 600;
      line-height: 1.15rem;
      min-height: 38px;
      margin-bottom: 4px;
    }

    .edu-card-light small {
      font-size: .75rem;
      color: var(--muted);
    }

    /* FOTO HERO CLEAN TANPA BINGKAI */
    .hero-photo-clean {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border: none !important;
      box-shadow: none !important;
      background: transparent !important;
      border-radius: 0 !important;
      transition: transform .1s ease-out;
      will-change: transform;
    }

    .hero-avatar::before,
    .hero-avatar::after {
      display: none !important;
    }

    .hero-avatar-badge {
      display: none !important;
    }

    .hero-avatar {
      border: none !important;
      box-shadow: none !important;
      animation: none !important;
    }

    /* TEXT TYPEWRITER */
    .typewriter {
      display: inline-block;
      overflow: hidden;
      white-space: nowrap;
      border-right: 2px solid #111827;
      animation:
        typing 3s steps(30, end),
        blink .75s step-end infinite;
      font-weight: 600;
    }

    @keyframes typing {
      from { width: 0 }
      to { width: 100% }
    }

    @keyframes blink {
      50% { border-color: transparent }
    }

    /* HOVER NIMBUL – CARD & PROJECT */
    .card-soft,
    .edu-card-light {
      transition: transform .25s ease, box-shadow .25s ease;
    }

    .card-soft:hover,
    .edu-card-light:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 28px rgba(0,0,0,0.08);
    }

    /* EFFECT: jatuh dari atas */
    .reveal-top {
      opacity: 0;
      transform: translateY(-40px);
      transition: all .7s ease;
    }

    .reveal-top.show {
      opacity: 1;
      transform: translateY(0);
    }

    .tech-scroll {
      display: flex;
      flex-wrap: nowrap;
      overflow-x: auto;
      gap: 12px;
      padding-bottom: 5px;
    }

    .tech-item {
      white-space: nowrap;
      background: #f3f4f6;
      border: 1px solid #e5e7eb;
      padding: 6px 12px;
      border-radius: 8px;
      font-size: .85rem;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .footer-clean {
      border-top: 1px solid #e5e7eb;
      background: #ffffff;
    }

    .footer-icon {
      width: 34px;
      height: 34px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      color: #111827;
      background: #f3f4f6;
      font-size: 1rem;
      transition: 0.25s ease;
      text-decoration: none;
    }

    .footer-icon:hover {
      background: #111827;
      color: #ffffff;
      transform: translateY(-3px);
    }

    /* Saat klik link navbar, posisi berhenti di bawah navbar sticky */
header.hero[id],
section[id] {
  scroll-margin-top: 90px; /* kira-kira setara tinggi navbar */
}
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="#home">
      <span class="logo">&lt;/&gt; <span><?= esc($biodata['nama'] ?? 'Your Name') ?></span></span>
      <span class="tag d-none d-md-inline">CV</span>
    </a>

    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="bi bi-list fs-2"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto gap-lg-2">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
        <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO / HOME -->
<header id="home" class="hero">
  <div class="container">
    <div class="row align-items-center g-xl-5 g-4">
      <div class="col-lg-7">
        <div class="hero-pill mb-3">
          <span class="bi bi-lightning-charge-fill"></span>
          <span>Open to collaboration & opportunities</span>
        </div>

        <h1 class="hero-title mb-2">
          Hi, I’m <?= esc($biodata['nama'] ?? 'Your Name') ?> 👋
        </h1>

        <p class="text-muted mb-2 typewriter">
          <?= esc($biodata['headline'] ?? 'Frontend & UI/UX enthusiast who loves building clean, modern, and responsive websites.') ?>
        </p>

        <p class="text-muted mb-3" style="font-size: .9rem;">
          <?= esc($biodata['tagline'] ?? 'I blend design and code to create smooth digital experiences that feel intuitive, fast, and delightful to use.') ?>
        </p>

        <div class="d-flex flex-wrap gap-2 mb-3">
          <a href="#projects" class="btn hero-btn-main d-inline-flex align-items-center gap-1">
            <span class="bi bi-folder2-open"></span> Explore My Projects
          </a>
          <a href="<?= base_url('assets/CV_Releyka.pdf') ?>" target="_blank" class="btn hero-btn-ghost d-inline-flex align-items-center gap-1">
            <span class="bi bi-download"></span> Download CV
          </a>
        </div>

        <div class="d-flex align-items-center gap-3 mb-3">
          <span class="text-muted" style="font-size:.8rem;">Follow me:</span>
          <div class="d-flex gap-2">
            <a class="btn btn-sm btn-outline-secondary rounded-circle"
               href="https://github.com/releyka06" target="_blank">
              <i class="bi bi-github"></i>
            </a>

            <a class="btn btn-sm btn-outline-secondary rounded-circle"
               href="https://www.linkedin.com/in/releyka" target="_blank">
              <i class="bi bi-linkedin"></i>
            </a>

            <a class="btn btn-sm btn-outline-secondary rounded-circle"
               href="https://www.instagram.com/rlykanhyaa" target="_blank">
              <i class="bi bi-instagram"></i>
            </a>

            <a class="btn btn-sm btn-outline-secondary rounded-circle"
               href="mailto:nahyareleyka@gmail.com" target="_blank">
              <i class="bi bi-envelope-fill"></i>
            </a>
          </div>
        </div>

        <div class="d-flex flex-wrap align-items-center gap-2 mt-3">
          <span class="text-muted" style="font-size:.78rem;">Quick Stats:</span>
          <div class="quick-stat">
            <span class="bi bi-briefcase-fill"></span>
            <span class="value">2+ Years</span>
            <span class="text-muted">Experience</span>
          </div>
          <div class="quick-stat">
            <span class="bi bi-code-slash"></span>
            <span class="value"><?= count($projects ?? []) ?> Projects</span>
          </div>
          <div class="quick-stat">
            <span class="bi bi-chat-dots-fill"></span>
            <span class="value">3+ Clients</span>
          </div>
        </div>
      </div>

      <div class="col-lg-5 text-center">
        <!-- Menghapus Gambar Laptop -->
        <div class="hero-avatar-wrap">
          <!-- Ikon Laptop Lebih Besar dan Dengan Efek Bayangan -->
          <i class="bi bi-laptop" style="font-size: 12rem; color: #111827; 
             text-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); 
             transition: transform 0.3s ease, color 0.3s ease;"></i>
        </div>
      </div>

    </div>
  </div>
</header>



<!-- ABOUT -->
<section id="about" class="py-5">
  <div class="container">
    <!-- judul dan teks atas -->
    <div class="row g-4">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title">About Me</h2>
        <p class="section-sub mb-4">
          A short story about who I am and what I love to do.
        </p>
        <p class="text-center mb-3" style="font-size:.95rem;">
          Saya <?= esc($biodata['nama'] ?? 'Your Name') ?>, mahasiswa dan frontend enthusiast yang tertarik pada pengembangan web, desain antarmuka, dan pengalaman pengguna. Selain ngoding, saya juga suka belajar tools baru, eksplorasi desain, dan berkolaborasi di proyek berdampak. Portofolio ini saya buat untuk menampilkan karya terbaik serta perjalanan saya di dunia digital product.
        </p>
      </div>
    </div>

    <!-- CARD UNTUK FOTO, PERSONAL INFO + TECH -->
    <div class="row g-4 align-items-start">
      <div class="col-lg-12">
        <div class="card-soft p-3 p-md-4">
          <div class="row g-4">
            <!-- FOTO PROFIL KIRI -->
            <div class="col-md-4 text-center">
              <img src="<?= base_url('assets/images/releyka-photo.jpeg') ?>"
                   alt="About Photo"
                   class="img-fluid rounded-3 shadow-sm"
                   style="width: 250px; height: 250px; object-fit: cover;">
            </div>

            <!-- PERSONAL INFO & TECH KANAN -->
            <div class="col-md-8">
              <!-- PERSONAL INFO -->
              <h6 class="text-uppercase text-muted mb-2" style="font-size:.8rem;">Personal Info</h6>
              <div class="row g-2 mb-3">
                <div class="col-sm-6">
                  <small class="text-muted d-block">Name</small>
                  <span><?= esc($biodata['nama'] ?? 'Your Name') ?></span>
                </div>
                <div class="col-sm-6">
                  <small class="text-muted d-block">Date of Birth</small>
                  <span>
                    <?php
                      $dob = '';
                      if (!empty($personalInfo)) {
                        foreach ($personalInfo as $pi) {
                          if ($pi['label'] === 'Date of Birth') {
                            $dob = $pi['value'];
                            break;
                          }
                        }
                      }
                      echo esc($dob ?: 'January 6, 2006');
                    ?>
                  </span>
                </div>
                <div class="col-sm-6">
                  <small class="text-muted d-block">Location</small>
                  <span>
                    <?php
                      $loc = '';
                      if (!empty($personalInfo)) {
                        foreach ($personalInfo as $pi) {
                          if ($pi['label'] === 'Location') {
                            $loc = $pi['value'];
                            break;
                          }
                        }
                      }
                      echo esc($loc ?: 'Sukabumi, Indonesia');
                    ?>
                  </span>
                </div>
                <div class="col-sm-6">
                  <small class="text-muted d-block">Phone Number</small>
                  <span>
                    <?php
                      $phone = '';
                      if (!empty($personalInfo)) {
                        foreach ($personalInfo as $pi) {
                          if ($pi['label'] === 'Phone Number') {
                            $phone = $pi['value'];
                            break;
                          }
                        }
                      }
                      echo esc($phone ?: '+62 812 3456 7890');
                    ?>
                  </span>
                </div>
              </div>

              <!-- TECH I ENJOY -->
              <h6 class="text-uppercase text-muted mb-2 mt-5" style="font-size:.8rem;">Tech I Enjoy</h6> <!-- Ditambahkan mt-5 disini -->
              <div class="tech-scroll">
                <?php if (!empty($tech)): ?>
                  <?php foreach ($tech as $t): ?>
                    <div class="tech-item">
                      <i class="<?= esc($t['icon']) ?>"></i> <?= esc($t['nama']) ?>
                    </div>
                  <?php endforeach; ?>
                <?php else: ?>
                  <div class="tech-item">
                    <i class="bi bi-filetype-html"></i> HTML &amp; CSS
                  </div>
                <?php endif; ?>
              </div>
            </div><!-- /col-md-8 -->
          </div><!-- /row -->
        </div><!-- /card-soft -->
      </div><!-- /col-lg-12 -->
    </div><!-- /row -->
  </div>
</section>





<!-- PROJECTS -->
<section id="projects">
  <div class="container">
    <h2 class="section-title">Projects</h2>
    <p class="section-sub">Selected works that showcase how I design & build interfaces.</p>

    <div class="row g-4">
      <?php if (!empty($projects)): ?>
        <?php foreach ($projects as $project): ?>
          <div class="col-md-6 col-lg-4">
            <div class="card-soft h-100 p-3 p-md-4 shadow-sm">
              <span class="badge-soft mb-2">Featured</span>

              <?php if (!empty($project['gambar'])): ?>
                <img
                  src="<?= base_url('assets/images/' . esc($project['gambar'])) ?>"
                  alt="<?= esc($project['judul']) ?>"
                  class="project-img mb-3"
                  style="max-width: 100%; height: auto;">
              <?php else: ?>
                <!-- fallback kalau belum ada gambar di database -->
                <img
                  src="<?= base_url('assets/images/laptop.jpeg') ?>"
                  alt="Project placeholder"
                  class="project-img mb-3"
                  style="max-width: 100%; height: auto;">
              <?php endif; ?>

              <h5 class="mb-1"><?= esc($project['judul']) ?></h5>

              <?php if (!empty($project['deskripsi'])): ?>
                <p class="text-muted mb-2" style="font-size:1rem;">
                  <?= esc($project['deskripsi']) ?>
                </p>
              <?php endif; ?>

              <?php if (!empty($project['points'])): ?>
                <ul class="small text-muted mb-3">
                  <?php foreach ($project['points'] as $pp): ?>
                    <li><?= esc($pp['isi']) ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>

              <?php if (!empty($project['skills'])): ?>
                <div class="d-flex flex-wrap gap-2">
                  <?php foreach ($project['skills'] as $ps): ?>
                    <span class="skill-pill"><?= esc($ps['skill']) ?></span>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-muted">No project data yet.</p>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- EXPERIENCE -->
<section id="experience" class="py-5">
  <div class="container">
    <h2 class="section-title">Experience</h2>
    <p class="section-sub">Past positions and projects I’ve worked on.</p>

    <div class="row g-4">
      <?php if (!empty($experiences)): ?>
        <?php foreach ($experiences as $exp): ?>
          <div class="col-md-6">
            <div class="card-soft h-100 p-3 p-md-4">
              <h5 class="mb-1">
                <?= esc($exp['posisi']) ?>
                <?php if (!empty($exp['perusahaan'])): ?>
                  - <?= esc($exp['perusahaan']) ?>
                <?php endif; ?>
              </h5>

              <?php if (!empty($exp['deskripsi'])): ?>
                <p class="text-muted mb-2" style="font-size:.9rem;">
                  <?= esc($exp['deskripsi']) ?>
                </p>
              <?php endif; ?>

              <?php if (!empty($exp['durasi'])): ?>
                <p class="text-muted mb-2" style="font-size:.85rem;">
                  <strong>Duration:</strong> <?= esc($exp['durasi']) ?>
                </p>
              <?php endif; ?>

              <?php if (!empty($exp['points'])): ?>
                <ul class="small text-muted mb-3">
                  <?php foreach ($exp['points'] as $ep): ?>
                    <li><?= esc($ep['isi']) ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-muted">No experience data yet.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- EDUCATION -->
<section id="education" class="py-5">
  <div class="container">
    <h2 class="section-title text-center">Education</h2>
    <p class="section-sub text-center mb-4">
      Places where I’ve studied and developed my skills.
    </p>

    <div class="row g-4">
      <?php if (!empty($education)): ?>
        <?php foreach ($education as $edu): ?>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="edu-card-light">
              <?php if (!empty($edu['logo'])): ?>
                <img src="<?= base_url('assets/images/' . $edu['logo']) ?>" alt="<?= esc($edu['nama_sekolah']) ?>">
              <?php endif; ?>
              <h6 class="mt-2 mb-1"><?= esc($edu['nama_sekolah']) ?></h6>
              <small class="text-muted"><?= esc($edu['tahun']) ?></small>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-muted text-center">No education data yet.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- SKILLS -->
<?php
  // group skills by kategori
  $skillsByCategory = [];
  if (!empty($skills)) {
      foreach ($skills as $s) {
          $skillsByCategory[$s['kategori']][] = $s;
      }
  }
?>
<section id="skills">
  <div class="container">
    <h2 class="section-title">Skills</h2>
    <p class="section-sub">Tools & skills I use to bring ideas into the browser.</p>

    <div class="row g-4">
      <?php if (!empty($skillsByCategory)): ?>
        <?php foreach ($skillsByCategory as $kategori => $list): ?>
          <div class="col-md-6">
            <div class="card-soft p-3 p-md-4 h-100">
              <h6 class="mb-3"><?= esc($kategori) ?></h6>

              <?php foreach ($list as $sk): ?>
                <div class="mb-2">
                  <span><?= esc($sk['skill']) ?></span>
                  <div class="progress" style="height:6px;">
                    <div class="progress-bar bg-dark" style="width: <?= (int)$sk['persentase'] ?>%;"></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-muted">No skills data yet.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="container">
    <h2 class="section-title text-center">Contact Me</h2>
    <p class="section-sub text-center">Reach out via form to get in touch.</p>

    <div class="row g-4 justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="card-soft p-3 p-md-4 mb-4">
          <h6 class="mb-3"><i class="bi bi-envelope me-1"></i> Send Me a Message</h6>
          <!-- Untuk UTS, cukup UI saja -->
          <form>
            <div class="mb-3">
              <label class="form-label small">Your Name</label>
              <input type="text" class="form-control form-control-lg w-100" placeholder="Your Name">
            </div>
            <div class="mb-3">
              <label class="form-label small">Your Email</label>
              <input type="email" class="form-control form-control-lg w-100" placeholder="email@example.com">
            </div>
            <div class="mb-3">
              <label class="form-label small">Your Message</label>
              <textarea class="form-control form-control-lg w-100" rows="5" placeholder="Write your message..."></textarea>
            </div>
            <button type="button" class="btn btn-dark contact-toggle d-inline-flex align-items-center gap-1" disabled>
              Send <i class="bi bi-send-fill"></i>
            </button>
            <small class="d-block text-muted mt-1" style="font-size:.75rem;">
              *Demo form only for UI (no backend email handler).
            </small>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer-clean py-4 mt-5">
  <div class="container">
    <div class="row align-items-center text-center text-md-start">

      <div class="col-md-4 mb-3 mb-md-0">
        <div class="fw-semibold" style="font-size:.95rem;">
          <?= esc($biodata['nama'] ?? 'Your Name') ?>
        </div>
        <div class="text-muted" style="font-size:.8rem;">
          Frontend &amp; UI/UX enthusiast.
        </div>
      </div>

      <div class="col-md-4 mb-3 mb-md-0 d-flex justify-content-center">
        <div class="d-flex gap-3">
          <a href="https://github.com/releyka06" target="_blank" class="footer-icon">
            <i class="bi bi-github"></i>
          </a>

          <a href="https://www.linkedin.com/in/releyka" target="_blank" class="footer-icon">
            <i class="bi bi-linkedin"></i>
          </a>

          <a href="https://www.instagram.com/rlykanhyaa" target="_blank" class="footer-icon">
            <i class="bi bi-instagram"></i>
          </a>

          <a href="mailto:nahyareleyka@gmail.com" class="footer-icon">
            <i class="bi bi-envelope-fill"></i>
          </a>
        </div>
      </div>

      <div class="col-md-4 text-md-end small text-muted">
        © <?= date('Y') ?> <?= esc($biodata['nama'] ?? 'Your Name') ?> • All rights reserved.
      </div>

    </div>
  </div>
</footer>

<button class="back-to-top" id="backToTop">
  <i class="bi bi-chevron-up"></i>
</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
  const sections = document.querySelectorAll('header.hero[id], section[id]');
  const navbarCollapse = document.getElementById('mainNav');
  const bsCollapse = navbarCollapse ? new bootstrap.Collapse(navbarCollapse, { toggle: false }) : null;

  // Smooth scroll saat link navbar diklik
  navLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href').slice(1); // "#about" -> "about"
      const targetEl = document.getElementById(targetId);
      if (targetEl) {
        e.preventDefault();

        const offset = 90; // tinggi navbar
        const top = targetEl.getBoundingClientRect().top + window.pageYOffset - offset;

        window.scrollTo({
          top: top,
          behavior: 'smooth'
        });

        // Tutup navbar di mobile setelah klik
        if (bsCollapse && window.innerWidth < 992) {
          bsCollapse.hide();
        }
      }
    });
  });

  // Observer untuk pindah .active sesuai section yang kelihatan
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        navLinks.forEach(link => {
          link.classList.toggle('active', link.getAttribute('href') === '#' + id);
        });
      }
    });
  }, { threshold: 0.5 });

  sections.forEach(sec => observer.observe(sec));
});
</script>


</body>
</html>
