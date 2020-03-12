
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
            c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    function find(){
        var e = document.getElementById("carMake");
        var carMake = e.options[e.selectedIndex].value;
        console.log(carMake);
        var cname = "carMake";
        var cvalue = carMake;
        var exday =10;
        setCookie(cname,cvalue,exday);
        
        //save cookie Type
        var e = document.getElementById("type");
        var carType = e.options[e.selectedIndex].value;
        console.log(carMake);
        var cname = "type";
        var cvalue = carType;
        var exday =10;
        setCookie(cname,cvalue,exday);

        //set cookie transmission
        var e = document.getElementById("transmission");
        var carTransmission = e.options[e.selectedIndex].value;
        console.log(carTransmission);
        var cname = "transmission";
        var cvalue = carTransmission;
        var exday =10;
        setCookie(cname,cvalue,exday);

        //set cookie Year
        var e = document.getElementById("year");
        var carYear = e.options[e.selectedIndex].value;
        console.log(carTransmission);
        var cname = "year";
        var cvalue = carYear;
        var exday =10;
        setCookie(cname,cvalue,exday);
    }
    //set checked in selected box
    var sel = document.getElementById('carMake');
    var opts = sel.options;
    var carMakeValue = getCookie('carMake');
    for (var opt, j = 0; opt = opts[j]; j++) {
        if (opt.value == carMakeValue) {
            sel.selectedIndex = j;
            break;
        }
    }
    //Set checked in type
    sel = document.getElementById('type');
    opts = sel.options;
    var carTypeValue = getCookie('type');
    for (var opt, j = 0; opt = opts[j]; j++) {
        if (opt.value == carTypeValue) {
            sel.selectedIndex = j;
            break;
        }
    }

    //Set checked in Transmission
    sel = document.getElementById('transmission');
    opts = sel.options;
    var carTransmissionValue = getCookie('transmission');
    for (var opt, j = 0; opt = opts[j]; j++) {
        if (opt.value == carTransmissionValue) {
            sel.selectedIndex = j;
            break;
        }
    }

    //Set checked in year
    sel = document.getElementById('year');
    opts = sel.options;
    var carYearValue = getCookie('year');
    for (var opt, j = 0; opt = opts[j]; j++) {
        if (opt.value == carYearValue) {
            sel.selectedIndex = j;
            break;
        }
    }