<?php
function add_order($customer_id, $receiver_name, $receiver_address, $receiver_number_phone, $receiver_email, $receiver_note, $status_id, $total_price)
{
    $sql = "INSERT INTO orders(customer_id, receiver_name, receiver_address, receiver_number_phone, receiver_email, receiver_note, status_id, total_price) 
    VALUES(?,?,?,?,?,?,?,?) ";
    pdo_execute($sql,$customer_id, $receiver_name, $receiver_address, $receiver_number_phone, $receiver_email, $receiver_note, $status_id, $total_price);
}
function select_max_order_id($customer_id){
    $sql = "SELECT MAX(order_id) FROM orders WHERE customer_id = ?";
    return pdo_query_value($sql,$customer_id);
}
function select_max_order(){
    $sql = "SELECT MAX(order_id) FROM orders";
    return pdo_query_value($sql);
}
function add_order_product($order_id,$product_id,$quantity){
    $sql = "INSERT INTO order_product(order_id,product_id,quantity) VALUES(?,?,?)";
    pdo_execute($sql,$order_id,$product_id,$quantity);
}
function select_all_orders(){
    $sql = "SELECT orders.*,order_product.*,products.* FROM orders 
    JOIN order_product ON orders.order_id = order_product.order_id 
    JOIN products ON products.product_id = order_product.product_id";
    return pdo_query($sql);
}
function select_status_by_id($status_id){
    $sql = "SELECT * FROM status WHERE status_id = ?";
    return pdo_query_one($sql,$status_id);
}
function select_order_product_by_id($order_id){
    $sql = "SELECT * FROM order_product WHERE order_id = ?";
    return pdo_query_one($sql,$order_id);
}