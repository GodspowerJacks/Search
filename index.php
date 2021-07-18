<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
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

<form action="" method="get" class="pt-4 mt-5 p-4">
    <h1 class="text-center pt-4 text-bold">SEARCH ME</h1>
    <div class="form-group col-md-6 col-12 m-auto p-2">
        <input type="text" name="" size="30"placeholder="Search Me......" class="form-control col-md-6 col-12" onkeyup="showResult(this.value)" id="">
        <input type="submit" class="btn btn-success col-md-12 pt-2 mt-2 col-12 m-auto" value="Search">
    </div>
    
    <div id="livesearch" class="m-auto col-md-6"></div>
</form>
    
</body>
</html>