// Fade-in effect for Hero Section
gsap.from('.hero h1', { 
    duration: 1.5, 
    opacity: 0, 
    y: -50, 
    ease: 'power2.out'
});

gsap.from('.hero p', { 
    duration: 1.5, 
    opacity: 0, 
    y: -20, 
    ease: 'power2.out', 
    delay: 0.5 
});

gsap.from('.hero a', { 
    duration: 1.5, 
    opacity: 0, 
    y: 20, 
    ease: 'power2.out', 
    delay: 1 
});

// Animate projects on scroll
gsap.utils.toArray('.project').forEach((project, i) => {
    gsap.from(project, {
        opacity: 0,
        y: 50,
        duration: 1,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: project,
            start: 'top 80%',
            toggleActions: 'play none none none'
        }
    });
});
