<div class="row banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 banner-text">
                <h2>Practice Management is now simple</h2>
                <p>We know you work really hard to grow your practice. kulcare Practice Management Solution is a perfect tool for all your needs. We take care of your workflow, billing & network while you focus to deliver a great patient experience. All this and more, at Zero Cost.</p>
            </div>
            <div class="col-md-6 banner-image">
                <img src="assets/images/banner-img.png" class="img-fluid">
            </div>
        </div>
    </div>

</div><!-- end of row banner -->

<div class="row about-us">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>About Us</h2>
                <p>We know you work really hard to grow your practice. kulcare Practice Management Solution is a perfect tool for all your needs. We take care of your workflow, billing & network while you focus to deliver a great patient experience. All this and more, at Zero Cost</p>
            </div>

        </div>
    </div>

</div><!-- end of row about us -->

<div class="row appointment-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Book Your Appointment Here</h2>
                <form class="row" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="form-group col-md-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="patient_name">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Contact No</label>
                        <input type="text" class="form-control" name="patient_contact">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Date Of Birth</label>
                        <input type="date" class="form-control" name="patient_dob" />
                    </div>
                    <div class="form-group col-md-3">
                        <label>Choose your Dept</label>
                        <select class="form-control" name="department_name">
                            <option value="eye">eye</option>
                            <option value="ortho">ortho</option>
                            <option value="gastro">gastro</option>
                            <option value="general">general</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Choose your doctor</label>
                        <select class="form-control" name="doctor_name">
                            <option value="dr.eye">dr.eye</option>
                            <option value="dr.ortho">dr.ortho</option>
                            <option value="dr.gastro">dr.gastro</option>
                            <option value="dr.general">dr.general</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Appoint Date </label>
                        <input type="date" class="form-control" name="appointment_date" />
                    </div>
                    <div class="form-group col-md-3">
                        <label>Appointment Time</label>
                        <input type="time" class="form-control" name="appointment_time" />
                    </div>
                    <div class="form-group col-md-3">

                    </div>
                    <button type="submit" class="btn btn-primary btn-submit" name="submit">Submit</button>
                    <button type="submit" class="btn btn-primary btn-submit" name="submit">Submit</button>


                </form>

            </div>
        </div>
    </div><!-- end of ro appointment -->
</div><!-- end of container fluid -->