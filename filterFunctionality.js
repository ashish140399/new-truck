
function myMap() {
    let mapProp= {
        center:new google.maps.LatLng(41.850033, -87.6500523),
        zoom:5,
    };
    let map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

function setLabelVal() {
    let lbl = document.getElementById("distanceValue");
    let slider = document.getElementById("distanceByMiles");

    let val = slider.value;
    lbl.innerText = val.toString();

}

function populateChkBoxes() {
    let types = ["Mexican", "Indian", "American", "Chinese", "Italian", "Russian", "Canadian", "Japanese", "Thai", "Arabic", "Brazilian", "Ethiopian"];
    let pos = 0;
    let chkBoxContainer = document.getElementById("chkBoxes");

    for (let i =0; i < 3; i++)
    {
        let row = chkBoxContainer.insertRow(i);
        for (let j = 0; j < 4; j++)
        {
            let divE = document.createElement("DIV");
            let chkbox = document.createElement("INPUT");
            let lbl = document.createElement("LABEL");
            lbl.setAttribute("class", "cType");
            lbl.innerText = types[pos];
            pos+=1;
            chkbox.setAttribute("type", "checkbox");
            divE.appendChild(chkbox);
            divE.appendChild(lbl);

            let cell = row.insertCell(j);
            cell.appendChild(divE);
        }
    }
}

function populatePrice() {
    let prc = document.getElementById("priceVals");
    let row = prc.insertRow(0);
    let csh = "$";
    for (let j = 0; j < 4; j++)
    {
        let divE = document.createElement("DIV");
        let chkbox = document.createElement("INPUT");
        let lbl = document.createElement("LABEL");
        lbl.setAttribute("class", "cType");
        for (let i = 0; i < j+1; i++){
            lbl.innerText += csh;
        }
        chkbox.setAttribute("type", "checkbox");
        divE.appendChild(chkbox);
        divE.appendChild(lbl);

        let cell = row.insertCell(j);
        cell.appendChild(divE);
    }
}

function getCuisnes() {
    let cuisines = [];
    let tbl = document.getElementById("chkBoxes");
    for (let x of tbl.rows) {
        for (let y of x.cells) {
            let lbl = y.childNodes.item(0).childNodes.item(1).innerText;
            if (y.childNodes.item(0).childNodes.item(0).checked) {
                cuisines.push(lbl);
            }
        }
    }
    return cuisines;
}

function getPrices() {
    let prices = [];
    let pVal = document.getElementById("priceVals");
    for (x of pVal.rows[0].cells) {
        let lbl = x.childNodes.item(0).childNodes.item(1).innerText;
        if (x.childNodes.item(0).childNodes.item(0).checked) {
            prices.push(lbl);
        }
    }
    return prices;
}

function getDistance(currentLat, currentLong, restaurantLat, restaurantLong){
    var radlat1 = Math.PI * currentLat/180;
    var radlat2 = Math.PI * restaurantLat/180;
    var theta = currentLong-restaurantLong;
    var radtheta = Math.PI * theta/180;
    var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
    if (dist > 1) {
        dist = 1;
    }
    dist = Math.acos(dist);
    dist = dist * 180/Math.PI;
    dist = dist * 60 * 1.1515;
    return dist;
}

let getCurrPos = function (options) {
    return new Promise(function (resolve, reject) {
        navigator.geolocation.getCurrentPosition(resolve, reject, options);
    });
}


function getChecks(btn) {
    //gets all the values for the check boxes
    let distVal = document.getElementById("distanceByMiles").value;
    let cuisine = getCuisnes();
    let price = getPrices();
    let res = document.getElementById("results");
    let cat = document.getElementById("categories");
    console.log(distVal);
    if (cat.style.display == "block") {
        cat.style.display = "none";
        res.style.display = "block";
    }
    else {
        cat.style.display = "block";
        res.style.display = "none";
    }

    let lst = document.createElement("ul");
    console.log(Restaurants);
    for (let r of Restaurants) {
        let lstItem = document.createElement("li");
        let restCont = document.createElement("div");
        restCont.setAttribute("class", "resListElem");
        let lbl = document.createElement("label");
        let cRes = false;
        for (let c of cuisine){
            if (r.cuisine.includes(c)){
                cRes = true;
                break;
            }
        }
        let pVal = false;
        for (let p of price){
            if (r.price == p.length){
                pVal = true;
                break;
            }
        }

        if (pVal && cRes){
            lbl.innerText = r.name;
            restCont.appendChild(lbl);
            lstItem.appendChild(restCont);
            lst.appendChild(lstItem);
        }

    }
    res.appendChild(lst);
}
