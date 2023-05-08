<?php
include "../../php/database.php";

$application_id = $_POST['applicationid'];
$records = mysqli_query($config, "SELECT * FROM application WHERE application_id = '$application_id'");
  while($data = mysqli_fetch_array($records)) {
?>
<form action="../../php/send-schedule.php" method="post">
    <div class="row">
        <div class="col-lg-6">
            <img src="../../assets/nar_logo.png" class="avatar-sm mx-auto d-block">
            <h4 class="text-center">Job Application</h4>
            <p class="text-muted text-center fs-6">NAR Power System Specialists Corporation <br>
                Ciannat Complex, Marcos Highway, Antipolo City, Rizal Province <br>Telephone number: (02) 551-5594 <br>email: narpowersystem@pldtdsl.net</p>

            <div class="input-group mb-1">
                <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Job Interest:</span>
                <input type="text" class="form-control" value="<?php echo $data['job_interest'] ?>" readonly>
            </div>
            <div class="input-group mb-1">
                <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Branch/Office:</span>
                <input type="text" class="form-control" value="<?php echo $data['site'] ?>" readonly>
            </div>
            <div class="input-group mb-1">
                <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Last Name:</span>
                <input type="text" class="form-control" value="<?php echo $data['last_name'] ?>" readonly>
            </div>
            <div class="input-group mb-1">
                <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">First Name:</span>
                <input type="text" class="form-control" value="<?php echo $data['first_name'] ?>" readonly>
            </div>
            <div class="input-group mb-1">
                <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Middke Name:</span>
                <input type="text" class="form-control" value="<?php echo $data['middle_name'] ?>" readonly>
            </div>
            <div class="input-group mb-1">
                <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Suffix:</span>
                <input type="text" class="form-control" value="<?php echo $data['suffix'] ?>" readonly>
            </div>
            <div class="input-group mb-1">
                <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Birt Date:</span>
                <input type="text" class="form-control" value="<?php echo $data['birth_date'] ?>" readonly>
            </div>
            <div class="input-group mb-1">
                <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Province:</span>
                <input type="text" class="form-control" value="<?php echo $data['province'] ?>" readonly>
            </div>
            <div class="input-group mb-1">
                <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">City/Municipality::</span>
                <input type="text" class="form-control" value="<?php echo $data['city'] ?>" readonly>
            </div>
            <div class="input-group mb-1">
                <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Mobile Number:</span>
                <input type="text" class="form-control" value="<?php echo $data['mobile_no'] ?>" readonly>
            </div>
            <div class="input-group mb-1">
                <span class="input-group-text col-sm-5 bg-white fw-bold border border-0 ps-5" style="color: #146dac;">Email Address::</span>
                <input type="text" class="form-control" value="<?php echo $data['email_address'] ?>" readonly>
            </div>
            <div class="d-grid ps-5 mt-4 mb-2">
                <button type="button" class="btn btn fw-bold border border-1">Preview CV/Resume</button>
            </div>

        </div>
        
        <div class="col-lg-6 border-start border-1">
            <h4 class="text-center">Set Interview Schedule</h4>
            <div class="form-group mx-3 mb-2">
                <label class="ps-1">Date</label>
                <input type="date" name="schedule_date" class="form-control">
                <input type="hidden" name="application_id" class="form-control" value="<?php echo $application_id ?>">
                <input type="hidden" name="email" class="form-control" value="<?php echo $data['email_address'] ?>">

            </div>
            <div class="form-group mx-3 mb-2">
                <label class="ps-1">Time</label>
                <div class="row">
                    <div class="col-3">
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option1" autocomplete="off" value="9:00">
                            <label class="btn btn-light btn-outline-secondary form-control" for="option1">9:00</label>
                        </div>
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option2" autocomplete="off" value="11:00">
                            <label class="btn btn-light btn-outline-secondary form-control" for="option2">11:00</label>
                        </div>
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option3" autocomplete="off" value="2:00">
                            <label class="btn btn-light btn-outline-secondary form-control" for="option3">2:00</label>
                        </div>
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option4" autocomplete="off" value="4:00">
                            <label class="btn btn-light btn-outline-secondary form-control" for="option4">4:00</label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option5" autocomplete="off" value="9:30">
                            <label class="btn btn-light btn-outline-secondary form-control" for="option5">9:30</label>
                        </div>
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option6" autocomplete="off" value="11:30">
                            <label class="btn btn-light btn-outline-secondary form-control" for="option6">11:30</label>
                        </div>
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option7" autocomplete="off" value="2:30">
                            <label class="btn btn-light btn-outline-secondary form-control" for="option7">2:30</label>
                        </div>
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option8" autocomplete="off" value="4:30">
                            <label class="btn btn-light btn-outline-secondary form-control" for="option8">4:30</label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option9" autocomplete="off" value="10:00"> 
                            <label class="btn btn-light btn-outline-secondary form-control" for="option9">10:00</label>
                        </div>
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option10" autocomplete="off" value="1:00">
                            <label class="btn btn-light btn-outline-secondary form-control" for="option10">1:00</label>
                        </div>
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option11" autocomplete="off" value="3:00">
                            <label class="btn btn-light btn-outline-secondary form-control"  for="option11">3:00</label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option13" autocomplete="off" value="10:30">
                            <label class="btn btn-light btn-outline-secondary form-control" for="option13">10:30</label>
                        </div>
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option14" autocomplete="off" value="1:30">
                            <label class="btn btn-light btn-outline-secondary form-control"  for="option14">1:30</label>
                        </div>
                        <div class="mb-2">
                            <input type="radio" class="btn-check" name="schedule_time" id="option15" autocomplete="off" value="3:30">
                            <label class="btn btn-light btn-outline-secondary form-control" for="option15">3:30</label>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="form-group mx-3 mb-2">
                <label class="ps-1">Other Instructions (Optional)</label>
                <textarea type="text" name="message" class="form-control mb-2" rows="4" required></textarea>
                <div class="mb-2">
                <input type="checkbox" class="form-check-input" />
                <label for="important" class="form-label ms-1">Important</label>
              </div>
             </div>
             <div class="d-grid mt-4 mx-3">
                <button type="submit" name="set" class="btn btn fw-bold border border-1 text-white" style="background:  #146dac;">Set Schedule</button>
                <button class="btn btn-danger fw-bold border border-1 text-white mt-2">Decline</button>
            </div>
        </div>
        
    </div>
</form>
<?php } ?>
