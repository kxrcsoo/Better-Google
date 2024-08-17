// animate the title
var i = 0;
let animTitle = [
    "B",
    "Be",
    "Bet",
    "Bett",
    "Bette",
    "Better",
    "Better G",
    "Better Go",
    "Better Goo",
    "Better Goog",
    "Better Googl",
    "Better Google",
    /*"Better Googl",
    "Better Goog",
    "Better Goo",
    "Better Go",
    "Better G",
    "Better",
    "Bette",
    "Bett",
    "Bet",
    "Be",
    "B", */
];

//25 entry

function animateTitle() {
    var currentTitle = animTitle[i];
    document.getElementById("titleh1").innerHTML = currentTitle;
    i++;
    if (i == animTitle.length) {
        clearInterval(animInterval);
    }
}

var animInterval = setInterval(animateTitle, 100);