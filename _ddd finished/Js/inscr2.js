//Recuperation des elements
let form = document.querySelector("form");
let email = document.querySelector("#email");
let password = document.querySelector("#password");
let confirmpassword = document.querySelector("#confirmpassword");

console.log(form);
console.log(email);
console.log(password);
console.log(confirmpassword);


    form.addEventListener("submit", (e) => {
    if(email.value != '' && password.value !='' && confirmpassword.value !='' 
               && password.value === confirmpassword.value){
                
            alert("Merci de crèe un compte");
        }

    else {
            e.preventDefault();
            alert("Veuiller remplir le formulaire et les mots de passe doit être conforme");


        }


    });