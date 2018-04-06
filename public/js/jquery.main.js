var $window = $(window);

function run()
{
	var fName = arguments[0],
		aArgs = Array.prototype.slice.call(arguments, 1);
	try {
		fName.apply(window, aArgs);
	} catch(err) {
		console.log(fName, 'Oops...');
	}
};

function gall ()
{
	var _niceScroll = $('html').getNiceScroll();

	$("a[data-colorbox]").each(function (){
		var $this = $(this);

		$this.colorbox({
			opacity:"",
			rel:$this.data('colorbox'),
			onLoad:function(){ _niceScroll.hide(); },
			onClosed:function(){ _niceScroll.show().resize(); }
			//transition:"fade"
		});
	})
};

function slider ()
{
	$('.thumbs').each(function(){
		var $this = $(this);

		$this.flexslider({
			animation: "slide",
			controlNav: false,
			prevText: "",
			nextText: "",
			smoothHeight: true,
			animationLoop: false,
			slideshow: false,
			itemWidth: 145,
			itemMargin: 2,
			minItems: 2,
			maxItems: 6,
			asNavFor: $this.data('navfor') != 'undefined' ? $this.data('navfor') : ''
		});
	});

	$('.slider').each(function(){
		var $this = $(this);

		$this.flexslider({
			animation: "slide",
			controlNav: false,
			prevText: "",
			nextText: "",
			smoothHeight: true,
			animationLoop: false,
			slideshow: false,
			sync: $this.data('sync') != 'undefined' ? $this.data('sync') : '',
			start: function(slider){

				//console.log( $('.slider').data('sync') );

				//run(gall);
			}
		});
	});
};

function tabs ()
{
	var tabs_container = $('.tabs'),
		box = tabs_container.find('.tabs-cont_item');

	tabs_container.on('click', '.tab-tog:not(.current)', function(){
		var $this = $(this);

		$this.addClass('current').siblings().removeClass('current');

		if (Modernizr.csstransitions) {
			box.eq($this.index()).addClass('visible').siblings('.tabs-cont_item').removeClass('visible');
		}
		else {
			box.eq($this.index()).fadeTo(600, 1).addClass('visible').siblings('.tabs-cont_item').fadeTo(600, 0).removeClass('visible');
		};
	});
};

