const partido = document.getElementById('partido');

partido.addEventListener('change', async()=>{
var nome_partido = '';
nome_partido = partido.value;

// json pros partido

const partidos=[
    {nome:'paridola'},
    {nome:'partidoca'}
    ]
    const option = document.createElement("optgroup")
    option.setAttribute('label', 'partido')

    partidos.forEach(sacolinha => {
    console.log(sacolinha.nome)


        option.innerHTML += '<option value="' + sacolinha.nome + '">' + sacolinha.nome + '</option>'

});


})
