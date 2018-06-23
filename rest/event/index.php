<!DOCTYPE html>
<html>
<body>
    <p id="demo"></p>
    <p id="demo2"></p>

    <script>
        var obj, dbParam, xmlhttp;
        obj = { "table":"event", "limit":2 };
        dbParam = JSON.stringify(obj);
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
                 var myObj = JSON.parse(this.responseText);
                document.getElementById("demo2").innerHTML = myObj[0].id;
            }
        };
        xmlhttp.open("GET", "getData.php?x=" + dbParam, true);
        xmlhttp.send();

    </script>

</body>
</html>
