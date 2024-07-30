function evitar_dados_reload(){
    if(window.history.replaceState) {
        window.history.replaceState( null, null, window.location.href );
    }

    function update(){
        window.location.reload();
    }
}
function validarDadosForm(){
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    
    if(username === "" || password === ""){
        alert("favor preencher todos os campos!");
        return false;
    }
    

    return true;
}