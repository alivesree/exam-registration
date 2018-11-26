

<nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.php">Admin</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			<form class="navbar-left-right" action="search_admission.php" method="get">
              <input type="text" name="search_box"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" name="member_search_btn" value="" class="fa fa-search">
                              <input type="hidden" value="search" name="action"/>

            </form>
            
            <div class="clearfix"> </div>
           </div>
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="home.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>                   
                   
                    <!--<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                        <!--<ul class="nav nav-second-level">
                            <li><a href="register.php" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Registration</a></li>
                            <li><a href="add_category.php" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Add category</a></li>
                        </ul>-->
                    </li>
                                      
                                       <!--<li>
                                       <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Adds</span><span class="fa arrow"></span></a>
                        <!--<ul class="nav nav-second-level">
<li><a href="imageupload.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Upload Adds</span> </a></li>
<li><a href="upload.php" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>View Posted Adds</a></li>
                        </ul>-->

                    </li>                 

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-lock nav_icon"></i>Lock</a></li>
                            <li><a href="../user_login.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>SignOut</a></li>
                            
                        </ul>
                    </li>
                    
                    
                </ul>
            </div>
			</div>
      </div>
        </nav>