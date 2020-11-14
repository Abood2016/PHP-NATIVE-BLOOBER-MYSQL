<?php

//  هاد الكلاس من خلال بعمل كونكت ع الداتا بيز وبنفس الوقت بيعمل سيليكت ع جدول معين بشكل داينمك يعني بس بياخد اسم الجدول


class mysqldb
{

    function connection()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "portofolio_for_freelancer";

        return mysqli_connect($host, $username, $password, $database);
    }

    function select($table)
    {
        $sql = "select *  from `$table` ";

        $q =  mysqli_query($this->connection(), $sql);

        $portfolios = [];

        while ($res = mysqli_fetch_assoc($q)) {
            $portfolios[] = $res;
        }

        return $portfolios;
    }
}


$db = new mysqldb();
echo '<pre>';
var_dump($db->select('users'));

function selectPortfolio()
{
    $db = new mysqldb();
   $db->select('portfolio');
}
