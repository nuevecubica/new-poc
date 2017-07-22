<?php
$pagename = "PHP PAGINATION";
include_once('../../poc_header.php');
?>
<div class="app-holder">
    <article>
        <h2>Using LIMIT, OFFSET and COUNT</h2>
        <!--        <button class="btn orange">algo</button>-->
        <div class="spacer"></div>
        <h3>LIMIT</h3>
        <p>Maximun records to return, will correspond to $per_page</p>
        <h3>OFFSET</h3>
        <p>Records to be skipped before returning records</p>
        <p>$per_page * ($current_page - 1)</p>
        <p>Example:</p>

        <pre>
                <code class="php">
    $per_page = 10;
    $offset = $per_page * ($current_page - 1);
                </code>
            </pre>
        <table>
            <tr>
                <th> $current_page</th>
                <th> $offset</th>
                <th> records</th>
            </tr>
            <tr>
                <td>1</td>
                <td>0</td>
                <td>1-10</td>
            </tr>
            <tr>
                <td>2</td>
                <td>10</td>
                <td>11-20</td>
            </tr>
            <tr>
                <td>3</td>
                <td>20</td>
                <td>21-30</td>
            </tr>
            <tr>
                <td>4</td>
                <td>30</td>
                <td>31-40</td>
            </tr>
        </table>
        <h3>COUNT</h3>
        <p>Use to get all the objects in the table</p>
        <p>Like:  SELECT COUNT(*) FROM table_name </p>
        <pre>
            <code class="php">
    // Static function count returns the row count
    public static function count_all() {
    global $db;
    $sql = "SELECT COUNT(*) FROM ".static::$table_name;
    $result_set = $db->query($sql);
    $row = $db->fetch_array($result_set);
    return array_shift($row);
    }
            </code>
        </pre>
        <h3>CLASS PAGINATION</h3>
        <pre>
    <code class="php">
    class Pagination {

        public $current_page;
        public $per_page;
        public $total_count;

        public function __construct($page = 1, $per_page = 20, $total_count = 0) {
        $this->current_page = (int)$page;
        $this->per_page = (int)$per_page;
        $this->total_count = (int)$total_count;
        }

        public function offset() {
        return ($this->current_page - 1) * $this->per_page;
        }

        public function total_pages() {
        return ceil($this->total_count / $this->per_page);
        }

        public function prev_page() {
        return $this->current_page - 1;
        }

        public function next_page() {
        return $this->current_page + 1;
        }

        public function has_prev_page() {
        return $this->prev_page() >= 1 ? true : false;
        }

        public function has_next_page() {
        return $this->next_page() <= $this->total_pages() ? true : false;
        }

    }// END CLASS
    </code>
</pre>
        <h3>Usage</h3>
        <pre>
            <code class="php">
    // PAGINATION SETUP

    $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
    $per_page = 6;
    $total_count = Image::count_all();

    $pagination = new Pagination($page, $per_page, $total_count);

    $sql = "SELECT * FROM images ";
    $sql .= "LIMIT {$per_page} ";
    $sql .= "OFFSET {$pagination->offset()}";
    $images = Image::find_by_sql($sql);


    // NAVEGATION

    if ($pagination-&gt;total_pages() &gt; 1) {
    if ($pagination-&gt;has_prev_page()) {
        echo "&lt;a href=\"admin_images.php?page=";
        echo $pagination-&gt;prev_page();
        echo "\"&gt;&lt;div class='prev-btn'&gt;&lt;&lt;/div&gt;&lt;/a&gt;";
    }
    for($i =1; $i &lt;= $pagination-&gt;total_pages(); $i++){
        if($i==$page){
            echo "&lt;div class='pagination-numbers selected'&gt;{$i}&lt;/div&gt;";
        }else{
            echo "&lt;a href=\"admin_images.php?page={$i}\"&gt;&lt;div class='pagination-numbers'&gt;{$i}&lt;/div&gt;&lt;/a&gt;";
        }

    }
    if ($pagination-&gt;has_next_page()) {
        echo "&lt;a href=\"admin_images.php?page=";
        echo $pagination-&gt;next_page();
        echo "\"&gt;&lt;div class='next-btn'&gt;&gt;&lt;/div&gt;</a>";
    }
    }
    // HTML PHP FOREACH
    &lt;div class="row"&gt;
        &lt;?php foreach ($images as $image) { ?&gt;
            &lt;div class="image-holder col-md-4"&gt;
                &lt;a href="image_single.php?id=&lt;?php echo $image-&gt;id; ?&gt;"&gt;
                &lt;img class="thumbImage" src="&lt;?php echo $image-&gt;image_path(); ?&gt;" alt="&lt;?php echo $image-&gt;image_caption ?&gt;"&gt;
                &lt;/a&gt;
                &lt;p&gt;&lt;?php echo $image-&gt;image_caption ?&gt;&lt;/p&gt;
                &lt;span&gt;&lt;?php echo count($image-&gt;comments()); ?&gt;&lt;/span&gt;
            &lt;/div&gt;
        &lt;?php } ?&gt;
    &lt;/div&gt;

            </code>
        </pre>
    </article>
</div>
<?php include_once('../../poc_footer.php'); ?>
<script>
    $(document).ready(function () {
        $('pre code').each(function (i, block) {
            hljs.highlightBlock(block);
        });
    });
</script>