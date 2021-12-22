<script src="<?= base_url()?>assets/assets/js/bundle.js?ver=2.0.0"></script>
<script src="<?= base_url()?>assets/assets/js/scripts.js?ver=2.0.0"></script>
<script src="<?= base_url()?>assets/jquery-overlay/loadingoverlay.min.js"></script>
<script>
	function imageOverlay(selector, type){
		if(selector === ""){
			if(type === 'hide'){
				setTimeout(function(){
					$('body').LoadingOverlay(type, { zIndex : 10000 });
				}, 1000);
			} else{
				$('body').LoadingOverlay(type, { zIndex : 10000 });
			}
		} else{
			if(type === 'hide'){
				setTimeout(function(){
					$(selector).LoadingOverlay(type, { zIndex : 10000 });
				}, 1000);
			} else{
				$(selector).LoadingOverlay(type, { zIndex : 10000 });
			}
		}
	}
</script>
<script>
	(function ($) {
		// custom css expression for a case-insensitive contains()
		jQuery.expr[':'].Contains = function(a,i,m){
			return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
		};

		function FilterMenu(list) {
			var input = $(".filtertxt");

			$(input).change( function () {
				var filter = $(this).val();
				//console.log(filter);
				//If search text box contains some text then apply filter list
				if(filter){
					//Add open class to parent li item
					$(list).parent().addClass('open');
					//Add class in and expand the ul item which is nested li of main ul
					$(list).addClass('in').prop('aria-expanded', 'true').slideDown();

					//Check if child list items contain the query text. Them make them active
					//$(list).find('li:Contains('+filter+')').addClass('active'); //Default is active
					//Check if any child list items doesn't contain query text. Remove the active class
					//So that they are not more highlighted
					$(list).find('li:not(:Contains('+filter+'))').removeClass('active');

					//Show any ul inside main ul which contains the text.
					$(list).find('li:Contains('+filter+')').show();
					//Hide any ul inside main ul which doesn't contains the text.
					$(list).find('li:not(:Contains('+filter+'))').hide();

					//Filter top level list items to show and hide them.
					$('#social-sidebar-menu').find('li:Contains('+filter+')').show();
					$('#social-sidebar-menu').find('li:not(:Contains('+filter+'))').hide();

				}else{
					//On query text = empty reset all classes and styles to default.
					$(list).parent().removeClass('open');
					$(list).removeClass('in').prop('aria-expanded', 'false').slideUp();
					$(list).find('li').removeClass('active');
					$('#social-sidebar-menu').find('li').show();
				}
			})
				.keyup( function () {
					$(this).change();
				});
		}

		//ondomready
		$(function () {
			FilterMenu($("#social-sidebar-menu ul"));
		});
	}(jQuery));
</script>
