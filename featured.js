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
} function filter2() {
    for (var i = 0; i < 20; i++) {
        let top = document.getElementsByClassName('top')[i];
        let bottoms = document.getElementsByClassName('bottoms')[i];
        let legwear = document.getElementsByClassName('legwear')[i];
        let accessory = document.getElementsByClassName('accessory')[i];
        let uni = document.getElementById('unisex');
        let set = document.getElementById('set');
        
        let topcheck = document.getElementById('topcheck');
        let bottomcheck = document.getElementById('bottomcheck');
        let legcheck = document.getElementById('legcheck');
        let acccheck = document.getElementById('acccheck');
        if (topcheck.checked == false && bottomcheck.checked == false && legcheck.checked == false && acccheck.checked == false) {
            legwear.style.display = 'block';
            legwear.parentElement.style.display = 'block';
            top.style.display = 'block';
            top.parentElement.style.display = 'block';
            bottoms.style.display = 'block';
            bottoms.parentElement.style.display = 'block';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
            set.style.display = 'block'
            set.parentElement.style.display = 'block';
        }
        if (topcheck.checked == true && bottomcheck.checked == false && legcheck.checked == false) {
            legwear.style.display = 'none';
            legwear.parentElement.style.display = 'none';
            bottoms.style.display = 'none';
            bottoms.parentElement.style.display = 'none';
            top.style.display = 'block';
            top.parentElement.style.display = 'block';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
            set.style.display = 'block'
            set.parentElement.style.display = 'block';
        }
        if (topcheck.checked == true && bottomcheck.checked == true && legcheck.checked == false) {
            legwear.style.display = 'none';
            legwear.parentElement.style.display = 'none';
            bottoms.style.display = 'block';
            bottoms.parentElement.style.display = 'block';
            top.style.display = 'block';
            top.parentElement.style.display = 'block';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
            set.style.display = 'block'
            set.parentElement.style.display = 'block';
        }
        if (topcheck.checked == true && bottomcheck.checked == false && legcheck.checked == true) {
            legwear.style.display = 'block';
            legwear.parentElement.style.display = 'block';
            bottoms.style.display = 'none';
            bottoms.parentElement.style.display = 'none';
            top.style.display = 'block';
            top.parentElement.style.display = 'block';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
            set.style.display = 'block'
            set.parentElement.style.display = 'block';
        }
        if (topcheck.checked == true && bottomcheck.checked == true && legcheck.checked == true) {
            legwear.style.display = 'block';
            legwear.parentElement.style.display = 'block';
            top.style.display = 'block';
            top.parentElement.style.display = 'block';
            bottoms.style.display = 'block';
            bottoms.parentElement.style.display = 'block';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
            set.style.display = 'block'
            set.parentElement.style.display = 'block';
        }
        if (topcheck.checked == false && bottomcheck.checked == true && legcheck.checked == false) {
            legwear.style.display = 'none';
            legwear.parentElement.style.display = 'none';
            top.style.display = 'none';
            top.parentElement.style.display = 'none';
            bottoms.style.display = 'block';
            bottoms.parentElement.style.display = 'block';
            uni.style.display = 'none';
            uni.parentElement.style.display = 'none';
            set.style.display = 'block'
            set.parentElement.style.display = 'block';
        }
        if (topcheck.checked == false && bottomcheck.checked == true && legcheck.checked == true) {
            legwear.style.display = 'block';
            legwear.parentElement.style.display = 'block';
            top.style.display = 'none';
            top.parentElement.style.display = 'none';
            bottoms.style.display = 'block';
            bottoms.parentElement.style.display = 'block';
            uni.style.display = 'none';
            uni.parentElement.style.display = 'none';
            set.style.display = 'block'
            set.parentElement.style.display = 'block';
        }
        if (topcheck.checked == false && bottomcheck.checked == false && legcheck.checked == true) {
            legwear.style.display = 'block';
            legwear.parentElement.style.display = 'block';
            top.style.display = 'none';
            top.parentElement.style.display = 'none';
            bottoms.style.display = 'none';
            bottoms.parentElement.style.display = 'none';
            uni.style.display = 'none';
            uni.parentElement.style.display = 'none';
            set.style.display = 'none'
            set.parentElement.style.display = 'none';
        }
        if (topcheck.checked == true && bottomcheck.checked == true && legcheck.checked == true && acccheck.checked == true) {
            legwear.style.display = 'block';
            legwear.parentElement.style.display = 'block';
            top.style.display = 'block';
            top.parentElement.style.display = 'block';
            bottoms.style.display = 'block';
            bottoms.parentElement.style.display = 'block';
            uni.style.display = 'block';
            uni.parentElement.style.display = 'block';
            set.style.display = 'block'
            set.parentElement.style.display = 'block';
        }
    }
}function filter3() {
    for (var i = 0; i < 20; i++) {
        let s = document.getElementsByClassName('s')[i];
        let m = document.getElementsByClassName('m')[i];
        let l = document.getElementsByClassName('l')[i];
        let scheck = document.getElementById('scheck');
        let mcheck = document.getElementById('mcheck');
        let lcheck = document.getElementById('lcheck');
        let xlcheck = document.getElementById('xlcheck');
        if (scheck.checked == false && mcheck.checked == false && lcheck.checked == false && xlcheck.checked == false) {
            l.style.display = 'block';
            l.parentElement.style.display = 'block';
            m.style.display = 'block';
            m.parentElement.style.display = 'block';
            s.style.display = 'block';
            s.parentElement.style.display = 'block';
                        document.getElementById('pr8').style.display = 'block';
            document.getElementById('pr10').style.display = 'block';
            }
        if (scheck.checked == true && mcheck.checked == false && lcheck.checked == false) {
            l.style.display = 'none';
            l.parentElement.style.display = 'none';
            m.style.display = 'none';
            m.parentElement.style.display = 'none';
            s.style.display = 'block';
            s.parentElement.style.display = 'block';
            }
        if (scheck.checked == true && mcheck.checked == true && lcheck.checked == false) {
            l.style.display = 'none';
            l.parentElement.style.display = 'none';
            m.style.display = 'block';
            m.parentElement.style.display = 'block';
            s.style.display = 'block';
            s.parentElement.style.display = 'block';
            }
        if (scheck.checked == true && mcheck.checked == false && lcheck.checked == true) {
            l.style.display = 'block';
            l.parentElement.style.display = 'block';
            m.style.display = 'none';
            m.parentElement.style.display = 'none';
            s.style.display = 'block';
            s.parentElement.style.display = 'block';
            }
        if (scheck.checked == true && mcheck.checked == true && lcheck.checked == true) {
            l.style.display = 'block';
            l.parentElement.style.display = 'block';
            s.style.display = 'block';
            s.parentElement.style.display = 'block';
            m.style.display = 'block';
            m.parentElement.style.display = 'block';
                        document.getElementById('pr8').style.display = 'block';
            document.getElementById('pr10').style.display = 'block';
            }
        if (scheck.checked == false && mcheck.checked == true && lcheck.checked == false) {
            l.style.display = 'none';
            l.parentElement.style.display = 'none';
            s.style.display = 'none';
            s.parentElement.style.display = 'none';
            document.getElementById('pr8').style.display = 'none';
            document.getElementById('pr10').style.display = 'none';
            m.style.display = 'block';
            m.parentElement.style.display = 'block';
            }
        if (topcheck.checked == false && mcheck.checked == true && lcheck.checked == true) {
            l.style.display = 'block';
            l.parentElement.style.display = 'block';
            s.style.display = 'none';
            s.parentElement.style.display = 'none';
            m.style.display = 'block';
            m.parentElement.style.display = 'block';
            }
        if (scheck.checked == false && mcheck.checked == false && lcheck.checked == true) {
            m.style.display = 'none';
            m.parentElement.style.display = 'none';
            l.style.display = 'block';
            l.parentElement.style.display = 'block';
            s.style.display = 'none';
            s.parentElement.style.display = 'none';
                        document.getElementById('pr8').style.display = 'none';
            document.getElementById('pr10').style.display = 'none';
            }
        if (scheck.checked == true && mcheck.checked == true && lcheck.checked == true && xlcheck.checked == true) {
            l.style.display = 'block';
            l.parentElement.style.display = 'block';
            s.style.display = 'block';
            s.parentElement.style.display = 'block';
            m.style.display = 'block';
            m.parentElement.style.display = 'block';
            }
    }
}





























