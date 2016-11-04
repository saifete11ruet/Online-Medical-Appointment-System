
<?php
require_once '../db_connection.php';
if (isset($_GET['value'])){
    if (!empty($_GET['value'])) {
        $val = $_GET['value'];
        $sql = "SELECT id,doc_name FROM doctors WHERE dept_id='$val' ";

        $result = mysql_query($sql);

        echo "<option >Select Doctor</option>";
        while ($row = mysql_fetch_array($result)) {

            echo "<option value='".$row['id']."' >" . $row['doc_name'] . "</option>";
        }
    }
}
?>