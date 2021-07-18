<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SearchMe</title>
</head>
<script>
    function showResult(str){
        if (str.length == 0){
            document.getElementById('livesearch').innerHTML="";
            document.getElementById("livesearch").style.border="0px";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadstatechange=function(){
            if(this.readState==4 && this.status==200){
                document.getElementById("livesearch").innerHTML=this.responseText;
                document.getElementById("livesearch").style.border="1px solid #a5acb2";
            }
        }
        xmlhttp.open("GET","livesearch.php?q="+str,true);
        xmlhttp.send();
    }
</script>
<body>

<form action="" method="get">
    <input type="text" name="" size="30" style="border:2px solid grey;" onkeyup="showResult(this.value)" id="">
    <input type="submit" value="Search">
    <div id="livesearch"></div>
</form>
    
</body>
</html>