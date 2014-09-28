<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Shop</title>
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/common.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/fullcontent.js"></script>
        
        <script type="text/javascript">
            document.habboLoggedIn = true;
            var habboName = "{username}";
            var habboId = {userid};
            var habboReqPath = "";
            var habboStaticFilePath = "{url}/app/tpl/skins/Habbo";
            var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
                HabboClient.maximizeWindow = true;
            }
        </script>
        
        <!--[if IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie8.css" type="text/css">
        <![endif]-->
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie.css" type="text/css" />
        <![endif]-->
        <!--[if lt IE 7]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie6.css" type="text/css" />
            <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/pngfix.js"></script>
            <script type="text/javascript">
                try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
            </script>
            <style type="text/css">
                body { behavior: url({url}/app/tpl/skins/Habbo/js/csshover.htc); }
            </style>
        <![endif]-->
    </head>
    
    <body id="home">
    
        <div id="overlay"></div>
        <div id="header-container">
            <div id="header" class="clearfix">
                <h1><a href="{url}/"></a></h1>
                <div id="subnavi">
                    <div id="subnavi-user">
                        <div style="margin-top:7px"></div>
                    </div>
                    <div id="subnavi-search">
                        <div id="subnavi-search-upper">
                            <ul id="subnavi-search-links">
								<li><a href="http://www.google.com/" target="_blank" style="color:#000">Help</a></li>
                                <li><a href="{url}/logout" style="color:#000">Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="to-hotel">
                        <a href="{url}/api.php" class="new-button green-button" target="eac955c8dbc88172421193892a3e98fc7402021a" onclick="HabboClient.openOrFocus(this); return false;"><b>Enter {hotelName} Hotel</b><i></i></a>
                    </div>
                </div>
                <ul id="navi">
                    <li class="metab"><a href="{url}/me">{username}</a><span></span></li>
                    <li><a href="{url}/community">Community</a><span></span></li>
					<li class="selected"><a href="{url}/shop">Shop Now</a><span></span></li>
					<li><a href="http://www.google.com/" target="_blank">Forum</a><span></span></li>
					<?php if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 6)
					{ ?>
                    <li class="tab-register-now"><a href="{url}/ase/">Housekeeping</a><span></span></li>
                    <?php
                    } ?>
                </ul>
                <div id="habbos-online"><div class="rounded"><span>{online} online!</span></div></div>
            </div>
        </div>
        <div id="content-container">
            <div id="navi2-container" class="pngbg">
                <div id="navi2" class="pngbg clearfix">
                    <ul>
                        <li class="selected"><a href="{url}/shop">Shop</a></li>
                    </ul>
                </div>
            </div>
			 <div id="container">
                <div id="content" style="position: relative" class="clearfix">
                    <div id="column1" class="column">
						<div class="habblet-container ">
							<div class="cbb clearfix red ">
								<h2 class="title">Benefits</h2>
								<div style="padding:7px 7px 1px">
								<img src="{url}/app/tpl/skins/{skin}/images/vip_promo.png" align="right">
								Ever wanted to become an exclusive member with exclusive rares other users don't have? Then this is the perfect place for you to be looking. 
								<br /><br />
								Here at {hotelName}, we offer as many exclusive features and rares for users to take advantage of when purchasing VIP or a rare pack. Below is a list of
								awesome benefits you get for purchasing VIP. Still not interested? Ask someone in the hotel!
								<br /><br />
								<hr>
								<br />
								<strong><font color="Orange"><u>Regular VIP - $5 USD</u></font></strong>
									<li>&raquo; :Push & :Pull command.</li>
									<li>&raquo; VIP rares catalogue.</li>
									<li>&raquo; Shiny new VIP badge.</li>	
									<li>&raquo; Enter full rooms without waiting.</li>
									<li>&raquo; Better chance at staff.</li>
									<li>&raquo; 500k credits.</li>
									<li>&raquo; 400k pixels.</li>
								<br />
								<hr>
								<br />
								By purchase VIP or a Rare Pack here at {hotelName}, you agree to the continuation of this T.O.S. This includes that there are absolutely <strong>no</strong>
								refunds, under any circumstance. If you reverse or refund a payment, you are liable for your actions and will be permanently banned from the network.
								<br />
								<hr>
								<br />
								The {hotelName} Hotel Administration would like to thank you for donating. Please remember, your donations go directly towards server and extra feature costs.
								</div>
							</div>
						</div>
					</div>
					<div id="column2" class="column">
                        <div class="habblet-container ">
                            <div class="cbb clearfix blue ">
                                <h2 class="title">Purchase VIP with PayPal</h2>
								    <div style="padding:7px 7px 1px">
										<center>Username:</center>
											<form>
											<center><input type="text"></input></center>
											</form>
										<br />
									<center><img src="http://www.business-online-guidance.com/images/paypal-buy-now-button-example.gif" /></center>
								</div>
							</div>
						</div>
					</div>
					<div id="column2" class="column">
                        <div class="habblet-container ">
                            <div class="cbb clearfix blue ">
								<h2 class="title">Purchase VIP with PayGol</h2>
									<div style="padding:7px 7px 1px">
										<center>Username:</center>
											<form>
											<center><input type="text"></input></center>
											</form>
										<br />
									<center><img src="http://www.paygol.com/micropayment/img/buttons/125/red_en_pwp.png" /></center>
								</div>
							</div>
						</div>
					</div>
					<div id="column2" class="column">
                        <div class="habblet-container ">
                            <div class="cbb clearfix blue ">
                                <h2 class="title">Purchase Rare Pack with PayPal</h2>
                                <div style="padding:7px 7px 1px">
									<center>Username:</center>
										<form>
										<center><input type="text"></input></center>
										</form>
									<br />
								<center><img src="http://www.business-online-guidance.com/images/paypal-buy-now-button-example.gif" /></center>
							</div>
						</div>
					</div>
				<div id="column2" class="column">
                        <div class="habblet-container ">
                            <div class="cbb clearfix blue ">
								<h2 class="title">Purchase Rare Pack with PayGol</h2>
									<div style="padding:7px 7px 1px">
										<center>Username:</center>
											<form>
											<center><input type="text"></input></center>
											</form>
										<br />
									<center><img src="http://www.paygol.com/micropayment/img/buttons/125/red_en_pwp.png" /></center>
								</div>
							</div>
						</div>
					</div>
				</div>
			<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
        <script type="text/javascript">
            HabboView.run();
        </script>

        <!--[if lt IE 7]>
            <script type="text/javascript">
                Pngfix.doPngImageFix();
            </script>
        <![endif]-->
        
        <div id="footer" >
           <?php include('footer.php'); ?>
		   <?php include('checktheban.php'); ?>
        </div>
    
    </body>
</html>