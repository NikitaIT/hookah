
<?php
    $pageTitle="Админ панель:Список";
    $pageRightLink="index.php?action=add";
    $pageLeftLink="../index.php";
    $pageRightLinkContent="Создать объявление";
    $path="../";
    include_once('header.php');
?>
           <div  style="background: beige">
            <!-- END Header (navbar) -->
            <table id="admin_table" class="table container">
                <tr>
                    <th>Дата</th>
                    <th>Заголовок</th>
                    <th>Цена</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($hookahs as $hookah): ?>
                    <tr>
                        <td><?=$hookah['date']?></td>
                        <td><?=hookahs_intro($hookah['title'], 80)?></td>
                        <td><?=hookahs_intro($hookah['buy'], 80)?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?=$hookah['id']?>">Редактировать</a>
                        </td>
                        <td>
                            <a href="index.php?action=delete&id=<?=$hookah['id']?>">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
            <div class="container">
            <div class="row">
            <div class="col-sm-6 col-md-6" id="chart_div" style="width: 49%; height: 500px"></div>
            <div class="col-sm-6 col-md-6" id="piechart" style="width: 49%; height: 500px;"></div>
            </div>
			</div>
</div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Название', 'Стоимость', 'Просмотры'],
            <?php foreach($hookahs as $hookah): ?>
          ['<?=$hookah['title']?>',  <?=$hookah['buy']?>,      <?=$hookah['views']?>],
          
            <?php endforeach ?>
            ['',  0,      0]
        ]);

        var options = {
          title: 'Стоимость кальяна',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Кальян', 'smoked/views'],
		<?php foreach($hookahs as $hookah): ?>
			
          ['<?=$hookah['title']?>',  <?=$hookah['smoked']/($hookah['views']?$hookah['views']:1)*100?>],
		<?php endforeach ?>
            ['',     0]
        ]);

        var options = {
          title: 'Кальян smoked/views'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<?php
    include_once('footer.php');
?>