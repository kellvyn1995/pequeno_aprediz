const form_addProfessor = document.getElementById('form_addProfessor')
const nome_profeesor = document.getElementById('nome_profeesor')
const email_pro = document.getElementById('email_pro')
const telefone_pro = document.getElementById('telefone_pro')
const semanal = document.getElementById('semanal')

//const campos = ['email_pro', 'telefone_pro','contato_telefone_pro','semanal','nacimento_aluno','total_h_aluno','valor_h_aluno'];

form_addProfessor.addEventListener('submit',(e) =>{
    e.preventDefault() //tira o conportamento padrão do navegador
    checkInputs() //função
})


function checkInputs() {
    const nome_profeesorValue = nome_profeesor.value.trim()
    const email_proValue = email_pro.value.trim() // o trim vai retira os espaços vazios
    const telefone_proValue = telefone_pro.value.trim() // o trim vai retira os espaços vazios
    const semanalValue = semanal.value.trim()

        if (nome_profeesorValue === '') {
            //adicionar a classe error
            errorValidation(nome_profeesor,'Preencha esse campo!')
        } else {
            //adicionar a classe sucesso
            successValidation(nome_profeesor)

        }
        if (email_proValue === '') {
            //adicionar a classe error
            errorValidation(email_pro,'Preencha esse campo!')
        } else {
            //adicionar a classe sucesso
            successValidation(email_pro)
    
        }
        if (telefone_proValue === '') {
            //adicionar a classe error
            errorValidation(telefone_pro,'Preencha esse campo!')
        } else {
            //adicionar a classe sucesso
            successValidation(telefone_pro)
    
        }
        if (semanalValue === '') {
            //adicionar a classe error
            errorValidation(semanal,'Preencha esse campo!')
        } else {
            //adicionar a classe sucesso
            successValidation(semanal)
    
        }

}

function errorValidation(input, message){
    const form_campo = input.parentElement; //referencia o elemento pai do elemento username
    const small = form_campo.querySelector('small')
    small.innerText = message
    form_campo.className = 'col-12 col-md-6 form_campo error' //auterando a classe do elemento referenciado
}

function successValidation(input){
    const form_campo = input.parentElement;

    form_campo.className = 'col-12 col-md-6 form_campo success'
}





