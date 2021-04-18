
    <div id="header">
    <!-- логотип -->
    <div id="logo">
    <p style="font-style:oblique;float: left;margin: 10px 0px -10px 15px; font-size:16pt">SHEARE YOUR</p>
   <strong> <p style="font-style:oblique; font-size:50pt;margin:0px 0 0 0">STORY</p></strong>
    </div>
    <!-- дополнительные ссылки сверху -->
    <div id="links">
        <a href="#">About us</a>
        <a href="#">Help</a>
        <a href="#">Contact Us</a>
    </div>

    <!-- меню -->
    <div id="navmenu">
        <nav id="menu">
            <ul>
                <li class="active"><a href="index.php">Home</a>
                    <ul>
                        <li><a href="#"><span></span>Facebook</a></li>
                        <li><a href="#"><span></span>Google</a></li>
                        <li><a href="#"><span></span>RSS</a></li>
                        <li><a href="#"><span></span>Skype</a></li>
                        <li><a href="#"><span></span>Stumbleupon</a></li>
                    </ul>
                </li>
                <li><a href="#">Faces</a>
                    <ul>
                        <li><a href="#"><span></span>menu element 1</a></li>
                        <li><a href="#"><span></span>menu element 2</a></li>
                        <li><a href="#"><span></span>menu element 3</a></li>
                        <li><a href="#"><span></span>menu element 4</a></li>
                        <li><a href="#"><span></span>menu element 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Clubs</a>
                    <ul>
                        <li><a href="#"><span></span>menu element 1</a></li>
                        <li><a href="#"><span></span>menu element 2</a></li>
                        <li><a href="#"><span></span>menu element 3</a></li>
                        <li><a href="#"><span></span>menu element 4</a></li>
                        <li><a href="#"><span></span>menu element 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Photos</a>
                    <ul>
                        <li><a href="#"><span></span>menu element 1</a></li>
                        <li><a href="#"><span></span>menu element 2</a></li>
                        <li><a href="#"><span></span>menu element 3</a></li>
                        <li><a href="#"><span></span>menu element 4</a></li>
                        <li><a href="#"><span></span>menu element 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Blog</a>
                    <ul>
                        <li><a href="#"><span></span>menu element 1</a></li>
                        <li><a href="#"><span></span>menu element 2</a></li>
                        <li><a href="#"><span></span>menu element 3</a></li>
                        <li><a href="#"><span></span>menu element 4</a></li>
                        <li><a href="#"><span></span>menu element 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Classifieds</a></li>
            </ul>
        </nav>
        <!-- форма поиска -->
        <div id="search">
            <form role="search" method="get">
                <input type="text" placeholder="search..." name="s" value="" autocomplete="off" />
            </form>
        </div>
    </div>
</div>

<form id="frm">
    <table>
    <tr><td>Name</td>
    <td><input type="text" name="name" required></td>
    </tr>
    <tr><td>LastName</td>
    <td><input type="text" name="lastname" required></td>
    </tr>
    <tr><td>Email</td>
    <td><input type="email" name="email" required></td>
    </tr>
    
    <tr><td>submit</td>
    <td><input type="submit" name="submit" id="frm_submit"></td>
    </tr>
    </table>
    @csrf
    </form>
   
    <div id="message">
    </div>
<style>

.container {
  max-width: 1000px;
  margin: auto;
  height: 1000px;
  border:1px solid;
  border-color:rgba(0,0,0,0.1);
    border-bottom-color:rgba(0,0,0,0.2);
    border-top:none;
    background:#f7f7f7;
    background:-webkit-linear-gradient(top, #f7f7f7, #f4f4f4);
    background:-moz-linear-gradient(top, #f7f7f7, #f4f4f4);
    background:-o-linear-gradient(top, #f7f7f7, #f4f4f4);
    background:linear-gradient(to bottom, #f7f7f7, #f4f4f4);
    background-clip:padding-box;
    border-radius:0 0 5px 5px;
}
#header {
    border:1px solid;
    border-color:rgba(0,0,0,0.1);
    border-bottom-color:rgba(0,0,0,0.2);
    border-top:none;
    background:#f7f7f7;
    background:-webkit-linear-gradient(top, #f7f7f7, #f4f4f4);
    background:-moz-linear-gradient(top, #f7f7f7, #f4f4f4);
    background:-o-linear-gradient(top, #f7f7f7, #f4f4f4);
    background:linear-gradient(to bottom, #f7f7f7, #f4f4f4);
    background-clip:padding-box;
    border-radius:0 0 5px 5px;
    margin: auto;
    position: relative;
    width: 1000px;
}
#header a {
    color: #4C9FEB;
}
#header a:hover {
    color: #FF7D4C;
}
#logo {
    float: left;
    margin: 0px 30px;
}
#logo img {
    border: 0;
}
#links {
    float: right;
    font-size: 12px;
    margin: 10px 20px 0;
    overflow: hidden;
    text-shadow: 0 1px 0 #FFFFFF;
}
#links a {
    border-left: 1px solid #DEDEDE;
    margin-left: 7px;
    padding-left: 8px;
    text-decoration: none;
}
#links a:first-child {
    border-width: 0;
}


