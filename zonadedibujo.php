<script src="jquery-1.11.0.min.js"></script>
<style>
.btnpx{
    display: inline-block;
    padding:5px 10px 6px;
    text-decoration: none;
    font-size: 30px;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius: 4px;
    overflow: visible;
    background: white;
    color:white;
}
</style>
<form action="" method="POST" name="form">
    <table align="center" cellspacing="0" cellpadding="0" border-round="1">
        <tr>
        <td><input type="button" class="btnpx" id="f0c0" name="f0c0" value="0" onClick="cambiar('f0c0');"></td>
        <td><input type="button" class="btnpx" id="f0c1" name="f0c1" value="0" onClick="cambiar('f0c1');"></td>
        <td><input type="button" class="btnpx" id="f0c2" name="f0c2" value="0" onClick="cambiar('f0c2');"></td>
        <td><input type="button" class="btnpx" id="f0c3" name="f0c3" value="0" onClick="cambiar('f0c3');"></td>
        <td><input type="button" class="btnpx" id="f0c4" name="f0c4" value="0" onClick="cambiar('f0c4');"></td>
        </tr>
        <td><input type="button" class="btnpx" id="f1c0" name="f1c0" value="0" onClick="cambiar('f1c0');"></td>
        <td><input type="button" class="btnpx" id="f1c1" name="f1c1" value="0" onClick="cambiar('f1c1');"></td>
        <td><input type="button" class="btnpx" id="f1c2" name="f1c2" value="0" onClick="cambiar('f1c2');"></td>
        <td><input type="button" class="btnpx" id="f1c3" name="f1c3" value="0" onClick="cambiar('f1c3');"></td>
        <td><input type="button" class="btnpx" id="f1c4" name="f1c4" value="0" onClick="cambiar('f1c4');"></td>
        <tr>
        <td><input type="button" class="btnpx" id="f2c0" name="f2c0" value="0" onClick="cambiar('f2c0');"></td>
        <td><input type="button" class="btnpx" id="f2c1" name="f2c1" value="0" onClick="cambiar('f2c1');"></td>
        <td><input type="button" class="btnpx" id="f2c2" name="f2c2" value="0" onClick="cambiar('f2c2');"></td>
        <td><input type="button" class="btnpx" id="f2c3" name="f2c3" value="0" onClick="cambiar('f2c3');"></td>
        <td><input type="button" class="btnpx" id="f2c4" name="f2c4" value="0" onClick="cambiar('f2c4');"></td>
        </tr>
        <td><input type="button" class="btnpx" id="f3c0" name="f3c0" value="0" onClick="cambiar('f3c0');"></td>
        <td><input type="button" class="btnpx" id="f3c1" name="f3c1" value="0" onClick="cambiar('f3c1');"></td>
        <td><input type="button" class="btnpx" id="f3c2" name="f3c2" value="0" onClick="cambiar('f3c2');"></td>
        <td><input type="button" class="btnpx" id="f3c3" name="f3c3" value="0" onClick="cambiar('f3c3');"></td>
        <td><input type="button" class="btnpx" id="f3c4" name="f3c4" value="0" onClick="cambiar('f3c4');"></td>
        <tr>
        <td><input type="button" class="btnpx" id="f4c0" name="f4c0" value="0" onClick="cambiar('f4c0');"></td>
        <td><input type="button" class="btnpx" id="f4c1" name="f4c1" value="0" onClick="cambiar('f4c1');"></td>
        <td><input type="button" class="btnpx" id="f4c2" name="f4c2" value="0" onClick="cambiar('f4c2');"></td>
        <td><input type="button" class="btnpx" id="f4c3" name="f4c3" value="0" onClick="cambiar('f4c3');"></td>
        <td><input type="button" class="btnpx" id="f4c4" name="f4c4" value="0" onClick="cambiar('f4c4');"></td>
        </tr>
        <td><input type="button" class="btnpx" id="f5c0" name="f5c0" value="0" onClick="cambiar('f5c0');"></td>
        <td><input type="button" class="btnpx" id="f5c1" name="f5c1" value="0" onClick="cambiar('f5c1');"></td>
        <td><input type="button" class="btnpx" id="f5c2" name="f5c2" value="0" onClick="cambiar('f5c2');"></td>
        <td><input type="button" class="btnpx" id="f5c3" name="f5c3" value="0" onClick="cambiar('f5c3');"></td>
        <td><input type="button" class="btnpx" id="f5c4" name="f5c4" value="0" onClick="cambiar('f5c4');"></td>
        <tr>
        <td><input type="button" class="btnpx" id="f6c0" name="f6c0" value="0" onClick="cambiar('f6c0');"></td>
        <td><input type="button" class="btnpx" id="f6c1" name="f6c1" value="0" onClick="cambiar('f6c1');"></td>
        <td><input type="button" class="btnpx" id="f6c2" name="f6c2" value="0" onClick="cambiar('f6c2');"></td>
        <td><input type="button" class="btnpx" id="f6c3" name="f6c3" value="0" onClick="cambiar('f6c3');"></td>
        <td><input type="button" class="btnpx" id="f6c4" name="f6c4" value="0" onClick="cambiar('f6c4');"></td>
        </tr>
    </table>
    <br>
    <a href="javascript:viod(0)" class="btn btn-large btn-block btn-primary" type="submit" name="reconocer" onclick="document.forms['form'].submit();setData();"><strong>Reconocer</strong></a>
