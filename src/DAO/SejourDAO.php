<?php
namespace stpaul\DAO;

use Doctrine\DBAL\Connection;
use stpaul\Domain\Sejour;

class SejourDAO
{
    /**
     * Database connection
     *
     * @var \Doctrine\DBAL\Connection
     */
    private $db;

    /**
     * Constructor
     *
     * @param \Doctrine\DBAL\Connection The database connection object
     */
    public function __construct($db) {
        $this->db = $db;
    }

    /**
     * Return a list of all Sejour, sorted by date (most recent first).
     *
     * @return array A list of all Sejour.
     */
    public function findAll() {
        $sql = "select * from sejour order by sejno";
        $result = $this->db->fetchAll($sql);
        
        // Convert query result to an array of domain objects
        $sejours = array();
        foreach ($result as $row) {
            $sejours[$row['SEJNO']] = $this->buildSejour($row);
        }
        return $sejours;
    }

        /**
     * Creates an Sejour object based on a DB row.
     *
     * @param array $row The DB row containing Sejour data.
     * @return \stpaul\Domain\Sejour
     */
    private function buildSejour(array $row) {
        $sejour = new Sejour();
        $sejour->setSEJNO($row['SEJNO']);
        $sejour->setSEJINTITULE($row['SEJINTITULE']);
        $sejour->setSEJMONTANTMBI($row['SEJMONTANTMBI']);
        $sejour->setSEJDTEDEB($row['SEJDTEDEB']);
        $sejour->setSEJDUREE($row['SEJDUREE']);
        return $sejour;
    }
}