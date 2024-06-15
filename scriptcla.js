function AnalisaInput(){
    let name = document.getElementById("nome")
    let pass = document.getElementById("data")
    let par = document.getElementById('error')

    if(name.value === '' || pass.value === ''){
        event.preventDefault()
        par.style.display = 'block'
        return false

        
    }
    else{
        par.style.display = 'none'
        return true
    }
}