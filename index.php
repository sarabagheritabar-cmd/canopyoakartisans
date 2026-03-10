<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Canopy Oak Artisans | Custom Solid Oak & Rainforest Furniture</title>
  <meta name="description" content="Canopy Oak Artisans specializes in custom solid oak furniture, rainforest-inspired designs, and sustainable woodworking in New York.">
  <link rel="icon" href="favicon.ico">
  <script src="https://cdn.tailwindcss.com?v=3.4.0"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap');
    body {
      font-family: 'Sora', sans-serif;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      background-color: #e2e8f0; /* background */
      color: #1e293b; /* text_main */
    }
    h1, h2, h3, h4, h5, h6 {
      font-weight: 600; /* heading */
    }
    .shadow-neomorphic-flat {
      box-shadow: 8px 8px 16px #cbd5e1, -8px -8px 16px #f8fafc;
    }
    .shadow-neomorphic-pressed {
      box-shadow: inset 8px 8px 16px #cbd5e1, inset -8px -8px 16px #f8fafc;
    }
    .shadow-card-medium {
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .bg-primary { background-color: #5413eb; }
    .bg-primary-light { background-color: #9b79eb; }
    .bg-primary-dark { background-color: #3a0da5; }
    .bg-secondary { background-color: #b12cd2; }
    .bg-accent { background-color: #b3ed2a; }
    .bg-background { background-color: #e2e8f0; }
    .bg-surface { background-color: #e2e8f0; }
    .text-text-main { color: #1e293b; }
    .text-text-muted { color: #475569; }
    .rounded-20px { border-radius: 20px; }
    .hover-bg-shift:hover {
      background-color: #c0ee4b; /* slightly lighter accent for hover */
      transition: background-color 0.3s ease;
    }
    .nav-link-hover:hover {
      color: #5413eb; /* primary color on hover */
      transition: color 0.3s ease;
    }
    .neomorphic-card {
      background-color: #e2e8f0; /* surface */
      border-radius: 20px;
      box-shadow: 8px 8px 16px #cbd5e1, -8px -8px 16px #f8fafc;
    }
    /* Simple hover zoom for images */
    .img-zoom:hover {
      transform: scale(1.03);
      transition: transform 0.3s ease-in-out;
    }
    /* Fade-in for sections */
    .fade-in-section {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .fade-in-section.is-visible {
      opacity: 1;
      transform: translateY(0);
    }
    @media (prefers-reduced-motion: reduce) {
      .fade-in-section {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body class=" antialiased">
  <header class="bg-surface fixed w-full z-50 transition-all duration-300 shadow-none" id="navbar">
    <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="#" class="text-2xl font-semibold text-primary">Canopy Oak Artisans</a>
      <div class="hidden md:flex space-x-8">
        <a href="#about" class="text-text-main hover:text-primary nav-link-hover">About</a>
        <a href="#services" class="text-text-main hover:text-primary nav-link-hover">Services</a>
        <a href="#sustainability" class="text-text-main hover:text-primary nav-link-hover">Sustainability</a>
        <a href="#testimonials" class="text-text-main hover:text-primary nav-link-hover">Testimonials</a>
        <a href="#contact" class="text-text-main hover:text-primary nav-link-hover">Contact</a>
      </div>
      <div class="md:hidden">
        <button class="text-text-main focus:outline-none" id="mobile-menu-button">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
      </div>
    </nav>
    <div id="mobile-menu" class="hidden md:hidden bg-surface shadow-neomorphic-flat pb-4">
      <a href="#about" class="block px-4 py-2 text-text-main hover:bg-background nav-link-hover">About</a>
      <a href="#services" class="block px-4 py-2 text-text-main hover:bg-background nav-link-hover">Services</a>
      <a href="#sustainability" class="block px-4 py-2 text-text-main hover:bg-background nav-link-hover">Sustainability</a>
      <a href="#testimonials" class="block px-4 py-2 text-text-main hover:bg-background nav-link-hover">Testimonials</a>
      <a href="#contact" class="block px-4 py-2 text-text-main hover:bg-background nav-link-hover">Contact</a>
    </div>
  </header>
<main>
    
    <section id="hero" class="relative bg-primary min-h-screen flex items-center justify-center text-white overflow-hidden" style="padding-top: 80px;">
      <img src="images/hero-rainforest-oak-furniture-1280x896.jpeg" alt="Canopy Oak Artisans solid oak dining table inspired by rainforest canopy" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-75">
      <div class="absolute inset-0 bg-gradient-to-t from-primary-dark via-primary to-transparent opacity-80"></div>
      <div class="relative z-10 text-center max-w-4xl mx-auto px-4 py-16 animate-fade-in-up">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 leading-tight">Bring the Rainforest Home with Canopy Oak Artisans</h1>
        <p class="text-xl md:text-2xl mb-8 font-light max-w-2xl mx-auto">Custom solid oak furniture meticulously crafted in New York, blending sustainable woodworking with breathtaking natural designs.</p>
        <a href="#services" class="inline-block bg-accent text-primary-dark rounded-20px px-8 py-4 text-lg font-semibold shadow-card-medium hover-bg-shift">Explore Our Craft</a>
      </div>
    </section>

    
    <section id="about" class="py-20 md:py-32 bg-background fade-in-section">
      <div class="container mx-auto px-4">
        <div class="neomorphic-card p-8 md:p-16 flex flex-col md:flex-row items-center gap-12 max-w-6xl mx-auto">
          <div class="md:w-1/2">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary-dark">The Canopy Oak Artisans Philosophy</h2>
            <p class="text-lg leading-relaxed text-text-main mb-4">Rooted in the heart of New York, we believe that every piece of wood tells a story. At Canopy Oak Artisans, our master artisans transform sustainably sourced solid oak into legacy furniture. Our unique rainforest-inspired designs capture the organic flow, rich textures, and enduring strength of nature's greatest ecosystems.</p>
            <p class="text-lg leading-relaxed text-text-muted">From the initial sketch to the final polish, our commitment to artistry and environmental stewardship ensures that each creation is not just furniture, but a natural masterpiece designed to last generations.</p>
          </div>
          <div class="md:w-1/2">
            <img src="images/about-artisan-woodworking-640x640.jpeg" alt="Master woodworker at Canopy Oak Artisans carving intricate designs" class="block w-full h-auto rounded-20px shadow-card-medium img-zoom">
          </div>
        </div>
      </div>
    </section>

    
    <section id="services" class="py-20 md:py-32 bg-background fade-in-section">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary-dark">Bespoke Offerings by Canopy Oak Artisans</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="neomorphic-card p-8 text-center shadow-card-medium hover:bg-surface rounded-20px hover-bg-shift">
            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center rounded-full overflow-hidden bg-primary-light">
              <img src="images/icon-custom-furniture-64x64.jpeg" alt="Custom furniture icon" class="w-12 h-12 object-cover">
            </div>
            <h3 class="text-xl font-semibold mb-3 text-primary-dark">Custom Solid Oak Furniture</h3>
            <p class="text-text-muted">Hand-built tables, beds, and seating tailored entirely to your space and vision, reflecting unparalleled craftsmanship.</p>
          </div>
          <div class="neomorphic-card p-8 text-center shadow-card-medium hover:bg-surface rounded-20px hover-bg-shift">
            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center rounded-full overflow-hidden bg-primary-light">
              <img src="images/icon-rainforest-design-64x64.jpeg" alt="Rainforest design icon" class="w-12 h-12 object-cover">
            </div>
            <h3 class="text-xl font-semibold mb-3 text-primary-dark">Rainforest-Inspired Designs</h3>
            <p class="text-text-muted">Signature pieces incorporating lush, organic motifs and flowing woodwork that evoke the natural beauty of a vibrant ecosystem.</p>
          </div>
          <div class="neomorphic-card p-8 text-center shadow-card-medium hover:bg-surface rounded-20px hover-bg-shift">
            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center rounded-full overflow-hidden bg-primary-light">
              <img src="images/icon-cabinetry-64x64.jpeg" alt="Cabinetry icon" class="w-12 h-12 object-cover">
            </div>
            <h3 class="text-xl font-semibold mb-3 text-primary-dark">Bespoke Cabinetry</h3>
            <p class="text-text-muted">Architectural grade, custom-fitted oak storage solutions for luxury homes, combining functionality with exquisite aesthetics.</p>
          </div>
          <div class="neomorphic-card p-8 text-center shadow-card-medium hover:bg-surface rounded-20px hover-bg-shift">
            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center rounded-full overflow-hidden bg-primary-light">
              <img src="images/icon-restoration-64x64.jpeg" alt="Restoration icon" class="w-12 h-12 object-cover">
            </div>
            <h3 class="text-xl font-semibold mb-3 text-primary-dark">Restoration Services</h3>
            <p class="text-text-muted">Expert wood restoration, breathing new life into cherished heirloom pieces with an eye for historical accuracy and preservation.</p>
          </div>
        </div>
      </div>
    </section>

    
    <section id="sustainability" class="py-20 md:py-32 bg-primary-light text-white text-center fade-in-section">
      <div class="container mx-auto px-4">
        <div class="p-8 md:p-16 rounded-20px shadow-neomorphic-pressed mx-auto max-w-5xl">
          <h2 class="text-3xl md:text-4xl font-bold mb-6">Committed to the Canopy</h2>
          <p class="text-lg md:text-xl leading-relaxed mb-8">Sustainability isn't a buzzword at Canopy Oak Artisans; it’s our foundation. We use exclusively ethically harvested solid oak, implement zero-waste milling processes, and plant a tree for every piece of furniture we deliver. Beautiful spaces shouldn't cost the earth.</p>
          <img src="images/sustainability-oak-sapling-1280x384.jpeg" alt="Oak sapling growing representing Canopy Oak Artisans eco-friendly practices" class="block w-full h-auto rounded-20px shadow-card-medium img-zoom object-cover max-h-96 mx-auto">
          <p class="text-sm mt-4 italic opacity-80">Our dedication extends from forest to your home, ensuring responsible elegance.</p>
        </div>
      </div>
    </section>

    
    <section id="testimonials" class="py-20 md:py-32 bg-background fade-in-section">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary-dark">Voices from the Canopy</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
          
          <div class="lg:col-span-2 neomorphic-card p-8 md:p-10 rounded-20px shadow-card-medium flex flex-col items-center justify-center text-center">
            <img src="images/testimonial-dining-table-320x320.jpeg" alt="Elena M. with her custom dining table" class="w-32 h-32 rounded-full mb-6 mx-auto object-cover border-4 border-primary">
            <p class="text-xl md:text-2xl italic font-medium text-text-main mb-6 leading-relaxed">"The custom rainforest-inspired dining table from Canopy Oak Artisans completely transformed our home. The solid oak craftsmanship is beyond anything we could have imagined. True functional art."</p>
            <p class="text-lg font-semibold text-primary-dark">- Elena M., Brooklyn NY</p>
          </div>
          
          <div class="lg:col-span-1 flex flex-col space-y-8">
            <div class="neomorphic-card p-6 rounded-20px shadow-card-medium text-center">
              <img src="images/testimonial-cabinetry-128x128.jpeg" alt="James T. showcasing his custom cabinetry" class="w-24 h-24 rounded-full mb-4 mx-auto object-cover border-2 border-primary-light">
              <p class="text-md italic text-text-main mb-4">"Bespoke cabinetry that fits seamlessly and feels incredibly grounded in nature. The attention to detail is astonishing."</p>
              <p class="text-md font-semibold text-primary-dark">- James T., Manhattan</p>
            </div>
            <div class="neomorphic-card p-6 rounded-20px shadow-card-medium text-center">
              <img src="images/testimonial-restoration-128x128.jpeg" alt="Sarah L. with restored heirloom rocking chair" class="w-24 h-24 rounded-full mb-4 mx-auto object-cover border-2 border-primary-light">
              <p class="text-md italic text-text-main mb-4">"Canopy Oak Artisans restored my grandfather's rocking chair flawlessly while honoring its history. It's more beautiful than I remember."</p>
              <p class="text-md font-semibold text-primary-dark">- Sarah L., Queens</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section id="contact" class="py-20 md:py-32 bg-background fade-in-section">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary-dark">Commission Your Piece</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-7xl mx-auto">
          
          <div class="neomorphic-card p-8 md:p-12 rounded-20px shadow-neomorphic-flat flex flex-col justify-between">
            <h3 class="text-2xl font-bold mb-6 text-primary-dark">Reach Out to Our Artisans</h3>
            <p class="text-lg text-text-main mb-4 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              Herkimer Street, New York, New York, 11207, USA
            </p>
            <p class="text-lg text-text-main mb-4 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              +19838763657
            </p>
            <a href="mailto:info@canopyoakartisans.com" class="text-lg text-text-main mb-8 flex items-center hover:text-primary transition-colors duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-2 2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v4m0 4v4a2 2 0 002 2h14a2 2 0 002-2v-4"/></svg>
              info@<?php echo $_SERVER['HTTP_HOST']; ?>
            </a>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12097.433213460943!2d-74.0062269!3d40.7127762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fce79f06b!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2suk!4v1678888888888!5m2!1sen!2suk"
              width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-20px shadow-card-medium"></iframe>
          </div>

          
          <div class="neomorphic-card p-8 md:p-12 rounded-20px shadow-neomorphic-flat">
            <form>
              <div class="mb-6">
                <label for="full-name" class="block text-text-main text-lg font-medium mb-2">Full Name</label>
                <input type="text" id="full-name" name="full-name" placeholder="Your Name" class="w-full p-4 rounded-20px bg-background shadow-neomorphic-pressed focus:outline-none focus:ring-2 focus:ring-primary-light text-text-main">
              </div>
              <div class="mb-6">
                <label for="email-address" class="block text-text-main text-lg font-medium mb-2">Email Address</label>
                <input type="email" id="email-address" name="email-address" placeholder="hello@example.com" class="w-full p-4 rounded-20px bg-background shadow-neomorphic-pressed focus:outline-none focus:ring-2 focus:ring-primary-light text-text-main">
              </div>
              <div class="mb-6">
                <label for="service-interest" class="block text-text-main text-lg font-medium mb-2">Service of Interest</label>
                <select id="service-interest" name="service-interest" class="w-full p-4 rounded-20px bg-background shadow-neomorphic-pressed focus:outline-none focus:ring-2 focus:ring-primary-light text-text-main appearance-none">
                  <option value="">Select a service</option>
                  <option value="Custom Furniture">Custom Furniture</option>
                  <option value="Cabinetry">Cabinetry</option>
                  <option value="Restoration">Restoration</option>
                  <option value="Wood Carving">Wood Carving</option>
                </select>
              </div>
              <div class="mb-8">
                <label for="project-details" class="block text-text-main text-lg font-medium mb-2">Project Details</label>
                <textarea id="project-details" name="project-details" rows="5" placeholder="Tell us about your space and vision..." class="w-full p-4 rounded-20px bg-background shadow-neomorphic-pressed focus:outline-none focus:ring-2 focus:ring-primary-light text-text-main"></textarea>
              </div>
              <button type="submit" class="bg-accent text-primary-dark w-full py-4 rounded-20px text-xl font-semibold shadow-card-medium hover-bg-shift focus:outline-none focus:ring-2 focus:ring-accent">Send Inquiry</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer class="bg-[#212529] text-white py-16 mt-20 md:mt-32 relative overflow-hidden">
    
    <div class="absolute top-0 left-0 w-full h-2" style="box-shadow: inset 0 8px 16px rgba(0,0,0,0.2), inset 0 -8px 16px rgba(255,255,255,0.05);"></div>

    <div class="container mx-auto px-4 text-center relative z-10">
      <h3 class="text-3xl font-bold mb-4 text-white">Canopy Oak Artisans</h3>
      <p class="text-lg mb-8 text-gray-300">Crafting the ultimate expression of nature.</p>
      <div class="flex flex-wrap justify-center space-x-6 mb-8 text-sm">
        <a href="./privacy.html" class="hover:text-primary-light transition-colors duration-300">Privacy Policy</a>
        <a href="./tos.html" class="hover:text-primary-light transition-colors duration-300">Terms of Service</a>
        <a href="#sustainability" class="hover:text-primary-light transition-colors duration-300">Sustainability Report</a>
      </div>
      <p class="text-gray-400 text-sm">&copy; 2024 Canopy Oak Artisans. All rights reserved.</p>
    </div>

    
    <div id="cookie-consent-banner" class="fixed bottom-0 left-0 w-full bg-gray-800 text-white p-4 flex flex-col md:flex-row items-center justify-between z-50 shadow-lg">
      <p class="text-sm mb-2 md:mb-0">We use cookies to enhance your browsing experience. By continuing, you agree to our <a href="./privacy.html" class="text-primary-light underline hover:no-underline">Privacy Policy</a>.</p>
      <button id="accept-cookies" class="bg-accent text-primary-dark px-6 py-2 rounded-20px text-sm font-semibold hover-bg-shift focus:outline-none focus:ring-2 focus:ring-accent">Accept</button>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when a link is clicked
    document.querySelectorAll('#mobile-menu a').forEach(item => {
        item.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });

    // Navbar shadow on scroll
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.add('shadow-neomorphic-flat');
      } else {
        navbar.classList.remove('shadow-neomorphic-flat');
      }
    });

    // Intersection Observer for fade-in sections
    const fadeElements = document.querySelectorAll('.fade-in-section');
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    fadeElements.forEach(el => {
      observer.observe(el);
    });

    // Cookie Consent Logic
    const cookieBanner = document.getElementById('cookie-consent-banner');
    const acceptButton = document.getElementById('accept-cookies');
    const cookieNamePrefix = 'consent_'; 
    const fullCookieName = cookieNamePrefix + 'canopyoak_'; // Use a unique prefix to minimize conflicts

    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }

    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for(let i=0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Check for existing cookie consent
    if (!getCookie(fullCookieName)) {
        cookieBanner.style.display = 'flex';
    } else {
        cookieBanner.style.display = 'none';
    }

    acceptButton.addEventListener('click', () => {
        setCookie(fullCookieName, 'accepted', 365); // Store consent for 365 days
        cookieBanner.style.display = 'none';
    });
  </script>
</body>
</html>