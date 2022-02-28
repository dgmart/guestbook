<?php

function connect()
{
    $db = getenv('GUESTBOOK_DB');
    return fopen($db, 'a+');
}

function close($handle)
{
    fclose($handle);
}

function saveVisitorInTextFile(array $visitor)
{
    $handle = connect();
    fputcsv($handle, $visitor);
    close($handle);
}
