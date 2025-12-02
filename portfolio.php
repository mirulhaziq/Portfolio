<?php
$portfolio = require __DIR__ . '/portfolio-data.php';

function esc(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$meta = $portfolio['meta'];
$hero = $portfolio['hero'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo esc($meta['title']); ?></title>
  <style>
    :root {
      --bg: #050505;
      --bg-alt: #0a0a0a;
      --card: #111111;
      --stroke: rgba(255, 255, 255, 0.08);
      --text: #f5f5f5;
      --muted: rgba(255, 255, 255, 0.65);
      --accent: #ffffff;
      --gradient-start: #030617;
      --gradient-end: #0b1120;
      --accent-blue: #1fb6ff;
      --accent-blue-dark: #0ea5e9;
    }

    body[data-theme="light"] {
      --bg: #f5f5f5;
      --bg-alt: #ffffff;
      --card: #ffffff;
      --stroke: rgba(15, 23, 42, 0.08);
      --text: #020617;
      --muted: rgba(15, 23, 42, 0.65);
      --accent: #020617;
      --gradient-start: #dbeafe;
      --gradient-end: #eef2ff;
      --accent-blue: #2563eb;
      --accent-blue-dark: #1d4ed8;
    }

    .grid.two .full-span {
      grid-column: span 2;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Inter", "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
    }

    body {
      background:
        radial-gradient(circle 900px at 20% 15%, rgba(14, 165, 233, 0.18), transparent 60%),
        linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
      color: var(--text);
      line-height: 1.6;
      min-height: 100vh;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    header {
      padding: clamp(1.25rem, 3vw, 2.5rem) clamp(1.25rem, 6vw, 5rem);
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border: 1px solid var(--stroke);
      border-radius: 999px;
      padding: 0.85rem 1.5rem;
      backdrop-filter: blur(14px);
      background: rgba(7, 10, 20, 0.75);
      position: sticky;
      top: 1.25rem;
      z-index: 10;
    }

    body[data-theme="light"] nav {
      background: rgba(255, 255, 255, 0.75);
    }

    .logo {
      font-weight: 600;
      letter-spacing: 0.08em;
    }

    .nav-links {
      display: flex;
      gap: 1rem;
      font-size: 0.95rem;
    }

    .nav-links a {
      color: var(--muted);
      transition: color 0.2s ease;
    }

    .nav-links a:hover {
      color: var(--text);
    }

    .chip {
      border: 1px solid var(--stroke);
      border-radius: 999px;
      padding: 0.4rem 1rem;
      font-size: 0.85rem;
      color: var(--muted);
    }

    .hero-badge {
      font-size: 1rem;
      padding: 0.6rem 1.6rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--accent);
      border-color: rgba(255, 255, 255, 0.25);
    }

    .hero-status {
      display: flex;
      justify-content: center;
      margin-top: 1.2rem;
    }

    .hero-status-chip {
      font-weight: 600;
      text-align: center;
      border-color: rgba(255, 255, 255, 0.3);
      padding: 0.55rem 1.6rem;
    }

    .theme-toggle {
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      background: linear-gradient(135deg, var(--accent-blue), var(--accent-blue-dark));
      color: #010409;
      border: none;
      box-shadow: 0 12px 30px rgba(31, 182, 255, 0.35);
    }

    .theme-toggle .theme-label {
      text-transform: uppercase;
    }

    body[data-theme="light"] .theme-toggle {
      color: #f8fafc;
    }

    .theme-toggle .icon {
      font-size: 1rem;
    }

    .theme-toggle .icon-light {
      display: none;
    }

    body[data-theme="light"] .theme-toggle .icon-light {
      display: inline;
    }

    body[data-theme="light"] .theme-toggle .icon-dark {
      display: none;
    }

    main {
      padding: clamp(1.25rem, 3vw, 2.5rem) clamp(1.25rem, 6vw, 5rem) 4rem;
      max-width: 1100px;
      margin: 0 auto;
    }

    section {
      margin-top: 3.5rem;
    }

    h1 {
      font-size: clamp(2.5rem, 6vw, 4.2rem);
      line-height: 1.15;
      margin-bottom: 1rem;
    }

    h2 {
      font-size: clamp(1.5rem, 4vw, 2.2rem);
      margin-bottom: 1.5rem;
    }

    .muted {
      color: var(--muted);
    }

    .hero {
      display: grid;
      gap: 1.5rem;
      margin-top: 3rem;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 0.8rem;
    }

    .btn {
      border-radius: 999px;
      padding: 0.8rem 1.8rem;
      font-size: 0.95rem;
      letter-spacing: 0.08em;
      border: 1px solid var(--stroke);
      text-transform: uppercase;
      transition: transform 0.2s ease, background 0.2s ease;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--accent-blue), var(--accent-blue-dark));
      color: #010409;
      box-shadow: 0 15px 35px rgba(31, 182, 255, 0.35);
    }

    .btn-secondary {
      color: var(--accent);
      background: transparent;
      border: 1px solid rgba(31, 182, 255, 0.4);
    }

    .btn:hover {
      transform: translateY(-2px);
    }

    .grid {
      display: grid;
      gap: 1.25rem;
    }

    .grid.two {
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    }

    .grid.three {
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    }

    .card {
      border: 1px solid var(--stroke);
      border-radius: 1.25rem;
      padding: 1.5rem;
      background: var(--card);
      position: relative;
      overflow: hidden;
    }

    .card::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.08), transparent);
      opacity: 0;
      transition: opacity 0.3s ease;
      pointer-events: none;
    }

    .card:hover::after {
      opacity: 1;
    }

    .stat-value {
      font-size: 2.8rem;
      font-weight: 600;
      margin-bottom: 0.3rem;
    }

    .timeline {
      border-left: 2px solid rgba(31, 182, 255, 0.85);
      padding-left: 1.5rem;
      margin-left: 0.35rem;
      box-shadow: -10px 0 30px rgba(31, 182, 255, 0.15);
      position: relative;
    }

    .timeline::before {
      content: "";
      position: absolute;
      left: -2px;
      top: 0;
      bottom: 0;
      width: 2px;
      background: linear-gradient(180deg, rgba(31, 182, 255, 1), rgba(31, 182, 255, 0));
      filter: drop-shadow(0 0 12px rgba(31, 182, 255, 0.8));
    }

    .timeline-item {
      position: relative;
      padding-bottom: 2rem;
    }

    .timeline-item::before {
      content: "";
      position: absolute;
      width: 0.9rem;
      height: 0.9rem;
      border-radius: 50%;
      background: var(--accent-blue);
      left: -1.95rem;
      top: 0.35rem;
      box-shadow: 0 0 18px rgba(31, 182, 255, 0.8);
    }

    ul {
      margin-top: 0.75rem;
      padding-left: 1.2rem;
      color: var(--muted);
    }

    li + li {
      margin-top: 0.4rem;
    }

    .tag-set {
      display: flex;
      flex-wrap: wrap;
      gap: 0.4rem;
      margin-top: 0.75rem;
    }

    .tag {
      border: 1px solid var(--stroke);
      border-radius: 999px;
      padding: 0.3rem 0.8rem;
      font-size: 0.75rem;
      letter-spacing: 0.08em;
    }

    .skill-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 0.75rem;
      margin-top: 1rem;
    }

    .skill-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 0.6rem;
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 0.85rem;
      background: rgba(255, 255, 255, 0.02);
    }

    .skill-icon {
      width: 34px;
      height: 34px;
      border-radius: 12px;
      background: linear-gradient(135deg, rgba(31, 182, 255, 0.2), rgba(31, 182, 255, 0.05));
      border: 1px solid rgba(31, 182, 255, 0.4);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.8rem;
      letter-spacing: 0.05em;
      color: var(--accent);
      font-weight: 600;
    }

    body[data-theme="light"] .skill-item {
      background: rgba(15, 23, 42, 0.04);
      border-color: rgba(15, 23, 42, 0.08);
    }

    footer {
      text-align: center;
      padding: 3rem 1rem 4rem;
      color: var(--muted);
      font-size: 0.9rem;
    }

    .reveal {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .reveal.is-visible {
      opacity: 1;
      transform: none;
    }

    @media (max-width: 640px) {
      nav {
        flex-direction: column;
        gap: 0.8rem;
      }

      .nav-links {
        flex-wrap: wrap;
        justify-content: center;
      }

      .btn {
        width: 100%;
        text-align: center;
      }

      .grid.two .full-span {
        grid-column: span 1;
      }
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <span class="logo"><?php echo esc($meta['logo']); ?></span>
      <div class="nav-links">
        <a href="#experience">Experience</a>
        <a href="#projects">Projects</a>
        <a href="#leadership">Leadership</a>
        <a href="#contact">Contact</a>
        <button id="theme-toggle" class="chip theme-toggle" type="button" aria-label="Toggle theme">
          <span class="icon icon-dark">🌙</span>
          <span class="icon icon-light">☀️</span>
          <span class="theme-label">Theme</span>
        </button>
        <a href="index.php" class="chip">Back</a>
      </div>
    </nav>

    <div class="hero reveal">
      <p class="chip hero-badge"><?php echo esc($hero['badge']); ?></p>
      <h1><?php echo esc($meta['tagline']); ?></h1>
      <p class="muted"><?php echo esc($hero['body']); ?></p>
      <div class="hero-actions">
        <a class="btn btn-primary" href="<?php echo esc($hero['cta_primary']['href']); ?>"><?php echo esc($hero['cta_primary']['label']); ?></a>
        <a class="btn btn-secondary" href="<?php echo esc($hero['cta_secondary']['href']); ?>"<?php echo empty($hero['cta_secondary']['target']) ? '' : ' target="_blank" rel="noopener"'; ?>><?php echo esc($hero['cta_secondary']['label']); ?></a>
      </div>
      <div class="hero-status">
        <span class="chip hero-status-chip"><?php echo esc($hero['status_chip']); ?></span>
      </div>
    </div>
  </header>

  <main>
    <section class="reveal">
      <div class="card" style="display: flex; flex-wrap: wrap; gap: 1.5rem; align-items: center; justify-content: space-between;">
        <div>
          <p class="muted">Impact highlights</p>
          <p><strong>Documentation, GenAI, and large-scale events at the intersection of banking and student leadership.</strong></p>
        </div>
        <div class="tag-set">
          <span class="tag">AI documentation assistant · RHB</span>
          <span class="tag">1.2k+ students logistics</span>
          <span class="tag">GenAI business challenge finalist</span>
        </div>
        <div>
          <a class="btn btn-secondary" href="resume.pdf" target="_blank" rel="noopener">Download résumé (PDF)</a>
        </div>
      </div>
    </section>

    <section class="grid three reveal">
      <?php foreach ($portfolio['stats'] as $stat): ?>
      <article class="card">
        <span class="stat-value"><?php echo esc($stat['value']); ?></span>
        <p class="muted"><?php echo esc($stat['label']); ?></p>
      </article>
      <?php endforeach; ?>
    </section>

    <section id="experience" class="reveal">
      <h2>Experience</h2>
      <div class="card timeline">
        <?php foreach ($portfolio['experience'] as $item): ?>
        <article class="timeline-item">
          <div>
            <strong><?php echo esc($item['title']); ?></strong>
            <p class="muted"><?php echo esc($item['subtitle']); ?></p>
            <?php if (!empty($item['bullets'])): ?>
            <ul>
              <?php foreach ($item['bullets'] as $bullet): ?>
              <li><?php echo esc($bullet); ?></li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="projects" class="reveal">
      <h2>Highlighted Projects</h2>
      <div class="grid two">
        <?php foreach ($portfolio['projects'] as $project): ?>
        <article class="card">
          <h3><?php echo esc($project['title']); ?></h3>
          <p class="muted"><?php echo esc($project['summary']); ?></p>
          <?php if (!empty($project['bullets'])): ?>
          <ul>
            <?php foreach ($project['bullets'] as $bullet): ?>
            <li><?php echo esc($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
          <?php if (!empty($project['tags'])): ?>
          <div class="tag-set">
            <?php foreach ($project['tags'] as $tag): ?>
            <span class="tag"><?php echo esc($tag); ?></span>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
          <div class="tag-set" style="margin-top: 0.75rem;">
            <button class="btn btn-secondary" type="button" data-case-open="<?php echo esc($project['id']); ?>">View case study</button>
            <?php if (!empty($project['repo'])): ?>
              <a class="btn btn-secondary" href="<?php echo esc($project['repo']); ?>" target="_blank" rel="noopener">View repo</a>
            <?php else: ?>
              <span class="chip">Repo coming soon</span>
            <?php endif; ?>
            <?php if (!empty($project['demo'])): ?>
              <a class="btn btn-secondary" href="<?php echo esc($project['demo']); ?>" target="_blank" rel="noopener">Watch demo</a>
            <?php else: ?>
              <span class="chip">Demo in progress</span>
            <?php endif; ?>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="reveal">
      <h2>Skills & Tools</h2>
      <div class="grid two">
        <?php foreach ($portfolio['skills'] as $skill): ?>
        <article class="card">
          <h3><?php echo esc($skill['title']); ?></h3>
          <div class="skill-grid">
            <?php foreach ($skill['items'] as $item): ?>
            <span class="skill-item">
              <span class="skill-icon"><?php echo esc($item['icon']); ?></span>
              <span class="muted"><?php echo esc($item['label']); ?></span>
            </span>
            <?php endforeach; ?>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="reveal">
      <h2>Stack Evolution</h2>
      <div class="card timeline">
        <?php foreach (array_reverse($portfolio['timeline']) as $entry): ?>
        <article class="timeline-item">
          <div>
            <strong><?php echo esc($entry['year']); ?> · <?php echo esc($entry['label']); ?></strong>
            <p class="muted"><?php echo esc($entry['body']); ?></p>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="leadership" class="reveal">
      <h2>Leadership & Competitions</h2>
      <div class="grid two">
        <?php foreach ($portfolio['leadership'] as $entry): ?>
        <article class="card">
          <h3><?php echo esc($entry['title']); ?></h3>
          <p class="muted"><?php echo esc($entry['body']); ?></p>
          <?php if (!empty($entry['bullets'])): ?>
          <ul>
            <?php foreach ($entry['bullets'] as $bullet): ?>
            <li><?php echo esc($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="reveal">
      <h2>Certifications & Awards</h2>
      <div class="grid two">
        <?php foreach ($portfolio['certifications'] as $cert): ?>
        <article class="card<?php echo empty($cert['full']) ? '' : ' full-span'; ?>">
          <h3><?php echo esc($cert['title']); ?></h3>
          <p class="muted"><?php echo esc($cert['body']); ?></p>
        </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="reveal">
      <h2>Testimonials</h2>
      <div class="grid two">
        <?php foreach ($portfolio['testimonials'] as $t): ?>
        <article class="card">
          <p class="muted"><?php echo esc($t['quote']); ?></p>
          <p style="margin-top: 0.75rem;"><strong><?php echo esc($t['name']); ?></strong> · <span class="muted"><?php echo esc($t['role']); ?></span></p>
        </article>
        <?php endforeach; ?>
      </div>
      <p class="muted" style="margin-top: 0.75rem;">Replace placeholder quotes with real feedback from your referees.</p>
    </section>

    <section class="reveal">
      <h2>Insights</h2>
      <div class="grid two">
        <?php foreach ($portfolio['blog'] as $post): ?>
        <article class="card">
          <h3><?php echo esc($post['title']); ?></h3>
          <p class="muted"><?php echo esc($post['date']); ?></p>
          <p class="muted" style="margin-top: 0.5rem;"><?php echo esc($post['summary']); ?></p>
          <?php if (!empty($post['link'])): ?>
          <div class="tag-set" style="margin-top: 0.75rem;">
            <a class="btn btn-secondary" href="<?php echo esc($post['link']); ?>" target="_blank" rel="noopener">Read article</a>
          </div>
          <?php else: ?>
          <div class="tag-set" style="margin-top: 0.75rem;">
            <span class="chip">Draft in progress</span>
          </div>
          <?php endif; ?>
        </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="reveal">
      <h2>Additional Experience</h2>
      <div class="grid two">
        <?php foreach ($portfolio['additional_experience'] as $item): ?>
        <article class="card">
          <h3><?php echo esc($item['title']); ?></h3>
          <p class="muted"><?php echo esc($item['body']); ?></p>
        </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="reveal">
      <h2>References</h2>
      <div class="grid two">
        <?php foreach ($portfolio['references'] as $reference): ?>
        <article class="card<?php echo empty($reference['full']) ? '' : ' full-span'; ?>">
          <h3><?php echo esc($reference['name']); ?></h3>
          <p class="muted">
            <?php echo esc($reference['role']); ?><br>
            <?php if (!empty($reference['details'])): ?>
              <?php echo esc($reference['details']); ?><br>
            <?php endif; ?>
            <?php if (!empty($reference['link'])): ?>
              LinkedIn: <a href="<?php echo esc($reference['link']['href']); ?>" target="_blank" rel="noopener"><?php echo esc($reference['link']['label']); ?></a>
            <?php endif; ?>
          </p>
        </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="contact" class="reveal">
      <h2>Let’s collaborate</h2>
      <div class="grid two">
        <article class="card">
          <p class="muted"><?php echo esc($portfolio['contact']['intro']); ?></p>
          <div class="tag-set" style="margin-top: 1rem;">
            <?php foreach ($portfolio['contact']['actions'] as $action): ?>
            <a class="btn btn-secondary" href="<?php echo esc($action['href']); ?>"><?php echo esc($action['label']); ?></a>
            <?php endforeach; ?>
          </div>
        </article>
        <article class="card">
          <?php foreach ($portfolio['contact']['details'] as $detail): ?>
          <?php if (!empty($detail['href'])): ?>
          <p class="muted"><?php echo esc($detail['text']); ?>: <a href="<?php echo esc($detail['href']); ?>" target="_blank" rel="noopener"><?php echo esc($detail['href']); ?></a></p>
          <?php else: ?>
          <p class="muted"><?php echo esc($detail['text']); ?></p>
          <?php endif; ?>
          <?php endforeach; ?>
        </article>
      </div>
    </section>
  </main>

  <footer>
    © <?php echo date('Y'); ?> <?php echo esc($meta['name']); ?> · Made for recruiters with intent.
  </footer>

  <script>
    const revealElements = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
        }
      });
    }, { threshold: 0.1 });

    revealElements.forEach((el) => observer.observe(el));

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      revealElements.forEach((el) => el.classList.add('is-visible'));
    }

    const themeToggle = document.getElementById('theme-toggle');
    const storedTheme = window.localStorage.getItem('theme') || 'dark';
    document.body.setAttribute('data-theme', storedTheme);

    themeToggle?.addEventListener('click', () => {
      const isLight = document.body.getAttribute('data-theme') === 'light';
      document.body.setAttribute('data-theme', isLight ? 'dark' : 'light');
      window.localStorage.setItem('theme', isLight ? 'dark' : 'light');
    });

    const caseButtons = document.querySelectorAll('[data-case-open]');
    const modals = {};
    <?php foreach ($portfolio['projects'] as $project): ?>
    modals['<?php echo esc($project['id']); ?>'] = {
      title: <?php echo json_encode($project['title']); ?>,
      caseStudy: <?php echo json_encode($project['case_study']); ?>
    };
    <?php endforeach; ?>

    const overlay = document.createElement('div');
    overlay.className = 'case-overlay';
    overlay.style.position = 'fixed';
    overlay.style.inset = '0';
    overlay.style.background = 'rgba(0,0,0,0.7)';
    overlay.style.display = 'none';
    overlay.style.alignItems = 'center';
    overlay.style.justifyContent = 'center';
    overlay.style.zIndex = '40';

    const modal = document.createElement('div');
    modal.className = 'card';
    modal.style.maxWidth = '640px';
    modal.style.maxHeight = '80vh';
    modal.style.overflowY = 'auto';
    modal.style.width = '90%';

    overlay.appendChild(modal);
    document.body.appendChild(overlay);

    function renderModal(data) {
      modal.innerHTML = `
        <h3>${data.title}</h3>
        <p class="muted" style="margin-top:0.75rem;"><strong>Problem</strong><br>${data.caseStudy.problem}</p>
        <p class="muted" style="margin-top:0.75rem;"><strong>Approach</strong><br>${data.caseStudy.approach}</p>
        <p class="muted" style="margin-top:0.75rem;"><strong>Results</strong><br>${data.caseStudy.results}</p>
        <p class="muted" style="margin-top:0.75rem;"><strong>Architecture</strong><br>${data.caseStudy.architecture}</p>
        <div style="margin-top:1rem;display:flex;justify-content:flex-end;gap:0.5rem;">
          <button type="button" id="case-close" class="btn btn-secondary">Close</button>
        </div>
      `;
      overlay.style.display = 'flex';
      document.getElementById('case-close').addEventListener('click', () => {
        overlay.style.display = 'none';
      });
    }

    caseButtons.forEach((btn) => {
      btn.addEventListener('click', () => {
        const id = btn.getAttribute('data-case-open');
        const data = modals[id];
        if (data) {
          renderModal(data);
        }
      });
    });

    overlay.addEventListener('click', (e) => {
      if (e.target === overlay) {
        overlay.style.display = 'none';
      }
    });
  </script>
</body>
</html>


