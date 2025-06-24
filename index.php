<?php include 'includes/header.php'; ?>
<script>
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.getElementById('nav-links');

  hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
  });

  // Optional: auto-close after click
  document.querySelectorAll('#nav-links a').forEach(link => {
    link.addEventListener('click', () => {
      navLinks.classList.remove('show');
    });
  });
</script>
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,      // Durasi animasi 1000ms
    once: true,          // Animasi hanya sekali waktu scroll
    delay: 100           // Delay default (bisa override di tag)
  });
</script>


<!-- Hero Section -->
<section class="hero" id="home">
    <h2>Selamat datang di Canvas Obscura</h2>
    <p>Kami menangkap setiap momen dengan lensa terbaik.</p>
</section>

<!-- Portofolio Section -->
<section class="portfolio" id="portofolio">
    <h2>Our beautiful Canvas</h2>
    <div class="gallery-grid">
        <img src="assets/img/sample1.jpg" data-aos="fade-right" data-aos-delay="0">
        <img src="assets/img/sample2.jpg" data-aos="fade-left" data-aos-delay="200">
        <img src="assets/img/sample3.jpg" data-aos="fade-right" data-aos-delay="400">
        <img src="assets/img/sample4.jpg" data-aos="fade-left" data-aos-delay="600">
    </div>

    <div class="video-gallery">
        <video controls>
            <source src="assets/video/sample1.mp4" type="video/mp4">
        </video>
        <video controls>
            <source src="assets/video/sample2.mp4" type="video/mp4">
        </video>
    </div>
</section>

<!-- Pricelist Section -->
<section class="pricelist" id="pricelist">
    <div class="price-card">
        <h3>Paket Foto</h3>
        <p>Mulai dari Rp 1.000.000</p>
    </div>
    <div class="price-card">
        <h3>Paket Video Cinematic</h3>
        <p>Mulai dari Rp3.000.000</p>
    </div>
    <div class="price-card">
        <h3>Paket Prewed</h3>
        <p>Mulai dari Rp1.500.000</p>
    </div>
</section>

<section id="kontak">
    <h2>Contact Me</h2>
    <p>Good a project idea? Let's connect and make it happen!</p>

    <div class="contact-container">
        <form class="contact-form" method="POST" action="send.php">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" placeholder="Message" rows="5" required></textarea>
            <button type="submit">Send Message ✉️</button>
        </form>


        <div class="contact-info">
            <h3>Follow Me</h3>
            <div class="icons">
                <a href="https://instagram.com/adityaky_" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://facebook.com/fikriaditya" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://wa.me/6281258809935" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://linkedin.com/in/usernamekamu" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
