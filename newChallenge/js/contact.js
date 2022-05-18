const formulaire = document.getElementById('formulaire');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const email = document.getElementById('email');
const sujet = document.getElementById('sujet');
const birthday = document.getElementById('birthday');
const contenu = document.getElementById('contenu');
const selectElmt = document.getElementById("metier");

const genre1 = document.getElementById("genre1");
const genre2 = document.getElementById("genre2");
const genre = document.getElementById("genre");



formulaire.addEventListener('submit', e => {
	e.preventDefault();
	checkInputs();
});


function checkInputs() {
	
	// trim to remove the whitespaces
	const nomValue = nom.value.trim();
	const prenomValue = prenom.value.trim();
	const emailValue = email.value.trim();
	const sujetValue = sujet.value.trim();
	const birthdayValue = birthday.value.trim();
	const contenuValue = contenu.value.trim();

	const valeurselectionnee = selectElmt.options[selectElmt.selectedIndex].value.trim();
	const textselectionne = selectElmt.options[selectElmt.selectedIndex].text.trim();



	var check = 1;

	if(genre1.checked) {
		setSuccessFor1(genre); 
		check = 0;


	}
		else{
			if(genre2.checked) {
				setSuccessFor1(genre);
				check = 0;

			}	
	}

	if (check == 1){
		setErrorFor1(genre,"Veuillez selectionner un genre");

	}


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


	if (sujetValue === '') {
		setErrorFor(sujet, "Votre message n'a pas de sujet");
		i++;

	} else {
		setSuccessFor(sujet);
	}

	if (contenuValue === '') {
		setErrorFor(contenu, 'Le contenu est vide');
		i++;

	} else {
		setSuccessFor(contenu);
	}

	if (textselectionne === '--Choisissez une option--') {
		setErrorFor(metier, 'Veuillez selectionner une profession');
		i++;

	} else {
		setSuccessFor(metier);
	}

	if (birthdayValue === '') {
		setErrorFor(birthday, 'Veuillez entrer votre date de naissance');
		i++;

	} else {
		setSuccessFor(birthday);
	}

	i += check;

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

function setErrorFor1(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control1 error';
	small.innerText = message;
}


function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function setSuccessFor1(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control1 success';
}


function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}