function allIssues() {
    var xmlhr = new XMLHttpRequest();
    var link = 'info2180.php?get=issues';
    xmlhr.onreadystatechange = onEvent;
    function onEvent() {
        if (xmlhr.readyState === 4) {
            if (xmlhr.status === 200) {
                var rsp = xmlhr.responseText;
                document.getElementById("table").innerHTML = rsp;
                console.log("Successful Connection")
            }
            else {
                console.log("Connection was unsuccessful");
            }
        }
    }
    xmlhr.open('GET', link, true);
    xmlhr.send();
}

function openStatus() {
    var xmlhr = new XMLHttpRequest();
    var link = 'info2180.php?get=status';
    xmlhr.onreadystatechange = onEvent;
    function onEvent() {
        if (xmlhr.readyState === 4) {
            if (xmlhr.status === 200) {
                var rsp = xmlhr.responseText;
                document.getElementById("table").innerHTML = rsp;
                console.log("Successful Connection")
            }
            else {
                console.log("Connection was unsuccessful");
            }
        }
    }
    xmlhr.open('GET', link, true);
    xmlhr.send();
}

function myTickets() {
    var xmlhr = new XMLHttpRequest();
    var link = 'info2180.php?get=tickets';
    xmlhr.onreadystatechange = onEvent;
    function onEvent() {
        if (xmlhr.readyState === 4) {
            if (xmlhr.status === 200) {
                var rsp = xmlhr.responseText;
                document.getElementById("table").innerHTML = rsp;
                console.log("Successful Connection")
            }
            else {
                console.log("Connection was unsuccessful");
            }
        }
    }
    xmlhr.open('GET', link, true);
    xmlhr.send();
}