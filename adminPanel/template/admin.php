<?php

@include 'config.php';

session_start();

?> <?php
 
$dataPoints = array(
	array("y" => 25, "label" => "Sunday"),
	array("y" => 15, "label" => "Monday"),
	array("y" => 25, "label" => "Tuesday"),
	array("y" => 5, "label" => "Wednesday"),
	array("y" => 10, "label" => "Thursday"),
	array("y" => 0, "label" => "Friday"),
	array("y" => 20, "label" => "Saturday")
);
 
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | Glossy </title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-G-plus-plus'></i>
            <span class="logo_name">Glossy</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#dash" >
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="product/index.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Product</span>
                </a>
            </li>
            <li>
                <a href="users/index.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">User list</span>
                </a>
            </li>
           
            <!-- <li>
                <a href="#">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Stock</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">Total order</span>
                </a>
            </li>
        
            <li>
                <a href="#">
                    <i class='bx bx-message'></i>
                    <span class="links_name">Messages</span>
                </a>
            </li>
            
            <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Users</span>
                </a>
            </li> -->
            <li class="log_out">
                <a href="../../login_form.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section id="dash" class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <img src="../imeges/pic1.jpg" alt="">
                <span class="admin_name">Admin</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>
        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Order</div>
                        <div class="number"></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bx-cart-alt cart'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Sales</div>
                        <div class="number"></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bxs-cart-add cart two'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Profit</div>
                        <div class="number"></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bx-cart cart three'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Return</div>
                        <div class="number"></div>
                        <div class="indicator">
                            <i class='bx bx-down-arrow-alt down'></i>
                            <span class="text">Down From Today</span>
                        </div>
                    </div>
                    <i class='bx bxs-cart-download cart four'></i>
                </div>
            </div>

            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Recent Sales</div>
                    <div class="sales-details">
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>>
                    </div>
                    <div class="button">
                        <a href="#">See All</a>
                    </div>
                </div>
                <div class="top-sales box">
                    <div class="title">Top Seling Product</div>
                    <ul class="top-sales-details">
                        <li>
                            <a href="#">
                                <img src="../imeges/b.jpg" alt="">
                                <span class="product">Fece Wash</span>
                            </a>
                            <span class="price">$</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../imeges/daycream.jpg" alt="">
                                <span class="product"> Day Cream </span>
                            </a>
                            <span class="price">$</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../imeges/nightcream.jpg" alt="">
                                <span class="product">Night Cream</span>
                            </a>
                            <span class="price">$</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../imeges/cccc.jpg" alt="">
                                <span class="product">Lipstic.</span>
                            </a>
                            <span class="price">$</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../imeges/oil.jpg" alt="">
                                <span class="product">Hair Oil</span>
                            </a>
                            <span class="price">$</span>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../imeges/r.jpg" alt="">
                                <span class="product">Nail Polish</span>
                            </a>
                            <span class="price">$</span>
                        <li>
                            <a href="#">
                                <img src="../imeges/spray.webp" alt="">
                                <span class="product">Body Spray</span>
                            </a>
                            <span class="price">$</span>
                        </li>
                       
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

 <section id="prod" class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Productas</span>
            </div>

            <div class="profile-details">
                <img src="../imeges/pic1.jpg" alt="">
                <span class="admin_name">Admin</span>
              
            </div>
        </nav>
        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic"></div>
                        <div class="number"></div>
                        <div class="indicator">
                        
                            <span class="text"></span>
                        </div>
                    </div>
                   
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic"></div>
                        <div class="number"></div>
                        <div class="indicator">
                    
                            <span class="text"></span>
                        </div>
                    </div>
                    
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic"></div>
                        <div class="number"></div>
                        <div class="indicator">
                           
                   
                        </div>
                    </div>
                    
                </div>
                <div class="box">
                    <div class="right-side">
          
                        <div class="number"></div>
                        <div class="indicator">
                           
                            <span class="text"></span>
                        </div>
                    </div>
                   
                </div>
            </div>

            <
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>

</body>

</html>