function contact_map ()
{
	var maps = $('.map');
	maps.each(function() {
		var current_map = $(this);
		var latlng = new google.maps.LatLng(current_map.attr('data-longitude'), current_map.attr('data-latitude'));
		var latlngmarker = new google.maps.LatLng(current_map.attr('data-marker-longitude'), current_map.attr('data-marker-latitude'));
		var point = current_map.attr('data-marker');
		var myOptions = {
			zoom: 12,
			center: latlng,
			scrollwheel: false,
			scaleControl: false,
			disableDefaultUI: false
			//mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(current_map[0], myOptions);
		var marker = new google.maps.Marker({
			map: map,
			icon: {
				anchor: new google.maps.Point(5, 105),
				url: point
			},
			position: latlngmarker
		});
	});
}

function map_infrastructure ()
{
	var maps = $('.map-infrastructure');
	maps.each(function() {
		var current_map = $(this);
		var latlng = new google.maps.LatLng(current_map.attr('data-longitude'), current_map.attr('data-latitude'));
		var latlngmarker = new google.maps.LatLng(current_map.attr('data-marker-longitude'), current_map.attr('data-marker-latitude'));
		var point = current_map.attr('data-marker');
		var myOptions = {
			zoom: 12,
			center: latlng,
			scrollwheel: false,
			scaleControl: false,
			disableDefaultUI: false
			//mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(current_map[0], myOptions);
		var marker = new google.maps.Marker({
			map: map,
			icon: {
				size: new google.maps.Size(88, 62),
				origin: new google.maps.Point(0,0),
				anchor: new google.maps.Point(5, 62),
				url: point
			},
			position: latlngmarker
		});

		var markers = [
			{
				'icon' : 'images/map_markers/marker_3.png',
				'coordinates' : [
					['hospital', 44.141915, 39.047947, 1]
				]
			},
			{
				'icon' : 'images/map_markers/marker_4.png',
				'coordinates' : [
					['school', 44.146617, 39.03886, 1]
				]
			},
			{
				'icon' : 'images/map_markers/marker_5.png',
				'coordinates' : [
					['restaurant', 44.149098, 39.041892, 1]
				]
			},
			{
				'icon' : 'images/map_markers/marker_6.png',
				'coordinates' : [
					['shop_1', 44.104324, 39.071544, 1]
				]
			},
			{
				'icon' : 'images/map_markers/marker_7.png',
				'coordinates' : [
					['shop_2', 44.146931, 39.040877, 1]
				]
			},
			{
				'icon' : 'images/map_markers/marker_8.png',
				'coordinates' : [
					['attractions', 44.09873, 39.074833, 1]
				]
			}
		];

		for(m = 0; m < markers.length; m++) {
			setMarkers(map, markers[m].coordinates, markers[m].icon);
		}

		function setMarkers(map, locations, imageSrc){
			var image = {
				url: imageSrc,
				size: new google.maps.Size(51, 60),
				origin: new google.maps.Point(0,0),
				anchor: new google.maps.Point(19,55)
			};
			for (var i = 0; i < locations.length; i++) {
				var beach = locations[i];
				var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
				var marker = new google.maps.Marker({
					position: myLatLng,
					map: map,
					icon: image,
					animation: google.maps.Animation.DROP,
					zIndex: beach[3],
					shape:{
						coords:[0,6,6,0,16,0,25,10,26,16,13,25,8,25,0,15],
						type: 'poly'
					}
				});
				google.maps.event.addListener(marker, 'mouseover', function() {
					this.setOptions({zIndex: 10});
				});
			}
		}
	});
}

$window.load(function(){
	$("#status").fadeOut();
	$("#preloader").delay(350).fadeOut("slow");

	/* slider
	================================================== */
	run(slider);
});

$(document).ready(function(){

	var _callback_btn = $('#callback-btn'),
		_callback_form = $('#callback-form'),
		_close_form = $('#close-form'),
		_house_popup = $('#house-popup'),
		_house_popup_ttl = $('#house-popup_title'),
		_house_popup_desc = $('#house-popup_description'),
		_popup_link = $('.popup-link'),
		_top_btn = $('#to-top')
		_overlay = $('#cboxOverlay');

	$("html").niceScroll({
		//cursoropacitymin:1,
		background:"#f5f5f5",
		cursorcolor:"#f90829",
		zindex: 100,
		cursorborderradius:"",
		cursorborder:"",
		horizrailenabled: false,
		cursorfixedheight:120,
		cursorwidth:"10px",
		autohidemode: "cursor"
	});

	/* gallery
	================================================== */
	run(gall);

	/* tabs
	================================================== */
	run(tabs);

	/* contact_map
	================================================== */
	contact_map();

	/* map_infrastructure
	================================================== */
	map_infrastructure();


	_top_btn.on('click', function(e) {
		e.preventDefault();
		$('body,html').stop().animate({ scrollTop:0 } , 1500,'easeOutExpo');
	});

	$(window).scroll(function(){
		var $this = $(this);

		if ( $this.scrollTop() >= $this.height()- 50 ) {
			_top_btn.fadeIn('fast');
		} else {
			_top_btn.fadeOut('fast');
		}
	});


	$('#intro').bind('mousemove', function(e){
		_house_popup.css({'left':e.pageX,'top':e.pageY});
	});

	_popup_link.on('click', function(e) {
		e.preventDefault();
	}).on('mouseover', function(){
		var $this = $(this),
			_alt = $this.attr('alt'),
			_land = $this.data('land-area'),
			_house = $this.data('house-area');

		this.style.zIndex='10';

		_house_popup.stop().fadeIn('fast').addClass('house-popup-show');
		_house_popup_ttl.find('span').text(_alt);
		_house_popup_desc.find( 'span:first-child' ).text(_land).end().find( 'span:last-child' ).text(_house);
	}).on('mouseout', function(){

		this.style.zIndex='5';

		_house_popup.hide().removeClass('house-popup-show');;
	});

	/* Form
	================================================== */

	_callback_btn.on('click' , function(e) {
		e.preventDefault();

		_overlay.fadeTo(600,0.6);

		if (Modernizr.csstransitions) {
			_callback_form.addClass('form-visible');
		}
		else{
			_callback_form.fadeIn(600);
		};
	});

	function closeForm () {
		_overlay.delay(150).fadeOut(600);

		if (Modernizr.csstransitions) {
			_callback_form.removeClass('form-visible');
		}
		else{
			_callback_form.fadeOut(600);
		};
	}

	_close_form.on("click", closeForm);
	_overlay.bind("click", closeForm);





	$window.on("click.human", function() {

		//_overlay.fadeOut(600);
		//$overlayMessage.fadeOut(600);/

	});


	$('.form').submit(function () {
		var $this = $(this),
			$fields = $this.find('input[type="text"],textarea');

		$.ajax({
			url: 'ajax.php',
			type: 'POST',
			data: $this.serialize(),
			dataType: 'json',
			success: function(data) {
				$fields.each(function() {
					var $input = $(this);
					
					if( data.indexOf($input.attr('name')) != -1 )
						$input.addClass('error');
					else
						$input.removeClass('error');
				})

				if( data.length == 0 ) {
					_overlay.fadeIn(600);
					//$overlayMessage.fadeIn(600);
				}
			}
		});

		return false;
	});
});