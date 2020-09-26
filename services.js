function sortTable() {
    var table = document.getElementById("serviceTable1");
    var rows = table.rows;
    var x, y, i, switching, change;

    switching = true;
    while (switching) {
        switching = false;

        for (i = 1; i < rows.length - 1; i++) {

            change = false;
            x = rows[i].getElementsByTagName("TD")[1];
            y = rows[i + 1].getElementsByTagName("TD")[1];

            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                change = true;
                break;
            }
        }
        if (change) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;

        }
    }

}
sortTable();



function gio() {

    console.log(gios);
}