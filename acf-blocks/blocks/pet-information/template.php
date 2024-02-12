<?php 
    $name = get_field('pi_name');
    $age = get_field('pi_age');
    $address = get_field('pi_address');
    $petType = get_field('pi_pet_type');
    $image = get_field('pi_image');
?>
<div id="pet-information">
    <p>Name: <span><?php echo $name; ?></span></p>
    <p>Age: <span><?php echo $age; ?></span></p>
    <p>Address: <span><?php echo $address; ?></span></p>
    <p>Pet Type: <span><?php echo $petType; ?></span></p>
    <img src="<?php echo $image; ?>" alt="">
</div>