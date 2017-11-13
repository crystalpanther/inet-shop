/**
 * Created by elina on 11/13/2017.
 */
function selectCityFrom() {
    var cityOption = document.getElementById("fromCity").options;
    var selectedCityFrom;
    var citiesArr = [];
    for (var i = 0; i < cityOption.length; i++) {
        selectedCityFrom = cityOption[i].text;
        citiesArr.push(selectedCityFrom);
    }
    console.log(citiesArr);
}