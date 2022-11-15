let html_add_prof_i = '';
let html_add_prof_ii = '';
let html_add_func = '';


function get_funcionarios(tipo_de_funcionario, api_link){
    let auxiliar = '';
    fetch(api_link)
    .then(
        (responde) => console.log(responde.json()
        .then(
            data => {
                
                console.log(data)
                for (var key in data){
                    console.log(data[key].acf.nome)
                    let htmlSegment = `
                    <div class="card swiper-slide">
                    <div class="card-inner">
                            <div class="card-front">
                                <img src="${data[key].acf.foto}" alt="${data[key].slug}">
                            </div>
                            <div class="card-back">
                                <div class="card__content">
                                    <h3>${data[key].acf.nome}</h3>
                                    <p class="subtitulo">${data[key].acf.funcao}</p>
                                </div>
                            </div>
                        </div>
                    </div>`
                    auxiliar+=htmlSegment
                }
                let swiper = document.querySelector(tipo_de_funcionario);
                swiper.innerHTML = auxiliar;
            }
            ))
        )
}
get_funcionarios('#prof1', 'https://dominium-api.nordevtech.com.br/wp-json/dominium/equipe/professores-i')
get_funcionarios('#prof2', 'https://dominium-api.nordevtech.com.br/wp-json/dominium/equipe/professores-ii')
get_funcionarios('#direcao', 'https://dominium-api.nordevtech.com.br/wp-json/dominium/equipe/direcao')
get_funcionarios('#adm', 'https://dominium-api.nordevtech.com.br/wp-json/dominium/assets/administracao')