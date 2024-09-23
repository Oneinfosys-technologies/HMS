<?php
// Include the necessary PHP files and libraries
include_once('header.php');
include_once('footer.php');

// Get the patient information from the database
$patient_id = $_GET['patient_id'];
$case_id = $_GET['case_id'];

// Get the patient details from the database
$patient_details = $this->customlib->getPatientDetails($patient_id);

// Get the admission and discharge dates
$admission_date = $patient_details['admission_date'];
$discharge_date = $patient_details['discharge_date'];

// Get the patient's name, age, TPA, mobile number, guardian name, and sex
$patient_name = $patient_details['name'];
$patient_age = $patient_details['age'];
$tpa = $patient_details['tpa'];
$mobile_number = $patient_details['mobile_number'];
$guardian_name = $patient_details['guardian_name'];
$sex = $patient_details['sex'];

// Create the discharge summary page
?>

<html>
<head>
    <title>Discharge Summary</title>
    <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
</head>
<body>
    <h1>Discharge Summary</h1>
    <form>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Patient Name:</label>
                    <p><?php echo $patient_name; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Age:</label>
                    <p><?php echo $patient_age; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>TPA:</label>
                    <p><?php echo $tpa; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Mobile Number:</label>
                    <p><?php echo $mobile_number; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Guardian Name:</label>
                    <p><?php echo $guardian_name; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Sex:</label>
                    <p><?php echo $sex; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Admission Date:</label>
                    <p><?php echo $admission_date; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Discharge Date:</label>
                    <p><?php echo $discharge_date; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Discharge Summary:</label>
                    <textarea id="discharge-summary" name="discharge_summary" class="form-control ckeditor"></textarea>
                </div>
            </div>
        </div>
    </form>
    <script>
        CKEDITOR.replace('discharge-summary');
    </script>
</body>
</html>