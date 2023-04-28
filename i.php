<?php
session_start();
// all css files are mentioned there on the base2 and nav2 file.
include 'templates/nav2.php';?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>ajax using javascript in php</title>
	 <style>
    .shadow {
  box-shadow: 3px 3px 5px 6px #ccc;
}
          fieldset
        {
           
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid;
            border-radius: 30px;
  padding: 10px;
 
  
        }
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 30%;
  margin-bottom: 15px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 70%;
}

button:hover {
  opacity: 0.8;
}




.icon {
  padding: 10px;
  background: black;
  color: white;
  min-width: 50px;
  text-align: center;
}
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}


        .make-it-center{
            margin: auto;
            width: 50%;
        }

        body{
            color: white;
        }

        .required:after {
            content:"*";
            color: red;
        }
        .error{
            color: red;
        }

 </style>
	<script type="text/javascript">
	function ajax_poll(data)
	{
		if(window.XMLHttpRequest)
		{
			var xmlhttp=new XMLHttpRequest();
		}
		else
		{
			 // code for IE6, IE5
			var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		 xmlhttp.onreadystatechange=function(){
		 if(xmlhttp.readyState==4  && xmlhttp.status==200)
		 {
			document.getElementById("response").innerHTML=xmlhttp.responseText;
		 }
	    }
		 xmlhttp.open("GET","response.php?r="+data);
		 xmlhttp.send();
	}
	</script>
</head><br><br><br><br><br>

<body style="background-color:#5D8896; color: black;">
	<fieldset style="background-color: #89CFF0;  border-color: #89CFF0;  height: 300px; width: 38%;">
	<center>
	<h3>Was Your Delivery Experience good? </h3>
	<p> Yes<input type="radio"  value="yes" onClick="ajax_poll(this.value)" name="p" /> &emsp; No<input type="radio" value="no" name="p" onClick="ajax_poll(this.value)" /></p>
	<div id="response"></div>
	</center>
	</fieldset>
</body>
<?php include 'templates/base2.php';?>
</html>