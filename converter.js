function displayDailyRate(x) {
    var thaidailyrate = document.getElementById('thaidailyrate').value;
var txt1 = "🇲🇲 မြန်မာငွေ တစ်သိန်း = ";
var txt2 = thaidailyrate + " ဘတ် 🇹🇭";
    document.getElementById('dailyrate').innerHTML = txt1.concat(txt2);
var text1 = "၁ ဘတ် 🇹🇭 = ";
var oneTHBVal = parseFloat(100000 / thaidailyrate).toFixed(0);
// var text2 = oneTHBVal.toString;
var text3 = " ကျပ် 🇲🇲";
document.getElementById('oneKyat').innerHTML = text1.concat(oneTHBVal, text3);
}

function displayTH(x) {
    var thaidailyrate = document.getElementById('thaidailyrate').value;
    var oneTHBVal = parseFloat(100000 / thaidailyrate).toFixed(2);
document.getElementById('thmmt').value = parseFloat(x.value / oneTHBVal).toFixed(2);
var tt1 = "🇲🇲 မြန်မာငွေ ";
var tt2 = document.getElementById('mmamt').value;
var tt3 = " ကျပ် 🇲🇲 = 🇹🇭 ထိုင်းငွေ ";
var tt4 = document.getElementById('thmmt').value;
var tt5 = " ဘတ် 🇹🇭";
document.getElementById('rate').innerHTML = tt1.concat(tt2, tt3, tt4, tt5);
}

function displayMM(x) {
    var thaidailyrate = document.getElementById('thaidailyrate').value;
    var oneTHBVal = parseFloat(100000 / thaidailyrate).toFixed(2);
document.getElementById('mmamt').value = parseFloat(x.value * oneTHBVal).toFixed(0);
var tt1 = "🇹🇭 ထိုင်းငွေ ";
var tt2 = document.getElementById('thmmt').value;
var tt3 = " ဘတ် = 🇲🇲 မြန်မာငွေ ";
var tt4 = document.getElementById('mmamt').value;
var tt5 = " ကျပ် 🇲🇲";
document.getElementById('rate').innerHTML = tt1.concat(tt2, tt3, tt4, tt5);
}