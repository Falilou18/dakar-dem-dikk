//Recuperation des elements
let form = document.querySelector("form");
let email = document.querySelector("#email");
let password = document.querySelector("#password");


console.log(form);
console.log(email);
console.log(password);



    form.addEventListener("submit", (e) => {
        if(email.value != '' && password.value !=''){
            alert("Merci de nous Contacter");

        }

        else {
            e.preventDefault();
            alert("Veuiller remplir le formulaire de contact en donnant votre prenom, email et commentaire");


        }


    })