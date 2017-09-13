function mostrar(id) {
	if (id == "SSANGYONG") {
        $("#A").show();
        $("#B").hide();
        $("#C").hide();
        $("#D").hide();
    }

    if (id == "DFSK") {
        $("#A").show();
        $("#B").hide();
        $("#C").hide();
        $("#D").hide();
    }

    if (id == "SAM") {
        $("#A").show();
        $("#B").hide();
        $("#C").hide();
        $("#D").hide();
    }

    if (id == "PLANCHADOYPINTURA") {
        $("#A").hide();
        $("#B").show();
        $("#C").hide();
        $("#D").hide();
    }

    if (id == "SEGUROS") {
        $("#A").hide();
        $("#B").show();
        $("#C").hide();
        $("#D").hide();
    }

    if (id == "FLOTAS") {
        $("#A").show();
        $("#B").hide();
        $("#C").hide();
        $("#D").hide();
    }

    if (id == "OFERTAS") {
        $("#A").show();
        $("#B").hide();
        $("#C").hide();
        $("#D").hide();
    }

     if (id == "CUPON") {
        $("#A").hide();
        $("#B").hide();
        $("#C").hide();
        $("#D").show();
    }

    if (id == "CUPONPAGADO") {
        $("#A").hide();
        $("#B").hide();
        $("#C").hide();
        $("#D").show();
    }

     if (id == "RECLAMOS") {
        $("#A").hide();
        $("#B").hide();
        $("#C").show();
        $("#D").hide();
    }

     if (id == "REPUESTOS") {
        $("#A").hide();
        $("#B").hide();
        $("#C").show();
        $("#D").hide();
    }
}



function showContentA() {
        element = document.getElementById("contentA");
        check = document.getElementById("preventivo");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }

function showContentB() {
        element = document.getElementById("contentB");
        check = document.getElementById("correctivomotor");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }

