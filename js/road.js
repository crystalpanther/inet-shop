/**
 * Created by elina on 10/28/2017.
 */
'use strict';

var cards = [
    {
        from: "Stockholm",
        to: "New York JFK",
        type: "flight",
        gate: "22",
        number: "SK22",
        seat: "7B",
        ticketCounter: ""
    },
    {
        from: "Tokyo",
        to: "Oslo",
        type: "airport bus",
        number: "",
        seat: ""
    },
    {
        from: "Barcelona",
        to: "Gerona Airport",
        type: "airport bus",
        number: "",
        seat: ""
    },
    {
        from: "Moscow",
        to: "Tokyo",
        type: "airport bus",
        number: "",
        seat: ""
    },
    {
        from: "Gerona Airport",
        to: "Stockholm",
        type: "flight",
        gate: "45B",
        number: "SK455",
        seat: "3A",
        ticketCounter: "344"
    },
    {
        from: "Milan",
        to: "Barcelona",
        type: "flight",
        gate: "22",
        number: "SK22",
        seat: "7B",
        ticketCounter: ""
    },
    {
        from: "New York JFK",
        to: "Moscow",
        type: "airport bus",
        number: "",
        seat: ""
    }
];

function setCards(outerCards) {
    window.cards = outerCards;
}

window.onload = function(){
    var output = document.getElementById("output");
    var button = document.getElementById("button");
    button.onclick = function() {
        findLastCard();
        document.getElementById("output").innerHTML = "Take train 78A from " + findFirstCard().from + "  " +
            "to " + findFirstCard().to + ". " + "Seat 45B" + "<br>";

        // console.log(findFirstCard(), findLastCard());
    };
};
