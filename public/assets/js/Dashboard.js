
function contratantes(){
    document.getElementById('opcao1').style.display = 'block';  
    document.getElementById('opcao2').style.display = 'none';  
    document.getElementById('opcao3').style.display = 'none';  
}

function dependentes(){
    document.getElementById('opcao2').style.display = 'block'; 
    document.getElementById('opcao3').style.display = 'none'; 
    document.getElementById('opcao1').style.display = 'none'; 
}

function cuidadores(){
    document.getElementById('opcao3').style.display = 'block';  
    document.getElementById('opcao2').style.display = 'none';  
    document.getElementById('opcao1').style.display = 'none';  
}

function dashboard(){
    document.getElementById('infodash').style.display = 'block';  
    document.getElementById('endcontr').style.display = 'none';
    document.getElementById('infocontr').style.display = 'none'; 
    document.getElementById('infodep').style.display = 'none';
    document.getElementById('contratos').style.display = 'none';
    document.getElementById('depcontr').style.display = 'none';
    document.getElementById('extrcontr').style.display = 'none';
    document.getElementById('metpagcontr').style.display = 'none';



}

function infopescontr(){
    document.getElementById('infocontr').style.display = 'block';
    document.getElementById('endcontr').style.display = 'none';
    document.getElementById('infodash').style.display = 'none';  
    document.getElementById('infodep').style.display = 'none';
    document.getElementById('contratos').style.display = 'none';
    document.getElementById('depcontr').style.display = 'none';
    document.getElementById('extrcontr').style.display = 'none';
    document.getElementById('metpagcontr').style.display = 'none';
}

function endcontr(){
    document.getElementById('endcontr').style.display = 'block';
    document.getElementById('contratos').style.display = 'none';
    document.getElementById('infocontr').style.display = 'none';
    document.getElementById('infodash').style.display = 'none';  
    document.getElementById('infodep').style.display = 'none';
    document.getElementById('depcontr').style.display = 'none';
    document.getElementById('extrcontr').style.display = 'none';
    document.getElementById('metpagcontr').style.display = 'none';
}


function infopesdep(){
    document.getElementById('infodep').style.display = 'block'; 
    document.getElementById('infodash').style.display = 'none';  
    document.getElementById('infocontr').style.display = 'none';
    document.getElementById('endcontr').style.display = 'none';
    document.getElementById('contratos').style.display = 'none';
    document.getElementById('depcontr').style.display = 'none';
    document.getElementById('extrcontr').style.display = 'none';
    document.getElementById('metpagcontr').style.display = 'none';
}

function contratos(){
    document.getElementById('infodash').style.display = 'none';  
    document.getElementById('endcontr').style.display = 'none'; 
    document.getElementById('contratos').style.display = 'block';
    document.getElementById('extrcontr').style.display = 'none';
    document.getElementById('infodep').style.display = 'none'; 
    document.getElementById('infocontr').style.display = 'none';
    document.getElementById('depcontr').style.display = 'none';
    document.getElementById('metpagcontr').style.display = 'none';
}

function depencontr(){
    document.getElementById('depencontr').style.display = 'block';
    document.getElementById('extrcontr').style.display = 'none';
    document.getElementById('contratos').style.display = 'none';
    document.getElementById('infodep').style.display = 'none'; 
    document.getElementById('infodash').style.display = 'none';  
    document.getElementById('infocontr').style.display = 'none';
    document.getElementById('endcontr').style.display = 'none';  
    document.getElementById('metpagcontr').style.display = 'none';
 
}

function extratos(){
    document.getElementById('infodash').style.display = 'none';  
    document.getElementById('extrcontr').style.display = 'block';
    document.getElementById('depcontr').style.display = 'none';
    document.getElementById('contratos').style.display = 'none';
    document.getElementById('infodep').style.display = 'none'; 
   
    document.getElementById('infocontr').style.display = 'none';
    document.getElementById('endcontr').style.display = 'none';   
    document.getElementById('metpagcontr').style.display = 'none';

}

function metpagcontr(){
    document.getElementById('metpagcontr').style.display = 'block';
    document.getElementById('infodash').style.display = 'none';  
    document.getElementById('extrcontr').style.display = 'none';
    document.getElementById('depcontr').style.display = 'none';
    document.getElementById('contratos').style.display = 'none';
    document.getElementById('infodep').style.display = 'none'; 

    document.getElementById('infocontr').style.display = 'none';
    document.getElementById('endcontr').style.display = 'none';   
   

}

