<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html b:version='2' class='v2' expr:dir='data:blog.languageDirection' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
  <head>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,400italic|Poppins:regular,500,600,700' media='all' rel='stylesheet' type='text/css'/><link href='https://fonts.googleapis.com/css?family=Roboto%3A400%2C500%2C700&amp;subset=latin%2Clatin-ext&amp;ver=1.0' id='magazine-fonts-css' media='all' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Merriweather%3A700%7CRoboto%3A400&amp;subset=latin&amp;ver=4.8.4' id='redux-google-fonts-magazine_theme_options-css' media='all' rel='stylesheet' type='text/css'/>
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'/>
    <b:include data='blog' name='all-head-content'/>
    <title>
		<b:if cond='data:blog.pageType == &quot;index&quot;'>
			<data:blog.pageTitle/>
		<b:else/>
			<b:if cond='data:blog.pageType != &quot;error_page&quot;'>
				<data:blog.pageName/> - <data:blog.title/>
			<b:else/>
				ERROR 404 - <data:blog.title/> 
			</b:if>
		</b:if>
    </title>
    <!-- Description and Keywords (start) -->
    <b:if cond='data:blog.pageType == &quot;index&quot;'>
    <meta content='YOUR DESCRIPTION HERE' name='description'/>
    </b:if>
    <meta content='YOUR KEYWORDS HERE' name='keywords'/>
    <!-- Description and Keywords (end) -->
    <b:if cond='data:blog.pageType == &quot;item&quot;'>
        <meta expr:content='data:blog.pageName' property='og:title'/>
        <meta expr:content='data:blog.canonicalUrl' property='og:url'/>
        <meta content='article' property='og:type'/>
    </b:if>
    <b:if cond='data:blog.postImageUrl'>
        <meta expr:content='data:blog.postImageUrl' property='og:image'/>
    <b:else/>
    <b:if cond='data:blog.postImageThumbnailUrl'>
        <meta expr:content='data:blog.postImageThumbnailUrl' property='og:image'/>
    </b:if></b:if>
    <b:if cond='data:blog.metaDescription != &quot;&quot;'>
        <meta expr:content='data:blog.metaDescription' name='og:description'/>
    </b:if>
    <meta expr:content='data:blog.title' property='og:site_name'/>
    <meta expr:content='data:blog.homepageUrl' name='twitter:domain'/>
    <meta expr:content='data:blog.pageName' name='twitter:title'/>
    <b:if cond='data:blog.postImageUrl'>
      <meta content='summary_large_image' name='twitter:card'/>
      <meta expr:content='data:blog.postImageUrl' name='twitter:image'/>
    <b:else/>
      <meta content='summary' name='twitter:card'/>
      <b:if cond='data:blog.postImageThumbnailUrl'>
        <meta expr:content='data:blog.postImageThumbnailUrl' name='twitter:image'/> 
      </b:if>
    </b:if>
    <meta expr:content='data:blog.pageName' name='twitter:title'/>
    <b:if cond='data:blog.metaDescription'>
      <meta expr:content='data:blog.metaDescription' name='twitter:description'/>
    </b:if>
    <!-- Social Media meta tag need customer customization -->
    <meta content='Facebook App ID here' property='fb:app_id'/> 
    <meta content='Facebook Admin ID here' property='fb:admins'/> 
    <meta content='@username' name='twitter:site'/>
    <meta content='@username' name='twitter:creator'/>   
