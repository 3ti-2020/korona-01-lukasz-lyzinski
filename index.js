const zad={
    btn1: document.querySelector(".btn1"),
    btn2: document.querySelector(".btn2"),
    btn3: document.querySelector(".btn3"),
    wynik: document.querySelector(".wynik"),
    input: document.querySelector(".input"),
    obrazek1: document.querySelector("#obrazek1"),
    obrazek2: document.querySelector("#obrazek2"),
    monka: document.querySelector(".monka"),

    btn11: function(){
        this.obrazek1.style.animation= "obrazek_animacja 1s infinite";
        this.obrazek2.style.animation= "obrazek_animacja1 1s infinite";
    },

    btn22: function(){
        this.obrazek1.style.animation= "Paused";
        this.obrazek2.style.animation= "Paused";
    },


    btn33: function(){
       if (this.input.value === "")
       {this.wynik.innerHTML= "0";}
       else{
        this.wynik.innerHTML= (Math.random()*100).toFixed(); 
       }
    },

    btn44: function(){
        if (this.wynik.innerHTML >80)
        {this.monka.style.display="block";}
        else{
         this.monka.style.display="none"; 
        }
     },
    
    int33: function(){
        this.btn1.addEventListener('click',this.btn11.bind(zad));
        this.btn2.addEventListener('click',this.btn22.bind(zad));
        this.btn3.addEventListener('click',this.btn33.bind(zad));
        this.btn3.addEventListener('click',this.btn44.bind(zad));
    },

}

zad.int33();
