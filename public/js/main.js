document.addEventListener('DOMContentLoaded', function() {

    let btnOpenBlockVideo = document.querySelector('.btn-videos-block-show-more');
    let blockVideoMain = document.querySelector('.main-videos-block');
    let blockVideoPage = document.querySelector('.page-videos-block');

    btnOpenBlockVideo.addEventListener('click', function() {
        if (blockVideoMain) {
            blockVideoMain.classList.add('main-video-show-all-video');
        }
        if (blockVideoPage) {
            blockVideoPage.classList.add('page-videos-block-show-more');
        }
    });

    // Smooth scrolling for anchor links
    const smoothLinks = document.querySelectorAll('a[href^="#"]');
    for (let smoothLink of smoothLinks) {
        smoothLink.addEventListener('click', function(e) {
            e.preventDefault();
            const id = smoothLink.getAttribute('href');
            document.querySelector(id).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    }

}, false);


function copyToClipboard(event) {
    event.preventDefault(); // Предотвращаем переход по ссылке

    // Копирование текста в буфер обмена
    const el = document.createElement('textarea');
    el.value = event.target.textContent;
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);

    // Показываем уведомление
    const notification = document.getElementById('notification');
    notification.style.display = 'block';

    // Скрываем уведомление через 2 секунды
    setTimeout(() => {
        notification.style.display = 'none';
    }, 2000);
}

document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.advantages-block__item__img');

    images.forEach(img => {
        const delay = Math.random() * 5; // Случайная задержка от 0 до 5 секунд
        img.style.animationDelay = `${delay}s`;
    });
});

function openLink(url) {
    window.open(url, '_blank');
}
