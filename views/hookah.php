<?php
    $pageTitle="Калик";
    
    $pageRightLink="admin";
    $pageLeftLink="index.php";
    $pageRightLinkContent="Панель администратора";
    $path="";
    include_once('header.php');
    
?>
         
            <section class="s-hookahs section-overley" style="background-image: url(<?=$path?>img/hookah-bg.png); height:1200px;">
				<div class="container-none">
						<div class="carousel-hookahs-item">
						
							<div class="carousel-hookahs-content">
							<img src="<?=$hookah['image']?>" alt="Кальян" class="carousel-hookahs-img">
							<em>Доступен до: <?=$hookah['date']?></em>
                            <em>Стоимость: <?=$hookah['buy']?></em>
                            <em>Удовлетворённых клиентов: <?=$hookah['smoked']/$hookah['views']?> %</em>
                            <p> Описание: 
                                <?=$hookah['content']?>
                            </p>
							</div>
							<p><a href="views/buy.php?id=<?=$hookah['id']?>" class="button" role="button">Заказать</a>
                    			<a href="?id=<?=$hookah['id']?>&smoked=<?=$hookah['id']?>" class="button" role="button">Я удовлетворён каликом</a>
                    			<a href="#" class="button" role="button" onclick="history.back(); return false;">Назад</a></p>
						</div>
				
					</div>
					
			</section>
			
<?php
    include_once('footer.php');
?>