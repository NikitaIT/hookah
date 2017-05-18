<?php
    function hookahs_all($link){
    // Формируем запрос
        $query = "SELECT * FROM hookahs ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
    // Извлекаем данные
        $n = mysqli_num_rows($result);
        $hookahs = array();
        
        for ($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $hookahs[] = $row;
        }
        
        return $hookahs;
    }
    
    function hookah_get($link, $id_hookah){
        $query = sprintf("SELECT * FROM hookahs WHERE id=%d", (int)$id_hookah);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $hookah = mysqli_fetch_assoc($result);
        
        return $hookah;
    }

    function hookahs_new($link, $title, $date, $content,$category, $image){
        // Подготовка
        $title = trim($title);
        $content = trim($content);   
        $image = trim($image);   
        $category  =  (int)$category;
        // Проверка
        if ($title == '')
            return false;
        
        // Запрос
        $template_add = "INSERT INTO hookahs (title, date, content, category, smoked, image,views, buy) VALUES ('%s', '%s', '%s', '%d', '%d', '%s', '%d', '%d')";
        
        $query = sprintf($template_add, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $date),
                         mysqli_real_escape_string($link, $content),
                         $category,
                            0,
                         mysqli_real_escape_string($link, $image),
                        0,
                        0);
        
        echo $query;
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return true;
    }

    function hookahs_edit($link, $id, $title, $date, $content, $category, $image){
        // Подготовка
        $title = trim($title);
        $content = trim($content);
        $date = trim($date);
        $id = (int)$id;
        $category  =  (int)$category;
        // Проверка
        if ($title == '')
            return false;
        
        // Запрос
        $template_update = "UPDATE hookahs SET title='%s', content='%s', date='%s', category='%d', smoked='%d', image='%s',views='%d', buy='%d' WHERE id='%d'";
            
        $query = sprintf($template_update, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $content),
                         mysqli_real_escape_string($link, $date),
                         $category,
                         0,
                         mysqli_real_escape_string($link, $image),
                         0,
                         0,
                         $id);
        
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }

    function hookahs_delete($link, $id){
        $id = (int)$id;
        // Проверка
        if ($id == 0)
            return false;
        
        // Запрос
        $query = sprintf("DELETE FROM hookahs WHERE id='%d'", $id);
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }

    function hookahs_all_by_category($link,$where){
    // Формируем запрос
        $query = sprintf("SELECT * FROM hookahs WHERE category='%d' ORDER BY id DESC",$where);
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
    // Извлекаем данные
        $n = mysqli_num_rows($result);
        $hookahs = array();
        
        for ($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $hookahs[] = $row;
        }
        
        return $hookahs;
    }

    function hookahs_intro($text, $len = 100)
    {
        return mb_substr($text, 0, $len);        
    }
    function hookahs_views($link, $id,$val){
        $hookah = hookah_get($link, $id);
        // Запрос
        $template_update = "UPDATE hookahs SET views='%d' WHERE id='%d'";
            
        $query = sprintf($template_update,
                         (int)$hookah['views']+(int)$val,
                         $id);
        
        $result = mysqli_query($link, $query);
        
        //if (!result)
        //    die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }
    function hookah_buy($link, $id){
        $hookah = hookah_get($link, $id);
        // Запрос
        $template_update = "UPDATE hookahs SET buy='%d' WHERE id='%d'";
            
        $query = sprintf($template_update,
                         (int)$hookah['buy']+(int)1,
                         $id);
        
        $result = mysqli_query($link, $query);
        
        //if (!result)
        //    die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }
     function hookah_like($link, $id){
        $hookah = hookah_get($link, $id);
        // Запрос
        $template_update = "UPDATE hookahs SET smoked='%d' WHERE id='%d'";
            
        $query = sprintf($template_update,
                         (int)$hookah['smoked']+(int)1,
                         $id);
        
        $result = mysqli_query($link, $query);
        
        //if (!result)
        //    die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }
?>






































