<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Welcome</title>
     <style>
          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }

          body {
               font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
               background: #f5f5f7;
               overflow-x: hidden;
          }

          /* Navbar */
          .navbar {
               position: fixed;
               top: 0;
               width: 100%;
               background: rgba(255, 255, 255, 0.8);
               backdrop-filter: blur(20px);
               border-bottom: 1px solid rgba(0, 0, 0, 0.05);
               z-index: 1000;
          }

          .nav-content {
               max-width: 1200px;
               margin: 0 auto;
               padding: 16px 40px;
               display: flex;
               justify-content: space-between;
               align-items: center;
          }

          .logo {
               font-size: 20px;
               font-weight: 600;
               color: #1d1d1f;
               text-decoration: none;
          }

          .nav-links {
               display: flex;
               gap: 32px;
               list-style: none;
          }

          .nav-links a {
               color: #1d1d1f;
               text-decoration: none;
               font-size: 14px;
               transition: opacity 0.2s;
          }

          .nav-links a:hover {
               opacity: 0.6;
          }

          /* Hero Section */
          .hero {
               padding: 120px 40px 60px;
               text-align: center;
               /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
               background-color: red;
               color: white;
          }

          .hero h1 {
               font-size: 56px;
               font-weight: 600;
               margin-bottom: 20px;
               letter-spacing: -1px;
          }

          .hero p {
               font-size: 21px;
               opacity: 0.9;
               margin-bottom: 40px;
          }

          .hero-buttons {
               display: flex;
               gap: 16px;
               justify-content: center;
               flex-wrap: wrap;
          }

          /* Buttons */
          .btn {
               padding: 14px 28px;
               border: none;
               border-radius: 12px;
               font-size: 15px;
               font-weight: 500;
               cursor: pointer;
               transition: all 0.2s ease;
               text-decoration: none;
               display: inline-block;
          }

          .btn-primary {
               background: white;
               color: #0071e3;
          }

          .btn-primary:hover {
               transform: translateY(-2px);
               box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
          }

          .btn-secondary {
               background: rgba(255, 255, 255, 0.2);
               color: white;
               border: 1px solid rgba(255, 255, 255, 0.3);
          }

          .btn-secondary:hover {
               background: rgba(255, 255, 255, 0.3);
               transform: translateY(-2px);
          }

          /* Features Section */
          .features {
               max-width: 1200px;
               margin: 80px auto;
               padding: 0 40px;
               display: grid;
               grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
               gap: 24px;
          }

          .feature-card {
               background: white;
               border-radius: 18px;
               padding: 40px 32px;
               text-align: center;
               transition: all 0.3s ease;
               box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
          }

          .feature-card:hover {
               transform: translateY(-4px);
               box-shadow: 0 12px 36px rgba(0, 0, 0, 0.1);
          }

          .feature-icon {
               width: 60px;
               height: 60px;
               background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
               border-radius: 16px;
               display: flex;
               align-items: center;
               justify-content: center;
               font-size: 28px;
               margin: 0 auto 24px;
          }

          .feature-card h3 {
               font-size: 21px;
               font-weight: 600;
               color: #1d1d1f;
               margin-bottom: 12px;
          }

          .feature-card p {
               font-size: 15px;
               color: #86868b;
               line-height: 1.6;
          }

          /* Stats Section */
          .stats {
               max-width: 1200px;
               margin: 80px auto;
               padding: 60px 40px;
               background: white;
               border-radius: 24px;
               display: grid;
               grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
               gap: 40px;
               text-align: center;
               box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
          }

          .stat h2 {
               font-size: 48px;
               font-weight: 600;
               color: #0071e3;
               margin-bottom: 8px;
          }

          .stat p {
               font-size: 15px;
               color: #86868b;
          }

          /* Portfolio Section */
          .portfolio {
               max-width: 1200px;
               margin: 80px auto;
               padding: 0 40px;
          }

          .section-title {
               text-align: center;
               font-size: 40px;
               font-weight: 600;
               color: #1d1d1f;
               margin-bottom: 60px;
          }

          .portfolio-grid {
               display: grid;
               grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
               gap: 24px;
          }

          .portfolio-item {
               background: white;
               border-radius: 18px;
               overflow: hidden;
               transition: all 0.3s ease;
               box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
          }

          .portfolio-item:hover {
               transform: translateY(-4px);
               box-shadow: 0 12px 36px rgba(0, 0, 0, 0.1);
          }

          .portfolio-image {
               width: 100%;
               height: 220px;
               background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
               display: flex;
               align-items: center;
               justify-content: center;
               font-size: 48px;
               color: rgba(255, 255, 255, 0.3);
          }

          .portfolio-content {
               padding: 24px;
          }

          .portfolio-content h3 {
               font-size: 19px;
               font-weight: 600;
               color: #1d1d1f;
               margin-bottom: 8px;
          }

          .portfolio-content p {
               font-size: 14px;
               color: #86868b;
               line-height: 1.5;
          }

          /* Testimonials */
          .testimonials {
               max-width: 1200px;
               margin: 80px auto;
               padding: 0 40px;
          }

          .testimonials-grid {
               display: grid;
               grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
               gap: 24px;
          }

          .testimonial {
               background: white;
               border-radius: 18px;
               padding: 32px;
               box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
          }

          .testimonial-text {
               font-size: 15px;
               color: #1d1d1f;
               line-height: 1.6;
               margin-bottom: 20px;
          }

          .testimonial-author {
               display: flex;
               align-items: center;
               gap: 12px;
          }

          .author-avatar {
               width: 48px;
               height: 48px;
               border-radius: 50%;
               background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
               display: flex;
               align-items: center;
               justify-content: center;
               color: white;
               font-weight: 600;
          }

          .author-info h4 {
               font-size: 15px;
               font-weight: 600;
               color: #1d1d1f;
          }

          .author-info p {
               font-size: 13px;
               color: #86868b;
          }

          /* Footer */
          .footer {
               background: #1d1d1f;
               color: white;
               padding: 60px 40px 40px;
               margin-top: 80px;
          }

          .footer-content {
               max-width: 1200px;
               margin: 0 auto;
               display: grid;
               grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
               gap: 40px;
               margin-bottom: 40px;
          }

          .footer-section h3 {
               font-size: 15px;
               font-weight: 600;
               margin-bottom: 16px;
          }

          .footer-links {
               list-style: none;
          }

          .footer-links a {
               color: #86868b;
               text-decoration: none;
               font-size: 14px;
               display: block;
               margin-bottom: 8px;
               transition: color 0.2s;
          }

          .footer-links a:hover {
               color: white;
          }

          .footer-bottom {
               max-width: 1200px;
               margin: 0 auto;
               padding-top: 40px;
               border-top: 1px solid rgba(255, 255, 255, 0.1);
               text-align: center;
               color: #86868b;
               font-size: 13px;
          }

          .social-links {
               display: flex;
               gap: 16px;
               margin-top: 16px;
          }

          .social-icon {
               width: 40px;
               height: 40px;
               border-radius: 50%;
               background: rgba(255, 255, 255, 0.1);
               display: flex;
               align-items: center;
               justify-content: center;
               color: white;
               text-decoration: none;
               transition: all 0.2s ease;
               font-size: 18px;
          }

          .social-icon:hover {
               background: rgba(255, 255, 255, 0.2);
               transform: translateY(-2px);
          }

          @media (max-width: 768px) {
               .nav-links {
                    display: none;
               }

               .hero h1 {
                    font-size: 36px;
               }

               .hero p {
                    font-size: 18px;
               }

               .section-title {
                    font-size: 32px;
               }
          }
     </style>
