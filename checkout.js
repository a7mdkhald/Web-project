var flag = 0;

function toadd() {
    return dispa();
}
function topay() { 
    return dispp();
}
function tocon() {
    return dispco();
}

function enform() {
    let rad = document.getElementById('paymc');
    let bt1 =document.getElementById('mcard');
    let bt2 =document.getElementById('vcard');
    let bt3 =document.getElementById('aex');
    let name =document.getElementById('cardname');
    let cardno =document.getElementById('cardno');
    let expd =document.getElementById('expd');
    let cvv =document.getElementById('cvv');
    if (rad.checked) {
        cvv.disabled = false;
        bt1.disabled = false;
        bt2.disabled = false;
        bt3.disabled = false;
        name.disabled = false;
        cardno.disabled = false;
        expd.disabled = false;

    } else {
        
        bt1.disabled = true;
        bt2.disabled = true;
        bt3.disabled = true;
        name.disabled = true;
        cardno.disabled = true;
        expd.disabled = true;
        cvv.disabled = true;
    }
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
    
        let cosel = document.getElementById('confirmsel');
        if (cosel.style.display == 'block') {
            cosel.style.bottom = "10px";
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
    
        let cosel = document.getElementById('confirmsel');
        if (cosel.style.display == 'block') {
            cosel.style.bottom = "5px";
        }
}
function dispa() {
    let addiv = document.getElementById('sad');
    let cdiv = document.getElementById('cid');
    let cons = document.getElementById('consel');
    let pdiv = document.getElementById('pmd');
    let pays = document.getElementById('paysel');
    let ads = document.getElementById('addsel');
    let crd = document.getElementById('crdform');
    let cosel = document.getElementById('confirmsel');
        let confirm = document.getElementById('confirmation');
    confirm.style.display = 'none';
    addiv.style.display = 'block';
    cdiv.style.display = 'none';
    crd.style.display = 'none';
    cons.style.display = 'none';
    pays.style.display = 'none';
    pdiv.style.display = 'none';
    cosel.style.display = 'none';
    ads.style.display = 'block';
    ads.style.bottom = "5px";
    flag = 2;
    let bb = document.getElementById('add');
    let b1 = document.getElementById('conb');
    let b2 = document.getElementById('pay');
    let b3 = document.getElementById('confirmb');
    bb.style.color = 'black';
    b1.style.color = 'gray';
    b2.style.color = 'gray';
    b3.style.color = 'gray';
}
function dispc() {
    let addiv = document.getElementById('sad');
    let cdiv = document.getElementById('cid');
    let cons = document.getElementById('consel');
    let pdiv = document.getElementById('pmd');
    let pays = document.getElementById('paysel');
    let ads = document.getElementById('addsel');
    let crd = document.getElementById('crdform');
    let cosel = document.getElementById('confirmsel');
        let confirm = document.getElementById('confirmation');
    confirm.style.display = 'none';
    cosel.style.display = 'none';
    addiv.style.display = 'none';
    cdiv.style.display = 'block';
    cons.style.display = 'block';
    crd.style.display = 'none';
    pays.style.display = 'none';
    pdiv.style.display = 'none';
    ads.style.display = 'none';
    ads.style.bottom = "10px";

    let bb = document.getElementById('conb');
    let b1 = document.getElementById('add');
    let b2 = document.getElementById('pay');
    let b3 = document.getElementById('confirmb');
    bb.style.color = 'black';
    b1.style.color = 'gray';
    b2.style.color = 'gray';
     b3.style.color = 'gray';

    flag = 1;
}
function dispco() {
    let addiv = document.getElementById('sad');
    let cdiv = document.getElementById('cid');
    let cons = document.getElementById('consel');
    let pdiv = document.getElementById('pmd');
    let pays = document.getElementById('paysel');
    let ads = document.getElementById('addsel');
    let crd = document.getElementById('crdform');
    let conf = document.getElementById('confirmsel');
    let confirm = document.getElementById('confirmation');
    conf.style.display = 'block';
    conf.style.bottom= "5px";
    addiv.style.display = 'none';
    cdiv.style.display = 'none';
    cons.style.display = 'none';
    crd.style.display = 'none';
    pays.style.display = 'none';
    pdiv.style.display = 'none';
    ads.style.display = 'none';
    confirm.style.display = 'block';
    ads.style.bottom = "5px";
    pays.style.bottom = "50px";

    let bb = document.getElementById('confirmb');
    let b1 = document.getElementById('add');
    let b2 = document.getElementById('pay');
    let b3 = document.getElementById('conb');
    bb.style.color = 'black';
    b1.style.color = 'gray';
    b2.style.color = 'gray';
    b3.style.color = 'gray';
    
    flag = 4;
}
function dispdivco() {
    let bb = document.getElementById('confirmb');
    bb.style.color = 'black';

    if (flag == 4) {
        return;
    }
    let conselector = document.getElementById('confirmsel');
    if (conselector.style.display == 'none') {
        conselector.style.display = 'block';
        let adseladj = document.getElementById('addsel');
        if (adseladj.style.display == 'block') {
            adseladj.style.bottom = "5px";
        }
         let py = document.getElementById('paysel');
        if (py.style.display == 'block') {
            py.style.bottom = "5px";
        }
    }
}
function dispdivcor() {
     if (flag == 4) {
        return;
    }
    
    let bb = document.getElementById('confirmb');
    bb.style.color = 'gray';
    var cout = document.getElementById('confirmsel');
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
        let cosel = document.getElementById('confirmsel');
        if (cosel.style.display == 'block') {
            cosel.style.bottom = "10px";
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
        
        let cosel = document.getElementById('confirmsel');
        if (cosel.style.display == 'block') {
            cosel.style.bottom = "5px";
        }
}
function dispp() {
    let addiv = document.getElementById('sad');
    let cdiv = document.getElementById('cid');
    let cons = document.getElementById('consel');
    let pdiv = document.getElementById('pmd');
    let pays = document.getElementById('paysel');
    let ads = document.getElementById('addsel');
    let crd = document.getElementById('crdform');
    let conf = document.getElementById('confirmsel');
    let confirm = document.getElementById('confirmation');
    confirm.style.display = 'none';
    addiv.style.display = 'none';
    crd.style.display = 'block';
    conf.style.display = 'none';
    cdiv.style.display = 'none';
    cons.style.display = 'none';
    pays.style.display = 'block';
    pdiv.style.display = 'block';
    ads.style.display = 'none';
    ads.style.bottom = "5px";
    pays.style.bottom = "5px";
    flag = 3;
    let bb = document.getElementById('pay');
    let b1 = document.getElementById('conb');
    let b2 = document.getElementById('add');
    let b3 = document.getElementById('confirmb');
    bb.style.color = 'black';
    b1.style.color = 'gray';
    b2.style.color = 'gray';
    b3.style.color = 'gray';
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
            conselector.style.bottom = "10px";
        let adseladj = document.getElementById('confirm');
        if (adseladj.style.display == 'block') {
            adseladj.style.bottom = "10px";
        }
        
        let cosel = document.getElementById('confirmsel');
        if (cosel.style.display == 'block') {
            cosel.style.bottom = "15px";
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