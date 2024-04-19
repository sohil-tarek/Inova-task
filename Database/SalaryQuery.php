<?php
//query to report the second highest salary from the Employee table

$sql = "SELECT MAX(salary) AS second_highest_salary 
         FROM Employee 
            WHERE salary < (SELECT MAX(salary) FROM Employee)";