<?php

function getUsers()
{
    return json_decode(file_get_contents(__DIR__ . '/users.json'),true);
}
?>