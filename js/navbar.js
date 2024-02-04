document.onkeydown = function(event){
    if(event.code == "AltLeft"){
        document.onkeyup = function(event){
            if(event.code == "Numpad4"){
                document.onkeyup = function(event){
                    if(event.code == "Numpad5"){
                        document.onkeyup = function(event){
                            if(event.code == "Numpad5"){
                                document.onkeyup = function(event){
                                    if(event.code == "Numpad6"){
                                        document.getElementById('hidden').classList.add('active');
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
var flag = 1;
function burgerClick(){
    document.querySelector(".burger-menu").addEventListener('click', function(){
    if (flag == 1){
        this.classList.toggle('active');
    document.getElementById('menu').classList.add('open');
    flag = 2;
    }
    else if (flag == 2){
    this.classList.toggle('active');
    document.getElementById('menu').classList.remove('open');
    flag = 1;
    }})
}
