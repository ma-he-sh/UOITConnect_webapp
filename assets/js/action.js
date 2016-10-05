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
