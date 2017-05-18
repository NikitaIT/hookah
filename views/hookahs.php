<?php
    $pageTitle="hookah!";
    $pageRightLink="admin";
    $pageLeftLink="index.php";
    $pageRightLinkContent="Панель администратора";
$path="";
    include_once('header.php');
?>

<!-- my-content-->
		<div id="my-content">
		<?php include_once('side_bar.php'); ?>
			<!--      Галерея кальянов начало-->
			<section class="s-hookahs section-overley" style="background-image: url(<?=$path?>img/hookah-bg.png);">
				<div class="container-none">
					<div class="owl-carousel carousel-hookahs">
					<?php foreach($hookahs as $hookah): ?>
						<div class="carousel-hookahs-item">
						
							<div class="carousel-hookahs-content">
							<img src="<?=$hookah['image']?>" alt="Кальян" class="carousel-hookahs-img">
							<em>Доступен до: <?=$hookah['date']?></em>
                            <em>Скурено: <?=$hookah['views']?> штук</em>
                            <em>Цена: <?=$hookah['buy']?></em>
                            <em>Удовлетворённых клиентов: <?=$hookah['smoked']/$hookah['views']*100?> %</em>
                            <p> Описание: 
                                <?=hookahs_intro($hookah['content'])?>
                            </p>
							</div>
							<a href="hookah.php?id=<?=$hookah['id']?>" class="button" role="button">Сколько за такой?</a>

						</div>
					
					
						<?php endforeach ?>
					</div>
					</div>
			</section>
			<!--      Галерея кальянов конец-->

			<!--      Пригласительная секция начало-->
			<section class="s-welcome section-overley" style="background-image: url(img/welcome-bg.jpg);">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-4 col-sm-push-4 col-md-4 col-md-push-4">
							<h2 class="h2 text-center">Приходите! <br> с 13:00 до 1:50</h2>
							<hr class="hr">
							<h2 class="h2 text-center"><strong>СКИДКИ</strong> за репост</h2>
							<div class="social-line text-center">
								<nav class="soc">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-vk"></i></a></li>
									</ul>
								</nav>
							</div>
							<hr class="hr">
							<h2 class="h2 text-center">+7(xxx)xxx-xx-xx</h2>
						</div>
					</div>
				</div>
			</section>
			<!--      Пригласительная секция конец-->


			<section class="s-map" style="background-image: url(img/map-bg.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-md-offset-7 col-sm-6 col-sm-offset-6">
							<div class="h2"><span>Где</span> нас найти?</div>
							<div id="map"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="s-call" style="background-image: url(img/call-bg.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
							<form class="callback">
								<div class="success"><span>Спасибо за заявку!</span></div>

								<!-- Hidden Required Fields -->
								<input type="hidden" name="project_name" value="Кальянная орех">
								<input type="hidden" name="admin_email" value="фы@yandex.ru">
								<input type="hidden" name="form_subject" value="Кальянная орех">
								<!-- END Hidden Required Fields -->

								<input type="hidden" name="Страница" value="">

								<div class="callback-logo"><img src="img" alt="Кальянная орех"></div>
								<div class="formhead h2">Оставить заявку</div>
								<p>Оставьте заявку и мы перезвоним вам в течение 15 минут</p>

								<input type="text" name="Имя" placeholder="xxxXxxx@yandex.ru" required>
								<input type="text" name="Телефон" placeholder="Ваше имя..." required>
								<textarea type="text" rows="10" cols="45" name="Информация" placeholder="Важная информация..." required></textarea>
                                <select name="Услуга">
                    <option value disablet selected>2</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                                <button class="button">Отправить</button>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
</div>




<?php
    include_once('footer.php');
?>