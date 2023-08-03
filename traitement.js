
// Code JavaScript pour ajouter dynamiquement des champs de saisie
document.addEventListener("DOMContentLoaded", function() {
    let form = document.getElementById("dynamicForm");
    let dynamicInputs = document.getElementById("dynamicInputs");
    let addInputButton = document.getElementById("addInputButton");
    let addInputCondition = document.getElementById("addInputCondition");
    let inputCounter = 1;



  
    addButton();
    function addButton(){
        addInputButton.addEventListener("click", function() {
        // Crée un nouvel élément <input> avec un compteur pour le nom du champ
        let newBr = document.createElement("br");
        let newInput = document.createElement("input");
        newInput.type = "text";
        newInput.name = "champ[]";
        newInput.placeholder = "Champ " + (++inputCounter);

        

       
        let newSelect = document.createElement("select");
        newSelect.name = "ajout";
        newSelect.innerHTML = "<option value='INT'>int</option> <option value='DATE'>date</option> <option value='VARCHAR(45)'>Varchar</option>";




          // Crée un bouton de suppression pour ce champ
          let deleteButton = document.createElement("button");
        deleteButton.type = "button";
        deleteButton.textContent = "Supprimer";
        deleteButton.addEventListener("click", function() {
            // Supprime le champ et le bouton de suppression associé
            dynamicInputs.removeChild(newInput);
            dynamicInputs.removeChild(deleteButton);
        });
        // Ajoute le nouvel élément <input> au div des champs de saisie
        dynamicInputs.appendChild(newBr); 
        dynamicInputs.appendChild(newInput);
        dynamicInputs.appendChild(deleteButton);
        dynamicInputs.appendChild(newSelect);


   
    });

}



   

    



    addInputCondition.addEventListener("click", function() {
        // Crée un nouvel élément <input> avec un compteur pour le nom du champ
        let newInput = document.createElement("input");
        newInput.type = "text";
        newInput.name = "condition[]";
        newInput.placeholder = "Condition " + (++inputCounter);
        

        let deleteButton = document.createElement("button");
        deleteButton.type = "button";
        deleteButton.textContent = "Supprimer";
        deleteButton.addEventListener("click", function() {
            // Supprime le champ et le bouton de suppression associé
            dynamicInputs.removeChild(newInput);
            dynamicInputs.removeChild(deleteButton);
        });


        // Ajoute le nouvel élément <input> au div des champs de saisie
        dynamicInputs.appendChild(newInput);
        dynamicInputs.appendChild(deleteButton);
    });



    
});