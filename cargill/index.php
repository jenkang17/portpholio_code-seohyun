<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>cagill</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Cabin+Sketch:400,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
@import url('https://fonts.googleapis.com/css?family=Abel');
</style>
<link rel="stylesheet" href="css/cagill.css" />
<script src="js/jquery-3.2.1.js"></script>
<script src="js/jquery.bxslider.js"></script><!-- 괄호는 실행시키라는 뜻 -->

</head>

<body>
<div class="wrap">
<header>
<a href="#" class="mobile_menu"></a>
<ul class="mobile_nav">
<li class="about depth2">
<a href="#">About Cargill</a>
<ul>
<li><a href="#">Thrive Stories</a></li>
<li><a href="#">Company Overview</a></li>
<li><a href="#">Executive Team</a></li>
<li><a href="#">Financial Information</a></li>
<li><a href="#">2017 Annual Report</a></li>
<li><a href="#">Our History</a></li>
<li><a href="#">Community Engagement</a></li>
<li><a href="#">Research &#38; Development</a></li>
<li><a href="#">Ethics &#38; Compliance</a></li>
<li><a href="#">Workplace Safety</a></li>
<li><a href="#">Strategic Sourcing</a></li>
</ul>
</li>
<li class="sustainability depth2">
<a href="#">Sustainability</a>
<ul>
<li><a href="#">Sustainable Development Goals</a></li>
<li class="depth3">
<a href="#" class="priorities">Priorities</a>
<ul>
<li><a href="#">Land Use</a></li>
<li><a href="#">Climate Change</a></li>
<li><a href="#">Water Resources</a></li>
<li><a href="#">Farmer Livelihoods</a></li>
<li><a href="#">Food Security</a></li>
<li><a href="#">Nutrition</a></li>
</ul>
</li>
<li class="depth3">
<a href="#" class="sustainable">Sustainable Supply Chains</a>
<ul>
<li><a href="#">Sustainable Aquaculture</a></li>
<li><a href="#">Sustainable Beef</a></li>
<li><a href="#">Sustainable Cocoa</a></li>
<li><a href="#">Sustainable Corn</a></li>
<li><a href="#">Sustainable Cotton</a></li>
<li><a href="#">Sustainable Palm Oil</a></li>
<li><a href="#">Sustainable Poultry</a></li>
<li><a href="#">Sustainable Soy</a></li>
</ul>
</li>
<li><a href="#">Partners</a></li>
<li><a href="#">Cargill in Action Newsletter</a></li>
</ul>
</li>
<li class="products depth2">
<a href="#">Products &#38; Services</a>
<ul>
<li><a href="#">Agriculture</a></li>
<li class="depth3">
<a href="#" class="animal">Animal Nutrition</a>
<ul>
<li><a href="#">Species</a></li>
<li><a href="#">Brands</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Innovation</a></li>
<li><a href="#">Feed4Thought</a></li>
<li><a href="#">Sustainability</a></li>
<li><a href="#">Community Enrichment</a></li>
<li><a href="#">Contact</a></li>
</ul>
</li>
<li class="depth3">
<a href="#" class="bioindustrial">Bioindustrial</a>
<ul>
<li><a href="#">Product Finder</a></li>
<li><a href="#">All Applications</a></li>
<li><a href="#">All Product Categories</a></li>
</ul>
</li>
<li><a href="#">Industrial</a></li>
<li class="depth3">
<a href="#" class="food">Food &#38; Beverage</a>
<ul>
<li><a href="#">Select a Product Offering Region</a></li>
<li><a href="#">Global Offerings</a></li>
<li><a href="#">Innovation &#38; Expertise</a></li>
</ul>
</li>
<li><a href="#">Meat &#38; Poultry</a></li>
<li><a href="#">Beauty</a></li>
<li><a href="#">Pharmaceutical</a></li>
<li><a href="#">Transportation</a></li>
<li><a href="#">Risk Management</a></li>
</ul>
</li>
<li class="news depth2">
<a href="#">News</a>
<ul>
<li><a href="#">All Press Releases</a></li>
<li><a href="#">Our Stories</a></li>
<li><a href="#">On the Issues</a></li>
<li><a href="#">Speeches</a></li>
<li><a href="#">Company Statements</a></li>
<li><a href="#">Media Contacts</a></li>
<li><a href="#">Logos, Images &#38; Video</a></li>
<li><a href="#">Fact Sheets</a></li>
<li><a href="#">Perspectives</a></li>
</ul>
</li>
<li class="careers depth2">
<a href="#">Careers</a>
<ul>
<li><a href="#">Browse All Jobs</a></li>
<li><a href="#">Professional Jobs</a></li>
<li><a href="#">Hourly Production Jobs</a></li>
<li><a href="#">Graduate / Early Career Jobs</a></li>
<li><a href="#">Career Areas</a></li>
<li><a href="#">Why Choose Cargill</a></li>
<li><a href="#">Meet Our People</a></li>
<li><a href="#">Employee Videos</a></li>
<li><a href="#">European Graduate Program</a></li>
<li><a href="#">U.S. Internships &#38; Co-ops</a></li>
<li><a href="#">U.S. Benefits &#38; Perks</a></li>
</ul>
</li>
<li class="worldwide"><a href="#">Worldwide</a></li>
<li class="stories"><a href="#">Stories</a></li>
<li class="contact"><a href="#">Contact</a></li>
</ul>
<script>
var mobile_navBtn = document.querySelector(".mobile_menu");
var mobile_navTarget = document.querySelector(".mobile_nav");
// console.log(mobile_navTarget);
mobile_navBtn.addEventListener("click", openMenu);
function openMenu() {
console.log(mobile_navTarget);
if (mobile_navTarget.classList.contains("open")) {
mobile_navTarget.classList.remove("open");
} else {
mobile_navTarget.classList.add("open");
}
}

