<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<style type="text/css">
		
		input[type=text], input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

button:hover {
    opacity: 0.8;
}
.block{
	  padding: 16px;
	  margin-top: 40px;margin-left: 300px;margin-right: 400px;margin-bottom: 70px;
	  opacity: .9;
	  background-color: white;
	  width: 500px;
	  box-shadow: 0,0,20px;
}
div.block{
	border:3px;
	 border-style: solid;
    border-width: 3px;
    border-color: purple;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;
}
.sub{
	 height: 40px;width: 180px;border: 3px;
}
@media screen and (max-width: 300px) {
    .sub{
        width: 100%;
    }
    .b{
    	background-color: blue;
    }
}
.c{
	color: grey;
	margin-top: -130px;
	margin-left: 510px;
	font-size: 80px;
	font-family: jokerman;
	font-style: oblique;

}
img{
	width:115px;
	height: 115px;
	margin-left: 320px;
	margin-top: 80px;
	border-radius: 50%;
	border:-10px;
	
}
.a{
	height: 200px;
}

	</style>

</head>
<body class="b" bgcolor="black">
	
<div class="a">	<img src="img4.png" class="img"> &nbsp &nbsp<p class="c">ADMIN</p></div>
<div class="block" >
	<form name="hotel" method="POST" action="ad.php">
	<lable><b>Hotel Name</b></lable>
	<input type="text" name="a1" id="b1" placeholder="enter name" required="" >
	<label><b>Contact no.</b></label>
	<input type="number" name="a2" id="b2" placeholder="mobile no." required="" maxlength="12" minlength="10"><input type="number" name="a3" id="b3" placeholder="telephone no." maxlength="11" minlength="7" required="">
	<label><b>Location</b></label>
	<input type="text" name="a4" id="b4" placeholder="location" required="">
	<label><b>City</b></label>
	<input type="text" name="a5" id="b5" placeholder="city" required="">
	<label><b>Rating</b>(in star)</label>
	<input type="number" name="a6" id="b6" placeholder="eg.5" required="" maxlength="1" >
	<button type="submit" class="sub"> SUBMIT </button>
	<button type="reset" class="sub" > RESET </button>

</form>
</div>
</body>
</html>
