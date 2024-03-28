//Recuperation des elements
let form = document.querySelector("form");
let password = document.querySelector("#password");
let confirmpassword = document.querySelector("#confirmpassword");

console.log(form);
console.log(password);
console.log(confirmpassword);


    form.addEventListener("submit", (e) => {
        if(password.value !='' && confirmpassword !='' && password.value === confirmpassword.value){
            alert("Mot de passe bien changer");
        }

        else {
            e.preventDefault();
            alert("Veuiller remplir le formulaire et les mot de passe doit être conforme");


        }


    })