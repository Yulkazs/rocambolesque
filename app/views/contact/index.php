<!-- Stylesheets -->
<link rel="stylesheet" href="public/css/paginas/contact.css">
<link rel="stylesheet" href="public/css/global.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="public/JS/contact.js"></script>

<!-- Banner dat bovenaan de pagina komt te staan-->
<div class="banner">
    <img src="../public/Images/backgrounds/bg-contact.png">
</div>

<!--  Pagina Titel -->
<h2 class="title">Contact Ons</h2>

<div class="container">
    <div class="info-container">
        <h1 id="Title">Info</h1>
        <p id="Desc">
            Heeft u een specifieke vraag of wilt u meer informatie ontvangen? Vul dan het onderstaande contactformulier in. We zullen zo snel mogelijk contact met u opnemen.
            <br>
            <br>
            Bij Rocambolesque streven we ernaar om u de best mogelijke service te bieden. We kijken uit naar uw bericht en hopen u binnenkort te mogen verwelkomen als een gewaardeerde klant of partner.
            <br>
            <br>
            Bedankt voor uw interesse in Rocambolesque!
        </p>
        <div class="info-buttons">
            <i class="fa-solid fa-phone"></i>
            <span>+1 800 123 4567</span>
            <br>
            <i class="fa-solid fa-location-arrow"></i>
            <span>Reestraat 8  1016DN Amsterdam</span>
            <span>Australiëlaan 12345 EC  - Amsterdam, Nederland</span>
        </div>
    </div>
    <div class="form-container">
		<form name="frmContact" id="" frmContact"" method="post" action=""
			enctype="multipart/form-data" onsubmit="return validateContactForm()">

			<div class="input-row">
				<label style="padding-top: 20px;">Naam</label> <span
					id="userName-info" class="info"></span><br /> <input type="text"
					class="input-field" name="userName" placeholder="Voor & Achternaam" id="userName" />
			</div>
			<div class="input-row">
				<label>Email</label> <span id="userEmail-info" class="info"></span><br />
				<input type="text" class="input-field" placeholder="Email adres" name="userEmail"
					id="userEmail" />
			</div>
			<div class="input-row">
				<label>Onderwerp</label> <span id="subject-info" class="info"></span><br />
				<input type="text" class="input-field" placeholder="Onderwerp van uw bericht" name="subject" id="subject" />
			</div>
			<div class="input-row">
				<label>Bericht</label> <span id="userMessage-info" class="info"></span><br />
				<textarea name="content" id="content" placeholder="Uw bericht hier..." class="input-field" cols="60"
					rows="6"></textarea>
			</div>
			<div>
				<input type="submit" name="send" class="btn-submit" value="Send" onclick="showSuccessMessage()" />

				<div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"
		type="text/javascript"></script>
	<!-- include JavaScript validation here -->
</div>

<script>
    function validateContactForm() {
	var valid = true;

	$(".info").html("");
	$(".input-field").css('border', '#e0dfdf 1px solid');
	var userName = $("#userName").val();
	var userEmail = $("#userEmail").val();
	var subject = $("#subject").val();
	var content = $("#content").val();

	if (userName == "") {
		$("#userName-info").html("Verplicht.");
		$("#userName").css('border', '#e66262 1px solid');
		valid = false;
	}
	if (userEmail == "") {
		$("#userEmail-info").html("Verplicht.");
		$("#userEmail").css('border', '#e66262 1px solid');
		valid = false;
	}
	if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#userEmail-info").html("Email adress is incorrect.");
		$("#userEmail").css('border', '#e66262 1px solid');
		valid = false;
	}

	if (subject == "") {
		$("#subject-info").html("Verplicht.");
		$("#subject").css('border', '#e66262 1px solid');
		valid = false;
	}
	if (content == "") {
		$("#userMessage-info").html("Verplicht.");
		$("#content").css('border', '#e66262 1px solid');
		valid = false;
	}

	return valid;
}

function showSuccessMessage() {
    if (validateContactForm()) {
        $("#statusMessageSuccess").show(); // Show success message
        setTimeout(function () {
            $("#statusMessageSuccess").hide(); // Hide success message after a few seconds
            document.getElementById("frmContact").reset(); // Reset the form
        }, 5000); // Adjust the time (in milliseconds) as needed
    }
}
</script>