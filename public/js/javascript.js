/**
 * Created by micha on 3/14/2017.
 */
$(document).ready(function()
    {
        $("#myTable").tablesorter();
    }
);
window.onload = showRedAndBlue;
function showRedAndBlue(){
    Materialize.showStaggeredList('#staggered-test');
    Materialize.showStaggeredList('#staggered-tezt');
}
if($('h3').is('.editorz')){
    CKEDITOR.replace( 'editor1' );
}
document.getElementById("search").onkeyup = function() {searchTable()};

function passWord() {
    var testV = 1;
    var pass1 = prompt('Please Enter Your Password',' ');
    while (testV < 3) {
        if (!pass1)
            history.go(-1);
        if (pass1.toLowerCase() == "letmein") {
            break;
        }
        testV+=1;
        var pass1 =
            prompt('Access Denied - Password Incorrect, Please Try Again.','Password');
    }
    if (pass1.toLowerCase()!="password" & testV ==3)
        history.go(-1);
    return " ";
}
function searchTable() {
    var input, filter, table, tr, td, i;
    var items = 0;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                items++;
            } else {
                tr[i].style.display = "none";
            }
        }
    }
    // For search Purposes
    var numOfVisibleRows = $('tr:visible').length - 494;
    console.log(numOfVisibleRows);
    console.log('Hey');
    if(numOfVisibleRows <= 5)
    {
        document.getElementById("footer").className = "footerBot"
        console.log('Hey');
    }
    else
    {
        document.getElementById("footer").className = "footerDynamic"
    }

}

