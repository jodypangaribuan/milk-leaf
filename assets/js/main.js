/**
 * Milk Leaf - Main JavaScript File
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS Animation
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });
    
    // Initialize Bootstrap tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Navbar scroll behavior
    const navbar = document.getElementById('mainNav');
    const backToTopButton = document.getElementById('backToTop');
    
    function handleScroll() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
            backToTopButton.classList.add('active');
        } else {
            navbar.classList.remove('scrolled');
            backToTopButton.classList.remove('active');
        }
    }
    
    window.addEventListener('scroll', handleScroll);
    
    // Back to top button functionality
    backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Navbar active state based on scroll position
    const sections = document.querySelectorAll('section[id]');
    
    function onScroll() {
        const scrollPosition = window.scrollY + 100;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                document.querySelector('.navbar-nav a[href*=' + sectionId + ']')?.classList.add('active');
            } else {
                document.querySelector('.navbar-nav a[href*=' + sectionId + ']')?.classList.remove('active');
            }
        });
    }
    
    window.addEventListener('scroll', onScroll);
    
    // Animation for elements when they enter viewport
    const animateElements = document.querySelectorAll('.animate-on-scroll');

    function checkIfInView() {
        animateElements.forEach(element => {
            const elementPosition = element.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            
            if (elementPosition.top < windowHeight * 0.8) {
                element.classList.add('in-view');
            }
        });
    }
    
    window.addEventListener('scroll', checkIfInView);
    checkIfInView(); // Check on page load
    
    // Product Image Zoom Effect on Hover
    const productImages = document.querySelectorAll('.product-card img');
    
    productImages.forEach(image => {
        image.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        image.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // Form Validation for Newsletter
    const newsletterForm = document.querySelector('.newsletter form');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailInput = this.querySelector('input[type="email"]');
            const email = emailInput.value.trim();
            
            if (email === '') {
                showFormError(emailInput, 'Email tidak boleh kosong!');
                return;
            }
            
            if (!isValidEmail(email)) {
                showFormError(emailInput, 'Masukkan email yang valid!');
                return;
            }
            
            // Show success message
            const successElement = document.createElement('div');
            successElement.className = 'alert alert-success mt-3';
            successElement.textContent = 'Berhasil berlangganan! Terima kasih.';
            
            const formContainer = this.closest('.row');
            formContainer.appendChild(successElement);
            
            // Reset form
            this.reset();
            
            // Remove success message after 3 seconds
            setTimeout(() => {
                successElement.remove();
            }, 3000);
        });
    }
    
    function showFormError(inputElement, message) {
        // Remove any existing error message
        const existingError = inputElement.parentElement.querySelector('.text-danger');
        if (existingError) {
            existingError.remove();
        }
        
        // Create error message
        const errorElement = document.createElement('small');
        errorElement.className = 'text-danger d-block mt-1';
        errorElement.textContent = message;
        
        // Add error message after input
        inputElement.parentElement.appendChild(errorElement);
        
        // Highlight input
        inputElement.classList.add('is-invalid');
        
        // Remove error after 3 seconds
        setTimeout(() => {
            errorElement.remove();
            inputElement.classList.remove('is-invalid');
        }, 3000);
    }
    
    function isValidEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
}); 