<?php
namespace Intern\Model;

use Intern\ConcatTrait\NameLangTrait;
use Intern\Controller\RedBeanController;

class JobTag extends RedBeanController
{
    use NameLangTrait;

    function __construct($id = 0)
    {
        parent::__construct($id);
    }
}
