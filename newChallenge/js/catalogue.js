function afficher(){
    for(i = 0 ; i <document.getElementsByClassName('stock').length ; i++){
    document.getElementsByClassName("stock")[i].style.display = document.getElementsByClassName('stock')[i].style.display == 'block' ? "none" : "block";
    }
}


function diminuer(i) {
    var n = document.getElementById(i);
    if (n.value > 0) {
        n.value = parseInt(n.value) - 1;
    }
}

function augmenter(i) {
    var stock = document.getElementById("stock2"+i);
    var n = document.getElementById(i);
    if (n.value < stock.innerHTML) {
        n.value = parseInt(n.value) + 1;
    }
}


function addpanier(categorie,id,i){


    var n = document.getElementById(i);
    var stock = document.getElementById("stock2"+i);
    stock.innerHTML -= n.value;



    var qte = document.getElementById(i).value;
    var url = "addpanier.php?cat="+categorie+"&value="+qte+"&id="+id;

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){

        if(this.readyState==4 && this.status==200){
            demo.innerHTML = this.responseText;             /*il y a quelques choses à faire ici*/
        }  
    }


        xhr.open("GET", url , true);
        xhr.send();

        n.value = 0;

    /*location.href = url;*/
}

