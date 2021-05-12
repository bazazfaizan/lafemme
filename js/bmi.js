function bmi() {
    //feet and inches value
    let feet = document.querySelector(".feet").value;
    let inch = document.querySelector(".inch").value;
    //merge feet and inched value in one
    let metre = feet + "." + inch;
    //feet to metre conversion and get thr height in metre
    let height = metre / 3.2808;
    //get weight value
    let weight = document.querySelector(".weight").value;
    //bmi calculator
    let bmi = weight / Math.pow(height, 2);
    //bmi showing in p tag with  condition
    if (bmi < 18.5) {
        document.querySelector(".data").innerHTML = "Your Body Mass Index (BMI) is-: " + (Math.round(bmi*100)/100).toFixed(2) + "<br>" + " Index Value is Under Weight";
    } else if (bmi >= 25 && bmi <= 29.9) {
        document.querySelector(".data").innerHTML = "Your Body Mass Index (BMI) is-: " + (Math.round(bmi*100)/100).toFixed(2) + "<br>" + " Index Value is in Over Weight"; 
    } else if (bmi > 30) {
        document.querySelector(".data").innerHTML = "Your Body Mass Index (BMI) is-: " + (Math.round(bmi*100)/100).toFixed(2)+"<br>"+" Index Value is in Obesity";
    }
}
// click event fire on calculate button
document.querySelector(".btn").addEventListener("click", bmi);
