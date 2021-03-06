(function($) {

	let container,

		largeImg,
		allLargeImg = [],

		prevBtn,
		allPrev = [],
		nextBtn,
		allNext = [],

		thumbWrap,
		currentThumbs,
		allThumbs = [],

		currentGalItems,
		allGalItems = [],
		galItemLength = [];
		

	let prevContent = '<i class="galprev glyphicon glyphicon-chevron-left"></i>';
	let nextContent = '<i class="galnext glyphicon glyphicon-chevron-right"></i>';

	//default settings

	let defaults = {
		height: 600,
		thumbHeight: 150,
		items: 3,
		customControls: {
			prevButton: prevContent,
			nextButton: nextContent
		},
	};

	let options = {},
		respOptions = {},

		propArr = [],
		respPropArr = [];

	
	let methods = {
		init: function() {

			this.createElements();
			this.setStyles();
			this.setRespProp();

			this.setLargeImgDimensions();
			this.setThumbnailsWrapWidth();
			this.setThumbnailsDimensions();
			this.changeLargeImg();
			this.justifyImgs();
			this.prev();
			this.next();
		
			this.hzScroll();
			this.setCustomControls();
			this.responsive();
			
		},
		createElements: function() {
			container.prepend('<div class="large-image">' + 
				'</div><div class="thumbnails"></div>');
			largeImg = container.find('.large-image')
			container.css({
				'width':'100%',
				'overflow-x':'hidden',
				'outline':'none'
			});
			allLargeImg.push(container.find('.large-image'));

			container.append('<div class="controls">' + 
				'<div class="prev-button"></div>' + 
				'<div class="next-button"></div></div>');

			prevBtn = container.find('.prev-button');
			prevBtn.addClass('inactive');
			allPrev.push(prevBtn);
			nextBtn = container.find('.next-button');
			allNext.push(nextBtn);

			currentThumbs = container.find('.thumbnails');
			currentThumbs.wrap('<div class="thmb-wrap"></div>')
			currentThumbs.append(container.find('img'));
			currentThumbs.find('img')
				.wrap('<div class="gallery-item"></div>');
			allThumbs.push(currentThumbs);

			currentGalItems = container.find('.gallery-item');
			currentGalItems.eq(0).addClass('active');
			allGalItems.push(currentGalItems);
			galItemLength.push(currentGalItems.length);
			currentGalItems.each(function(elem) {
				$(this).css('background-image', 
					'url('+ $(this).find('img').attr('src') +')');
				$(this).find('img').remove();
			});

			let currentImage = currentGalItems.eq(0)
				.css('background-image');

			largeImg.css('background-image', currentImage);

			thumbWrap = $('.thmb-wrap');

		},

		setStyles: function() {
			container.css({
				'width':'100%',
				'height':'100%',
				'overflow-x':'hidden',
				'position':'relative'
			})
			.find('div').css({
				'background-position':'center',
				'background-repeat':'no-repeat'
			});

			largeImg.css('position', 'relative');

			thumbWrap.css('overflow-x', 'hidden');

			currentThumbs.css({
				'display': 'flex' || '-webkit-flex' || 
				'-moz-flex' || '-o-flex',
				'flex-flow': 'row wrap'
			});

			currentThumbs.children().css({
				'-webkit-box-sizing': 'border-box',
				'-moz-box-sizing': 'border-box',
				'box-sizing': 'border-box',
				'overflow': 'hidden',
			});
		},

		setRespProp: function() {
			for (let i = 0; i < propArr.length; i++) {
				let keys = [0];
				$.each(propArr[i], function(key, value) {
					let k = Number(key);
					if (!isNaN(k)) {
						keys.push(k);
					}
				});
				
				let last = keys.length - 1;
			
				(function resp(item) {
					if (item <= last - 1) {
						if (allLargeImg[i].width() >= 
							keys[item] && allLargeImg[i].width() < 
							keys[item + 1]) {
						options = $.extend({}, 
							respPropArr[i], 
							propArr[i][keys[item + 1]]);
						} else {
							resp(item + 1);
						}
					} else {
						options = $.extend({}, respPropArr[i]);
					}
					//
				})(0);
				
				propArr.splice(i, 1, options);
			}
			
		},

		setLargeImgDimensions: function() {
			for (let i = 0; i < propArr.length; i++) {
				allLargeImg[i].css({
					'width':'100%',
					'height':propArr[i].height
				});
			}
		},

		setThumbnailsWrapWidth: function() {
			for (let i = 0; i < propArr.length; i++) {
				allThumbs[i].width(allLargeImg[i].width() / 
					propArr[i].items * galItemLength[i]);
			}
			
		},

		setThumbnailsDimensions: function() {
			for (let i = 0; i < propArr.length; i++) {
				allGalItems[i].css({
					'width':allLargeImg[i].width() / 
					propArr[i].items,
					'height':propArr[i].thumbHeight
				});
			}
		},

		changeLargeImg: function() {
			$('.gallery-item').click(function() {

				let clickedImg = $(this).css('background-image');

				$(this).parent().parent().prev()
					.css('background-image', clickedImg);
				$(this).parent().children().removeClass('active');
				$(this).addClass("active");

				let items = $(this).parent().children();

				$(this).parent().parent().next()
					.children().removeClass('inactive');
				
				if (items.index($(this)) === 0) {
					$(this).parent().parent().next()
						.find('.prev-button')
						.addClass('inactive');
				}
				if (items.index($(this)) === 
					items.length - 1) {
					$(this).parent().parent().next()
						.find('.next-button')
						.addClass('inactive');
				}

			});

		},

		prev: function() {
			
			prevBtn.click(function() {
				
				let active = $(this).parent().prev()
					.find('.active').prev();

				let allItems = $(this).parent().prev()
					.find('.gallery-item');

				let number = $(allItems).index(active);

				if (number >= 0) {
					
					$(this).parent().prev().prev().css('background-image', active.css('background-image'));
					active.addClass('active');
					active.next().removeClass('active');

				} else {
					$(this).parent().prev().scrollLeft(0);
				}
				
				methods.setPositionOfItem.call(this, 
					active, number, allItems);
				methods.makeInactiveBtn.call(this, 
					number, allItems);
				
			});
			
		},

		next: function() {
			
			nextBtn.click(function() {

				let active = $(this).parent().prev()
					.find('.active').next();

				let allItems = $(this).parent().prev()
					.find('.gallery-item');

				let number = $(allItems).index(active);

				if (number < allItems.length) {

					$(this).parent().prev().prev()
						.css('background-image', 
							active.css('background-image'));
					active.addClass('active');
					active.prev().removeClass('active');

				} else {

					$(this).parent().prev()
						.scrollLeft(allItems.length * 
							allItems.width());
				}
			
				methods.setPositionOfItem.call(this, 
					active, number, allItems);
				methods.makeInactiveBtn.call(this, 
					number, allItems);
				
			});

		},

		setPositionOfItem: function(active, number, allItems) {
			if (active.position() != undefined 
				&& active.position().left < -5) {

					$(this).parent().prev()
						.scrollLeft((number + 1)* allItems.width() - 
						$(this).parent().parent().width());
			}

			if (active.position() != undefined 
				&& active.position().left >= 
				$(this).parent().prev().width() - 5) {

					$(this).parent().prev().scrollLeft((number) * 
						allItems.width())

			}
		},

		makeInactiveBtn: function(number, allItems) {
		
			$(this).parent().children()
				.removeClass('inactive');

			if (number > allItems.length - 2 || number < 0) {
				$(this).addClass('inactive');
			} else if (number < 1) {
				$(this).addClass('inactive');
			}
		},

		justifyImgs: function() {
			for (let i = 0; i < propArr.length; i++) {
				allLargeImg[i].css('background-size', 'cover');
				allGalItems[i].css('background-size', 'cover');
			}
			
		},
	
		hzScroll: function(el) {

			let curDown = false,
				lastClientX,
				lastClientY,
				newScrollX;

			el = thumbWrap;

			el.on('mousedown', function(e) {
				curDown = true;
				lastClientX = e.clientX;
                lastClientY = e.clientY;
                e.preventDefault();
			});

			el.on('mouseup', function() {
				curDown = false;
			});

			el.on('mousemove', function(e) {
				if (curDown) {
					let start = $(this).scrollLeft();
					newScrollX = (- lastClientX + 
						(lastClientX = e.clientX));
					$(this).scrollLeft(start - newScrollX) 
				}
			});

		},

		setCustomControls: function() {
			prevBtn.append(options.customControls.prevButton);
			nextBtn.append(options.customControls.nextButton);
		},

		responsive: function() {
			$(window).on('resize', function() {
				
				methods.setLargeImgDimensions();
				methods.setThumbnailsWrapWidth();
				methods.setThumbnailsDimensions();
				methods.setRespProp();
				
			});
			
		}
	};
	
	
	$.fn.gallery = function(params) {
		
		container = $(this);

		options = respOptions = $.extend({}, defaults, params);

		propArr.push(options);

		respPropArr.push(respOptions);
		
		methods.init();
		
		return this;
		
	};
	
})(jQuery);