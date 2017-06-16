

	$(function() {
		$('#gallery').imagesGrid({
			images: [
			'public/imgs/1.jpg',
			'public/imgs/2.jpg',
			'public/imgs/3.jpg',
			'public/imgs/4.jpg',
			'https://unsplash.it/660/990?image=839',
			'https://unsplash.it/660/455?image=838'
			],
			align: true,
			getViewAllText: function(imgsCount) { return 'View all' }
		});

	});
