// scroll.js

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.menu-navbar a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            // Get the href attribute value
            const targetId = this.getAttribute('href').substring(1); // Remove the '#'

            // Scroll to the footer if the targetId is 'about', otherwise scroll to the section
            if (targetId === 'about') {
                const footer = document.getElementById('contact');
                if (footer) {
                    footer.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            } else {
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});

