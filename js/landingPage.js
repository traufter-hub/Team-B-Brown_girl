/*################ Carousel Header ################*/

//fetching carousel images and adding them to page
const carousel = document.getElementById("carousel");
const carouselIndicators = document.getElementById("carouselIndicators");
const carouselImages = document.getElementById("carouselImages");
$.ajax({
	url: "./carousel/getCarouselImages.php",
	method: "GET",
	dataType: "JSON",
	success: function(data) {
		let carouseHtml = "";
		let indicatorHtml = "";
		let count = 0;
		let active = "active";
		data.forEach((value) => {
			//console.log(value);
			//setting carousel Indicators
			indicatorHtml +=
				'<li data-target="#carouse' +
				count +
				'" data-slide-to="' +
				count +
				'"></li>';
			count++;

			//setting carousel Images
			carouseHtml +=
				'<div class="carousel-item ' +
				active +
				'"><a href="./ProdDescPage/?pid=' +
				value.product_id +
				'"><img class="d-block w-100" src="' +
				value.image +
				'"></a></div>';

			active = "";
		});
		carouselIndicators.innerHTML = indicatorHtml;
		carouselImages.innerHTML = carouseHtml;
		carousel.classList.remove("d-none");
		slideCarousel();
	},
});
//Code for sliding carousel(bootstrap)
function slideCarousel() {
	$(".carousel").carousel({
		interval: 4000,
	});
}
/*################ Carousel Header END ################*/

/*################ Deals Of The Day ################*/

// Silder funtiom for Deals Of The Day
function sSlide() {
	$(".customer-logos").slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 1500,
		arrows: false,
		dots: false,
		pauseOnHover: false,
		responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 4,
				},
			},
			{
				breakpoint: 520,
				settings: {
					slidesToShow: 3,
				},
			},
		],
	});
}

// The data/time we want to countdown to
var countDownDate = new Date("Feb 14 2022 23:37:52").getTime();

