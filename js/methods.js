/**
 * Created by user on 14.11.2017.
 */

'use strict';

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
function SortsCard() {
    var result = findFirstCard();
    var firstCard = result[0];
    var index = result[1];
    sortedCards.push(firstCard);
    cards.splice(index, 1);

    while (cards.length) {
        for (var i = 0; i < cards.length; i++) {
            if (cards[i].from == sortedCards[sortedCards.length - 1].to) {
                sortedCards.push(cards[i]);
                cards.splice(i, 1);
                break;
            }
        }
    }
    console.log(sortedCards);
    return sortedCards;
}