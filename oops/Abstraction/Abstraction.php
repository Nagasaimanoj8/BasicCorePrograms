<?php
abstract class Bike
{
    public abstract function getCompanyName($name);
    public abstract function getPrice($price);
}

class Sports extends Bike
{
    /**
     * Function to get the Company name
     * passing name as a parameter and 
     * printing the company name
     */
    public function getCompanyName($name)
    {
        echo "Company Name:: " . $name;
    }

    /**
     * Function to get the Bike Price
     * passing the price as a parameter and 
     * printing the Bike Price
     */
    public function getPrice($price)
    {
        echo "\nBike Price:: " . $price;
    }
}  


$sports = new Sports();

$name = readline('Enter the Name of Bike Company: ');
$price = readline('Enter the Bike Price: ');
$name1 = readline('\nEnter another Bike Company');
$price1=readline('Enter the bike prize');
$sports->getCompanyName($name);
$sports->getPrice($price);
$sports->getCompanyName($name1);
$sports->getPrice($price1);

?>