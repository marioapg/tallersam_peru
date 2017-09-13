function addRow(tableID) {

    var table = document.getElementById(tableID);

    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);

    var cell1 = row.insertCell(0);
    var element1 = document.createElement("input");
    element1.type = "checkbox";
    cell1.appendChild(element1);

    var cell2 = row.insertCell(1);
    var element2 = document.createElement("input");
    element2.type = "text";
    cell2.appendChild(element2);

    var cell3 = row.insertCell(2);
    var element3 = document.createElement("input");
    element3.type = "number";
    cell3.appendChild(element3);
}

function deleteRow(tableID) {

    try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        for(var i=0; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if(null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
            }
        }
    }catch(e) {
        alert(e);
    }
}

function showContent(paramElement,paramCheck) {
        element = document.getElementById(paramElement);
        check = document.getElementById(paramCheck);
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }

function mostrar(id) {
    if (id == "none") {
        $("#A").hide();
        $("#B").hide();
        $("#C").hide();
        $("#D").hide();
    }
    
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