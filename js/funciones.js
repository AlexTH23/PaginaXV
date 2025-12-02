
var swiper = new Swiper('.swiper', {
  slidesPerView: 3,
  spaceBetween: 10,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  loop: true,
  autoplay: {
    delay: 3000 // Cambia el valor para ajustar la velocidad de transición
  },
});


//FUNCIONES DEL CORREO

const form = document.getElementById('contactForm');

form.addEventListener('submit', function(event) {
  event.preventDefault();

  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const date = document.getElementById('dateInput').value;
  const time = document.getElementById('timeInput').value;

  const message = `Name: ${name}\nEmail: ${email}\nDate: ${date}\nTime: ${time}`;

  const mailToLink = `mailto:villanuevajovana1@gmail.com?subject=Reservation%20Request&body=${encodeURIComponent(message)}`;
  window.location.href = mailToLink;
});
