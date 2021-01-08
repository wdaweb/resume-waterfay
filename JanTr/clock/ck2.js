// function retime() {
//     let t = new Date();
//     let nt = t.getHours();
//     let nm = t.getMinutes();
//     let ns = t.getSeconds();

//     var wk = ["SUN","MON","TUS" ,"WED","THU","FRI","SAT"];
//     let yy = t.getFullYear() ;
//     let ym = t.getMonth() + 1;
//     let yd = t.getDay();
//     let wkd=wkd[yd];


//     document.getElementById("clkDate").textContent = yy + ym  + yd + wkd;
// }

// function showTime() {
//     var today = new Date();
//     var hour =
//         parseInt(today.getHours()) < 10
//             ? '0' + today.getHours()
//             : today.getHours();

//     var min =
//         parseInt(today.getMinutes()) < 10
//             ? '0' + today.getMinutes()
//             : today.getMinutes();

//     var sec =
//         parseInt(today.getSeconds()) < 10
//             ? '0' + today.getSeconds()
//             : today.getSeconds();

//     document.getElementById('clkTime').innerHTML = hour + ':' + min + ':' + sec
// }
// window.onload = function () {
//     setInterval(showTime, 1000);
//     var today = new Date();
//     document.getElementById('clkDat').textContent =
//         yy + '/' +
//         ym + '/' +
//          + '/' +
//         '星期' + today.getDay()
// }
var n_day = ['SUN', 'MON', 'TUS', 'WED', 'THR', 'FRI', 'SAT'];
function re_time() {
    setTimeout("re_time()", 1000);
    nt = new Date();
    n_hour = nt.getHours(); //時
    n_min = nt.getMinutes();//分
    n_sec = nt.getSeconds();//秒 65

    n_year = nt.getFullYear();//年
    n_moth = nt.getMonth();
    n_date = nt.getDate();
    d_item = nt.getDay();

    function chk0(num) {
        return (num < 10) ? "0" + num : num;
    }

    document.getElementById("clkTime").textContent = `${chk0(n_hour)}:${chk0(n_min)}:${chk0(n_sec)}`;
    document.getElementById("clkDate").textContent = `${n_year}-${n_moth + 1}-${n_date} ${n_day[d_item]}`;

}
re_time();