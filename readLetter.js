fetch("takeYearLetter.php").then(onResponse).then(yearJson);

function onResponse(response){
    return response.json();
}
function yearJson(json){
    const select = document.querySelector("#past_letter");
    const button = document.querySelector("#drop_button");
    for(let i=0; i<json.length;i++)
    {   
        let option = document.createElement("option");
        option.text = json[i].Anno;
        option.value = json[i].Codice;
        select.appendChild(option);
    }
    button.addEventListener("click",function(){
        event.preventDefault();
        console.log(select.value);
        fetch("takePastLetter.php?letter="+select.value).then(onResponse).then(LetterJson);
        fetch("takeRequest.php?letter="+select.value).then(onResponse).then(ToysJson);
    });
}
function LetterJson(json){
    const div = document.querySelector(".div_letter");
    div.innerHTML="";
    const image = document.createElement("img");
    image.src = json[0].Immagine;
    const text = document.createElement("span");
    text.textContent = "Il tuo messaggio per Babbo Natale: ";
    const br = document.createElement("br");
    const message = document.createElement("span");
    message.textContent = json[0].Testo;

    div.appendChild(text);
    div.appendChild(br);
    div.appendChild(message);
    div.appendChild(image);
    
}
function ToysJson(json){
    const div = document.querySelector(".div_letter");
    const text = document.createElement("span");
    text.textContent = "I tuoi giocattoli: ";
    const br = document.createElement("br");
    div.appendChild(br);
    div.appendChild(text);
    
    for(let i=0; i<json.length;i++){
        const name  = document.createElement("span");
        const br = document.createElement("br");
        name.textContent=json[i].Nome;
        const immagine = document.createElement("img");
        immagine.src= json[i].Immagine;
        div.appendChild(br);
        div.appendChild(name);
        div.appendChild(immagine);
    }
}