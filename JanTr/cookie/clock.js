const now = new Date();

var valM = now.getMinutes(), valS = now.getSeconds(), valH = now.getHours();

const degS = valS * 6;
const degM = valM * 6 + valS * 0.1;
const degH = valH * 30 + valM * 0.5;

let cs = document.getElementById("s").textContent = `${valS}`;
let cm = document.getElementById("m").textContent = `${valM}`;
let ck = document.getElementById("h").textContent = `${valH}`;



let kf = document.createElement('style');

kf.innerHTML = `
@keyframes squ3 {
  from {transform: rotate(${degS}deg);}
  to {transform: rotate(${degS + 360}deg);}
}
@keyframes squ2 {
  from {transform: rotate(${degM}deg);}
  to {transform: rotate(${degM + 360}deg);}
}
@keyframes squ1 {
  from {transform: rotate(${degH}deg);}
  to {transform: rotate(${degH + 360}deg);}
}
@keyframes cri {
    0% {
        top:0%;
    }
    50% {
        top:86%;
    }
    100% {
        top: 0%;
    }

}
`;


document.querySelector("head").append(kf);
