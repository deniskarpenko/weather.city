async function loadCity()
{
    let responce = await fetch('/city/getCities/').then((data) =>{
        return data.json();
    });
    let select = document.getElementById('cityList');
    let html = '';
    for(let i = 0; i < responce.length; i ++){
        html+= '<option value ="'+ responce[i]['id']+'">'+ responce[i]['city'] +'</option>'
    }
    select.innerHTML = html;
}

async function getWeather()
{
    let responce = await fetch('/city/getWeather/?id='+ document.getElementById('cityList').value
    ).then((data)=>{
        return data.json()
    });
}