</head>

<body>
     <!-- Navbar -->
     <nav class="navbar">
          <div class="nav-content">
               <a href="#" class="logo">Portfolio</a>
               <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#portfolio">Work</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
               </ul>
          </div>
     </nav>

     <!-- Hero Section -->
     <section class="hero" id="home">
          <h1>Welcome to my website</h1>
          <p>Designer, Developer & Creative Thinker</p>
          <div class="hero-buttons">
               <button class="btn btn-primary" onclick="alert('View Work')">View My Work</button>
               <button class="btn btn-secondary" onclick="alert('Contact')">Get In Touch</button>
          </div>
     </section>

     <!-- Features Section -->
     <section class="features" id="features">
          <div class="feature-card">
               <div class="feature-icon">💻</div>
               <h3>Web Development</h3>
               <p>Building responsive and modern web applications with cutting-edge technologies.</p>
          </div>
          <div class="feature-card">
               <div class="feature-icon">🎨</div>
               <h3>UI/UX Design</h3>
               <p>Creating beautiful and intuitive user experiences that delight users.</p>
          </div>
          <div class="feature-card">
               <div class="feature-icon">📱</div>
               <h3>Mobile Apps</h3>
               <p>Developing native and cross-platform mobile applications.</p>
          </div>
     </section>

     <!-- Stats Section -->
     <section class="stats">
          <div class="stat">
               <h2>150+</h2>
               <p>Projects Completed</p>
          </div>
          <div class="stat">
               <h2>50+</h2>
               <p>Happy Clients</p>
          </div>
          <div class="stat">
               <h2>5+</h2>
               <p>Years Experience</p>
          </div>
          <div class="stat">
               <h2>20+</h2>
               <p>Awards Won</p>
          </div>
     </section>

     <!-- Portfolio Section -->
     <section class="portfolio" id="portfolio">
          <h2 class="section-title">Featured Work</h2>
          <div class="portfolio-grid">
               <div class="portfolio-item">
                    <div class="portfolio-image">🚀</div>
                    <div class="portfolio-content">
                         <h3>Project Alpha</h3>
                         <p>A revolutionary app that transforms how people interact with technology.</p>
                    </div>
               </div>
               <div class="portfolio-item">
                    <div class="portfolio-image">🌟</div>
                    <div class="portfolio-content">
                         <h3>Project Beta</h3>
                         <p>An e-commerce platform with seamless user experience and modern design.</p>
                    </div>
               </div>
               <div class="portfolio-item">
                    <div class="portfolio-image">✨</div>
                    <div class="portfolio-content">
                         <h3>Project Gamma</h3>
                         <p>A portfolio website showcasing creative work with stunning visuals.</p>
                    </div>
               </div>
          </div>
     </section>

     <!-- Testimonials Section -->
     <section class="testimonials" id="testimonials">
          <h2 class="section-title">What Clients Say</h2>
          <div class="testimonials-grid">
               <div class="testimonial">
                    <p class="testimonial-text">"Exceptional work! The attention to detail and creativity exceeded all expectations. Highly recommended!"</p>
                    <div class="testimonial-author">
                         <div class="author-avatar">JD</div>
                         <div class="author-info">
                              <h4>John Doe</h4>
                              <p>CEO, Tech Company</p>
                         </div>
                    </div>
               </div>
               <div class="testimonial">
                    <p class="testimonial-text">"Professional, timely, and incredibly talented. Will definitely work together again on future projects."</p>
                    <div class="testimonial-author">
                         <div class="author-avatar">SA</div>
                         <div class="author-info">
                              <h4>Sarah Anderson</h4>
                              <p>Creative Director</p>
                         </div>
                    </div>
               </div>
               <div class="testimonial">
                    <p class="testimonial-text">"Transformed our vision into reality with stunning design and flawless execution. Couldn't be happier!"</p>
                    <div class="testimonial-author">
                         <div class="author-avatar">MK</div>
                         <div class="author-info">
                              <h4>Mike Kim</h4>
                              <p>Startup Founder</p>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- Footer -->
     <footer class="footer" id="contact">
          <div class="footer-content">
               <div class="footer-section">
                    <h3>About</h3>
                    <ul class="footer-links">
                         <li><a href="#">About Me</a></li>
                         <li><a href="#">Services</a></li>
                         <li><a href="#">Portfolio</a></li>
                         <li><a href="#">Blog</a></li>
                    </ul>
               </div>
               <div class="footer-section">
                    <h3>Services</h3>
                    <ul class="footer-links">
                         <li><a href="#">Web Design</a></li>
                         <li><a href="#">Development</a></li>
                         <li><a href="#">Mobile Apps</a></li>
                         <li><a href="#">Consulting</a></li>
                    </ul>
               </div>
               <div class="footer-section">
                    <h3>Connect</h3>
                    <ul class="footer-links">
                         <li><a href="#">Twitter</a></li>
                         <li><a href="#">LinkedIn</a></li>
                         <li><a href="#">GitHub</a></li>
                         <li><a href="#">Email</a></li>
                    </ul>
                    <div class="social-links">
                         <a href="#" class="social-icon">𝕏</a>
                         <a href="#" class="social-icon">⚙</a>
                         <a href="#" class="social-icon">in</a>
                         <a href="#" class="social-icon">✉</a>
                    </div>
               </div>
          </div>
          <div class="footer-bottom">
               <p>&copy; 2025 Portfolio. All rights reserved.</p>
          </div>
     </footer>
</body>

</html>