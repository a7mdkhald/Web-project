function show1() {
        var list = document.getElementsByClassName('gen-li')[0];
        if (list.style.display == 'block') {
            list.style.display = 'none';
        } else {
            list.style.display = 'block';
        }
}
function filter() {
    for (var i = 0; i < 10; i++) {
        let men = document.getElementsByClassName('men')[i];
        let boys = document.getElementsByClassName('boys')[i];
        let girls = document.getElementsByClassName('girls')[i];
        let women = document.getElementsByClassName('women')[i];
        let uni = document.getElementsByClassName('unisex')[i];


        let mencheck = document.getElementById('mencheck');
        let womencheck = document.getElementById('womencheck');
        let boyscheck = document.getElementById('boyscheck');
        let girlscheck = document.getElementById('girlscheck');
        if (womencheck.checked == true && mencheck.checked == false && boyscheck.checked == false && girlscheck.checked == false ) {
            men.style.display = 'none';
            boys.style.display = 'none';
            girls.style.display = 'none';
            men.parentElement.style.display = 'none';
            boys.parentElement.style.display = 'none';
            girls.parentElement.style.display = 'none';
        }  else if(womencheck.checked == true && mencheck.checked == true && boyscheck.checked == false && girlscheck.checked == false ){
            women.parentElement.style.display = 'block';
            women.style.display = 'block';
            men.parentElement.style.display = 'block';
            men.style.display = 'block';
            boys.style.display = 'none';
            girls.style.display = 'none';
            boys.parentElement.style.display = 'none';
            girls.parentElement.style.display = 'none';
        }  else if(womencheck.checked == false && mencheck.checked == false && boyscheck.checked == false && girlscheck.checked == false ){
            women.parentElement.style.display = 'block';
            women.style.display = 'block';
            boys.style.display = 'block';
            girls.style.display = 'block';
            boys.parentElement.style.display = 'block';
            girls.parentElement.style.display = 'block';
            men.parentElement.style.display = 'block';
            men.style.display = 'block';
        }else if (mencheck.checked == true && womencheck.checked == false && boyscheck.checked == false && girlscheck.checked == false ) {
            women.parentElement.style.display = 'none';
            women.style.display = 'none';
            men.style.display = 'block';
            boys.style.display = 'none';
            girls.style.display = 'none';
            men.parentElement.style.display = 'block';
            boys.parentElement.style.display = 'none';
            girls.parentElement.style.display = 'none';
        }
        else if (mencheck.checked == false && womencheck.checked == false && boyscheck.checked == true && girlscheck.checked == false ) {
            women.parentElement.style.display = 'none';
            women.style.display = 'none';
            men.style.display = 'none';
            boys.style.display = 'block';
            girls.style.display = 'none';
            men.parentElement.style.display = 'none';
            boys.parentElement.style.display = 'block';
            girls.parentElement.style.display = 'none';
        }
        else if (mencheck.checked == true && womencheck.checked == false && boyscheck.checked == true && girlscheck.checked == false ) {
            women.parentElement.style.display = 'none';
            women.style.display = 'none';
            men.style.display = 'block';
            boys.style.display = 'block';
            girls.style.display = 'none';
            men.parentElement.style.display = 'block';
            boys.parentElement.style.display = 'block';
            girls.parentElement.style.display = 'none';
        }else if (mencheck.checked == false && womencheck.checked == true && boyscheck.checked == true && girlscheck.checked == false ) {
            women.parentElement.style.display = 'block';
            women.style.display = 'block';
            men.style.display = 'none';
            boys.style.display = 'block';
            girls.style.display = 'none';
            men.parentElement.style.display = 'none';
            boys.parentElement.style.display = 'block';
            girls.parentElement.style.display = 'none';
        }
        else if (mencheck.checked == true && womencheck.checked == true && boyscheck.checked == true && girlscheck.checked == false ) {
            women.parentElement.style.display = 'block';
            women.style.display = 'block';
            men.style.display = 'block';
            boys.style.display = 'block';
            girls.style.display = 'none';
            men.parentElement.style.display = 'block';
            boys.parentElement.style.display = 'block';
            girls.parentElement.style.display = 'none';
        }else if (mencheck.checked == false && womencheck.checked == false && boyscheck.checked == false && girlscheck.checked == true ) {
            women.parentElement.style.display = 'none';
            women.style.display = 'none';
            men.style.display = 'none';
            boys.style.display = 'none';
            girls.style.display = 'block';
            men.parentElement.style.display = 'none';
            boys.parentElement.style.display = 'none';
            girls.parentElement.style.display = 'block';
        }else if (mencheck.checked == false && womencheck.checked == false && boyscheck.checked == true && girlscheck.checked == true ) {
            women.parentElement.style.display = 'none';
            women.style.display = 'none';
            men.style.display = 'none';
            boys.style.display = 'block';
            girls.style.display = 'block';
            men.parentElement.style.display = 'none';
            boys.parentElement.style.display = 'block';
            girls.parentElement.style.display = 'block';
        }else if (mencheck.checked == true && womencheck.checked == false && boyscheck.checked == false && girlscheck.checked == true ) {
            women.parentElement.style.display = 'none';
            women.style.display = 'none';
            men.style.display = 'block';
            boys.style.display = 'none';
            girls.style.display = 'block';
            men.parentElement.style.display = 'block';
            boys.parentElement.style.display = 'none';
            girls.parentElement.style.display = 'block';
        }else if (mencheck.checked == false && womencheck.checked == true && boyscheck.checked == false && girlscheck.checked == true ) {
            women.parentElement.style.display = 'block';
            women.style.display = 'block';
            men.style.display = 'none';
            boys.style.display = 'none';
            girls.style.display = 'block';
            men.parentElement.style.display = 'none';
            boys.parentElement.style.display = 'none';
            girls.parentElement.style.display = 'block';
        }else if (mencheck.checked == true && womencheck.checked == true && boyscheck.checked == true && girlscheck.checked == true ) {
            women.parentElement.style.display = 'block';
            women.style.display = 'block';
            men.style.display = 'block';
            boys.style.display = 'block';
            girls.style.display = 'block';
            men.parentElement.style.display = 'block';
            boys.parentElement.style.display = 'block';
            girls.parentElement.style.display = 'block';
        }
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