mobile_navTarget.addEventListener("click", menuOpen);

function menuOpen(e) {

if (e.target.parentNode.classList.contains("depth2")) {
if (e.target.parentNode.classList.contains("open")) {
e.target.parentNode.classList.remove("open");
} else {
e.target.parentNode.classList.add("open");
}

}
if (e.target.parentNode.classList.contains("depth3")) {
if (e.target.parentNode.classList.contains("open")) {
e.target.parentNode.classList.remove("open");
} else {
e.target.parentNode.classList.add("open");
}

}
e.preventDefault();
}

</script>
<div class="inner clearfix">
<div class="mobile_search">
<a href="#" class="mobileSearchBT"></a>
<div>
<form class="mobileSearchBox">
<input type="text" name="q" placeholder="SEARCH">
</form>
</div>
</div>
<h1>
<a href="#"><img src="images/Cargill_R_H_black_3c.png" alt="logo cagil"></a>
</h1>
<ul class="util clearfix">
<li><a href="#">Worldwide</a></li>
<li><a href="#">Stories</a></li>
<li><a href="#">Contact</a></li>
<li class="search">
<a href="#"><img src="images/if_search_126577.png" alt="search"></a>
<form class="searchBox">
<input type="text" name="q" placeholder="SEARCH">
</form>
</li>
</ul>
</div>
<script>
var search = document.querySelector(".searchBox")
var searchBT = document.querySelector(".search > a")


searchBT.addEventListener("click", searchOpen);
function searchOpen(e) {

if (search.classList.contains("on")) {
search.classList.remove("on");
} else {
search.classList.add("on");
}
// e.target.parentNode.parentNode.querySelector(".searchBox").classList.add("on");
}

var searchMB = document.querySelector(".mobileSearchBox");
var searchBT_MB = document.querySelector(".mobileSearchBT")


searchBT_MB.addEventListener("click", searchOpen_MB);
function searchOpen_MB (e) {
console.log(e.target);

if(searchBT_MB.parentNode.querySelector("div").classList.contains("on")){
searchBT_MB.parentNode.querySelector("div").classList.remove("on");
}  else {
searchBT_MB.parentNode.querySelector("div").classList.add("on");
}
}

