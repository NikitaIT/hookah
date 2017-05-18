<?php
    $pageTitle="Админ панель:hookah";
    $pageRightLink="";
    $pageLeftLink="../index.php";
    $pageRightLinkContent="";
    $path="../";
    include_once('header.php');
?>
            <div id="addart" class="container" style="background:green;">
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <p>
                        Название
                        <input type="text" name="title" value="<?=$hookah['title']?>" class="form-item" autofocus required>
                    </p>
                    <p>
                        Дата
                        <input type="date" name="date" value="<?=$hookah['date']?>" class="form-item" required>
                    </p>
                    <p>
                        Содержимое
                        <textarea class="form-item" name="content" required><?=$hookah['content']?></textarea>
                    </p>
                        <p>
                        Категория
<!--                        <input class="form-item" type="" name="category" value="<?=$hookah['category']?>" required>-->
                        <select name="category">
                            <option disabled>Выберите категорию</option>
                            <option value="1">1</option>
                            <option selected value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                           </select>
                        </p>
                         <p>
                        Изображение
                        <input type="text" name="image" value="<?=$hookah['image']?>" class="form-item" required>
                    </p>
                    <input type="submit" value="Сохранить" class="btn">
                </form>
            </div>
<?php
    include_once('footer.php');
?>