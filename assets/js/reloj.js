function updateClock() {
    const now = new Date();
    const dayOfWeek = now.getDay();
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const isPM = hours >= 12;

    const formattedHours = formatTime(hours % 12 || 12); 
    const timeString = `${formattedHours}:${formatTime(minutes)} <span class="am-pm">${isPM ? 'p.m' : 'a.m'}</span>`;
    document.getElementById('clock').innerHTML = timeString;

    const isAbierto = (hours >= 7 && (hours < 20 || (hours === 20 && minutes === 0))) && (dayOfWeek >= 1 && dayOfWeek <= 6);

    const messageElement = document.getElementById('message');
    const message = isAbierto ? 'Abierto' : 'Cerrado';
    messageElement.innerText = message;
    messageElement.className = isAbierto ? 'abierto' : 'cerrado';
}

function formatTime(time) {
    return time < 10 ? `0${time}` : time;
}

// Actualizar el reloj cada segundo
setInterval(updateClock, 1000);

// Actualizar el mensaje al cargar la página
updateClock();
