
let deconnection = document.querySelector(".deconnexion");


deconnection.addEventListener("submit", (e) => {


    
    if(deconnection == 'true'){
        window.confirm("Voulez vous vraiment quitter !");

    }
    else if (deconnection == 'false') {
        e.preventDefault();
    }
})


