var changeNewsOrder = "desc";
var result = 6;
showNouvelle(result)
document.getElementById("btnVoirPlus").addEventListener('click',function(){
    result += 6; 
    showNouvelle(result)
});

function showNouvelle(result) {
    fetch(`http://www.clownsansfrontierenyancats.com/wp/wp-json/wp/v2/nouvelle?orderby=date&order=${changeNewsOrder}&per_page=100`)
    .then(response => response.json())
    .then(data => {
        console.log("result = " + result + " Nouvelles")
        var limit = result;
        if (limit > data.length) {
            limit = data.length;
        }
        var html = '';
        for (let index = 0; index < limit; index++) {
            console.log(data[index]);
            html +=`
            <div class="colNouvelle" id="carteNouvelle">
                <a href=" ${data[index].link} " style="text-decoration:none; color:white;">
                    <div class="cardNouvelle">
                        <div class="card-headerNouvelle">
                            <img src="${data[index].acf.image}" class="card-img-topNouvelle" alt="image">
                        </div>
                        <div class="card-bodyNouvelle">
                            <div class="alignment">
                                <p class="cardNameArticle" style="font-family:Signika Negative;"> ${data[index].title.rendered} </p>
                                <p class="cardAuteur"> ${data[index].acf.auteur} </p>
                                <p class="card-titleNouvelle"> ${data[index].date} </p>
                            </div>
                            <div class="card-textNouvelle">
                                ${data[index].content.rendered}...
                            </div>
                        </div>
                    </div>
                </a>
            </div>`
        }
        var cartes = document.querySelector('.cartes');
        cartes.innerHTML = html;

        /*console.log(data.length)*/
        if (result > data.length) {
            var btnDead = document.querySelector('.btnModification');
            btnDead.innerHTML = '';
        }
    });
}

document.getElementById("Selector").onchange = changeListener;
function changeListener(){
    var value = this.value
    console.log(value)

    if (value == "plusRecente"){
        console.log("plusRecente")
        fetch("http://www.clownsansfrontierenyancats.com/wp/wp-json/wp/v2/nouvelle?orderby=date&order=desc")
        .then(response => response.json())
        .then(data => {
            var html = '';
            changeNewsOrder = "desc";
            for (let index = 0; index <= 5; index++) {
                console.log(data[index]);
                html +=`
                <div class="colNouvelle" id="carteNouvelle">
                    <a href=" ${data[index].link} " style="text-decoration:none; color:white;">
                        <div class="cardNouvelle">
                            <div class="card-headerNouvelle">
                                <img src="${data[index].acf.image}" class="card-img-topNouvelle" alt="image">
                            </div>
                            <div class="card-bodyNouvelle">
                                <div class="alignment">
                                    <p class="cardNameArticle"  style="font-family:Signika Negative;"> ${data[index].title.rendered} </p>
                                    <p class="cardAuteur"> ${data[index].acf.auteur} </p>
                                    <p class="card-titleNouvelle"> ${data[index].date} </p>
                                </div>
                                <div class="card-textNouvelle">
                                    ${data[index].content.rendered}...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>`
            }
            console.log(html)
            var cartes = document.querySelector('.cartes');
            cartes.innerHTML = html;
        });
    }else if (value == "plusAncienne"){
        console.log("plusAncienne")
        fetch("http://www.clownsansfrontierenyancats.com/wp/wp-json/wp/v2/nouvelle?orderby=date&order=asc")
        .then(response => response.json())
        .then(data => {
            var html = '';
            changeNewsOrder = "asc";
            for (let index = 0; index <= 5; index++) {
                html +=`
                <div class="colNouvelle" id="carteNouvelle">
                    <a href=" ${data[index].link} " style="text-decoration:none; color:white;">
                        <div class="cardNouvelle">
                            <div class="card-headerNouvelle">
                                <img src="${data[index].acf.image}" class="card-img-topNouvelle" alt="image">
                            </div>
                            <div class="card-bodyNouvelle">
                                <div class="alignment">
                                    <p class="cardNameArticle" style="font-family:Signika Negative;"> ${data[index].title.rendered} </p>
                                    <p class="cardAuteur"> ${data[index].acf.auteur} </p>
                                    <p class="card-titleNouvelle"> ${data[index].date} </p>
                                </div>
                                <div class="card-textNouvelle">
                                    ${data[index].content.rendered}...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>`
            }
        console.log(html)
        var cartes = document.querySelector('.cartes');
        cartes.innerHTML = html;
    });
}
}



//Couleurs selon catégories des nouvelles
    //Ne fonctionne pas pour l'instant, balise ${data[index].acf.categorie} brise tout
fetch(`http://www.clownsansfrontierenyancats.com/wp/wp-json/wp/v2/nouvelle`)
    .then(response => response.json())
    .then(data => {
        console.log(data)
        var heroNouvelle = document.querySelector('.hero__nouvelle');
        var categorie = data[index].acf.categorie;
        if (  categorie == "Retour" ) {
            heroNouvelle.classList.add('.couleurRetour');
        }else if (  categorie == "Événement" ) {
            heroNouvelle.classList.add('.couleurEvenement');
        }else if (  categorie == "Haïti" ) {
            heroNouvelle.classList.add('.couleurHaiti');
        }
    });