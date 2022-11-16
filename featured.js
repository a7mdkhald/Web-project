function show1() {
        var list = document.getElementsByClassName('gen-li')[0];
        if (list.style.display == 'block') {
            list.style.display = 'none';
        } else {
            list.style.display = 'block';
        }
    }
function show2() {
        var list = document.getElementsByClassName('type-li')[0];
        if (list.style.display == 'block') {
            list.style.display = 'none';
        } else {
            list.style.display = 'block';
        }
    }
function show3() {
        var list = document.getElementsByClassName('size-li')[0];
        if (list.style.display == 'block') {
            list.style.display = 'none';
        } else {
            list.style.display = 'block';
        }
}
function show4() {
        var list = document.getElementsByClassName('price-range')[0];
        if (list.style.display == 'block') {
            list.style.display = 'none';
        } else {
            list.style.display = 'block';
        }
}
function range() {
    var x = document.getElementById('range')
    document.getElementById('max').innerHTML = x.value;
    }
