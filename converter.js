function displayDailyRate(x) {
    var thaidailyrate = document.getElementById('thaidailyrate').value;
var txt1 = "π²π² ααΌααΊαα¬αα½α± αααΊαα­ααΊαΈ = ";
var txt2 = thaidailyrate + " αααΊ πΉπ­";
    document.getElementById('dailyrate').innerHTML = txt1.concat(txt2);
var text1 = "α αααΊ πΉπ­ = ";
var oneTHBVal = parseFloat(100000 / thaidailyrate).toFixed(0);
// var text2 = oneTHBVal.toString;
var text3 = " αα»ααΊ π²π²";
document.getElementById('oneKyat').innerHTML = text1.concat(oneTHBVal, text3);
}

function displayTH(x) {
    var thaidailyrate = document.getElementById('thaidailyrate').value;
    var oneTHBVal = parseFloat(100000 / thaidailyrate).toFixed(2);
document.getElementById('thmmt').value = parseFloat(x.value / oneTHBVal).toFixed(2);
var tt1 = "π²π² ααΌααΊαα¬αα½α± ";
var tt2 = document.getElementById('mmamt').value;
var tt3 = " αα»ααΊ π²π² = πΉπ­ αα­α―ααΊαΈαα½α± ";
var tt4 = document.getElementById('thmmt').value;
var tt5 = " αααΊ πΉπ­";
document.getElementById('rate').innerHTML = tt1.concat(tt2, tt3, tt4, tt5);
}

function displayMM(x) {
    var thaidailyrate = document.getElementById('thaidailyrate').value;
    var oneTHBVal = parseFloat(100000 / thaidailyrate).toFixed(2);
document.getElementById('mmamt').value = parseFloat(x.value * oneTHBVal).toFixed(0);
var tt1 = "πΉπ­ αα­α―ααΊαΈαα½α± ";
var tt2 = document.getElementById('thmmt').value;
var tt3 = " αααΊ = π²π² ααΌααΊαα¬αα½α± ";
var tt4 = document.getElementById('mmamt').value;
var tt5 = " αα»ααΊ π²π²";
document.getElementById('rate').innerHTML = tt1.concat(tt2, tt3, tt4, tt5);
}