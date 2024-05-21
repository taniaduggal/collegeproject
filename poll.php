<!doctype>
<html>


<head>

    <script>


        function go()
        {

            var val=0;
            if(document.getElementById("rd1").checked==true)
            {
                val=1;
            }
            else if(document.getElementById("rd2").checked==true)
            {
                val=2;
            }
            else if(document.getElementById("rd3").checked==true)
            {
                val=3;
            }


            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp1").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "getpoll.php?q=" + val, true);
            xmlhttp.send();




        }



    </script>




</head>

<body>
<h3>Did you like our website</h3>
Yes<input type="radio" onchange="go()" id="rd1" value="1" name="poll1" ><br>
No <input type="radio" onchange="go()" id="rd2" value="2" name="poll1"><br>
Can't Say<input type="radio" onchange="go()" id="rd3" value="3" name="poll1"><br>
<span id="sp1"></span>
</body>

</html>

