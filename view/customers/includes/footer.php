	<!-- Footer / top -->
	<footer id="topFooter">
		<div class="container" id="topFooterLinks">
			<div class="mx-auto" style="width: auto;">
				<br>
				<p class="text-black">
					<a class="mx-1 navy-blue" href="../../?controller=index&action=view">Home</a> |
					<a class="mx-1 navy-blue" href="../../?controller=car&action=carlisting">Cars</a> |
					<a class="mx-1 navy-blue" href="../../?controller=index&action=faq">FAQ</a> |
					<a class="mx-1 navy-blue" href="../../?controller=index&action=contact">Contact</a> 
				</p>
			</div>
		</div>
		<!-- End of top Footer -->
	</footer>

		<!-- Bottom footer - Copyright and stuff -->
	<footer id="botFooter">
		<div class="container">
			<hr>
			<p>Copyright &copy; <a href="https://github.com/JonAmparo">Jonathan Amparo</a></p>
			<hr style="width: 100px">
			<p>Website created by <a href="https://github.com/JonAmparo">Jonathan Amparo</a></p>
			<hr>
		</div>
		<!-- End of bottom Footer -->
	</footer>

	<!-- Scripts -->
	<div>
		<!-- Bootstrap requires jquery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- bootstrap 4 requires popper.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"></script>

		<!-- including boostrap from cdn -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous"></script>

		<!-- Functions & Plugins -->
		<script>

			$('.myCarousel').carousel({
				interval: 2000
			})

			$(document).ready(function () {
				$('[data-toggle="popover"]').popover();
			});



		</script>
	</div>

</body>

</html>