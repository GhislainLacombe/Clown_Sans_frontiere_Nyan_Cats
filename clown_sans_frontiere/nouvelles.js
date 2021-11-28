
document.getElementById("1Nouvelle").classList.add("firstElementNouvelle");
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

document.getElementById("Selector").onchange = changeListener;
function changeListener(){
    var value = this.value


    if (value == "plusRecente"){
        
        document.getElementById("1Nouvelle").style.order = "1";
        document.getElementById("2Nouvelle").style.order = "2";
        document.getElementById("3Nouvelle").style.order = "3";
        document.getElementById("4Nouvelle").style.order = "4";
        document.getElementById("5Nouvelle").style.order = "5";
        document.getElementById("6Nouvelle").style.order = "6";
        document.getElementById("7Nouvelle").style.order = "7";
        document.getElementById("8Nouvelle").style.order = "8";
        document.getElementById("9Nouvelle").style.order = "9";
        document.getElementById("10Nouvelle").style.order = "10";
        document.getElementById("11Nouvelle").style.order = "11";
        document.getElementById("12Nouvelle").style.order = "12";
        document.getElementById("13Nouvelle").style.order = "13";
        document.getElementById("1Nouvelle").classList.add("firstElementNouvelle");
        document.getElementById("13Nouvelle").classList.remove("firstElementNouvelle");

    }else if (value == "plusAncienne"){
        
        document.getElementById("1Nouvelle").style.order = "13";
        document.getElementById("2Nouvelle").style.order = "12";
        document.getElementById("3Nouvelle").style.order = "11";
        document.getElementById("4Nouvelle").style.order = "10";
        document.getElementById("5Nouvelle").style.order = "9";
        document.getElementById("6Nouvelle").style.order = "8";
        document.getElementById("7Nouvelle").style.order = "7";
        document.getElementById("8Nouvelle").style.order = "6";
        document.getElementById("9Nouvelle").style.order = "5";
        document.getElementById("10Nouvelle").style.order = "4";
        document.getElementById("11Nouvelle").style.order = "3";
        document.getElementById("12Nouvelle").style.order = "2";
        document.getElementById("13Nouvelle").style.order = "1";
        document.getElementById("1Nouvelle").classList.remove("firstElementNouvelle");
        document.getElementById("13Nouvelle").classList.add("firstElementNouvelle");

    }
}
function showNouvelle2(){
    var cartes = document.querySelectorAll('colNouvelle');
    if (this == cartes[13]){
        this.classList.add('flex');
    }
    const btn = document.querySelector('.btnModification');

    btn.innerHTML = '';
}