</script>
<nav>
<a href="#" class="logo"></a>
<ul>
<li>
<a href="#" class="btn">About Cargill</a>
<div class="about active">
<a href="#" class="subject">About Cargill</a>
<a href="#" class="close"><img src="images/if_No_984759.png" alt="close"></a>
<ul class="first">
<li><a href="#">Thrive Stories</a></li>
<li><a href="#">Company Overview</a></li>
<li><a href="#">Executive Team</a></li>
<li><a href="#">Financial Information</a></li>
</ul>
<ul>
<li><a href="#">2017 Annual Report</a></li>
<li><a href="#">Our History</a></li>
<li><a href="#">Community Engagement</a></li>
<li><a href="#">Research &#38; Development</a></li>
</ul>
<ul>
<li><a href="#">Ethics &#38; Compliance</a></li>
<li><a href="#">Workplace Safety</a></li>
<li><a href="#">Strategic Sourcing</a></li>
</ul>
</div>
</li>
<li>
<a href="#" class="btn">Sustainability</a>
<div class="sustainability active">
<a href="#" class="subject">Sustainability</a>
<a href="#" class="close"><img src="images/if_No_984759.png" alt="close"></a>
<ul class="first">
<li><a href="#">Sustainable Development<br>Goals</a></li>
<li><a href="#">Priorities</a></li>
</ul>
<ul>
<li><a href="#">Sustainable Supply Chains</a></li>
<li><a href="#">Partners</a></li>
</ul>
<ul>
<li><a href="#">Cargill in Action Newsletter</a></li>
</ul>
</div>
</li>
<li>
<a href="#" class="btn">Products &#38; Services</a>
<div class="products active">
<a href="#" class="subject">Products &#38; Services</a>
<a href="#" class="close"><img src="images/if_No_984759.png" alt="close"></a>
<ul class="first">
<li><a href="#">Agriculture</a></li>
<li><a href="#">Animal Nutrition</a></li>
<li><a href="#">Bioindustrial</a></li>
<li><a href="#">Industrial</a></li>
</ul>
<ul>
<li><a href="#">Food &#38; Beverage</a></li>
<li><a href="#">Foodservice</a></li>
<li><a href="#">Meat &#38; Poultry</a></li>
<li><a href="#">Beauty</a></li>
</ul>
<ul>
<li><a href="#">Pharmaceutical</a></li>
<li><a href="#">Transportation</a></li>
<li><a href="#">Risk Management</a></li>
</ul>
</div>
</li>
<li>
<a href="#" class="btn">News</a>
<div class="news active">
<a href="#" class="subject">News</a>
<a href="#" class="close"><img src="images/if_No_984759.png" alt="close"></a>
<ul class="first">
<li><a href="#">All Press Releases</a></li>
<li><a href="#">Our Stories</a></li>
<li><a href="#">On the Issues</a></li>
</ul>
<ul>
<li><a href="#">Speeches</a></li>
<li><a href="#">Company Statements</a></li>
<li><a href="#">Media Contacts</a></li>
</ul>
<ul>
<li><a href="#">Logos, Images &#38; Video</a></li>
<li><a href="#">Fact Sheets</a></li>
<li><a href="#">Perspectives</a></li>
</ul>
</div>
</li>
<li>
<a href="#" class="btn">Careers</a>
<div class="careers active">
<a href="#" class="subject">Careers</a>
<a href="#" class="close"><img src="images/if_No_984759.png" alt="close"></a>
<ul class="first">
<li><a href="#">Browse All Jobs</a></li>
<li><a href="#">Professional Jobs</a></li>
<li><a href="#">Hourly Production Jobs</a></li>
<li><a href="#">Graduate &#47; Early Career Jobs</a></li>
</ul>
<ul>
<li><a href="#">Career Areas</a></li>
<li><a href="#">Why Choose Cargill</a></li>
<li><a href="#">Meet Our People</a></li>
<li><a href="#">Employee Videos</a></li>
</ul>
<ul>
<li><a href="#">European Graduate Program</a></li>
<li><a href="#">U.S. Internships &#38; Co-ops</a></li>
<li><a href="#">U.S. Benefits &#38; Perks</a></li>
</ul>
</div>
</li>
</ul>
</nav>
<script>
document.addEventListener("scroll", 할일); //도큐멘트에 이벤트리스너 감지기 붙이기
var 몇번 = 0;
function 할일(){
var target = document.querySelector("html");
var menuNav = document.querySelector("nav");

var 윗면이올라간거리 = target.scrollTop;
// console.log(윗면이올라간거리 + "px 만큼 스크롤 되었습니다.");

if(윗면이올라간거리 >= 92){
menuNav.classList.add("fix");
}else if(윗면이올라간거리 < 92){
menuNav.classList.remove("fix");
}
}
</script>
<script>
var mainNavBtn = document.querySelector("nav");
var mainNavTarget = document.querySelectorAll(".btn");


