<?php

require "../../../includes/connection.php";

if (isset($_GET["search"])) {
  $search = $_GET["search"];
  $query = "SELECT p.id as p_id
                  ,p.title as title
                  ,p.description as p_description
                  ,p.duration
                  ,p.price
                  ,u.*
            FROM projects p
            INNER JOIN users u
            ON p.user_id = u.id
            WHERE title LIKE '%$search%'";

  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
      // Calculate ends_in
      $diff = strtotime($row['duration']) - strtotime("now");
      $days = floor($diff / (60 * 60 * 24));
      $hours = gmdate("H", $diff);
      $minutes = gmdate("i", $diff);
      $seconds = gmdate("s", $diff);
      $ends_in = sprintf('%02d days %02d:%02d:%02d', $days, $hours, $minutes, $seconds);

      // Proposals number
      $sql = "SELECT count(*) as num_proposals from proposals where project_id = " . $row['p_id'];
      $num_proposals = mysqli_fetch_assoc(mysqli_query($conn, $sql))['num_proposals'];

      $row['ends_in'] = $ends_in;
      $row['num_proposals'] = $num_proposals;

      $tab[] = $row;
    }
    echo json_encode($tab);
  }
}

if (isset($_GET["category_id"])) {
  $category_id = $_GET["category_id"];
  $query = "SELECT p.id as p_id
                  ,p.title as title
                  ,p.description as p_description
                  ,p.duration
                  ,p.price
                  ,u.*
                  ,c.name as category_name
            FROM projects p
            INNER JOIN users u
            ON p.user_id = u.id
            LEFT JOIN subcategories c
            ON c.id = p.subcategory_id
            WHERE p.subcategory_id = $category_id";

  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
      // Calculate ends_in
      $diff = strtotime($row['duration']) - strtotime("now");
      $days = floor($diff / (60 * 60 * 24));
      $hours = gmdate("H", $diff);
      $minutes = gmdate("i", $diff);
      $seconds = gmdate("s", $diff);
      $ends_in = sprintf('%02d days %02d:%02d:%02d', $days, $hours, $minutes, $seconds);

      // Proposals number
      $sql = "SELECT count(*) as num_proposals from proposals where project_id = " . $row['p_id'];
      $num_proposals = mysqli_fetch_assoc(mysqli_query($conn, $sql))['num_proposals'];

      $row['ends_in'] = $ends_in;
      $row['num_proposals'] = $num_proposals;

      $tab[] = $row;
    }
    echo json_encode($tab);
  }
}
