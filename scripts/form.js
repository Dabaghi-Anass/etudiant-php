let filliereSelect = document.getElementById("filliere");
let errorsContainer = document.getElementById("error");
let form = document.getElementById("form");
const submitBtn = form.querySelector("button[type='submit']");
submitBtn.setAttribute("disabled", "true");
const MENTIONS = {
	EXCELLENT: "EXCELLENT",
	TRES_BIEN: "TRÈS BIEN",
	BIEN: "BIEN",
	PASSABLE: "PASSABLE",
	ECHEC: "ECHEC",
};
const regexMap = {
	nom: /^[a-zA-Z]{3,}$/,
	prenom: /^[a-zA-Z]{3,}$/,
	code: /^[a-zA-Z0-9]{3,}$/,
	filliere: /^[a-zA-Z]{3,}$/,
	note: /^[0-9]{1,2}$/,
	password: /(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/,
};
const patternFailedMessages = {
	nom: "Nom must contain only letters and at least 3 characters",
	prenom: "Prenom must contain only letters and at least 3 characters",
	code: "Code must contain only letters and numbers and at least 3 characters",
	filliere: "Filliere must contain only letters and at least 3 characters",
	note: "Note must be a positive less than 20",
	password:
		"Password must contain at least 8 characters, 1 uppercase letter, 1 lowercase letter and 1 number",
};
function validateInput(e) {
	const { value, id } = e.target;
	const span = e.target.nextElementSibling;
	if (!regexMap[id]) return;
	if (!regexMap[id]?.test(value)) {
		span.textContent = patternFailedMessages[id];
		span.className = "error-span";
	} else {
		span.textContent = "";
		span.className = "";
	}
	const etudiant = validateForm();
	if (etudiant !== null) {
		etudiant.sexe = form.querySelector("input[name='sexe']:checked").value;
		etudiant.semestres = Array.from(
			form.querySelectorAll("input.semestreCheckbox:checked")
		).map((checkbox) => checkbox.value);
		submitBtn.removeAttribute("disabled");
	} else submitBtn.setAttribute("disabled", "true");
}
function validateFields(etudiant) {
	for (const key in etudiant) {
		if (!regexMap[key]) continue;
		else if (!regexMap[key].test(etudiant[key])) return null;
	}
	return etudiant;
}
function getMention(note) {
	if (note >= 16) return MENTIONS.EXCELLENT;
	if (note >= 14) return MENTIONS.TRES_BIEN;
	if (note >= 12) return MENTIONS.BIEN;
	if (note >= 10) return MENTIONS.PASSABLE;
	return MENTIONS.ECHEC;
}
function showErrors(errors) {
	for (let error of errors.values()) {
		const span = document.createElement("span");
		span.className = "error-span";
		span.textContent = error;
		errorsContainer.appendChild(span);
	}
}

function validateForm() {
	const { nom, prenom, code, filliere, note, password } = form;
	let etudiant = {
		nom: nom.value.trim(),
		prenom: prenom.value.trim(),
		code: code.value.trim(),
		filliere: filliere.value,
		note: note.value.trim(),
		password: password.value.trim(),
	};
	etudiant.mention = getMention(etudiant.note);
	return validateFields(etudiant);
}
form.querySelectorAll(
	"input:not(input[type='checkbox'],input[type='radio']) , textarea"
).forEach((input) => input.addEventListener("input", validateInput));
form.addEventListener("submit", (e) => {
	// e.preventDefault();
	const etudiant = validateForm();
});

// async function addEtudiant(formData) {
// 	const options = {
// 		method: "POST",
// 		body: formData,
// 	};
// 	const response = await fetch("./add.php", options);
// 	console.log(response.headers.get("Location"));
// }
