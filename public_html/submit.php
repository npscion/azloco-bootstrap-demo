<?php include 'header.html';
    //TODO Abstract out database connection, add real authentication.
    $connect=mysqli_connect('localhost', 'root', '', 'installfest');
    $name = $_POST['name'];
    $date = date("Y-m-d H:i:s");
    $helper_name = $_POST['helper_name'];
    $email = $_POST['email'];
    $computer_make = $_POST['computer_make'];
    $computer_model_number = $_POST['computer_model_number'];
    $memory_size = $_POST['memory_size'] . " " . $_POST['size_unit'];
    $disk_size = $_POST['disk_size'];
    $disk_free_space = $_POST['disk_free_space'];
    $backup = $_POST['backup'];
    $old_os = $_POST['old_os'];
    $requested_os = $_POST['requested_os'];
    $dual_boot = $_POST['dual_boot'];
    $updated = $_POST['updated'];
    $disk_cleanup = $_POST['disk_cleanup'];
    $disk_defrag = $_POST['disk_defrag'];
    $user_confirmation = $_POST['user_confirmation'];
    $resource_list = $_POST['resource_list'];
    $cpu_model_number = $_POST['cpu_model_number'];
	  $gpu_model_number = $_POST['gpu_model_number'];
	  $wifi = $_POST['wifi'];
	  $wifi_model_number = $_POST['wifi_model_number'];
	  $ethernet = $_POST['ethernet'];
	  $ethernet_model_number = $_POST['ethernet_model_number'];
    $installed_os = $_POST['installed_os'];
    $installed_os_version = $_POST['installed_os_version'];
    $lightweight_linux = $_POST['lightweight_linux'];
    $notes = $_POST['notes'];

    if(mysqli_connect_errno($connect))
    {
        echo 'Failed to connect';
    }

    //TODO Replace this with real validation
    if($name == null || $helper_name == null || $computer_make == null || $computer_model_number == null ||
    $memory_size == null || $disk_size == null || $disk_free_space == null || $old_os == null ||
    $cpu_model_number == null || $gpu_model_number == null || $installed_os == null ||
    $installed_os_version == null) {
        echo "Error: Please fill in all fields marked with a *<br></br>";
    } else if($wifi == 1 && $wifi_model_number == null){
        echo "Error: You must specify a wifi model number when selecting wifi.<br></br>";
    } else {
        $sql = "INSERT INTO install_catalog (name, submit_date, helper_name, email, computer_make, computer_model_number, memory_size, disk_size, disk_free_space, backup, old_os, requested_os, dual_boot, updated, disk_cleanup, disk_defrag, user_confirmation, resource_list, cpu_model_number, gpu_model_number, wifi, wifi_model_number, ethernet, ethernet_model_number, installed_os, installed_os_version, lightweight_linux, notes)
        VALUES ('$name', '$date', '$helper_name', '$email', '$computer_make', '$computer_model_number', '$memory_size', '$disk_size', '$disk_free_space', '$backup', '$old_os', '$requested_os', '$dual_boot', '$updated', '$disk_cleanup', '$disk_defrag', '$user_confirmation', '$resource_list', '$cpu_model_number', '$gpu_model_number', '$wifi', '$wifi_model_number', '$ethernet', '$ethernet_model_number', '$installed_os', '$installed_os_version', '$lightweight_linux', '$notes')";

        if ($connect->query($sql) == TRUE) {
            echo "Submission was successful<br></br>";
        } else {
            echo "Error";
            echo mysqli_errno($connect) . ": " . mysqli_error($connect) . "\n";
        }

        $connect->close();
    }
    //TODO Proper redirection.
    include 'installfest.php';
?>
