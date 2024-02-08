document.getElementById("sortings").addEventListener('change' , () =>{
    document.getElementById('button-sort').classList.add('active')
})

document.getElementById('formReviews').addEventListener('submit' , function(event){
    let name = document.getElementById('name')
    let valueName = name.value
    let text = document.getElementById('text')
    let valueText = text.value
    let error = document.getElementById('error')
    if(valueName == ""){
        error.classList.add('active')
        error.innerHTML = "Введите имя!"
        event.preventDefault()
    }else if (valueName.length > 10){
        error.classList.add('active')
        error.innerHTML = "Слишком длинное имя!"
        event.preventDefault()
    }else if(valueText == ""){
        error.classList.add('active')
        error.innerHTML = "Введите отзыв!"
        event.preventDefault()
    }else if(valueText.length > 200){
        error.classList.add('active')
        error.innerHTML = "В отзыве не может быть больше 200 символов!"
        event.preventDefault()
    }else{
        
    }
    

})