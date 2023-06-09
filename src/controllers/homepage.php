<?php

namespace Application\Controllers\Homepage;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');

use Application\Lib\Database\DatabaseConnection;

class Homepage
{
    public function execute()
    {
        require('templates/back/homepage.php');
    }
}
