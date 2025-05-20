/**
 * Milk Leaf - Main JavaScript
 * A clean architecture approach with module pattern
 */

// IIFE to avoid polluting the global namespace
(function() {
    'use strict';

    // App namespace
    const MilkLeaf = {};

    // DOM references module
    MilkLeaf.DOM = {
        navbar: document.querySelector('.navbar'),
        navLinks: document.querySelectorAll('.nav-link'),
        productCards: document.querySelectorAll('.products .card'),
        testimonialCards: document.querySelectorAll('.testimonials .card')
    };

    // Utilities module
    MilkLeaf.Utils = {
        // Add active class to current page nav link
        setActiveNavLink: function() {
            const currentLocation = window.location.pathname;
            MilkLeaf.DOM.navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === currentLocation || 
                    (currentLocation === '/' && href === 'index.html')) {
                    link.classList.add('active');
                }
            });
        },

        // Add scroll event for navbar
        handleNavbarScroll: function() {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    MilkLeaf.DOM.navbar.classList.add('scrolled');
                } else {
                    MilkLeaf.DOM.navbar.classList.remove('scrolled');
                }
            });
        },

        // Smooth scroll for internal links
        enableSmoothScroll: function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId !== '#') {
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            targetElement.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });
        }
    };

    // Animation module
    MilkLeaf.Animations = {
        // Animate elements when they come into view
        initScrollAnimations: function() {
            // Helper function to check if element is in viewport
            const isInViewport = function(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.8 &&
                    rect.bottom >= 0
                );
            };

            // Elements to animate
            const animateElements = document.querySelectorAll('.benefits .card, .products .card, .testimonials .card');
            
            // Add initial hidden class
            animateElements.forEach(element => {
                element.classList.add('fade-in-element');
            });

            // Check elements on scroll
            const checkAnimations = function() {
                animateElements.forEach(element => {
                    if (isInViewport(element)) {
                        element.classList.add('visible');
                    }
                });
            };

            // Add scroll event listener
            window.addEventListener('scroll', checkAnimations);
            
            // Check on initial load
            checkAnimations();
        },

        // Add hover animations
        initHoverAnimations: function() {
            // Product cards hover effect
            MilkLeaf.DOM.productCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.querySelector('.btn').classList.add('btn-animation');
                });
                
                card.addEventListener('mouseleave', function() {
                    this.querySelector('.btn').classList.remove('btn-animation');
                });
            });
        }
    };

    // Form handling module
    MilkLeaf.Forms = {
        // Initialize contact form validation
        initContactForm: function() {
            const contactForm = document.querySelector('#contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Simple validation example
                    let isValid = true;
                    const requiredFields = contactForm.querySelectorAll('[required]');
                    
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.classList.add('is-invalid');
                        } else {
                            field.classList.remove('is-invalid');
                        }
                    });
                    
                    if (isValid) {
                        // Here you would normally submit the form or use AJAX
                        // For demo, let's show a success message
                        const formWrapper = contactForm.parentElement;
                        formWrapper.innerHTML = '<div class="alert alert-success">Pesan Anda telah berhasil dikirim! Kami akan menghubungi Anda segera.</div>';
                    }
                });
                
                // Real-time validation feedback
                contactForm.querySelectorAll('input, textarea').forEach(field => {
                    field.addEventListener('blur', function() {
                        if (this.hasAttribute('required') && !this.value.trim()) {
                            this.classList.add('is-invalid');
                        } else {
                            this.classList.remove('is-invalid');
                        }
                    });
                });
            }
        }
    };

    // Initialization function
    MilkLeaf.init = function() {
        // Initialize utilities
        this.Utils.setActiveNavLink();
        this.Utils.handleNavbarScroll();
        this.Utils.enableSmoothScroll();
        
        // Initialize animations
        this.Animations.initScrollAnimations();
        this.Animations.initHoverAnimations();
        
        // Initialize forms
        this.Forms.initContactForm();
        
        // Log initialization
        console.log('Milk Leaf website initialized');
    };

    // Run initialization when DOM is fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        MilkLeaf.init();
    });

})(); 