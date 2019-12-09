<?php

$host = getenv('IP');
$username = ('Sean');
$password = ('Sean123@@');
$dbname = ('BugMeDb');
$conn = new PDO("mysql:host = $host; dbname = $dbname; charset = utf8mb4", $username, $password);

function sanitize($info) {
    $info = stripslashes($info);
    $info = htmlspecialchars($info);
    $info = trim($info);
    return $info;
}

$title = $_GET["title"];
$desc = $_GET["description"];
$user = $_GET["users"];
$type = $_GET["type"];
$priority = $_GET["priority"];

if ($_GET["get"] == "issues") {
    $sql = $conn ->query("SELECT * FROM Issues");    
    $results = $sql -> fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table>
        <tr>
            <th>Title</th>
            <th>Type</th>
            <th>Status</th>
            <th>Assign To</th>
            <th>Created</th> 
        </tr>
        <?php
        foreach($results as $result) {
            ?>
            <td style="color: #2bbded";><?php echo $result['id'].$result['title'];?>></td>
            <td><?php echo $result['type'];?></td>
            <td><?php echo $result['status'];?></td>
            <td><?php echo $result['assigned_to'];?></td>
            <td><?php echo $result['created'];?></td>
            </tr>
            <?php
        }
        ?>
        </table>
        <br>
        
        <?php
}

if ($_GET["get"] == "status") {
    $sql = $conn ->query("SELECT * FROM Issues where status = 'open'");    
    $results = $sql -> fetchAll(PDO::FETCH_ASSOC);
    
        ?>
        <table>
        <tr>
            <th>Title</th>
            <th>Type</th>
            <th>Status</th>
            <th>Assign To</th>
            <th>Created</th> 
        </tr>
        <?php
        foreach($results as $result) {
            ?>
            <td style="color: #2bbded";><?php echo $result['id'].$result['title'];?>></td>
            <td><?php echo $result['type'];?></td>
            <td><?php echo $result['status'];?></td>
            <td><?php echo $result['assigned_to'];?></td>
            <td><?php echo $result['created'];?></td>
            </tr>
            <?php
        }
        ?>
        </table>
        <br>
        
        <?php
}

if ($_GET["get"] == "tickets") {
    $sql = $conn -> query("SELECT * FROM Issues where created_by = 'Admin'");    
    $results = $sql -> fetchAll(PDO::FETCH_ASSOC);

        ?>
        <table>
        <tr>
            <th>Title</th>
            <th>Type</th>
            <th>Status</th>
            <th>Assign To</th>
            <th>Created</th> 
        </tr>
        <?php
        foreach($results as $result) {
            ?>
            <td style="color: #2bbded";><?php echo $result['id'].$result['title'];?>></td>
            <td><?php echo $result['type'];?></td>
            <td><?php echo $result['status'];?></td>
            <td><?php echo $result['assigned_to'];?></td>
            <td><?php echo $result['created'];?></td>
            </tr>
            <?php
        }
        ?>
        </table>
        <br>
        
        <?php
}

$validateLogin = $_POST["hiddenval"];
if ($validateLogin == "INFO2180$") {
    $loginUser = $_POST["username"];
    $loginPass = $_POST["password"];

    $check = $conn -> query ("SELECT * FROM Users WHERE email = '$loginUser");
    $passRes = $check -> fetchAll(PDO:: FETCH_ASSOC);
    foreach ($passRes as $valid) {
        if ($valid['hash'] == md5($valid['salt'] . $loginPass)) {
            return header('Location: HomePage.html');
        } 
    }
    header('Location: index.html');
}

if ($_GET["get"] == "listUsers") {

    $sql = $conn -> query("SELECT * FROM Users");    
    $results = $sql -> fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($results as $user)
    {
        ?> 
        <option><?php echo $user["firstname"];?></option>
        <?php
    }
}

?>