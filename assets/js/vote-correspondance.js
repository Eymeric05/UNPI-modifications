// JavaScript pour la page Vote par Correspondance

document.addEventListener('DOMContentLoaded', function() {
    // Initialisation du reCAPTCHA
    if (typeof grecaptcha !== 'undefined') {
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le_CGwdAAAAACk1QAhteDWpDRg9lbswvnl_pP41', {
                action: 'submit'
            }).then(function(token) {
                var response = document.getElementById('token_response');
                if (response) {
                    response.value = token;
                }
            });
        });
    }

    // Initialisation de la signature
    initSignature();
    
    // Initialiser la date du jour
    const dateInput = document.getElementById('date');
    if (dateInput) {
        dateInput.valueAsDate = new Date();
    }
});

function initSignature() {
    let canvas = document.getElementById('signature-canvas');
    if (!canvas) return;
    
    let ctx = canvas.getContext('2d');
    let isDrawing = false;

    // Initialiser le canvas
    ctx.strokeStyle = '#000';
    ctx.lineWidth = 2;
    ctx.lineCap = 'round';

    // Événements de la souris
    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseout', stopDrawing);

    // Événements tactiles
    canvas.addEventListener('touchstart', handleTouch);
    canvas.addEventListener('touchmove', handleTouch);
    canvas.addEventListener('touchend', stopDrawing);

    function startDrawing(e) {
        isDrawing = true;
        const rect = canvas.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        ctx.beginPath();
        ctx.moveTo(x, y);
    }

    function draw(e) {
        if (!isDrawing) return;
        const rect = canvas.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        ctx.lineTo(x, y);
        ctx.stroke();
    }

    function stopDrawing() {
        isDrawing = false;
    }

    function handleTouch(e) {
        e.preventDefault();
        const touch = e.touches[0];
        const mouseEvent = new MouseEvent(e.type === 'touchstart' ? 'mousedown' : 
                                        e.type === 'touchmove' ? 'mousemove' : 'mouseup', {
            clientX: touch.clientX,
            clientY: touch.clientY
        });
        canvas.dispatchEvent(mouseEvent);
    }
}

function clearSignature() {
    let canvas = document.getElementById('signature-canvas');
    if (!canvas) return;
    
    let ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    let signatureData = document.getElementById('signature-data');
    if (signatureData) {
        signatureData.value = '';
    }
}

function saveSignature() {
    let canvas = document.getElementById('signature-canvas');
    if (!canvas) return;
    
    const signatureData = canvas.toDataURL('image/png');
    let signatureInput = document.getElementById('signature-data');
    if (signatureInput) {
        signatureInput.value = signatureData;
    }
}
