<!-- Stylesheets -->
<link rel="stylesheet" href="public/css/paginas/contact.css">
<link rel="stylesheet" href="public/css/global.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Header -->
<?php
    $tags = [
        '<link rel="stylesheet" href="/public/css/index.css">',
    ];
    $data = [
        'tags' => $tags,
        'nav' => true
    ];


    $this->utils('header', $data);

?>

<!-- Banner -->
<div class="bannerContact">
	<img  class="banner-img" src="public/Images/backgrounds/bg-contact.png" alt="Banner">
	<h1>Contact</h1>
</div>

<p class="text">Wilt u contact opnemen? Hier is hoe:</p>

<!-- Contact -->
<div class="contact-container">
	<h1 class="title">Bezoek ons!</h1>
	<p class="adress">
		<i class="fas fa-map-marker-alt"></i>
		<span>Adres:</span>
		<br>
		<span>Australiëlaan 1234 EC</span>
		<br>
		<span>Amsterdam, Nederland</span>
	</p>
	<div class="mail-us">
		<i class="fas fa-envelope"></i>
		<span>E-mail ons:</span>
		<br>
		<input type="text" placeholder="Uw Email" id="email"></input>
		<button id="sendEmail"><i class="fa-solid fa-paper-plane"></i></button>
	</div>
</div>

<!-- Map -->
<div class="row">
<h1 class="title">Kijk waar we zijn!</h1>
	<div class="col">
		<div id="map"></div>
	</div>
</div>

<!-- Script and api script -->
<script src="public/JS/contact.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXFAxSgXP7b5D25WEtjxkYqoWM2PjxaLg&callback=initMap&libraries=places"async defer></script>

<script>
	// Validate Email
	const email = document.getElementById('email');
	const sendEmail = document.getElementById('sendEmail');

	sendEmail.addEventListener('click', () => {
		if (email.value === '') {
			email.style.border = '2px solid red';
			alert('Email is verplicht!');
		} else if (email.value.indexOf('@') === -1) {
			email.style.border = '2px solid red';
			alert('Email is niet geldig!');
		} else {
			email.style.border = '2px solid lightgreen';
			alert('Email is verzonden!');
		}
	});
</script>

