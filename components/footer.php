
</main>
<footer class="footer">
	<div class="container">
		<div class="logo_container">
			<a href="/" class="footer__logo">
				<img src="img/general/footer_logo.webp" alt="logo">
			</a>
		</div>
		<div class="info_container">
			<div class="delivery_container">
				<h4>Доставка</h4>
				<p>Доставляємо по місту Вижниця</p>
				<div class="phone_container">
					<img src="img/icons/phone_footer.svg" alt="phone_logo">
					<a href="tel:+380682652005">068 265 2005</a>
				</div>
			</div>
			<div class="adress_container">
				<h4>Адреса</h4>
				<a href="https://www.google.com/maps/place/%D0%9F%D1%96%D1%86%D0%B5%D1%80%D1%96%D1%8F,+GramCoffee+fast+food./@48.2477783,24.7941622,10z/data=!4m6!3m5!1s0x4736bf49de753a77:0x653f9992674c2fcd!8m2!3d48.248105!4d25.1827443!16s%2Fg%2F11gns0km4l?entry=ttu" target="_blank">вулиця Чорновола, 4 л 
					Вижниця Чернівецька область
					Україна<br/>
					59200</a>
			</div>
			<div class="time_container">
				<h4>Графік роботи</h4>
				<p class="time">пн-нд: <span>09:00–22:00</span></p>
				<div>
					<a href="https://www.instagram.com/gramcoffee_fastfood/" target="_blank"><img src="img/icons/instagram.svg" alt="instagram"></a>
					<a href="https://www.tiktok.com/@_gramcoffee_?_t=8hXuFLyKGph" target="_blank"><img src="img/icons/tiktok.svg" alt="tiktok"></a>
					<a href="https://www.facebook.com/share/r/kr7WmT1BmGUGpyb6/?mibextid=WC7FNe" target="_blank"><img src="img/icons/facebook.svg" alt="facebook"></a>
				</div>
			</div>
		</div>
	</div>
</footer>

<script defer src="https://unpkg.com/aos@2.3.1/dist/aos.js?_v=20231222161755"></script>
<script defer src="https://unpkg.com/imask?_v=20231222161755"></script>
<script defer src="https://cdn.jsdelivr.net/npm/paginationjs@2.1.5/dist/pagination.min.js?_v=20231222161755"></script>
<script defer src="https://unpkg.com/swiper/swiper-bundle.min.js?_v=20231222161755"></script>
<script defer type="module" src="js/app.js?_v=20231222161755"></script>
<script defer>

    function createRateYo(containerId, rating, starWidth, boolRead=true) {
        $("#" + containerId).rateYo({
            rating: rating,
            normalFill: "transparent",
            ratedFill: "#00B78A",
            spacing: "4px",
            readOnly: boolRead,
            halfStar: true,
            isContentEditable: false,
            starWidth: starWidth,
        });
    }

    function createProgress(containerId, progressValue) {
    var progressBar = new ProgressBar.Line("#"+containerId, {
        strokeWidth: 2,
        easing: 'easeInOut',
        duration: 1400,
        color: '#909090',
        trailColor: 'transparent',
        trailWidth: 10,
        svgStyle: { width: '100%', height: '100%' }
    });
    progressBar.animate(progressValue);
}

    createRateYo("rating", <?php echo $average_res; ?>, "24px");
    for(let i = 5; i > 0; i--){
        createRateYo(`rating_comment_${i}`, i, "10px");
    }

    createProgress("progress_five", <?php echo number_format((($count_five / $count) * 100), 1); ?> / 100)
    createProgress("progress_four", <?php echo number_format((($count_four / $count) * 100), 1); ?> / 100)
    createProgress("progress_three", <?php echo number_format((($count_three / $count) * 100), 1); ?> / 100)
    createProgress("progress_two", <?php echo number_format((($count_two / $count) * 100), 1); ?> / 100)
    createProgress("progress_one", <?php echo number_format((($count_one / $count) * 100), 1); ?> / 100)        
</script>
</body>
</html>