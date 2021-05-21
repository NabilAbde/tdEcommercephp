<?php
function addCategory($arrayCategories, $newCategory)
{
    array_push($arrayCategories, $newCategory);
    return $arrayCategories;
}

function addCategoryBis($newCategory)
{
    global $category;
    array_push($category, $newCategory);
    return $category;
}