/* стили меню */
#navmenu {
    background: -webkit-linear-gradient(#f6f6f6, #e9eaea) repeat scroll 0 0 transparent;
    background: -moz-linear-gradient(#f6f6f6, #e9eaea) repeat scroll 0 0 transparent;
    background: linear-gradient(#f6f6f6, #e9eaea) repeat scroll 0 0 transparent;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f6f6f6', endColorstr='#e9eaea',GradientType=0 );
    border-radius: 0 0 4px 4px;
    border-top: 1px solid #D1D1D1;
    box-shadow: -1px 1px 0 rgba(255, 255, 255, 0.8) inset;
    clear: both;
    height: 51px;
    padding-top: 1px;
}
#menu {
    float: left;
}
#menu a {
    text-decoration: none;
}
#menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
#menu > ul > li {
    float: left;
    padding-bottom: 12px;
}
#menu ul li a {
    border-color: #D1D1D1;
    border-image: none;
    border-style: solid;
    border-width: 0 1px 0 0;
    box-shadow: -1px 0 0 rgba(255, 255, 255, 0.8) inset, 1px 0 0 rgba(255, 255, 255, 0.8) inset;
    color: #333333;
    display: block;
    font-size: 14px;
    height: 30px;
    line-height: 30px;
    padding: 11px 15px 10px;
    text-shadow: 0 1px 0 #FFFFFF;
}
#menu ul li a:hover {
    background: -webkit-linear-gradient(#efefef, #e9eaea) repeat scroll 0 0 transparent;
    background: -moz-linear-gradient(#efefef, #e9eaea) repeat scroll 0 0 transparent;
    background: linear-gradient(#efefef, #e9eaea) repeat scroll 0 0 transparent;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efefef', endColorstr='#e9eaea',GradientType=0 );
}
#menu > ul > li.active > a {
    background: -webkit-linear-gradient(#55A6F1, #3F96E5) repeat scroll 0 0 transparent;
    background: -moz-linear-gradient(#55A6F1, #3F96E5) repeat scroll 0 0 transparent;
    background: linear-gradient(#55A6F1, #3F96E5) repeat scroll 0 0 transparent;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#55A6F1', endColorstr='#3F96E5',GradientType=0 );
    border-bottom: 1px solid #2D81CC;
    border-top: 1px solid #4791D6;
    box-shadow: -1px 0 0 #55A6F1 inset, 1px 0 0 #55A6F1 inset;
    color: #FFFFFF;
    margin: -1px 0 -1px -1px;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);
}
#menu > ul > li.active > a:hover {
    background: -webkit-linear-gradient(#499FEE, #3F96E5) repeat scroll 0 0 transparent;
    background: -moz-linear-gradient(#499FEE, #3F96E5) repeat scroll 0 0 transparent;
    background: linear-gradient(#499FEE, #3F96E5) repeat scroll 0 0 transparent;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#499FEE', endColorstr='#3F96E5',GradientType=0 );
}
#menu > ul > li:first-child > a {
    border-radius: 0 0 0 5px;
}
#menu ul ul {
    background: -webkit-linear-gradient(#F7F7F7, #F4F4F4) repeat scroll 0 0 padding-box transparent;
    background: -moz-linear-gradient(#F7F7F7, #F4F4F4) repeat scroll 0 0 padding-box transparent;
    background: linear-gradient(#F7F7F7, #F4F4F4) repeat scroll 0 0 padding-box transparent;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#F7F7F7', endColorstr='#F4F4F4',GradientType=0 );

    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 5px 5px 5px 5px;
    box-shadow: 0 1px 0 #FFFFFF inset;
    height: 0;
    margin-top: 10px;
    opacity: 0;
    overflow: hidden;
    padding: 0;
    position: absolute;
    visibility: hidden;
    width: 250px;
    z-index: 1;

    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -ms-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
}
#menu ul  li:hover ul  {
    height: 195px;
    margin-top: 0\9;
    opacity: 1;
    visibility: visible;
}
#menu ul ul a {
    border-right-width: 0;
    border-top: 1px solid #D1D1D1;
    box-shadow: 0 1px 0 #FFFFFF inset;
    color: #444444;
    height: 24px;
    line-height: 24px;
    padding: 7px 12px;
    text-shadow: 0 1px 0 #FFFFFF;
}
#menu ul ul li:first-child a {
    border-top-width: 0;
}
#menu ul ul a .icon {
    background-position: 50% 50%;
    background-repeat: no-repeat;
    display: block;
    float: left;
    height: 24px;
    margin-right: 10px;
    width: 24px;
}
#menu ul ul a .icon.elem0 {
    background-image: url("../images/elem.png");
}
#menu ul ul a .icon.elem1 {
    background-image: url("../images/fb.png");
}
#menu ul ul a .icon.elem2 {
    background-image: url("../images/go.png");
}
#menu ul ul a .icon.elem3 {
    background-image: url("../images/rs.png");
}
#menu ul ul a .icon.elem4 {
    background-image: url("../images/sk.png");
}
#menu ul ul a .icon.elem5 {
    background-image: url("../images/su.png");
}
/* поисковая форма */
#search {
    margin:13px 10px 0 0;
    float: right;
}
#search form {
    background: url("../images/search.gif") no-repeat scroll 5% 50% transparent;
    border: 1px solid #CCCCCC;
    border-radius: 3px 3px 3px 3px;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05) inset, 0 1px 0 #FFFFFF;
    height: 26px;
    padding: 0 25px;
    position: relative;
    width: 130px;
}
#search form:hover {
    background-color: #F9F9F9;
}
#search form input {
    color: #999999;
    font-size: 13px;
    height: 26px;
    text-shadow: 0 1px 0 #FFFFFF;
    background: none repeat scroll 0 0 transparent;
    border: medium none;
    float: left;
    outline: medium none;
    padding: 0;
    width: 100%;
}
#search form input.placeholder, #search form input:-moz-placeholder {
    color: #C4C4C4;
}
</style>





    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>

    jQuery('#frm').submit(function(e){
        e.preventDefault();
        jQuery.ajax({
            url:"{{url('form_submit')}}",
            data:jQuery('#frm').serialize(),
            type:'post',
            success:function(result){
                jQuery('#message').html(result.msg);
            }
        });
    });
    </script>