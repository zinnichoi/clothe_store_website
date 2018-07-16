

<h1 class="news-heading"> News </h1>
<div class="news-section">
	<div class="container">
		<div class="row">
			<div class="news"> 

				<ul class="list-item ">


					<?php foreach ($post as $value) {
						?>
						
						
						<li class="col-md-3">
							
							<a href="<?= site_url('post/post/view?id=' . $value['post_id']) ?>" class="section-title" title="" >
								<img src="<?= base_url() ?>public/images/<?php echo $value['post_thumb']?>" alt="">
							</a>

						<div class="col-md-9">

							<a href="<?= site_url('post/post/view?id=' . $value['post_id']) ?>" title=""><?php echo $value['post_title']?></a>

							<p class="desc"><?php echo $value['post_desc']?></p> 
						</div>
					</li>

					<?php
				}
				?>
			</ul>
		</div>


	</div>

</div>



</body>
</html>