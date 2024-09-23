// discharge_summary.php
<?php
// Include necessary files and initialize variables
include_once 'header.php';
include_once 'ckeditor.php'; // Include CKEditor library

// Get patient information from database or session
$patient_data = get_patient_data($patient_id);

// Pre-populate fields with patient information
$admission_date = $patient_data['admission_date'];
$discharge_date = $patient_data['discharge_date'];
$patient_name = $patient_data['name'];
$age = $patient_data['age'];
$tpa = $patient_data['tpa'];
$mobile_number = $patient_data['mobile_number'];
$guardian_name = $patient_data['guardian_name'];
$sex = $patient_data['sex'];

// Create CKEditor instance
$ckeditor = new CKEditor();
$ckeditor->config['width'] = '100%';
$ckeditor->config['height'] = '500px';
$ckeditor->config['toolbar'] = 'Full';

// Create form with pre-populated fields and CKEditor
?>
<form>
    <label>Admission Date:</label>
    <input type="text" value="<?php echo $admission_date; ?>" readonly>
    <br>
    <label>Discharge Date:</label>
    <input type="text" value="<?php echo $discharge_date; ?>" readonly>
    <br>
    <label>Patient Name:</label>
    <input type="text" value="<?php echo $patient_name; ?>" readonly>
    <br>
    <label>Age:</label>
    <input type="text" value="<?php echo $age; ?>" readonly>
    <br>
    <label>TPA:</label>
    <input type="text" value="<?php echo $tpa; ?>" readonly>
    <br>
    <label>Mobile Number:</label>
    <input type="text" value="<?php echo $mobile_number; ?>" readonly>
    <br>
    <label>Guardian Name:</label>
    <input type="text" value="<?php echo $guardian_name; ?>" readonly>
    <br>
    <label>Sex:</label>
    <input type="text" value="<?php echo $sex; ?>" readonly>
    <br>
    <label>Discharge Summary:</label>
    <?php echo $ckeditor->editor('discharge_summary', ''); ?>
    <br>
    <input type="submit" value="Save">
</form>