<!Doctype HTML>
<html>
<head>
	<title>Customers ♦ Afrolago Rwanda</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>	
    <div id="mySidenav" class="sidenav">
	    <p class="logo"><span>A</span>frolago</p>
        <a href="dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="customers.php"class="icon-a"  style="color: #f1f1f1; background-color:#1b203d;"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
        <a href="Products.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Products</a>
        <a href="orders.php"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
        <a href="requests.php"class="icon-a"><i class="fa fa-comment icons"></i> &nbsp;&nbsp;Requests</a>
    </div>
    <div id="main">
	    <div class="head">
		    <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Customers</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Customers</span>
            </div>
	        <div class="col-div-6">
	            <div class="profile">
                    <img src="images/user.png" class="pro-img" />
		            <p>Lunar Tights G.<span>UI | UX DESIGNER</span></p>
	            </div>
            </div>
	        <div class="clearfix"></div>
        </div>
	    <div class="clearfix"></div><br/>
	    <div class="col-div-3">
		<div class="box">
			<p>67<br/><span>Customers</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>>
	    <div class="clearfix"></div><br/><br/>
	    <div class="col-div-8">
		    <div class="box-8">
		        <div class="content-box">
			        <p>Top Customers</p><br/>
			        <table>
                        <tr>
                            <th>Company</th>
                            <th>Contact</th>
                            <th>Country</th>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Maria Anders</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Centro comercial Moctezuma</td>
                            <td>Francisco Chang</td>
                            <td>Mexico</td>
                        </tr>
                        <tr>
                            <td>Ernst Handel</td>
                            <td>Roland Mendel</td>
                            <td>Austria</td>
                        </tr>
                        <tr>
                            <td>Island Trading</td>
                            <td>Helen Bennett</td>
                            <td>UK</td>
                        </tr>                      
                    </table>
		        </div>
	        </div>
	    </div>
	    <div class="clearfix"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".nav").click(function(){
            $("#mySidenav").css('width','70px');
            $("#main").css('margin-left','70px');
            $(".logo").css('visibility', 'hidden');
            $(".logo span").css('visibility', 'visible');
            $(".logo span").css('margin-left', '-10px');
            $(".icon-a").css('visibility', 'hidden');
            $(".icons").css('visibility', 'visible');
            $(".icons").css('margin-left', '-8px');
            $(".nav").css('display','none');
            $(".nav2").css('display','block');
        });
        $(".nav2").click(function(){
            $("#mySidenav").css('width','300px');
            $("#main").css('margin-left','300px');
            $(".logo").css('visibility', 'visible');
            $(".icon-a").css('visibility', 'visible');
            $(".icons").css('visibility', 'visible');
            $(".nav").css('display','block');
            $(".nav2").css('display','none');
        });
    </script>
</body>
</html>