// Run myfunc every second
var myfunc = setInterval(function() {
	var now = new Date().getTime();
	var timeleft = countDownDate - now;

	// Calculating the days, hours, minutes and seconds left
	var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
	var hours = Math.floor(
		(timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
	);
	var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

	// Result is output to the specific element
	document.getElementById("days").innerHTML = days + "d ";
	document.getElementById("hours").innerHTML = hours + "h ";
	document.getElementById("mins").innerHTML = minutes + "m ";
	document.getElementById("secs").innerHTML = seconds + "s ";

	// Display the message when countdown is over
	if (timeleft < 0) {
		clearInterval(myfunc);
		document.getElementById("days").innerHTML = "";
		document.getElementById("hours").innerHTML = "";
		document.getElementById("mins").innerHTML = "";
		document.getElementById("secs").innerHTML = "";
		document.getElementById("left").innerHTML = "";
		document.getElementById("end").innerHTML = "TIME UP!!";
	}
}, 1000);

// funtion to get data from server
function fetchDealOfTheDay() {
	const product = document.getElementById("deal_product_container");
	let productHtml = "";
	$.ajax({
		url: "./deal-of-the-day/getDealOfTheDay.php",
		method: "GET",
		dataType: "JSON",
		success: function(data) {
			data.forEach((value) => {
				//console.log(value);
				productHtml +=
					' <a class="productDiv" href=./ProdDescPage/?pid=' +
					value.product_id +
					">" +
					'<div class="slide slideH"><br><img src="./' +
					value.image +
					'"><div  class = "Title_container"><br> <h4 contenteditable class="prodTitle" > ' +
					value.title +
					'</h4><div class="Details_container"><div class="priceTags"><h5>&#x20B9;' +
					value.price +
					"&nbsp;</h5><strike><h6>&#x20B9;" +
					value.altPrice +
					"</h6></strike></div></div></div></div>";
			});
			product.innerHTML = productHtml;
			document.querySelector("#dotdbody").classList.remove("d-none");
			sSlide();
		},
	});
}
fetchDealOfTheDay();

window.addEventListener("resize", changeIconDealOfTheDay);
changeIconDealOfTheDay();

function changeIconDealOfTheDay() {
	const w = window.innerWidth;
	const h = window.innerHeight;

	if (w > 800) {
		document.getElementById("hourglassIcon").classList.add("fa-lg");
		document.getElementById("hourglassIcon").classList.remove("fa-lg");
	} else {
		document.getElementById("hourglassIcon").classList.add("fa-lg");
		document.getElementById("hourglassIcon").classList.remove("fa-lg");
	}
}
/*################ Deals Of The Day END ################*/

/*################ Trending Style ################*/
// fetch trending product
function fetchTrending() {
	const product = document.getElementById("Tcontainer");
	let trendHtml = "";
	$.ajax({
		url: "./trending-style/getTrendingImage.php",
		method: "GET",
		dataType: "JSON",
		success: function(data) {
			let Tcount = 0;
			const wh = [
				"w-2 h-1",
				"h-1",
				"w-1 h-1",
				"w-1 h-1",
				"w-1 h-1",
				"w-1 h-1",
			];
			data.forEach((value) => {
				//console.log(value);
				trendHtml +=
					'<div class="grid-container ' +
					wh[Tcount] +
					'">' +
					'<div class="grid-item">' +
					'<div class="image"><a  class="proddivT" href=./ProdDescPage/?pid=' +
					value.product_id +
					">" +
					'<img src="./' +
					value.image +
					'"  alt="pic"></a>' +
					"</div>" +
					"</div>" +
					"</div>";
				Tcount++;
			});
			product.innerHTML = trendHtml;
		},
	});
}
fetchTrending();
/*################ Trending Style END ################*/

/*################ Best Value ################*/
// array to store product id for ratings
let prodRateArr = [];

function fetchBestValue() {
	const bestValueDiv = document.getElementById("bestValueDiv");
	let bestValueHtml = "";

	$.ajax({
		url: "./best-value/getBestValue.php",
		method: "GET",
		dataType: "JSON",
		success: function(data) {
			prodRateArr = [];
			data.forEach((value) => {
				prodRateArr.push(value.product_id);
				bestValueHtml +=
					' <div class="Cards">' +
					' <div class="image">' +
					"   <a  href=./ProdDescPage/?pid=" +
					value.product_id +
					'><img src=".' +
					value.image +
					'"></a>' +
					' <div class="overlay">' +
					'   <button onclick="addProductToWishList(this.id)" id = ' + value.product_id + ' type="button" class="btn btn-secondary" title="wishlist">' +
					'      <i class="bi bi-heart" ></i></button>' +
					' <button onclick="addProductToCart(this.id)" id = ' + value.product_id + ' type="button" class="btn btn-secondary" title="cart">' +
					'   <i class="bi bi-bag"></i></button>' +
					" </div>" +
					"</div>" +
					'<div class="Title_containerBv"><div id="' +
					value.product_id +
					'Rate" >' +
					"</div>" +
					' <h4 class="prodTitle">' +
					value.title +
					"</h4>" +
					' <div class="Details_container priceTagDiv">' +
					"   <h5>&#x20B9;" +
					value.price +
					"</h5>" + "&nbsp;<h6 class='priceStrike' ><strike>&#x20B9;" + value.altPrice + "</strike></h6>" +
					" </div>" +
					"</div>" +
					"</div>";
			});
			bestValueDiv.innerHTML = bestValueHtml;
			getRating();
		},
	});
}

fetchBestValue();

//fetch ratings of product stored in prodRateArr
function getRating() {
	const full = '<i class="fas fa-star"></i>';
	const half = '<i class="far fa-star"></i>';
	//console.log(value);
	prodRateArr.forEach((value) => {
		// console.log(value);
		$.ajax({
			url: "./getRatings/getRating.php",
			method: "POST",
			data: {
				pid: value,
			},
			dataType: "JSON",
			success: function(data) {
				let element = "";
				let count = parseInt(data) + 1;
				//console.log(data);
				for (let i = 0; i < 5; i++) {
					if (count > 1) {
						element += full;
						count--;
					} else {
						element += half;
					}
				}
				//console.log(value, data, element);
				document.getElementById(value + "Rate").innerHTML = element;
				let color = 'black';
				ch = parseInt(data) + 1;

				switch (ch) {
					case 1:
						color = 'FFFA4D';
						break;
					case 2:
						color = 'FFBC80';
						break;
					case 3:
						color = 'FF9F45';
						break;
					case 4:
						color = 'F76E11';
						break;
					case 5:
						color = 'FC4F4F';
						break;
					default:

				}
				//console.log(ch, color);
				document.getElementById(value + "Rate").style = "color:#" + color;
			},
		});
	});
}
/*################ Best Value END ################*/

/*################ Top Pics ################*/
function setMonth() {
	const months = [
		"January",
		"February",
		"March",
		"April",
		"May",
		"June",
		"July",
		"August",
		"September",
		"October",
		"November",
		"December",
	];
	const d = new Date();
	let month = months[d.getMonth()];
	document.querySelector("#tpMonth").innerHTML = month;
	//console.log(month);
}
setMonth();
let TopProdRateArr = [];

function fetchTopPics() {
	const topPics = document.getElementById("topPicTable");
	let topPicsHtml = "";

	$.ajax({
		url: "./top-pics/getTopPics.php",
		method: "GET",
		dataType: "JSON",
		success: function(data) {
			TopProdRateArr = [];
			data.forEach((value) => {
				// console.log(value.product_id);
				TopProdRateArr.push(value.product_id);
				topPicsHtml +=
					'<a  class="proddiv" href=./ProdDescPage/?pid=' +
					value.product_id +
					'><div class="cards" align="center">' +
					'<img src="./' +
					value.image +
					'" width="75%" alt="pic"><div class="ratingsBox" id="topRate' +
					value.product_id +
					'">' +
					' <i class="far fa-star"></i>' +
					' <i class="far fa-star"></i>' +
					'  <i class="far fa-star"></i>' +
					' <i class="far fa-star"></i>' +
					'  <i class="far fa-star"></i></div>' +
					'   <h4 class="prodTitle">' +
					value.title +
					' <div class="Details_container priceTagDiv">' +
					"   <h5>&#x20B9;" +
					value.price +
					"</h5>" + "&nbsp;<h6 class='priceStrike' ><strike>&#x20B9;" + value.altPrice + "</strike></h6>" +
					" </div>" +
					"</div></a>";
			});
			topPics.innerHTML = topPicsHtml;
			topPics.classList.remove("d-none");
			getTopRating();
		},
	});
}

fetchTopPics();

function getTopRating() {
	const full = '<i class="fas fa-star"></i>';
	const half = '<i class="far fa-star"></i>';
	TopProdRateArr.forEach((value) => {
		$.ajax({
			url: "./getRatings/getRating.php",
			method: "POST",
			data: {
				pid: value,
			},
			dataType: "JSON",
			success: function(data) {
				let element = "";
				let count = parseInt(data) + 1;
				//console.log(data, value);
				for (let i = 0; i < 5; i++) {
					if (count > 1) {
						element += full;
						count--;
					} else {
						element += half;
					}
				}
				//console.log()
				document.querySelector("#topRate" + value).innerHTML =
					element;
				//console.log("#topRate" + value);
				let color = 'black';
				ch = parseInt(data);

				switch (ch) {
					case 1:
						color = 'FFFA4D';
						break;
					case 2:
						color = 'FFBC80';
						break;
					case 3:
						color = 'FF9F45';
						break;
					case 4:
						color = 'F76E11';
						break;
					case 5:
						color = 'FC4F4F';
						break;
					default:

				}
				//console.log(ch, color);
				document.querySelector("#topRate" + value).style = "color:#" + color;
			},
		});
	});
}
/*################ Top Pics END ################*/

/*################ Coming Soon ################*/
const comingSoonImage = document.getElementById("comingSoonImage");
$.ajax({
	url: "./coming-soon/getComingSoon.php",
	method: "GET",
	dataType: "JSON",
	success: function(data) {
		//console.log(data[0].image);
		comingSoonImage.innerHTML = ' <img src=".' + data[0].image + '" alt="Coming Soon">'
	},
});
/*################ Coming Soon END ################*/

/*################ Footer ################*/
/*################ Footer END ################*/

//funtion to add product to whishlist
function addProductToWishList(prodId) {
	//console.log(prodId);
	$.ajax({
		url: "./wishlist/addToList.php",
		method: "POST",
		data: {
			productId: prodId
		},
		dataType: "JSON",
		success: function(data) {
			if (data.invalidProduct) {
				alert("Invalid Product")
			}
			if (data.added) {
				alert("Added to wishlist")
			}
			if (data.alreadyAdded) {
				alert("Already Added to wishlist")
			}
			//console.log(data);
		},
	});
}
//funtion to add product to cart
function addProductToCart(product_id) {
	$.ajax({
		url: "./checkout-page/php/addToCart.php",
		method: "POST",
		data: {
			productId: product_id
		},
		dataType: "JSON",
		success: function(data) {
			//console.log(data);
			alert("Product added to cart");
		},
	});
}