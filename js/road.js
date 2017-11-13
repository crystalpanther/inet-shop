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
var sortedCards = [];
function findFirstCard() {
    var isFound;
    for (var i = 0; i < cards.length; i++) {
        var from = cards[i].from;
        isFound = false;
        for (var n = 0; n < cards.length; n++) {
            var to = cards[n].to;
            if (from == to) {
                //console.log("from " + from + " to " + to);
               isFound = true;
               break;
            }
            //console.log('to ' + to);
        }
        if (!isFound) {
           return [cards[i], i];
        }
    }
    return null;
}

function sortsCard() {
    var result = findFirstCard();
    var firstCard = result[0];
    var index = result[1];
    sortedCards.push(firstCard);
    cards.splice(index, 1);

    while (cards.length) {
        for (var i = 0; i < cards.length; i++) {
            // for (var n = 0; n < cards.length; n++) {
            //
            // }
            if (cards[i].from == sortedCards[sortedCards.length - 1].to) {
                sortedCards.push(cards[i]);
                cards.splice(i, 1);
                break;
            }
        }
    }
    console.log(cards, sortedCards);
}
sortsCard();
//console.log(sortedCards);

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
