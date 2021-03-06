## **WP_Infinite (beta)**
Create Wordpress plugin in MVC(Kind of) + CRUD in simple way.

[![GitHub version](https://d25lcipzij17d.cloudfront.net/badge.svg?id=gh&type=6&v=0.3.0&x2=0)](#)
[![WordPress](https://img.shields.io/wordpress/v/akismet.svg)]()

Arnanthachai chomphuchai<br/>
_it_531413016@hotmail.com_

First You need to know this vendor help you manage your data spread table not store in wp_posts or wp_meta.

### Requirement:
* Wordpress (of course)
* phpstorm (just recommend for autocomplete and wordpress support)
* [Composer](https://getcomposer.org/)
* [Redbean](http://www.redbeanphp.com/) >= 4 (included)
* Autoload PSR-0 (included)
* Jade or Pug (not important) For make fast and flexable UI

### Turn you back on Database
* We CREATE TABLE By class name But...
* No worry about manage table, It's automatic CREAT, ALTER table or change TYPE of columns
* Create t

It's not fully MVC, but it can make things easier, because We do same thing all the time.

I'm serious about file size, so I avoid large ORM or framework that's have a bunch of unused code.



### How to begin
1. Create your plugin index file.
2. require this vendor.
3. Ok, Ready to go.

#### Model (Regular model)
###### For make more sense I don't put php annotation yet.
**Example:** _/wp-content/plugins/my-plugin/src/MyProject/Model/Book.php_
```php
<?php
namespace MyProject\Model;

use vendor\wp_infinite\Controller\ModelController;

class Book extends ModelController
{
    protected $name;
    protected $price = 0;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
```

What if you want to custom table name? Just add property...

```php
    protected $table = 'book';
```

---

### Model In Action

Alright! You have to see these methods first.

**CRUD method**
* ->insertAction();
* ->updateAction();
* ->deleteAction();
* ->readAction();
* ->readByAction();

**Filter and Manage method**
* [::find();](https://github.com/selfclose/wp_infinite/wiki/Filter#find)
* [::findBy();](https://github.com/selfclose/wp_infinite/wiki/Filter#findBy)
* [::findOneBy();](https://github.com/selfclose/wp_infinite/wiki/Filter#findOnBy)
* [::findAll();](https://github.com/selfclose/wp_infinite/wiki/Filter#findAll)
* [::findLike();](https://github.com/selfclose/wp_infinite/wiki/Filter#findLike)
* [::count()();](https://github.com/selfclose/wp_infinite/wiki/Filter#count)
* [::countBy();](https://github.com/selfclose/wp_infinite/wiki/Filter#countBy)
* ::purge();

"->" Need to declare instance first. _(new Book())_<br/>
"::" Work both declare or not declare instance. _(Book::find(), $book::find())_

_Note:
CRUD methods return bool;<br/>
Filter methods return array;_

###### Insert
```php
$book = new \MyProject\Model\Book();
$book->setName('Harry Potter');
$book->setPrice(1200);
$book->insertAction();
```

You may notics 'insertAction();' and it's going to do couple thing
Yes, It will automatic create table, take care column type and insert record for you. thanks for readbean.


###### Read
```php
$book = new \MyProject\Model\Book();
$book->readAction(5);   //read id 5
echo $book->getName();
echo $book->getPrice();

```

**CRUD Action also return bool or id of row, So you can make condition too**
```php
$idToRead = 2;
$book = new \MyProject\Model\Book();
if ($book->readAction($idToRead)) {
    //Do stuff
} else {
    echo 'Can\'t read ID: '.$idToRead;
}

```

```php
$book = new \MyProject\Model\Book();
if ($book->deleteAction(3))
    echo "Deleted!";
else
    echo "Can't Delete";
```

**Filter return object or array of data**
###### findAll
```php
    $books = \MyProject\Model\Book::findAll();
    foreach ($books as $book) {
        echo $book->name;
    }
```

### Other Ability
* Paginate (php / jQuery with ajax)
* Ajax Provider: Jquery and AngularJS
* Some Wordpress model (Page, Post, Route)

_CONTINUE WRITE SOON..._
