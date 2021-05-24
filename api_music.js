document.querySelector("#music_form").addEventListener("submit", search);
function search(event)
{
    event.preventDefault();  
    const form = document.querySelector("#music_form");
    const input= form.track.value;
    fetch("api_music.php?track="+encodeURIComponent(input)).then(onResponse).then(onJson);
}
function onResponse(response)
{  
    return response.json();
}

function onJson(json)
{
    const music_section = document.querySelector("#music_section");
    music_section.innerHTML = '';
    let num_results = json.length; 
    if( num_results===0){
        const errore = document.createElement('p');
        errore.textContent= "Nessun risultato.";
        music_section.appendChild(errore);
    } 
    else{
        if(num_results>4){
            num_results = 4;
        }
        const music_album = document.createElement('div');
        music_album.id = "music_album";
        for(let i = 1; i<=num_results; i++){
            const title = document.createElement('h2');
            const link  = document.createElement('a');
            const artist = document.createElement('p');
            const add_playlist= document.createElement('input');
            add_playlist.type= "button";
            add_playlist.value ="Aggiungi alla tua playlist";
            add_playlist.classList.add("button");
            add_playlist.addEventListener('click',addToPlaylist);
            const music_box = document.createElement('div');
            music_box.classList = "music_box";

            title.textContent = json[i].name;
            artist.textContent = json[i].artist;
            link.href = json[i].url;
            link.target = "_blank";
            title.classList.add("title_m");
            artist.classList.add("text");

            link.appendChild(title);
            music_box.appendChild(link);
            music_box.appendChild(artist);
            music_box.appendChild(add_playlist);
            music_album.appendChild(music_box);
        }
        music_section.appendChild(music_album);
    }
}
function addToPlaylist(event){
    
    const button = event.currentTarget;
    const title_playlist = button.parentNode.firstChild.firstChild;
    title_playlist.classList.add("title_selected");
    const artist_playlist = button.parentNode.firstChild.nextSibling;
    artist_playlist.classList.add("artist_selected");
    const link_playlist = button.parentNode.firstChild;
    link_playlist.classList.add("link_selected");
    choosePlaylist();
    viewPlaylist();
}
function choosePlaylist(){
    fetch("takePlaylist.php").then(onResponse).then(playlistJson);
}
function viewPlaylist(){
    const select_playlist =  document.querySelector("#select_playlist");
    select_playlist.classList.remove("hidden");
    const modale = document.createElement("div");
    modale.id="modale";
    select_playlist.style.top= window.pageYOffset + "px";
    select_playlist.appendChild(modale);
    document.body.classList.add("no-scroll");
}
function playlistJson(json){
    const title = document.createElement("h1");
    title.textContent= "Seleziona la playlist a cui vuoi aggiungerla: ";
    const br = document.createElement("br");
    const select = document.createElement("select");
    select.name = "select";
    select.id = "select"
    for(let i=0; i<json.length;i++)
    {   
        let option = document.createElement("option");
        option.value = json[i].Id_numerico;
        option.text = json[i].Nome;
        select.appendChild(option); 
    } 
    const button = document.createElement("input");
    button.type="button";
    button.value="Aggiungi";
    button.classList.add("button");
    button.addEventListener("click",saveTrack);
    const button_exit = document.createElement("input");
    button_exit.type="button";
    button_exit.value="Torna indietro";
    button_exit.classList.add("button");
    button_exit.addEventListener("click",hidePlaylist);
    const modale = document.querySelector("#modale");
    modale.appendChild(title);
    modale.appendChild(br);
    modale.appendChild(select);
    modale.appendChild(button);
    modale.appendChild(button_exit);
}
function hidePlaylist(event){ 
    const modale = event.currentTarget.parentNode;
    modale.innerHTML="";
    const select_playlist = modale.parentNode;
    select_playlist.classList.add("hidden");
    document.body.classList.remove("no-scroll");
}
function saveTrack(){
    const title = document.querySelector(".title_selected");
    const artist = document.querySelector(".artist_selected");
    const link = document.querySelector(".link_selected");
    const selected = document.querySelector("#select");
    const playlist_selected=selected.value;
    fetch("saveTrack.php?title="+title.textContent+"&link="+link.href+"&artist="+artist.textContent+"&playlist="+playlist_selected);
    title.classList.remove("title_selected");
    artist.classList.remove("artist_selected");
    link.classList.remove("link_selected");
}






