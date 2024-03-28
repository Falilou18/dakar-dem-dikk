//Recuperation des elements
let form = document.querySelector("form");
let email = document.querySelector("#email");
let password = document.querySelector("#password");


console.log(form);
console.log(email);
console.log(password);



    form.addEventListener("submit", (e) => {
        if(email.value != '' && password.value !=''){
            alert("Merci de se Connecter");
        }

        else {
            e.preventDefault();
            alert("Veuiller remplir le formulaire et le mot de passe doit être conforme");


        }


    })