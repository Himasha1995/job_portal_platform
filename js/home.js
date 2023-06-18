const companyInput = document.querySelector("#company-input");
const searchButton = document.querySelector("#search-btn");
const currentCompany = document.querySelector(".current-company");
const companyForecastDiv = document.querySelector(".company-forecast");

const API_KEY = "PASTE-YOUR-API-KEY"; // Paste your API here

// Create weather card HTML based on weather data
const createWeatherCard = (companyName, companyItem, index) => {
    if(index === 0) {
        return `<div class="mt-3 d-flex justify-content-between">
                    <div>
                        <h3 class="fw-bold">${companyName} (${companyItem.dt_txt.split(" ")[0]})</h3>
                        <h6 class="my-3 mt-3">Temperature: ${((companyItem.main.temp - 273.15).toFixed(2))}°C</h6>
                        <h6 class="my-3">Wind: ${companyItem.wind.speed} M/S</h6>
                        <h6 class="my-3">Humidity: ${companyItem.main.humidity}%</h6>
                    </div>
                    <div class="text-center me-lg-5">
                        <img src="https://openweathermap.org/img/wn/${companyItem.company[0].icon}@4x.png" alt="weather icon">
                        <h6>${companyItem.weather[0].description}</h6>
                    </div>
                </div>`;
    } else {
        return `<div class="col mb-3">
                    <div class="card border-0 bg-secondary text-white">
                        <div class="card-body p-3 text-white">
                            <h5 class="card-title fw-semibold">(${companyItem.dt_txt.split(" ")[0]})</h5>
                            <img src="https://openweathermap.org/img/wn/${companyItem.weather[0].icon}.png" alt="weather icon">
                            <h6 class="card-text my-3 mt-3">Temp: ${((companyItem.main.temp - 273.15).toFixed(2))}°C</h6>
                            <h6 class="card-text my-3">Wind: ${companyItem.wind.speed} M/S</h6>
                            <h6 class="card-text my-3">Humidity: ${companyItem.main.humidity}%</h6>
                        </div>
                    </div>
                </div>`;
    }
}

// Get weather details of passed latitude and longitude
const getWeatherDetails = (cityName, latitude, longitude) => {
    const WEATHER_API_URL = `https://api.openweathermap.org/data/2.5/forecast?lat=${latitude}&lon=${longitude}&appid=${API_KEY}`;

    fetch(WEATHER_API_URL).then(response => response.json()).then(data => {
        const forecastArray = data.list;
        const uniqueForecastDays = new Set();

        const fiveDaysForecast = forecastArray.filter(forecast => {
            const forecastDate = new Date(forecast.dt_txt).getDate();
            if (!uniqueForecastDays.has(forecastDate) && uniqueForecastDays.size < 6) {
                uniqueForecastDays.add(forecastDate);
                return true;
            }
            return false;
        });

        companyInput.value = "";
        currentWeatherDiv.innerHTML = "";
        daysForecastDiv.innerHTML = "";

        fiveDaysForecast.forEach((weatherItem, index) => {
            const html = createWeatherCard(companyName, weatherItem, index);
            if (index === 0) {
                currentWeatherDiv.insertAdjacentHTML("beforeend", html);
            } else {
                daysForecastDiv.insertAdjacentHTML("beforeend", html);
            }
        });        
    }).catch(() => {
        alert("An error occurred while fetching the weather forecast!");
    });
}

// Get coordinates of entered city name
const getCityCoordinates = () => {
    const companyName = companyInput.value.trim();
    if (companyName === "") return;
    const API_URL = `https://api.openweathermap.org/geo/1.0/direct?q=${companyName}&limit=1&appid=${API_KEY}`;
  
    fetch(API_URL).then(response => response.json()).then(data => {
        if (!data.length) return alert(`No coordinates found for ${companyName}`);
        const { lat, lon, name } = data[0];
        getWeatherDetails(name, lat, lon);
    }).catch(() => {
        alert("An error occurred while fetching the coordinates!");
    });
}

searchButton.addEventListener("click", () => getCityCoordinates());