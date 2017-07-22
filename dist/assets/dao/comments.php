<?php
/**+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * Coder : ALEX VAUGHT
 * Copyright : nuevecubica 2017
 * Type : PHP CLASS
 * Decription : USER class extends DatabaseObject
 *
 *
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

require_once(SITE_DAO . 'mysqldatabase.php');

class Comment extends DatabaseObject {

    protected static $table_name = "comments";
    protected static $db_fields = array("id", 'image_id', 'created', 'author', 'body');

    public $id;
    public $image_id;
    public $created;
    public $author;
    public $body;


// FACTORY CREATE A COMMENT
    public static function make($img_id, $author = "Anonymous", $body = "") {
        if (!empty($img_id) && !empty($author) && !empty($body)) {
            $comment = new Comment();
            $comment->image_id = (int)$img_id;
            $comment->created = strftime("%Y-%m-%d %H:%M:%S", time());
            $comment->author = $author;
            $comment->body = $body;
            return $comment;
        } else {
            return false;
        }
    }

    public static function find_comments_on($img_id=0) {
        global $db;
        $sql = "SELECT * FROM ". self::$table_name;
        $sql .= " WHERE image_id=".$db->escape_value($img_id);
        $sql .= " ORDER BY created ASC";
        return self::find_by_sql($sql);
    }

}// END CLASS