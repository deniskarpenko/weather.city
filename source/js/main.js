async function loadCity()
{
    let responce = await fetch('/city/getCities/').then((data) =>{
        return data.json();
    });
    let select = document.getElementById('cityList');
    let html = '';
    for(let i = 0; i < responce.length; i ++){
        html+= '<option id ="'+ responce[i]['id']+'">'+ responce[i]['city'] +'</option>'
    }
    select.innerHTML = html;
    console.log(responce);
}
