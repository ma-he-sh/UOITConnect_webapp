//Calender page actions
function display_new_card() {
    //alert("Helo");

    var insertCARD;
    var insertDIV = document.getElementById('insertDIV');

    /*insertCARD = '<div class="dash-sch-insert-card transition"> <div class = "dash-flex-input-container"><input type = "text" class ="dash-sch-input-txt" placeholder = "| Enter Course ID"><button type = "submit" class = "dash-sch-submit-btn" onclick = "display_new_card();"> <i class = "fa fa-plus-circle fa-2x" aria-hidden = "true"></i></button></div><div class = "dash-sch-header-wrapper"><green-txt>Course submitted successfully</green-txt></div></div>';*/

    insertDIV.innerHTML = 'Hello';

    var creNode = document.createElement(insertCARD);
    insertDIV.appendChild(creNode);

}

function displayDIV(divID) {
    document.getElementById(divID).style.display = '';
}



//Onload action
function onloadAction() {
    displayF();

    //Search area switching memory
    var activeTabSearch = localStorage.getItem("active-frnd-tab");
    if (activeTabSearch == "friends-wrapper") {
        //alert('supp-info');
        displayF();
    } else if (activeTabSearch == "frndsadd-wrapper") {
        //alert('supp-area');
        displayAF()
    } else {
        //alert('none');
        displayF();
    }

    function displayF() {
        document.getElementById('friends-wrapper').style.display = "block";
        document.getElementById('frndsadd-wrapper').style.display = "none";
        document.getElementById('disp_frnd_search').style.display = "none";
    }

    function displayAF() {
        document.getElementById('frndsadd-wrapper').style.display = "block";
        document.getElementById('disp_frnd_search').style.display = "block";
        document.getElementById('friends-wrapper').style.display = "none";
    }

}


function displayFrnds() {
    document.getElementById('friends-wrapper').style.display = "block";
    document.getElementById('frndsadd-wrapper').style.display = "none";
    document.getElementById('disp_frnd_search').style.display = "none";
    localStorage.setItem("active-frnd-tab", 'friends-wrapper');
}

function displayAddF() {
    document.getElementById('frndsadd-wrapper').style.display = "block";
    document.getElementById('disp_frnd_search').style.display = "block";
    document.getElementById('friends-wrapper').style.display = "none";
    localStorage.setItem("active-frnd-tab", 'frndsadd-wrapper');
}

//Exapand the more content
function more(show) {
    document.getElementById(show).style.display = "block";
}

function less(hide) {
    document.getElementById(hide).style.display = "none";
}