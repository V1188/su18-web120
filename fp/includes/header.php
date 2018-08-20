<!DOCTYPE html>
<html lang="en" >
<head>
<title>Around The Globe Shop</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/fp.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
    <header>
        <div class="topnav">
            <div class="title-logo">
                <a href="index.php"><img alt="AROUND THE GLOBE SHOP" src="images/title.png"></a>
            </div>
            <div class="search">
                <form action="searchpage.php" method="get">
                    <div class="search-left">
                        <select name="categories" class="categoriesdropdown">
                            <option value="ALL">All</option>
                            <option value="COUNTRY">Country</option>
                            <option value="VENDOR">Vendor</option>
                        </select>
                    </div>
                    <div class="search-fill">
                        <input type="text" name="searchstr" placeholder="Find Product ...">
                    </div>
                    <div class="search-right">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>

	    <nav id="cssmenu">
    	    <ul>
            	 <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i>Deals Of The Day</span></a></li>
	             <li><a href="topsellers.php"><span><i class="fa fa-fw fa-cube"></i>Top Sellers</span></a></li>
    	         <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Store Locations</span></a>
        	        <ul>
            	       <li><a href="storelocationkirkland.php"><span><i class="fa fa-fw fa-calendar"></i>Kirkland</span></a></li>
                	   <li><a href="storelocationredmond.php"><span><i class="fa fa-fw fa-calendar"></i>Redmond</span></a></li>
	                   <li><a href="storelocationseattle.php"><span><i class="fa fa-fw fa-map-o"></i>Seattle</span></a></li>
    	               <li><a href="storelocationrenton.php"><span><i class="fa fa-fw fa-youtube-square"></i>Renton</span></a></li>
        	        </ul>
            	 </li>
	             <li><a href="contact.php"><span><i class="fa fa-fw fa-html5"></i>Contact</span></a></li>
    	 
   		    </ul>
	    </nav>
    </header>
