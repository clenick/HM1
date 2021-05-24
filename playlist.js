document.querySelector("#playlist_form").addEventListener("submit",savePlaylist);
function savePlaylist(event){
    event.preventDefault();
    fetch("takePlaylist.php").then(onResponse).then(playlistName);
    event.currentTarget.removeEventListener;
}
function playlistName(json){
    const title_input= document.querySelector("#playlist_title");
    for(let i=0; i<json.length; i++){ 
    
        if(json[i].Nome === title_input.value){
            alert("Hai già una playlist con questo nome!");
        }
        else{
            fetch("savePlaylist.php?title="+title_input.value);
        }
    }
    
}
fetch("takePlaylist.php").then(onResponse).then(onJson);
function onResponse(response)
{   
    return response.json();
}
function onJson(json)
{   const sec= document.querySelector("#playlist_section");
    if(json.length ==0){
        const span = document.createElement("span");
        span.textContent= "Non hai ancora creato nessuna playlist!";
        sec.appendChild(span);
    }
    else{
        const section_h1 = document.createElement("h1");
        section_h1.textContent = "Le tue playlist:";
        sec.appendChild(section_h1);
        const div = document.createElement("div");
        div.id = "playlist_list";
        for(let i=0;i<json.length;i++)
        {   const box = document.createElement("div");
            box.classList.add("box_playlist");
            const title = document.createElement("h2");
            title.textContent= json[i].Nome;
            title.classList.add("title_playlist");
            const n_track = document.createElement("span");
            n_track.textContent= "Numero di canzoni: "+json[i].Num_canzoni;
            const id_playlist= json[i].Id_numerico;
            const button = document.createElement("input");
            button.type ="button";
            button.value="Mostra canzoni";
            button.classList.add("button_box");
            button.addEventListener("click", function(){
                fetch("takeTrack.php?playlist="+id_playlist).then(onResponse).then(TrackJson);
                viewTrack();
            });
            const button_delete = document.createElement("input");
            button_delete.type ="button";
            button_delete.value="Elimina playlist";
            button_delete.classList.add("button_box");
            button_delete.addEventListener("click", function(){
                fetch("deleteTrackbyPlaylist.php?playlist="+id_playlist);
                fetch("deletePlaylist.php?playlist="+id_playlist);
            });
          
            box.appendChild(title);
            box.appendChild(n_track);
            box.appendChild(button);
            box.appendChild(button_delete);
            div.appendChild(box);
        }
        sec.appendChild(div);
    }
}
function viewTrack(){
    const select_track =  document.querySelector("#select_track");
    select_track.classList.remove("hidden");
    const modale = document.createElement("div");
    modale.id="modale_track";
    select_track.style.top= window.pageYOffset + "px";
    select_track.appendChild(modale);
    document.body.classList.add("no-scroll");
}
function hideTrack(event){ 
    const modale = event.currentTarget.parentNode;
    modale.innerHTML="";
    const select_track = modale.parentNode;
    select_track.classList.add("hidden");
    document.body.classList.remove("no-scroll");
}
function TrackJson(json){
    const modale =  document.querySelector("#modale_track");
    const modale_h1 = document.createElement("h1");
    modale_h1.textContent = "Seleziona una canzone della tua playlist per ascoltarla: ";
    const br = document.createElement("br");
    const select = document.createElement("select");
    select.name = "select";
    select.id = "select"
    for(let i=0; i<json.length;i++)
    {   
        let option = document.createElement("option");
        option.value = json[i].codice;
        option.text = decodeURI(json[i].titolo);
        select.appendChild(option);
    } 
    const div_track = document.createElement("div");
    const button_search = document.createElement("input");
    button_search.type = "button";
    button_search.value = "Ascolta";
    button_search.classList.add("button");
    button_search.addEventListener("click",function(){
       div_track.innerHTML= "";
       for(let i=0; i<json.length;i++){
           if(json[i].codice === select.value){
               const title = document.createElement("h2");
               title.textContent = json[i].titolo;
               const link = document.createElement("a")
               link.href = json[i].url;
               link.target = "_blank";
               const button_delete = document.createElement("input");
               button_delete.type= "button";
               button_delete.value = "Rimuovi brano";
               button_delete.classList.add("button");
               button_delete.addEventListener("click",function(){
                    fetch("deleteTrack.php?codice="+json[i].codice);
               });
               link.appendChild(title);
               div_track.appendChild(link);
               div_track.appendChild(button_delete);
               div_track.classList.add("box_playlist");
           }
       }
    });
    const button_exit = document.createElement("input");
    button_exit.type="button";
    button_exit.value="Torna indietro";
    button_exit.classList.add("button");
    button_exit.addEventListener("click",hideTrack);
    modale.appendChild(modale_h1);
    modale.appendChild(br);
    modale.appendChild(select);
    modale.appendChild(button_search);
    modale.appendChild(div_track);
    modale.appendChild(button_exit);
}

