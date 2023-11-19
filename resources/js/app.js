import './bootstrap';
import '../sass/fonts.sass';
import '../sass/app.sass';
import '../sass/nav.sass';
import '../sass/menu.sass';
import '../sass/main.sass';
import '../sass/circle-spinning.sass';
import '../sass/organization.sass';
import '../sass/geodesy.sass';
import '../sass/geology.sass';
import '../sass/ecology.sass';
import '../sass/vacancies.sass';
import '../sass/contacts.sass';
import '../sass/menu-popup.sass';
import '../sass/order-call-popup.sass';
import '../sass/send-CV-popup.sass';
import '../sass/success.sass';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const popup = document.getElementById('popup');
const overlay = document.getElementById('overlay');
const openOrderCall = document.getElementById('openOrderCall');
const openSendCV = document.getElementById('openSendCV');
const attachCVBtn = document.getElementById('attachCVBtn');
const closeSendCV = document.getElementById('closeSendCV');
const closeSuccess = document.getElementById('closeSuccess');

function toggleDisplay(ids, display) {
    ids.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
            element.style.display = display;
        }
    });
}

document.getElementById('openMenu').addEventListener('click', function() {
    toggleDisplay(['popup', 'overlay'], 'block');
});

document.getElementById('closeMenu').addEventListener('click', function() {
    toggleDisplay(['popup', 'overlay'], 'none');
});

document.getElementById('openOrderCallMenu').addEventListener('click', function() {
    toggleDisplay(['orderCall', 'overlay'], 'block');
    overlay.style.zIndex = '10';
});

document.getElementById('confirmCallOrder').addEventListener('click', function() {
    toggleDisplay(['sucess', 'overlay'], 'block');
});

if (openOrderCall) {
    openOrderCall.addEventListener('click', function() {
    toggleDisplay(['orderCall', 'overlay'], 'block');
    });
}

document.getElementById('closeOrderCall').addEventListener('click', function() {
    if (popup && overlay && getComputedStyle(popup).display === 'block') {
        toggleDisplay(['orderCall'], 'none');
    } else {
        toggleDisplay(['orderCall', 'overlay'], 'none');
    }
    overlay.style.zIndex = '5';
});

if (openSendCV) {
    openSendCV.addEventListener('click', function() {
    toggleDisplay(['sendCV', 'overlay'], 'block');
    });
}

if (closeSendCV) {
    closeSendCV.addEventListener('click', function() {
        toggleDisplay(['sendCV', 'overlay'], 'none');
    });
}

if (closeSuccess) {
    closeSuccess.addEventListener('click', function() {
        toggleDisplay(['success', 'overlay'], 'none');
    });
}

if (attachCVBtn) {
    attachCVBtn.addEventListener('click', function() {
        document.getElementById('attachCVfile').click();
    });
    document.getElementById('attachCVfile').addEventListener('change', function(e) {
        document.getElementById('attachCVBtn').textContent = e.target.files[0].name;
    });
}
