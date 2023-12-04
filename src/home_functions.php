<?php

function redirect($message, $message_type, $res_code, $back_path = "./createForm.php")
{
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $message_type;
    header('location:' . $back_path , $res_code);
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
    $sql = "SELECT users.*, COUNT(users.id) AS project_count
            FROM users
            LEFT JOIN projects ON users.id = projects.subcategory_id
                                and users.role = 'freelancer' 
            GROUP BY users.id
            ORDER BY project_count DESC
            LIMIT 10
            ;";
    $res = mysqli_query($conn, $sql);
    return $res;
}
