const box = 

[
    {
        id: 1,
        nomeContratante: 'Maria Cecília',
        acompanhado: 'Firmina de Jesus',
        bairro:'Federeção',
        endereco:'Rua do Limoeiro 08',
        dia: '18-20/17',
        horario: '20-24:00',
        transporte: 'A combinar',
        valor: 255.00
    },

    {
        id: 2,
        nomeContratante: 'José Roberto',
        acompanhado: 'Maria de Jesus',
        bairro:'Boa União',
        endereco:'Rua do Limoeiro 10',
        dia: '19-21/17',
        horario: '18-20:00',
        transporte: 'Não Incluso',
        valor: 205.00
    },

    {
        id: 3,
        nomeContratante: 'José Roberto',
        acompanhado: 'Maria de Jesus',
        bairro:'Boa União',
        endereco:'Rua do Limoeiro 10',
        dia: '19-21/17',
        horario: '18-20:00',
        transporte: 'Não Incluso',
        valor: 205.00
    },

    {
        id: 4,
        nomeContratante: 'José Roberto',
        acompanhado: 'Maria de Jesus',
        bairro:'Boa União',
        endereco:'Rua do Limoeiro 10',
        dia: '19-21/17',
        horario: '18-20:00',
        transporte: 'Não Incluso',
        valor: 205.00
    },

    {
        id: 5,
        nomeContratante: 'José Roberto',
        acompanhado: 'Maria de Jesus',
        bairro:'Boa União',
        endereco:'Rua do Limoeiro 10',
        dia: '19-21/17',
        horario: '18-20:00',
        transporte: 'Não Incluso',
        valor: 205.00,
    }
];

for (const Usuarios of box){
    const boxs= 
    `<div class="box">
    <div class="text">
        <h2>Contratante:${Usuarios.nomeContratante}</h2>
        <p>Acompanhado(a):${Usuarios.acompanhado}</p>

      <p>Bairro:${Usuarios.bairro}</p>
      <p>Endereço:${Usuarios.endereco}</p>
      <p>Dia: ${Usuarios.dia}</p>
      <p>Horário: ${Usuarios.horario}</p>
      <p>Transporte:${Usuarios.transporte}</p>
      <p>Valor Estimando: <div id="valor">R$${Usuarios.valor}</div></p>
    </div>
    

    <div class="buttons">
        <input type="button" value="Aceitar" id="aceitar" onclick="aceitar()">
        <input type="button" value="Recusar" id="recusar" onclick="recusar()">

        <p class="alert"></p>
    </div>

</div>`;

    document.getElementById('container').innerHTML += boxs;
}

function aceitar(){
    var aceitar = document.querySelector("#aceitar");
    var recusar = document.querySelector("#recusar");
    var alert1 = document.querySelector(".alert");
    var alert = document.querySelector(".alert");

    aceitar.style.display = "none";
    recusar.style.display = "none";
    alert.style.color = "green";
    alert1.innerHTML = "Contrato aceito";
}

function recusar(){
    var aceitar = document.querySelector("#aceitar");
    var recusar = document.querySelector("#recusar");
    var alert1 = document.querySelector(".alert");
    var alert = document.querySelector(".alert");
    
    aceitar.style.display = "none";
    recusar.style.display = "none";
    alert.style.color = "red";
    alert1.innerHTML = "Contrato recusado";  
}

