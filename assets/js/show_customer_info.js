var ajax = new XMLHttpRequest();
    ajax.open("GET", "../php/load_info.php", true);
    ajax.send();
 
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            // console.log(data);
 
            var html = "";
            for(var a = 0; a < data.length; a++) {
                var User_Name = data[a].username;
                var Disease_desciption = data[a].Disease_desciption;
                var Condition = data[a].Condition;
                var First_aid = data[a].First_aid;
 
                html += "<tr>";
                    html += "<td>" + User_Name + "</td>";
                    html += "<td>" + Disease_desciption + "</td>";
                    html += "<td>" + Condition + "</td>";
                    html += "<td>" + First_aid + "</td>";
                html += "</tr>";
            }
            document.getElementById("data").innerHTML += html;
        }
    };


    