mainNavBtn.addEventListener("click", openMenu);
function openMenu(e) {
if (e.target.classList.contains("btn")) {
if (e.target.classList.contains("open")) {

for (var i =0; i < mainNavTarget.length; i++) {
mainNavTarget[i].classList.remove("open");
}
e.target.classList.remove("open");
} else {
for (var i =0; i < mainNavTarget.length; i++) {
mainNavTarget[i].classList.remove("open");
}
e.target.classList.add("open");
}
}
}

var closeBT = document.querySelectorAll(".close");

for (var i = 0; i < closeBT.length; i++) {
closeBT[i].addEventListener("click", closeNav)
}

function closeNav(e) {
e.target.parentNode.parentNode.parentNode.querySelector(".btn").classList.remove("open")
}

</script>

</header> <!-- header끝 -->

<section class="visual clearfix">
<video id="video" width="100%" height="auto" src="images/cargill+ambient+1280x510+ver_07.mp4" autoplay="autoplay" muted="muted" loop="loop">
<!-- <source src="images/cargill+ambient+1280x510+ver_07.mp4" type="video/mp4" /> 비디오 여러개 넣을때 source 태그 사용-->
</video>
<div class="mobile_bg"></div>
<div class="description">
<div class="headline"><h2>Cargill is committed to helping the world <em>thrive</em></h2></div>
<div class="thrive"></div>
<div class="content">
<strong>We help people <em>thrive.</em></strong>
<span>Cargill is working to nourish the world. We're bringing together people,
ideas, and resources to deliver products, technology and ways of operating that
build successful businesses and communities.</span>
</div>
</div>
</section> <!-- visual끝 -->

<section class="more clearfix">
<div>
<div class="more_left clearfix">
<div class="image"></div>
<div class="sets">
<h3><a href="#">Cargill sets new goal to address climate change</a></h3>
<p>As our company grows, emissions will go down.</p>
<a href="#" class="more"><span>more</span></a>
</div>
</div>
<div class="more_right clearfix">
<div class="brings">
<div class="sets">
<div>
<h3><a href="#">Cargill brings food
    industry the lowest
    saturated fat, high
    oleic commercial
    canola oil</a>
</h3>
<p>Dec. 19, 2017</p>
<a href="#" class="more"><span>more</span></a>
</div>
</div>
</div>
<div class="tackling">
<div class="bgc"></div>
<div class="sets">
<div>
<h3><a href="#">Tackling deforestation with data, Cargill maps its cocoa supply chain</a></h3>
<a href="#" class="more">more</a>
</div>
</div>
</div>
<div class="reports">
<div class="bgc"></div>
<div class="sets">
<div>
<h3><a href="#">Cargill reports fiscal 2018 second-quarter results</a></h3>
<p>Jan. 03, 2018</p>
<a href="#" class="more">more</a>
</div>
</div>
</div>
</div>
<div class="new_all">
<a href="#" class="left">View all Stories</a>
<a href="#" class="right">View all Releases</a>
</div>
</div>
</section>

