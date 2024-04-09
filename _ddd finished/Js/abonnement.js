//Recuperation des elements
let form = document.querySelector("form");
let prenom = document.querySelector("#prenom");
let nom = document.querySelector("#nom");
let email = document.querySelector("#email");
let tel = document.querySelector("#tel");
let bus = document.querySelector("#bus");


console.log(form, prenom, nom, email, tel,bus);




    form.addEventListener("submit", (e) => {
        if(prenom.value != '' && nom.value !='' && email.value !='' && tel.value !='' && bus.value !=''){
            alert("Merci de commander une carte");

        }

        else {
            e.preventDefault();
            alert("Veuiller remplir tout le formulaire ");


        }


    })