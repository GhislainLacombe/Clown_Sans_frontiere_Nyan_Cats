import './nouvelles.scss'

function showNouvelle(){
    var cartes = document.querySelectorAll('colNouvelle');
    if (this == cartes[7]){
        this.classList.add('flex');
    }
    if (this == cartes[8]){
        this.classList.add('flex');
    }
    if (this == cartes[9]){
        this.classList.add('flex');
    }
    if (this == cartes[10]){
        this.classList.add('flex');
    }
    if (this == cartes[11]){
        this.classList.add('flex');
    }
    if (this == cartes[12]){
        this.classList.add('flex');
    }
    const btn = document.querySelector('.btnModification');

    btn.innerHTML = '<button class="voirPlusBtn" onclick="showNouvelle2()">Voir plus de nouvelles</button>';
}

function showNouvelle2(){
    var cartes = document.querySelectorAll('colNouvelle');
    if (this == cartes[13]){
        this.classList.add('flex');
    }
    const btn = document.querySelector('.btnModification');

    btn.innerHTML = '';
}

function recenteNouvelle(){


    
}

function ancienneNouvelle(){


    
}
