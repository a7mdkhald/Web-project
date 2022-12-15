var flag = 0;

function toadd() {
    return dispa();
}

function dispdiva() {
    let bb = document.getElementById('add');
    bb.style.color = 'black';

    if (flag == 2) {
        return;
    }
    var x = document.getElementById('addsel');
    if (x.style.display == 'none') {
        x.style.display = 'block';
    
    }
       let adseladj = document.getElementById('paysel');
        if (adseladj.style.display == 'block') {
            adseladj.style.bottom = "10px";
        }
}
function dispdivar() {
    
    if (flag == 2) {
        return;
    }
    let bb = document.getElementById('add');
    bb.style.color = 'gray';
    var y = document.getElementById('addsel');
    y.style.display = 'none';
       let adseladj = document.getElementById('paysel');
        if (adseladj.style.display == 'block') {
            adseladj.style.bottom = "5px";
        }
}
function dispa() {
    let addiv = document.getElementById('sad');
    let cdiv = document.getElementById('cid');
    let cons = document.getElementById('consel');
    let pdiv = document.getElementById('pmd');
    let pays = document.getElementById('paysel');
    let ads = document.getElementById('addsel');
    addiv.style.display = 'block';
    cdiv.style.display = 'none';
    cons.style.display = 'none';
    pays.style.display = 'none';
    pdiv.style.display = 'none';
    ads.style.display = 'block';
    ads.style.bottom = "5px";
    flag = 2;
    let bb = document.getElementById('add');
    let b1 = document.getElementById('conb');
    let b2 = document.getElementById('pay');
    bb.style.color = 'black';
    b1.style.color = 'gray';
    b2.style.color = 'gray';
}
function dispc() {
    let addiv = document.getElementById('sad');
    let cdiv = document.getElementById('cid');
    let cons = document.getElementById('consel');
    let pdiv = document.getElementById('pmd');
    let pays = document.getElementById('paysel');
    let ads = document.getElementById('addsel');
    addiv.style.display = 'none';
    cdiv.style.display = 'block';
    cons.style.display = 'block';
    pays.style.display = 'none';
    pdiv.style.display = 'none';
    ads.style.display = 'none';
    let bb = document.getElementById('conb');
    let b1 = document.getElementById('add');
    let b2 = document.getElementById('pay');
    bb.style.color = 'black';
    b1.style.color = 'gray';
    b2.style.color = 'gray';
    flag = 1;
}
function dispdivc() {
    let bb = document.getElementById('conb');
    bb.style.color = 'black';

    if (flag == 1|| flag == 0) {
        return;
    }
    let conselector = document.getElementById('consel');
    if (conselector.style.display == 'none') {
        conselector.style.display = 'block';
        let adseladj = document.getElementById('addsel');
        if (adseladj.style.display == 'block') {
            adseladj.style.bottom = "10px";
        }
         let py = document.getElementById('paysel');
        if (py.style.display == 'block') {
            py.style.bottom = "10px";
        }
    }
}
function dispdivcr() {
     if (flag == 1 || flag == 0) {
        return;
    }
    
    let bb = document.getElementById('conb');
    bb.style.color = 'gray';
    var cout = document.getElementById('consel');
    cout.style.display = 'none';
    let adseladj = document.getElementById('addsel');
        if (adseladj.style.display == 'block') {
            adseladj.style.bottom = "5px";
    }
     let py = document.getElementById('paysel');
        if (py.style.display == 'block') {
            py.style.bottom = "5px";
        }
}
function dispp() {
    let addiv = document.getElementById('sad');
    let cdiv = document.getElementById('cid');
    let cons = document.getElementById('consel');
    let pdiv = document.getElementById('pmd');
    let pays = document.getElementById('paysel');
    let ads = document.getElementById('addsel');
    addiv.style.display = 'none';
    cdiv.style.display = 'none';
    cons.style.display = 'none';
    pays.style.display = 'block';
    pdiv.style.display = 'block';
    ads.style.display = 'none';
    ads.style.bottom = "5px";
    flag = 3;
    let bb = document.getElementById('pay');
    let b1 = document.getElementById('conb');
    let b2 = document.getElementById('add');
    bb.style.color = 'black';
    b1.style.color = 'gray';
    b2.style.color = 'gray';
}
function dispdivp() {
    let bb = document.getElementById('pay');
    bb.style.color = 'black';

    if (flag == 3) {
        return;
    }
    let conselector = document.getElementById('paysel');
    if (conselector.style.display == 'none') {
        conselector.style.display = 'block';
        let adseladj = document.getElementById('confirm');
        if (adseladj.style.display == 'block') {
            adseladj.style.bottom = "10px";
        }
    }
}
function dispdivpr() {
     if (flag == 3) {
        return;
    }
    
    let bb = document.getElementById('pay');
    bb.style.color = 'gray';
    var cout = document.getElementById('paysel');
    cout.style.display = 'none';
    let adseladj = document.getElementById('confirm');
        if (adseladj.style.display == 'block') {
            adseladj.style.bottom = "5px";
        }
}