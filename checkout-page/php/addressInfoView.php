<?php
include '../../function.php';
$addresInfo = selectTableForUser('address')[0];
?>
<div class="row">
    <div class="col mt-lg-4 mt-2">
        <h3>Name</h3><?php echo ($addresInfo->name); ?><br>
    </div>
    <div class="col mt-lg-4 mt-2">
        <h3>Phone number</h3><?php echo ($addresInfo->mobile); ?><br>
    </div>
</div>
<div class="row">
    <div class="col mt-lg-4 mt-2">
        <h3>Pincode</h3><?php echo ($addresInfo->pincode); ?><br>
    </div>
    <div class="col mt-lg-4 mt-2">
        <h3>State</h3><?php echo ($addresInfo->state); ?><br>
    </div>
</div>
<div class="row">
    <div class="col mt-lg-4 mt-2">
        <h3>District/City</h3><?php echo ($addresInfo->city); ?><br>
    </div>
    <div class="col mt-lg-4 mt-2">
        <h3>Locality/Area/Street</h3><?php echo ($addresInfo->locality); ?><br>
    </div>
</div>
<div class="row">
    <div class="col mt-lg-4 mt-2">
        <h3>Flat no./Building Name</h3><?php echo ($addresInfo->building); ?><br>
    </div>
    <div class="col mt-lg-4 mt-2">
        <h3>Landmark</h3><?php echo ($addresInfo->landmark); ?><br>
    </div>
</div>
<div class="col my-4 mx-5">
    <button type="button" onclick="editAddress(true);" class="buttons">Edit</button>
</div>