
<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>college</title>
<style>
*{
    margin: 0px;
    padding: 0px;
}
.bg{
    background-image: url('../../college/img/2.jpg');
    background-repeat: no-repeat;
   background-size : 100% 100%;
   width: 100%;
   height: 100vh;
} 
.menu{
    width: 100%;
    height: 50px;
    background-color: rgba(0,0,0,0.5);
    border-bottom:3px solid #FF0083;
}
.lmenu{
    width: 35%;
    line-height: 50px;
    float: left;
    color: aliceblue;
    margin-left: 40px;
    margin-top:5px;
}
.rmenu{
    width: 35%;
    line-height: 50px;
    float:right;
    height: 100px;
}
.rmenu ul li{
    display: inline-block;
    list-style: none;
    font-size: 15px;
    color: aliceblue;
    margin-left:20px;
    text-transform: uppercase;

}
ul li a{
    text-decoration:none;
    color:aliceblue;
}
</style>

</head>
<body>

<div class="bg">
    <div class="menu">
        <div class="lmenu">
        <img src="../../college/img/925721133s.jpg" style="width=50%; height:70px;">
       
        </div>
        <div class="rmenu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">staff</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="studentprofile.php">profile</a></li>
                <li><a href="../logout.php">Logout</a></li>
                <!-- **<select name="uu">
                <a href="studentprofile.php"><option value="Profile" name="profile">Profile</option></a>
                <option value="Logout" name="Logout"><a href="logout.php">Logout</a></option></a>
            </select>
                 -->
            </ul>
        </div>
    </div>




    <div class="content">
    <?php   
echo "<h1>welcome to the student page</h1>";
?> 
    </div>

</div>
</body>
</html>