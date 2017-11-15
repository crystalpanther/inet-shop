/**
 * Created by elina on 11/13/2017.
 */

'use strict';

class travelCard {
    constructor(from, to, type, gate, number, seat, ticketCounter) {
        this.from = from;
        this.to = to;
        this.type = type;
        this.gate = gate;
        this.number = number;
        this.seat = seat;
        this.ticketCounter = ticketCounter;
    }
};

let card1 = new travelCard("Stockholm", "New York JFK", "flight", "22", "SK22", "7B", null);
let card2 = new travelCard("Tokyo", "Oslo", "airport bus", null, null, null, null);
let card3 = new travelCard("Barcelona", "Gerona Airport", "airport bus", null, null, null, null);
let card4 = new travelCard("Moscow", "Tokyo", "airport bus", null, null, null, null);
let card5 = new travelCard("Tokyo", "Oslo", "airport bus", null, null, null, null);
let card6 = new travelCard("Gerona Airport", "Stockholm", "flight", "45B", "SK455", "3A", "344");
let card7 = new travelCard("Milan", "Barcelona", "flight", "22", "SK22", "7B", null);
let card8 = new travelCard("New York JFK", "Moscow", "airport bus", "28", "J2", "8C", "565");
