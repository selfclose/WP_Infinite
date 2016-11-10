<?php
namespace Intern\Model;

use Intern\ConcatTrait\NameTrait;
use Intern\Controller\RedBeanController;

/**
 * Class Job
 * @package Intern\Model
 * @property string name
 * @property int company_id
 */
class UserJob extends RedBeanController
{
    function __construct($id = 0)
    {
        parent::__construct($id);
    }

    /**
     * @var Job
     */
    protected $job_id;


}
