/**
 * Created by elina on 10/28/2017.
 */
var cards = [
    {
        from: "Barcelona",
        to: "Gerona Airport",
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
        from: "Stockholm",
        to: "New York JFK",
        type: "flight",
        gate: "22",
        number: "SK22",
        seat: "7B",
        ticketCounter: ""
    },
    {
        from: "Madrid",
        to: "Barcelona",
        type: "train",
        number: "78A",
        seat: "35B"
    }
];

function findFirstCard() {
    var isFound;
    for (var i = 0; i < cards.length; i++) {
        var from = cards[i].from;
        isFound = false;
        for (var n = 0; n < cards.length; n++) {
            var to = cards[n].to;
            if (from == to) {
                console.log("from " + from + " to " + to);
               isFound = true;
               break;
            }
            console.log('to ' + to);
        }
        if (!isFound) {
            return cards[i];
        }
    }
    return null;
}

function sortCards () {

}

window.addEventListener('load', main);

function main() {
    console.log('main');
        console.log(findFirstCard());
}