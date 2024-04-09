const cible = document.getElementById('cible');
// let mytableau1 = ['Developpeur','Graphiste','Cryptologue'];e
let mytableau = ["Bienvenue sur Dakar Dem Dikk ","Le meilleur dans le monde ! ","du Transport et de Logistique ", "Elle vous fournie une service de qualitè"," et surtout de prospèritè"];
let wordIndex = 0;
let letterIndex = 0;

const samayLettre = () => {
    const letter = document.createElement("span");
    cible.appendChild(letter);

    letter.textContent = mytableau[wordIndex][letterIndex];

    setTimeout(() => {
        letter.remove();
        
    }, 2800);
};


const boucler = () => {
    setTimeout(() => {
        if (wordIndex >= mytableau.length) {
            wordIndex = 0;
            letterIndex = 0;
            boucler();
            
        }
          else if (letterIndex < mytableau[wordIndex].length) {
            samayLettre();
            letterIndex++;
            boucler();
            
        }

        else {
            wordIndex++;
            letterIndex = 0;
            setTimeout(() => {
                boucler();
                
            }, 2800);
        }
        
    }, 80);
};
boucler();