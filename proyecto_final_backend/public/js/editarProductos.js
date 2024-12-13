document.getElementById('myForm').addEventListener('submit',function(event){
    let nombre = document.getElementById('name').value;
    let precio = document.getElementById('precio').value;
    let cantidad = document.getElementById('cantidad').value;
    let img = document.getElementById('imagen').value;
    let error = document.getElementById('errorInput');

    if (!nombre || !precio || !cantidad || !img ){
        event.preventDefault()
        error.style.display= 'inline';
    }else{
        error.style.display= 'none';
    }


});