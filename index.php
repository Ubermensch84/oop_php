<?php

//class Article {
//    public $title;
//    public $text;
//    public function view () {
//        echo $this->title;
//    }
//}
//
//$a = new Article();
//$a->title = 'Заголовок новости';
//$a->view();
//
//$b = new Article();
//$b->title = 'Другой заголовок';
//$b->view();




/*Наследование*/

/*
class Article {
    public $title;
    public $text;
    public function view () {
        echo $this->title;
    }
}

class NewsArticle extends Article {
    public $author;
    public function view () {
        echo $this->author . ': ' . $this->title;
    }
}

$a = new NewsArticle();
$a->title = 'Пример новости';
$a->author = 'Иванов';
$a->view();
*/




/*ПОЛИМОРФИЗМ*/

//class A {
//    public function Test () {
//        echo 'Это А';
//    }
//    function Call () {
//        $this->Test();
//    }
//}
//
//class B extends A {
//    public function Test () {
//        echo 'Это В';
//    }
//}
//
//$a = new A();
//$b = new B();
//$a->Call();
//$b->Test();
//$b->Call();



/*ИНКАПСУЛЯЦИЯ*/

//class Table {
//    protected $storage;
//
//    public function putInStorage ($value) {
//        $this->storage = $value;
//    }
//
//    public function getFromStorage () {
//        return $this->storage;
//    }
//}
//
//$t = new Table();
//$t->putInStorage('TEST');
//echo $t->getFromStorage();
//var_dump($t);