const canvas = document.getElementById('bg-dots');
const ctx = canvas.getContext('2d');

const SPACING = 50;
const COLOR = '#c0bdb5';
const RADIUS = 1;

let W, H, dots = [];
let mouse = { x: -9999, y: -9999 };

function init() {
    W = canvas.width = window.innerWidth;
    H = canvas.height = window.innerHeight;

    dots = [];
    const cols = Math.ceil(W / SPACING) + 2;
    const rows = Math.ceil(H / SPACING) + 2;

    for (let r = 0; r < rows; r++) {
        for (let c = 0; c < cols; c++) {
            const ox = c * SPACING + SPACING / 2;
            const oy = r * SPACING + SPACING / 2;
            dots.push({
                ox, oy,
                x: ox, y: oy,
                speed: 0.035 + Math.random() * 0.085,
                strength: 5 + Math.random() * 18,
            });
        }
    }
}

function draw() {
    ctx.clearRect(0, 0, W, H);

    for (const d of dots) {
        const dx = mouse.x - d.ox;
        const dy = mouse.y - d.oy;
        const dist = Math.sqrt(dx * dx + dy * dy) || 1;

        const factor = d.strength / dist;
        const tx = d.ox + dx * Math.min(factor, 1);
        const ty = d.oy + dy * Math.min(factor, 1);

        d.x += (tx - d.x) * d.speed;
        d.y += (ty - d.y) * d.speed;

        ctx.beginPath();
        ctx.arc(d.x, d.y, RADIUS, 0, Math.PI * 2);
        ctx.fillStyle = COLOR;
        ctx.fill();
    }

    requestAnimationFrame(draw);
}

document.addEventListener('mousemove', ({ clientX, clientY }) => {
    mouse.x = clientX;
    mouse.y = clientY;
});

document.addEventListener('mouseleave', () => {
    mouse.x = W / 2;
    mouse.y = H / 2;
});

window.addEventListener('resize', init);

init();
draw();