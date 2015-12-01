<?php

require_once "DataObject.class.php";

class Member2 extends DataObject2 {

    protected $data = array(
        "id" => "",
        "username" => "",
        "password" => "",
        "firstName" => "",
        "lastName" => "",
        "joinDate" => "",
        "gender" => "",
        "favoriteGenre" => "",
        "emailAddress" => "",
        "otherInterests" => ""
    );

    private $_genres = array(
        "crime" => "Crime",
        "horror" => "Horror",
        "thriller" => "Thriller",
        "romance" => "Romance",
        "sciFi" => "Sci-Fi",
        "adventure" => "Adventure",
        "nonFiction" => "Non-Fiction"
    );

    public static function getMembers( $startRow, $numRows, $order ) {
        $conn = parent::connect();
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TBL_MEMBERS . " ORDER BY $order LIMIT :startRow, :numRows";

        try {
            $st = $conn->prepare( $sql );
            $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
            $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
            $st->execute();
            $members = array();
            foreach ( $st->fetchAll() as $row ) {
                $members[] = new Member2( $row );
            }
            $st = $conn->query( "SELECT found_rows() AS totalRows" );
            $row = $st->fetch();
            parent::disconnect( $conn );
            return array( $members, $row["totalRows"] );
        } catch ( PDOException $e ) {
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        }
    }

    public static function getMember( $id ) {
        $conn = parent::connect();
        $sql = "SELECT * FROM " . TBL_MEMBERS . " WHERE id = :id";

        try {
            $st = $conn->prepare( $sql );
            $st->bindValue( ":id", $id, PDO::PARAM_INT );
            $st->execute();
            $row = $st->fetch();
            parent::disconnect( $conn );
            if ( $row ) return new Member2( $row );
        } catch ( PDOException $e ) {
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        }
    }

    public function getGenderString() {
        return ( $this->data["gender"] == "f" ) ? "Female" : "Male";
    }

    public function getFavoriteGenreString() {
        return ( $this->_genres[$this->data["favoriteGenre"]] );
    }
}

?>