<section class="markets">
<div class="markets_We_Serve">
<div>
<strong>Markets We Serve</strong>
</div>
</div>
<div class="part clearfix">
<div class="food">
<a href="#" class="image">
<div>
<span>Food and Beverage</span>
</div>
</a>
<div class="sets">
<div>
<strong>Food<br>and Beverage</strong>
<a href="#"><span>Ingredients, resources, and expertise</span></a>
</div>
</div>
</div>
<div class="animal">
<a href="#" class="image">
<div>
<span>Animal Nutrition</span>
</div>
</a>
<div class="sets">
<div>
<strong>Animal<br>Nutrition</strong>
<a href="#"><span>Science- and research-based animal nutrition</span></a>
</div>
</div>
</div>
<div class="foodservice">
<a href="#" class="image">
<div>
<span>Foodservice</span>
</div>
</a>
<div class="sets">
<div>
<strong>Foodservice</strong>
<a href="#"><span>Quality brands and product innovations</span></a>
</div>
</div>
</div>
<div class="bioIndustrial">
<a href="#" class="image">
<div>
<span>BioIndustrial</span>
</div>
</a>
<div class="sets">
<div>
<strong>BioIndustrial</strong>
<a href="#"><span>Customized plant-based chemistries</span></a>
</div>
</div>
</div>
<div class="agricultural">
<a href="#" class="image">
<div>
<span>Agricultural</span>
</div>
</a>
<div class="sets">
<div>
<strong>Agricultural</strong>
<a href="#"><span>Origination, processing, marketing and distribution services</span></a>
</div>
</div>
</div>
<div class="meat">
<a href="#" class="image">
<div>
<span>Meat &#38; Poultry</span>
</div>
</a>
<div class="sets">
<div>
<strong>Meat<br>&#38; Poultry</strong>
<a href="#"><span>Beef, poultry, meats and egg products for food makers, foodservice and retailers</span></a>
</div>
</div>
</div>
<div class="energy">
<a href="#" class="image">
<div>
<span>Energy &#38; Industrial</span>
</div>
</a>
<div class="sets">
<div>
<strong>Energy<br>&#38; Industrial</strong>
<a href="#"><span>Power &#38; gas, metals, salt, and deicing applications</span></a>
</div>
</div>
</div>
<div class="price">
<a href="#" class="image">
<div>
<span>Price Risk Management</span>
</div>
</a>
<div class="sets">
<div>
<strong>Price<br>Risk Management</strong>
<a href="#"><span>Diversified risk management strategies for a range of industries</span></a>
</div>
</div>
</div>
<div class="beauty">
<a href="#" class="image">
<div>
<span>Beauty &#38; Personal Care</span>
</div>
</a>
<div class="sets">
<div>
<strong>Beauty<br>&#38; Personal Care</strong>
<a href="#"><span>Natural raw materials, nature-derived ingredients and innovation services</span></a>
</div>
</div>
</div>
<div class="pharmaceutical">
<a href="#" class="image">
<div>
<span>Pharmaceutical</span>
</div>
</a>
<div class="sets">
<div>
<strong>Pharmaceutical</strong>
<a href="#"><span>Nature-based excipients for a range of applications</span></a>
</div>
</div>
</div>
<div class="transportation">
<a href="#" class="image">
<div>
<span>Transportation and Logistics</span>
</div>
</a>
<div class="sets">
<div>
<strong>Transportation<br>and Logistics</strong>
<a href="#"><span>Solutions to manage efficiency, volatility, and cost</span></a>
</div>
</div>
</div>
</div>
<div class="view_more"><a href="#">VIEW MORE</a></div>
</section>
<script>
var partAll = document.querySelector(".part");
var viewBT = document.querySelector(".view_more");

viewBT.addEventListener("click", viewOpen)

function viewOpen(e){
e.target.parentNode.parentNode.querySelector(".part").classList.add("on");
e.target.classList.add("hide");
e.preventDefault();
}
</script>
<footer>
<div class="thrive"></div>
<div class="inner">
<ul class="social_link">
<li><a href="#" class="twiter">twiter</a></li>
<li><a href="#" class="face_book">face book</a></li>
<li><a href="#" class="instagram">instagram</a></li>
<li><a href="#" class="you_tube">you tube</a></li>
</ul>
<div class="contact">
<a href="#">Contact</a>
<a href="#">Worldwide</a>
</div>
<div class="privacy">
<a href="#">Privacy</a>
<a href="#">Business Notice</a>
</div>
<div class="website">
<a href="#">Website Terms of Use</a>
<a href="#">Purchase Order Terms</a>
</div>
<div class="license">
<span>&#169; 2018 Cargill, Incorporated. All Rights Reserved.</span>
</div>
</div>
</footer>
</div>
</body>

</html>