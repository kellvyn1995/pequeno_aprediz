const form = document.getElementById('form')
const userUsuario = document.getElementById('userUsuario')
const senhaUsuario = document.getElementById('senhaUsuario')

form.addEventListener('submit',(e) =>{
   //e.preventDefault() //tira o conportamento padrão do navegador
    checkInputs() //função
})

function checkInputs() {
    const userUsuarioValue = userUsuario.value.trim() // o trim vai retira os espaços vazios
    const senhaUsuarioValue = senhaUsuario.value.trim() // o trim vai retira os espaços vazios

    if (userUsuarioValue === '') {
        //adicionar a classe error
        errorValidation(userUsuario,'Preencha esse campo!')
    } else {
        //adicionar a classe sucesso
        successValidation(userUsuario)

    }
    if(senhaUsuarioValue === ''){
        errorValidation(senhaUsuario,'Preencha esse campo!')
    }else{
        if (senhaUsuarioValue > 8) {
            //adicionar a classe sucesso
            successValidation(senhaUsuario)
            //window.location.href = "../controller/login.php";
            
        } else {
            //adicionar a classe error
            errorValidation(senhaUsuario,'A senha tem menos de oito caracteres!')
        }
    }

    

}

function errorValidation(input, message){
    const formControl = input.parentElement; //referencia o elemento pai do elemento username
    const small = formControl.querySelector('small')
    small.innerText = message
    formControl.className = 'form-control error' //auterando a classe do elemento referenciado
}

function successValidation(input){
    const formControl = input.parentElement;

    formControl.className = 'form-control success'
}
