<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - News</title>
        
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
    
    <body id="news">
    
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
                    <li class="selected"><strong>Community</strong><span></span></li>
					<li><a href="{url}/shop">Shop Now</a><span></span></li>
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
                        <li class=""><a href="{url}/community">Community</a></li>
                        <li class="selected">News</li>
                        <li class=" last"><a href="{url}/staff">Staff</a></li>
                    </ul>
                </div>
            </div>
            <div id="container">
                <div id="content" style="position: relative" class="clearfix">
                    <div id="column1" class="column">
                        <div class="habblet-container ">		
                            <div class="cbb clearfix default ">
                                <h2 class="title">News</h2>
                                <div id="article-archive">
                                    <ul>
                                        {newsList}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                    </div>
                    <div id="column2" class="column">
                        <div class="habblet-container ">		
                            <div class="cbb clearfix notitle ">
                                <div id="article-wrapper">
                                    <h2>{newsTitle}</h2>
                                    <div class="article-meta">Posted {newsDate}</div>
                                    <p class="summary">{newsTitle}</p>
                                    <div class="article-body">
                                        {newsContent}
                                        <br><br>
                                        <p><font face="Verdana" size="1"><b>- {newsAuthor}</b></p>
                                        <script type="text/javascript" language="Javascript">
                                            document.observe("dom:loaded", function() {
                                                $$('.article-images a').each(function(a) {
                                                    Event.observe(a, 'click', function(e) {
                                                        Event.stop(e);
                                                        Overlay.lightbox(a.href, "Image is loading");
                                                    });
                                                });
                                                
                                                $$('a.article-2729').each(function(a) {
                                                    a.replace(a.innerHTML);
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
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