
let filliereSelect = document.getElementById("filliere")
let errorsContainer = document.getElementById("error")
let form = document.getElementById("form")
const MENTIONS = {
    EXCELLENT : "EXCELLENT" ,
    TRES_BIEN : "TRÈS BIEN" ,
    BIEN : "BIEN",
    PASSABLE : "PASSABLE",
    ECHEC : "ECHEC"
}


function validateFields(etudiant){
    const errorMap = new Map(); //on stock les erreurs ici
    const regexMap = {
        nom: /^[a-zA-Z]{3,}$/,
        prenom: /^[a-zA-Z]{3,}$/,
        code: /^[a-zA-Z0-9]{3,}$/,
        filliere: /^[a-zA-Z]{3,}$/,
        note: /^[0-9]{1,2}$/
    }
    for (const key in etudiant) {
        if(!regexMap[key]) continue;
        else if(!regexMap[key].test(etudiant[key]))
            errorMap.set(key, `${key} is invalid`);
    }
    return errorMap.size === 0 ? {etudiant , valid : true} : errorMap;
}
function getMention(note){
    if(note >= 16) return MENTIONS.EXCELLENT;
    if(note >= 14) return MENTIONS.TRES_BIEN;
    if(note >= 12) return MENTIONS.BIEN;
    if(note >= 10) return MENTIONS.PASSABLE;
    return MENTIONS.ECHEC;
    
}
function showErrors(errors){
    for(let error of errors.values()){
        const span = document.createElement("span");
        span.className = "error-span";
        span.textContent = error;
        errorsContainer.appendChild(span);
    }
}
function clearErrors(){
    errorsContainer.innerHTML = "";
}
function validateForm(){
    clearErrors();
    const {nom , prenom, code, filliere, note} = form;
    let etudiant = {
        nom: nom.value.trim(),
        prenom: prenom.value.trim(),
        code: code.value.trim(),
        filliere: filliere.value,
        note: note.value.trim(),
    }
    etudiant.mention = getMention(etudiant.note);
    const etudiantOptional = validateFields(etudiant);
    if(!etudiantOptional.valid) showErrors(etudiantOptional);
    return etudiantOptional;
}
form.querySelectorAll("input").forEach(input => input.addEventListener("keydown" , validateForm))
form.addEventListener("submit", (e) => {
    e.preventDefault();
    const etudiantOptional = validateForm()
    if(etudiantOptional.valid){
        //todo: send to php backend
        alert("etudiant ajouté")
        console.log(etudiantOptional.etudiant);
    }
});