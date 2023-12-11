<?php

function redirect($message, $message_type, $res_code, $back_path = "./createForm.php")
{
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $message_type;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

function get_top_categories()
{
    global $conn;
    $sql = "SELECT subcategories.*, COUNT(projects.id) AS project_count
            FROM subcategories
            LEFT JOIN projects ON subcategories.id = projects.subcategory_id
            GROUP BY subcategories.id
            ORDER BY project_count DESC
            LIMIT 10
            ;";
    $res = mysqli_query($conn, $sql);
    return $res;
}

function get_top_freelancers()
{
    global $conn;
    $sql = "SELECT users.*, COUNT(users.id) AS project_count, cities.name as city
            FROM users
            LEFT JOIN projects ON users.id = projects.subcategory_id
            LEFT JOIN cities ON cities.id = users.city_id
            WHERE users.role = 'freelancer' 
            GROUP BY users.id
            ORDER BY project_count DESC
            LIMIT 10
            ;";
    $res = mysqli_query($conn, $sql);
    return $res;
}

function get_freelancer_skills($id) {
    global $conn;
    $sql = "SELECT s.*
            FROM users u
            INNER JOIN freelancer_skills fs ON u.id = fs.freelancer_id
            INNER JOIN skills s ON fs.skill_id = s.id
            WHERE u.id = $id";
    $res = mysqli_query($conn, $sql);
    return $res;
}

function get_freelancers_count()
{
    global $conn;
    $sql = "SELECT COUNT(*) as count FROM users WHERE role = 'freelancer'";
    return mysqli_fetch_assoc(mysqli_query($conn, $sql))['count'];
}

function get_clients_count(){
    global $conn;
    $sql = "SELECT COUNT(*) as count FROM users WHERE role = 'client'";
    return mysqli_fetch_assoc(mysqli_query($conn, $sql))['count'];
}