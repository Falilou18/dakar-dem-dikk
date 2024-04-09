//Recuperation des elements
let form = document.querySelector("form");
let prenom = document.querySelector("#prenom");
let nom = document.querySelector("#nom");
let age = document.querySelector("#age");

console.log(form);
console.log(prenom);
console.log(nom);
console.log(age);


    form.addEventListener("submit", (e) => {
        if(prenom.value != '' && nom.value !='' && age.value !=''){
            // alert("Formulaire bien Envoyer");
        }

        else {
            e.preventDefault();
            alert("Veuiller remplir tous les champs du formulaire !");


        }


    })