/*function filter2() {
    
    for (var i = 0; i < 20; i++) {
        let tops = document.getElementsByClassName('top')[i];
        let bottoms = document.getElementsByClassName('bottoms')[i];
        let legwear = document.getElementsByClassName('legwear')[i];
        let accessory = document.getElementsByClassName('accessories')[i];
        let set = document.getElementsByClassName('set')[i];
        let topcheck = document.getElementById('topcheck');
        let bottomcheck = document.getElementById('bottomcheck');
        let legcheck = document.getElementById('legcheck');
        let acccheck = document.getElementById('acccheck');
        if (topcheck.checked == false && bottomcheck.checked == false && legcheck.checked == false && acccheck.checked == false) {
            for (let j = 0; j < 10; j++){
                bottoms.style.display = 'block';
                legwear.style.display = 'block';
                let leg = document.getElementsByClassName('legwear')[j +1];
                let leg2 = document.getElementsByClassName('legwear')[j +2];
                let bot = document.getElementsByClassName('bottoms')[j + 1];
                bot.style.display = 'block';
                leg.style.display = 'block';
                leg2.style.display = 'block';
                set.style.display = 'block';    
             }
            
            tops.style.display = 'block';
            accessory.style.display = 'block';
        }
        if (topcheck.checked == true && bottomcheck.checked == false && legcheck.checked == false && acccheck.checked == false) {
            for (let j = 0; j < 10; j++){
                bottoms.style.display = 'none';
                legwear.style.display = 'none';
                let leg = document.getElementsByClassName('legwear')[j +1];
                let leg2 = document.getElementsByClassName('legwear')[j +2];
                let bot = document.getElementsByClassName('bottoms')[j + 1];
                bot.style.display = 'none';
                leg.style.display = 'none';
                leg2.style.display = 'none';
                
             }
            tops.style.display = 'block';
            accessory.style.display = 'none';
            set.style.display = 'block';
        }
        if (topcheck.checked == true && bottomcheck.checked == true && legcheck.checked == false && acccheck.checked == false)  {
            bottoms.style.display = 'block';
            legwear.style.display = 'none';
            tops.style.display = 'block';
            accessory.style.display = 'none';
            set.style.display = 'block';
        }
        if (topcheck.checked == true && bottomcheck.checked == false && legcheck.checked == true && acccheck.checked == false)  {
            bottoms.style.display = 'none';
            legwear.style.display = 'block';
            tops.style.display = 'block';
            accessory.style.display = 'none';
            set.style.display = 'block';
        }
        if (topcheck.checked == true && bottomcheck.checked == false && legcheck.checked == false && acccheck.checked == true)  {
            bottoms.style.display = 'none';
            legwear.style.display = 'none';
            tops.style.display = 'block';
            accessory.style.display = 'block';
            set.style.display = 'block';
        }
        if (topcheck.checked == true && bottomcheck.checked == true && legcheck.checked == true && acccheck.checked == false) {
for (let j = 0; j < 10; j++){
                bottoms.style.display = 'block';
                legwear.style.display = 'block';
                let leg = document.getElementsByClassName('legwear')[j +1];
                let leg2 = document.getElementsByClassName('legwear')[j +2];
                let bot = document.getElementsByClassName('bottoms')[j + 1];
                bot.style.display = 'block';
                leg.style.display = 'block';
                leg2.style.display = 'block';
                
             }
            tops.style.display = 'block';
            accessory.style.display = 'none';
            set.style.display = 'block';
        }   
        if (topcheck.checked == false && bottomcheck.checked == true && legcheck.checked == false && acccheck.checked == false) {
            bottoms.style.display = 'block';
            legwear.style.display = 'none';
            tops.style.display = 'none';
            accessory.style.display = 'none';
            set.style.display = 'block';
        }
        if (topcheck.checked == false && bottomcheck.checked == true && legcheck.checked == true && acccheck.checked == false) {
            bottoms.style.display = 'block';
            legwear.style.display = 'block';
            tops.style.display = 'none';
            accessory.style.display = 'none';
            set.style.display = 'block';
        }
        if (topcheck.checked == false && bottomcheck.checked == true && legcheck.checked == false && acccheck.checked == true) {
            bottoms.style.display = 'block';
            legwear.style.display = 'none';
            tops.style.display = 'none';
            accessory.style.display = 'block';
            set.style.display = 'block';
        }
        if (topcheck.checked == false && bottomcheck.checked == true && legcheck.checked == true && acccheck.checked == true) {
            bottoms.style.display = 'block';
            legwear.style.display = 'block';
            tops.style.display = 'none';
            accessory.style.display = 'block';
            set.style.display = 'block';
        }
        if (topcheck.checked == false && bottomcheck.checked == false && legcheck.checked == true && acccheck.checked == false) {
            set.style.display = 'none';
            bottoms.style.display = 'none';
            legwear.style.display = 'block';
            tops.style.display = 'none';
            accessory.style.display = 'none';
        }
        if (topcheck.checked == false && bottomcheck.checked == false && legcheck.checked == true && acccheck.checked == true) {
            set.style.display = 'none';
            bottoms.style.display = 'none';
            legwear.style.display = 'block';
            tops.style.display = 'none';
            accessory.style.display = 'block';
        }if (topcheck.checked == true && bottomcheck.checked == false && legcheck.checked == true && acccheck.checked == false) {
            bottoms.style.display = 'none';
            legwear.style.display = 'block';
            tops.style.display = 'block';
            accessory.style.display = 'none';
            set.style.display = 'block';
        }if (topcheck.checked == false && bottomcheck.checked == true && legcheck.checked == true && acccheck.checked == false) {
            bottoms.style.display = 'block';
            legwear.style.display = 'block';
            tops.style.display = 'none';
            accessory.style.display = 'none';
            set.style.display = 'block';
        }if (topcheck.checked == false && bottomcheck.checked == true && legcheck.checked == true && acccheck.checked == true) {
            bottoms.style.display = 'block';
            legwear.style.display = 'block';
            tops.style.display = 'none';
            accessory.style.display = 'block';
            set.style.display = 'block';
        }if (topcheck.checked == false && bottomcheck.checked == false && legcheck.checked == true && acccheck.checked == false) {
            bottoms.style.display = 'none';
            legwear.style.display = 'block';
            tops.style.display = 'none';
            accessory.style.display = 'none';
            set.style.display = 'none';
        }
        if (topcheck.checked == true && bottomcheck.checked == true && legcheck.checked == true && acccheck.checked == true) {
            bottoms.style.display = 'block';
            legwear.style.display = 'block';
            tops.style.display = 'block';
            accessory.style.display = 'block';
            set.style.display = 'block';
        }
        
}
}
*/
/*function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
   for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

// Show filtered elements
function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}*/
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
