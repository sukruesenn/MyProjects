const url = 'https://api.openweathermap.org/data/2.5/';
const key = 'bd367de318bf53c7cab46b7ddbc76b04';

const setQuery = (e) => {
    if(e.keyCode == '13')
        getResult(searchBar.value);
}

const getResult = (cityName) => {
    let query = `${url}weather?q=${cityName}&appid=${key}&units=metric&lang=tr`;
    fetch(query).then(weather => {
        return weather.json();
    }).then(displayResult);
}

const displayResult = (result) =>{
    let city = document.querySelector('.city');
    city.innerHTML = `${result.name}, ${result.sys.country}`;

    let temp = document.querySelector('.temp');
    temp.innerHTML = `${Math.round(result.main.temp)}°C`;

    let description = document.querySelector('.description');
    description.innerHTML = result.weather[0].description;

    let minMax = document.querySelector('.minmax');
    minMax.innerHTML = `${Math.round(result.main.temp_min)}°c / ${Math.round(result.main.temp_max)}°c`;

    console.log(result);
}

const searchBar = document.getElementById('searchBar');
searchBar.addEventListener('keypress', setQuery);