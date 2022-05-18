const formulaire = document.getElementById('form');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const email = document.getElementById('email');
const dateDeNaissance = document.getElementById('dateDeNaissance');
const ville = document.getElementById('ville');
const codePostal = document.getElementById("codePostal");
const adresse = document.getElementById("adresse");

const telephone = document.getElementById("telephone");
const mdp1 = document.getElementById("mdp1");
const mdp2 = document.getElementById("mdp2");


formulaire.addEventListener('submit', e => {

	e.preventDefault();
	checkInputs();
});


function checkInputs() {


	
	// trim to remove the whitespaces
	const nomValue = nom.value.trim();
	const prenomValue = prenom.value.trim();
	const emailValue = email.value.trim();

	const dateDeNaissanceValue = dateDeNaissance.value.trim();

	const villeValue = ville.value.trim();

	const codePostalValue = codePostal.value.trim();


    const adresseValue = adresse.value.trim();


    const telephoneValue = telephone.value.trim();

	const mdp1Value = mdp1.value.trim();

	const mdp2Value = mdp2.value.trim();


	var i = 0;


	if (nomValue === '') {

		setErrorFor(nom, 'Le nom ne peut pas être vide');

		i++;

	} else {
		setSuccessFor(nom);
	}


	if (prenomValue === '') {
		setErrorFor(prenom, 'Le prenom ne peut pas être vide');
		i++;

	} else {
		setSuccessFor(prenom);
	}


	if (emailValue === '') {
		setErrorFor(email, 'Email pas correct');
		i++;

	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Email pas correct');
		i++;

	} else {
		setSuccessFor(email);
	}


	if (dateDeNaissanceValue === '') {
		setErrorFor(dateDeNaissance, "Votre message n'a pas de sujet");
		i++;

	} else {
		setSuccessFor(dateDeNaissance);
	}

	if (villeValue === '') {
		setErrorFor(ville, 'Le contenu est vide');
		i++;

	} else {
		setSuccessFor(ville);
	}


	if (adresseValue === '') {
		setErrorFor(adresse, 'Veuillez entrer votre date de naissance');
		i++;

	} else {
		setSuccessFor(adresse);
	}



    if (codePostalValue === '') {
		setErrorFor(codePostal, 'Veuillez entrer votre date de naissance');
		i++;

	} else {
		setSuccessFor(codePostal);
	}


    if (telephoneValue === '') {
		setErrorFor(telephone, 'Veuillez ententrer votre date de naissance');
		i++;

	} else {
		setSuccessFor(telephone);
	}


    if (mdp1Value === '') {
		setErrorFor(mdp1, 'Veuillez ententrer votre date de naissance');
		i++;

	} else {
		setSuccessFor(mdp1);
	}

    if (mdp2Value === '') {
		setErrorFor(mdp2, 'Veuillez ententrer votre date de naissance');
		i++;

	} else {
		setSuccessFor(mdp2);
	}


	if (i==0){
		formulaire.submit();
	}

}



function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}


function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}



function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
