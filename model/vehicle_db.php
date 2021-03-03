<?php
function get_vehicles($make_id, $type_id, $class_id){
    global $db;
    if(!$make_id && !$type_id && !$class_id){
        $query = 'SELECT * FROM vehicles ORDER BY vehicleID';
    } else if (!$make_id && $type_id && $class_id){
        $query = 'SELECT * FROM vehicles WHERE (vehicles.typeID = :type_id AND vehicles.classID = :class_id) ORDER BY vehicleID';
    } else if ($make_id && !$type_id && $class_id){
        $query = 'SELECT * FROM vehicles WHERE (vehicles.makeID = :make_id AND vehicles.classID = :class_id) ORDER BY vehicleID';
    } else if ($make_id && $type_id && !$class_id){
        $query = 'SELECT * FROM vehicles WHERE (vehicles.makeID = :make_id AND vehicles.typeID = :type_id) ORDER BY vehicleID';
    }
    else if ($make_id && !$type_id && !$class_id){
        $query = 'SELECT * FROM vehicles WHERE vehicles.makeID = :make_id ORDER BY vehicleID';
    }else if (!$make_id && $type_id && !$class_id){
        $query = 'SELECT * FROM vehicles WHERE vehicles.typeID = :type_id ORDER BY vehicleID';
    }else if (!$make_id && !$type_id && $class_id){
        $query = 'SELECT * FROM vehicles WHERE vehicles.classID = :class_id ORDER BY vehicleID';
    } else {
        $query = 'SELECT * FROM vehicles WHERE (vehicles.makeID = :make_id AND vehicles.typeID = :type_id AND vehicles.classID = :class_id) ORDER BY vehicleID';
    }
    $statement = $db->prepare($query);
    if($make_id){
        $statement->bindValue(':make_id', $make_id);
    }
    if($type_id){
        $statement->bindValue(':type_id', $type_id);
    }
    if($class_id){
        $statement->bindValue(':class_id', $class_id);
    }
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    return $vehicles;
}

function delete_vehicle($vehicle_id){
    global $db;
    $query = 'DELETE * FROM vehicles WHERE vehicleId = :vehicle_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':vehicle_id', $vehicle_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_vehicle($year, $model, $price, $type_id, $class_id, $make_id){
    global $db;
    $query = 'INSERT INTO vehicles (year, model, price, typeID, classID, makeID) VALUES (:year, :model, :price, :type_id, :class_id, :make_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(':year', $year);
    $statement->bindValue(':model', $model);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':type_id', $type_id);
    $statement->bindValue(':class_id', $class_id);
    $statement->bindValue(':make_id', $make_id);
    $statement->execute();
    $statement->closeCursor();
}
?>