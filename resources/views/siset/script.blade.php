
	<!-- jQuery 2.1.4 -->
<script src="{{ asset('/la-assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

<script src="{{ asset('/la-assets/js/jquery-ui-1.10.4.custom.min.js') }}"></script>

	<script src="{{ asset('/la-assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
	
	
	
	<script src="{{ asset('/la-assets/js/gsdk-checkbox.js') }}"></script>
	<script src="{{ asset('/la-assets/js/gsdk-radio.js') }}"></script>
	<script src="{{ asset('/la-assets/js/gsdk-bootstrapswitch.js') }}"></script>
	<script src="{{ asset('/la-assets/js/get-shit-done.js.js') }}"></script>
	<script src="{{ asset('/la-assets/js/custom.js') }}"></script>
	
    <script src="{{ asset('/la-assets/js/smoothscroll.js') }}"></script>
   
	{{--
	<script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
<script src="assets/js/gsdk-checkbox.js"></script>
<script src="assets/js/gsdk-radio.js"></script>
<script src="assets/js/gsdk-bootstrapswitch.js"></script>
<script src="assets/js/get-shit-done.js"></script>
<script src="assets/js/custom.js"></script>

	--}}  

<script type="text/javascript">
         
    $('.btn-tooltip').tooltip();
    $('.label-tooltip').tooltip();
    $('.pick-class-label').click(function(){
        var new_class = $(this).attr('new-class');  
        var old_class = $('#display-buttons').attr('data-class');
        var display_div = $('#display-buttons');
        if(display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
        }
    });
    $( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
	});
	$( "#slider-default" ).slider({
			value: 70,
			orientation: "horizontal",
			range: "min",
			animate: true
	});
	$('.carousel').carousel({
      interval: 4000
    }); 
</script>