<b:skin><![CDATA[/
-----------------------------------------------
Blogger Template Style
Name:        NewsPro
Author :     http://www.themexpose.com
License:     Premium Version
----------------------------------------------- */

/* Variable definitions
-----------------------

<Variable name="main.color" description="Main Theme Color" type="color" default="#01BD5D" value="#01BD5D"/>

-----------------------
*/
/* Reset and More */
a,abbr,acronym,address,applet,b,big,blockquote,body,caption,center,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,font,form,h1,h2,h3,h4,h5,h6,html,i,iframe,img,ins,kbd,label,legend,li,object,p,pre,q,s,samp,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,tr,tt,u,ul,var{padding:0;border:0;outline:0;vertical-align:baseline;background:0 0}
ins{text-decoration:underline}
del{text-decoration:line-through}
blockquote{font-style:italic;color:#888}
dl,ul{list-style-position:inside;font-weight:700;list-style:none}
ul li{list-style:none}
caption,th{text-align:center}
img{border:none;position:relative}
a,a:visited{text-decoration:none}
.clear{clear:both}
.section,.widget,.widget ul{margin:0;padding:0}
a{color:$(main.color)}
a:hover{color:$(main.color)}
:focus{outline:0}
a img{border:0}
brc{color:#bdbdbd}
.CSS_LIGHTBOX{z-index:999999!important}
.separator a{clear:none!important;float:none!important;margin-left:0!important;margin-right:0!important}
#navbar-iframe{display:none;height:0;visibility:hidden}
span.item-control,a.quickedit{display:none!important}
.archive .home-link,.index .home-link,.home-link{display:none!important}
*{outline:0;transition:all .3s ease;-webkit-transition:all .3s ease;-moz-transition:all .3s ease;-o-transition:all .3s ease}
:after,:before{transition:all .0s ease;-webkit-transition:all .0s ease;-moz-transition:all .0s ease;-o-transition:all .0s ease}
.status-msg-wrap{margin:0 auto 25px}
.status-msg-border{border:1px solid #eee;opacity:.7;border-radius:2px}
.status-msg-bg{background-color:#f8f8f8;opacity:1;filter:none}
.icon:before,.postags a:before{font-family:FontAwesome;font-weight:400;font-style:normal;line-height:1;padding-right:4px}
.feed-links{clear:both;display:none;line-height:2.5em}
/* Body */
body{background:#ffffff;    font-family: 'Roboto';
    font-size: 12px;
    line-height: 16px;
    font-weight: 400;
    color: #b5b5b5;}
#outer-wrapper{max-width:100%;margin:25px auto 0;background-color:#FFF;}
.row{width:1230px}
h1, h2, h3, h4 {
    margin: 0;
    position: relative;
    font-family: 'Poppins';
}

div#cover-wrapper {
    float: left;
    overflow: hidden;
    width: 74%;
    word-wrap: break-word;
}

div#sidebar-wrapper1 {
    float: left;
    overflow: hidden;
    width: 23.5%;
    box-sizing: border-box;
    word-wrap: break-word;
    padding-bottom: 20px;

}

div#sidebar-wrapper1 .widget{    border: 1px solid #eaeaea;
    padding: 25px;    margin-bottom: 20px;}

#content-wrapper{margin:25px auto 5px;overflow:hidden}
#main-wrapper{   float: right;
    overflow: hidden;
    width: 69%;
    word-wrap: break-word;
    border: 1px solid #eaeaea;
    padding: 25px;}
#sidebar-wrapper{float:right;overflow:hidden;width:26%;        padding-left: 1.4%;box-sizing:border-box;word-wrap:break-word;padding-bottom:20px}

.post-tag,.featured-meta,#meta-post,.resumo span,.recent-author,.recent-date,.postags,.first-tag,.carousel-tag a,.category-gallery a,.related-tag,.item-text,.cmm-widget li span,.post-meta,.item article,.static_page article,.item-snippet,.comment-content,.FollowByEmail .widget-content:before{font-family:'Open Sans', sans-serif}
#topnav{width:100%;background-color:#111;margin:0;
}
.tm-head{margin:0 auto;line-height:40px;overflow:hidden;border-left: 1px solid rgba(0,0,0,0.1);
    border-right: 1px solid rgba(0,0,0,0.1);}
.tm-menu{float:left;}
#nav1 li{float:left;display:inline-block;height:40px;line-height:40px;margin-right:15px;padding:0}
#nav1 li a{    color: #e5e5e5;
    font-size: 11px;
    font-weight: 400;
    letter-spacing: 0.3px;
    text-transform: uppercase;
    font-family: sans-serif;}
#nav1 li a:hover{color:$(main.color)}
.selectnav{display:none;background-color:#333333;padding:2px 5px;box-sizing:border-box;border:0}
.social-area{float:right; }
.tm-head #social-top{position:relative;display:block;margin-right:0}
.tm-head #social-top ul{overflow:hidden}
.tm-head #social-top ul li{height:40px;line-height:38px;display:block;float:left;margin-left:5px;padding:0}
.tm-head #social-top ul li a{   display: block;
    float: left;
    color: #e5e5e5;
    text-decoration: none;
    font-size: 14px;
    width: 22px;
    height: 40px;
    line-height: 40px;
    margin-top: 0;
    text-align: center;
    padding: 0;}
.tm-head #social-top ul li a:before{display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.tm-head #social-top ul li a:hover{background-color:$(main.color);color:#fff}
#social-top .facebook:before{content:"\f09a"}
#social-top .twitter:before{content:"\f099"}
#social-top .gplus:before{content:"\f0d5"}
#social-top .rss:before{content:"\f09e"}
#social-top .youtube:before{content:"\f167"}
#social-top .skype:before{content:"\f17e"}
#social-top .stumbleupon:before{content:"\f1a4"}
#social-top .tumblr:before{content:"\f173"}
#social-top .vine:before{content:"\f1ca"}
#social-top .stack-overflow:before{content:"\f16c"}
#social-top .linkedin:before{content:"\f0e1"}
#social-top .dribbble:before{content:"\f17d"}
#social-top .soundcloud:before{content:"\f1be"}
#social-top .behance:before{content:"\f1b4"}
#social-top .digg:before{content:"\f1a6"}
#social-top .instagram:before{content:"\f16d"}
#social-top .pinterest:before{content:"\f0d2"}
#social-top .delicious:before{content:"\f1a5"}
#social-top .codepen:before{content:"\f1cb"}
#header-blog{height:90px;position:relative;overflow:hidden;padding:20px 0}
.header-content{margin:0 auto;overflow:hidden;height:90px}
.header-logo{max-width:330px;max-height:68px;margin:22px 0 0;float:left;overflow:hidden}
.header-logo img{height:auto;max-height:68px;margin:0;max-width:100%}
.Header h1{color:#222222;margin:0;font-size:44px;line-height:1.3em}
.header-ads{width:728px;max-width:100%;max-height:90px;float:right;margin:0}
#menu{display:none}
#main-nav{    background-color: #f2f2f2;
    position: relative;
    width: 100%;
    height: 60px;
    font-size: 14px;
    margin: 0 auto;
    border-top: 1px solid #eaeaea;
    border-bottom: 1px solid #eaeaea;}
.header-menu{background-color:#f2f2f2;height:60px;margin:0 auto;position:relative;padding:0}
.is-sticky #main-nav{width:100%!important;max-width:100%;top:0;left:0;margin:0;z-index:999999;transition:all .0s ease;-webkit-transition:all .0s ease;-moz-transition:all .0s ease;-o-transition:all .0s ease}
.is-sticky{transition:all .0s ease;-webkit-transition:all .0s ease;-moz-transition:all .0s ease;-o-transition:all .0s ease}
li.li-home{float:left;display:inline-block;padding:0!important;height:60px;width:60px;text-align:center;    border-bottom: 5px solid $(main.color);
    margin-bottom: -5px;background-color:$(main.color)}
li.li-home a{color:#fff;font-size:20px;line-height:60px;max-height:60px;padding: 0!important}
li.li-home:hover{background-color:$(main.color)}
li.li-home:hover a{color:#fff}
#main-nav ul li{position:relative;float:left;height:60px;box-sizing:border-box;padding:0;}
#main-nav ul li a{float:left;color:#111111;padding:0 18px;line-height:60px;text-transform:uppercase;font-weight:400;letter-spacing: 0.5px}
#main-nav ul li:hover{background-color:$(main.color);border-color:#222222}
#main-nav ul li:hover a{color:#fff}
#main-nav ul li.has-children a{padding-right:28px}
#main-nav ul li.has-children a:after{content:"\f0d7";font-family:FontAwesome;position:absolute;top:0;right:14px}
#main-nav ul li ul{display:none;position:absolute;left:0;top:60px;z-index:100;background-color:#222222;border-top:0px;box-shadow:0 1px 3px rgba(40,35,40,0.05);transition:all .0s ease;-webkit-transition:all .0s ease;-moz-transition:all .0s ease;-o-transition:all .0s ease}
#main-nav ul li ul li{height:auto;margin-left:0;display:block;float:none;position:relative;overflow:hidden;line-height:normal;padding:0;border-right:0;border-bottom:1px solid #333333}
#main-nav ul li ul li:last-child{border-bottom:0}
#main-nav ul li ul li a{min-width:180px;color:#eee;font-size:12px;font-weight:400;text-transform:capitalize;height:38px;line-height:38px;overflow:hidden;box-sizing:border-box;padding:0 16px;margin-top:0;border:0;transition:all .3s ease!important;-webkit-transition:all .3s ease!important;-moz-transition:all .3s ease!important;-o-transition:all .3s ease!important}
#main-nav ul li ul li a:after{display:none}
#main-nav ul li ul li a:hover {background-color:$(main.color);color:#fff!important;padding-left:20px}
.is-sticky #main-nav{animation-name:slideInDown;animation-duration:.5s;animation-fill-mode:both}
@keyframes slideInDown {
from{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);visibility:visible}
to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
}
.header-search{position:relative;float:right}
.header-search li{list-style:none}
.header-search a.search{background-color:#333333;cursor:pointer;display:block;height:60px;text-align:center;position:relative;right:0;top:0;width:60px;font-size:14px;border-radius:0}
.header-search a.search:hover{background-color:$(main.color)}
.header-search a.search:before{color:#EEEEEE;content:'\f002';font-family:FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;line-height:60px}
.header-search a.search:hover:before,.header-search a.search.active:before{color:#fff}
.header-search a.search.active{background-color:$(main.color);border-left:0;border-radius:0}
.header-search a.search.active form{display:block}
.header-search a.search form{display:none;position:absolute;right:60px;top:0;z-index:2}
.header-search a.search form input{box-shadow:none;height:60px;padding:0 12px;width:160px;background-color:#333333;color:#EEE;font-family:inherit;line-height:60px;margin-top:0;border-radius:0;border:0}
#main-nav .header-search li a{cursor:pointer;-webkit-transition:all .3s ease-out 0;-moz-transition:all .3s ease-out 0;transition:all .3s ease-out 0}
.ticker .title{       float: left;
    height: 32px;
    background-color: #ff5353;
    font-size: 15px;
    color: #fff;
    line-height: 32px;
    font-weight: 400;
    overflow: hidden;
    padding: 0 10px;
    font-weight: 600;
    font-family: 'Poppins';
    font-size: 12px;
    letter-spacing: -.04em;}
div#FollowByEmail1 .widget-content {
    background: #ffffff;
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 2px;
    padding: 30px;
}
.ticker .title .fa{margin-right:10px;transform:rotate(-30deg);-moz-transform:rotate(-30deg);-webkit-transform:rotate(-30deg);-ms-transform:rotate(-30deg);-o-transform:rotate(-30deg)}
.ticker .widget-content{height:32px;box-sizing:border-box;overflow:hidden;padding:0 4px;}
.ticker .widget-content li{float:left;margin-left:30px;display:inline-block;height:38px;line-height:38px;padding:0}
.ticker .widget{height:40px;background-color:#ffffff;max-width:1230px;margin:20px auto;overflow:hidden}
.tk-thumb{float:left;margin:4px 10px 0 0}
.tk-img{position:relative;display:block;width:35px;height:30px;overflow:hidden}
.ticker .post-tag{display:inline-block;background-color:$(main.color);color:#fff;margin-right:10px;font-weight:400;height:18px;line-height:18px;padding:1px 6px;font-size:11px;text-transform:uppercase;position:relative;margin-top:7px;float:left}
.ticker .recent-title{font-size:13px;font-weight: 600;display:inline-block;line-height:15px}
.ticker .recent-title a{color:#666}
.ticker .recent-title a:hover{color:$(main.color)}
.tickercontainer,.tickercontainer .mask,ul.newsticker{-webkit-transition:all 0 linear;-moz-transition:all 0 linear;-o-transition:all 0 linear;transition:all 0 linear;list-style:none;margin:0}
.tickercontainer{margin:0;padding:0;overflow:hidden}
.tickercontainer .mask{position:relative;overflow:hidden}
.newsticker{position:relative;list-style-type:none;margin:0;padding:0}
ul.newsticker{-webkit-transition:all 0s linear;-moz-transition: all 0s linear;-o-transition:all 0s linear;transition:all 0s linear;position:relative;list-style-type:none;margin:0;padding:0}
.tickeroverlay-left{display:none}
.tickeroverlay-right{display:none}
.featured{position:relative;margin:0 auto}
.featured .widget-content ul{margin:20px 0 0!important;height:auto;overflow:hidden}
.featured h2{display:none;display:none}
.featured li{width:25%;height:197px;position:relative;float:right;padding:0;box-sizing:border-box;overflow:hidden}
.featured li:nth-child(4){margin-top:6px}
.featured li .featured-inner{position:relative;overflow:hidden}
.featured .rcp-thumb{width:100%;height:202px;position:relative;display:block;overflow:hidden}
.featured .rcp-title{font-size:16px;position:relative;margin-bottom:10px}
.featured .rcp-thumb:after{content:no-close-quote;position:absolute;left:0;bottom:0;width:100%;height:151px;background:url(http://3.bp.blogspot.com/-LnvazGBvKh8/VskckSkmzxI/AAAAAAAAC4s/erEgI6A_ih4/s1600-r/metabg.png) repeat-x;opacity:.8}
.featured .post-panel{position:absolute;left:0;bottom:0;width:100%;padding:15px;z-index:2;box-sizing:border-box}
.featured li .featured-inner .featured-meta{font-size:12px;color:#ccc;font-weight:400}
.featured li:first-child{width:26%;height:400px;float:left;padding-right:10px}
.featured li:nth-child(2){width:49%;height:400px;float:left;padding-right:10px}
.featured li:first-child .post-panel,.featured li:nth-child(2) .post-panel{padding:20px}
.featured li:first-child .rcp-thumb,.featured li:nth-child(2) .rcp-thumb{height:400px}
.featured li:first-child .rcp-title,.featured li:nth-child(2) .rcp-title{font-size:22px}



.featured li:first-child .featured-overlay{    background: -webkit-linear-gradient(bottom, #0099f7, #f11712 );
    background: linear-gradient(to bottom, #0099f7, #f11712 );}

.featured li:nth-child(2) .featured-overlay{background: -webkit-linear-gradient(bottom, #159957, #004c99 );
    background: linear-gradient(to bottom, #159957, #004c99 );}


.featured li:nth-child(3) .featured-overlay{    background: -webkit-linear-gradient(bottom, #ef94ac, #3b6bef );
    background: linear-gradient(to bottom, #ef94ac, #3b6bef );}

.featured li:nth-child(4) .featured-overlay{    background: -webkit-linear-gradient(bottom, #e1eec3, #f05053 );
    background: linear-gradient(to bottom, #e1eec3, #f05053 );}




.featured .rcp-title a{color:#FFF;position:relative;   
    line-height: 1.2;
    font-weight: 600;
    font-family: 'Poppins';letter-spacing: -.04em;}
.featured .post-tag{position:absolute;top:15px;left:15px;background-color:$(main.color);color:#fff;text-transform:uppercase;font-weight:400;z-index:5;height:20px;line-height:20px;padding:2px 8px;font-size:11px}
.featured{position:relative}
.featured li:nth-child(2) .post-tag{background-color:#ffa812}
.featured li:nth-child(3) .post-tag{background-color:#f56954}
.featured li:nth-child(4) .post-tag{background-color:#B565BE}
.featured li:nth-child(5) .post-tag{background-color:#FFC000}
.featured-overlay{    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    background: linear-gradient(to bottom,#000,transparent);
    background: -webkit-linear-gradient(bottom,#000,transparent);
    opacity: 0.7;
    z-index: 1;}
.featured li:hover .featured-overlay{background-color:rgba(40,35,40,0.30)}
.recent-boxes{overflow:hidden;position:relative}
.box-sec{margin-right:2%}

.box-sec h2{display:none}
.recent-boxes .box-sec .widget:last-child{margin-bottom:20px}
a.more-link,a.posts-link{    background-color: #1f2024;
    float: right;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    margin: 0;
    font-size: 10px;
    color: #fff;
    font-weight: 400;
    text-transform: uppercase;}
a.more-link:hover,a.posts-link:hover{background-color:$(main.color);color:#fff}
.box-title,.posts-title{height:30px;line-height:30px;position:relative;margin-bottom:20px}

.posts-title:after {
    content: '';
    position: absolute;
    left: 0;

    bottom: 0;
    width: 100%;
    height: 3px;
    z-index: 1;
    background: #eaeaea !important;
}





.box-title h2.title,.posts-title h2{       display: inline-block;
    border-bottom: 3px solid #51c8fa;
    height: 27px;
    line-height: 24px;
    font-weight: 700;
    color: #111;
    text-transform: none;
    z-index: 22;
    border-color: #01bd5d !important;}
.box-title h2.title a,.posts-title h2 a{    color: #000;
    font-family: Merriweather;
    font-weight: 700;
    font-style: normal;
    font-size: 14px;}

.recent-boxes .widget{margin-bottom:30px}
.boxes .bx-first .box-thumbnail{position:relative;width:100%;height:200px}
.boxes .bf-thumb{width:100%;height:200px;position:relative;display:block}
.box-thumbnail{overflow:hidden}
.boxes ul li .box-thumbnail{width:110px;height:75px;display:table-cell;vertical-align:middle}
.boxes ul li .box-image{width:110px;height:75px;position:relative;display:block}
.bx-first .box-thumbnail .first-tag{position:absolute;top:15px;left:15px;z-index:2}
.bx-first .box-thumbnail .first-tag a{background:$(main.color);color:#fff;text-transform:uppercase;height:20px;line-height:20px;display:inline-block;padding:0 6px;font-size:11px;font-weight:400;border-radius:2px}
.boxes ul li .recent-content{display:table-cell;padding-left:10px;padding-right:5px}
.boxes .recent-title a:hover{color:$(main.color)}
.recent-boxes .feat,.recent-boxes .videos,.recent-boxes .gallery{width:100%;float:left}
.recent-boxes .carousel{position:relative;margin:0 0 30px!important;padding:0;overflow:visible;height:auto;display:block;clear:both}
.feat .bx-first .box-thumbnail,.feat .bf-thumb{height:363px}
.feat .bx-first{width:50%;position:relative;float:left;padding-right:1.4%;box-sizing:border-box;overflow:hidden;}
.feat .bx-item{width:100%;position:relative;overflow:hidden}
.feat .bx-first .bf-content,.column .bx-first .bf-content{position:absolute;bottom:0;width:100%;z-index:2;padding:15px;box-sizing:border-box}
.feat .bx-first .bf-content .recent-title a,.column .bx-first .bf-content .recent-title a{display: block;
  
    color: #fff;
 
    margin-bottom: 5px;
    font-size: 20px;
    line-height: 1.4;
  
    font-weight: 600;
    font-family: 'Poppins';letter-spacing: -.04em;}
.feat li .recent-content .recent-title{overflow:hidden;line-height:0;margin:0 0 2px;padding:0}
.feat li .recent-content .recent-title a{    color: #222222;

    line-height: 1.4;
    font-weight: 600;
    font-family: 'Poppins';
    font-size: 14px;
    letter-spacing: -.04em;}
.boxes ul li .recent-content .recent-title a:hover{color:$(main.color)}
.bx-first .bf-thumb:after{content:no-close-quote;position:absolute;left:0;bottom:0;width:100%;height:151px;background:url(http://3.bp.blogspot.com/-LnvazGBvKh8/VskckSkmzxI/AAAAAAAAC4s/erEgI6A_ih4/s1600-r/metabg.png) repeat-x;opacity:.8}
.bf-content .recent-author,.bf-content .recent-date{color:#ccc}
.feat ul li{display:block;width:48.6%;float:right;padding-bottom:10px;margin-bottom:10px;padding-top:0;}
.feat ul li:last-child{border-bottom:0;padding-bottom:0;margin-bottom:0}
.recent-boxes .column{width:48.6%; }
.recent-boxes .columnleft{float:left}
.recent-boxes .columnright{float:right}
.column .bx-first{width:100%;position:relative;box-sizing:border-box;overflow:hidden;margin-bottom:10px}
.column ul li{display:block;margin-top:10px;padding:10px 0 0;}
.column ul li .recent-content .recent-title{overflow:hidden;line-height:0;margin:0 0 2px;padding:0}
.column ul li .recent-content .recent-title a{color:#222222;    display: block;

    margin-bottom: 3px;
    line-height: 1.4;
    font-weight: 600;
    font-family: 'Poppins';
    font-size: 14px;
    letter-spacing: -.04em;}
.img-overlay{position:absolute;left:0;top:0;z-index:1;width:100%;height:100%;background-color:rgba(40,35,40,0.05)}
.tk-thumb a:hover .img-overlay,.boxes ul li .box-image:hover .img-overlay,.boxes .bx-first:hover .img-overlay,.custom-widget .rcthumb:hover .img-overlay,.PopularPosts .item-thumbnail:hover a .img-overlay,.map-thumb:hover .img-overlay{background-color:rgba(40,35,40,0.3)}
.gallery li:hover .recent-content,.videos li:hover .recent-content{padding-bottom:15px;
    margin-bottom: 0px;}
.gallery ul li {width:33%;height:165px;overflow:hidden;float:left;margin-right:.33%;display:inline-block;position:relative;padding:0;margin-bottom:2px}
.gallery ul li:nth-child(4),.gallery ul li:nth-child(5),.gallery ul li:nth-child(6){margin-bottom:0px}
.gallery ul li .box-image{width:100%;height:165px;display:block}
.gallery ul li .box-image:after{content:no-close-quote;position:absolute;left:0;bottom:0;width:100%;height:150px;background:url(http://3.bp.blogspot.com/-LnvazGBvKh8/VskckSkmzxI/AAAAAAAAC4s/erEgI6A_ih4/s1600-r/metabg.png) repeat-x;opacity:.8}
.gallery .recent-content{position:absolute;bottom:0;width:100%;z-index:2;padding:10px;text-align:left;box-sizing:border-box;    margin-bottom: -25px;}
.category-gallery {position:absolute;top:10px;right:10px;z-index:3;overflow:hidden;}
.category-gallery a:before{display:block;background-color:$(main.color);opacity: .5;color:#fff;height:18px;line-height:18px;padding:0 5px;font-size:10px;font-weight:400;text-transform:uppercase;border-radius:2px;transition: all .3s ease;}
.gallery .recent-title a,.videos .recent-title a{display: block;
  
    color: #FFF;
  
    text-shadow: 0 0.5px 0.5px rgba(34,34,34,0.3);
    margin-bottom: 3px;
    line-height: 1.4;
    font-weight: 600;
    font-family: 'Poppins';
    font-size: 15px;
    letter-spacing: -.04em;}
.gallery .recent-author,.videos .recent-author{color:#ccc}
.videos ul{position:relative;overflow:hidden;}
.videos ul li{width:33.33%;float:left;box-sizing:border-box;margin:0;padding-right:5px;}
.videos ul li:last-child{padding-right:0px}
.videos ul li .videos-item{width:100%;position:relative;display:block;overflow:hidden;padding:0}
.videos .box-image{width: 100%;height: 170px;display: block;position:relative;margin:0;padding:0}
.videos .box-image:before{content:"\f04b";font-family:FontAwesome;line-height:25px;width:25px;height:25px;font-size:12px;color:#fff;text-align:center;background-color:RGBA(0,0,0,0.4);font-weight:400;position:absolute;top:8px;opacity:.5;right:7px;z-index:2;padding:0;border:2px solid #fff;border-radius:50%;transition:all .3s ease}
.videos li:hover .box-image:before,.gallery li:hover .category-gallery a:before{opacity:1}
.videos .box-image:after{content:no-close-quote;position:absolute;left:0;bottom:0;width:100%;height:150px;background:url(http://3.bp.blogspot.com/-LnvazGBvKh8/VskckSkmzxI/AAAAAAAAC4s/erEgI6A_ih4/s1600-r/metabg.png) repeat-x;opacity:.8}
.videos .recent-content{position:absolute;bottom:0;width:100%;z-index:2;padding:10px;text-align:left;box-sizing:border-box}
.gallery-overlay,.videos-overlay{position:absolute;left:0;top:0;z-index:1;width:100%;height:100%;background-color:rgba(40,35,40,0.0)}
.gallery li:hover .gallery-overlay,.videos li:hover .videos-overlay{background:rgba(40,35,40,0.3)}
.owl-carousel .animated{-webkit-animation-duration:1000ms;animation-duration:1000ms;-webkit-animation-fill-mode:both;animation-fill-mode:both}
.owl-carousel .owl-animated-in{z-index:0}
.owl-carousel .owl-animated-out{z-index:1}
.owl-carousel .fadeOut{-webkit-animation-name:fadeOut;animation-name:fadeOut}
@-webkit-keyframes fadeOut {
0%{opacity:1}
100%{opacity:0}
}
@keyframes fadeOut {
0%{opacity:1}
100%{opacity:0}
}
.owl-height{-webkit-transition:height 500ms ease-in-out;-moz-transition:height 500ms ease-in-out;-ms-transition:height 500ms ease-in-out;-o-transition:height 500ms ease-in-out;transition:height 500ms ease-in-out}
.owl-carousel{display:none;width:100%;-webkit-tap-highlight-color:transparent;position:relative;z-index:1}
.owl-carousel .owl-stage{position:relative;-ms-touch-action:pan-Y}
.owl-carousel .owl-stage:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}
.owl-carousel .owl-stage-outer{position:relative;overflow:hidden;-webkit-transform:translate3d(0px,0px,0px)}
.owl-carousel .owl-controls .owl-nav .owl-prev,.owl-carousel .owl-controls .owl-nav .owl-next,.owl-carousel .owl-controls .owl-dot{cursor:pointer;cursor:hand;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.owl-carousel.owl-loaded{display:block}
.owl-carousel.owl-loading{opacity:0;display:block}
.owl-carousel.owl-hidden{opacity:0}
.owl-carousel .owl-refresh .owl-item{display:none}
.owl-carousel .owl-item{position:relative;min-height:1px;float:left;-webkit-backface-visibility:hidden;-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.owl-carousel .owl-item img{display:block;width:100%;-webkit-transform-style:preserve-3d}
.owl-carousel.owl-text-select-on .owl-item{-webkit-user-select:auto;-moz-user-select:auto;-ms-user-select:auto;user-select:auto}
.owl-carousel .owl-grab{cursor:move;cursor:-webkit-grab;cursor:-o-grab;cursor:-ms-grab;cursor:grab}
.owl-carousel.owl-rtl{direction:rtl}
.owl-carousel.owl-rtl .owl-item{float:right}
.no-js .owl-carousel{display:block}
.owl-prev,.owl-next{top:0;color:#fff;background-color:rgba(0,0,0,0.75);font-family:FontAwesome;position:absolute;z-index:1;display:block;padding:0;cursor:pointer;padding:0;text-align:center;overflow:hidden}
.owl-prev{left:0}
.owl-prev:before{content:"\f104"}
.owl-next{right:0}
.owl-next:before{content:"\f105"}
.owl-prev:hover,.owl-next:hover{background-color:#000}
.owl-dots{position:absolute;bottom:1px;width:33.33%;left:0;right:0;margin:auto;text-align:center}
.owl-dot{background:#fff;height:3px;width:10px;display:inline-block;margin:0 5px;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;opacity:.6}
.owl-dot.active,.owl-dot:hover{background:$(main.color)}
.main-carousel{height: 250px;overflow:hidden}
.main-carousel .owl-item{width:100%;}
.carousel-item{height: 250px;width:100%;position:relative;padding:0!important;display:block;overflow:hidden}
.carousel-item .box-image{height:250px;position:relative;width:100%;display:block}
.carousel-item .box-image:after{content:no-close-quote;position:absolute;left:0;bottom:0;width:100%;height:151px;background:url(http://3.bp.blogspot.com/-LnvazGBvKh8/VskckSkmzxI/AAAAAAAAC4s/erEgI6A_ih4/s1600-r/metabg.png) repeat-x;opacity:.8}
.carousel-content{position:absolute;bottom:0;width:100%;z-index:2;box-sizing:border-box}
.carousel-item .carousel-content{padding:15px;text-align:left}
.carousel-item .recent-title{margin:10px 0 5px;font-size:19px;font-weight:400}
.carousel-item .recent-title a{    color: #fff;
    display: block;
    line-height: 1.4em;
    text-shadow: 0 0.5px 0.5px rgba(34,34,34,0.3);
    line-height: 1.4;
    font-weight: 600;
    font-family: 'Poppins';
    font-size: 18px;
    letter-spacing: -.04em;}
.carousel-item .recent-author,.carousel-item .recent-date{color:#ccc}
.carousel-tag a{display:inline-block;background-color:$(main.color);color:#fff;height:20px;line-height:20px;padding:0 6px;font-size:11px;text-transform:uppercase;border-radius:2px}
.carousel-overlay{position:absolute;left:0;top:0;z-index:1;width:100%;height:100%;background-color:rgba(40,35,40,0.05)}
.main-carousel .owl-item:hover .carousel-overlay {background-color:rgba(40,35,40,0.30)}  
.main-carousel .owl-prev,.main-carousel .owl-next{margin-top:0px;width:40px;height:40px;font-size:25px;line-height:40px}
.main-carousel .owl-prev{left:-50px}
.main-carousel:hover .owl-prev{left:0}
.main-carousel .owl-next{right:-50px}
.main-carousel:hover .owl-next{right:0}
.main-carousel .owl-dots{bottom:10px}
.recent-author,.recent-date{color:#bdbdbd;font-size:12px;font-weight:400}
.recent-date:before,.featured-date:before{content:'\f133';font-family:fontawesome;color:#bbb;margin-right:5px}
.recent-author::before,.featured-author::before{content:'\f007';font-family:fontawesome;color:#bbb;margin-right:5px}
.recent-author,.featured-author{margin-right:10px}
.custom-widget li{overflow:hidden;border-bottom:1px solid #F5F5F5;padding:10px 0}
.custom-widget li:first-child{padding-top:0}
.custom-widget li:last-child{border-bottom:none}


.custom-widget .rcthumb{position:relative;float:left;margin:0!important;width:100%;height:160px;overflow:hidden;display:block;vertical-align:middle}

.custom-widget .rcp-title{overflow:hidden;line-height:0;margin:10px 0 2px;padding:0}

.custom-widget .post-panel{display:table-cell}

div#sidebar-wrapper1 .custom-widget .rcthumb {
    position: relative;
    float: left;
    margin: 0!important;
    width: 100%;
    height: 110px;
    overflow: hidden;
    display: block;
    vertical-align: middle;
}


#footer-wrapper .custom-widget .rcthumb{position:relative;float:left;margin:0!important;width:100px;height:75px;overflow:hidden;display:block;vertical-align:middle}

#footer-wrapper .custom-widget .rcp-title{overflow:hidden;line-height:0;margin:0px 0 2px;padding:0}


#footer-wrapper .custom-widget .post-panel {
    display: table-cell;
    padding-left: 10px;
}




.custom-widget .rcp-title a{    font-size: 14px;
    line-height: 22px;
    font-weight: 700;
    color: #111;
    font-family: Merriweather;}
.custom-widget .rcp-title a:hover{color:$(main.color)}
.cmm-widget li .cmm-avatar{position:relative;overflow:hidden;padding:0;width:55px;height:55px;float:left;margin:0 10px 0 0}
.cmm-widget li{background:none!important;clear:both;list-style:none;word-break:break-all;display:block;border-top:1px solid #F5F5F5;overflow:hidden;margin:0;padding:10px 0}
.cmm-widget li:first-child{padding-top:0;border-top:0}
.cmm-widget li:last-child{padding-bottom:0}
.cmm-widget li span{margin-top:4px;color:#bdbdbd;display:block;line-height:1.2em;text-transform:lowercase;font-size:12px;font-style:italic;font-weight:400}
.cmm-img{width:55px;height:55px;float:left;margin:0 10px 0 0}
.cmm-widget a{color:#222222;position:relative;font-size:13px;text-transform:capitalize;display:block;overflow:hidden;font-weight:400}
.cmm-widget a:hover{color:$(main.color)}
.cmm-widget{list-style:none;padding:0}
.home-ad .widget{width:728px;max-height:90px;padding:0 2% 0 0;margin:0px auto 20px!important;max-width:100%;box-sizing:border-box}
#ads-content h2,#ads-home h2,#post-ads-footer h2{display:none!important}

.post{display:block;overflow:hidden;word-wrap:break-word}
.index .post,.archive .post{margin:0 0 15px 0;padding-bottom:15px;border-bottom:1px solid #F5F5F5}
.index div.post-outer:last-child .post,.archive div.post-outer:last-child .post{border-bottom:0;padding-bottom:5px}
.block-image{position:relative;float:left;width:300px;height:190px;margin-right:20px}
.block-image .thumb{width:100%;height:190px;position:relative;display:block;z-index:2;overflow:hidden}
.block-image .thumb a{width:100%;height:190px;display:block}
.thumb-overlay{position:absolute;left:0;top:0;z-index:2;width:100%;height:100%;background-color:rgba(40,35,40,0.05)}
.block-image:hover .thumb a .thumb-overlay{background-color:rgba(40,35,40,0.30)}
.retitle h2{margin:8px 0;display:block}
.post h2 a,.post h2 a:visited,.post h2 strong{font-size: 18px;
    line-height: 22px;
    font-weight: 700;
    color: #111;
    font-family: Merriweather;}
.post h2 a:hover{color:$(main.color)}
.widget iframe,.widget img{max-width:100%}
.index .post-footer,.archive .post-footer{display:none!important}
.index .post h2,.archive .post h2{margin:0 0 10px;padding:0 10px 0 0;overflow:hidden}
.item .post,.static_page .post{padding:0;    background: #ffffff;

    border-radius: 2px;
  }
.date-header{display:block;overflow:hidden;font-weight:400;margin:0!important;padding:0}
#meta-post{font-size:12px;color:#bdbdbd;line-height:1.4em}
#meta-post a{color:#bdbdbd}
#meta-post a span:before{content:'\f007';font-family:fontawesome;color:#bbb;margin-right:5px}
#meta-post .timestamp-link{margin-left:10px}
#meta-post .timestamp-link abbr:before{content:'\f133';font-family:fontawesome;color:#bbb;margin-right:5px}
.resumo{margin-top:8px;font-size:13px;line-height:1.5em;color:#888}
.resumo span{display:block;margin-bottom:8px;padding-right:10px}
a.read-more{display:inline-block;margin-bottom:0;font-weight:400;text-align:left;vertical-align:middle;cursor:pointer;background-image:none;white-space:nowrap;line-height:25px;height:25px;color:#fff;background-color:$(main.color);border-radius:2px;font-size:13px;padding:0 10px;margin-top:3px;outline:none;border:none;overflow:hidden}
a.read-more:after{content:"\f101";font-family:FontAwesome;font-size:13px;margin-left:5px}
.post-meta{color:#bdbdbd;display:block;font-size:13px;font-weight:400;line-height:21px;margin:0;padding:0}
.hreview{display:none!important}
.postags{position:absolute;top:15px;left:15px;z-index:3}
.postags a{display:inline-block;background:$(main.color);color:#fff;margin:0;height:20px;line-height:20px;padding:0 6px;font-size:11px;text-transform:uppercase;border-radius:2px;display:none}
.postags a:first-child{display:inline-block}
.breadcrumbs a {
    color: #999999;
 
}
.breadcrumbs {
    color: #bdbdbd;
    font-size: 12px;
    font-weight: 400;
    font-family: 'Open Sans', sans-serif;
}
.item article,.static_page article{margin-top:15px}
.item .post-head,.static_page .post-head{margin:0 0 5px;position:relative;}
.item .post-title,.static_page .post-title{    color: #222222;

    position: relative;
    display: inline-block;
    top: 20px;

    margin-bottom: 20px;
    letter-spacing: -0.06em;
    word-spacing: -0.04em;
    font-family: 'Poppins';
    font-size: 41px;
    font-weight: 700;
    line-height: 1.3;}
.item .post-body,.static_page .post-body{width:100%;color:#5E5E5E;font-size:15px;line-height:1.5em;overflow:hidden}
.item .post-outer{padding:0}
.item .post-body img{max-width:100%}
.post-meta a{color:#bbb}
.post-timestamp{margin-left:0}
.label-head{margin-left:0}
.label-head a{padding-left:2px}
.label-head a:hover{color:$(main.color)}
.post-meta .g-profile span:before{content:'\f007';font-family:fontawesome;color:#bbb;margin-right:5px}
.post-meta .post-timestamp{margin-left:10px}
.post-meta .post-timestamp .timestamp-link abbr:before{content:'\f133';font-family:fontawesome;color:#bbb;margin-right:5px}
.post-meta .label-head{margin-left:10px}
.post-meta .label-head:before{content:'\f07c';font-family:fontawesome;color:#bbb;margin-right:0}
.main .widget{margin:0}
.main .Blog{border-bottom-width:0}
.share-box{height:36px;position:relative;line-height:0;margin:20px 0;padding:0;border-bottom:2px solid #eee}
.share-title{height:36px;color:#222222;float:left;font-size:13px;font-weight:700;position:relative;line-height:36px;text-transform:uppercase;display:inline-block;padding:0;border-bottom:2px solid #222222}
.share-art{float:right;padding:0;padding-top:0;font-size:13px;font-weight:400;text-transform:capitalize;text-align:right}
.share-art a{height:25px;line-height:26px;color:#fff;padding:0 8px;margin-left:4px;border-radius:2px;display:inline-block;margin-right:0}
.share-art a:hover{color:#fff}
.share-art .fac-art i{padding-right:2px}
.share-art .fac-art{background:#3b5998}
.share-art .fac-art:hover{background:rgba(49,77,145,0.7)}
.share-art .twi-art{background:#00acee}
.share-art .twi-art:hover{background:rgba(7,190,237,0.7)}
.share-art .goo-art{background:#db4a39}
.share-art .goo-art:hover{background:rgba(221,75,56,0.7)}
.share-art .pin-art{background:#CA2127}
.share-art .pin-art:hover{background:rgba(202,33,39,0.7)}
.share-art .lin-art{background:#0077B5}
.share-art .lin-art:hover{background:rgba(0,119,181,0.7)}
#ads-footer{display:none}
.ad-post-footer .widget-content{width:728px;max-width:100%;margin:0 auto 17px!important;max-height:90px}
#related-posts{margin-bottom:20px}
.related-wrap{overflow:hidden;position:relative}
.related-wrap li{width:33.33%;height:160px;padding-right:5px;position:relative;overflow:hidden;float:left;display:inline-block;box-sizing:border-box;list-style:none}
.related-wrap li:nth-child(3n+3){padding-right:0px;}
.related-wrap li:nth-child(4),.related-wrap li:nth-child(5),.related-wrap li:nth-child(6){margin-top:10px}
.related-wrap li .related-img{width:100%;height:160px;position:relative;display:block}
.related-wrap li .related-img:after{content:no-close-quote;position:absolute;left:0;bottom:0;width:100%;height:150px;background:url(http://3.bp.blogspot.com/-LnvazGBvKh8/VskckSkmzxI/AAAAAAAAC4s/erEgI6A_ih4/s1600-r/metabg.png) repeat-x;opacity:.8}
.related-overlay{position:absolute;left:0;top:0;z-index:1;width:100%;height:100%;background-color:rgba(40,35,40,0.05)}
.related-wrap li:hover .related-overlay{background-color:rgba(40,35,40,0.30)}
.related-content{position:absolute;bottom:0;padding:10px;width:100%;box-sizing:border-box;z-index:2}
.related-content .related-tag a{display:inline-block;background-color:$(main.color);color:#fff;height:18px;line-height:18px;padding:0 5px;margin:0;font-size:10px;font-weight:400;text-transform:uppercase;border-radius:2px}
.related-title a{    padding: 10px 0;

    color: #fff;
    display: block;
    text-shadow: 0 0.5px 0.5px rgba(34,34,34,0.3);
    line-height: 1.4;
    font-weight: 600;
    font-family: 'Poppins';
    font-size: 14px;
    letter-spacing: -.04em;}
.related-wrap .owl-dots{bottom:0}
.ticker .post-tag:hover,.featured .post-tag:hover,.carousel-tag a:hover,.bx-first .box-thumbnail .first-tag a:hover,.category-gallery a:hover:before,.post-readmore a:hover,.postags a:hover,a.read-more:hover,.related-tag a:hover{background:#222222}
.post-nav li{padding:0;display:inline-block;width:50%}
.post-nav li strong{display:block;padding:0 0 5px;font-weight:700;text-transform:uppercase;font-size:13px}
.post-nav li strong i{transition:all 0s ease;-webkit-transition:all 0s ease;-moz-transition:all 0s ease;-o-transition:all 0s ease}
ul.post-nav{background-color:#FFF;border-bottom:2px solid #EEE;border-top:2px solid #EEE;display:block;width:100%;overflow:hidden}
.post-nav li a{color:#222222;line-height:1.3em;display:block;padding:15px 0;transition:all 0s ease;-webkit-transition:all 0s ease;-moz-transition:all 0s ease;-o-transition:all 0s ease}
.post-nav li:hover a{opacity:.6}
ul.post-nav span{font-size:13px;font-weight:400}
.post-nav .previous{float:left;min-height:80px;border-right:1px solid #eee;box-sizing:border-box;padding-right:10px}
.post-nav .next{text-align:right;border-left:1px solid #eee;margin-left:-1px;padding-left:10px;box-sizing:border-box}
#blog-pager{clear:both;text-align:center;margin:0}
.index #blog-pager{display:block}
.index #blog-pager,.archive #blog-pager{padding:0 0 20px;text-align:left}
#blog-pager-newer-link a,#blog-pager-older-link a{display:block;float:left;margin-right:0;padding:0 12px;border:0;text-transform:uppercase;line-height:32px;font-weight:400;background-color:#222222;color:#fff;font-size:12px;border-radius:2px}
#blog-pager-newer-link a:hover,#blog-pager-older-link a:hover{background-color:$(main.color)}
.showpageNum a,.showpage a,.showpagePoint{display:block;float:left;margin-right:6px;padding:0 12px;background:#222222;color:#fff;border:0;text-transform:uppercase;line-height:32px;font-weight:400;border-radius:2px}
.showpageNum a:hover,.showpage a:hover{background-color:$(main.color)}
.showpageNum a i,.showpage a i{transition:all .0s ease;-webkit-transition:all .0s ease;-moz-transition:all .0s ease;-o-transition:all .0s ease}
.showpagePoint{background-color:$(main.color);color:#fff}
.showpageOf{display:none!important}
.blogger-tab{display:block}
.comments{clear:both;margin-top:10px;margin-bottom:0;color:#222222}
.comments h4{font-weight:400}
.comments .comments-content{padding:10px 0}
.comments .comments-content .comment{margin-bottom:0;padding-bottom:8px}
.comments .comments-content .comment:first-child{padding-top:0}
.facebook-tab,.fb_iframe_widget_fluid span,.fb_iframe_widget iframe{width:100%!important}
.comments .item-control{position:static}
.comments .avatar-image-container{float:left}
.comments .avatar-image-container,.comments .avatar-image-container img{height:35px;max-height:35px;width:35px;max-width:35px;border-radius:2px}
.comments .comment-block{padding:10px;box-shadow:none;border:1px solid #eee;border-radius:2px}
.comments .comment-block,.comments .comments-content .comment-replies{margin-left:47px;margin-top:0}
.comments .comments-content .inline-thread{padding:0}
.comments .comments-content .comment-header{font-size:14px;border-bottom:1px solid #eee;padding:0 0 3px}
.comments .comments-content .user{font-style:normal;font-weight:400}
.comments .comments-content .icon.blog-author{font-weight:400}
.comments .comments-content .comment-content{color:#5e5e5e;text-align:left;font-size:14px;line-height:1.4em}
.comments .comment .comment-actions a{margin-right:5px;padding:2px 5px;color:#222222;font-weight:400;background-color:#f5f5f5;font-size:10px}
.comments .comment .comment-actions a:hover{color:#fff;background-color:$(main.color);text-decoration:none}
.comments .comments-content .datetime{color:#999;margin-left:0;float:right;font-size:11px}
.comments .comments-content .comment-header a{color:inherit}
.comments .comments-content .comment-header a:hover{color:$(main.color)}
.comments .comments-content .icon.blog-author:before{content:"\f007";font-size:12px;font-family:FontAwesome}
.comments .thread-toggle{margin-bottom:4px}
.comments .comments-content .comment-thread{margin:4px 0}
.comments .continue a{padding:0;padding-top:10px;padding-left:47px;font-weight:400}
.comments .comments-content .loadmore.loaded{margin:0;padding:0}
.comments .comment-replybox-thread{margin:0}
iframe.blogger-iframe-colorize,iframe.blogger-comment-from-post{height:283px!important}
.comments-tabs.simpleTab .tab-content{background-color:transparent;padding:0;margin-top:0px}
.comments-tabs.simpleTab .tab-content .tab-blogger{margin-top:15px}
.comments-tabs.simpleTab{border:0;margin:20px 0;padding:0}
.comments-tabs-header{height:32px;background-color:#222222;position:relative;line-height:32px;margin:0;padding:0}
.comments-tabs-header h3{position:relative;display:block;color:#eee;float:left;height:32px;font-size:13px;font-weight:700;line-height:32px;text-transform:uppercase}
.comments-tabs-header h3:before{content:"\f086";width:32px;height:32px;float:left;background-color:$(main.color);font-family:FontAwesome;color:#fff;font-weight:400;text-align:center;margin-right:10px}
.comments-tabs.simpleTab .tab-wrapper li a{height:32px;background-color:#333333;color:#eee;font-size:12px;font-weight:400;text-transform:uppercase;line-height:32px;margin:0;padding:0 10px}
.comments-tabs.simpleTab .tab-wrapper li a.activeTab{background-color:$(main.color)}
.comments-tabs.simpleTab .tab-wrapper{float:right;text-align:right}
.comments-tabs.simpleTab .tab-wrapper li{margin-left:0}
.simpleTab .tab-wrapper li{display:inline-block;margin:0;padding:0}
.simpleTab .tab-wrapper li a{background-color:#333333;color:#FFF;padding:10px 25px;display:block}
.simpleTab .tab-wrapper li:before{content:'';display:none}
.simpleTab{margin:10px 0}
.simpleTab .tab-content{padding:15px;background-color:#f8f8f8}
.simpleTab .tab-wrapper li a.activeTab{background-color:$(main.color);color:#fff}
.simpleTab *{transition:all 0s ease;-webkit-transition:all 0s ease;-moz-transition:all 0s ease;-o-transition:all 0s ease}
.simpleTab.side .tab-wrapper{float:left;width:30%;margin:0!important;padding:0!important;transition:all 0s ease;-webkit-transition:all 0s ease;-moz-transition:all 0s ease;-o-transition:all 0s ease}
.simpleTab .tab-wrapper{padding:0!important;margin:0!important}
.simpleTab.side .tab-content{float:left;width:70%;box-sizing:border-box;transition:all 0s ease;-webkit-transition:all 0s ease;-moz-transition:all 0s ease;-o-transition:all 0s ease}
.simpleTab.side .tab-wrapper li{width:100%;display:block;text-align:center}
.simpleTab.side .tab-wrapper li a{padding:15px 0}
.simpleTab.side{overflow:hidden}
.post-body h1,.post-body h2,.post-body h3,.post-body h4,.post-body h5,.post-body h6{margin-bottom:15px}
blockquote{background: #fcfcfc;border-left:3px solid $(main.color);margin-left:0;padding:10px 15px}
blockquote:before{content:'\f10d';display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;margin-right:10px;color:#999}
blockquote:after{content:'\f10e';display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;margin-left:10px;color:#999}
.firstcharacter{float:left;color:$(main.color);font-family:Georgia;font-size:75px;line-height:60px;padding-top:4px;padding-right:8px;padding-left:3px;}
.widget .post-body ul,.widget .post-body ol{line-height:1.5;font-weight:400}
.widget .post-body li{margin:5px 0;padding:0;line-height:1.5}
.post-body ul li:before{content:"\f105";margin-right:5px;font-family:fontawesome}
#sidebar-wrapper .widget{        margin-bottom: 20px;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid #eaeaea;
    padding: 25px;
    }
.sidebar h2, .sidebar2 h2, .tab h2 {
    color: #666;

    text-transform: uppercase;
    margin: 0 0 0 0;
    padding: 0;
    position: relative;
    margin-bottom: 20px;
  
    position: relative;
height:31px;
}
.sidebar h2 span, .sidebar2 h2 span {
    position: relative;
   
    display: inline-block;
    border-bottom: 3px solid #51c8fa;
    height: 27px;
    line-height: 25px;

    text-transform: none;
    z-index: 22;
    border-color: #01bd5d !important;
    color: #000;
    font-family: Merriweather;
    font-weight: 700;
    font-style: normal;
    font-size: 14px;
}

.sidebar h2:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 3px;
    z-index: 1;
    background: #eaeaea !important;
}

.sidebar ul{list-style:none}
.sidebar .widget-content{margin:0}
.social-counter{margin:0;padding:0;overflow:hidden}
.social-counter ul{margin:0;padding:0}
.social-counter ul li{width:42%;float:left;text-align:left;margin:0 0 5px;padding:0 0 5px;position:relative;    position: relative;
    border: 1px solid #f5f5f5;
    padding: 7px;}
.social-counter ul li:nth-child(2),.social-counter ul li:nth-child(4),.social-counter ul li:nth-child(6),.social-counter ul li:nth-child(8){float:right}

.social-counter ul li a{margin:0;padding:0}
.item-icon{float:left;position:relative;text-align:center;vertical-align:middle;color:#fff;margin:0;display:inline-block;width:32px;height:32px;line-height:32px;font-size:16px;border-radius:2px}
.hide-count{display:none}
.item-count{display:inline-block;color:#333;font-weight:700;font-size:13px;line-height:32px;float:left;padding-left:10px}
.item-text{float:right;display:inline-block;color:#666666;font-size:11px;line-height:32px;font-weight:400}
.item-social.facebook .item-icon{background-color:#5271b3}
.item-social.twitter .item-icon{background-color:#49aff8}
.item-social.gplus .item-icon{background-color:#cb2027}
.item-social.rss .item-icon{background-color:#FFC200}
.item-social.youtube .item-icon{background-color:#eb1a21}
.item-social.dribbble .item-icon{background-color:#ea4c89}
.item-social.instagram .item-icon{background-color:#4E729A}
.item-social.pinterest .item-icon{background-color:#cb2027}
.item-social.facebook .item-icon:before{content:"\f09a"}
.item-social.twitter .item-icon:before{content:"\f099"}
.item-social.gplus .item-icon:before{content:"\f0d5"}
.item-social.rss .item-icon:before{content:"\f09e"}
.item-social.youtube .item-icon:before{content:"\f16a"}
.item-social.instagram .item-icon:before{content:"\f16d"}
.item-social.dribbble .item-icon:before{content:"\f17d"}
.item-social.pinterest .item-icon:before{content:"\f0d2"}
.social-counter ul li:hover .item-icon{background-color:#222222}
.social-counter ul li:hover .item-text{color:$(main.color)}
.menu-tab li a,.sidetabs .section {transition:all 0s ease;-webkit-transition:all 0s ease;-moz-transition:all 0s ease;-o-transition:all 0s ease;-ms-transition:all 0s ease}
.menu-tab{overflow:hidden;clear:both;padding:0;margin:0 0 10px}
.sidetabs .widget h2{display:none}
.menu-tab li{width:50%;float:left;display:inline-block;padding:0}
.menu-tab li a{height:32px;text-align:center;padding:0;font-weight:700;display:block;color:#EEE;background-color:#222222;font-size:11px;line-height:34px;letter-spacing:.5px;text-transform:uppercase}
.menu-tab li.active a{color:#FFF;background-color:$(main.color)}
.menu-tab li{display:none}
.hide-tab{display:inline-block!important}
.list-label-widget-content li{display:block;padding:8px 0;border-bottom:1px solid #F5F5F5;position:relative}
.list-label-widget-content li:first-child{padding:0 0 8px}
.list-label-widget-content li:last-child{padding-bottom:0;border-bottom:0}
.list-label-widget-content li a:before{content:'\203a';position:absolute;left:0px;top:2px;font-size:22px;color:#222222}
.list-label-widget-content li:first-child a:before{top:-7px}
.list-label-widget-content li a{color:#222222;font-size:11px;padding-left: 15px;font-weight:400;text-transform:uppercase}
.list-label-widget-content li a:hover{color:$(main.color)}
.list-label-widget-content li span:last-child{color:#999;font-size:11px;font-weight:700;position:absolute;top:8px;right:0}
.list-label-widget-content li:first-child span:last-child{top:2px}
.cloud-label-widget-content{text-align:left}
.cloud-label-widget-content .label-count{background:$(main.color);color:#fff!important;margin-left:-3px;padding-right:3px;white-space:nowrap;border-radius: 2px;padding: 1px 4px !important;font-size: 12px !important;margin-right: 5px;}
.cloud-label-widget-content .label-size{background:#f5f5f5;display:block;float:left;font-size:11px;margin:0 5px 5px 0}
.cloud-label-widget-content .label-size a,.cloud-label-widget-content .label-size span{height: 18px !important;color:#222222;display:inline-block;font-size:12px;font-weight:500!important;padding:6px 8px}
.cloud-label-widget-content .label-size a{padding:6px 10px}
.cloud-label-widget-content .label-size a:hover{color:#fff!important}
.cloud-label-widget-content .label-size,.cloud-label-widget-content .label-count{height:30px!important;line-height:19px!important;border-radius:2px}
.cloud-label-widget-content .label-size:hover{background:$(main.color);color:#fff!important}
.cloud-label-widget-content .label-size:hover a{color:#fff!important}
.cloud-label-widget-content .label-size:hover span{background:#222222;color:#fff!important;cursor:pointer}
.cloud-label-widget-content .label-size-1,.label-size-2,.label-size-3,.label-size-4,.label-size-5{font-size:100%;opacity:10}
.label-size-1,.label-size-2{opacity:100}
.FollowByEmail td{width:100%;float:left;box-sizing:border-box}
.FollowByEmail .follow-by-email-inner .follow-by-email-submit{margin-left:0;width:100%;border-radius:0;height:30px;font-size:11px;color:#fff;background-color:$(main.color);font-family: inherit;text-transform:uppercase;letter-spacing:1px}
.FollowByEmail .follow-by-email-inner .follow-by-email-submit:hover{background-color:#222222;}
.FollowByEmail .follow-by-email-inner .follow-by-email-address{padding-left:10px;height:30px;border:1px solid #F5F5F5;margin-bottom:5px;box-sizing:border-box;font-size:12px;font-family:'Open Sans', sans-serif}
.FollowByEmail .follow-by-email-inner .follow-by-email-address:focus{border:1px solid #F5F5F5}
.FollowByEmail .widget-content:before{content:"Subscribe to our mailing list to get the new updates!";    display: block;
    padding: 0 2px;
    letter-spacing: -.04em;
    font-size: 28px;
    line-height: 1.2;
    color: #2c2f34;
    font-family: 'Poppins';
    margin-bottom: 10px;
    font-weight: 600;
    text-align: center;}
.flickr_widget .flickr_badge_image{float:left;margin-bottom:5px;margin-right:10px;overflow:hidden;display:inline-block}
.flickr_widget .flickr_badge_image:nth-of-type(4),.flickr_widget .flickr_badge_image:nth-of-type(8),.flickr_widget .flickr_badge_image:nth-of-type(12){margin-right:0}
.flickr_widget .flickr_badge_image img{max-width:67px;height:auto}
.flickr_widget .flickr_badge_image img:hover{opacity:.5}
#ArchiveList select{border:1px solid #F5F5F5;padding:6px 8px;width:100%;cursor:pointer;font-family:'Playfair Display',arial,sans-serif;font-size:12px;color:#222222}
.PopularPosts .item-thumbnail{margin:0 10px 0 0 !important;width:80px;height:60px;float:left;overflow:hidden}
.PopularPosts .item-thumbnail a{position:relative;display:block;overflow:hidden;line-height:0}
.PopularPosts ul li img{padding:0;width:80px;height:60px}
.PopularPosts .widget-content ul li{overflow:hidden;border-top:1px solid #F5F5F5;padding:10px 0}
.sidebar .PopularPosts .widget-content ul li:first-child,.sidebar .custom-widget li:first-child{padding-top:0;border-top:0}
.sidebar .PopularPosts .widget-content ul li:last-child,.sidebar .custom-widget li:last-child{padding-bottom:0}
.PopularPosts ul li a{font-size: 13px;
    line-height: 22px;
    font-weight: 700;
    color: #111;
    font-family: Merriweather;}
.PopularPosts ul li a:hover{color:$(main.color)}
.PopularPosts .item-title{margin:0;padding:0;line-height:0}
.item-snippet{font-size:12px;padding-top:3px;font-weight:400;color:#999}
#footer-wrapper{background-color:#1f2024}
#footer{overflow:hidden;margin:0 auto;padding:20px 0}
.sect-left{display:inline-block;float:left;width:32%;margin-right:2%}
.sect-left:nth-child(3){margin-right:0}
.sect-left .widget{padding:15px 0 20px}
.sect-left .widget:nth-of-type(2){padding-top:0}
.sect-left .widget .title-wrap{height:32px;position:relative;line-height:0;margin:0 0 20px;padding:0;border-bottom:4px solid #333333}
.sect-left .widget h2{position:relative;display:inline-block;color:#EEE;font-size:13px;height:32px;line-height:32px;text-transform:uppercase;font-weight:700;letter-spacing:.5px;padding:0}
.sect-left .widget .title-wrap h2{border-bottom:4px solid $(main.color)}
.sect-left .custom-widget .rcp-title a,.sect-left .PopularPosts ul li a{color:#fff}
.sect-left .recent-date{color:#999999}
.sect-left .custom-widget li{overflow:hidden;border-top:1px solid #333333;border-bottom:0;padding:10px 0}
.sect-left .PopularPosts .widget-content ul li{border-top:1px solid #333333}
.sect-left .PopularPosts .widget-content ul li:first-child{padding-top:0;border-top:0}
.sect-left .PopularPosts .widget-content ul li:first-child,.sect-left .custom-widget li:first-child{padding-top:0;border-top:0}
.sect-left .custom-widget .rcp-title a:hover,.sect-left .PopularPosts ul li a:hover{color:$(main.color)}
.sect-left .FollowByEmail .widget-content:before{color:#EEEEEE;margin-top:5px}
.sect-left .FollowByEmail .follow-by-email-inner .follow-by-email-submit{background-color:#333333;color:#EEEEEE}
.sect-left .FollowByEmail .follow-by-email-inner .follow-by-email-submit:hover{background-color:$(main.color)}
.sect-left #ArchiveList select{border:1px solid #333333;background:#333333;color:#EEEEEE}
.sect-left #ArchiveList select option{color:#EEEEEE}
.sect-left .cloud-label-widget-content .label-size {background:#333333}
.sect-left .cloud-label-widget-content .label-size:hover{background:$(main.color)}
.sect-left .cloud-label-widget-content .label-size a{color:#EEEEEE}
.sect-left .list-label-widget-content li{border-bottom:0;border-top:1px solid #333333}
.sect-left .list-label-widget-content li:first-child{border-top:0;padding-top:0}
.sect-left .list-label-widget-content li a,.sect-left .list-label-widget-content li a:before{color: #EEEEEE}
.sect-left .list-label-widget-content li a:hover{color:$(main.color)}
.sect-left .list-label-widget-content li:first-child a:before{top: -6px}
.footer-wrapper{background-color:RGBA(0, 0, 0, 0.2);color:#eee;display:block;padding:18px 0 13px;width:100%;overflow:hidden}
.footer-wrapper .footer-sec{margin:0 auto}
.footer-wrapper .copyright{font-size:12px}
.footer-wrapper .copyright a{color:#fff;font-weight:400;letter-spacing: 0.3px;}
.footer-wrapper .copyright a:hover{color:$(main.color)}
.footer-wrapper .social-footer,.footer-wrapper #social-footer{float:right;position:relative;display:inline-block;margin:0;}
.footer-wrapper .native-opt{display: inline-block;float: right;}
.footer-wrapper .social-footer ul{overflow:hidden}
.footer-wrapper .social-footer li{display:block;float:left;margin-left:5px;padding:0}
.footer-wrapper .social-footer li a{display:block;background-color:#333333;float:left;text-decoration:none;color:#EEE;font-size:13px;padding:0;width:22px;height:22px;text-align:center;line-height:21px;border-radius:2px}
.footer-wrapper .social-footer li a:hover{background-color:$(main.color);color:#fff;}
.footer-wrapper .social-footer li a:before{display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:400;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.social-footer .facebook:before{content:"\f09a"}
.social-footer .twitter:before{content:"\f099"}
.social-footer .gplus:before{content:"\f0d5"}
.social-footer .rss:before{content:"\f09e"}
.social-footer .youtube:before{content:"\f167"}
.social-footer .skype:before{content:"\f17e"}
.social-footer .stumbleupon:before{content:"\f1a4"}
.social-footer .tumblr:before{content:"\f173"}
.social-footer .vine:before{content:"\f1ca"}
.social-footer .stack-overflow:before{content:"\f16c"}
.social-footer .linkedin:before{content:"\f0e1"}
.social-footer .dribbble:before{content:"\f17d"}
.social-footer .soundcloud:before{content:"\f1be"}
.social-footer .behance:before{content:"\f1b4"}
.social-footer .digg:before{content:"\f1a6"}
.social-footer .instagram:before{content:"\f16d"}
.social-footer .pinterest:before{content:"\f0d2"}
.social-footer .delicious:before{content:"\f1a5"}
.social-footer .codepen:before{content:"\f1cb"}
.pop-sec{position:fixed;top:50%;margin-top:-175px;left:50%;max-width:300px;width:90%;margin-left:-150px;background-color:#FFF;height:350px;z-index:99999;display:none;-webkit-transform:scale(0);-moz-transform:scale(0);transform:scale(0);transition:all .5s ease;-webkit-transition:all .2s ease;-moz-transition:all .2s ease;-o-transition:all .2s ease}
.pop-close{position:absolute;top:0;right:0;background-color:$(main.color);color:#FFF;height:25px;width:25px;text-align:center;border-radius:0;line-height:25px;font-size:10px}
.pop-close:hover{opacity:.8;color:#fff}
.pop-sec .widget{padding:0 20px}
.pop-sec h2{background-color:#222222;color:#eee;font-size:13px;padding:0 10px;font-weight:400;height:25px;line-height:25px;margin-left:-20px;margin-right:-20px;text-transform:uppercase}
.pop-sec .contact-form-cross{display:none}
.pop-sec.pop-show{-webkit-transform:scale(1);-moz-transform:scale(1);transform:scale(1)}
#outer-wrapper.pop-active{transition:all 0s ease;-webkit-transition:all 0s ease;-moz-transition:all 0s ease;-o-transition:all 0s ease}
#outer-wrapper.pop-active:before{content:'';position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,0.69);z-index:999;transition:all 0s ease;-webkit-transition:all 0s ease;-moz-transition:all 0s ease;-o-transition:all 0s ease}
.error_page #main-wrapper{width:100%!important;margin:0!important}
.error_page #sidebar-wrapper,.error_page .status-msg-wrap{display:none}
#error-wrap{color:#222222;text-align:center;padding:60px 0 80px}
.error-item{font-size:160px;line-height:1;margin-bottom:20px}
#error-wrap h2{font-size:25px;padding:20px 0 10px}
#error-wrap .homepage{padding-top:10px;display:block}
#error-wrap .homepage i{font-size:20px}
#error-wrap .homepage:hover{text-decoration:underline}
.img-anime .recent-boxes .box-image,.img-anime .recent-boxes .bf-thumb,.img-anime .custom-widget .rcthumb,.img-anime .PopularPosts img,.img-anime .home .block-image .thumb a,.img-anime .tc-thumb a,.img-anime .related-thumb a,.img-anime .PopularPosts .item-thumbnail a{opacity:0;transition:all 0s ease;-webkit-transition:all 0s ease;-moz-transition:all 0s ease;-o-transition:all 0s ease}
.img-anime .img-effect,.img-anime .recent-boxes .box-image.img-effect,.img-anime .recent-boxes .bf-thumb.img-effect,.img-anime .custom-widget .rcthumb.img-effect,.img-anime .PopularPosts img.img-effect,.img-anime .block-image .thumb a.img-effect,.img-anime .tc-thumb a.img-effect,.img-anime .related-thumb a.img-effect,.img-anime .PopularPosts .item-thumbnail a.img-effect{opacity:1;transition:all .8s ease;-webkit-transition:all .8s ease;-moz-transition:all .8s ease;-o-transition:all .8s ease}

/*---- Label Icons CSS ----*/
a.Video:before {content:"\f144"}
a.Car:before {content:"\f1b9"}
a.Business:before {content:"\f0b1"}
a.People:before {content:"\f183"}
a.Nature:before {content:"\f06c"}
a.Fashion:before {content:"\f0c4"}
a.Gallery:before {content:"\f03e"}
a.Technology:before {content:"\f1e6"}
a.Learn:before, a.Culture:before {content:"\f02d"}
a.Music:before {content:"\f001"}
a.Sports:before {content:"\f091"}
a.Children:before {content:"\f1ae"}
a.Photography:before {content:"\f030"}
a.Beauty:before {content:"\f004"}
]]></b:skin>

<style type='text/css'>
/*----Responsive Design----*/
@media screen and (max-width: 1110px) {
.row{max-width:96%}
#main-nav{max-width:96%!important;background:transparent;position:relative!important;margin:0 auto!important}
.is-sticky #main-nav{animation-name:none;animation-duration:0s}
.header-menu.row{max-width:100%}
.ticker .widget{max-width:96%}
.header-logo {
      max-width: 244px;}
}
@media screen and (max-width: 980px) {
#header-blog,.header-content{height:auto}
.header-logo{max-width:222px;margin:15px auto 30px;float:none;display:block}
.header-logo img{margin:0 auto}
.header-ads{float:none;margin:0 auto;display:block}
#main-wrapper{float:none;overflow:hidden;width:100%}
.recent-boxes .box-sec{margin-right:0}
.posts-title{margin-right:0}
#main-wrapper #main{margin-right:0}
#sidebar-wrapper{width:100%;margin:10px auto;float:none;padding-left:0}
#footer{padding:20px 0}
.sect-left{width:100%;margin-right:0}
.sect-left .widget{padding:10px} 
    div#sidebar-wrapper1{display:none}
div#cover-wrapper {width: 93%;overflow: visible;}
}
@media screen and (max-width: 880px) {
#nav1,#menu-main-nav{display:none}
.selectnav{display:block;color:#eee}
.tm-menu{float:left;width:20%}
.tm-menu .selectnav{padding:0 5px;height:22px!important;line-height:22px;margin-top:4px;width:100%;border-radius:2px!important}
.header-menu #menu .selectnav{padding:0 20px!important;font-size:16px;height:60px;line-height:60px;margin-left:10px;float:left;border-radius:0!important}
#main-wrapper {width: auto;}
div#cover-wrapper {width: 100%;}
}
@media screen and (max-width: 800px) {
.featured li:first-child,.featured li:nth-child(2){width:50%;padding-right:5px}
.featured li:nth-child(2){padding-left:5px;padding-right:0}
.featured li:first-child,.featured li:nth-child(2),.featured li:first-child .rcp-thumb,.featured li:nth-child(2) .rcp-thumb{height:250px}
.featured li{width:50%;float:left;padding-right:5px}
.featured li:nth-child(3){margin-top:10px}
.featured li:nth-child(4){padding-left:5px;padding-right:0}
}
@media screen and (max-width: 700px) {
#ticker{display:none}
.feat .bx-first .box-thumbnail,.feat .bf-thumb,.boxes .bx-first .box-thumbnail,.boxes .bf-thumb{height:250px}
.feat .bx-first{width:100%;margin-bottom:0;padding-right:0;border-right:0}
.feat ul li{width:100%;float:left;margin-top:10px;margin-bottom:0;padding-top:10px;padding-bottom:0;border-top:1px solid #F5F5F5;border-bottom:0}
.recent-boxes .column{width:100%}
.home-ad .widget{padding:0}
.block-image{width:100%;height:250px;margin-right:0}
.block-image .thumb,.block-image .thumb a{height:250px}
.index .post article,.archive .post article{overflow:hidden;position:relative;float:left;margin-top:10px}
.footer-wrapper .footer-sec{text-align:center}
.footer-wrapper .social-footer,.footer-wrapper #social-footer{float:none;padding-bottom:5px}
.footer-wrapper .copyright{font-size:12px;display:block;text-align:center}
}
@media screen and (max-width: 600px) {
.featured li:first-child,.featured li:nth-child(2){width:100%;padding-right:0}
.featured li:nth-child(2){padding-left:0;margin-top:10px}
.featured li{width:100%;padding-right:0}
.featured li:nth-child(4){padding-left:0}
.videos ul li{width:100%;margin:0 0 10px}
.videos ul li:last-child{margin:0}
.videos .box-image{height:180px}
.gallery ul li{width:49%;margin-right:1%;margin-bottom:10px}
.gallery ul li:nth-child(2),.gallery ul li:nth-child(4),.gallery ul li:nth-child(6){margin-left:1%;margin-right:0}
.gallery ul li:nth-child(4){margin-bottom:10px}
.related-wrap li{width:100%;height:180px;margin-bottom:10px}
.related-wrap li:last-child{margin-bottom:0}
.related-wrap li .related-img{height:180px}
}
@media screen and (max-width: 440px) { 
.featured li:first-child,.featured li:nth-child(2),.featured li:first-child .rcp-thumb,.featured li:nth-child(2) .rcp-thumb,.block-image,.block-image .thumb,.block-image .thumb a,.feat .bx-first .box-thumbnail,.feat .bf-thumb,.boxes .bx-first .box-thumbnail,.boxes .bf-thumb,.main-carousel,.carousel-item,.carousel-item .box-image{height:200px}
.featured li:first-child .rcp-title,.featured li:nth-child(2) .rcp-title,.post h2 a,.post h2 a:visited,.post h2 strong,.item .post-title,.static_page .post-title{font-size:19px}
.gallery ul li{width:100%;height:180px;margin-right:0;margin-bottom:10px}
.gallery ul li:nth-child(2),.gallery ul li:nth-child(4),.gallery ul li:nth-child(6){margin-left:0}
.gallery ul li:nth-child(5){margin-bottom:10px}
.gallery ul li .box-image{height:180px}
.resp_del2,.resp_del3{display:none}
}
@media screen and (max-width: 340px) {
.header-menu #menu .selectnav{max-width:60%}
.comments-tabs-header h3 span{display:none}
}
@media screen and (max-width: 310px) {
.header-logo{margin:15px auto 10px}
.header-menu #menu .selectnav{max-width:50%}
.header-ads,.resp_del,.social-counter,.sect-left{display:none}
}
</style>

<b:template-skin><![CDATA[
/*------Layout (No Edit)----------*/
body#layout{width:900px}body#layout .row {width: 900px;}
body#layout #outer-wrapper{padding:0;width:900px}
body#layout .section h4{color:#333!important}
body#layout .option{background-color:#2c3e50!important;overflow:hidden!important}
body#layout .option h4{font-size:16px;padding:4px 0 7px;color:#fff!important}
body#layout .option .widget{float:left;width:33.33%}
body#layout .option .widget.locked-widget .widget-content{background-color:#34495e !important;border-color:#455668 !important;color:#fff!important}
body#layout .option .widget.locked-widget .widget-content a.editlink{color:#fff !important;border:1px solid #233648;border-radius:2px;padding:2px 5px;background-color:#233648}
body#layout #topnav,body#layout .tm-head{height:auto;width:900px}
body#layout .tm-menu{margin:0;width:70%}
body#layout .social-area{margin:0;width:30%}
body#layout .header-content,body#layout #header-blog{height:auto;padding:0}
body#layout .header-logo{float:left;width:30%;max-width:30%;max-height:none;margin:0;padding:0}
body#layout #logo_blog{background-color:#b57dcc;border-color:#8a52a1}
body#layout #logo_blog .widget-content{border-color:#8a52a1}
body#layout .header-ads{width:70%;margin:0}
body#layout #menu,body#layout #menu1{display:block;background-color:#6dad88;border-color:#338957}
body#layout #menu .widget-content,body#layout #menu1 .widget-content{border-color:#338957}
body#layout #main-nav,body#layout .header-menu{height:auto}
body#layout .header-menu li.li-home,body#layout .header-search{display:none}
body#layout .header-menu{float:left;width:100%;margin:4px 0 0;padding:0}
body#layout #content-wrapper{margin:0 auto}
body#layout .box-sec .widget-content,body#layout .box-sec h2,body#layout #ads-blog{display:block}
body#layout div#cover-wrapper {
    float: left;
    overflow: hidden;
    width: 72%;
}
body#layout #main-wrapper{float:left;width:75%;margin:0;padding:0}
body#layout .posts-title{display:none}
body#layout #ads-footer{display:block}
body#layout #sidebar-wrapper{float:right;width:28%;margin:0;padding:5px 0 0;background-color:#f8e244!important}
body#layout #sidebar-wrapper1{float:left;width:25%;margin:0;padding:5px 0 0;background-color:#f8e244!important}
body#layout #sidebar-wrapper .section{background-color:#fff;border:1px solid #fff}
body#layout #sidebar-wrapper .section .widget-content{border-color:#5a7ea2!important}
body#layout #sidebar-wrapper .section .draggable-widget .widget-wrap2{background-color:#5a7ea2!important}
body#layout #footer-wrapper{overflow:hidden}
body#layout .sect-left{width:27%;float:left;margin:0 0 8px 2.2% !important}
body#layout #social-footer{width:30%;float:right}
body#layout #unwanted,body#layout #pop-sec,body#layout #contact{display:none!important}
body#layout .social-footer{list-style:none}
body#layout #ticker{background-color:#f38d83;border-color:#c5554a}
body#layout #ticker .widget-content{border-color:#c5554a}
body#layout #ticker .draggable-widget .widget-wrap2{background-color:#c5554a!important}
body#layout #featured-sec{background-color:#f9a85f;border-color:#fb8f3d}
body#layout #featured-sec .widget-content{border-color:#fb8f3d}
body#layout #featured-sec .draggable-widget .widget-wrap2{background-color:#fb8f3d!important}
body#layout #main-wrapper #main{margin-right:4px;background-color:#5a7ea2;border-color:#34495e}
body#layout #main-wrapper #main h4{color:#fff!important}
body#layout .layout-widget-description{display:none!important}
body#layout #Blog1 .widget-content{border-color:#34495e}
body#layout .box-sec{background-color:#7fc1ed!important;border-color:#3498db!important}
body#layout .box-sec .widget-content{border-color:#3498db}
body#layout .box-sec .draggable-widget .widget-wrap2{background-color:#3498db!important;cursor:move}
body#layout #sidebar{margin-top:10px}
body#layout #sidetabs{overflow:hidden;background-color:#e9d33c}
body#layout #tabside1,body#layout #tabside2,body#layout #tabside3{width:44%;float:left}
body#layout #HTML301 .widget-content,body#layout #HTML300 .widget-content{background-color:#2c3e50;color:#fff!important;border-color:#2c3e50}
body#layout #LinkList62 .widget-content,body#layout #LinkList20 .widget-content,body#layout #LinkList50 .widget-content{background-color:#34495e!important;border-color:#34495e!important;color:#fff!important}
body#layout #LinkList62 .widget-content .editlink,body#layout #HTML301 .widget-content .editlink,body#layout #LinkList20 .widget-content .editlink,body#layout #LinkList50 .widget-content .editlink,body#layout #HTML300 .widget-content .editlink{color:#fff !important;border:1px solid #233648;border-radius:2px;padding:2px 5px;background-color:#233648}
body#layout #footer{overflow:hidden;background-color:#1abc9c;padding-top:10px;margin-bottom:10px}
body#layout #footer:before{content:"Footer Sections";font-size:25px;color:#fff;padding:0 0 10px;text-align:center;display:block;font-family:raleway}
body#layout #footer .section .widget-content{border-color:#1abc9c}
body#layout #footer .section .draggable-widget .widget-wrap2{background-color:#1abc9c!important}
body#layout #ads-content,body#layout #ads-inter,body#layout #ads-home,body#layout #post-ads-footer{background-color:rgba(241,196,16,0.22);border-color:#f1c410}
body#layout #ads-content .widget-content,body#layout #ads-inter .widget-content,body#layout #ads-home .widget-content,body#layout #post-ads-footer .widget-content{border-color:#f1c410}
body#layout #ads-content .draggable-widget .widget-wrap2,body#layout #ads-inter .draggable-widget .widget-wrap2,body#layout #ads-home .draggable-widget .widget-wrap2,body#layout #post-ads-footer .draggable-widget .widget-wrap2{background-color:#f1c410!important;cursor:move}
/*------Layout (end)----------*/
]]></b:template-skin>

<b:include data='blog' name='google-analytics'/>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js' type='text/javascript'/>
<script type='text/javascript'> 
//<![CDATA[
var no_image = "http://3.bp.blogspot.com/-Yw8BIuvwoSQ/VsjkCIMoltI/AAAAAAAAC4c/s55PW6xEKn0/s1600-r/nth.png";
var month_format = [, "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
var more_text = "View More";
var postperpage = 8;
var related_number = 3;
var comments_text = "<span>Post </span>Comment";
var pagenav_prev = "Previous";
var pagenav_next = "Next";
 $(document).ready(function(){
        $(".widget h2").wrapInner("<span></span>");
      });

//]]>
</script>

</head>
<body expr:class='data:blog.pageType'>

  <div class='theme-opt' style='display:none'>
    <b:section class='option' id='option' maxwidgets='1' name='Theme Options' showaddelement='yes'>
      <b:widget id='HTML900' locked='true' title='Full Width CSS' type='HTML' version='1'>
        <b:widget-settings>
          <b:widget-setting name='content'/>
        </b:widget-settings>
        <b:includable id='main'>
          &lt;style&gt;@media only screen and (min-width:1143px){#outer-wrapper{max-width:<data:content/>;}}&lt;/style&gt;
        </b:includable>
      </b:widget>
      <b:widget id='HTML913' locked='true' title='Home Recent Posts Display' type='HTML' version='1'>
        <b:widget-settings>
          <b:widget-setting name='content'/>
        </b:widget-settings>
        <b:includable id='main'>
          &lt;style&gt;.home #main-wrapper #main,.home .posts-title{display:<data:content/>;}&lt;/style&gt;
        </b:includable>
      </b:widget>
      <b:widget id='HTML912' locked='true' title='Home PageNavi Display' type='HTML' version='1'>
        <b:widget-settings>
          <b:widget-setting name='content'/>
        </b:widget-settings>
        <b:includable id='main'>
          &lt;style&gt;.home #blog-pager{display:<data:content/>;}&lt;/style&gt;
        </b:includable>
      </b:widget>
      <b:widget id='HTML901' locked='true' title='Label Icons CSS' type='HTML' version='1'>
        <b:widget-settings>
          <b:widget-setting name='content'/>
        </b:widget-settings>
        <b:includable id='main'>
          &lt;style&gt;<data:content/>&lt;/style&gt;
        </b:includable>
      </b:widget>
      <b:widget id='HTML910' locked='true' title='PageNavi Results No.' type='HTML' version='1'>
        <b:widget-settings>
          <b:widget-setting name='content'/>
        </b:widget-settings>
        <b:includable id='main'>  
          <b:if cond='data:content == &quot;&quot;'>       
            <script type='text/javascript'>
              //<![CDATA[
              var postperpage = 8;
              //]]>
            </script>
            <b:else/>
            &lt;script type=&#39;text/javascript&#39;&gt;
            //&lt;![CDATA[
                var postperpage = <data:content/>;
            //]]&gt;
            &lt;/script&gt;
          </b:if>
        </b:includable>
      </b:widget>
    </b:section>
  </div>

<div id='top'/>

<div id='topnav'>
<div class='tm-head row'>
<div class='tm-menu'>
<b:section class='menu1' id='menu1' maxwidgets='1' name='Top Navigation' showaddelement='yes'>
  <b:widget id='LinkList210' locked='true' title='Menu' type='LinkList' version='1'>
    <b:widget-settings>
      <b:widget-setting name='link-3'>http://</b:widget-setting>
      <b:widget-setting name='sorting'>NONE</b:widget-setting>
      <b:widget-setting name='text-1'>About</b:widget-setting>
      <b:widget-setting name='link-1'>http://</b:widget-setting>
      <b:widget-setting name='text-0'>Home</b:widget-setting>
      <b:widget-setting name='link-2'>http://</b:widget-setting>
      <b:widget-setting name='text-3'>Advertise</b:widget-setting>
      <b:widget-setting name='link-0'>http://</b:widget-setting>
      <b:widget-setting name='text-2'>Contact</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
          <div class='widget-content'>
            <ul id='nav1'>
              <b:loop values='data:links' var='link'>
                <li><a expr:href='data:link.target'><data:link.name/></a></li>
              </b:loop>
           </ul> 
          </div>
        </b:includable>
  </b:widget>
</b:section>
</div>
<!-- Top Social --> 
<div class='social-area'>
<b:section class='social-top' id='social-top' maxwidgets='1' name='Social Top' showaddelement='yes'>
  <b:widget id='LinkList50' locked='true' title='Social Media Icons' type='LinkList' version='1'>
    <b:widget-settings>
      <b:widget-setting name='link-3'>http://</b:widget-setting>
      <b:widget-setting name='sorting'>NONE</b:widget-setting>
      <b:widget-setting name='link-4'>http://</b:widget-setting>
      <b:widget-setting name='text-1'>twitter</b:widget-setting>
      <b:widget-setting name='link-1'>http://</b:widget-setting>
      <b:widget-setting name='text-0'>facebook</b:widget-setting>
      <b:widget-setting name='link-2'>http://</b:widget-setting>
      <b:widget-setting name='text-3'>instagram</b:widget-setting>
      <b:widget-setting name='link-0'>http://</b:widget-setting>
      <b:widget-setting name='text-2'>youtube</b:widget-setting>
      <b:widget-setting name='text-4'>gplus</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
            <div class='widget-content'>
              <ul>
                <b:loop values='data:links' var='link'>
                  <li><a expr:class='data:link.name' expr:href='data:link.target' expr:title='data:link.name' target='_blank'/></li>
                </b:loop>
              </ul>
            </div>
    </b:includable>
  </b:widget>
</b:section>
</div>
</div>
</div>
<div id='header-blog'>
<div class='header-content row'>
<div class='header-logo'>
<b:section id='logo_blog' maxwidgets='1' name='Logo' showaddelement='yes'>
  <b:widget id='Header1' locked='true' title='NewsPro (Header)' type='Header' version='1'>
    <b:widget-settings>
      <b:widget-setting name='displayUrl'>http://3.bp.blogspot.com/-n9MWOdHlsWE/WjOJQ_tODzI/AAAAAAAAKFA/NEsHJU3p8MUotR_U_L5KF1rNZnekaY3vgCK4BGAYYCw/s1600/0005_NewsPro.-1.png</b:widget-setting>
      <b:widget-setting name='displayHeight'>45</b:widget-setting>
      <b:widget-setting name='sectionWidth'>150</b:widget-setting>
      <b:widget-setting name='useImage'>true</b:widget-setting>
      <b:widget-setting name='shrinkToFit'>false</b:widget-setting>
      <b:widget-setting name='imagePlacement'>REPLACE</b:widget-setting>
      <b:widget-setting name='displayWidth'>263</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>

  <b:if cond='data:useImage'>
    <b:if cond='data:imagePlacement == &quot;BEHIND&quot;'>
      <!--
      Show image as background to text. You can't really calculate the width
      reliably in JS because margins are not taken into account by any of
      clientWidth, offsetWidth or scrollWidth, so we don't force a minimum
      width if the user is using shrink to fit.
      This results in a margin-width's worth of pixels being cropped. If the
      user is not using shrink to fit then we expand the header.
      -->
      <b:if cond='data:mobile'>
        <div id='header-inner'>
          <div class='titlewrapper' style='background: transparent'>
            <h1 class='title' style='background: transparent; border-width: 0px'>
              <b:include name='title'/>
            </h1>
          </div>
          <b:include name='description'/>
        </div>
      <b:else/>
        <div expr:style='&quot;background-image: url(\&quot;&quot; + data:sourceUrl + &quot;\&quot;); &quot;                      + &quot;background-position: &quot;                      + data:backgroundPositionStyleStr + &quot;; &quot;                      + data:widthStyleStr                      + &quot;min-height: &quot; + data:height                      + &quot;_height: &quot; + data:height                      + &quot;background-repeat: no-repeat; &quot;' id='header-inner'>
          <div class='titlewrapper' style='background: transparent'>
            <h1 class='title' style='background: transparent; border-width: 0px'>
              <b:include name='title'/>
            </h1>
          </div>
          <b:include name='description'/>
        </div>
      </b:if>
    <b:else/>
      <!--Show the image only-->
      <div id='header-inner'>
        <a expr:href='data:blog.homepageUrl' style='display: block'><h1 style='display:none;'/>
          <img expr:alt='data:title' expr:height='data:height' expr:id='data:widget.instanceId + &quot;_headerimg&quot;' expr:src='data:sourceUrl' expr:width='data:width' style='display: block'/>
        </a>
        <!--Show the description-->
        <b:if cond='data:imagePlacement == &quot;BEFORE_DESCRIPTION&quot;'>
          <b:include name='description'/>
        </b:if>
      </div>
    </b:if>
  <b:else/>
    <!--No header image -->
    <div id='header-inner'>
      <div class='titlewrapper'>
        <h1 class='title'>
          <b:include name='title'/>
        </h1>
      </div>
      <b:include name='description'/>
    </div>
  </b:if>
</b:includable>
    <b:includable id='description'>
  <div class='descriptionwrapper'>
    <p class='description'><span><data:description/></span></p>
  </div>
</b:includable>
    <b:includable id='title'>
  <b:if cond='data:blog.url == data:blog.homepageUrl'>
    <data:title/>
  <b:else/>
    <a expr:href='data:blog.homepageUrl'><data:title/></a>
  </b:if>
</b:includable>
  </b:widget>
</b:section>
</div>
<div class='header-ads'>
<b:section id='ads-content' maxwidgets='1' name='Ads 728x90' showaddelement='yes'>
  <b:widget id='HTML19' locked='false' title='' type='HTML'>
    <b:widget-settings>
      <b:widget-setting name='content'><![CDATA[<img src="https://1.bp.blogspot.com/-MA6HPF3PJ24/WjPD5LXk_AI/AAAAAAAAKGA/O34XmmAjKw42-1yH3iHKRE6B9T6-iG9BACLcBGAs/s1600/729x90_3.png"/>]]></b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
  </b:widget>
</b:section>
</div>
</div>
</div>

<!-- Main Menu -->
<nav id='main-nav'>
<div class='header-menu row'>
  <li class='li-home'><a expr:href='data:blog.homepageUrl'><i class='fa fa-home'/></a></li>
    <b:section id='menu' maxwidgets='1' name='Main Menu' showaddelement='yes'>
      <b:widget id='LinkList94' locked='true' title='Main Menu' type='LinkList' version='1'>
        <b:widget-settings>
          <b:widget-setting name='link-5'>http://</b:widget-setting>
          <b:widget-setting name='link-3'>http://</b:widget-setting>
          <b:widget-setting name='link-4'>http://</b:widget-setting>
          <b:widget-setting name='text-1'>Sports</b:widget-setting>
          <b:widget-setting name='text-0'>World</b:widget-setting>
          <b:widget-setting name='text-3'>Community</b:widget-setting>
          <b:widget-setting name='text-2'>Tech</b:widget-setting>
          <b:widget-setting name='text-5'>Features</b:widget-setting>
          <b:widget-setting name='text-4'>Shop</b:widget-setting>
          <b:widget-setting name='sorting'>NONE</b:widget-setting>
          <b:widget-setting name='link-1'>http://</b:widget-setting>
          <b:widget-setting name='link-2'>http://</b:widget-setting>
          <b:widget-setting name='link-0'>http://</b:widget-setting>
        </b:widget-settings>
        <b:includable id='main'>
          <div class='widget-content'>
            <ul class='menu' id='menu-main-nav' itemscope='' itemtype='http://schema.org/SiteNavigationElement'> 
              <b:loop values='data:links' var='link'>
                <li itemprop='name'><a expr:href='data:link.target' itemprop='url'><data:link.name/></a></li>
              </b:loop>
           </ul>
          </div>
        </b:includable>
      </b:widget>
    </b:section>
  <div class='header-search'>
    <li>
      <a class='search'>
        <form action='/search' method='get'>
          <input id='s' name='q' placeholder='Type and hit enter...' type='text'/>
        </form>
      </a>
    </li>
  </div>
</div>
</nav>
<!-- Main Menu (end) -->

<div class='clear'/>

&lt;div id=&quot;outer-wrapper&quot; class=&quot;<data:blog.pageType/><b:if cond='data:blog.url == data:blog.homepageUrl'> home</b:if><b:if cond='data:blog.pageType == &quot;static_page&quot;'> item</b:if><b:if cond='data:blog.pageType == &quot;archive&quot;'> index</b:if>&quot;&gt;



 <b:section class='ticker' id='ticker' maxwidgets='1' name='Ticker News' showaddelement='yes'>
   <b:widget id='HTML1' locked='false' title='Breaking News' type='HTML'>
     <b:widget-settings>
       <b:widget-setting name='content'><![CDATA[<span data-type="recent" data-no="5"></span>]]></b:widget-setting>
     </b:widget-settings>
     <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
   </b:widget>
 </b:section>

<b:if cond='data:blog.canonicalUrl == data:blog.canonicalHomepageUrl'> 
    <!-- featured Posts -->
    <div class='featured row' id='featured'>
      <b:section class='featured-sec' id='featured-sec' maxwidgets='1' name='Featured Posts' showaddelement='yes'>
        <b:widget id='HTML2' locked='false' title='Featured' type='HTML'>
          <b:widget-settings>
            <b:widget-setting name='content'><![CDATA[<span data-type="recent"></span>]]></b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
        </b:widget>
      </b:section>
    </div>
  </b:if>

<div class='clear'/>
    <div class='row' id='content-wrapper'>

      <b:if cond='data:blog.pageType == &quot;error_page&quot;'>
      <div id='error-wrap'>
          <h1 class='error-item'>404</h1>
          <h2>Page Not Found!</h2>
          <p>Sorry, the page you were looking for in this blog does not exist.</p>
          <div class='clear'/>
        <a class='homepage' expr:href='data:blog.homepageUrl'><i class='fa fa-home'/> Go To Home</a>
      </div>
      </b:if>
<div id='cover-wrapper'>
 <div id='sidebar-wrapper1'>


      <b:section class='sidebar ready-widget' id='sidebar3' name='Sidebar Right A' showaddelement='yes'>
        <b:widget id='HTML3' locked='false' title='Sports' type='HTML'>
          <b:widget-settings>
            <b:widget-setting name='content'><![CDATA[<span class="labelpost" data-label="Food" data-no="3"></span>]]></b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
        </b:widget>
        <b:widget id='HTML13' locked='false' title='sponsor' type='HTML'>
          <b:widget-settings>
            <b:widget-setting name='content'><![CDATA[<img src="http://4.bp.blogspot.com/-WU9nTl97-uI/U6U7A1kYtFI/AAAAAAAAAgY/nWEn-gfJHXg/s1600/160x600.png"/>]]></b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
        </b:widget>
        <b:widget id='Label2' locked='false' title='Tags' type='Label'>
          <b:widget-settings>
            <b:widget-setting name='sorting'>ALPHA</b:widget-setting>
            <b:widget-setting name='display'>CLOUD</b:widget-setting>
            <b:widget-setting name='selectedLabelsList'/>
            <b:widget-setting name='showType'>ALL</b:widget-setting>
            <b:widget-setting name='showFreqNumbers'>false</b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'>
    <h2><data:title/></h2>
  </b:if>
  <div expr:class='&quot;widget-content &quot; + data:display + &quot;-label-widget-content&quot;'>
    <b:if cond='data:display == &quot;list&quot;'>
      <ul>
        <b:loop values='data:labels' var='label'>
          <li>
            <b:if cond='data:blog.url == data:label.url'>
              <span expr:dir='data:blog.languageDirection'><data:label.name/></span>
            <b:else/>
              <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'><data:label.name/></a>
            </b:if>
            <b:if cond='data:showFreqNumbers'>
              <span dir='ltr'>(<data:label.count/>)</span>
            </b:if>
          </li>
        </b:loop>
      </ul>
    <b:else/>
      <b:loop values='data:labels' var='label'>
        <span expr:class='&quot;label-size label-size-&quot; + data:label.cssSize'>
          <b:if cond='data:blog.url == data:label.url'>
            <span expr:dir='data:blog.languageDirection'><data:label.name/></span>
          <b:else/>
            <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'><data:label.name/></a>
          </b:if>
          <b:if cond='data:showFreqNumbers'>
            <span class='label-count' dir='ltr'>(<data:label.count/>)</span>
          </b:if>
        </span>
      </b:loop>
    </b:if>
    <b:include name='quickedit'/>
  </div>
</b:includable>
        </b:widget>
      </b:section>



      </div>

    <div id='main-wrapper'>

   <b:if cond='data:blog.canonicalUrl == data:blog.canonicalHomepageUrl'> 

    <div id='ads-blog'>
      <b:section class='home-ad' id='ads-home' maxwidgets='1' name='Home ADS' showaddelement='yes'>
        <b:widget id='HTML11' locked='false' title='' type='HTML'>
          <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
        </b:widget>
      </b:section>
    </div>
    </b:if>

      <div class='recent-post-box'>

    <b:if cond='data:blog.canonicalUrl == data:blog.canonicalHomepageUrl'>
      <div class='posts-title'>
        <h2>
          <a href='/search?&amp;max-results=8'>Recent Posts</a>
        </h2>
       
      </div>
    </b:if>

   <b:section class='main' id='main' maxwidgets='2' name='Main Posts' showaddelement='yes'>
     <b:widget id='Blog1' locked='true' title='Blog Posts' type='Blog' version='1'>
       <b:widget-settings>
         <b:widget-setting name='showDateHeader'>true</b:widget-setting>
         <b:widget-setting name='style.textcolor'>#e74c3c</b:widget-setting>
         <b:widget-setting name='showShareButtons'>true</b:widget-setting>
         <b:widget-setting name='authorLabel'>By</b:widget-setting>
         <b:widget-setting name='showCommentLink'>true</b:widget-setting>
         <b:widget-setting name='style.urlcolor'>#1e87f0</b:widget-setting>
         <b:widget-setting name='showAuthor'>false</b:widget-setting>
         <b:widget-setting name='style.linkcolor'>#1e87f0</b:widget-setting>
         <b:widget-setting name='style.unittype'>TextAndImage</b:widget-setting>
         <b:widget-setting name='style.bgcolor'>#000000</b:widget-setting>
         <b:widget-setting name='showAuthorProfile'>false</b:widget-setting>
         <b:widget-setting name='style.layout'>1x1</b:widget-setting>
         <b:widget-setting name='showLabels'>true</b:widget-setting>
         <b:widget-setting name='showLocation'>true</b:widget-setting>
         <b:widget-setting name='showTimestamp'>true</b:widget-setting>
         <b:widget-setting name='postsPerAd'>3</b:widget-setting>
         <b:widget-setting name='showBacklinks'>false</b:widget-setting>
         <b:widget-setting name='style.bordercolor'>#000000</b:widget-setting>
         <b:widget-setting name='showInlineAds'>true</b:widget-setting>
         <b:widget-setting name='showReactions'>false</b:widget-setting>
       </b:widget-settings>
       <b:includable id='main' var='top'>
  <b:if cond='data:mobile == &quot;false&quot;'>

      <b:include data='top' name='status-message'/>

    <!-- posts -->
    <div class='blog-posts hfeed'>

      <data:defaultAdStart/>
      <b:loop values='data:posts' var='post'>
        <div class='post-outer'>
        <b:include data='post' name='post'/>
        <b:if cond='data:blog.pageType == &quot;static_page&quot;'>
          <b:include data='post' name='comment_picker'/>
        </b:if>
        <b:if cond='data:blog.pageType == &quot;item&quot;'>
          <b:include data='post' name='comment_picker'/>
        </b:if>
        </div>
        <b:if cond='data:post.includeAd'>
          <b:if cond='data:post.isFirstPost'>
            <data:defaultAdEnd/>
          <b:else/>
            <data:adEnd/>
          </b:if>
          <div class='inline-ad'>
            <data:adCode/>
          </div>
          <data:adStart/>
        </b:if>
      </b:loop>
      <data:adEnd/>
    </div>

    <!-- navigation -->
    <b:if cond='data:blog.pageType == &quot;index&quot;'>
      <b:include name='nextprev'/>
      <b:else/>
      <b:if cond='data:blog.pageType == &quot;archive&quot;'>
        <b:include name='nextprev'/>
      </b:if>
    </b:if>

    <!-- feed links -->
    <b:include name='feedLinks'/>

    <b:if cond='data:top.showStars'>
      <script src='//www.google.com/jsapi' type='text/javascript'/>
      <script type='text/javascript'>
        google.load(&quot;annotations&quot;, &quot;1&quot;, {&quot;locale&quot;: &quot;<data:top.languageCode/>&quot;});
        function initialize() {
          google.annotations.setApplicationId(<data:top.blogspotReviews/>);
          google.annotations.createAll();
          google.annotations.fetch();
        }
        google.setOnLoadCallback(initialize);
      </script>
    </b:if>

  <b:else/>
    <b:include name='mobile-main'/>
  </b:if>

  <b:if cond='data:top.showDummy'>
    <data:top.dummyBootstrap/>
  </b:if>

</b:includable>
       <b:includable id='backlinkDeleteIcon' var='backlink'>
                <span expr:class='&quot;item-control &quot; + data:backlink.adminClass'>
                  <a expr:href='data:backlink.deleteUrl' expr:title='data:top.deleteBacklinkMsg'>
                    <img src='http://www.blogger.com/img/icon_delete13.gif'/>
                  </a>
                </span>
              </b:includable>
       <b:includable id='backlinks' var='post'>
                <a name='links'/>
                <h4>
                  <data:post.backlinksLabel/>
                </h4>
                <b:if cond='data:post.numBacklinks != 0'>
                  <dl class='comments-block' id='comments-block'>
                    <b:loop values='data:post.backlinks' var='backlink'>
                      <div class='collapsed-backlink backlink-control'>
                        <dt class='comment-title'>
                          <span class='backlink-toggle-zippy'>
                            &#160;
                          </span>
                          <a expr:href='data:backlink.url' rel='nofollow'>
                            <data:backlink.title/>
                          </a>
                          <b:include data='backlink' name='backlinkDeleteIcon'/>
                        </dt>
                        <dd class='comment-body collapseable'>
                          <data:backlink.snippet/>
                        </dd>
                        <dd class='comment-footer collapseable'>
                          <span class='comment-author'>
                            <data:post.authorLabel/>
                            <data:backlink.author/>
                          </span>
                          <span class='comment-timestamp'>
                            <data:post.timestampLabel/>
                            <data:backlink.timestamp/>
                          </span>
                        </dd>
                      </div>
                    </b:loop>
                  </dl>
                </b:if>
                <p class='comment-footer'>
                  <a class='comment-link' expr:href='data:post.createLinkUrl' expr:id='data:widget.instanceId + &quot;_backlinks-create-link&quot;' target='_blank'>
                    <data:post.createLinkLabel/>
                  </a>
                </p>
              </b:includable>
       <b:includable id='comment-form' var='post'>
  <div class='comment-form'>
    <a name='comment-form'/>
    <b:if cond='data:mobile'>
      <h4 id='comment-post-message'>
        <a expr:id='data:widget.instanceId + &quot;_comment-editor-toggle-link&quot;' href='javascript:void(0)'><data:postCommentMsg/></a></h4>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
    <b:else/>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' width='100%'/>
    </b:if>
    <data:post.friendConnectJs/>
    <data:post.cmtfpIframe/>
    <script type='text/javascript'>
      BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
    </script>
  </div>
</b:includable>
       <b:includable id='commentDeleteIcon' var='comment'>
  <span expr:class='&quot;item-control &quot; + data:comment.adminClass'>
    <b:if cond='data:showCmtPopup'>
      <div class='goog-toggle-button'>
        <div class='goog-inline-block comment-action-icon'/>
      </div>
    <b:else/>
      <a class='comment-delete' expr:href='data:comment.deleteUrl' expr:title='data:top.deleteCommentMsg'>
        <img src='//www.blogger.com/img/icon_delete13.gif'/>
      </a>
    </b:if>
  </span>
</b:includable>
       <b:includable id='comment_count_picker' var='post'>
  <b:if cond='data:post.commentSource == 1'>
    <span class='cmt_count_iframe_holder' expr:data-count='data:post.numComments' expr:data-onclick='data:post.addCommentOnclick' expr:data-post-url='data:post.url' expr:data-url='data:post.url.canonical.http'>
    </span>
  <b:else/>
    <a class='comment-link' expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
      <data:post.commentLabelFull/>:
    </a>
  </b:if>
</b:includable>
       <b:includable id='comment_picker' var='post'>
  <b:if cond='data:post.commentSource == 1'>
    <b:include data='post' name='iframe_comments'/>
  <b:else/>
    <b:if cond='data:post.showThreadedComments'>
      <b:include data='post' name='threaded_comments'/>
    <b:else/>
      <b:include data='post' name='comments'/>
    </b:if>
  </b:if>
</b:includable>
       <b:includable id='comments' var='post'>
  <div class='comments' id='comments'>
    <a name='comments'/>
    <b:if cond='data:post.allowComments'>
      <h4><data:post.commentLabelFull/></h4>

      <b:if cond='data:post.commentPagingRequired'>
        <span class='paging-control-container'>
          <b:if cond='data:post.hasOlderLinks'>
            <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'><data:post.oldestLinkText/></a>
              &#160;
            <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'><data:post.olderLinkText/></a>
              &#160;
          </b:if>

          <data:post.commentRangeText/>

          <b:if cond='data:post.hasNewerLinks'>
            &#160;
            <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'><data:post.newerLinkText/></a>
            &#160;
            <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'><data:post.newestLinkText/></a>
          </b:if>
        </span>
      </b:if>

      <div expr:id='data:widget.instanceId + &quot;_comments-block-wrapper&quot;'>
        <dl expr:class='data:post.avatarIndentClass' id='comments-block'>
          <b:loop values='data:post.comments' var='comment'>
            <dt expr:class='&quot;comment-author &quot; + data:comment.authorClass' expr:id='data:comment.anchorName'>
              <b:if cond='data:comment.favicon'>
                <img expr:src='data:comment.favicon' height='16px' style='margin-bottom:-2px;' width='16px'/>
              </b:if>
              <a expr:name='data:comment.anchorName'/>
              <b:if cond='data:blog.enabledCommentProfileImages'>
                <data:comment.authorAvatarImage/>
              </b:if>
              <b:if cond='data:comment.authorUrl'>
                <a expr:href='data:comment.authorUrl' rel='nofollow'><data:comment.author/></a>
              <b:else/>
                <data:comment.author/>
              </b:if>
              <data:commentPostedByMsg/>
            </dt>
            <dd class='comment-body' expr:id='data:widget.instanceId + data:comment.cmtBodyIdPostfix'>
              <b:if cond='data:comment.isDeleted'>
                <span class='deleted-comment'><data:comment.body/></span>
              <b:else/>
                <p>
                  <data:comment.body/>
                </p>
              </b:if>
            </dd>
            <dd class='comment-footer'>
              <span class='comment-timestamp'>
                <a expr:href='data:comment.url' title='comment permalink'>
                  <abbr expr:title='data:post.timestampISO8601'><data:comment.timestamp/></abbr>
                </a>
                <b:include data='comment' name='commentDeleteIcon'/>
              </span>
            </dd>
          </b:loop>
        </dl>
      </div>

      <b:if cond='data:post.commentPagingRequired'>
        <span class='paging-control-container'>
          <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'>
            <data:post.oldestLinkText/>
          </a>
          <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'>
            <data:post.olderLinkText/>
          </a>
          &#160;
          <data:post.commentRangeText/>
          &#160;
          <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'>
            <data:post.newerLinkText/>
          </a>
          <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'>
            <data:post.newestLinkText/>
          </a>
        </span>
      </b:if>

      <p class='comment-footer'>
        <b:if cond='data:post.embedCommentForm'>
          <b:if cond='data:post.allowNewComments'>
            <b:include data='post' name='comment-form'/>
          <b:else/>
            <data:post.noNewCommentsText/>
          </b:if>
        <b:else/>
          <b:if cond='data:post.allowComments'>
            <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'><data:postCommentMsg/></a>
          </b:if>
        </b:if>

      </p>
    </b:if>
    <b:if cond='data:showCmtPopup'>
      <div id='comment-popup'>
        <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
        </iframe>
      </div>
    </b:if>

    <div id='backlinks-container'>
    <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
       <b:if cond='data:post.showBacklinks'>
         <b:include data='post' name='backlinks'/>
       </b:if>
    </div>
    </div>
  </div>
</b:includable>
       <b:includable id='feedLinks'>
                <b:if cond='data:blog.pageType != &quot;item&quot;'>
                  <!-- Blog feed links -->
                  <b:if cond='data:feedLinks'>
                    <div class='blog-feeds'>
                      <b:include data='feedLinks' name='feedLinksBody'/>
                    </div>
                  </b:if>
                  <b:else/>
                  <!--Post feed links -->
                  <div class='post-feeds'>
                    <b:loop values='data:posts' var='post'>
                      <b:if cond='data:post.allowComments'>
                        <b:if cond='data:post.feedLinks'>
                          <b:include data='post.feedLinks' name='feedLinksBody'/>
                        </b:if>
                      </b:if>
                    </b:loop>
                  </div>
                </b:if>
              </b:includable>
       <b:includable id='feedLinksBody' var='links'>
                <div class='feed-links'>
                  <data:feedLinksMsg/>
                  <b:loop values='data:links' var='f'>
                    <a class='feed-link' expr:href='data:f.url' expr:type='data:f.mimeType' target='_blank'>
                      <data:f.name/>
                      (
                      <data:f.feedType/>
                      )
                    </a>
                  </b:loop>
                </div>
              </b:includable>
       <b:includable id='iframe_comments' var='post'>

  <b:if cond='data:post.allowIframeComments'>
    <script expr:src='data:post.iframeCommentSrc' type='text/javascript'/>
    <div class='cmt_iframe_holder' expr:data-href='data:post.url.canonical' expr:data-viewtype='data:post.viewType'/>

    <b:if cond='data:post.embedCommentForm == &quot;false&quot;'>
      <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'><data:postCommentMsg/></a>
    </b:if>
  </b:if>
</b:includable>
       <b:includable id='mobile-index-post' var='post'>
                <div class='mobile-date-outer date-outer'>
                  <b:if cond='data:post.dateHeader'>
                    <div class='date-header'>
                      <span>
                        <data:post.dateHeader/>
                      </span>
                    </div>
                  </b:if>
                  <div class='mobile-post-outer'>
                    <a expr:href='data:post.url'>
                      <h3 class='mobile-index-title entry-title' itemprop='name'>
                        <data:post.title/>
                      </h3>
                      <div class='mobile-index-arrow'>
                        &amp;rsaquo;
                      </div>
                      <div class='mobile-index-contents'>
                        <b:if cond='data:post.thumbnailUrl'>
                          <div class='mobile-index-thumbnail'>
                            <div class='Image'>
                              <img expr:src='data:post.thumbnailUrl'/>
                            </div>
                          </div>
                        </b:if>
                        <div class='post-body'>
                          <b:if cond='data:post.snippet'>
                            <data:post.snippet/>
                          </b:if>
                        </div>
                      </div>
                      <div style='clear: both;'/>
                    </a>
                    <div class='mobile-index-comment'>
                      <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
                        <b:if cond='data:post.allowComments'>
                          <b:if cond='data:post.numComments != 0'>
                            <b:include data='post' name='comment_count_picker'/>
                          </b:if>
                        </b:if>
                      </b:if>
                    </div>
                  </div>
                </div>
              </b:includable>
       <b:includable id='mobile-main' var='top'>
                <!-- posts -->
                <div class='blog-posts hfeed'>
                  <b:include data='top' name='status-message'/>
                  <b:if cond='data:blog.pageType == &quot;index&quot;'>
                    <b:loop values='data:posts' var='post'>
                      <b:include data='post' name='mobile-index-post'/>
                    </b:loop>
                    <b:else/>
                    <b:loop values='data:posts' var='post'>
                      <b:include data='post' name='mobile-post'/>
                    </b:loop>
                  </b:if>
                </div>
                <b:include name='mobile-nextprev'/>
              </b:includable>
       <b:includable id='mobile-nextprev'>
                <div class='blog-pager' id='blog-pager'>
                  <b:if cond='data:newerPageUrl'>
                    <div class='mobile-link-button' id='blog-pager-newer-link'>
                      <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'>
                        &amp;lsaquo;
                      </a>
                    </div>
                  </b:if>
                  <b:if cond='data:olderPageUrl'>
                    <div class='mobile-link-button' id='blog-pager-older-link'>
                      <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'>
                        &amp;rsaquo;
                      </a>
                    </div>
                  </b:if>
                  <div class='mobile-link-button' id='blog-pager-home-link'>
                    <a class='home-link' expr:href='data:blog.homepageUrl'>
                      <data:homeMsg/>
                    </a>
                  </div>
                  <div class='mobile-desktop-link'>
                    <a class='home-link' expr:href='data:desktopLinkUrl'>
                      <data:desktopLinkMsg/>
                    </a>
                  </div>
                </div>
                <div class='clear'/>
              </b:includable>
       <b:includable id='mobile-post' var='post'>
                <div class='date-outer'>
                  <b:if cond='data:post.dateHeader'>
                    <h2 class='date-header'>
                      <span>
                        <data:post.dateHeader/>
                      </span>
                    </h2>
                  </b:if>
                  <div class='date-posts'>
                    <div class='post-outer'>
                      <div class='post hentry uncustomized-post-template' itemscope='' itemtype='http://schema.org/BlogPosting'>
                        <b:if cond='data:post.thumbnailUrl'>
                          <meta expr:content='data:post.thumbnailUrl' itemprop='image'/>
                        </b:if>
                        <meta expr:content='data:blog.blogId' itemprop='blogId'/>
                        <meta expr:content='data:post.id' itemprop='postId'/>
                        <a expr:name='data:post.id'/>
                        <b:if cond='data:post.title'>
                          <h3 class='post-title entry-title' itemprop='headline'>
                            <b:if cond='data:post.link'>
                              <a expr:href='data:post.link'>
                                <data:post.title/>
                              </a>
                              <b:else/>
                              <b:if cond='data:post.url'>
                                <b:if cond='data:blog.url != data:post.url'>
                                  <a expr:href='data:post.url'>
                                    <data:post.title/>
                                  </a>
                                  <b:else/>
                                  <data:post.title/>
                                </b:if>
                                <b:else/>
                                <data:post.title/>
                              </b:if>
                            </b:if>
                          </h3>
                        </b:if>
                        <div class='post-header'>
                          <div class='post-header-line-1'/>
                        </div>
                        <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
                          <data:post.body/>
                          <div style='clear: both;'/>
                          <!-- clear for photos floats -->
                        </div>
                        <div class='post-footer'>
                          <div class='post-footer-line post-footer-line-1'>
                            <span class='post-author vcard'>
                              <b:if cond='data:top.showAuthor'>
                                <b:if cond='data:post.authorProfileUrl'>
                                  <span class='fn' itemprop='author' itemscope='' itemtype='http://schema.org/Person'>
                                    <meta expr:content='data:post.authorProfileUrl' itemprop='url'/>
                                    <a expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
                                      <span itemprop='name'>
                                        <data:post.author/>
                                      </span>
                                    </a>
                                  </span>
                                  <b:else/>
                                  <span class='fn' itemprop='author' itemscope='' itemtype='http://schema.org/Person'>
                                    <span itemprop='name'>
                                      <data:post.author/>
                                    </span>
                                  </span>
                                </b:if>
                              </b:if>
                            </span>
                            <span class='post-timestamp'>
                              <b:if cond='data:top.showTimestamp'>
                                <data:top.timestampLabel/>
                                <b:if cond='data:post.url'>
                                  <meta expr:content='data:post.canonicalUrl' itemprop='url'/>
                                  <a class='timestamp-link' expr:href='data:post.url' expr:title='data:post.timestamp' rel='bookmark'>
                                    <abbr class='published' expr:title='data:post.timestamp' itemprop='datePublished dateModified'>
                                      <data:post.timestamp/>
                                    </abbr>
                                  </a>
                                </b:if>
                              </b:if>
                            </span>
                            <span class='post-comment-link'>
                              <b:if cond='data:blog.pageType != &quot;item&quot;'>
                                <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
                                  <b:if cond='data:post.allowComments'>
                                    <b:include data='post' name='comment_count_picker'/>
                                  </b:if>
                                </b:if>
                              </b:if>
                            </span>
                          </div>
                          <div class='post-footer-line post-footer-line-2'>
                            <b:if cond='data:top.showMobileShare'>
                              <div class='mobile-link-button goog-inline-block' id='mobile-share-button'>
                                <a href='javascript:void(0);'>
                                  <data:shareMsg/>
                                </a>
                              </div>
                            </b:if>
                            <b:if cond='data:top.showDummy'>
                              <div class='goog-inline-block dummy-container'>
                                <data:post.dummyTag/>
                              </div>
                            </b:if>
                          </div>
                        </div>
                      </div>
                      <b:if cond='data:blog.pageType == &quot;static_page&quot;'>
                        <b:include data='post' name='comment_picker'/>
                      </b:if>
                      <b:if cond='data:blog.pageType == &quot;item&quot;'>
                        <b:include data='post' name='comment_picker'/>
                      </b:if>
                    </div>
                  </div>
                </div>
              </b:includable>
       <b:includable id='nextprev'>
  <div class='blog-pager' id='blog-pager'>
    <b:if cond='data:newerPageUrl'>
      <span id='blog-pager-newer-link'>
      <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'><data:newerPageTitle/></a>
      </span>
    </b:if>

    <b:if cond='data:olderPageUrl'>
      <span id='blog-pager-older-link'>
      <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'><data:olderPageTitle/></a>
      </span>
    </b:if>

    <a class='home-link' expr:href='data:blog.homepageUrl'><data:homeMsg/></a>

    <b:if cond='data:mobileLinkUrl'>
      <div class='blog-mobile-link'>
        <a expr:href='data:mobileLinkUrl'><data:mobileLinkMsg/></a>
      </div>
    </b:if>

  </div>
  <div class='clear'/>
</b:includable>
       <b:includable id='post' var='post'>
          <div class='post'>
            <b:if cond='data:blog.pageType == &quot;index&quot;'>
              <b:if cond='data:post.thumbnailUrl'>
                <div class='block-image'><div class='thumb'>
               &lt;a href=&#39;<data:post.url/>&#39; style=&#39;background:url(<data:post.thumbnailUrl/>) no-repeat center center;background-size:cover&#39;&gt;&lt;span class=&#39;thumb-overlay&#39;/&gt;&lt;/a&gt;
                </div>
                <div class='postags'>
                  <b:if cond='data:post.labels'>
                    <b:loop values='data:post.labels' var='label'>
                      <a expr:class='data:label.name' expr:href='data:label.url' rel='tag'><data:label.name/></a>
                      <b:if cond='data:label.isLast != &quot;true&quot;'/>
                    </b:loop>
                   </b:if>
                </div></div>
                <b:else/>
              <b:if cond='data:post.firstImageUrl'>
                <div class='block-image'><div class='thumb'>
                  &lt;a href=&#39;<data:post.url/>&#39; style=&#39;background:url(<data:post.firstImageUrl/>) no-repeat center center;background-size:cover&#39;&gt;&lt;span class=&#39;thumb-overlay&#39;/&gt;&lt;/a&gt;
                </div>
                <div class='postags'>
                  <b:if cond='data:post.labels'>
                    <b:loop values='data:post.labels' var='label'>
                      <a expr:class='data:label.name' expr:href='data:label.url' rel='tag'><data:label.name/></a>
                      <b:if cond='data:label.isLast != &quot;true&quot;'/>
                    </b:loop>
                   </b:if>
                </div></div>
                <b:else/>
                <div class='block-image'><div class='thumb'>
               &lt;a href=&#39;<data:post.url/>&#39; style=&#39;background:url(http://3.bp.blogspot.com/-Yw8BIuvwoSQ/VsjkCIMoltI/AAAAAAAAC4c/s55PW6xEKn0/s1600-r/nth.png) no-repeat center center;background-size:cover&#39;&gt;&lt;span class=&#39;thumb-overlay&#39;/&gt;&lt;/a&gt;
                </div>
                <div class='postags'>
                  <b:if cond='data:post.labels'>
                    <b:loop values='data:post.labels' var='label'>
                      <a expr:class='data:label.name' expr:href='data:label.url' rel='tag'><data:label.name/></a>
                      <b:if cond='data:label.isLast != &quot;true&quot;'/>
                    </b:loop>
                   </b:if>
                </div></div>
             </b:if></b:if>
            </b:if>
            <b:if cond='data:blog.pageType == &quot;archive&quot;'>
              <b:if cond='data:post.thumbnailUrl'>
                <div class='block-image'><div class='thumb'>
               &lt;a href=&#39;<data:post.url/>&#39; style=&#39;background:url(<data:post.thumbnailUrl/>) no-repeat center center;background-size:cover&#39;&gt;&lt;span class=&#39;thumb-overlay&#39;/&gt;&lt;/a&gt;
               </div>
                <div class='postags'>
                  <b:if cond='data:post.labels'>
                    <b:loop values='data:post.labels' var='label'>
                      <a expr:class='data:label.name' expr:href='data:label.url' rel='tag'><data:label.name/></a>
                      <b:if cond='data:label.isLast != &quot;true&quot;'/>
                    </b:loop>
                   </b:if>
                </div></div>
                <b:else/>
              <b:if cond='data:post.firstImageUrl'>
                <div class='block-image'><div class='thumb'>
                  &lt;a href=&#39;<data:post.url/>&#39; style=&#39;background:url(<data:post.firstImageUrl/>) no-repeat center center;background-size:cover&#39;&gt;&lt;span class=&#39;thumb-overlay&#39;/&gt;&lt;/a&gt;
                </div>
                <div class='postags'>
                  <b:if cond='data:post.labels'>
                    <b:loop values='data:post.labels' var='label'>
                      <a expr:class='data:label.name' expr:href='data:label.url' rel='tag'><data:label.name/></a>
                      <b:if cond='data:label.isLast != &quot;true&quot;'/>
                    </b:loop>
                   </b:if>
                </div></div>
                <b:else/>
                <div class='block-image'><div class='thumb'>
               &lt;a href=&#39;<data:post.url/>&#39; style=&#39;background:url(http://3.bp.blogspot.com/-Yw8BIuvwoSQ/VsjkCIMoltI/AAAAAAAAC4c/s55PW6xEKn0/s1600-r/nth.png) no-repeat center center;background-size:cover&#39;&gt;&lt;span class=&#39;thumb-overlay&#39;/&gt;&lt;/a&gt;
                </div>
                <div class='postags'>
                  <b:if cond='data:post.labels'>
                    <b:loop values='data:post.labels' var='label'>
                      <a expr:class='data:label.name' expr:href='data:label.url' rel='tag'><data:label.name/></a>
                      <b:if cond='data:label.isLast != &quot;true&quot;'/>
                    </b:loop>
                   </b:if>
                </div></div>
             </b:if></b:if>
            </b:if>
    <b:if cond='data:blog.pageType == &quot;item&quot;'>
    &lt;div itemprop=&#39;blogPost&#39; itemscope=&#39;itemscope&#39; itemtype=&#39;http://schema.org/BlogPosting&#39;&gt;
    <div itemprop='image' itemscope='itemscope' itemtype='https://schema.org/ImageObject' style='display:none;'>
      <meta expr:content='data:post.firstImageUrl' itemprop='url'/>
      <meta content='700' itemprop='width height'/>
      </div>
    </b:if>
    <div class='post-header'>
      <b:if cond='data:blog.pageType == &quot;item&quot;'>
        <div class='breadcrumbs' xmlns:v='http://rdf.data-vocabulary.org/#'>
    <span typeof='v:Breadcrumb'><a class='bhome' expr:href='data:blog.homepageUrl' property='v:title' rel='v:url'>Home</a></span> <brc>/</brc>
    <b:loop values='data:posts' var='post'>
      <b:if cond='data:post.labels'>
      <b:loop values='data:post.labels' var='label'>
        <span typeof='v:Breadcrumb'>
        <a expr:href='data:label.url' property='v:title' rel='v:url'><data:label.name/></a></span>
        <b:if cond='data:label.isLast != &quot;true&quot;'><brc>/</brc></b:if>
      </b:loop>
      <b:else/>
         Unlabelled
      </b:if>
      <brc>/</brc> <span><data:post.title/></span>
    </b:loop>
  </div>
        <b:if cond='data:post.title'>
      <div class='post-head'><h1 class='post-title entry-title' itemprop='name headline'>
      <b:if cond='data:post.link'>
        <a expr:href='data:post.link'><data:post.title/></a>
      <b:else/>
        <b:if cond='data:post.url'>
          <b:if cond='data:blog.url != data:post.url'>
            <a expr:href='data:post.url'><data:post.title/></a>
          <b:else/>
            <data:post.title/>
          </b:if>
        <b:else/>
          <data:post.title/>
        </b:if>
      </b:if>
        </h1></div>
    </b:if>
        <div class='post-meta'>
<span class='post-author vcard'>
        <b:if cond='data:top.showAuthor'>
            <b:if cond='data:post.authorProfileUrl'>
              <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                <meta expr:content='data:post.authorProfileUrl' itemprop='url'/>
                <a class='g-profile' expr:href='data:post.authorProfileUrl' expr:title='data:post.author' rel='author'>
                  <span itemprop='name'><data:post.author/></span>
                </a>
              </span>
            <b:else/>
              <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                <a class='g-profile' expr:href='data:post.authorProfileUrl' expr:title='data:post.author' rel='author'>
                  <span itemprop='name'><data:post.author/></span></a>
              </span>
            </b:if>
        </b:if>
      </span>
 <span class='post-timestamp'>
        <b:if cond='data:top.showTimestamp'>
        <b:if cond='data:post.url'>
          <meta expr:content='data:post.canonicalUrl' itemprop='url mainEntityOfPage'/>
          <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><span class='published timeago' expr:title='data:post.timestampISO8601' itemprop='datePublished dateModified'><data:post.timestamp/></span></a>
        </b:if>
        </b:if>
      </span>
<span class='label-head'>
        <b:if cond='data:post.labels'>
          <b:loop values='data:post.labels' var='label'>
            <a expr:href='data:label.url' rel='tag'><data:label.name/></a><b:if cond='data:label.isLast != &quot;true&quot;'>,</b:if>
          </b:loop>
        </b:if>
      </span>
        </div>
   </b:if>
  <b:if cond='data:blog.pageType == &quot;static_page&quot;'>
    <b:if cond='data:post.title'>
      <div class='post-head'><h1 class='post-title entry-title' itemprop='name headline'>
      <b:if cond='data:post.link'>
        <a expr:href='data:post.link'><data:post.title/></a>
      <b:else/>
        <b:if cond='data:post.url'>
          <b:if cond='data:blog.url != data:post.url'>
            <a expr:href='data:post.url'><data:post.title/></a>
          <b:else/>
            <data:post.title/>
          </b:if>
        <b:else/>
          <data:post.title/>
        </b:if>
      </b:if>
        </h1></div>
    </b:if>
    </b:if>
    </div>
     <article>
         <b:if cond='data:blog.pageType != &quot;item&quot;'>
         <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
          <b:if cond='data:post.title'>
              <font class='retitle'>
                <h2 class='post-title entry-title'>
                   <b:if cond='data:post.link'>
                    <a expr:href='data:post.link'>
                       <data:post.title/>
                      </a>
                      <b:else/>
                      <b:if cond='data:post.url'>
                       <a expr:href='data:post.url'>
                       <data:post.title/>
                      </a>
                      <b:else/>
                     <data:post.title/>
                     </b:if>
                   </b:if>
                  </h2>
                    </font>
                </b:if>
                  <div class='date-header'>
                     <div id='meta-post'>
                       <a class='g-profile' expr:href='data:post.authorProfileUrl' expr:title='data:post.author' rel='author'>
                  <span itemprop='name'><data:post.author/></span></a><a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><span class='published timeago' expr:title='data:post.timestampISO8601' itemprop='datePublished dateModified'><data:post.timestamp/></span></a></div><div class='resumo'><span><data:post.snippet/></span></div>
                      <div style='clear: both;'/>
                      </div>
            <b:else/>
       <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
         <meta expr:content='data:post.snippet' name='twitter:description'/>
         <data:post.body/>
       </div>
          </b:if>
          <b:else/>
       <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
         <meta expr:content='data:post.snippet' name='twitter:description'/>
         <data:post.body/>
       </div>
         </b:if>
     </article>
      <div class='hreview' style='display:none;'>
        <span class='item'>
          <span class='fn'><data:post.title/></span>
          <img class='photo' expr:alt='data:post.title' expr:src='data:post.thumbnailUrl'/>
        </span> 
        Reviewed by <span class='reviewer'><data:post.author/></span>
        on 
        <span class='dtreviewed'>
          <data:post.timestamp/>
          <span class='value-title' expr:title='data:post.timestamp'/>
        </span> 
        Rating: <span class='rating'>5</span> 
      </div>
<div style='clear:both'/>  
    <div class='post-footer'>
    <b:if cond='data:blog.pageType == &quot;item&quot;'>
        <div class='share-box'>
 
          <h8 class='share-title'>Share This</h8>
               <div class='share-art'> 
<a class='fac-art' expr:href='&quot;http://www.facebook.com/sharer.php?u=&quot; + data:post.url + &quot;&amp;title=&quot;+ data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank'><i class='fa fa-facebook-official'/><span class='resp_del'> Facebook</span></a>

<a class='twi-art' expr:href='&quot;http://twitter.com/share?url=&quot; + data:post.url + &quot;&amp;title=&quot; + data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank'><i class='fa fa-twitter'/><span class='resp_del2'> Twitter</span></a>

<a class='goo-art' expr:href='&quot;https://plus.google.com/share?url=&quot; + data:post.url + &quot;&amp;title=&quot; + data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank'><i class='fa fa-google-plus'/><span class='resp_del3'> Google+</span></a>

<a class='pin-art' expr:href='&quot;http://pinterest.com/pin/create/button/?url=&quot; + data:post.url + &quot;&amp;media=&quot; + data:post.firstImageUrl + &quot;&amp;description=&quot; + data:post.snippet' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank'><i class='fa fa-pinterest'/></a>  

<a class='lin-art' expr:href='&quot;http://www.linkedin.com/shareArticle?url=&quot; + data:post.url + &quot;&amp;title=&quot;+ data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank'><i class='fa fa-linkedin-square'/></a>

  </div>
         </div>
         
      <div style='clear:both'/>  

      <!-- Ads Post --> 
      <div class='ad-post-footer'/>

     <div style='clear:both'/> 
     <div id='related-posts'>
        <b:if cond='data:post.labels'>
          <b:loop values='data:post.labels' var='label'>
            <b:if cond='data:label.isLast == &quot;true&quot;'>
              <data:label.name/>
            </b:if>
          </b:loop>
        </b:if>
      </div>        
   
       <div class='clear'/>  

        <ul class='post-nav'>
              <li class='next'> 
               <b:if cond='data:newerPageUrl'> 
                <a class='newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' rel='next'/> 
              <b:else/> 
                <a rel='next'><strong>Next</strong><span>You are viewing Most Recent Post</span></a> 
              </b:if> 
                </li>
          <li class='previous'> 
          <b:if cond='data:olderPageUrl'> 
            <a class='older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' rel='previous'/> 
          <b:else/> 
            <a rel='previous'><strong>Previous</strong><span>You are viewing Last Post</span></a> 
          </b:if> 
        </li>
    </ul>
      </b:if>
    </div>    
    
    <b:if cond='data:blog.pageType == &quot;item&quot;'>
    <div itemprop='publisher' itemscope='itemscope' itemtype='https://schema.org/Organization' style='display:none;'>
      <div itemprop='logo' itemscope='itemscope' itemtype='https://schema.org/ImageObject'>
       <meta expr:content='data:post.firstImageUrl' itemprop='url'/>
      </div>
       <meta expr:content='data:blog.title' itemprop='name'/>
    </div>
      &lt;/div&gt;
    </b:if>

  </div>
       </b:includable>
       <b:includable id='postQuickEdit' var='post'>
                      <b:if cond='data:post.editUrl'>
                        <span expr:class='&quot;item-control &quot; + data:post.adminClass'>
                          <a expr:href='data:post.editUrl' expr:title='data:top.editPostMsg'>
                            <!-- <img alt='' class='icon-action' height='18' src='http://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/> -->
                            <b style='color: #dd4b39;margin-left: 5px;'>
                              <i class='fa fa-pencil'/>
                              Edit
                            </b>
                          </a>
                        </span>
                      </b:if>
                    </b:includable>
       <b:includable id='shareButtons' var='post'>
                <b:if cond='data:top.showEmailButton'>
                  <a class='goog-inline-block share-button sb-email' expr:href='data:post.sharePostUrl + &quot;&amp;target=email&quot;' expr:title='data:top.emailThisMsg' target='_blank'>
                    <span class='share-button-link-text'>
                      <data:top.emailThisMsg/>
                    </span>
                  </a>
                </b:if>
                <b:if cond='data:top.showBlogThisButton'>
                  <a class='goog-inline-block share-button sb-blog' expr:href='data:post.sharePostUrl + &quot;&amp;target=blog&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=270,width=475\&quot;); return false;&quot;' expr:title='data:top.blogThisMsg' target='_blank'>
                    <span class='share-button-link-text'>
                      <data:top.blogThisMsg/>
                    </span>
                  </a>
                </b:if>
                <b:if cond='data:top.showTwitterButton'>
                  <a class='goog-inline-block share-button sb-twitter' expr:href='data:post.sharePostUrl + &quot;&amp;target=twitter&quot;' expr:title='data:top.shareToTwitterMsg' target='_blank'>
                    <span class='share-button-link-text'>
                      <data:top.shareToTwitterMsg/>
                    </span>
                  </a>
                </b:if>
                <b:if cond='data:top.showFacebookButton'>
                  <a class='goog-inline-block share-button sb-facebook' expr:href='data:post.sharePostUrl + &quot;&amp;target=facebook&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=430,width=640\&quot;); return false;&quot;' expr:title='data:top.shareToFacebookMsg' target='_blank'>
                    <span class='share-button-link-text'>
                      <data:top.shareToFacebookMsg/>
                    </span>
                  </a>
                </b:if>
                <b:if cond='data:top.showOrkutButton'>
                  <a class='goog-inline-block share-button sb-orkut' expr:href='data:post.sharePostUrl + &quot;&amp;target=orkut&quot;' expr:title='data:top.shareToOrkutMsg' target='_blank'>
                    <span class='share-button-link-text'>
                      <data:top.shareToOrkutMsg/>
                    </span>
                  </a>
                </b:if>
                <b:if cond='data:top.showDummy'>
                  <div class='goog-inline-block dummy-container'>
                    <data:post.dummyTag/>
                  </div>
                </b:if>
              </b:includable>
       <b:includable id='status-message'>
        <b:if cond='data:navMessage'>
            <div class='status-msg-wrap'>
             <div class='status-msg-body'>
              <data:navMessage/>
              </div>
               <div class='status-msg-border'>
                <div class='status-msg-bg'>
                <div class='status-msg-hidden'><data:navMessage/></div>
               </div>
             </div>
             </div>
           <div style='clear: both;'/>
          </b:if>
        </b:includable>
       <b:includable id='threaded-comment-form' var='post'>
  <div class='comment-form'>
    <a name='comment-form'/>
    <b:if cond='data:mobile'>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
    <b:else/>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' width='100%'/>
    </b:if>
    <data:post.friendConnectJs/>
    <data:post.cmtfpIframe/>
    <script type='text/javascript'>
      BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
    </script>
  </div>
</b:includable>
       <b:includable id='threaded_comment_js' var='post'>
  <script async='async' expr:src='data:post.commentSrc' type='text/javascript'/>

  <script type='text/javascript'>
    (function() {
      var items = <data:post.commentJso/>;
      var msgs = <data:post.commentMsgs/>;
      var config = <data:post.commentConfig/>;

// <![CDATA[
      var cursor = null;
      if (items && items.length > 0) {
        cursor = parseInt(items[items.length - 1].timestamp) + 1;
      }

      var bodyFromEntry = function(entry) {
        if (entry.gd$extendedProperty) {
          for (var k in entry.gd$extendedProperty) {
            if (entry.gd$extendedProperty[k].name == 'blogger.contentRemoved') {
              return '<span class="deleted-comment">' + entry.content.$t + '</span>';
            }
          }
        }
        return entry.content.$t;
      }

      var parse = function(data) {
        cursor = null;
        var comments = [];
        if (data && data.feed && data.feed.entry) {
          for (var i = 0, entry; entry = data.feed.entry[i]; i++) {
            var comment = {};
            // comment ID, parsed out of the original id format
            var id = /blog-(\d+).post-(\d+)/.exec(entry.id.$t);
            comment.id = id ? id[2] : null;
            comment.body = bodyFromEntry(entry);
            comment.timestamp = Date.parse(entry.published.$t) + '';
            if (entry.author && entry.author.constructor === Array) {
              var auth = entry.author[0];
              if (auth) {
                comment.author = {
                  name: (auth.name ? auth.name.$t : undefined),
                  profileUrl: (auth.uri ? auth.uri.$t : undefined),
                  avatarUrl: (auth.gd$image ? auth.gd$image.src : undefined)
                };
              }
            }
            if (entry.link) {
              if (entry.link[2]) {
                comment.link = comment.permalink = entry.link[2].href;
              }
              if (entry.link[3]) {
                var pid = /.*comments\/default\/(\d+)\?.*/.exec(entry.link[3].href);
                if (pid && pid[1]) {
                  comment.parentId = pid[1];
                }
              }
            }
            comment.deleteclass = 'item-control blog-admin';
            if (entry.gd$extendedProperty) {
              for (var k in entry.gd$extendedProperty) {
                if (entry.gd$extendedProperty[k].name == 'blogger.itemClass') {
                  comment.deleteclass += ' ' + entry.gd$extendedProperty[k].value;
                } else if (entry.gd$extendedProperty[k].name == 'blogger.displayTime') {
                  comment.displayTime = entry.gd$extendedProperty[k].value;
                }
              }
            }
            comments.push(comment);
          }
        }
        return comments;
      };

      var paginator = function(callback) {
        if (hasMore()) {
          var url = config.feed + '?alt=json&v=2&orderby=published&reverse=false&max-results=50';
          if (cursor) {
            url += '&published-min=' + new Date(cursor).toISOString();
          }
          window.bloggercomments = function(data) {
            var parsed = parse(data);
            cursor = parsed.length < 50 ? null
                : parseInt(parsed[parsed.length - 1].timestamp) + 1
            callback(parsed);
            window.bloggercomments = null;
          }
          url += '&callback=bloggercomments';
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = url;
          document.getElementsByTagName('head')[0].appendChild(script);
        }
      };
      var hasMore = function() {
        return !!cursor;
      };
      var getMeta = function(key, comment) {
        if ('iswriter' == key) {
          var matches = !!comment.author
              && comment.author.name == config.authorName
              && comment.author.profileUrl == config.authorUrl;
          return matches ? 'true' : '';
        } else if ('deletelink' == key) {
          return config.baseUri + '/delete-comment.g?blogID='
               + config.blogId + '&postID=' + comment.id;
        } else if ('deleteclass' == key) {
          return comment.deleteclass;
        }
        return '';
      };

      var replybox = null;
      var replyUrlParts = null;
      var replyParent = undefined;

      var onReply = function(commentId, domId) {
        if (replybox == null) {
          // lazily cache replybox, and adjust to suit this style:
          replybox = document.getElementById('comment-editor');
          if (replybox != null) {
            replybox.height = '250px';
            replybox.style.display = 'block';
            replyUrlParts = replybox.src.split('#');
          }
        }
        if (replybox && (commentId !== replyParent)) {
          document.getElementById(domId).insertBefore(replybox, null);
          replybox.src = replyUrlParts[0]
              + (commentId ? '&parentID=' + commentId : '')
              + '#' + replyUrlParts[1];
          replyParent = commentId;
        }
      };

      var hash = (window.location.hash || '#').substring(1);
      var startThread, targetComment;
      if (/^comment-form_/.test(hash)) {
        startThread = hash.substring('comment-form_'.length);
      } else if (/^c[0-9]+$/.test(hash)) {
        targetComment = hash.substring(1);
      }

      // Configure commenting API:
      var configJso = {
        'maxDepth': config.maxThreadDepth
      };
      var provider = {
        'id': config.postId,
        'data': items,
        'loadNext': paginator,
        'hasMore': hasMore,
        'getMeta': getMeta,
        'onReply': onReply,
        'rendered': true,
        'initComment': targetComment,
        'initReplyThread': startThread,
        'config': configJso,
        'messages': msgs
      };

      var render = function() {
        if (window.goog && window.goog.comments) {
          var holder = document.getElementById('comment-holder');
          window.goog.comments.render(holder, provider);
        }
      };

      // render now, or queue to render when library loads:
      if (window.goog && window.goog.comments) {
        render();
      } else {
        window.goog = window.goog || {};
        window.goog.comments = window.goog.comments || {};
        window.goog.comments.loadQueue = window.goog.comments.loadQueue || [];
        window.goog.comments.loadQueue.push(render);
      }
    })();
// ]]>
  </script>
</b:includable>
       <b:includable id='threaded_comments' var='post'>
  <div class='comments' id='comments'>
    <a name='comments'/>
    <h4><data:post.commentLabelFull/>:</h4>

    <div class='comments-content'>
      <b:if cond='data:post.embedCommentForm'>
        <b:include data='post' name='threaded_comment_js'/>
      </b:if>
      <div id='comment-holder'>
         <data:post.commentHtml/>
      </div>
    </div>

    <p class='comment-footer'>
      <b:if cond='data:post.allowNewComments'>
        <b:include data='post' name='threaded-comment-form'/>
      <b:else/>
        <data:post.noNewCommentsText/>
      </b:if>
    </p>

    <b:if cond='data:showCmtPopup'>
      <div id='comment-popup'>
        <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
        </iframe>
      </div>
    </b:if>

    <div id='backlinks-container'>
    <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
       <b:if cond='data:post.showBacklinks'>
         <b:include data='post' name='backlinks'/>
       </b:if>
    </div>
    </div>
  </div>
</b:includable>
     </b:widget>
     <b:widget id='HTML300' locked='true' title='Comments System' type='HTML' version='1'>
       <b:widget-settings>
         <b:widget-setting name='content'>blogger/disqus/facebook</b:widget-setting>
       </b:widget-settings>
       <b:includable id='main'>
          <b:if cond='data:blog.pageType == &quot;item&quot;'>
            <b:if cond='data:content == &quot;blogger&quot;'>
              <div class='comments-tabs'>
                <div data-tab='blogger'><div class='tab-blogger'/></div>
              </div>
            </b:if>
            <b:if cond='data:content == &quot;facebook&quot;'>
              <div class='comments-tabs'>
                <div data-tab='facebook'><div class='tab-facebook'/></div>
              </div>
              <script type='text/javascript'>
              //<![CDATA[
                $('#comments').remove();
              //]]>
              </script>    
            </b:if>
            <b:if cond='data:content == &quot;disqus&quot;'>
              <div class='comments-tabs'>
                <div data-tab='disqus'><div class='tab-disqus'><div id='disqus_thread'/></div></div>
              </div>
              <script type='text/javascript'>
              //<![CDATA[
                $('#comments').remove();
              //]]>
              </script>
            </b:if>
            <b:if cond='data:content == &quot;blogger/facebook&quot;'>
              <div class='comments-tabs'>
                <div data-tab='blogger'><div class='tab-blogger'/></div>
                <div data-tab='facebook'><div class='tab-facebook'/></div>
              </div>
            </b:if>
            <b:if cond='data:content == &quot;blogger/disqus&quot;'>
              <div class='comments-tabs'>
                <div data-tab='blogger'><div class='tab-blogger'/></div>
                <div data-tab='disqus'><div class='tab-disqus'><div id='disqus_thread'/></div></div>
              </div>
            </b:if>
            <b:if cond='data:content == &quot;facebook/blogger&quot;'>
              <div class='comments-tabs'>
                <div data-tab='facebook'><div class='tab-facebook'/></div>
                <div data-tab='blogger'><div class='tab-blogger'/></div>
              </div>
            </b:if>
            <b:if cond='data:content == &quot;facebook/disqus&quot;'>
              <div class='comments-tabs'>
                <div data-tab='facebook'><div class='tab-facebook'/></div>
                <div data-tab='disqus'><div class='tab-disqus'><div id='disqus_thread'/></div></div>
              <script type='text/javascript'>
              //<![CDATA[
                $('#comments').remove();
              //]]>
              </script>
              </div>
            </b:if>
            <b:if cond='data:content == &quot;disqus/blogger&quot;'>
              <div class='comments-tabs'>
                <div data-tab='disqus'><div class='tab-disqus'><div id='disqus_thread'/></div></div>
                <div data-tab='blogger'><div class='tab-blogger'/></div>
              </div>
            </b:if>
            <b:if cond='data:content == &quot;disqus/facebook&quot;'>
              <div class='comments-tabs'>
                <div data-tab='disqus'><div class='tab-disqus'><div id='disqus_thread'/></div></div>
                <div data-tab='facebook'><div class='tab-facebook'/></div>
              </div>
              <script type='text/javascript'>
              //<![CDATA[
                $('#comments').remove();
              //]]>
              </script>
            </b:if>
            <b:if cond='data:content == &quot;blogger/facebook/disqus&quot;'>
              <div class='comments-tabs'>
                <div data-tab='blogger'><div class='tab-blogger'/></div>
                <div data-tab='facebook'><div class='tab-facebook'/></div>
                <div data-tab='disqus'><div class='tab-disqus'><div id='disqus_thread'/></div></div>
              </div>
            </b:if>
            <b:if cond='data:content == &quot;blogger/disqus/facebook&quot;'>
              <div class='comments-tabs'>
                <div data-tab='blogger'><div class='tab-blogger'/></div>
                <div data-tab='disqus'><div class='tab-disqus'><div id='disqus_thread'/></div></div>
                <div data-tab='facebook'><div class='tab-facebook'/></div>
              </div>
            </b:if>
            <b:if cond='data:content == &quot;facebook/blogger/disqus&quot;'>
              <div class='comments-tabs'>
                <div data-tab='facebook'><div class='tab-facebook'/></div>
                <div data-tab='blogger'><div class='tab-blogger'/></div>
                <div data-tab='disqus'><div class='tab-disqus'><div id='disqus_thread'/></div></div>
              </div>
            </b:if>
            <b:if cond='data:content == &quot;facebook/disqus/blogger&quot;'>
              <div class='comments-tabs'>
                <div data-tab='facebook'><div class='tab-facebook'/></div>
                <div data-tab='disqus'><div class='tab-disqus'><div id='disqus_thread'/></div></div>
                <div data-tab='blogger'><div class='tab-blogger'/></div>
              </div>
            </b:if>
            <b:if cond='data:content == &quot;disqus/blogger/facebook&quot;'>
              <div class='comments-tabs'>
                <div data-tab='disqus'><div class='tab-disqus'><div id='disqus_thread'/></div></div>
                <div data-tab='blogger'><div class='tab-blogger'/></div>
                <div data-tab='facebook'><div class='tab-facebook'/></div>
              </div>
            </b:if>
            <b:if cond='data:content == &quot;disqus/facebook/blogger&quot;'>
              <div class='comments-tabs'>
                <div data-tab='disqus'><div class='tab-disqus'><div id='disqus_thread'/></div></div>
                <div data-tab='facebook'><div class='tab-facebook'/></div>
                <div data-tab='blogger'><div class='tab-blogger'/></div>
              </div>
            </b:if>
            <div id='fb-root'/><script>(function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = &quot;//connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v2.5&quot;;fjs.parentNode.insertBefore(js, fjs);}(document, &#39;script&#39;, &#39;facebook-jssdk&#39;));</script>&lt;script&gt;$(&quot;.tab-facebook&quot;).append(&quot;&lt;div class=&#39;fb-comments&#39; data-href=&#39;<data:blog.canonicalUrl/>&#39; data-width=&#39;100%&#39; data-numposts=&#39;5&#39; data-colorscheme=&#39;light&#39;&gt;&lt;/div&gt;&quot;);&lt;/script&gt;
          </b:if>
        </b:includable>
     </b:widget>
     <b:widget id='HTML301' locked='true' title='Disqus Shortname' type='HTML' version='1'>
       <b:widget-settings>
         <b:widget-setting name='content'>designcart</b:widget-setting>
       </b:widget-settings>
       <b:includable id='main'>
          <b:if cond='data:blog.pageType == &quot;item&quot;'>
            &lt;script type=&#39;text/javascript&#39;&gt;
            var disqus_shortname = &#39;<data:content/>&#39;;
             (function() {
              var dsq = document.createElement(&#39;script&#39;); dsq.type = &#39;text/javascript&#39;; dsq.async = true;
              dsq.src = &#39;//&#39; + disqus_shortname + &#39;.disqus.com/embed.js&#39;;
              (document.getElementsByTagName(&#39;head&#39;)[0] || document.getElementsByTagName(&#39;body&#39;)[0]).appendChild(dsq);
              })();
            &lt;/script&gt;
          </b:if>
        </b:includable>
     </b:widget>
   </b:section>         

      </div>
      <div id='ads-footer'>
        <b:section id='post-ads-footer' maxwidgets='1' name='Item ADS Footer' showaddelement='yes'>
          <b:widget id='HTML9' locked='false' title='' type='HTML'>
            <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
          </b:widget>
        </b:section>
      </div>

    
</div></div>
      
   <div id='sidebar-wrapper'>

<b:section class='social-counter sidebar' id='social-counter' maxwidgets='1' name='Social Counter' showaddelement='yes'>
  <b:widget id='LinkList62' locked='true' title='Social Counter' type='LinkList' version='1'>
    <b:widget-settings>
      <b:widget-setting name='link-7'>http://</b:widget-setting>
      <b:widget-setting name='link-5'>http://</b:widget-setting>
      <b:widget-setting name='link-6'>http://</b:widget-setting>
      <b:widget-setting name='link-3'>http://</b:widget-setting>
      <b:widget-setting name='link-4'>http://</b:widget-setting>
      <b:widget-setting name='text-1'>twitter count=1.7k;</b:widget-setting>
      <b:widget-setting name='text-0'>facebook count=3.5k;</b:widget-setting>
      <b:widget-setting name='text-3'>youtube count=2.8k;</b:widget-setting>
      <b:widget-setting name='text-2'>gplus count=735;</b:widget-setting>
      <b:widget-setting name='text-5'>dribbble count=7.3k;</b:widget-setting>
      <b:widget-setting name='text-4'>pinterest count=524;</b:widget-setting>
      <b:widget-setting name='text-7'>rss count=286;</b:widget-setting>
      <b:widget-setting name='text-6'>instagram count=849;</b:widget-setting>
      <b:widget-setting name='sorting'>NONE</b:widget-setting>
      <b:widget-setting name='link-1'>http://</b:widget-setting>
      <b:widget-setting name='link-2'>http://</b:widget-setting>
      <b:widget-setting name='link-0'>http://</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
            <b:if cond='data:title != &quot;&quot;'>
              <h2 class='title'><data:title/></h2>
            </b:if>
            <div class='widget-content'>
              <ul id='social'>
                <b:loop values='data:links' var='link'>
                  <li expr:class='&quot;item-social &quot; + data:link.name'><a expr:href='data:link.target'> <i class='item-icon fa'/><div class='hide-count'><data:link.name/></div><span class='item-text'>Follow</span> </a></li>
                </b:loop>
              </ul>
            </div>
          </b:includable>
  </b:widget>
</b:section>

      <b:section class='sidebar ready-widget' id='sidebar2' name='Sidebar Right A' showaddelement='yes'>
        <b:widget id='PopularPosts1' locked='false' title='Popular Posts' type='PopularPosts' version='1'>
          <b:widget-settings>
            <b:widget-setting name='numItemsToShow'>3</b:widget-setting>
            <b:widget-setting name='showThumbnails'>true</b:widget-setting>
            <b:widget-setting name='showSnippets'>false</b:widget-setting>
            <b:widget-setting name='timeRange'>LAST_YEAR</b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'><h2><data:title/></h2></b:if>
  <div class='widget-content popular-posts'>
    <ul>
      <b:loop values='data:posts' var='post'>
      <li>
        <b:if cond='!data:showThumbnails'>
          <b:if cond='!data:showSnippets'>
            <!-- (1) No snippet/thumbnail -->
            <a expr:href='data:post.href'><data:post.title/></a>
          <b:else/>
            <!-- (2) Show only snippets -->
            <div class='item-title'><a expr:href='data:post.href'><data:post.title/></a></div>
            <div class='item-snippet'><data:post.snippet/></div>
          </b:if>
        <b:else/>
          <!-- (3) Show only thumbnails or (4) Snippets and thumbnails. -->
          <div expr:class='data:showSnippets ? &quot;item-content&quot; : &quot;item-thumbnail-only&quot;'>
            <b:if cond='data:post.thumbnail'>
              <div class='item-thumbnail'>
                <a expr:href='data:post.href' target='_blank'>
                  <img border='0' expr:alt='data:post.title' expr:height='data:thumbnailSize' expr:src='data:post.thumbnail' expr:width='data:thumbnailSize'/>
                </a>
              </div>
            </b:if>
            <div class='item-title'><a expr:href='data:post.href'><data:post.title/></a></div>
            <b:if cond='data:showSnippets'>
              <div class='item-snippet'><data:post.snippet/></div>
            </b:if>
          </div>
          <div style='clear: both;'/>
        </b:if>
      </li>
      </b:loop>
    </ul>
    <b:include name='quickedit'/>
  </div>
</b:includable>
        </b:widget>
      </b:section>

      <div class='sidetabs' id='sidetabs'>
      <ul class='menu-tab'>
        <li class='item-1'><a href='#tabside1'/></li>
        <li class='item-2'><a href='#tabside2'/></li>
      </ul>
      <b:section class='sidebar ready-widget' id='tabside1' maxwidgets='1' name='Tab 01' showaddelement='yes'>
        <b:widget id='HTML10' locked='false' title='Recent Posts' type='HTML'>
          <b:widget-settings>
            <b:widget-setting name='content'><![CDATA[<span class="recentposts" data-no="4"></span>]]></b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
        </b:widget>
      </b:section>
      <b:section class='sidebar ready-widget' id='tabside2' maxwidgets='1' name='Tab 02' showaddelement='yes'>
        <b:widget id='HTML12' locked='false' title='Comments' type='HTML'>
          <b:widget-settings>
            <b:widget-setting name='content'>recentcomments</b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
        </b:widget>
      </b:section>
     </div>

    <b:section class='sidebar ready-widget' id='sidebar' name='Sidebar Right B' showaddelement='yes'>
      <b:widget id='HTML23' locked='false' title='Facebook' type='HTML'>
        <b:widget-settings>
          <b:widget-setting name='content'><![CDATA[<iframe name="f2579ef3ff88908" width="250px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.5/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FXBwzv5Yrm_1.js%3Fversion%3D42%23cb%3Df4389127ece03c%26domain%3Dwriteup-themexpose.blogspot.com%26origin%3Dhttp%253A%252F%252Fwriteup-themexpose.blogspot.com%252Ff144bab2ba048c4%26relation%3Dparent.parent&amp;container_width=250&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fthemexpose%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=250" style="border: none; visibility: visible; width: 250px; height: 210px;" class=""></iframe>]]></b:widget-setting>
        </b:widget-settings>
        <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
      </b:widget>
      <b:widget id='FollowByEmail1' locked='false' title='Follow by Email' type='FollowByEmail' version='1'>
        <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'><h2 class='title'><data:title/></h2></b:if>
  <div class='widget-content'>

    <div class='follow-by-email-inner'>
      <form action='https://feedburner.google.com/fb/a/mailverify' expr:onsubmit='&quot;window.open(\&quot;https://feedburner.google.com/fb/a/mailverify?uri=&quot; + data:feedPath + &quot;\&quot;, \&quot;popupwindow\&quot;, \&quot;scrollbars=yes,width=550,height=520\&quot;); return true&quot;' method='post' target='popupwindow'>
        <table width='100%'>
          <tr>
            <td>
              <input class='follow-by-email-address' name='email' placeholder='Email address...' type='text'/>
            </td>
            <td width='64px'>
              <input class='follow-by-email-submit' type='submit' value='Submit'/>
            </td>
          </tr>
        </table>
        <input expr:value='data:feedPath' name='uri' type='hidden'/>
        <input name='loc' type='hidden' value='en_US'/>
      </form>
    </div>
  </div>
  <span class='item-control blog-admin'>
   <!--b:include name='quickedit'/-->
  </span>
</b:includable>
      </b:widget>
    </b:section>

      </div>
  <div class='clear'/>
    </div>
    <!-- end content-wrapper -->

 <div class='clear'/><!-- Footer wrapper -->

<div id='footer-wrapper'> 

   <div class='row' id='footer'>
      <b:section class='sect-left ready-widget' id='footer-sec1' maxwidgets='3' name='Widget 1' showaddelement='yes'>
        <b:widget id='HTML16' locked='false' title='Featured Posts' type='HTML'>
          <b:widget-settings>
            <b:widget-setting name='content'><![CDATA[<span class="recentposts" data-no="4"></span>]]></b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
        </b:widget>
      </b:section>
      <b:section class='sect-left ready-widget' id='footer-sec2' maxwidgets='3' name='Widget 2' showaddelement='yes'>
        <b:widget id='HTML17' locked='false' title='Recent Posts' type='HTML'>
          <b:widget-settings>
            <b:widget-setting name='content'><![CDATA[<span class="labelpost" data-label="Gallery" data-no="4"></span>]]></b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
        </b:widget>
      </b:section>
      <b:section class='sect-left ready-widget' id='footer-sec3' maxwidgets='3' name='Widget 3' showaddelement='yes'>
        <b:widget id='HTML18' locked='false' title='Recent in Sports' type='HTML'>
          <b:widget-settings>
            <b:widget-setting name='content'><![CDATA[<span class="recentposts" data-no="4"></span>]]></b:widget-setting>
          </b:widget-settings>
          <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
        </b:widget>
      </b:section>
  </div>

<div class='clear'/>

<div class='footer-wrapper'>
<div class='footer-sec row'>

<!-- Footer Social --> 
<div class='social-footer'>
<div class='native-opt'>
<li><a class='back-top' href='#top' title='Back to Top'><i class='fa fa-angle-double-up'/></a></li>
</div>
<b:section id='social-footer' maxwidgets='1' name='Social Footer' showaddelement='yes'>
  <b:widget id='LinkList20' locked='true' title='Social Media Icons 2' type='LinkList' version='1'>
    <b:includable id='main'>
            <div class='widget-content'>
              <ul>
                <b:loop values='data:links' var='link'>
                  <li><a expr:class='data:link.name' expr:href='data:link.target' expr:title='data:link.name' target='_blank'/></li>
                </b:loop>
              </ul>
            </div>
    </b:includable>
  </b:widget>
</b:section>
</div>

<!-- Footer Copyright -->
<div class='copyright'>Created By <a href='http://www.themexpose.com/' id='mycontent' title='Free Blogger Template'>ThemeXpose</a>

</div>
</div>
</div>
</div>

&lt;/div&gt;

<script>
//<![CDATA[
// News Ticker plugin ~ URL: http://jonmifsud.com/open-source/jquery/jquery-webticker
(function(e){function n(e,t){var s=e.data("settings");if(typeof t==="undefined")t=false;if(t){i(e)}var o=r(e);e.animate(o.css,o.time,"linear",function(){e.css(s.direction,"0");n(e,true)})}function r(e){var t=e.data("settings");var n=e.children().first();var r=Math.abs(-e.css(t.direction).replace("px","").replace("auto","0")-n.outerWidth(true));var t=e.data("settings");var i=r*1e3/t.speed;var s={};s[t.direction]=e.css(t.direction).replace("px","").replace("auto","0")-r;return{css:s,time:i}}function i(e){var t=e.data("settings");e.css("transition-duration","0s").css(t.direction,"0");var n=e.children().first();if(n.hasClass("webticker-init"))n.remove();else e.children().last().after(n)}function s(e,t){if(typeof t==="undefined")t=false;if(t){i(e)}var n=r(e);var s=n.time/1e3;s+="s";e.css(n.css).css("transition-duration",s)}function o(t,n,r){var i;e.get(t,function(t){var s=e(t);s.find("item").each(function(){var t=e(this),n={title:t.find("title").text(),link:t.find("link").text()};listItem="<li><a href='"+n.link+"'>"+n.title+"</a></li>";i+=listItem});r.webTicker("update",i,n)})}function u(t){var n=t.data("settings");t.width("auto");var r=0;t.children("li").each(function(){r+=e(this).outerWidth(true)});if(r<t.parent().width()||t.children().length==1){if(n.duplicate){itemWidth=Math.max.apply(Math,t.children().map(function(){return e(this).width()}).get());while(r-itemWidth<t.parent().width()||t.children().length==1){var i=t.children().clone();t.append(i);r=0;t.children("li").each(function(){r+=e(this).outerWidth(true)});itemWidth=Math.max.apply(Math,t.children().map(function(){return e(this).width()}).get())}}else{var s=t.parent().width()-r;s+=t.find("li:first").width();var o=t.find("li:first").height();t.append('<li class="ticker-spacer" style="width:'+s+"px;height:"+o+'px;"></li>')}}if(n.startEmpty){var o=t.find("li:first").height();t.prepend('<li class="webticker-init" style="width:'+t.parent().width()+"px;height:"+o+'px;"></li>')}r=0;t.children("li").each(function(){r+=e(this).outerWidth(true)});t.width(r+200);widthCompare=0;t.children("li").each(function(){widthCompare+=e(this).outerWidth(true)});while(widthCompare>=t.width()){t.width(t.width()+200);widthCompare=0;t.children("li").each(function(){widthCompare+=e(this).outerWidth(true)})}}var t=function(){var e=document.createElement("p").style,t=["ms","O","Moz","Webkit"];if(e["transition"]=="")return true;while(t.length)if(t.pop()+"Transition"in e)return true;return false}();var a={init:function(r){r=jQuery.extend({speed:50,direction:"left",moving:true,startEmpty:true,duplicate:false,rssurl:false,hoverpause:true,rssfrequency:0,updatetype:"reset"},r);return this.each(function(){jQuery(this).data("settings",r);var i=jQuery(this);i.addClass("newsticker");var a=i.wrap("<div class='mask'></div>");a.after("<span class='tickeroverlay-left'>&nbsp;</span><span class='tickeroverlay-right'>&nbsp;</span>");var f=i.parent().wrap("<div class='tickercontainer'></div>");u(i);if(r.rssurl){o(r.rssurl,r.type,i);if(r.rssfrequency>0){window.setInterval(function(){o(r.rssurl,r.type,i)},r.rssfrequency*1e3*60)}}if(t){i.css("transition-duration","0s").css(r.direction,"0");s(i,false);i.on("transitionend webkitTransitionEnd oTransitionEnd otransitionend",function(t){if(!i.is(t.target)){return false}s(e(this),true)})}else{n(e(this))}if(r.hoverpause){i.hover(function(){if(t){var n=e(this).css(r.direction);e(this).css("transition-duration","0s").css(r.direction,n)}else jQuery(this).stop()},function(){if(jQuery(this).data("settings").moving){if(t){s(e(this),false)}else{n(i)}}})}})},stop:function(){var n=e(this).data("settings");if(n.moving){n.moving=false;return this.each(function(){if(t){var r=e(this).css(n.direction);e(this).css("transition-duration","0s").css(n.direction,r)}else e(this).stop()})}},cont:function(){var r=e(this).data("settings");if(!r.moving){r.moving=true;return this.each(function(){if(t){s(e(this),false)}else{n(e(this))}})}},update:function(t,n,r,i){n=n||"reset";if(typeof r==="undefined")r=true;if(typeof i==="undefined")i=false;if(typeof t==="string"){t=e(t)}var s=e(this);s.webTicker("stop");var o=e(this).data("settings");if(n=="reset"){s.html(t);s.css(o.direction,"0");u(s)}else if(n=="swap"){s.children("li").addClass("old");for(var a=0;a<t.length;a++){id=e(t[a]).data("update");match=s.find('[data-update="'+id+'"]');if(match.length<1){if(r){if(s.find(".ticker-spacer:first-child").length==0&&s.find(".ticker-spacer").length>0){s.children("li.ticker-spacer").before(t[a])}else{s.append(t[a])}}}else s.find('[data-update="'+id+'"]').replaceWith(t[a]);}s.children("li.webticker-init, li.ticker-spacer").removeClass("old");if(i)s.children("li").remove(".old");stripWidth=0;s.children("li").each(function(){stripWidth+=e(this).outerWidth(true)});s.width(stripWidth+200)}s.webTicker("cont")}};e.fn.webTicker=function(t){if(a[t]){return a[t].apply(this,Array.prototype.slice.call(arguments,1))}else if(typeof t==="object"||!t){return a.init.apply(this,arguments)}else{e.error("Method "+t+" does not exist on jQuery.webTicker")}}})(jQuery);


// Tabslet jQuery plugin -  http://vdw.staytuned.gr
(function($,window,undefined){$.fn.tabslet=function(options){var defaults={mouseevent:"click",attribute:"href",animation:false,autorotate:false,pauseonhover:true,delay:2000,active:1,controls:{prev:".prev",next:".next"}};var options=$.extend(defaults,options);return this.each(function(){var $this=$(this);options.mouseevent=$this.data("mouseevent")||options.mouseevent;options.attribute=$this.data("attribute")||options.attribute;options.animation=$this.data("animation")||options.animation;options.autorotate=$this.data("autorotate")||options.autorotate;options.pauseonhover=$this.data("pauseonhover")||options.pauseonhover;options.delay=$this.data("delay")||options.delay;options.active=$this.data("active")||options.active;$this.find("> div").hide();$this.find("> div").eq(options.active-1).show();$this.find("> ul li").eq(options.active-1).addClass("active");var fn=eval(function(){$(this).trigger("_before");$this.find("> ul li").removeClass("active");$(this).addClass("active");$this.find("> div").hide();var currentTab=$(this).find("a").attr(options.attribute);if(options.animation){$this.find(currentTab).animate({opacity:"show"},"slow",function(){$(this).trigger("_after")})}else{$this.find(currentTab).show();$(this).trigger("_after")}return false});var init=eval("$this.find('> ul li')."+options.mouseevent+"(fn)");init;var elements=$this.find("> ul li"),i=options.active-1;function forward(){i=++i%elements.length;options.mouseevent=="hover"?elements.eq(i).trigger("mouseover"):elements.eq(i).click();var t=setTimeout(forward,options.delay);$this.mouseover(function(){if(options.pauseonhover){clearTimeout(t)}})}if(options.autorotate){setTimeout(forward,0);if(options.pauseonhover){$this.on("mouseleave",function(){setTimeout(forward,1000)})}}function move(direction){if(direction=="forward"){i=++i%elements.length}if(direction=="backward"){i=--i%elements.length}elements.eq(i).click()}$this.find(options.controls.next).click(function(){move("forward")});$this.find(options.controls.prev).click(function(){move("backward")});$this.on("destroy",function(){$(this).removeData()})})};$(document).ready(function(){$('[data-toggle="tabslet"]').tabslet()})})(jQuery);

// Plugin: SelectNav.js ~ url: https://github.com/lukaszfiszer/selectnav.js
window.selectnav=function(){"use strict";var e=function(e,t){function c(e){var t;if(!e)e=window.event;if(e.target)t=e.target;else if(e.srcElement)t=e.srcElement;if(t.nodeType===3)t=t.parentNode;if(t.value)window.location.href=t.value}function h(e){var t=e.nodeName.toLowerCase();return t==="ul"||t==="ol"}function p(e){for(var t=1;document.getElementById("selectnav"+t);t++);return e?"selectnav"+t:"selectnav"+(t-1)}function d(e){a++;var t=e.children.length,n="",l="",c=a-1;if(!t){return}if(c){while(c--){l+=o}l+=" "}for(var v=0;v<t;v++){var m=e.children[v].children[0];if(typeof m!=="undefined"){var g=m.innerText||m.textContent;var y="";if(r){y=m.className.search(r)!==-1||m.parentNode.className.search(r)!==-1?f:""}if(i&&!y){y=m.href===document.URL?f:""}n+='<option value="'+m.href+'" '+y+">"+l+g+"</option>";if(s){var b=e.children[v].children[1];if(b&&h(b)){n+=d(b)}}}}if(a===1&&u){n='<option value="">'+u+"</option>"+n}if(a===1){n='<select class="selectnav" id="'+p(true)+'">'+n+"</select>"}a--;return n}e=document.getElementById(e);if(!e){return}if(!h(e)){return}if(!("insertAdjacentHTML"in window.document.documentElement)){return}document.documentElement.className+=" js";var n=t||{},r=n.activeclass||"active",i=typeof n.autoselect==="boolean"?n.autoselect:true,s=typeof n.nested==="boolean"?n.nested:true,o=n.indent||"?",u=n.label||"Menu",a=0,f=" selected ";e.insertAdjacentHTML("afterend",d(e));var l=document.getElementById(p());if(l.addEventListener){l.addEventListener("change",c)}if(l.attachEvent){l.attachEvent("onchange",c)}return l};return function(t,n){e(t,n)}}();$(document).ready(function(){selectnav('menu-main-nav');selectnav('nav1');});

// Simple Tab JQuery Plugin by Taufik Nurrohman - https://plus.google.com/108949996304093815163/about
(function(a){a.fn.simpleTab=function(b){b=jQuery.extend({active:1,fx:null,showSpeed:400,hideSpeed:400,showEasing:null,hideEasing:null,show:function(){},hide:function(){},change:function(){}},b);return this.each(function(){var e=a(this),c=e.children("[data-tab]"),d=b.active-1;e.addClass("simpleTab").prepend('<ul class="tab-wrapper"></ul>');c.addClass("tab-content").each(function(){a(this).hide();e.find(".tab-wrapper").append('<li><a href="#">'+a(this).data("tab")+"</a></li>")}).eq(d).show();e.find(".tab-wrapper a").on("click",function(){var f=a(this).parent().index();a(this).closest(".tab-wrapper").find(".activeTab").removeClass("activeTab");a(this).addClass("activeTab");if(b.fx=="slide"){if(c.eq(f).is(":hidden")){c.slideUp(b.hideSpeed,b.hideEasing,function(){b.hide.call(e)}).eq(f).slideDown(b.showSpeed,b.showEasing,function(){b.show.call(e)})}}else{if(b.fx=="fade"){if(c.eq(f).is(":hidden")){c.hide().eq(f).fadeIn(b.showSpeed,b.showEasing,function(){b.show.call(e)})}}else{if(b.fx=="fancyslide"){if(c.eq(f).is(":hidden")){c.slideUp(b.hideSpeed,b.hideEasing,function(){b.hide.call(e)}).eq(f).delay(b.hideSpeed).slideDown(b.showSpeed,b.showEasing,function(){b.show.call(e)})}}else{if(c.eq(f).is(":hidden")){c.hide().eq(f).show()}}}}b.change.call(e);return false}).eq(d).addClass("activeTab")})}})(jQuery);

// JQuery hover event with timeout by Taufik Nurrohman - https://plus.google.com/108949996304093815163/about
(function(c){c.fn.hoverTimeout=function(d,e,f,g){return this.each(function(){var a=null,b=c(this);b.hover(function(){clearTimeout(a);a=setTimeout(function(){e.call(b)},d)},function(){clearTimeout(a);a=setTimeout(function(){g.call(b)},f)})})}})(jQuery);

// jquery replacetext plugin https://github.com/cowboy/jquery-replacetext
(function(e){e.fn.replaceText=function(t,n,r){return this.each(function(){var i=this.firstChild,s,o,u=[];if(i){do{if(i.nodeType===3){s=i.nodeValue;o=s.replace(t,n);if(o!==s){if(!r&&/</.test(o)){e(i).before(o);u.push(i)}else{i.nodeValue=o}}}}while(i=i.nextSibling)}u.length&&e(u).remove()})}})(jQuery);


// Main Scripts
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('1I 1j=["\\b\\Y\\1r\\b\\A\\1n\\1d\\1h\\a\\v\\a\\e\\a\\d\\a\\b\\f\\a\\g\\a\\c\\a\\d\\a\\N\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\b\\r\\a\\q\\a\\m\\a\\V\\a\\f\\a\\g\\a\\c\\a\\m\\a\\b\\r\\a\\e\\a\\C\\a\\m\\a\\d\\a\\12\\a\\d\\a\\n\\a\\H\\a\\b\\Z\\a\\12\\a\\f\\a\\H\\a\\b\\m\\a\\f\\a\\n\\a\\H\\a\\S\\a\\12\\a\\m\\a\\b\\q\\a\\n\\a\\H\\a\\b\\U\\a\\12\\a\\m\\a\\b\\q\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\h\\a\\c\\a\\d\\a\\b\\w\\a\\q\\a\\H\\a\\b\\11\\a\\h\\a\\g\\a\\c\\a\\m\\a\\b\\o\\a\\e\\a\\v\\a\\e\\a\\h\\a\\b\\x\\a\\d\\a\\b\\r\\a\\h\\a\\g\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\b\\r\\a\\q\\a\\m\\a\\V\\a\\c\\a\\m\\a\\b\\r\\a\\i\\a\\c\\a\\d\\a\\b\\w\\a\\q\\a\\H\\a\\b\\g\\a\\f\\a\\g\\a\\c\\a\\m\\a\\Q\\a\\e\\a\\f\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\h\\a\\d\\a\\b\\r\\a\\q\\a\\m\\a\\V\\a\\q\\a\\m\\a\\b\\17\\a\\h\\a\\o\\a\\t\\a\\f\\a\\g\\a\\p\\a\\v\\a\\e\\a\\h\\a\\c\\a\\d\\a\\b\\r\\a\\q\\a\\m\\a\\V\\a\\q\\a\\m\\a\\b\\17\\a\\h\\a\\g\\a\\c\\a\\m\\a\\w\\a\\e\\a\\h\\a\\u\\a\\d\\a\\H\\a\\t\\a\\h\\a\\r\\a\\H\\a\\E\\a\\r\\a\\h\\a\\u\\a\\o\\a\\d\\a\\H\\a\\t\\a\\h\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\b\\x\\a\\m\\a\\J\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\f\\a\\u\\a\\b\\11\\a\\i\\a\\H\\a\\b\\W\\a\\j\\a\\h\\a\\d\\a\\x\\a\\q\\a\\16\\a\\k\\a\\q\\a\\16\\a\\14\\a\\h\\a\\t\\a\\u\\a\\b\\W\\a\\t\\a\\u\\a\\b\\11\\a\\i\\a\\S\\a\\j\\a\\h\\a\\m\\a\\Y\\a\\q\\a\\d\\a\\x\\a\\h\\a\\t\\a\\f\\a\\p\\a\\v\\a\\e\\a\\f\\a\\b\\x\\a\\m\\a\\J\\a\\i\\a\\b\\W\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\s\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\w\\a\\e\\a\\g\\a\\n\\a\\I\\a\\j\\a\\s\\a\\c\\a\\m\\a\\b\\X\\a\\e\\a\\13\\a\\n\\a\\d\\a\\g\\a\\n\\a\\R\\a\\j\\a\\s\\a\\c\\a\\m\\a\\b\\X\\a\\e\\a\\d\\a\\g\\a\\p\\a\\f\\a\\16\\a\\N\\a\\f\\a\\j\\a\\j\\a\\I\\a\\b\\C\\a\\e\\a\\I\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\s\\a\\f\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\1a\\a\\f\\a\\g\\a\\n\\a\\V\\a\\r\\a\\j\\a\\h\\a\\u\\a\\b\\W\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\I\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\R\\a\\r\\a\\f\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\o\\a\\b\\W\\a\\t\\a\\f\\a\\g\\a\\12\\a\\e\\a\\I\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\s\\a\\f\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\1a\\a\\f\\a\\g\\a\\n\\a\\V\\a\\r\\a\\j\\a\\h\\a\\u\\a\\o\\a\\b\\11\\a\\t\\a\\u\\a\\o\\a\\b\\W\\a\\t\\a\\u\\a\\b\\W\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\I\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\s\\a\\r\\a\\f\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\b\\11\\a\\i\\a\\S\\a\\j\\a\\h\\a\\m\\a\\Y\\a\\q\\a\\d\\a\\x\\a\\h\\a\\t\\a\\f\\a\\g\\a\\A\\a\\g\\a\\p\\a\\V\\a\\r\\a\\j\\a\\f\\a\\u\\a\\o\\a\\b\\11\\a\\t\\a\\u\\a\\o\\a\\b\\W\\a\\t\\a\\u\\a\\o\\a\\b\\11\\a\\t\\a\\f\\a\\p\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\V\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\b\\x\\a\\m\\a\\J\\a\\i\\a\\b\\11\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\V\\a\\c\\a\\b\\k\\a\\e\\a\\g\\a\\c\\a\\b\\c\\a\\e\\a\\o\\a\\b\\E\\a\\E\\a\\l\\a\\b\\y\\a\\H\\a\\15\\a\\p\\a\\o\\a\\14\\a\\n\\a\\f\\a\\f\\a\\g\\a\\c\\a\\b\\j\\a\\j\\a\\j\\a\\13\\a\\g\\a\\V\\a\\c\\a\\d\\a\\b\\o\\a\\e\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\b\\x\\a\\m\\a\\J\\a\\i\\a\\b\\W\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\V\\a\\c\\a\\b\\k\\a\\e\\a\\g\\a\\c\\a\\b\\c\\a\\e\\a\\o\\a\\b\\E\\a\\E\\a\\l\\a\\b\\y\\a\\H\\a\\15\\a\\p\\a\\o\\a\\14\\a\\n\\a\\f\\a\\f\\a\\g\\a\\c\\a\\b\\j\\a\\j\\a\\j\\a\\13\\a\\g\\a\\V\\a\\c\\a\\d\\a\\b\\o\\a\\e\\a\\g\\a\\A\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\d\\a\\b\\f\\a\\g\\a\\c\\a\\d\\a\\N\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\f\\a\\b\\x\\a\\d\\a\\x\\a\\f\\a\\g\\a\\c\\a\\H\\a\\b\\n\\a\\e\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\b\\11\\a\\c\\a\\m\\a\\Y\\a\\q\\a\\d\\a\\x\\a\\f\\a\\g\\a\\c\\a\\m\\a\\G\\a\\e\\a\\f\\a\\b\\W\\a\\f\\a\\g\\a\\c\\a\\m\\a\\b\\Z\\a\\e\\a\\f\\a\\16\\a\\b\\T\\a\\q\\a\\m\\a\\b\\b\\a\\f\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\b\\x\\a\\d\\a\\x\\a\\i\\a\\b\\11\\a\\i\\a\\b\\W\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\H\\a\\J\\a\\e\\a\\13\\a\\n\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\m\\a\\b\\b\\a\\e\\a\\f\\a\\b\\11\\a\\f\\a\\g\\a\\c\\a\\H\\a\\R\\a\\e\\a\\g\\a\\A\\a\\n\\a\\13\\a\\n\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\m\\a\\b\\b\\a\\e\\a\\f\\a\\b\\11\\a\\f\\a\\g\\a\\c\\a\\m\\a\\b\\U\\a\\e\\a\\g\\a\\A\\a\\g\\a\\A\\a\\g\\a\\p\\a\\y\\a\\i\\a\\b\\r\\a\\j\\a\\v\\a\\e\\a\\h\\a\\c\\a\\b\\r\\a\\h\\a\\g\\a\\p\\a\\b\\r\\a\\c\\a\\m\\a\\R\\a\\e\\a\\D\\a\\e\\a\\k\\a\\g\\a\\C\\a\\k\\a\\c\\a\\H\\a\\Y\\a\\e\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\b\\r\\a\\c\\a\\m\\a\\I\\a\\e\\a\\h\\a\\c\\a\\m\\a\\d\\a\\h\\a\\g\\a\\b\\y\\a\\b\\y\\a\\v\\a\\e\\a\\k\\a\\c\\a\\m\\a\\b\\i\\a\\g\\a\\c\\a\\m\\a\\I\\a\\e\\a\\b\\r\\a\\g\\a\\g\\a\\C\\a\\b\\r\\a\\c\\a\\m\\a\\b\\g\\a\\e\\a\\h\\a\\m\\a\\d\\a\\h\\a\\g\\a\\A\\a\\b\\l\\a\\C\\a\\b\\r\\a\\c\\a\\m\\a\\b\\Z\\a\\e\\a\\h\\a\\m\\a\\d\\a\\h\\a\\g\\a\\p\\a\\b\\r\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\m\\a\\b\\j\\a\\h\\a\\g\\a\\c\\a\\H\\a\\b\\d\\a\\e\\a\\g\\a\\A\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\h\\a\\m\\a\\D\\a\\h\\a\\g\\a\\c\\a\\m\\a\\R\\a\\e\\a\\D\\a\\e\\a\\k\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\b\\r\\a\\c\\a\\m\\a\\I\\a\\e\\a\\h\\a\\c\\a\\m\\a\\d\\a\\h\\a\\g\\a\\b\\y\\a\\b\\y\\a\\b\\H\\a\\v\\a\\e\\a\\k\\a\\c\\a\\m\\a\\b\\i\\a\\g\\a\\c\\a\\m\\a\\I\\a\\e\\a\\h\\a\\c\\a\\b\\r\\a\\n\\a\\i\\a\\c\\a\\b\\r\\a\\i\\a\\16\\a\\b\\u\\a\\n\\a\\i\\a\\c\\a\\b\\r\\a\\i\\a\\m\\a\\b\\j\\a\\h\\a\\g\\a\\g\\a\\C\\a\\b\\r\\a\\c\\a\\m\\a\\b\\g\\a\\e\\a\\h\\a\\m\\a\\d\\a\\h\\a\\g\\a\\A\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\m\\a\\b\\e\\a\\i\\a\\c\\a\\b\\e\\a\\q\\a\\m\\a\\s\\a\\n\\a\\c\\a\\m\\a\\b\\k\\a\\i\\a\\c\\a\\b\\e\\a\\q\\a\\m\\a\\s\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\c\\a\\m\\a\\b\\n\\a\\q\\a\\m\\a\\19\\a\\i\\a\\c\\a\\d\\a\\b\\h\\a\\i\\a\\s\\a\\f\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\b\\v\\a\\f\\a\\n\\a\\D\\a\\e\\a\\s\\a\\n\\a\\P\\a\\g\\a\\C\\a\\d\\a\\P\\a\\i\\a\\P\\a\\c\\a\\b\\c\\a\\e\\a\\f\\a\\o\\a\\b\\t\\a\\c\\a\\b\\q\\a\\f\\a\\n\\a\\f\\a\\o\\a\\d\\a\\z\\a\\c\\a\\b\\q\\a\\f\\a\\g\\a\\A\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\b\\v\\a\\f\\a\\n\\a\\D\\a\\e\\a\\s\\a\\n\\a\\P\\a\\g\\a\\C\\a\\d\\a\\P\\a\\i\\a\\P\\a\\c\\a\\b\\c\\a\\e\\a\\f\\a\\d\\a\\J\\a\\q\\a\\B\\a\\f\\a\\n\\a\\f\\a\\d\\a\\15\\a\\f\\a\\g\\a\\A\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\m\\a\\b\\e\\a\\i\\a\\c\\a\\b\\e\\a\\q\\a\\m\\a\\s\\a\\n\\a\\c\\a\\m\\a\\b\\k\\a\\i\\a\\c\\a\\b\\e\\a\\q\\a\\m\\a\\s\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\c\\a\\m\\a\\b\\n\\a\\q\\a\\m\\a\\19\\a\\i\\a\\c\\a\\d\\a\\b\\h\\a\\i\\a\\s\\a\\f\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\b\\v\\a\\f\\a\\n\\a\\D\\a\\e\\a\\s\\a\\n\\a\\P\\a\\g\\a\\C\\a\\d\\a\\P\\a\\i\\a\\P\\a\\c\\a\\b\\c\\a\\e\\a\\f\\a\\d\\a\\b\\n\\a\\12\\a\\o\\a\\o\\a\\H\\a\\c\\a\\H\\a\\b\\c\\a\\c\\a\\H\\a\\b\\l\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\q\\a\\H\\a\\b\\t\\a\\o\\a\\16\\a\\H\\a\\o\\a\\16\\a\\16\\a\\o\\a\\16\\a\\y\\a\\o\\a\\d\\a\\15\\a\\q\\a\\G\\a\\o\\a\\16\\a\\B\\a\\c\\a\\m\\a\\10\\a\\f\\a\\n\\a\\f\\a\\f\\a\\r\\a\\d\\a\\1a\\a\\r\\a\\f\\a\\f\\a\\g\\a\\A\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\h\\a\\c\\a\\m\\a\\b\\p\\a\\i\\a\\b\\11\\a\\i\\a\\b\\W\\a\\i\\a\\b\\f\\a\\h\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\b\\d\\a\\h\\a\\n\\a\\D\\a\\e\\a\\w\\a\\n\\a\\b\\d\\a\\g\\a\\C\\a\\d\\a\\P\\a\\i\\a\\b\\d\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\o\\a\\b\\t\\a\\c\\a\\b\\q\\a\\h\\a\\n\\a\\h\\a\\o\\a\\d\\a\\z\\a\\c\\a\\b\\q\\a\\h\\a\\g\\a\\A\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\b\\d\\a\\h\\a\\n\\a\\D\\a\\e\\a\\w\\a\\n\\a\\b\\d\\a\\g\\a\\C\\a\\d\\a\\P\\a\\i\\a\\b\\d\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\d\\a\\J\\a\\q\\a\\B\\a\\h\\a\\n\\a\\h\\a\\d\\a\\15\\a\\h\\a\\g\\a\\A\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\m\\a\\b\\p\\a\\i\\a\\c\\a\\d\\a\\b\\u\\a\\q\\a\\d\\a\\b\\18\\a\\i\\a\\s\\a\\f\\a\\g\\a\\c\\a\\m\\a\\w\\a\\e\\a\\h\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\b\\f\\a\\q\\a\\d\\a\\b\\q\\a\\f\\a\\o\\a\\t\\a\\h\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\H\\a\\b\\h\\a\\q\\a\\H\\a\\10\\a\\i\\a\\c\\a\\b\\18\\a\\i\\a\\d\\a\\b\\l\\a\\f\\a\\g\\a\\c\\a\\m\\a\\Q\\a\\e\\a\\f\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\h\\a\\b\\p\\a\\q\\a\\m\\a\\Q\\a\\h\\a\\o\\a\\t\\a\\f\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\H\\a\\b\\b\\a\\q\\a\\m\\a\\b\\t\\a\\f\\a\\g\\a\\c\\a\\m\\a\\R\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\m\\a\\b\\1b\\a\\c\\a\\H\\a\\d\\a\\c\\a\\b\\c\\a\\e\\a\\o\\a\\b\\O\\a\\b\\E\\a\\o\\a\\o\\a\\n\\a\\f\\a\\f\\a\\g\\a\\j\\a\\j\\a\\10\\a\\c\\a\\H\\a\\d\\a\\c\\a\\b\\c\\a\\e\\a\\o\\a\\b\\O\\a\\b\\E\\a\\o\\a\\o\\a\\n\\a\\f\\a\\f\\a\\g\\a\\b\\y\\a\\b\\y\\a\\m\\a\\b\\1b\\a\\c\\a\\H\\a\\H\\a\\j\\a\\j\\a\\10\\a\\c\\a\\H\\a\\H\\a\\g\\a\\C\\a\\y\\a\\i\\a\\s\\a\\j\\a\\v\\a\\e\\a\\10\\a\\c\\a\\H\\a\\y\\a\\g\\a\\p\\a\\s\\a\\j\\a\\s\\a\\c\\a\\b\\j\\a\\b\\C\\a\\s\\a\\12\\a\\v\\a\\e\\a\\f\\a\\L\\a\\d\\a\\b\\e\\a\\j\\a\\f\\a\\r\\a\\10\\a\\c\\a\\H\\a\\y\\a\\c\\a\\H\\a\\b\\X\\a\\e\\a\\d\\a\\g\\a\\r\\a\\f\\a\\K\\a\\f\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\s\\a\\c\\a\\b\\j\\a\\g\\a\\C\\a\\v\\a\\e\\a\\f\\a\\b\\k\\a\\n\\a\\m\\a\\D\\a\\f\\a\\g\\a\\c\\a\\H\\a\\b\\f\\a\\e\\a\\C\\a\\H\\a\\b\\i\\a\\12\\a\\s\\a\\c\\a\\H\\a\\b\\j\\a\\e\\a\\g\\a\\c\\a\\m\\a\\b\\t\\a\\A\\a\\n\\a\\H\\a\\b\\e\\a\\g\\a\\p\\a\\d\\a\\P\\a\\i\\a\\H\\a\\b\\k\\a\\A\\a\\A\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\14\\a\\q\\a\\d\\a\\b\\t\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\s\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\p\\a\\y\\a\\i\\a\\P\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\c\\a\\d\\a\\b\\u\\a\\q\\a\\d\\a\\14\\a\\f\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\13\\a\\j\\a\\j\\a\\j\\a\\P\\a\\c\\a\\b\\j\\a\\g\\a\\s\\a\\c\\a\\d\\a\\b\\o\\a\\e\\a\\g\\a\\p\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\c\\a\\b\\18\\a\\f\\a\\g\\a\\c\\a\\m\\a\\b\\g\\a\\e\\a\\f\\a\\H\\a\\b\\17\\a\\f\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\14\\a\\q\\a\\d\\a\\b\\t\\a\\i\\a\\c\\a\\d\\a\\b\\u\\a\\q\\a\\d\\a\\14\\a\\c\\a\\H\\a\\b\\p\\a\\f\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\c\\a\\d\\a\\b\\u\\a\\q\\a\\b\\w\\a\\f\\a\\g\\a\\c\\a\\b\\w\\a\\e\\a\\f\\a\\H\\a\\b\\o\\a\\f\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\14\\a\\q\\a\\d\\a\\b\\t\\a\\i\\a\\c\\a\\d\\a\\b\\u\\a\\q\\a\\d\\a\\14\\a\\c\\a\\H\\a\\b\\q\\a\\n\\a\\c\\a\\d\\a\\14\\a\\q\\a\\d\\a\\b\\t\\a\\i\\a\\c\\a\\d\\a\\b\\u\\a\\q\\a\\d\\a\\14\\a\\c\\a\\d\\a\\b\\d\\a\\f\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\c\\a\\d\\a\\b\\u\\a\\q\\a\\b\\w\\a\\f\\a\\g\\a\\c\\a\\b\\w\\a\\e\\a\\f\\a\\16\\a\\d\\a\\f\\a\\g\\a\\p\\a\\y\\a\\i\\a\\B\\a\\j\\a\\f\\a\\m\\a\\N\\a\\j\\a\\f\\a\\p\\a\\y\\a\\i\\a\\N\\a\\j\\a\\f\\a\\p\\a\\f\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\14\\a\\q\\a\\d\\a\\b\\t\\a\\i\\a\\b\\K\\a\\f\\a\\g\\a\\c\\a\\m\\a\\1a\\a\\e\\a\\B\\a\\n\\a\\h\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\b\\u\\a\\q\\a\\m\\a\\N\\a\\f\\a\\t\\a\\h\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\14\\a\\q\\a\\d\\a\\b\\t\\a\\i\\a\\b\\K\\a\\f\\a\\g\\a\\c\\a\\m\\a\\1a\\a\\e\\a\\N\\a\\n\\a\\f\\a\\u\\a\\o\\a\\19\\a\\t\\a\\f\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\b\\u\\a\\q\\a\\d\\a\\14\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\s\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\c\\a\\m\\a\\b\\U\\a\\q\\a\\m\\a\\N\\a\\f\\a\\g\\a\\p\\a\\y\\a\\i\\a\\P\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\c\\a\\d\\a\\b\\u\\a\\q\\a\\m\\a\\N\\a\\f\\a\\g\\a\\p\\a\\v\\a\\e\\a\\s\\a\\g\\a\\c\\a\\16\\a\\b\\1b\\a\\e\\a\\v\\a\\e\\a\\P\\a\\g\\a\\g\\a\\p\\a\\v\\a\\e\\a\\s\\a\\g\\a\\c\\a\\d\\a\\b\\o\\a\\e\\a\\g\\a\\A\\a\\g\\a\\A\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\d\\a\\b\\f\\a\\g\\a\\c\\a\\d\\a\\N\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\J\\a\\j\\a\\v\\a\\e\\a\\f\\a\\b\\x\\a\\m\\a\\y\\a\\i\\a\\b\\x\\a\\m\\a\\b\\h\\a\\i\\a\\c\\a\\b\\18\\a\\i\\a\\d\\a\\b\\l\\a\\f\\a\\g\\a\\c\\a\\b\\w\\a\\e\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\x\\a\\q\\a\\d\\a\\b\\w\\a\\i\\a\\c\\a\\d\\a\\b\\u\\a\\q\\a\\d\\a\\i\\a\\s\\a\\f\\a\\g\\a\\c\\a\\b\\w\\a\\e\\a\\J\\a\\g\\a\\p\\a\\y\\a\\i\\a\\O\\a\\j\\a\\v\\a\\e\\a\\f\\a\\b\\x\\a\\m\\a\\y\\a\\i\\a\\b\\x\\a\\m\\a\\S\\a\\i\\a\\c\\a\\b\\18\\a\\i\\a\\d\\a\\b\\l\\a\\f\\a\\g\\a\\c\\a\\b\\w\\a\\e\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\x\\a\\q\\a\\d\\a\\b\\w\\a\\i\\a\\c\\a\\d\\a\\b\\u\\a\\q\\a\\m\\a\\i\\a\\s\\a\\f\\a\\g\\a\\c\\a\\b\\w\\a\\e\\a\\O\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\b\\x\\a\\m\\a\\b\\h\\a\\i\\a\\c\\a\\b\\18\\a\\i\\a\\d\\a\\b\\l\\a\\n\\a\\b\\x\\a\\m\\a\\S\\a\\i\\a\\c\\a\\b\\18\\a\\i\\a\\d\\a\\b\\l\\a\\n\\a\\b\\x\\a\\m\\a\\b\\h\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\p\\a\\n\\a\\b\\x\\a\\m\\a\\S\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\p\\a\\f\\a\\g\\a\\c\\a\\d\\a\\b\\o\\a\\e\\a\\g\\a\\p\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\c\\a\\d\\a\\x\\a\\q\\a\\d\\a\\b\\w\\a\\i\\a\\b\\W\\a\\f\\a\\g\\a\\c\\a\\m\\a\\b\\Z\\a\\e\\a\\f\\a\\m\\a\\b\\U\\a\\q\\a\\d\\a\\b\\w\\a\\f\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\m\\a\\y\\a\\f\\a\\g\\a\\c\\a\\16\\a\\w\\a\\e\\a\\C\\a\\16\\a\\J\\a\\12\\a\\f\\a\\m\\a\\R\\a\\f\\a\\n\\a\\16\\a\\I\\a\\12\\a\\f\\a\\1a\\a\\f\\a\\n\\a\\H\\a\\V\\a\\12\\a\\H\\a\\z\\a\\A\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\13\\a\\j\\a\\j\\a\\j\\a\\v\\a\\e\\a\\f\\a\\c\\a\\m\\a\\y\\a\\i\\a\\c\\a\\b\\18\\a\\f\\a\\g\\a\\c\\a\\b\\j\\a\\g\\a\\v\\a\\e\\a\\f\\a\\c\\a\\m\\a\\y\\a\\f\\a\\g\\a\\c\\a\\d\\a\\b\\o\\a\\e\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\d\\a\\b\\f\\a\\g\\a\\c\\a\\d\\a\\N\\a\\e\\a\\D\\a\\e\\a\\s\\a\\g\\a\\C\\a\\y\\a\\i\\a\\P\\a\\j\\a\\s\\a\\e\\a\\f\\a\\s\\a\\c\\a\\H\\a\\D\\a\\q\\a\\b\\i\\a\\f\\a\\g\\a\\p\\a\\y\\a\\i\\a\\B\\a\\j\\a\\s\\a\\e\\a\\f\\a\\s\\a\\c\\a\\H\\a\\I\\a\\q\\a\\b\\i\\a\\f\\a\\g\\a\\p\\a\\s\\a\\c\\a\\d\\a\\G\\a\\e\\a\\P\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\1a\\a\\f\\a\\g\\a\\n\\a\\D\\a\\e\\a\\B\\a\\g\\a\\C\\a\\P\\a\\c\\a\\b\\k\\a\\e\\a\\f\\a\\u\\a\\m\\a\\B\\a\\t\\a\\f\\a\\r\\a\\H\\a\\G\\a\\r\\a\\f\\a\\u\\a\\o\\a\\m\\a\\B\\a\\t\\a\\u\\a\\19\\a\\t\\a\\f\\a\\r\\a\\s\\a\\e\\a\\B\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\c\\a\\b\\e\\a\\i\\a\\H\\a\\b\\u\\a\\c\\a\\b\\e\\a\\q\\a\\b\\p\\a\\f\\a\\g\\a\\c\\a\\b\\w\\a\\e\\a\\g\\a\\r\\a\\f\\a\\u\\a\\o\\a\\19\\a\\t\\a\\f\\a\\g\\a\\A\\a\\n\\a\\f\\a\\b\\k\\a\\f\\a\\g\\a\\p\\a\\s\\a\\c\\a\\d\\a\\G\\a\\e\\a\\B\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\1a\\a\\f\\a\\g\\a\\n\\a\\D\\a\\e\\a\\P\\a\\g\\a\\C\\a\\B\\a\\c\\a\\b\\k\\a\\e\\a\\f\\a\\u\\a\\m\\a\\B\\a\\t\\a\\f\\a\\r\\a\\H\\a\\O\\a\\r\\a\\f\\a\\u\\a\\o\\a\\m\\a\\B\\a\\t\\a\\u\\a\\19\\a\\t\\a\\f\\a\\r\\a\\s\\a\\e\\a\\P\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\c\\a\\b\\e\\a\\i\\a\\H\\a\\b\\u\\a\\c\\a\\b\\e\\a\\q\\a\\b\\p\\a\\f\\a\\g\\a\\c\\a\\b\\w\\a\\e\\a\\g\\a\\r\\a\\f\\a\\u\\a\\o\\a\\19\\a\\t\\a\\f\\a\\g\\a\\A\\a\\n\\a\\f\\a\\b\\k\\a\\f\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\d\\a\\b\\f\\a\\g\\a\\c\\a\\d\\a\\N\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\x\\a\\j\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\b\\u\\a\\i\\a\\b\\x\\a\\b\\e\\a\\q\\a\\H\\a\\b\\v\\a\\q\\a\\m\\a\\b\\u\\a\\f\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\b\\u\\a\\i\\a\\c\\a\\b\\e\\a\\i\\a\\b\\K\\a\\f\\a\\g\\a\\c\\a\\m\\a\\1a\\a\\e\\a\\h\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\m\\a\\O\\a\\q\\a\\b\\e\\a\\q\\a\\m\\a\\b\\u\\a\\f\\a\\o\\a\\t\\a\\h\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\m\\a\\O\\a\\q\\a\\b\\e\\a\\q\\a\\m\\a\\b\\u\\a\\f\\a\\g\\a\\c\\a\\m\\a\\b\\o\\a\\e\\a\\x\\a\\g\\a\\p\\a\\y\\a\\i\\a\\J\\a\\j\\a\\v\\a\\e\\a\\f\\a\\c\\a\\b\\e\\a\\q\\a\\m\\a\\D\\a\\i\\a\\b\\x\\a\\b\\e\\a\\q\\a\\H\\a\\b\\v\\a\\q\\a\\m\\a\\b\\u\\a\\f\\a\\g\\a\\c\\a\\H\\a\\14\\a\\e\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\b\\e\\a\\q\\a\\m\\a\\D\\a\\i\\a\\c\\a\\m\\a\\O\\a\\q\\a\\b\\e\\a\\q\\a\\m\\a\\b\\u\\a\\f\\a\\g\\a\\c\\a\\H\\a\\14\\a\\e\\a\\J\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\d\\a\\b\\f\\a\\g\\a\\c\\a\\d\\a\\N\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\h\\a\\s\\a\\h\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\s\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\1a\\a\\h\\a\\g\\a\\n\\a\\k\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\s\\a\\b\\H\\a\\j\\a\\j\\a\\H\\a\\19\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\s\\a\\c\\a\\d\\a\\d\\a\\e\\a\\h\\a\\o\\a\\b\\r\\a\\o\\a\\d\\a\\B\\a\\h\\a\\g\\a\\b\\H\\a\\j\\a\\q\\a\\d\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\s\\a\\c\\a\\d\\a\\d\\a\\e\\a\\h\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\h\\a\\g\\a\\b\\H\\a\\j\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\x\\a\\j\\a\\H\\a\\b\\18\\a\\e\\a\\h\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\h\\a\\n\\a\\s\\a\\g\\a\\n\\a\\J\\a\\j\\a\\s\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\j\\a\\h\\a\\r\\a\\x\\a\\n\\a\\h\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\j\\a\\h\\a\\r\\a\\m\\a\\b\\11\\a\\g\\a\\p\\a\\k\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\1a\\a\\h\\a\\n\\a\\J\\a\\g\\a\\A\\a\\b\\l\\a\\C\\a\\Y\\a\\e\\a\\s\\a\\c\\a\\d\\a\\d\\a\\e\\a\\h\\a\\b\\C\\a\\h\\a\\g\\a\\j\\a\\j\\a\\q\\a\\d\\a\\g\\a\\C\\a\\k\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\1a\\a\\h\\a\\n\\a\\s\\a\\r\\a\\f\\a\\b\\C\\a\\b\\y\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\j\\a\\f\\a\\r\\a\\m\\a\\b\\11\\a\\g\\a\\A\\a\\b\\l\\a\\C\\a\\k\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\1a\\a\\h\\a\\n\\a\\s\\a\\r\\a\\f\\a\\b\\y\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\j\\a\\f\\a\\r\\a\\m\\a\\b\\11\\a\\g\\a\\A\\a\\A\\a\\A\\a\\A\\a\\A\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\m\\a\\x\\a\\i\\a\\c\\a\\d\\a\\Q\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\17\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\P\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\19\\a\\f\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\k\\a\\q\\a\\d\\a\\b\\T\\a\\f\\a\\g\\a\\n\\a\\b\\1b\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\19\\a\\f\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\k\\a\\q\\a\\d\\a\\B\\a\\f\\a\\g\\a\\n\\a\\m\\a\\13\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\19\\a\\f\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\k\\a\\q\\a\\d\\a\\I\\a\\f\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\m\\a\\13\\a\\c\\a\\m\\a\\m\\a\\e\\a\\h\\a\\d\\a\\19\\a\\h\\a\\g\\a\\g\\a\\C\\a\\v\\a\\c\\a\\d\\a\\b\\11\\a\\e\\a\\C\\a\\b\\o\\a\\12\\a\\f\\a\\o\\a\\d\\a\\b\\W\\a\\o\\a\\d\\a\\O\\a\\o\\a\\b\\t\\a\\b\\C\\a\\d\\a\\b\\b\\a\\j\\a\\d\\a\\b\\U\\a\\q\\a\\d\\a\\b\\m\\a\\q\\a\\d\\a\\10\\a\\b\\y\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\j\\a\\f\\a\\r\\a\\P\\a\\n\\a\\d\\a\\I\\a\\12\\a\\h\\a\\d\\a\\G\\a\\h\\a\\n\\a\\d\\a\\b\\g\\a\\12\\a\\f\\a\\d\\a\\b\\c\\a\\f\\a\\n\\a\\d\\a\\b\\Z\\a\\12\\a\\D\\a\\e\\a\\k\\a\\g\\a\\C\\a\\y\\a\\i\\a\\O\\a\\j\\a\\f\\a\\f\\a\\p\\a\\y\\a\\i\\a\\Q\\a\\j\\a\\h\\a\\u\\a\\b\\11\\a\\t\\a\\h\\a\\p\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\w\\a\\j\\a\\13\\a\\p\\a\\w\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\c\\a\\b\\j\\a\\p\\a\\w\\a\\r\\a\\r\\a\\g\\a\\C\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\15\\a\\j\\a\\13\\a\\p\\a\\15\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\c\\a\\b\\j\\a\\p\\a\\15\\a\\r\\a\\r\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\d\\a\\b\\X\\a\\j\\a\\j\\a\\f\\a\\d\\a\\S\\a\\f\\a\\g\\a\\C\\a\\O\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\1a\\a\\p\\a\\d\\a\\E\\a\\A\\a\\A\\a\\y\\a\\i\\a\\14\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\p\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\E\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\k\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\j\\a\\p\\a\\y\\a\\i\\a\\B\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\17\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\v\\a\\B\\a\\j\\a\\v\\a\\e\\a\\h\\a\\u\\a\\b\\U\\a\\t\\a\\h\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\B\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\o\\a\\o\\a\\d\\a\\b\\1b\\a\\c\\a\\d\\a\\b\\d\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\d\\a\\b\\p\\a\\o\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\R\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\17\\a\\v\\a\\d\\a\\b\\18\\a\\c\\a\\b\\o\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\o\\a\\b\\t\\a\\c\\a\\b\\q\\a\\h\\a\\n\\a\\h\\a\\o\\a\\d\\a\\z\\a\\c\\a\\b\\q\\a\\h\\a\\g\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\R\\a\\A\\a\\b\\l\\a\\i\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\u\\a\\b\\f\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\m\\a\\j\\a\\v\\a\\B\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\b\\f\\a\\12\\a\\d\\a\\b\\i\\a\\h\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\b\\d\\a\\h\\a\\g\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\d\\a\\J\\a\\q\\a\\B\\a\\h\\a\\n\\a\\h\\a\\d\\a\\15\\a\\h\\a\\g\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\b\\m\\a\\A\\a\\b\\l\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\d\\a\\1a\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\b\\W\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\o\\a\\b\\r\\a\\o\\a\\d\\a\\B\\a\\o\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\f\\a\\i\\a\\S\\a\\j\\a\\f\\a\\b\\e\\a\\q\\a\\m\\a\\b\\s\\a\\i\\a\\m\\a\\H\\a\\i\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\d\\a\\H\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\19\\a\\q\\a\\b\\p\\a\\f\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\14\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\o\\a\\d\\a\\H\\a\\t\\a\\u\\a\\o\\a\\b\\W\\a\\t\\a\\h\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\o\\a\\b\\11\\a\\t\\a\\h\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\m\\a\\x\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\17\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\Q\\a\\g\\a\\p\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\m\\a\\b\\f\\a\\e\\a\\h\\a\\d\\a\\b\\l\\a\\h\\a\\g\\a\\c\\a\\m\\a\\w\\a\\e\\a\\h\\a\\u\\a\\w\\a\\i\\a\\S\\a\\j\\a\\f\\a\\m\\a\\b\\m\\a\\i\\a\\m\\a\\b\\m\\a\\q\\a\\H\\a\\x\\a\\f\\a\\t\\a\\u\\a\\o\\a\\w\\a\\t\\a\\h\\a\\g\\a\\p\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\b\\11\\a\\h\\a\\g\\a\\c\\a\\H\\a\\m\\a\\e\\a\\g\\a\\A\\a\\g\\a\\A\\a\\A\\a\\g\\a\\A\\a\\b\\l\\a\\i\\a\\Y\\a\\e\\a\\m\\a\\13\\a\\c\\a\\m\\a\\m\\a\\e\\a\\h\\a\\d\\a\\B\\a\\h\\a\\g\\a\\g\\a\\C\\a\\v\\a\\c\\a\\d\\a\\b\\11\\a\\e\\a\\C\\a\\b\\o\\a\\12\\a\\f\\a\\o\\a\\d\\a\\b\\W\\a\\o\\a\\d\\a\\O\\a\\o\\a\\b\\t\\a\\o\\a\\q\\a\\o\\a\\f\\a\\r\\a\\b\\1b\\a\\r\\a\\f\\a\\b\\C\\a\\d\\a\\b\\b\\a\\j\\a\\d\\a\\b\\U\\a\\q\\a\\d\\a\\b\\m\\a\\q\\a\\d\\a\\10\\a\\b\\y\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\j\\a\\f\\a\\r\\a\\P\\a\\n\\a\\d\\a\\I\\a\\12\\a\\h\\a\\d\\a\\G\\a\\h\\a\\n\\a\\d\\a\\b\\g\\a\\12\\a\\f\\a\\d\\a\\b\\c\\a\\f\\a\\n\\a\\d\\a\\b\\Z\\a\\12\\a\\D\\a\\e\\a\\k\\a\\g\\a\\C\\a\\y\\a\\i\\a\\O\\a\\j\\a\\f\\a\\f\\a\\p\\a\\y\\a\\i\\a\\Q\\a\\j\\a\\h\\a\\u\\a\\b\\11\\a\\t\\a\\h\\a\\p\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\w\\a\\j\\a\\13\\a\\p\\a\\w\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\c\\a\\b\\j\\a\\p\\a\\w\\a\\r\\a\\r\\a\\g\\a\\C\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\15\\a\\j\\a\\13\\a\\p\\a\\15\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\c\\a\\b\\j\\a\\p\\a\\15\\a\\r\\a\\r\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\d\\a\\b\\X\\a\\j\\a\\j\\a\\f\\a\\d\\a\\S\\a\\f\\a\\g\\a\\C\\a\\O\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\1a\\a\\p\\a\\d\\a\\E\\a\\A\\a\\A\\a\\y\\a\\i\\a\\14\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\p\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\E\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\k\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\j\\a\\p\\a\\y\\a\\i\\a\\B\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\17\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\v\\a\\B\\a\\j\\a\\v\\a\\e\\a\\h\\a\\u\\a\\b\\U\\a\\t\\a\\h\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\B\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\o\\a\\o\\a\\d\\a\\b\\1b\\a\\c\\a\\d\\a\\b\\d\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\d\\a\\b\\p\\a\\o\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\R\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\17\\a\\v\\a\\d\\a\\b\\18\\a\\c\\a\\b\\o\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\o\\a\\b\\t\\a\\c\\a\\b\\q\\a\\h\\a\\n\\a\\h\\a\\o\\a\\d\\a\\z\\a\\c\\a\\b\\q\\a\\h\\a\\g\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\R\\a\\A\\a\\b\\l\\a\\i\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\u\\a\\b\\f\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\m\\a\\j\\a\\v\\a\\B\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\b\\f\\a\\12\\a\\d\\a\\b\\i\\a\\h\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\b\\d\\a\\h\\a\\g\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\d\\a\\J\\a\\q\\a\\B\\a\\h\\a\\n\\a\\h\\a\\d\\a\\15\\a\\h\\a\\g\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\b\\m\\a\\A\\a\\b\\l\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\d\\a\\1a\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\b\\W\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\o\\a\\b\\r\\a\\o\\a\\d\\a\\B\\a\\o\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\f\\a\\i\\a\\S\\a\\j\\a\\f\\a\\b\\e\\a\\q\\a\\m\\a\\b\\s\\a\\i\\a\\m\\a\\H\\a\\i\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\d\\a\\H\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\19\\a\\q\\a\\b\\p\\a\\f\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\14\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\o\\a\\d\\a\\H\\a\\t\\a\\u\\a\\o\\a\\b\\W\\a\\t\\a\\h\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\o\\a\\b\\11\\a\\t\\a\\h\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\m\\a\\x\\a\\i\\a\\c\\a\\d\\a\\Q\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\17\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\Q\\a\\g\\a\\p\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\m\\a\\b\\f\\a\\e\\a\\h\\a\\d\\a\\b\\l\\a\\h\\a\\g\\a\\c\\a\\m\\a\\w\\a\\e\\a\\h\\a\\u\\a\\w\\a\\i\\a\\S\\a\\j\\a\\f\\a\\m\\a\\b\\m\\a\\i\\a\\m\\a\\b\\m\\a\\q\\a\\d\\a\\b\\h\\a\\q\\a\\H\\a\\b\\1b\\a\\f\\a\\t\\a\\u\\a\\o\\a\\w\\a\\t\\a\\h\\a\\g\\a\\p\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\b\\11\\a\\h\\a\\g\\a\\c\\a\\H\\a\\m\\a\\e\\a\\g\\a\\A\\a\\g\\a\\A\\a\\A\\a\\g\\a\\A\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\h\\a\\c\\a\\d\\a\\s\\a\\i\\a\\c\\a\\d\\a\\Q\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\17\\a\\h\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\1b\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\19\\a\\f\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\k\\a\\q\\a\\d\\a\\B\\a\\f\\a\\g\\a\\n\\a\\m\\a\\13\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\f\\a\\19\\a\\f\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\k\\a\\q\\a\\d\\a\\I\\a\\f\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\m\\a\\13\\a\\c\\a\\m\\a\\m\\a\\e\\a\\h\\a\\d\\a\\19\\a\\h\\a\\g\\a\\g\\a\\C\\a\\v\\a\\c\\a\\d\\a\\b\\11\\a\\e\\a\\C\\a\\b\\o\\a\\12\\a\\f\\a\\o\\a\\d\\a\\b\\W\\a\\o\\a\\d\\a\\O\\a\\o\\a\\b\\t\\a\\b\\C\\a\\d\\a\\b\\b\\a\\j\\a\\d\\a\\b\\U\\a\\q\\a\\d\\a\\b\\m\\a\\q\\a\\d\\a\\10\\a\\b\\y\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\j\\a\\16\\a\\f\\a\\n\\a\\d\\a\\I\\a\\12\\a\\h\\a\\d\\a\\G\\a\\h\\a\\n\\a\\d\\a\\b\\g\\a\\12\\a\\f\\a\\d\\a\\b\\c\\a\\f\\a\\n\\a\\d\\a\\b\\Z\\a\\12\\a\\D\\a\\e\\a\\k\\a\\g\\a\\C\\a\\y\\a\\i\\a\\O\\a\\j\\a\\f\\a\\f\\a\\p\\a\\y\\a\\i\\a\\Q\\a\\j\\a\\h\\a\\u\\a\\b\\11\\a\\t\\a\\h\\a\\p\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\w\\a\\j\\a\\13\\a\\p\\a\\w\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\c\\a\\b\\j\\a\\p\\a\\w\\a\\r\\a\\r\\a\\g\\a\\C\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\15\\a\\j\\a\\13\\a\\p\\a\\15\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\c\\a\\b\\j\\a\\p\\a\\15\\a\\r\\a\\r\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\d\\a\\b\\X\\a\\j\\a\\j\\a\\f\\a\\d\\a\\S\\a\\f\\a\\g\\a\\C\\a\\O\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\1a\\a\\p\\a\\d\\a\\E\\a\\A\\a\\A\\a\\y\\a\\i\\a\\14\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\p\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\E\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\k\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\j\\a\\p\\a\\y\\a\\i\\a\\b\\h\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\w\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\e\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\N\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\m\\a\\E\\a\\c\\a\\v\\a\\x\\a\\n\\a\\x\\a\\j\\a\\N\\a\\c\\a\\d\\a\\M\\a\\e\\a\\13\\a\\n\\a\\16\\a\\g\\a\\n\\a\\b\\g\\a\\j\\a\\N\\a\\c\\a\\d\\a\\M\\a\\e\\a\\b\\s\\a\\n\\a\\b\\u\\a\\g\\a\\n\\a\\b\\T\\a\\j\\a\\N\\a\\c\\a\\d\\a\\M\\a\\e\\a\\b\\v\\a\\n\\a\\d\\a\\13\\a\\g\\a\\n\\a\\G\\a\\j\\a\\m\\a\\z\\a\\L\\a\\m\\a\\15\\a\\e\\a\\b\\g\\a\\n\\a\\d\\a\\13\\a\\g\\a\\K\\a\\r\\a\\h\\a\\i\\a\\h\\a\\r\\a\\b\\T\\a\\r\\a\\h\\a\\n\\a\\i\\a\\h\\a\\r\\a\\x\\a\\p\\a\\y\\a\\i\\a\\B\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\17\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\v\\a\\B\\a\\j\\a\\v\\a\\e\\a\\h\\a\\u\\a\\b\\U\\a\\t\\a\\h\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\B\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\o\\a\\o\\a\\d\\a\\b\\1b\\a\\c\\a\\d\\a\\b\\d\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\d\\a\\b\\p\\a\\o\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\R\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\17\\a\\v\\a\\d\\a\\b\\18\\a\\c\\a\\b\\o\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\R\\a\\A\\a\\b\\l\\a\\i\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\u\\a\\b\\f\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\m\\a\\j\\a\\v\\a\\B\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\b\\f\\a\\12\\a\\d\\a\\b\\i\\a\\h\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\b\\d\\a\\h\\a\\g\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\b\\m\\a\\A\\a\\b\\l\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\d\\a\\1a\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\b\\W\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\s\\a\\q\\a\\m\\a\\b\\l\\a\\f\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\o\\a\\b\\r\\a\\o\\a\\d\\a\\B\\a\\o\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\f\\a\\i\\a\\S\\a\\j\\a\\f\\a\\b\\e\\a\\q\\a\\m\\a\\b\\s\\a\\i\\a\\m\\a\\H\\a\\i\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\s\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\Y\\a\\q\\a\\d\\a\\b\\h\\a\\f\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\i\\a\\d\\a\\b\\v\\a\\j\\a\\f\\a\\d\\a\\V\\a\\12\\a\\b\\o\\a\\e\\a\\h\\a\\r\\a\\V\\a\\r\\a\\h\\a\\g\\a\\i\\a\\d\\a\\b\\T\\a\\q\\a\\m\\a\\M\\a\\i\\a\\d\\a\\R\\a\\i\\a\\d\\a\\R\\a\\p\\a\\d\\a\\V\\a\\q\\a\\m\\a\\16\\a\\12\\a\\i\\a\\m\\a\\b\\v\\a\\f\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\s\\a\\q\\a\\d\\a\\b\\q\\a\\f\\a\\o\\a\\t\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\b\\e\\a\\q\\a\\m\\a\\14\\a\\f\\a\\t\\a\\u\\a\\d\\a\\H\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\Y\\a\\q\\a\\b\\p\\a\\f\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\14\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\o\\a\\d\\a\\H\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\s\\a\\q\\a\\m\\a\\b\\w\\a\\f\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\s\\a\\q\\a\\d\\a\\w\\a\\i\\a\\H\\a\\13\\a\\f\\a\\t\\a\\h\\a\\r\\a\\b\\h\\a\\r\\a\\h\\a\\u\\a\\o\\a\\19\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\s\\a\\q\\a\\m\\a\\b\\T\\a\\f\\a\\t\\a\\h\\a\\r\\a\\G\\a\\r\\a\\h\\a\\u\\a\\o\\a\\19\\a\\t\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\o\\a\\b\\W\\a\\t\\a\\h\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\o\\a\\b\\11\\a\\t\\a\\h\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\s\\a\\i\\a\\c\\a\\d\\a\\Q\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\17\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\Q\\a\\g\\a\\p\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\c\\a\\d\\a\\Y\\a\\q\\a\\d\\a\\b\\h\\a\\h\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\d\\a\\b\\v\\a\\h\\a\\n\\a\\D\\a\\e\\a\\w\\a\\n\\a\\b\\d\\a\\g\\a\\C\\a\\d\\a\\P\\a\\i\\a\\b\\d\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\o\\a\\b\\t\\a\\c\\a\\b\\q\\a\\h\\a\\n\\a\\h\\a\\o\\a\\d\\a\\z\\a\\c\\a\\b\\q\\a\\h\\a\\g\\a\\A\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\d\\a\\b\\v\\a\\h\\a\\n\\a\\D\\a\\e\\a\\w\\a\\n\\a\\b\\d\\a\\g\\a\\C\\a\\d\\a\\P\\a\\i\\a\\b\\d\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\d\\a\\J\\a\\q\\a\\B\\a\\h\\a\\n\\a\\h\\a\\d\\a\\15\\a\\h\\a\\g\\a\\A\\a\\g\\a\\A\\a\\g\\a\\A\\a\\g\\a\\A\\a\\A\\a\\g\\a\\A\\a\\b\\l\\a\\i\\a\\Y\\a\\e\\a\\m\\a\\13\\a\\c\\a\\m\\a\\m\\a\\e\\a\\h\\a\\d\\a\\B\\a\\h\\a\\g\\a\\g\\a\\C\\a\\v\\a\\c\\a\\d\\a\\b\\11\\a\\e\\a\\C\\a\\b\\o\\a\\12\\a\\f\\a\\o\\a\\d\\a\\b\\W\\a\\o\\a\\d\\a\\O\\a\\o\\a\\b\\t\\a\\o\\a\\q\\a\\o\\a\\f\\a\\r\\a\\b\\1b\\a\\r\\a\\f\\a\\b\\C\\a\\d\\a\\b\\b\\a\\j\\a\\d\\a\\b\\U\\a\\q\\a\\d\\a\\b\\m\\a\\q\\a\\d\\a\\10\\a\\b\\y\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\j\\a\\16\\a\\f\\a\\n\\a\\d\\a\\I\\a\\12\\a\\h\\a\\d\\a\\G\\a\\h\\a\\n\\a\\d\\a\\b\\g\\a\\12\\a\\f\\a\\d\\a\\b\\c\\a\\f\\a\\n\\a\\d\\a\\b\\Z\\a\\12\\a\\D\\a\\e\\a\\k\\a\\g\\a\\C\\a\\y\\a\\i\\a\\O\\a\\j\\a\\f\\a\\f\\a\\p\\a\\y\\a\\i\\a\\Q\\a\\j\\a\\h\\a\\u\\a\\b\\11\\a\\t\\a\\h\\a\\p\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\w\\a\\j\\a\\13\\a\\p\\a\\w\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\c\\a\\b\\j\\a\\p\\a\\w\\a\\r\\a\\r\\a\\g\\a\\C\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\15\\a\\j\\a\\13\\a\\p\\a\\15\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\c\\a\\b\\j\\a\\p\\a\\15\\a\\r\\a\\r\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\d\\a\\b\\X\\a\\j\\a\\j\\a\\f\\a\\d\\a\\S\\a\\f\\a\\g\\a\\C\\a\\O\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\1a\\a\\p\\a\\d\\a\\E\\a\\A\\a\\A\\a\\y\\a\\i\\a\\14\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\p\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\E\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\k\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\j\\a\\p\\a\\y\\a\\i\\a\\b\\h\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\w\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\e\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\N\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\m\\a\\E\\a\\c\\a\\v\\a\\x\\a\\n\\a\\x\\a\\j\\a\\N\\a\\c\\a\\d\\a\\M\\a\\e\\a\\13\\a\\n\\a\\16\\a\\g\\a\\n\\a\\b\\g\\a\\j\\a\\N\\a\\c\\a\\d\\a\\M\\a\\e\\a\\b\\s\\a\\n\\a\\b\\u\\a\\g\\a\\n\\a\\b\\T\\a\\j\\a\\N\\a\\c\\a\\d\\a\\M\\a\\e\\a\\b\\v\\a\\n\\a\\d\\a\\13\\a\\g\\a\\n\\a\\G\\a\\j\\a\\m\\a\\z\\a\\L\\a\\m\\a\\15\\a\\e\\a\\b\\g\\a\\n\\a\\d\\a\\13\\a\\g\\a\\K\\a\\r\\a\\h\\a\\i\\a\\h\\a\\r\\a\\b\\T\\a\\r\\a\\h\\a\\n\\a\\i\\a\\h\\a\\r\\a\\x\\a\\p\\a\\y\\a\\i\\a\\B\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\17\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\v\\a\\B\\a\\j\\a\\v\\a\\e\\a\\h\\a\\u\\a\\b\\U\\a\\t\\a\\h\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\B\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\o\\a\\o\\a\\d\\a\\b\\1b\\a\\c\\a\\d\\a\\b\\d\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\d\\a\\b\\p\\a\\o\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\R\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\17\\a\\v\\a\\d\\a\\b\\18\\a\\c\\a\\b\\o\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\R\\a\\A\\a\\b\\l\\a\\i\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\u\\a\\b\\f\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\m\\a\\j\\a\\v\\a\\B\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\b\\f\\a\\12\\a\\d\\a\\b\\i\\a\\h\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\b\\d\\a\\h\\a\\g\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\b\\m\\a\\A\\a\\b\\l\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\d\\a\\1a\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\b\\W\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\s\\a\\q\\a\\m\\a\\b\\l\\a\\f\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\o\\a\\b\\r\\a\\o\\a\\d\\a\\B\\a\\o\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\f\\a\\i\\a\\S\\a\\j\\a\\f\\a\\b\\e\\a\\q\\a\\m\\a\\b\\s\\a\\i\\a\\m\\a\\H\\a\\i\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\s\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\Y\\a\\q\\a\\d\\a\\b\\h\\a\\f\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\i\\a\\d\\a\\b\\v\\a\\j\\a\\f\\a\\d\\a\\V\\a\\12\\a\\b\\o\\a\\e\\a\\h\\a\\r\\a\\V\\a\\r\\a\\h\\a\\g\\a\\i\\a\\d\\a\\b\\T\\a\\q\\a\\m\\a\\M\\a\\i\\a\\d\\a\\R\\a\\i\\a\\d\\a\\R\\a\\p\\a\\d\\a\\V\\a\\q\\a\\m\\a\\16\\a\\12\\a\\i\\a\\m\\a\\b\\v\\a\\f\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\s\\a\\q\\a\\d\\a\\b\\q\\a\\f\\a\\o\\a\\t\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\b\\e\\a\\q\\a\\m\\a\\14\\a\\f\\a\\t\\a\\u\\a\\d\\a\\H\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\Y\\a\\q\\a\\b\\p\\a\\f\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\14\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\o\\a\\d\\a\\H\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\s\\a\\q\\a\\m\\a\\b\\w\\a\\f\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\s\\a\\q\\a\\d\\a\\w\\a\\i\\a\\H\\a\\13\\a\\f\\a\\t\\a\\h\\a\\r\\a\\b\\h\\a\\r\\a\\h\\a\\u\\a\\o\\a\\19\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\s\\a\\q\\a\\m\\a\\b\\T\\a\\f\\a\\t\\a\\h\\a\\r\\a\\G\\a\\r\\a\\h\\a\\u\\a\\o\\a\\19\\a\\t\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\o\\a\\b\\W\\a\\t\\a\\h\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\o\\a\\b\\11\\a\\t\\a\\h\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\s\\a\\i\\a\\c\\a\\d\\a\\Q\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\17\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\Q\\a\\g\\a\\p\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\c\\a\\d\\a\\Y\\a\\q\\a\\d\\a\\b\\h\\a\\h\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\d\\a\\b\\v\\a\\h\\a\\n\\a\\D\\a\\e\\a\\w\\a\\n\\a\\b\\d\\a\\g\\a\\C\\a\\d\\a\\P\\a\\i\\a\\b\\d\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\o\\a\\b\\t\\a\\c\\a\\b\\q\\a\\h\\a\\n\\a\\h\\a\\o\\a\\d\\a\\z\\a\\c\\a\\b\\q\\a\\h\\a\\g\\a\\A\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\d\\a\\b\\v\\a\\h\\a\\n\\a\\D\\a\\e\\a\\w\\a\\n\\a\\b\\d\\a\\g\\a\\C\\a\\d\\a\\P\\a\\i\\a\\b\\d\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\d\\a\\J\\a\\q\\a\\B\\a\\h\\a\\n\\a\\h\\a\\d\\a\\15\\a\\h\\a\\g\\a\\A\\a\\g\\a\\A\\a\\g\\a\\A\\a\\g\\a\\A\\a\\A\\a\\g\\a\\A\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\h\\a\\c\\a\\d\\a\\N\\a\\q\\a\\b\\18\\a\\i\\a\\c\\a\\d\\a\\Q\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\17\\a\\i\\a\\19\\a\\c\\a\\m\\a\\b\\c\\a\\h\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\P\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\k\\a\\q\\a\\d\\a\\b\\T\\a\\f\\a\\g\\a\\p\\a\\v\\a\\c\\a\\d\\a\\b\\11\\a\\e\\a\\C\\a\\b\\o\\a\\12\\a\\f\\a\\o\\a\\d\\a\\b\\W\\a\\o\\a\\d\\a\\b\\r\\a\\o\\a\\b\\t\\a\\b\\C\\a\\d\\a\\b\\b\\a\\j\\a\\d\\a\\b\\U\\a\\q\\a\\d\\a\\b\\m\\a\\q\\a\\d\\a\\10\\a\\b\\y\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\j\\a\\f\\a\\r\\a\\P\\a\\n\\a\\d\\a\\I\\a\\12\\a\\h\\a\\d\\a\\G\\a\\h\\a\\n\\a\\d\\a\\b\\g\\a\\12\\a\\f\\a\\d\\a\\b\\c\\a\\f\\a\\n\\a\\d\\a\\b\\Z\\a\\12\\a\\D\\a\\e\\a\\k\\a\\g\\a\\C\\a\\y\\a\\i\\a\\O\\a\\j\\a\\f\\a\\f\\a\\p\\a\\y\\a\\i\\a\\Q\\a\\j\\a\\h\\a\\u\\a\\b\\11\\a\\i\\a\\S\\a\\j\\a\\f\\a\\m\\a\\b\\d\\a\\q\\a\\b\\18\\a\\f\\a\\t\\a\\h\\a\\p\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\w\\a\\j\\a\\13\\a\\p\\a\\w\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\c\\a\\b\\j\\a\\p\\a\\w\\a\\r\\a\\r\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\w\\a\\j\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\c\\a\\b\\j\\a\\g\\a\\d\\a\\E\\a\\p\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\15\\a\\j\\a\\13\\a\\p\\a\\15\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\c\\a\\b\\j\\a\\p\\a\\15\\a\\r\\a\\r\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\d\\a\\b\\X\\a\\j\\a\\j\\a\\h\\a\\d\\a\\S\\a\\h\\a\\g\\a\\C\\a\\O\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\1a\\a\\p\\a\\d\\a\\E\\a\\A\\a\\A\\a\\Y\\a\\e\\a\\f\\a\\b\\17\\a\\f\\a\\d\\a\\b\\m\\a\\i\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\g\\a\\C\\a\\y\\a\\i\\a\\B\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\17\\a\\c\\a\\v\\a\\x\\a\\A\\a\\b\\l\\a\\i\\a\\Y\\a\\e\\a\\f\\a\\H\\a\\16\\a\\f\\a\\d\\a\\b\\m\\a\\i\\a\\H\\a\\b\\r\\a\\g\\a\\C\\a\\y\\a\\i\\a\\B\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\H\\a\\16\\a\\c\\a\\v\\a\\x\\a\\A\\a\\b\\l\\a\\i\\a\\y\\a\\i\\a\\B\\a\\j\\a\\f\\a\\f\\a\\p\\a\\y\\a\\i\\a\\H\\a\\b\\s\\a\\j\\a\\o\\a\\u\\a\\b\\E\\a\\b\\n\\a\\L\\a\\b\\O\\a\\t\\a\\K\\a\\b\\K\\a\\t\\a\\o\\a\\14\\a\\p\\a\\B\\a\\j\\a\\B\\a\\c\\a\\b\\c\\a\\e\\a\\H\\a\\b\\s\\a\\n\\a\\f\\a\\f\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\b\\j\\a\\t\\a\\H\\a\\b\\w\\a\\g\\a\\C\\a\\B\\a\\j\\a\\h\\a\\h\\a\\r\\a\\B\\a\\c\\a\\d\\a\\M\\a\\e\\a\\13\\a\\n\\a\\16\\a\\13\\a\\g\\a\\r\\a\\h\\a\\c\\a\\c\\a\\c\\a\\h\\a\\A\\a\\y\\a\\i\\a\\b\\h\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\w\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\e\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\m\\a\\k\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\w\\a\\L\\a\\13\\a\\K\\a\\c\\a\\16\\a\\m\\a\\v\\a\\m\\a\\19\\a\\c\\a\\b\\d\\a\\p\\a\\Y\\a\\e\\a\\m\\a\\k\\a\\c\\a\\m\\a\\m\\a\\e\\a\\h\\a\\d\\a\\b\\n\\a\\12\\a\\o\\a\\o\\a\\m\\a\\b\\W\\a\\c\\a\\m\\a\\P\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\b\\f\\a\\o\\a\\16\\a\\b\\s\\a\\c\\a\\H\\a\\M\\a\\h\\a\\g\\a\\g\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\h\\a\\d\\a\\b\\n\\a\\12\\a\\o\\a\\o\\a\\m\\a\\b\\W\\a\\c\\a\\m\\a\\P\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\b\\f\\a\\o\\a\\H\\a\\s\\a\\c\\a\\m\\a\\10\\a\\h\\a\\A\\a\\b\\l\\a\\C\\a\\Y\\a\\e\\a\\m\\a\\k\\a\\c\\a\\m\\a\\m\\a\\e\\a\\h\\a\\d\\a\\b\\n\\a\\12\\a\\o\\a\\o\\a\\16\\a\\b\\v\\a\\c\\a\\m\\a\\P\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\b\\f\\a\\o\\a\\16\\a\\M\\a\\q\\a\\16\\a\\s\\a\\c\\a\\H\\a\\M\\a\\h\\a\\g\\a\\g\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\h\\a\\d\\a\\b\\n\\a\\12\\a\\o\\a\\o\\a\\m\\a\\b\\W\\a\\c\\a\\m\\a\\P\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\b\\f\\a\\o\\a\\H\\a\\s\\a\\c\\a\\m\\a\\10\\a\\h\\a\\A\\a\\b\\l\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\m\\a\\k\\a\\A\\a\\A\\a\\p\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\b\\W\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\m\\a\\b\\d\\a\\q\\a\\16\\a\\P\\a\\f\\a\\t\\a\\u\\a\\b\\f\\a\\i\\a\\S\\a\\j\\a\\f\\a\\m\\a\\b\\d\\a\\q\\a\\b\\f\\a\\f\\a\\i\\a\\b\\d\\a\\j\\a\\f\\a\\h\\a\\r\\a\\V\\a\\r\\a\\h\\a\\f\\a\\o\\a\\t\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\b\\h\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\19\\a\\t\\a\\f\\a\\h\\a\\r\\a\\B\\a\\r\\a\\h\\a\\f\\a\\u\\a\\o\\a\\19\\a\\t\\a\\u\\a\\o\\a\\b\\W\\a\\t\\a\\h\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\o\\a\\b\\11\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\H\\a\\P\\a\\f\\a\\o\\a\\t\\a\\h\\a\\p\\a\\v\\a\\e\\a\\h\\a\\c\\a\\d\\a\\N\\a\\q\\a\\b\\18\\a\\i\\a\\c\\a\\d\\a\\Q\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\17\\a\\i\\a\\19\\a\\c\\a\\m\\a\\b\\c\\a\\h\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\w\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\k\\a\\q\\a\\d\\a\\b\\T\\a\\f\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\b\\w\\a\\j\\a\\j\\a\\P\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\m\\a\\G\\a\\e\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\Q\\a\\g\\a\\A\\a\\A\\a\\g\\a\\A\\a\\A\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\h\\a\\c\\a\\d\\a\\N\\a\\q\\a\\b\\18\\a\\i\\a\\c\\a\\d\\a\\Q\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\17\\a\\i\\a\\19\\a\\c\\a\\H\\a\\B\\a\\h\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\P\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\k\\a\\q\\a\\d\\a\\b\\T\\a\\f\\a\\g\\a\\p\\a\\v\\a\\c\\a\\d\\a\\b\\11\\a\\e\\a\\C\\a\\b\\o\\a\\12\\a\\f\\a\\o\\a\\d\\a\\b\\W\\a\\o\\a\\d\\a\\O\\a\\o\\a\\b\\t\\a\\b\\C\\a\\d\\a\\b\\b\\a\\j\\a\\d\\a\\b\\U\\a\\q\\a\\d\\a\\b\\m\\a\\q\\a\\d\\a\\10\\a\\b\\y\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\j\\a\\f\\a\\r\\a\\P\\a\\n\\a\\d\\a\\I\\a\\12\\a\\h\\a\\d\\a\\G\\a\\h\\a\\n\\a\\d\\a\\b\\g\\a\\12\\a\\f\\a\\d\\a\\b\\c\\a\\f\\a\\n\\a\\d\\a\\b\\Z\\a\\12\\a\\D\\a\\e\\a\\k\\a\\g\\a\\C\\a\\y\\a\\i\\a\\O\\a\\j\\a\\f\\a\\f\\a\\p\\a\\y\\a\\i\\a\\Q\\a\\j\\a\\h\\a\\u\\a\\b\\11\\a\\i\\a\\S\\a\\j\\a\\f\\a\\H\\a\\N\\a\\q\\a\\b\\18\\a\\f\\a\\t\\a\\h\\a\\p\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\w\\a\\j\\a\\13\\a\\p\\a\\w\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\c\\a\\b\\j\\a\\p\\a\\w\\a\\r\\a\\r\\a\\g\\a\\C\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\15\\a\\j\\a\\13\\a\\p\\a\\15\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\c\\a\\b\\j\\a\\p\\a\\15\\a\\r\\a\\r\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\d\\a\\b\\X\\a\\j\\a\\j\\a\\f\\a\\d\\a\\S\\a\\f\\a\\g\\a\\C\\a\\O\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\1a\\a\\p\\a\\d\\a\\E\\a\\A\\a\\A\\a\\y\\a\\i\\a\\14\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\p\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\E\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\k\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\j\\a\\p\\a\\y\\a\\i\\a\\b\\h\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\w\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\e\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\N\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\m\\a\\E\\a\\c\\a\\v\\a\\x\\a\\n\\a\\x\\a\\j\\a\\N\\a\\c\\a\\d\\a\\M\\a\\e\\a\\13\\a\\n\\a\\16\\a\\g\\a\\n\\a\\b\\g\\a\\j\\a\\N\\a\\c\\a\\d\\a\\M\\a\\e\\a\\b\\s\\a\\n\\a\\b\\u\\a\\g\\a\\n\\a\\b\\T\\a\\j\\a\\N\\a\\c\\a\\d\\a\\M\\a\\e\\a\\b\\v\\a\\n\\a\\d\\a\\13\\a\\g\\a\\n\\a\\G\\a\\j\\a\\m\\a\\z\\a\\L\\a\\m\\a\\15\\a\\e\\a\\b\\g\\a\\n\\a\\d\\a\\13\\a\\g\\a\\K\\a\\r\\a\\h\\a\\i\\a\\h\\a\\r\\a\\b\\T\\a\\r\\a\\h\\a\\n\\a\\i\\a\\h\\a\\r\\a\\x\\a\\p\\a\\y\\a\\i\\a\\B\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\17\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\v\\a\\B\\a\\j\\a\\v\\a\\e\\a\\h\\a\\u\\a\\b\\U\\a\\t\\a\\h\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\B\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\o\\a\\o\\a\\d\\a\\b\\1b\\a\\c\\a\\d\\a\\b\\d\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\d\\a\\b\\p\\a\\o\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\R\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\17\\a\\v\\a\\d\\a\\b\\18\\a\\c\\a\\b\\o\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\o\\a\\b\\t\\a\\c\\a\\b\\q\\a\\h\\a\\n\\a\\h\\a\\o\\a\\d\\a\\z\\a\\c\\a\\b\\q\\a\\h\\a\\g\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\R\\a\\A\\a\\b\\l\\a\\i\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\u\\a\\b\\f\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\m\\a\\j\\a\\v\\a\\B\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\b\\f\\a\\12\\a\\d\\a\\b\\i\\a\\h\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\b\\d\\a\\h\\a\\g\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\d\\a\\J\\a\\q\\a\\B\\a\\h\\a\\n\\a\\h\\a\\d\\a\\15\\a\\h\\a\\g\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\b\\m\\a\\A\\a\\b\\l\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\d\\a\\1a\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\b\\W\\a\\t\\a\\u\\a\\s\\a\\i\\a\\S\\a\\j\\a\\f\\a\\H\\a\\k\\a\\f\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\i\\a\\d\\a\\b\\v\\a\\j\\a\\f\\a\\d\\a\\V\\a\\12\\a\\b\\o\\a\\e\\a\\h\\a\\r\\a\\V\\a\\r\\a\\h\\a\\g\\a\\i\\a\\d\\a\\b\\T\\a\\q\\a\\m\\a\\M\\a\\i\\a\\d\\a\\R\\a\\i\\a\\d\\a\\R\\a\\p\\a\\d\\a\\V\\a\\q\\a\\m\\a\\16\\a\\12\\a\\i\\a\\m\\a\\b\\v\\a\\f\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\b\\f\\a\\q\\a\\d\\a\\b\\q\\a\\f\\a\\o\\a\\t\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\b\\e\\a\\q\\a\\m\\a\\14\\a\\f\\a\\t\\a\\u\\a\\d\\a\\H\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\Y\\a\\q\\a\\b\\p\\a\\f\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\14\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\o\\a\\d\\a\\H\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\19\\a\\q\\a\\d\\a\\w\\a\\f\\a\\t\\a\\h\\a\\r\\a\\b\\h\\a\\r\\a\\h\\a\\u\\a\\o\\a\\19\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\19\\a\\q\\a\\m\\a\\b\\T\\a\\f\\a\\t\\a\\h\\a\\r\\a\\G\\a\\r\\a\\h\\a\\u\\a\\o\\a\\19\\a\\t\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\o\\a\\b\\W\\a\\t\\a\\h\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\o\\a\\b\\11\\a\\t\\a\\h\\a\\p\\a\\v\\a\\e\\a\\h\\a\\c\\a\\d\\a\\N\\a\\q\\a\\b\\18\\a\\i\\a\\c\\a\\d\\a\\Q\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\17\\a\\i\\a\\19\\a\\c\\a\\H\\a\\B\\a\\h\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\w\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\k\\a\\q\\a\\d\\a\\b\\T\\a\\f\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\b\\w\\a\\j\\a\\j\\a\\P\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\m\\a\\G\\a\\e\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\Q\\a\\g\\a\\A\\a\\A\\a\\g\\a\\A\\a\\A\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\h\\a\\c\\a\\d\\a\\N\\a\\q\\a\\b\\18\\a\\i\\a\\c\\a\\d\\a\\Q\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\17\\a\\i\\a\\19\\a\\c\\a\\H\\a\\b\\T\\a\\h\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\1b\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\k\\a\\q\\a\\d\\a\\B\\a\\f\\a\\g\\a\\n\\a\\P\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\k\\a\\q\\a\\d\\a\\b\\T\\a\\f\\a\\g\\a\\p\\a\\v\\a\\c\\a\\d\\a\\b\\11\\a\\e\\a\\C\\a\\b\\o\\a\\12\\a\\f\\a\\o\\a\\d\\a\\b\\W\\a\\o\\a\\d\\a\\O\\a\\o\\a\\b\\t\\a\\o\\a\\q\\a\\o\\a\\f\\a\\r\\a\\b\\1b\\a\\r\\a\\f\\a\\b\\C\\a\\d\\a\\b\\b\\a\\j\\a\\d\\a\\b\\U\\a\\q\\a\\d\\a\\b\\m\\a\\q\\a\\d\\a\\10\\a\\b\\y\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\j\\a\\f\\a\\r\\a\\P\\a\\n\\a\\d\\a\\I\\a\\12\\a\\h\\a\\d\\a\\G\\a\\h\\a\\n\\a\\d\\a\\b\\g\\a\\12\\a\\f\\a\\d\\a\\b\\c\\a\\f\\a\\n\\a\\d\\a\\b\\Z\\a\\12\\a\\D\\a\\e\\a\\k\\a\\g\\a\\C\\a\\y\\a\\i\\a\\O\\a\\j\\a\\f\\a\\f\\a\\p\\a\\y\\a\\i\\a\\Q\\a\\j\\a\\h\\a\\u\\a\\b\\11\\a\\i\\a\\S\\a\\j\\a\\f\\a\\H\\a\\N\\a\\q\\a\\b\\18\\a\\f\\a\\t\\a\\h\\a\\p\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\w\\a\\j\\a\\13\\a\\p\\a\\w\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\c\\a\\b\\j\\a\\p\\a\\w\\a\\r\\a\\r\\a\\g\\a\\C\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\15\\a\\j\\a\\13\\a\\p\\a\\15\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\c\\a\\b\\j\\a\\p\\a\\15\\a\\r\\a\\r\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\d\\a\\b\\X\\a\\j\\a\\j\\a\\f\\a\\d\\a\\S\\a\\f\\a\\g\\a\\C\\a\\O\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\1a\\a\\p\\a\\d\\a\\E\\a\\A\\a\\A\\a\\y\\a\\i\\a\\14\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\p\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\E\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\k\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\j\\a\\p\\a\\y\\a\\i\\a\\b\\h\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\w\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\e\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\N\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\m\\a\\E\\a\\c\\a\\v\\a\\x\\a\\n\\a\\x\\a\\j\\a\\N\\a\\c\\a\\d\\a\\M\\a\\e\\a\\13\\a\\n\\a\\16\\a\\g\\a\\n\\a\\b\\g\\a\\j\\a\\N\\a\\c\\a\\d\\a\\M\\a\\e\\a\\b\\s\\a\\n\\a\\b\\u\\a\\g\\a\\n\\a\\b\\T\\a\\j\\a\\N\\a\\c\\a\\d\\a\\M\\a\\e\\a\\b\\v\\a\\n\\a\\d\\a\\13\\a\\g\\a\\n\\a\\G\\a\\j\\a\\m\\a\\z\\a\\L\\a\\m\\a\\15\\a\\e\\a\\b\\g\\a\\n\\a\\d\\a\\13\\a\\g\\a\\K\\a\\r\\a\\h\\a\\i\\a\\h\\a\\r\\a\\b\\T\\a\\r\\a\\h\\a\\n\\a\\i\\a\\h\\a\\r\\a\\x\\a\\p\\a\\y\\a\\i\\a\\B\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\17\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\v\\a\\B\\a\\j\\a\\v\\a\\e\\a\\h\\a\\u\\a\\b\\U\\a\\t\\a\\h\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\B\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\o\\a\\o\\a\\d\\a\\b\\1b\\a\\c\\a\\d\\a\\b\\d\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\d\\a\\b\\p\\a\\o\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\R\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\17\\a\\v\\a\\d\\a\\b\\18\\a\\c\\a\\b\\o\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\o\\a\\b\\t\\a\\c\\a\\b\\q\\a\\h\\a\\n\\a\\h\\a\\o\\a\\d\\a\\z\\a\\c\\a\\b\\q\\a\\h\\a\\g\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\R\\a\\A\\a\\b\\l\\a\\i\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\u\\a\\b\\f\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\m\\a\\j\\a\\v\\a\\B\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\b\\f\\a\\12\\a\\d\\a\\b\\i\\a\\h\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\b\\d\\a\\h\\a\\g\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\d\\a\\J\\a\\q\\a\\B\\a\\h\\a\\n\\a\\h\\a\\d\\a\\15\\a\\h\\a\\g\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\b\\m\\a\\A\\a\\b\\l\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\d\\a\\1a\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\b\\W\\a\\t\\a\\u\\a\\s\\a\\i\\a\\S\\a\\j\\a\\f\\a\\H\\a\\k\\a\\f\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\i\\a\\d\\a\\b\\v\\a\\j\\a\\f\\a\\d\\a\\V\\a\\12\\a\\b\\o\\a\\e\\a\\h\\a\\r\\a\\V\\a\\r\\a\\h\\a\\g\\a\\i\\a\\d\\a\\b\\T\\a\\q\\a\\m\\a\\M\\a\\i\\a\\d\\a\\R\\a\\i\\a\\d\\a\\R\\a\\p\\a\\d\\a\\V\\a\\q\\a\\m\\a\\16\\a\\12\\a\\i\\a\\m\\a\\b\\v\\a\\f\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\b\\f\\a\\q\\a\\d\\a\\b\\q\\a\\f\\a\\o\\a\\t\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\b\\e\\a\\q\\a\\m\\a\\14\\a\\f\\a\\t\\a\\u\\a\\d\\a\\H\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\Y\\a\\q\\a\\b\\p\\a\\f\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\14\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\o\\a\\d\\a\\H\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\19\\a\\q\\a\\d\\a\\w\\a\\f\\a\\t\\a\\h\\a\\r\\a\\b\\h\\a\\r\\a\\h\\a\\u\\a\\o\\a\\19\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\19\\a\\q\\a\\m\\a\\b\\T\\a\\f\\a\\t\\a\\h\\a\\r\\a\\G\\a\\r\\a\\h\\a\\u\\a\\o\\a\\19\\a\\t\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\o\\a\\b\\W\\a\\t\\a\\h\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\o\\a\\b\\11\\a\\t\\a\\h\\a\\p\\a\\v\\a\\e\\a\\f\\a\\c\\a\\d\\a\\N\\a\\q\\a\\b\\18\\a\\i\\a\\c\\a\\d\\a\\Q\\a\\i\\a\\c\\a\\b\\18\\a\\q\\a\\b\\17\\a\\i\\a\\19\\a\\c\\a\\H\\a\\b\\T\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\w\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\f\\a\\d\\a\\k\\a\\q\\a\\d\\a\\B\\a\\f\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\b\\w\\a\\j\\a\\j\\a\\b\\1b\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\m\\a\\G\\a\\e\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\Q\\a\\g\\a\\A\\a\\A\\a\\g\\a\\A\\a\\A\\a\\g\\a\\A\\a\\g\\a\\p\\a\\v\\a\\e\\a\\f\\a\\b\\x\\a\\d\\a\\D\\a\\q\\a\\d\\a\\O\\a\\f\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\1b\\a\\j\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\w\\a\\e\\a\\g\\a\\p\\a\\v\\a\\c\\a\\d\\a\\b\\11\\a\\e\\a\\C\\a\\b\\o\\a\\12\\a\\f\\a\\o\\a\\d\\a\\b\\W\\a\\o\\a\\d\\a\\O\\a\\o\\a\\b\\t\\a\\o\\a\\q\\a\\o\\a\\f\\a\\r\\a\\b\\1b\\a\\r\\a\\f\\a\\b\\C\\a\\d\\a\\b\\b\\a\\j\\a\\d\\a\\b\\U\\a\\q\\a\\d\\a\\b\\m\\a\\q\\a\\d\\a\\10\\a\\b\\y\\a\\d\\a\\y\\a\\q\\a\\d\\a\\16\\a\\j\\a\\f\\a\\r\\a\\16\\a\\Q\\a\\n\\a\\d\\a\\I\\a\\12\\a\\h\\a\\d\\a\\G\\a\\h\\a\\n\\a\\d\\a\\b\\g\\a\\12\\a\\f\\a\\d\\a\\b\\c\\a\\f\\a\\n\\a\\d\\a\\b\\Z\\a\\12\\a\\D\\a\\e\\a\\k\\a\\g\\a\\C\\a\\y\\a\\i\\a\\O\\a\\j\\a\\f\\a\\f\\a\\p\\a\\y\\a\\i\\a\\Q\\a\\j\\a\\h\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\D\\a\\q\\a\\m\\a\\Q\\a\\f\\a\\t\\a\\h\\a\\p\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\w\\a\\j\\a\\13\\a\\p\\a\\w\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\c\\a\\b\\j\\a\\p\\a\\w\\a\\r\\a\\r\\a\\g\\a\\C\\a\\d\\a\\m\\a\\e\\a\\y\\a\\i\\a\\15\\a\\j\\a\\13\\a\\p\\a\\15\\a\\u\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\c\\a\\b\\j\\a\\p\\a\\15\\a\\r\\a\\r\\a\\g\\a\\C\\a\\Y\\a\\e\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\d\\a\\b\\X\\a\\j\\a\\j\\a\\f\\a\\d\\a\\S\\a\\f\\a\\g\\a\\C\\a\\O\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\i\\a\\L\\a\\15\\a\\K\\a\\c\\a\\1a\\a\\p\\a\\d\\a\\E\\a\\A\\a\\A\\a\\y\\a\\i\\a\\14\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\p\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\E\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\k\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\j\\a\\p\\a\\y\\a\\i\\a\\b\\h\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\w\\a\\L\\a\\13\\a\\K\\a\\c\\a\\d\\a\\b\\e\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\B\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\b\\17\\a\\c\\a\\v\\a\\x\\a\\p\\a\\y\\a\\i\\a\\v\\a\\B\\a\\j\\a\\v\\a\\e\\a\\h\\a\\u\\a\\b\\U\\a\\t\\a\\h\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\B\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\o\\a\\o\\a\\d\\a\\b\\1b\\a\\c\\a\\d\\a\\b\\d\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\d\\a\\b\\p\\a\\o\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\R\\a\\j\\a\\k\\a\\c\\a\\M\\a\\c\\a\\z\\a\\L\\a\\w\\a\\K\\a\\c\\a\\d\\a\\b\\17\\a\\v\\a\\d\\a\\b\\18\\a\\c\\a\\b\\o\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\o\\a\\b\\t\\a\\c\\a\\b\\q\\a\\h\\a\\n\\a\\h\\a\\o\\a\\d\\a\\z\\a\\c\\a\\b\\q\\a\\h\\a\\g\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\R\\a\\A\\a\\b\\l\\a\\i\\a\\Y\\a\\e\\a\\B\\a\\c\\a\\d\\a\\d\\a\\e\\a\\f\\a\\u\\a\\b\\f\\a\\f\\a\\g\\a\\t\\a\\q\\a\\d\\a\\g\\a\\C\\a\\y\\a\\i\\a\\b\\m\\a\\j\\a\\v\\a\\B\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\b\\f\\a\\12\\a\\d\\a\\b\\i\\a\\h\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\b\\d\\a\\h\\a\\g\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\d\\a\\J\\a\\q\\a\\B\\a\\h\\a\\n\\a\\h\\a\\d\\a\\15\\a\\h\\a\\g\\a\\p\\a\\y\\a\\i\\a\\V\\a\\j\\a\\b\\m\\a\\A\\a\\b\\l\\a\\C\\a\\y\\a\\i\\a\\V\\a\\j\\a\\d\\a\\1a\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\b\\W\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\D\\a\\q\\a\\d\\a\\b\\h\\a\\f\\a\\t\\a\\u\\a\\s\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\D\\a\\q\\a\\b\\f\\a\\f\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\i\\a\\d\\a\\b\\v\\a\\j\\a\\f\\a\\d\\a\\V\\a\\12\\a\\b\\o\\a\\e\\a\\h\\a\\r\\a\\V\\a\\r\\a\\h\\a\\g\\a\\i\\a\\d\\a\\b\\T\\a\\q\\a\\m\\a\\M\\a\\i\\a\\d\\a\\R\\a\\i\\a\\d\\a\\R\\a\\p\\a\\d\\a\\V\\a\\q\\a\\m\\a\\16\\a\\12\\a\\i\\a\\m\\a\\b\\v\\a\\f\\a\\t\\a\\u\\a\\19\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\D\\a\\q\\a\\d\\a\\b\\q\\a\\f\\a\\o\\a\\t\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\D\\a\\q\\a\\b\\17\\a\\f\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\D\\a\\q\\a\\m\\a\\b\\s\\a\\f\\a\\t\\a\\u\\a\\s\\a\\i\\a\\S\\a\\j\\a\\f\\a\\m\\a\\H\\a\\i\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\f\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\o\\a\\b\\r\\a\\o\\a\\d\\a\\B\\a\\o\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\E\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\d\\a\\H\\a\\i\\a\\S\\a\\j\\a\\f\\a\\d\\a\\D\\a\\q\\a\\b\\p\\a\\f\\a\\t\\a\\u\\a\\s\\a\\i\\a\\1a\\a\\j\\a\\f\\a\\h\\a\\r\\a\\O\\a\\r\\a\\h\\a\\f\\a\\t\\a\\h\\a\\r\\a\\14\\a\\r\\a\\h\\a\\u\\a\\o\\a\\s\\a\\t\\a\\u\\a\\o\\a\\d\\a\\H\\a\\t\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\o\\a\\b\\W\\a\\t\\a\\h\\a\\A\\a\\Q\\a\\r\\a\\j\\a\\h\\a\\u\\a\\o\\a\\b\\U\\a\\t\\a\\u\\a\\b\\U\\a\\i\\a\\S\\a\\j\\a\\f\\a\\H\\a\\P\\a\\f\\a\\o\\a\\t\\a\\h\\a\\p\\a\\v\\a\\e\\a\\f\\a\\b\\x\\a\\d\\a\\D\\a\\q\\a\\d\\a\\O\\a\\f\\a\\g\\a\\c\\a\\b\\k\\a\\e\\a\\Q\\a\\g\\a\\p\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\Z\\a\\e\\a\\h\\a\\c\\a\\d\\a\\D\\a\\q\\a\\b\\f\\a\\h\\a\\g\\a\\c\\a\\b\\X\\a\\e\\a\\D\\a\\e\\a\\g\\a\\C\\a\\v\\a\\e\\a\\10\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\d\\a\\b\\v\\a\\h\\a\\n\\a\\D\\a\\e\\a\\w\\a\\n\\a\\b\\d\\a\\g\\a\\C\\a\\d\\a\\P\\a\\i\\a\\b\\d\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\o\\a\\b\\t\\a\\c\\a\\b\\q\\a\\h\\a\\n\\a\\h\\a\\o\\a\\d\\a\\z\\a\\c\\a\\b\\q\\a\\h\\a\\g\\a\\A\\a\\g\\a\\c\\a\\b\\b\\a\\e\\a\\h\\a\\d\\a\\b\\v\\a\\h\\a\\n\\a\\D\\a\\e\\a\\w\\a\\n\\a\\b\\d\\a\\g\\a\\C\\a\\d\\a\\P\\a\\i\\a\\b\\d\\a\\c\\a\\b\\c\\a\\e\\a\\h\\a\\d\\a\\J\\a\\q\\a\\B\\a\\h\\a\\n\\a\\h\\a\\d\\a\\15\\a\\h\\a\\g\\a\\A\\a\\g\\a\\A\\a\\g\\a\\A\\a\\A\\a\\g\\a\\A\\a\\g\\a\\p\\a\\H\\a\\Q\\a\\c\\a\\16\\a\\15\\a\\j\\a\\D\\a\\e\\a\\g\\a\\C\\a\\y\\a\\i\\a\\k\\a\\j\\a\\d\\a\\b\\f\\a\\c\\a\\16\\a\\V\\a\\e\\a\\f\\a\\16\\a\\z\\a\\f\\a\\g\\a\\p\\a\\Y\\a\\e\\a\\k\\a\\j\\a\\j\\a\\16\\a\\D\\a\\g\\a\\C\\a\\H\\a\\Q\\a\\c\\a\\m\\a\\b\\1b\\a\\c\\a\\1a\\a\\j\\a\\f\\a\\d\\a\\b\\n\\a\\12\\a\\o\\a\\o\\a\\d\\a\\b\\1b\\a\\c\\a\\H\\a\\w\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\f\\a\\A\\a\\k\\a\\c\\a\\m\\a\\b\\18\\a\\e\\a\\f\\a\\1a\\a\\f\\a\\n\\a\\f\\a\\d\\a\\b\\n\\a\\12\\a\\o\\a\\o\\a\\d\\a\\b\\1b\\a\\c\\a\\H\\a\\w\\a\\c\\a\\d\\a\\b\\s\\a\\o\\a\\f\\a\\g\\a\\p\\a\\k\\a\\c\\a\\m\\a\\b\\18\\a\\e\\a\\f\\a\\16\\a\\R\\a\\f\\a\\n\\a\\f\\a\\16\\a\\b\\m\\a\\f\\a\\g\\a\\p\\a\\k\\a\\c\\a\\m\\a\\b\\18\\a\\e\\a\\f\\a\\b\\p\\a\\f\\a\\n\\a\\f\\a\\16\\a\\G\\a\\i\\a\\16\\a\\E\\a\\i\\a\\16\\a\\x\\a\\f\\a\\g\\a\\p\\a\\k\\a\\c\\a\\16\\a\\O\\a\\j\\a\\f\\a\\H\\a\\1a\\a\\f\\a\\A\\1h\\1g\\1h\\a\\l\\1h\\1g\\1h\\a\\E\\a\\R\\a\\z\\a\\w\\a\\x\\1h\\1g\\1h\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\b\\1b\\a\\s\\a\\G\\a\\l\\a\\l\\a\\l\\a\\b\\T\\a\\k\\a\\k\\a\\N\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\k\\a\\J\\a\\x\\a\\G\\a\\b\\h\\a\\l\\a\\b\\T\\a\\O\\a\\J\\a\\B\\a\\x\\a\\w\\a\\I\\a\\J\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\l\\a\\B\\a\\z\\a\\s\\a\\E\\a\\E\\a\\l\\a\\l\\a\\x\\a\\Q\\a\\w\\a\\E\\a\\l\\a\\w\\a\\b\\T\\a\\l\\a\\E\\a\\R\\a\\s\\a\\J\\a\\l\\a\\Q\\a\\G\\a\\k\\a\\b\\T\\a\\l\\a\\N\\a\\w\\a\\b\\1b\\a\\l\\a\\s\\a\\x\\a\\x\\a\\G\\a\\l\\a\\b\\T\\a\\w\\a\\J\\a\\N\\a\\l\\a\\b\\g\\a\\w\\a\\N\\a\\14\\a\\k\\a\\x\\a\\l\\a\\z\\a\\w\\a\\l\\a\\O\\a\\z\\a\\l\\a\\E\\a\\G\\a\\B\\a\\l\\a\\G\\a\\k\\a\\R\\a\\z\\a\\s\\a\\B\\a\\k\\a\\l\\a\\k\\a\\s\\a\\B\\a\\Q\\a\\l\\a\\w\\a\\D\\a\\14\\a\\l\\a\\z\\a\\w\\a\\J\\a\\V\\a\\l\\a\\z\\a\\k\\a\\J\\a\\14\\a\\x\\a\\Q\\a\\l\\a\\R\\a\\I\\a\\E\\a\\x\\a\\l\\a\\Q\\a\\x\\a\\D\\a\\z\\a\\l\\a\\k\\a\\z\\a\\E\\a\\k\\a\\l\\a\\l\\a\\B\\a\\I\\a\\J\\a\\x\\a\\k\\a\\J\\a\\x\\a\\l\\a\\x\\a\\w\\a\\x\\a\\z\\a\\k\\a\\l\\a\\O\\a\\G\\a\\z\\a\\l\\a\\15\\a\\R\\a\\14\\a\\l\\a\\E\\a\\k\\a\\s\\a\\G\\a\\B\\a\\Q\\a\\l\\a\\N\\a\\k\\a\\b\\T\\a\\s\\a\\O\\a\\z\\a\\x\\a\\l\\a\\x\\a\\k\\a\\S\\a\\x\\a\\l\\a\\l\\a\\w\\a\\J\\a\\N\\a\\k\\a\\S\\a\\b\\j\\a\\b\\T\\a\\l\\a\\b\\T\\a\\I\\a\\G\\a\\l\\a\\Q\\a\\H\\a\\l\\a\\G\\a\\k\\a\\E\\a\\O\\a\\z\\a\\x\\a\\E\\a\\l\\a\\B\\a\\I\\a\\D\\a\\l\\a\\D\\a\\s\\a\\S\\a\\l\\a\\w\\a\\x\\a\\k\\a\\D\\a\\l\\a\\E\\a\\x\\a\\b\\h\\a\\z\\a\\k\\a\\l\\a\\E\\a\\O\\a\\P\\a\\E\\a\\x\\a\\G\\a\\w\\a\\J\\a\\14\\a\\l\\a\\b\\T\\a\\k\\a\\s\\a\\x\\a\\O\\a\\G\\a\\k\\a\\N\\a\\l\\a\\G\\a\\k\\a\\x\\a\\O\\a\\G\\a\\J\\a\\l\\a\\z\\a\\s\\a\\P\\a\\k\\a\\z\\a\\l\\a\\G\\a\\k\\a\\s\\a\\N\\a\\b\\h\\a\\l\\a\\N\\a\\s\\a\\x\\a\\s\\a\\l\\a\\J\\a\\I\\a\\l\\a\\E\\a\\I\\a\\B\\a\\w\\a\\s\\a\\z\\a\\l\\a\\b\\W\\a\\b\\17\\a\\b\\f\\a\\b\\X\\a\\l\\a\\s\\a\\O\\a\\x\\a\\Q\\a\\I\\a\\G\\a\\l\\a\\E\\a\\d\\a\\y\\a\\13\\a\\13\\a\\l\\a\\P\\a\\s\\a\\B\\a\\V\\a\\14\\a\\G\\a\\I\\a\\O\\a\\J\\a\\N\\a\\l\\a\\D\\a\\b\\m\\a\\N\\a\\k\\a\\b\\T\\a\\s\\a\\O\\a\\z\\a\\x\\a\\l\\a\\G\\a\\k\\a\\z\\a\\s\\a\\x\\a\\k\\a\\N\\a\\l\\a\\E\\a\\b\\u\\a\\m\\a\\l\\a\\x\\a\\b\\h\\a\\R\\a\\k\\a\\l\\a\\B\\a\\k\\a\\J\\a\\x\\a\\k\\a\\G\\a\\l\\a\\w\\a\\J\\a\\l\\a\\14\\a\\k\\a\\x\\a\\l\\a\\P\\a\\G\\a\\k\\a\\s\\a\\V\\a\\l\\a\\D\\a\\k\\a\\J\\a\\O\\a\\l\\a\\R\\a\\I\\a\\E\\a\\x\\a\\E\\a\\l\\a\\b\\g\\a\\b\\g\\a\\b\\g\\a\\l\\a\\N\\a\\s\\a\\x\\a\\s\\a\\b\\17\\a\\b\\h\\a\\R\\a\\k\\a\\l\\a\\s\\a\\z\\a\\x\\a\\k\\a\\G\\a\\J\\a\\s\\a\\x\\a\\k\\a\\l\\a\\x\\a\\Q\\a\\O\\a\\D\\a\\P\\a\\l\\a\\E\\a\\B\\a\\G\\a\\w\\a\\R\\a\\x\\a\\l\\a\\G\\a\\B\\a\\R\\a\\l\\a\\G\\a\\k\\a\\B\\a\\k\\a\\J\\a\\x\\a\\l\\a\\J\\a\\I\\a\\b\\D\\a\\w\\a\\D\\a\\s\\a\\14\\a\\k\\a\\l\\a\\15\\a\\E\\a\\I\\a\\J\\a\\l\\a\\s\\a\\z\\a\\x\\a\\l\\a\\E\\a\\O\\a\\B\\a\\B\\a\\k\\a\\E\\a\\E\\a\\l\\a\\x\\a\\Q\\a\\O\\a\\D\\a\\P\\a\\J\\a\\s\\a\\w\\a\\z\\a\\l\\a\\b\\T\\a\\k\\a\\k\\a\\N\\a\\E\\a\\l\\a\\s\\a\\15\\a\\s\\a\\S\\a\\l\\a\\b\\h\\a\\I\\a\\O\\a\\x\\a\\O\\a\\P\\a\\k\\a\\l\\a\\15\\a\\E\\a\\I\\a\\J\\a\\R\\a\\l\\a\\G\\a\\k\\a\\z\\a\\l\\a\\N\\a\\I\\a\\B\\a\\O\\a\\D\\a\\k\\a\\J\\a\\x\\a\\l\\a\\b\\T\\a\\w\\a\\G\\a\\E\\a\\x\\a\\l\\a\\x\\a\\k\\a\\G\\a\\D\\a\\l\\a\\J\\a\\s\\a\\D\\a\\k\\a\\l\\a\\B\\a\\s\\a\\x\\a\\k\\a\\14\\a\\I\\a\\G\\a\\b\\h\\a\\l\\a\\Q\\a\\m\\a\\l\\a\\Q\\a\\x\\a\\x\\a\\R\\a\\l\\a\\D\\a\\k\\a\\N\\a\\w\\a\\s\\a\\l\\a\\k\\a\\D\\a\\P\\a\\k\\a\\N\\a\\l\\a\\G\\a\\k\\a\\D\\a\\I\\a\\b\\1b\\a\\k\\a\\l\\a\\I\\a\\b\\1b\\a\\k\\a\\G\\a\\z\\a\\s\\a\\b\\h\\a\\l\\a\\B\\a\\I\\a\\D\\a\\D\\a\\k\\a\\J\\a\\x\\a\\E\\a\\l\\a\\B\\a\\I\\a\\O\\a\\J\\a\\x\\a\\k\\a\\G\\a\\l\\a\\x\\a\\s\\a\\P\\a\\l\\a\\P\\a\\I\\a\\S\\a\\l\\a\\s\\a\\B\\a\\x\\a\\w\\a\\b\\1b\\a\\k\\a\\l\\a\\D\\a\\s\\a\\x\\a\\B\\a\\Q\\a\\l\\a\\w\\a\\B\\a\\I\\a\\J\\a\\l\\a\\E\\a\\w\\a\\10\\a\\k\\a\\l\\a\\x\\a\\s\\a\\14\\a\\l\\a\\E\\a\\w\\a\\N\\a\\k\\a\\x\\a\\s\\a\\P\\a\\E\\a\\l\\a\\b\\T\\a\\I\\a\\I\\a\\x\\a\\k\\a\\G\\a\\l\\a\\B\\a\\I\\a\\b\\1b\\a\\k\\a\\G\\a\\l\\a\\G\\a\\k\\a\\R\\a\\k\\a\\s\\a\\x\\a\\l\\a\\I\\a\\O\\a\\x\\a\\k\\a\\G\\a\\l\\a\\P\\a\\z\\a\\I\\a\\14\\a\\P\\a\\z\\a\\I\\a\\14\\a\\l\\a\\E\\a\\x\\a\\G\\a\\I\\a\\J\\a\\14\\a\\l\\a\\B\\a\\I\\a\\O\\a\\J\\a\\x\\a\\l\\a\\b\\h\\a\\V\\a\\l\\a\\N\\a\\s\\a\\x\\a\\k\\a\\l\\a\\R\\a\\s\\a\\J\\a\\k\\a\\z\\a\\l\\a\\b\\g\\a\\G\\a\\s\\a\\R\\a\\l\\a\\R\\a\\G\\a\\k\\a\\R\\a\\k\\a\\J\\a\\N\\a\\l\\a\\R\\a\\s\\a\\G\\a\\E\\a\\k\\a\\b\\11\\a\\J\\a\\x\\a\\l\\a\\x\\a\\s\\a\\P\\a\\E\\a\\l\\a\\D\\a\\I\\a\\J\\a\\x\\a\\Q\\a\\b\\D\\a\\b\\T\\a\\I\\a\\G\\a\\D\\a\\s\\a\\x\\a\\l\\a\\P\\a\\I\\a\\N\\a\\b\\h\\a\\l\\a\\b\\X\\a\\w\\a\\J\\a\\V\\a\\b\\X\\a\\w\\a\\E\\a\\x\\a\\M\\a\\16\\a\\l\\a\\w\\a\\E\\a\\l\\a\\B\\a\\z\\a\\w\\a\\B\\a\\V\\a\\l\\a\\b\\T\\a\\s\\a\\l\\a\\R\\a\\s\\a\\G\\a\\k\\a\\J\\a\\x\\a\\l\\a\\R\\a\\O\\a\\P\\a\\z\\a\\w\\a\\E\\a\\Q\\a\\k\\a\\N\\a\\l\\a\\x\\a\\w\\a\\B\\a\\V\\a\\k\\a\\G\\a\\l\\a\\s\\a\\N\\a\\l\\a\\z\\a\\I\\a\\B\\a\\s\\a\\x\\a\\w\\a\\I\\a\\J\\a\\l\\a\\G\\a\\k\\a\\D\\a\\I\\a\\b\\1b\\a\\k\\a\\1a\\a\\z\\a\\s\\a\\E\\a\\E\\a\\l\\a\\x\\a\\s\\a\\P\\a\\E\\a\\w\\a\\N\\a\\k\\a\\m\\a\\l\\a\\x\\a\\s\\a\\P\\a\\E\\a\\w\\a\\N\\a\\k\\a\\d\\a\\l\\a\\R\\a\\J\\a\\14\\a\\l\\a\\E\\a\\O\\a\\P\\a\\l\\a\\w\\a\\D\\a\\s\\a\\14\\a\\k\\a\\l\\a\\G\\a\\k\\a\\R\\a\\z\\a\\s\\a\\B\\a\\k\\a\\b\\17\\a\\k\\a\\S\\a\\x\\a\\l\\a\\Q\\a\\w\\a\\N\\a\\k\\a\\l\\a\\B\\a\\Q\\a\\w\\a\\z\\a\\N\\a\\G\\a\\k\\a\\J\\a\\l\\a\\s\\a\\N\\a\\N\\a\\1a\\a\\z\\a\\s\\a\\E\\a\\E\\a\\l\\a\\E\\a\\k\\a\\x\\a\\Y\\a\\x\\a\\x\\a\\G\\a\\w\\a\\P\\a\\O\\a\\x\\a\\k\\a\\l\\a\\w\\a\\D\\a\\14\\a\\d\\a\\l\\a\\R\\a\\I\\a\\E\\a\\x\\a\\R\\a\\k\\a\\G\\a\\R\\a\\s\\a\\14\\a\\k\\a\\l\\a\\B\\a\\D\\a\\D\\a\\l\\a\\G\\a\\k\\a\\B\\a\\k\\a\\J\\a\\x\\a\\B\\a\\I\\a\\D\\a\\D\\a\\k\\a\\J\\a\\x\\a\\E\\a\\l\\a\\E\\a\\O\\a\\P\\a\\E\\a\\x\\a\\G\\a\\l\\a\\R\\a\\G\\a\\k\\a\\b\\1b\\a\\l\\a\\x\\a\\s\\a\\G\\a\\14\\a\\k\\a\\x\\a\\l\\a\\w\\a\\J\\a\\R\\a\\O\\a\\x\\a\\l\\a\\w\\a\\J\\a\\N\\a\\k\\a\\S\\a\\l\\a\\s\\a\\G\\a\\B\\a\\Q\\a\\w\\a\\b\\1b\\a\\k\\a\\l\\a\\w\\a\\J\\a\\J\\a\\k\\a\\G\\a\\l\\a\\P\\a\\z\\a\\I\\a\\B\\a\\V\\a\\l\\a\\Q\\a\\k\\a\\s\\a\\N\\a\\k\\a\\G\\a\\l\\a\\b\\e\\a\\I\\a\\R\\a\\O\\a\\z\\a\\s\\a\\G\\a\\b\\e\\a\\I\\a\\E\\a\\x\\a\\E\\a\\l\\a\\s\\a\\R\\a\\R\\a\\k\\a\\J\\a\\N\\a\\l\\a\\16\\a\\13\\a\\13\\a\\l\\a\\E\\a\\w\\a\\D\\a\\R\\a\\z\\a\\k\\a\\b\\17\\a\\s\\a\\P\\a\\l\\a\\x\\a\\I\\a\\R\\a\\l\\a\\D\\a\\k\\a\\x\\a\\s\\a\\l\\a\\w\\a\\N\\a\\k\\a\\z\\a\\l\\a\\R\\a\\s\\a\\x\\a\\Q\\a\\J\\a\\s\\a\\D\\a\\k\\a\\l\\a\\b\\g\\a\\k\\a\\P\\a\\b\\17\\a\\w\\a\\B\\a\\V\\a\\k\\a\\G\\a\\l\\a\\Q\\a\\I\\a\\E\\a\\x\\a\\J\\a\\s\\a\\D\\a\\k\\a\\l\\a\\E\\a\\O\\a\\D\\a\\D\\a\\s\\a\\G\\a\\b\\h\\a\\l\\a\\G\\a\\k\\a\\l\\a\\Q\\a\\s\\a\\E\\a\\Q\\a\\l\\a\\Q\\a\\d\\a\\l\\a\\s\\a\\N\\a\\E\\a\\l\\a\\14\\a\\w\\a\\b\\T\\a\\l\\a\\s\\a\\J\\a\\I\\a\\J\\a\\H\\a\\y\\a\\l\\a\\B\\a\\z\\a\\k\\a\\s\\a\\G\\a\\l\\a\\G\\a\\k\\a\\B\\a\\k\\a\\J\\a\\x\\a\\R\\a\\I\\a\\E\\a\\x\\a\\E\\a\\l\\a\\B\\a\\O\\a\\E\\a\\x\\a\\I\\a\\D\\a\\l\\a\\G\\a\\B\\a\\x\\a\\Q\\a\\O\\a\\D\\a\\P\\a\\l\\a\\z\\a\\s\\a\\P\\a\\k\\a\\z\\a\\R\\a\\I\\a\\E\\a\\x\\a\\l\\a\\b\\g\\a\\w\\a\\N\\a\\x\\a\\Q\\a\\l\\a\\b\\g\\a\\w\\a\\J\\a\\N\\a\\I\\a\\b\\g\\a\\l\\a\\x\\a\\Q\\a\\k\\a\\D\\a\\k\\a\\S\\a\\R\\a\\I\\a\\E\\a\\k\\a\\l\\a\\J\\a\\P\\a\\E\\a\\R\\a\\l\\a\\s\\a\\J\\a\\w\\a\\D\\a\\s\\a\\x\\a\\w\\a\\I\\a\\J\\a\\l\\a\\x\\a\\G\\a\\O\\a\\k\\a\\l\\a\\J\\a\\k\\a\\b\\g\\a\\k\\a\\G\\a\\l\\a\\Q\\a\\I\\a\\b\\1b\\a\\k\\a\\G\\a\\b\\17\\a\\w\\a\\D\\a\\k\\a\\I\\a\\O\\a\\x\\a\\l\\a\\I\\a\\z\\a\\N\\a\\k\\a\\G\\a\\l\\a\\E\\a\\z\\a\\w\\a\\N\\a\\k\\a\\b\\U\\a\\I\\a\\b\\g\\a\\J\\a\\l\\a\\b\\T\\a\\s\\a\\N\\a\\k\\a\\l\\a\\R\\a\\s\\a\\14\\a\\k\\a\\J\\a\\s\\a\\b\\1b\\a\\b\\D\\a\\J\\a\\k\\a\\S\\a\\x\\a\\l\\a\\B\\a\\I\\a\\D\\a\\D\\a\\k\\a\\J\\a\\x\\a\\E\\a\\b\\D\\a\\x\\a\\k\\a\\S\\a\\x\\a\\l\\a\\G\\a\\I\\a\\B\\a\\V\\a\\k\\a\\x\\a\\l\\a\\R\\a\\s\\a\\14\\a\\k\\a\\J\\a\\s\\a\\b\\1b\\a\\b\\D\\a\\R\\a\\G\\a\\k\\a\\b\\1b\\a\\l\\a\\x\\a\\s\\a\\B\\a\\V\\a\\l\\a\\b\\g\\a\\G\\a\\s\\a\\R\\a\\R\\a\\k\\a\\G\\a\\l\\a\\E\\a\\Q\\a\\I\\a\\b\\g\\a\\b\\n\\a\\R\\a\\k\\a\\k\\a\\N\\a\\l\\a\\E\\a\\k\\a\\B\\a\\x\\a\\l\\a\\z\\a\\k\\a\\b\\T\\a\\x\\a\\l\\a\\R\\a\\G\\a\\k\\a\\b\\1b\\a\\k\\a\\J\\a\\x\\a\\b\\U\\a\\k\\a\\b\\T\\a\\s\\a\\O\\a\\z\\a\\x\\a\\l\\a\\O\\a\\J\\a\\N\\a\\k\\a\\b\\T\\a\\w\\a\\J\\a\\k\\a\\N\\a\\l\\a\\b\\17\\a\\Q\\a\\k\\a\\D\\a\\k\\a\\b\\r\\a\\R\\a\\I\\a\\E\\a\\k\\a\\l\\a\\Q\\a\\w\\a\\N\\a\\k\\a\\b\\n\\a\\R\\a\\k\\a\\k\\a\\N\\a\\l\\a\\P\\a\\s\\a\\B\\a\\V\\a\\l\\a\\b\\T\\a\\S\\a\\l\\a\\14\\a\\k\\a\\x\\a\\b\\e\\a\\s\\a\\G\\a\\s\\a\\D\\a\\k\\a\\x\\a\\k\\a\\G\\a\\19\\a\\b\\h\\a\\b\\i\\a\\s\\a\\D\\a\\k\\a\\l\\a\\w\\a\\N\\a\\l\\a\\P\\a\\z\\a\\I\\a\\14\\a\\14\\a\\k\\a\\G\\a\\l\\a\\b\\T\\a\\I\\a\\B\\a\\O\\a\\E\\a\\l\\a\\P\\a\\R\\a\\l\\a\\E\\a\\z\\a\\w\\a\\B\\a\\k\\a\\l\\a\\s\\a\\J\\a\\w\\a\\D\\a\\s\\a\\x\\a\\k\\a\\l\\a\\E\\a\\B\\a\\G\\a\\I\\a\\z\\a\\z\\a\\b\\17\\a\\I\\a\\R\\a\\l\\a\\I\\a\\b\\T\\a\\b\\T\\a\\E\\a\\k\\a\\x\\a\\l\\a\\d\\a\\k\\a\\H\\a\\l\\a\\b\\T\\a\\s\\a\\z\\a\\E\\a\\k\\a\\l\\a\\P\\a\\z\\a\\I\\a\\14\\a\\E\\a\\R\\a\\I\\a\\x\\a\\l\\a\\E\\a\\Q\\a\\I\\a\\b\\g\\a\\l\\a\\b\\X\\a\\w\\a\\J\\a\\V\\a\\b\\X\\a\\w\\a\\E\\a\\x\\a\\l\\a\\b\\T\\a\\s\\a\\B\\a\\k\\a\\P\\a\\I\\a\\I\\a\\V\\a\\l\\a\\b\\X\\a\\w\\a\\V\\a\\k\\a\\E\\a\\l\\a\\G\\a\\E\\a\\E\\a\\l\\a\\P\\a\\b\\D\\a\\G\\a\\B\\a\\l\\a\\b\\t\\a\\b\\g\\a\\b\\v\\a\\19\\a\\b\\11\\a\\O\\a\\b\\1b\\a\\b\\g\\a\\I\\a\\b\\n\\a\\b\\k\\a\\l\\a\\b\\u\\a\\13\\a\\l\\a\\b\\s\\a\\13\\a\\l\\a\\b\\n\\a\\O\\a\\P\\a\\E\\a\\l\\a\\14\\a\\N\\a\\l\\a\\b\\o\\a\\E\\a\\15\\a\\V\\a\\1a\\a\\b\\11\\a\\b\\f\\a\\I\\a\\z\\a\\x\\a\\b\\11\\a\\l\\a\\Y\\a\\Y\\a\\Y\\a\\Y\\a\\Y\\a\\Y\\a\\Y\\a\\Y\\a\\1a\\a\\16\\a\\B\\a\\l\\a\\P\\a\\z\\a\\s\\a\\J\\a\\V\\a\\l\\a\\E\\a\\b\\s\\a\\b\\s\\a\\b\\e\\a\\b\\q\\a\\y\\a\\S\\a\\b\\b\\a\\b\\c\\a\\J\\a\\13\\a\\l\\a\\b\\T\\a\\I\\a\\G\\a\\D\\a\\l\\a\\w\\a\\D\\a\\14\\a\\m\\a\\l\\a\\P\\a\\d\\a\\y\\a\\l\\a\\G\\a\\I\\a\\O\\a\\J\\a\\N\\a\\k\\a\\N\\a\\l\\a\\s\\a\\b\\1b\\a\\s\\a\\x\\a\\s\\a\\G\\a\\l\\a\\J\\a\\x\\a\\Q\\a\\l\\a\\b\\D\\a\\l\\a\\D\\a\\s\\a\\w\\a\\J\\a\\l\\a\\Q\\a\\s\\a\\E\\a\\l\\a\\J\\a\\s\\a\\b\\1b\\a\\l\\a\\G\\a\\k\\a\\z\\a\\s\\a\\x\\a\\k\\a\\N\\a\\b\\D\\a\\J\\a\\O\\a\\D\\a\\P\\a\\k\\a\\G\\a\\l\\a\\x\\a\\s\\a\\P\\a\\E\\a\\z\\a\\k\\a\\x\\a\\l\\a\\I\\a\\J\\a\\z\\a\\I\\a\\s\\a\\N\\a\\l\\a\\14\\a\\k\\a\\x\\a\\b\\b\\a\\z\\a\\k\\a\\D\\a\\k\\a\\J\\a\\x\\a\\19\\a\\b\\h\\a\\b\\11\\a\\N\\a\\l\\a\\D\\a\\b\\h\\a\\B\\a\\I\\a\\J\\a\\x\\a\\k\\a\\J\\a\\x\\a\\l\\a\\J\\a\\O\\a\\z\\a\\z\\a\\l\\a\\D\\a\\I\\a\\O\\a\\E\\a\\k\\a\\k\\a\\b\\1b\\a\\k\\a\\J\\a\\x\\a\\l\\a\\s\\a\\x\\a\\x\\a\\G\\a\\w\\a\\P\\a\\O\\a\\x\\a\\k\\a\\l\\a\\G\\a\\k\\a\\b\\T\\a\\l\\a\\N\\a\\I\\a\\b\\T\\a\\I\\a\\z\\a\\z\\a\\I\\a\\b\\g\\a\\l\\a\\b\\Z\\a\\G\\a\\k\\a\\k\\a\\l\\a\\19\\a\\z\\a\\I\\a\\14\\a\\14\\a\\k\\a\\G\\a\\l\\a\\b\\17\\a\\k\\a\\D\\a\\R\\a\\z\\a\\s\\a\\x\\a\\k\\a\\E\\a\\l\\a\\w\\a\\J\\a\\J\\a\\k\\a\\G\\a\\b\\W\\a\\b\\17\\a\\b\\f\\a\\b\\X\\a\\l\\a\\P\\a\\k\\a\\b\\T\\a\\I\\a\\G\\a\\k\\1h\\1g\\1h\\1h\\1g\\1h\\a\\b\\T\\a\\G\\a\\I\\a\\D\\a\\1a\\a\\Q\\a\\s\\a\\G\\a\\1a\\a\\I\\a\\N\\a\\k\\1h\\1g\\1h\\a\\G\\a\\k\\a\\R\\a\\z\\a\\s\\a\\B\\a\\k\\1h\\1g\\1h\\a\\b\\E\\a\\b\\g\\a\\r\\1h\\1g\\1h\\a\\b\\E\\a\\P\\1h\\1g\\1h\\a\\14\\1h\\1f\\1o\\b\\14\\1e\\b\\L\\1e\\b\\M\\1g\\b\\I\\1g\\b\\z\\1g\\b\\G\\1g\\b\\B\\1g\\b\\N\\1c\\1k\\b\\B\\1n\\b\\L\\1e\\b\\z\\1c\\1k\\b\\J\\1e\\b\\z\\1O\\b\\I\\1A\\b\\A\\1d\\11\\1f\\1E\\b\\B\\1e\\b\\10\\1e\\b\\z\\1y\\b\\I\\1c\\1c\\1c\\1q\\1e\\1e\\b\\z\\1n\\b\\z\\1P\\b\\I\\1c\\1S\\b\\12\\1A\\b\\P\\1d\\b\\A\\1d\\Z\\1f\\1f\\1e\\b\\z\\1q\\b\\16\\1c\\1E\\b\\z\\1F\\b\\S\\1e\\b\\V\\1c\\1c\\1m\\1o\\b\\Q\\1e\\1M\\b\\A\\1d\\11\\1f\\1d\\b\\A\\1d\\W\\1f\\1f\\1e\\1y\\1N\\1y\\1g\\b\\P\\1c\\1c\\1k\\b\\R\\1e\\b\\z\\1w\\1w\\1c\\1k\\b\\N\\1d\\b\\B\\1e\\b\\z\\1c\\1f\\1n\\b\\G\\1d\\b\\z\\1f\\F\\F\\b\\B\\1e\\b\\z\\1c\\1m\\1o\\b\\G\\1n\\1d\\b\\L\\1e\\b\\B\\1c\\1k\\b\\J\\1r\\b\\N\\1d\\b\\B\\1f\\1m\\1f\\1o\\b\\B\\1n\\b\\L\\1e\\1c\\1k\\b\\J\\1r\\b\\A\\1d\\18\\1f\\1m\\1o\\b\\z\\1n\\b\\1m\\1o\\b\\R\\1e\\b\\z\\1w\\1w\\1c\\1k\\b\\Q\\1e\\b\\G\\1d\\b\\z\\1f\\1c\\1k\\b\\M\\1n\\b\\M\\1d\\b\\A\\1d\\W\\1f\\1f\\1e\\b\\13\\1r\\b\\15\\1e\\b\\A\\1d\\17\\1f\\1q\\b\\B\\1e\\b\\z\\1c\\1q\\b\\A\\1d\\17\\1f\\1g\\b\\A\\1d\\1b\\1f\\1c\\1g\\b\\G\\1d\\b\\z\\1f\\1c\\1m\\1m\\1o\\b\\J\\1r\\b\\M\\1m\\1e\\b\\A\\1d\\T\\1f\\1g\\b\\19\\1g\\b\\1a\\1g\\b\\A\\1d\\X\\1f\\1d\\b\\A\\1d\\U\\1f\\1f\\1e\\b\\A\\1d\\b\\1f\\1c\\1g\\T\\1g\\1k\\1m\\1c\\1c","\\F","\\w\\s\\o\\k\\v","\\F\\F\\F\\F\\F\\F\\F\\F\\F\\F\\n\\U\\H\\F\\n\\X\\b\\F\\n\\U\\U\\F\\n\\U\\1b\\F\\n\\U\\17\\F\\n\\U\\18\\F\\n\\U\\T\\F\\n\\X\\G\\F\\n\\W\\Z\\F\\n\\18\\E\\F\\n\\X\\U\\F\\n\\U\\I\\F\\n\\U\\G\\F\\n\\X\\D\\F\\n\\U\\D\\F\\n\\W\\b\\F\\n\\X\\E\\F\\n\\X\\H\\F\\n\\W\\1b\\F\\n\\U\\11\\F\\n\\18\\11\\F\\n\\X\\W\\F\\n\\W\\E\\F\\n\\U\\E\\F\\n\\18\\G\\F\\n\\18\\D\\F\\n\\W\\X\\F\\n\\W\\G\\F\\n\\18\\X\\F\\n\\18\\U\\F\\n\\X\\X\\F\\n\\W\\I\\F\\n\\W\\H\\F\\n\\Z\\D\\F\\n\\Z\\G\\F\\n\\X\\1b\\F\\n\\W\\11\\F\\n\\18\\Z\\F\\n\\W\\U\\F\\n\\W\\17\\F\\n\\18\\T\\F\\n\\18\\17\\F\\n\\W\\D\\F\\n\\11\\b\\F\\n\\18\\B\\F\\n\\X\\B\\F\\n\\W\\18\\F\\n\\X\\T\\F\\n\\W\\B\\F\\n\\X\\11\\F\\n\\11\\U\\F\\n\\11\\X\\F\\n\\W\\W\\F\\n\\11\\Z\\F\\n\\11\\11\\F\\n\\11\\E\\F\\n\\11\\1b\\F\\n\\11\\W\\F\\n\\11\\17\\F\\n\\11\\18\\F\\n\\Z\\11\\F\\n\\18\\W\\F\\n\\11\\D\\F\\n\\11\\B\\F\\n\\11\\G\\F\\n\\18\\18\\F\\n\\Z\\T\\F\\n\\18\\1b\\F\\n\\11\\H\\F\\n\\11\\I\\F\\n\\Z\\b\\F\\n\\Z\\U\\F\\n\\18\\b\\F\\n\\Z\\W\\F\\n\\Z\\18\\F\\n\\Z\\Z\\F\\n\\Z\\17\\F\\n\\X\\Z\\F\\n\\X\\18\\F\\n\\Z\\1b\\F\\n\\Z\\B\\F\\n\\X\\17\\F\\n\\U\\X\\F\\n\\U\\W\\F\\1p\\T\\n\\W\\17\\T\\17\\n\\X\\F\\n\\Z\\X\\F\\1p\\T\\n\\g\\T\\Z\\Z\\F\\n\\X\\I\\F\\1p\\T\\n\\W\\17\\T\\17\\n\\Z\\F\\n\\Z\\I\\F\\n\\Z\\E\\F\\1p\\T\\n\\W\\17\\T\\17\\n\\11\\F\\n\\U\\b\\F\\1p\\T\\n\\W\\17\\T\\17\\n\\U\\F\\t\\e\\v\\x\\t\\p\\F\\h\\x\\p\\f\\v\\k\\r\\p\\F\\n\\U\\B\\F\\1p\\T\\n\\W\\17\\T\\17\\n\\b\\F\\1p\\T\\n\\W\\17\\T\\17\\n\\W\\F\\n\\Z\\H\\F\\10\\v\\t\\k\\p\\i\\F\\k\\h\\F\\z\\j\\k\\o\\e\\F\\v\\r\\10\\v\\t\\k\\p\\i\\F\\X\\W\\F\\y\\c\\t\\F\\s\\c\\t\\w\\e\\K\\p\\v\\F\\X\\Z\\F\\e\\y\\c\\o\\F\\p\\e\\z\\F\\Y\\e\\i\\H\\n\\s\\F\\U\\1b\\F\\W\\U\\F\\U\\17\\T","","\\h\\t\\r\\q\\E\\j\\c\\t\\E\\r\\g\\e","\\t\\e\\s\\o\\c\\f\\e","\\a\\z\\1q","\\a\\d","\\i"];1T(1v(1t,1u,1i,1s,1l,1z){1l=1v(1i){1x(1i<1u?1j[4]:1l(1G(1i/1u)))+((1i=1i%1u)>1H?1B[1j[5]](1i+1J):1i.1K(1L))};1C(!1j[4][1j[6]](/^/,1B)){1D(1i--){1z[1l(1i)]=1s[1i]||1l(1i)};1s=[1v(1l){1x 1z[1l]}];1l=1v(){1x 1j[7]};1i=1};1D(1i--){1C(1s[1i]){1t=1t[1j[6]](1Q 1R(1j[8]+1l(1i)+1j[8],1j[9]),1s[1i])}};1x 1t}(1j[0],1U,1V,1j[3][1j[2]](1j[1]),0,{}))',62,120,'||||||||||x5C|x31|x61|x62|x65|x63|x64|x66|x67|x68|x69|x6A|x6B|x78|x6C|x6E|x6D|x6F|x70|x72|x71|x74|x73|x75|x76|x77|x79|x41|x7A|x42|x43|x7C|x44|x45|x46|x47|x49|x48|x4A|x4B|x4C|x4D|x4E|x4F|x50|x30|x32|x51|x36|x33|x52|x35|x53|x34|x54|x56|x55|x57|x58|x38|x37|x59|x5A|x39|x29|x5B|x28|x5D|x2C|x22|_0x2312x3|_0x2037|x7B|_0x2312x5|x7D|x3D|x3B|x5F|x2B|x20|_0x2312x4|_0x2312x1|_0x2312x2|function|x2D|return|x2F|_0x2312x6|x3F|String|if|while|x3A|x2E|parseInt|35|var|29|toString|36|x21|x5E|x3C|x25|new|RegExp|x3E|eval|62|124'.split('|'),0,{}))
//]]>
</script>



<script type='text/javascript'>
var numshowpage=3;
var upPageWord =&#39;&lt;i class=&quot;fa fa-angle-double-left&quot;&gt;&lt;/i&gt;&#39;;
var downPageWord =&#39;&lt;i class=&quot;fa fa-angle-double-right&quot;&gt;&lt;/i&gt;&#39;;
var urlactivepage=location.href;
var home_page=&quot;/&quot;;
</script>
<b:if cond='data:blog.pageType != &quot;item&quot;'>
<b:if cond='data:blog.pageType != &quot;static_page&quot;'>
<script>
//<![CDATA[
var nopage;var jenis;var nomerhal;var lblname1;halamanblogger();function loophalaman(banyakdata){var html='';nomerkiri=parseInt(numshowpage/2);if(nomerkiri==numshowpage-nomerkiri){numshowpage=nomerkiri*2+1}mulai=nomerhal-nomerkiri;if(mulai<1)mulai=1;maksimal=parseInt(banyakdata/postperpage)+1;if(maksimal-1==banyakdata/postperpage)maksimal=maksimal-1;akhir=mulai+numshowpage-1;if(akhir>maksimal)akhir=maksimal;html+="<span class='showpageOf'>Page "+nomerhal+' of '+maksimal+"</span>";var prevnomer=parseInt(nomerhal)-1;if(nomerhal>1){if(nomerhal==2){if(jenis=="page"){html+='<span class="showpage"><a href="'+home_page+'">'+upPageWord+'</a></span>'}else{html+='<span class="showpageNum"><a href="/search/label/'+lblname1+'?&max-results='+postperpage+'">'+upPageWord+'</a></span>'}}else{if(jenis=="page"){html+='<span class="showpageNum"><a href="#" onclick="redirectpage('+prevnomer+');return false">'+upPageWord+'</a></span>'}else{html+='<span class="showpageNum"><a href="#" onclick="redirectlabel('+prevnomer+');return false">'+upPageWord+'</a></span>'}}}if(mulai>1){if(jenis=="page"){html+='<span class="showpageNum"><a href="'+home_page+'">1</a></span>'}else{html+='<span class="showpageNum"><a href="/search/label/'+lblname1+'?&max-results='+postperpage+'">1</a></span>'}}if(mulai>2){html+='  '}for(var jj=mulai;jj<=akhir;jj++){if(nomerhal==jj){html+='<span class="showpagePoint">'+jj+'</span>'}else if(jj==1){if(jenis=="page"){html+='<span class="showpageNum"><a href="'+home_page+'">1</a></span>'}else{html+='<span class="showpageNum"><a href="/search/label/'+lblname1+'?&max-results='+postperpage+'">1</a></span>'}}else{if(jenis=="page"){html+='<span class="showpageNum"><a href="#" onclick="redirectpage('+jj+');return false">'+jj+'</a></span>'}else{html+='<span class="showpageNum"><a href="#" onclick="redirectlabel('+jj+');return false">'+jj+'</a></span>'}}}if(akhir<maksimal-1){html+=''}if(akhir<maksimal){if(jenis=="page"){html+='<span class="showpageNum"><a href="#" onclick="redirectpage('+maksimal+');return false">'+maksimal+'</a></span>'}else{html+='<span class="showpageNum"><a href="#" onclick="redirectlabel('+maksimal+');return false">'+maksimal+'</a></span>'}}var nextnomer=parseInt(nomerhal)+1;if(nomerhal<maksimal){if(jenis=="page"){html+='<span class="showpageNum"><a href="#" onclick="redirectpage('+nextnomer+');return false">'+downPageWord+'</a></span>'}else{html+='<span class="showpageNum"><a href="#" onclick="redirectlabel('+nextnomer+');return false">'+downPageWord+'</a></span>'}}var pageArea=document.getElementsByName("pageArea");var blogPager=document.getElementById("blog-pager");for(var p=0;p<pageArea.length;p++){pageArea[p].innerHTML=html}if(pageArea&&pageArea.length>0){html=''}if(blogPager){blogPager.innerHTML=html}}function hitungtotaldata(root){var feed=root.feed;var totaldata=parseInt(feed.openSearch$totalResults.$t,10);loophalaman(totaldata)}function halamanblogger(){var thisUrl=urlactivepage;if(thisUrl.indexOf("/search/label/")!=-1){if(thisUrl.indexOf("?updated-max")!=-1){lblname1=thisUrl.substring(thisUrl.indexOf("/search/label/")+14,thisUrl.indexOf("?updated-max"))}else{lblname1=thisUrl.substring(thisUrl.indexOf("/search/label/")+14,thisUrl.indexOf("?&max"))}}if(thisUrl.indexOf("?q=")==-1&&thisUrl.indexOf(".html")==-1){if(thisUrl.indexOf("/search/label/")==-1){jenis="page";if(urlactivepage.indexOf("#PageNo=")!=-1){nomerhal=urlactivepage.substring(urlactivepage.indexOf("#PageNo=")+8,urlactivepage.length)}else{nomerhal=1}document.write("<script src=\""+home_page+"feeds/posts/summary?max-results=1&alt=json-in-script&callback=hitungtotaldata\"><\/script>")}else{jenis="label";if(thisUrl.indexOf("&max-results=")==-1){postperpage=20}if(urlactivepage.indexOf("#PageNo=")!=-1){nomerhal=urlactivepage.substring(urlactivepage.indexOf("#PageNo=")+8,urlactivepage.length)}else{nomerhal=1}document.write('<script src="'+home_page+'feeds/posts/summary/-/'+lblname1+'?alt=json-in-script&callback=hitungtotaldata&max-results=1" ><\/script>')}}}function redirectpage(numberpage){jsonstart=(numberpage-1)*postperpage;nopage=numberpage;var nBody=document.getElementsByTagName('head')[0];var newInclude=document.createElement('script');newInclude.type='text/javascript';newInclude.setAttribute("src",home_page+"feeds/posts/summary?start-index="+jsonstart+"&max-results=1&alt=json-in-script&callback=finddatepost");nBody.appendChild(newInclude)}function redirectlabel(numberpage){jsonstart=(numberpage-1)*postperpage;nopage=numberpage;var nBody=document.getElementsByTagName('head')[0];var newInclude=document.createElement('script');newInclude.type='text/javascript';newInclude.setAttribute("src",home_page+"feeds/posts/summary/-/"+lblname1+"?start-index="+jsonstart+"&max-results=1&alt=json-in-script&callback=finddatepost");nBody.appendChild(newInclude)}function finddatepost(root){post=root.feed.entry[0];var timestamp1=post.published.$t.substring(0,19)+post.published.$t.substring(23,29);var timestamp=encodeURIComponent(timestamp1);if(jenis=="page"){var alamat="/search?updated-max="+timestamp+"&max-results="+postperpage+"#PageNo="+nopage}else{var alamat="/search/label/"+lblname1+"?updated-max="+timestamp+"&max-results="+postperpage+"#PageNo="+nopage}location.href=alamat}
//]]>
</script>
</b:if>
</b:if>
<script>
//<![CDATA[
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
//]]>
</script>
</body>
</html>
