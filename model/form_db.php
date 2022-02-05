<?php

/*
 *  Author: Ayden McCall
 *  Last edited: Ayden McCall
 * Mod Log:
 * 2/2/22: Creation
 * 2/3/22: Delete function created
 * 2/4/22: Added employee selection function
 */

require('database.php');

function get_form_entries() {
    global $db;
    $query = 'SELECT * FROM contact '
            . 'WHERE 1 '
            . 'ORDER BY visit_date';
    $statement = $db->prepare($query);
    $statement->execute();
    $entries = $statement->fetchAll();
    $statement->closeCursor();

    return $entries;
}

function get_employee_forms($employee_id) {
    global $db;
    $query = 'SELECT * FROM contact '
            //. 'JOIN employee '
            //. 'ON contact.employee_id = employee.employee_id '
            . 'WHERE employee_id = :employee_id '
            . 'ORDER BY visit_date';
    $statement = $db->prepare($query);
    $statement->bindValue(':employee_id', $employee_id);
    $statement->execute();
    $entries = $statement->fetchAll();
    $statement->closeCursor();

    return $entries;
}

function delete_form_entry($entry_id) {
    global $db;
    $query = 'DELETE FROM contact '
            . 'WHERE visit_id = :entry_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":entry_id", $entry_id);
    $statement->execute();
    $statement->closeCursor();
    
}

function edit_form_entry($entry_id, $message) {
    global $db;
    $query = 'UPDATE contact '
            . 'SET visit_msg = :message '
            . 'WHERE visit_id = :entry_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":entry_id", $entry_id);
    $statement->bindValue(":message", $message);
    $statement->execute();
    $statement->closeCursor();
}