let html_add_adm = '';
let html_add_prof_i = '';
let html_add_prof_ii = '';
let html_add_func = '';

fetch('https://dominium-api.nordevtech.com.br/wp-json/dominium/equipe/administracao')
.then(
    (responde) => console.log(responde.json()
    .then(
         data => {
            let direcao = data[0]
            console.log(direcao['0'])
            direcao.forEach(element => {
                console.log('aqui')
                console.log(element)
            })
         }
        ))
)