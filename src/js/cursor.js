const cursor = document.getElementById('cursor');
const links = document.querySelectorAll('a');

document.addEventListener('mousemove', ({ clientX: x, clientY: y }) => {
    cursor.style.left = `${x}px`;
    cursor.style.top = `${y}px`;
});

links.forEach(project => {
    project.addEventListener('mouseenter', () => {
        cursor.classList.add('hover-cursor');
    });
    project.addEventListener('mouseleave', () => {
        cursor.classList.remove('hover-cursor');
    });
});


