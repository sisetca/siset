
<script type="text/javascript">
	jQuery(function($) {
		$('#test1').waypoint(function() {
			$(this).toggleClass( 'rotateOut animated' );
		},
		{
			offset: '70%',
			triggerOnce: true
		});

	});

</script>

<section id="statistics" name="statistics" ></section>
<div class="main">
	<div class="statistics">
		<div class="container tim-container st">
			<div class="row">
				<h3 class="text-center">Estadisticamente hablando</h3>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="development">
						<span class="fa-stack">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-cog fa-stack-1x fa-inverse"></i>
						</span>
						<h4 id="test1" text-center >154</h4>
						<h6 text-center>Sitios Desarrollados</h6>
					</div>
				</div>
				<div class="col-md-3">
					<div class="development">
						<span class="fa-stack">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-music fa-stack-1x fa-inverse"></i>
						</span>
						<h4 text-center>20045</h4>
						<h6 text-center>Canciones escuchadas</h6>
					</div>
				</div>
				<div class="col-md-3">
					<div class="development">
						<span class="fa-stack">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-smile-o fa-stack-1x fa-inverse"></i>
						</span>
						<h4 text-center>3909</h4>
						<h6 text-center>Reuniones con casi clientes</h6>
					</div>
				</div>
				<div class="col-md-3">
					<div class="development">
						<span class="fa-stack">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-code fa-stack-1x fa-inverse"></i>
						</span>
						<h4 text-center>2345</h4>
						<h6 text-center>Lineas de código</h6>
					</div>
				</div>
			</div>
		</div><!--container tim-->
	</div>
</div>










