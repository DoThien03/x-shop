<?php
function insert_danhmuc($tenloai)
{
    $sql = "insert into category(name) values('$tenloai')";
    pdo_execute($sql);
};
function delete_danhmuc($id)
{
    $sql = "delete from category where id= " . $_GET['id'];
    pdo_execute($sql);
}
function loadall()
{
    $sql = "select*from category order by name";
    $listdm = pdo_query($sql);
    return $listdm;
}
function loadone($id)
{
    $sql = "select * from category where id= " . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($tenloai, $id)
{
    $sql = "update category set name='" . $tenloai . "' where id=" . $id;
    pdo_execute($sql);
}
