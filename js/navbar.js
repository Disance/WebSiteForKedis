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