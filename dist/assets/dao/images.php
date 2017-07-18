<?php
/**+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * Coder : ALEX VAUGHT
 * Copyright : nuevecubica 2017
 * Type : PHP CLASS
 * Decription : IMAGE class extends DatabaseObject
 *
 *
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

require_once(SITE_DAO . 'mysqldatabase.php');

class Image extends DatabaseObject {

    protected static $table_name = "images";
    protected static $db_fields = array("image_id", "image_filename", "image_type", "image_size", "image_caption");

    public $image_id;
    public $image_filename;
    public $image_type;
    public $image_size;
    public $image_caption;
    public $errors = array();

    private $temp_path;
    protected $upload_dir = "images";

    protected $upload_errors = array(
        UPLOAD_ERR_OK => "There is no error, the file uploaded with success",
        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive in php.ini",
        UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
        UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded",
        UPLOAD_ERR_NO_FILE => "No file was uploaded",
        UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder",
        UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk.",
        UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload."
    );

    public function attach_file($file) {

        if (!$file || empty($file) || !is_array($file)) {
            $this->errors[] = "No file was uploaded";
            return false;
        } elseif ($file['error'] != 0) {
            $this->errors[] = $this->upload_errors[$file['error']];
            return false;
        } else {

            $this->temp_path = $file['tmp_name'];
            $this->image_filename = basename($file['name']);
            $this->image_type = $file['type'];
            $this->image_size = $file['size'];
            //$this->image_caption = $this['image_caption'];

            return true;

        }
    }

    public function save() {

        if (isset($this->image_id)) {
            $this->$this->update();

        } else {
            if (!empty($this->errors)) {
                return false;
            }
            if (strlen($this->image_caption) >= 255) {
                $this->errors[] = "La leyenda debe de ser menor de 255 caracteres ";
                return false;
            }

            $target_path = SITE_ROOT . $this->upload_dir . DS . $this->image_filename;

            if (file_exists($target_path)) {
                $this->errors[] = "El archivo {$this->image_filename} ya existe.";
                return false;
            }

            if (move_uploaded_file($this->temp_path, $target_path)) {

                if ($this->create()) {
                    unset($this->temp_path);

                    return true;

                }

            } else {
                $this->errors[] = "ERROR - file upload -";
                return false;
            }
        }
    }

    public function image_path() {
        return 'http://newpoc.dev/pocs/php/php-user-login-admin/' . $this->upload_dir.DS.$this->image_filename;
    }
    public function size_as_text(){
        if($this->image_size < 1024){
            return "{$this->image_size} bytes";
        }elseif($this->image_size < 1048576){
            $size_kb = round($this->image_size/1024);
            return "{$size_kb} KB";
        }else{
            $size_mb =  round($this->image_size,1);
            return "{$size_mb} MB";
        }
    }

}