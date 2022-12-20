function show1() {
        var list = document.getElementsByClassName('gen-li')[0];
        if (list.style.display == 'block') {
            list.style.display = 'none';
        } else {
            list.style.display = 'block';
        }
}
function filter() {
    for (var i = 0; i < 20; i++) {
        let men = document.getElementsByClassName('men')[i];
        let boys = document.getElementsByClassName('boys')[i];
        let girls = document.getElementsByClassName('girls')[i];
        let women = document.getElementsByClassName('women')[i];
        
        
        var filter = document.getElementById('filtersec');
        var prod = document.getElementsByClassName('products')[0];
        var uni = document.getElementById('unisex');
        let mencheck = document.getElementById('mencheck');
        let womencheck = document.getElementById('womencheck');
        let boyscheck = document.getElementById('boyscheck');
        let girlscheck = document.getElementById('girlscheck');
        if (womencheck.checked == true && mencheck.checked == false && boyscheck.checked == false && girlscheck.checked == false ) {
            women.parentElement.style.display = 'block';
            women.style.display = 'block';            men.style.display = 'none';
            boys.style.display = 'none';
            girls.style.display = 'none';
            men.parentElement.style.display = 'none';
            boys.parentElement.style.display = 'none';
            girls.parentElement.style.display = 'none';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
            // women.parentElement.style.position = 'absolute';
            // women.parentElement.style.left = '12px';
            /*prod.style.display = 'none';
            filter.style.display = 'block';
            const newdiv = document.createElement('div');
            newdiv.appendChild(women);
            newdiv.style.height = '200px';
            newdiv.style.width = '20px';
            newdiv.style.position = 'relative';
            newdiv.style.left = '200px';
            document.body.insertBefore(newdiv, filter); 
            */
        }  else if(womencheck.checked == true && mencheck.checked == true && boyscheck.checked == false && girlscheck.checked == false ){
            women.parentElement.style.display = 'block';
            women.style.display = 'block';
            men.parentElement.style.display = 'block';
            men.style.display = 'block';
            boys.style.display = 'none';
            girls.style.display = 'none';
            boys.parentElement.style.display = 'none';
            girls.parentElement.style.display = 'none';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
        }
          else if(womencheck.checked == true && mencheck.checked == true && boyscheck.checked == false && girlscheck.checked == true ){
            women.parentElement.style.display = 'block';
            women.style.display = 'block';
            men.parentElement.style.display = 'block';
            men.style.display = 'block';
            boys.style.display = 'none';
            girls.style.display = 'block';
            boys.parentElement.style.display = 'none';
            girls.parentElement.style.display = 'block';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
        }else if (womencheck.checked == false && mencheck.checked == false && boyscheck.checked == false && girlscheck.checked == false) {
            women.parentElement.style.display = 'block';
            women.style.display = 'block';
            boys.style.display = 'block';
            girls.style.display = 'block';
            boys.parentElement.style.display = 'block';
            girls.parentElement.style.display = 'block';
            men.parentElement.style.display = 'block';
            men.style.display = 'block';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
        }else if (mencheck.checked == true && womencheck.checked == false && boyscheck.checked == false && girlscheck.checked == false ) {
            women.parentElement.style.display = 'none';
            women.style.display = 'none';
            men.style.display = 'block';
            boys.style.display = 'none';
            girls.style.display = 'none';
            men.parentElement.style.display = 'block';
            boys.parentElement.style.display = 'none';
            girls.parentElement.style.display = 'none';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
        }
        else if (mencheck.checked == false && womencheck.checked == false && boyscheck.checked == true && girlscheck.checked == false ) {
            women.style.display = 'none';
            women.parentElement.style.display = 'none';
            boys.style.display = 'block';
            boys.parentElement.style.display = 'block';
            girls.style.display = 'none';
            girls.parentElement.style.display = 'none';
            men.style.display = 'none';
            men.parentElement.style.display = 'none';
            uni.style.display = 'none';
            uni.parentElement.style.display = 'none';
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
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
        }else if (mencheck.checked == false && womencheck.checked == true && boyscheck.checked == true && girlscheck.checked == false ) {
            women.parentElement.style.display = 'block';
            women.style.display = 'block';
            men.style.display = 'none';
            boys.style.display = 'block';
            girls.style.display = 'none';
            men.parentElement.style.display = 'none';
            boys.parentElement.style.display = 'block';
            girls.parentElement.style.display = 'none';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
        }
        else if (mencheck.checked == false && womencheck.checked == true && boyscheck.checked == true && girlscheck.checked == true ) {
            women.parentElement.style.display = 'block';
            women.style.display = 'block';
            men.style.display = 'none';
            boys.style.display = 'block';
            girls.style.display = 'block';
            girls.parentElement.style.display = 'block';
            men.parentElement.style.display = 'none';
            boys.parentElement.style.display = 'block';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
        }
        else if (mencheck.checked == true && womencheck.checked == false && boyscheck.checked == true && girlscheck.checked == true ) {
            men.parentElement.style.display = 'block';
            men.style.display = 'block';
            women.style.display = 'none';
            boys.style.display = 'block';
            girls.style.display = 'block';
            girls.parentElement.style.display = 'block';
            women.parentElement.style.display = 'none';
            boys.parentElement.style.display = 'block';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
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
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
        }else if (mencheck.checked == false && womencheck.checked == false && boyscheck.checked == false && girlscheck.checked == true ) {
            women.parentElement.style.display = 'none';
            women.style.display = 'none';
            men.style.display = 'none';
            boys.style.display = 'none';
            girls.style.display = 'block';
            men.parentElement.style.display = 'none';
            boys.parentElement.style.display = 'none';
            girls.parentElement.style.display = 'block';
            uni.style.display = 'none';
            uni.parentElement.style.display = 'none';
        }else if (mencheck.checked == false && womencheck.checked == false && boyscheck.checked == true && girlscheck.checked == true ) {
            women.parentElement.style.display = 'none';
            women.style.display = 'none';
            men.style.display = 'none';
            boys.style.display = 'block';
            girls.style.display = 'block';
            men.parentElement.style.display = 'none';
            boys.parentElement.style.display = 'block';
            girls.parentElement.style.display = 'block';
            uni.style.display = 'none';
            uni.parentElement.style.display = 'none';
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
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
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
function filter2() {
    for (var i = 0; i < 10; i++) {
        let tops = document.getElementsByClassName('top')[i];
        let bottoms = document.getElementById('bottoms')[i];
        let legwear = document.getElementsByClassName('legwear')[i];

        let topcheck = document.getElementById('topcheck');
        let bottomcheck = document.getElementById('bottomcheck');
        let legcheck = document.getElementById('legcheck');
        if (topcheck.checked == true && bottomcheck.checked == false && legcheck.checked == false)  {
            top.style.display = 'block';
            bottoms.style.display = 'none';
            legwear.style.display = 'none';
            legwear.parentElement.style.display = 'none';
            legwear.childElement
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
