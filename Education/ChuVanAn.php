<?php include './EduShare/header.html'; ?>
<?php include './EduShare/body.html'; ?>

<div style="padding: 60 0 0 0;">
	<script>
		changeTitle("Chu Van An");
	</script>
	<br />
	<h1 id="ctr">Chu Van An National High School For The Gifted</h1>

	<!-- LOGO -->
	<img class="displayed" src="logo/Logo-cva.png" alt="CVA.logo">
	<br />

	<!--PARALLAX EFFECT -->
	<div class="CVAparallax"></div>
	<div>
		<!-- Description -->
		<blockquote>
			<p><em>
					...As one of three high school for gifted students in Hanoi (together with Hanoi - Amsterdam High School and Nguyen Hue Specialized High School), Chu Van An High School is highly selective in its admission process. Every year, the school receives over 3000 applications out of which only 500 to 600 would be admitted for the new class year...." -
					<a href="https://en.wikipedia.org/wiki/Chu_V%C4%83n_An_High_School_(Hanoi)" target="_blank">
						Wikipedia - </a></em></p>

		</blockquote>
	</div>

	<div class="CVAparallax"></div>
	<!--END OF PARALLAX EFFECT -->

	<br />

	<h3 id="ctr"><a href="http://c3chuvanan.edu.vn/ target=" _blank""> School's Webpage </a></h3>
	<br />
	
<!-- GG map field -->
<div id="map"></div>
<script>
		var map;
		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: {
					lat: 21.0431451,
					lng: 105.8303634
				},
				zoom: 18
			});
		}
	</script>
<!-- ////// -->
<br />
	<?php include '../share/footer.html'; ?>
</div>

</body>

</html>