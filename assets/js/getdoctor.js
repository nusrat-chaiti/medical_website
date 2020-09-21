function load(){

    var Name = document.getElementById('Name').value;
    var xhttp = new XMLHttpRequest();
    //xhttp.open('GET', 'abc.php?name='+name, true);
    xhttp.open('POST', '../php/getdoctor.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('Name='+Name);

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){

            if(this.responseText != ""){
                document.getElementById('searchdata').innerHTML = this.responseText;
            }else{
                document.getElementById('searchdata').innerHTML = "";
            }
            
        }	
    }
}