</form>
<script>
    function cambiar(variable){
        // document.getElementById(variable).style.background='#7D7FF5';
        document.getElementById(variable).style.background='black';
        document.getElementById(variable).style.color='black';
        document.form[variable].value='1'; 
    }
    function setData(){
        var datax = [];
        datax.push(document.getElementById("f0c0").value);   
        datax.push(document.getElementById("f0c1").value);   
        datax.push(document.getElementById("f0c2").value);   
        datax.push(document.getElementById("f0c3").value);   
        datax.push(document.getElementById("f0c4").value);   

        datax.push(document.getElementById("f1c0").value);   
        datax.push(document.getElementById("f1c1").value);   
        datax.push(document.getElementById("f1c2").value);   
        datax.push(document.getElementById("f1c3").value);   
        datax.push(document.getElementById("f1c4").value);   

        datax.push(document.getElementById("f2c0").value);   
        datax.push(document.getElementById("f2c1").value);   
        datax.push(document.getElementById("f2c2").value);   
        datax.push(document.getElementById("f2c3").value);   
        datax.push(document.getElementById("f2c4").value);   

        datax.push(document.getElementById("f3c0").value);   
        datax.push(document.getElementById("f3c1").value);   
        datax.push(document.getElementById("f3c2").value);   
        datax.push(document.getElementById("f3c3").value);   
        datax.push(document.getElementById("f3c4").value);   

        datax.push(document.getElementById("f4c0").value);   
        datax.push(document.getElementById("f4c1").value);   
        datax.push(document.getElementById("f4c2").value);   
        datax.push(document.getElementById("f4c3").value);   
        datax.push(document.getElementById("f4c4").value);   

        datax.push(document.getElementById("f5c0").value);   
        datax.push(document.getElementById("f5c1").value);   
        datax.push(document.getElementById("f5c2").value);   
        datax.push(document.getElementById("f5c3").value);   
        datax.push(document.getElementById("f5c4").value);   

        datax.push(document.getElementById("f6c0").value);   
        datax.push(document.getElementById("f6c1").value);   
        datax.push(document.getElementById("f6c2").value);   
        datax.push(document.getElementById("f6c3").value);   
        datax.push(document.getElementById("f6c4").value);   

        window.location.href = "./calcular.php?w1="+datax; 
    }
    
</script>

<?php 
    if(isset($_GET["w1"])){
        $datos = explode(",", $_GET["w1"]);

        // $datos = $_SESSION["data"];
        $dat = array();
        $k = 0;
        for ($i=0; $i < 7 ; $i++) { 
            for ($j=0; $j < 5; $j++) { 
                $dat[$i][$j] = $datos[$k];  
                $k++;
            }
        }
        
        $_SESSION["data"] = $dat;
    }
 ?>