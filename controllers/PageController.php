<?php
require_once("models/Page.php");

class PageController
{
    public function list()
    {
        $pages = Page::getAllPages();
        require "views/header.php";
        require "views/listPages.php";
        require "views/footer.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $continut = $_POST['continut'];
            $data = $_POST['data'];
            Page::create($name, $continut, $data);
            header("Location: http://localhost/mvc-project2/page/list");
        } else {
            require "views/header.php";
            require "views/addPage.php";
            require "views/footer.php";
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $continut = $_POST['continut'];
            $data = $_POST['data'];
            Page::update($id, $name, $continut, $data);
            header("Location: http://localhost/mvc-project2/page/list");
        } else {
            $page = Page::getPageById($id);
            if ($page) {
                require "views/header.php";
                require "views/editPage.php";
                require "views/footer.php";
            } else {
                echo "Page not found.";
            }
        }
    }

    public function delete($id)
    {
        Page::delete($id);
        header("Location: http://localhost/mvc-project2/page/list");
    }

    public function show($id)
    {
        $page = Page::getPageById($id);
        if ($page) {
            require "views/header.php";
            require "views/showPage.php";
            require "views/footer.php";
        } else {
            echo "Page not found.";
        }
    }

    public function home()
    {
        require "views/header.php";
        require "views/home.php";
        require "views/footer.php";
    }
}
