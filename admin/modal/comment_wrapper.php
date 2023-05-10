<?php
include_once("../../php/database.php");
$quotation_no = $_GET['id'];
$records = mysqli_query($config, "SELECT * FROM quotation_comment, quotation, employee_info WHERE quotation.quotation_no = quotation_comment.quotation_no AND quotation_comment.employee_id = employee_info.employee_id AND quotation_comment.quotation_no = '$quotation_no'");
while ($data = mysqli_fetch_array($records)) { ?> 
    <div class="card mb-1 border border-1" style=" border-radius: 30px;">
        <div class="card-body">
            <div class="d-flex flex-start">
                <img class="rounded-circle avatar-md  me-3" src="../../uploads/profile/<?php echo $data['profile_pic'] ?>" alt="avatar"  />
                <div class="w-100">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="text-primary fw-bold mb-0">
                            <?php echo $data['first_name'] ?>  
                        </h6>
                        <p class="mb-0 h6">2 days ago</p>
                    </div>
                    <p class="text-dark h6"><?php echo $data['comment'] ?></p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row">
                            <i class="fas fa-star text-warning me-2"></i>
                            <i class="far fa-check-circle" style="color: #aaa;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
