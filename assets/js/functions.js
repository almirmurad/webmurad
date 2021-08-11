/* menú mobile */

function show() {
    let x = document.getElementById("navMobile");
    if (x.style.display === "flex") {
        x.style.display = "none";
        clearTimes();
        insertBars();

    } else {
        x.style.display = "flex";
        clearBars();
        insertTimes();
    }


}

function clearBars() {
    document.getElementById("iconNav").classList.remove("fas");
    document.getElementById("iconNav").classList.remove("fa-bars");
    document.getElementById("iconNav").classList.remove("fa-2x");
}

function insertTimes() {
    document.getElementById("iconNav").classList.add("fas");
    document.getElementById("iconNav").classList.add("fa-times");
    document.getElementById("iconNav").classList.add("fa-2x");
}

function clearTimes() {
    document.getElementById("iconNav").classList.remove("fas");
    document.getElementById("iconNav").classList.remove("fa-times");
    document.getElementById("iconNav").classList.remove("fa-2x");
}
function insertBars() {
    document.getElementById("iconNav").classList.add("fas");
    document.getElementById("iconNav").classList.add("fa-bars");
    document.getElementById("iconNav").classList.add("fa-2x");
}

/* whatsapp */




function showMsgWapp() {
    let z = document.getElementById("wapp");
    if (z.style.display === "flex") {
        z.style.display = "none";
    } else {
        z.style.display = "flex";

    }

}
function hideMsgWapp() {
    let z = document.getElementById("wapp");
    if (z.style.display === "none") {
        z.style.display = "flex";
    } else {
        z.style.display = "none";

    }

}