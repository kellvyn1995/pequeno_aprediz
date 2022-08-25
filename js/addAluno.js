const form_addAluno = document.getElementById('form_addAluno')
const nome_aluno = document.getElementById('nome_aluno')
const mae_aluno = document.getElementById('mae_aluno')
const contato_mae_aluno = document.getElementById('contato_mae_aluno')
const escola_aluno = document.getElementById('escola_aluno')
const nacimento_aluno = document.getElementById('nacimento_aluno')
const total_h_aluno = document.getElementById('total_h_aluno')
const valor_h_aluno = document.getElementById('valor_h_aluno')

form_addAluno.addEventListener('submit',(e) =>{
   // e.preventDefault() //tira o conportamento padrão do navegador
    checkInputs() //função
})


function checkInputs() {
    
    const nome_alunoValue = nome_aluno.value.trim() // o trim vai retira os espaços vazios
    const mae_alunoValue = mae_aluno.value.trim() // o trim vai retira os espaços vazios
    const contato_mae_alunoValue = contato_mae_aluno.value.trim()
    const escola_alunoValue = escola_aluno.value.trim()
    const nacimento_alunoValue = nacimento_aluno.value.trim()
    const total_h_alunoValue = total_h_aluno.value.trim()
    const valor_h_alunoValue = valor_h_aluno.value.trim()

        if (nome_alunoValue === '') {
            //adicionar a classe error
            errorValidation(nome_aluno,'Preencha esse campo!')
        } else {
            //adicionar a classe sucesso
            successValidation(nome_aluno)
    
        }
        if (mae_alunoValue === '') {
            //adicionar a classe error
            errorValidation(mae_aluno,'Preencha esse campo!')
        } else {
            //adicionar a classe sucesso
            successValidation(mae_aluno)
    
        }
        if (contato_mae_alunoValue === '') {
            //adicionar a classe error
            errorValidation(contato_mae_aluno,'Preencha esse campo!')
        } else {
            //adicionar a classe sucesso
            successValidation(contato_mae_aluno)
    
        }
        if (escola_alunoValue === '') {
            //adicionar a classe error
            errorValidation(escola_aluno,'Preencha esse campo!')
        } else {
            //adicionar a classe sucesso
            successValidation(escola_aluno)
    
        }
        if (nacimento_alunoValue === '') {
            //adicionar a classe error
            errorValidation(nacimento_aluno,'Preencha esse campo!')
        } else {
            //adicionar a classe sucesso
            successValidation(nacimento_aluno)
    
        }
        if (total_h_alunoValue === '') {
            //adicionar a classe error
            errorValidation(total_h_aluno,'Preencha esse campo!')
        } else {
            //adicionar a classe sucesso
            successValidation(total_h_aluno)
    
        }
        if (valor_h_alunoValue === '') {
            //adicionar a classe error
            errorValidation(valor_h_aluno,'Preencha esse campo!')
        } else {
            //adicionar a classe sucesso
            successValidation(valor_h_aluno)
    
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





