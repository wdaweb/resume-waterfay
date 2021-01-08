function retime() {//執行 DOM 的變化
    setTimeout(retime, 1000); //1 秒之後，去跑 retime 這個動作

    let nt = new Date();
    let n_hour = nt.getHours();
    let n_min = nt.getMinutes();
    let n_sec = nt.getSeconds();

    //時分秒的個位數
    let n_hx = n_hour % 10;
    let n_mx = n_min % 10;
    let n_sx = n_sec % 10;

    //時分秒的十位數
    let n_ht = Math.floor(n_hour / 10);
    let n_mt = Math.floor(n_min / 10);
    let n_st = Math.floor(n_sec / 10);

    document.getElementById("ck1").className = "c" + n_ht;
    document.getElementById("ck2").className = "c" + n_hx;
    document.getElementById("ck3").className = "c" + n_mt;
    document.getElementById("ck4").className = "c" + n_mx;
    document.getElementById("ck5").className = "c" + n_st;
    document.getElementById("ck6").className = "c" + n_sx;

    document.getElementsByClassName("cc")[0].style.opacity = 1;
    document.getElementsByClassName("cc")[1].style.opacity = 1;

    //有兩行 dom 晚 500 毫秒執行
    setTimeout(function () {
        document.getElementsByClassName("cc")[0].style.opacity = 0;
        document.getElementsByClassName("cc")[1].style.opacity = 0;
    }, 500);
}

retime();