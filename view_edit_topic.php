<?php
    require "dbconnect.php";
    $query_edit_topic = "SELECT * FROM curriculum";
    if ($result_edit_topic = $mysqli->query($query_edit_topic)) {
        while ($row_edit_topic = $result_edit_topic->fetch_assoc()) {
            // --------- Topic Name ----------
            echo "<tr><td><a href=topic.php?topic=" . $row_edit_topic['topic_id'] . ">" . $row_edit_topic['topic_name'] . "</a></td>";
            // --------- Topic Lecturer ----------
            echo "<td>" . $row_edit_topic['lecturer'] . "</td>";
            // --------- Edit Button ----------
            echo"<td><button class='btn btn-primary' id='topic-" . $row_edit_topic['topic_id'] . "'>". "Edit</button>";
            // --------- Delete Button ----------
            echo"<button class='btn btn-primary delete-topic' id='topic-delete-" . 
            $row_edit_topic['topic_id'] . "'>". "Delete</button></td></tr>";
        }
    }
?>
