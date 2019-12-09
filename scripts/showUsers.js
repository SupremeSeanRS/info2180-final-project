window.onload = displayUsers;

const addIssueButton = document.getElementById("isub");

function displayUsers(){
    const xhr = new XMLHttpRequest (); 
    const url = 'index.php?get=listUsers';
    xhr.onreadystatechange = doEvent;
    function doEvent() {
        if (xhr.readyState === 4) {
            if(xhr.status === 200) {                
                var response = xhr.responseText;
                document.getElementById("users").innerHTML=response;
                console.log("Successful")
            }
            else {
                console.log("Unsuccessful");
            }
        }
    }
    xhr.open('GET',url,true);
    xhr.send(); 
}

