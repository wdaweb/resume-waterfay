//DOM節點取得
let animal = document.getElementsByTagName("img");
let time = document.getElementById("time"); //dom time
let combo = document.getElementById("combo"); //dom combo
let sec = 0, count = 0;
let btn = document.getElementsByTagName("button")[0]; //button
btn.addEventListener('click', gamestrat);

document.onkeydown = keyboard;

function gamestrat() {
    sec = 60;
    count = 0;
    time.textContent = sec;
    combo.textContent = count;
    btn.removeEventListener('click', gamestrat);

    const start = setInterval(() => { //倒數器
        if (sec == 0) {
            clearInterval(start); //清除倒數
            btn.addEventListener('click', gamestrat); //開放按鈕
        }
        else {
            sec--;
            time.textContent = sec;
        }
    }, 1000);

    for (let i = 0; i < 100; i++) { //產生100個紅色狀態
        const onTime = Math.floor(Math.random() * 57000); // 0<56999 ms 出現時間
        const onWhere = Math.floor(Math.random() * 9); // 0<8 出現處
        const onDelay = Math.floor(Math.random() * 3) + 2; // 2~4s 滯留時間

        setTimeout(() => {
            showIt(onWhere, onDelay, i); //送往紅色狀態變化
        }, onTime);
    }
}
function showIt(where, delay, item) { //觸發紅色狀態處理
    // console.log(where,delay,item);
    if (animal[where].style.backgroundColor != "") { //因不是黃色不能塞紅，還是要找地方釋放
        //const next=(where!=8)?where+1:0;//method 1
        const next = (where + 1) % 9;//method 2
        setTimeout(() => {
            showIt(next, delay, item);
        }, 100);

    } else { //可以塞紅，因為他是黃色狀態
        animal[where].src = "shark/red.png";
        animal[where].style.backgroundColor = "red";
        animal[where].alt = item;

        setTimeout(() => {
            animal[where].src = "shark/yellow.png";
            animal[where].style.backgroundColor = null;
            animal[where].alt = null;
        }, delay * 1000);
    }
}
function keyboard() {
    // console.log(event.keyCode);
    switch (event.keyCode) {
        case 103:
            getCombo(0);
            break;
        case 104:
            getCombo(1);
            break;
        case 105:
            getCombo(2);
            break;
        case 100:
            getCombo(3);
            break;
        case 101:
            getCombo(4);
            break;
        case 102:
            getCombo(5);
            break;
        case 97:
            getCombo(6);
            break;
        case 98:
            getCombo(7);
            break;
        case 99:
            getCombo(8);
            break;
    }
}
function getCombo(item) { // 得分，只有在紅色狀態時給分
    // console.log(item);
    if (animal[item].style.backgroundColor == "red") {
        animal[item].src = "shark/green.png";
        animal[item].style.backgroundColor = "green";

        count++;
        combo.textContent = count;
    }

}