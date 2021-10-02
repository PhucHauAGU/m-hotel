const appKey = "f6e6ef56fb6481cb61c6da6d17ad3e75";

var searchButton = document.getElementById("search-btn"),
 searchInput = document.getElementById("search-txt"),
  cityName = document.getElementById("city-name"),
  icon = document.getElementById("icon"),
  temperature = document.getElementById("temp"),
  humidity = document.getElementById("humidity-div");
 
searchButton.addEventListener("click", findWeatherDetails);
searchInput.addEventListener("keyup", enterPressed);

function enterPressed(event) {
  if (event.key === "Enter") {
    findWeatherDetails();
  }
}

function findWeatherDetails() {
    let searchLink = "https://api.openweathermap.org/data/2.5/weather?q=" +searchInput.value + "&appid="+appKey;
   httpRequestAsync(searchLink, theResponse);
 }

function theResponse(response) {
  let jsonObject = JSON.parse(response);
  cityName.innerHTML = jsonObject.name;
  icon.src = "http://openweathermap.org/img/w/" + jsonObject.weather[0].icon + ".png";
  temperature.innerHTML = "Nhiệt độ : " + parseInt(jsonObject.main.temp - 273) + "°"; //nhiet do tra ve sẽ theo do K nên chúng ta phải chuyen qua do C
  humidity.innerHTML = "Độ ẩm : " + jsonObject.main.humidity + "%";
}

function httpRequestAsync(url, callback)
{
  var httpRequest = new XMLHttpRequest();
  httpRequest.onreadystatechange = () => {
      if (httpRequest.readyState == 4 && httpRequest.status == 200)
          callback(httpRequest.responseText);
  }
  httpRequest.open("GET", url, true);
  httpRequest.send();
}