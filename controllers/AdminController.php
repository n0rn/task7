<?php

include_once ROOT. '/models/News.php';

class AdminController
{

    public function actionIndex(){
        
        require_once(ROOT. '/views/admin/index.php');
        return true;

    }

    public function actionEdit(){
        
        $updateNews = News::updateNews();

        require_once(ROOT. '/views/admin/edit.php');
        return true;
    }

    public function actionNew(){

        $updateNews = News::createPost();

        require_once(ROOT. '/views/admin/new.php');
        return true;
    }

    public function actionDelete(){
        if(isset($_POST['sumbit'])) {
           News::deleteNews($id);
            header("Location: /admin/index");
        }

        require_once(ROOT . '/views/admin/delete.php');
        return true;

    }
}