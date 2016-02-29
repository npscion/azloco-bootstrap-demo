<?php include 'header.html'; ?>
<div class="container-fluid">
<form action="submit.php" method="POST">
    <div class="row">
        <div class="col-sm-6">
            <div><h3>Installation Questionnaire</h3></div>
            <div class="form-group form-group-sm">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group form-group-sm">
                <label for="helper_name">Helper Name</label>
                <input name="helper_name" type="text" class="form-control" id="helper_name" placeholder="Helper's name">
            </div>
            <div class="form-group form-group-sm">
                <label for="email">Email</label>
                <input name="email" type="text" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group form-group-sm">
                <label for="computer_make">Computer Make *</label>
                <input name="computer_make" type="text" class ="form-control" id="computer_make" placeholder="Computer brand">
            </div>
            <div class="form-group form-group-sm">
                <label for="computer_model_number">Computer Model *</label>
                <input name="computer_model_number" type="text" class ="form-control" id="computer_model_number" placeholder="Computer model number">
            </div>
            <div class="form-group form-group-sm">
                <div class="row">
                    <div class="col-xs-10">
                        <label for="memory_size">Memory Amount *</label>
                        <input name="memory_size" type="number" min=1 class ="form-control" id="memory_size" placeholder="Amount of computer memory">
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group form-group-sm">
                            <label for="size_unit">GB/MB</label>
                            <select class="form-control" name="size_unit"  id="size_unit">
                                <option>GB</option>
                                <option>MB</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label for="disk_size">Disk Size *</label>
                <input name="disk_size" type="number" min=1 class="form-control" id="disk_size" placeholder="Size of hard drive (GB)">
            </div>
            <div class="form-group form-group-sm">
                <label for="disk_free_space">Disk Free Space *</label>
                <input name="disk_free_space" type="number" min=1 class="form-control" id="disk_free_space" placeholder="Free space on hard drive (GB)">
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group form-group-sm">
                        <div class="radio">
                            <label>
                                <input type="radio" name="backup" id="no_backup" value="none" checked>
                                No Backup
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="backup" id="partial_backup" value="partial">
                                Partial Backup (Critical Files)
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="backup" id="full_backup" value="full">
                                Full Backup
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group form-group-sm">
                        <div class="checkbox">
                            <label>
                                <input type="hidden" name="disk_cleanup" value=0>
                                <input name="disk_cleanup" type="checkbox" id="disk_cleanup" value=1> Disk Cleanup
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="hidden" name="disk_defrag" value=0>
                                <input name="disk_defrag" type="checkbox" id="disk_defrag" value=1> Disk Defragmented
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label for="old_os">Current Operating System *</label>
                <input name="old_os" type="text" class ="form-control" id="old_os" placeholder="Current Operating System">
            </div>
            <div class="form-group form-group-sm">
                <label for="requested_os">Requested Linux Version *</label>
                <input name="requested_os" type="text" class ="form-control" id="requested_os" placeholder="Requested Linux Version">
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="dual_boot" id="dual_boot" value="no" checked>
                    Remove Windows
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="dual_boot" id="dual_boot" value="yes">
                    Dual Boot Windows and Linux
                </label>
            </div>
            <div>* Required Field</div>
        </div>
        <div class="col-sm-6">
            <div><h3>Installation Report</h3></div>
            <div class="form-group form-group-sm">
                <div class="row">
                    <div class="col-xs-2">
                        <div class="checkbox">
                            <label>
                                <input type="hidden" name="wifi" value=0>
                                <input name="wifi" type="checkbox" id="wifi" value=1> Wifi Installed
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-10">
                        <div class="form-group form-group-sm">
                            <input name="wifi_model_number" type="text" class="form-control" id="wifi_model_number" placeholder="Wifi Model Number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <div class="row">
                    <div class="col-xs-2">
                        <div class="checkbox">
                            <label>
                                <input type="hidden" name="ethernet" value=0>
                                <input name="ethernet" type="checkbox" id="ethernet" value=1> Ethernet Installed
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-10">
                        <div class="form-group form-group-sm">
                            <input name="ethernet_model_number" type="text" class="form-control" id="ethernet_model_number" placeholder="Ethernet Model Number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label for="cpu_model_number">CPU Model Number *</label>
                <input name="cpu_model_number" type="text" min=1 class="form-control" id="cpu_model_number" placeholder="CPU Model Number">
            </div>
            <div class="form-group form-group-sm">
                <label for="gpu_model_number">GPU Model Number *</label>
                <input name="gpu_model_number" type="text" min=1 class="form-control" id="gpu_model_number" placeholder="GPU Model Number">
            </div>
            <div class="form-group form-group-sm">
                <div class="row">
                    <div class="col-xs-6">
                        <label for="installed_os">Linux Distro Installed *</label>
                        <input name="installed_os" type="text" min=1 class="form-control" id="installed_os" placeholder="Linux Distro Installed">
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group form-group-sm">
                            <label for="installed_os_version">Version*</label>
                            <input name="installed_os_version" type="text" min=1 class="form-control" id="installed_os_version" placeholder="Linux Distro Version">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-group-sm">
              <label for="notes">Notes</label>
              <textarea name="notes" class="form-control" id="notes" rows="3"></textarea>
            </div>
            <div class="checkbox">
                <label>
                    <input type="hidden" name="lightweight_linux" value=0>
                    <input name="lightweight_linux" type="checkbox" id="lightweight_linux" value=1> Lightweight Linux
                </label>
            </div>
            <div class="checkbox">
                <label>
                  <input type="hidden" name="updated" value=0>
                  <input name="updated" type="checkbox" id="updated" value=1>Updated
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="hidden" name="resource_list" value=0>
                    <input name="resource_list" type="checkbox" id="resource_list" value=1> Resource List Provided
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="hidden" name="user_confirmation" value=0>
                    <input name="user_confirmation" type="checkbox" id="user_confirmation" value=1> User Confirmation
                </label>
            </div>
        </div>
    </div>
    <br><button type="submit" class="btn btn-primary">Submit </button>
    <a href="/search.php" class="btn btn-primary" role="button">Form Lookup</a>
</form>
