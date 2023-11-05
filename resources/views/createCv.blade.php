<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>BUILD YOUR CV</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div style="background-color: rgba(128, 128, 128, 1)" class="form col-9  mt-5 rounded p-3">

                <form method="POST" action="/saveCv" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="profile-image">Profile Image</label>
                        <input type="file" class="form-control" name="profile_image" required>
                    </div>

                    <div class="mb-3">
                        <label for="Firstame" class="form-label"> First Name</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" required>

                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label"> Last Name</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" required>

                    </div>
                    <div class="mb-3">
                        <label for="designation" class="form-label"> Designation </label>
                        <input type="text" name="designation" class="form-control" id="designation" required>

                    </div>
                    <div class="mb-3">
                        <label for="mobileNumber" class="form-label"> Phone Number</label>
                        <input type="number" class="form-control" id="mobileNumber" name="phone" required>

                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">

                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label"> Address </label>
                        <input type="text" name="address" class="form-control" id="address" required>

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Personal Webiste</label>
                        <input type="text" name="website" class="form-control" id="website">

                    </div>


                    <div class="mb-3">

                        <label for="careerObjective" class="form-label">Career Objective</label>
                        <textarea name="career_objective" class="form-control" id="careerObjective" cols="30" rows="10"></textarea>

                    </div>

                    <div class="">

                        <label class="form-label" for="Skills"> Skills</label>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="skill1" name="skills[]" value="Wireframing">
                            <label class="form-check-label" for="skill1">Wireframing</label>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="skill2" name="skills[]" value="DNS management">
                            <label class="form-check-label" for="skill2">DNS management</label>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="skill3" name="skills[]" value="Testing, debugging">
                            <label class="form-check-label" for="skill3">Testing, debugging</label>
                        </div>

                       
                    </div>

                    <div class="mb-3">
                        <label for="mobileNumber" class="form-label"> Secondary School</label>
                        <input type="text" class="form-control" id="schoolName" name="secondary_school_name" required>
                        <label for="startingYear" class="form-label"> From</label>
                        <input type="number" class="form-control" id="startingYear" name="s_school_from" required>
                        <label for="EndingYear" class="form-label"> TO</label>
                        <input type="number" class="form-control" id="endingYear" name="s_school_to" required>

                    </div>
                    <div class="mb-3">
                        <label for="mobileNumber" class="form-label"> Bachelor's Degree</label>
                        <input type="text" class="form-control" id="universityName" name="bachelors_degree" required>
                        <label for="ustartingYear" class="form-label"> From</label>
                        <input type="number" class="form-control" id="ustartingYear" name="b_degree_from" required>
                        <label for="uendingYear" class="form-label"> TO</label>
                        <input type="number" class="form-control" id="uendingYear" name="b_degree_to" required>

                    </div>
                    <div class="mb-3">
                        <label for="mobileNumber" class="form-label"> Experience</label> <br><br>
                        <label for="company" class="form-label"> Company </label>
                        <input type="text" class="form-control" id="companyName" placeholder="companyName" name="company1_name" required>
                        <label for="jobtitle" class="form-label"> Job Title </label>
                        <input type="text" class="form-control" id="jobtitle" placeholder="Jobtitle" name="job1_title" required>
                        <label for="cstartingYear" class="form-label"> From</label>
                        <input type="number" class="form-control" id="cstartingYear" name="company1_from" required>
                        <label for="EndingYear" class="form-label"> TO</label>
                        <input type="number" class="form-control" id="cendingYear" name="company1_to" required>
                        <label for="responsibilities" class="form-label"> Responsibilities </label>
                        <textarea name="c1_responsibilities" class="form-control" id="responsibilities" cols="30" rows="10"></textarea>
                        <br><br><label for="company" class="form-label"> Company </label>
                        <input type="text" class="form-control" id="companyName" placeholder="companyName" name="company2_name" required>
                        <label for="jobtitle" class="form-label"> Job Title </label>
                        <input type="text" class="form-control" id="jobtitle" placeholder="Jobtitle" name="job2_title" required>
                        <label for="cstartingYear" class="form-label"> From</label>
                        <input type="number" class="form-control" id="cstartingYear" name="company2_from" required>
                        <label for="EndingYear" class="form-label"> TO</label>
                        <input type="number" class="form-control" id="cendingYear" name="company2_to" required>
                        <label for="responsibilities" class="form-label"> Responsibilities </label>
                        <textarea name="c2_responsibilities" class="form-control" id="responsibilities" cols="30" rows="10"></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary mt-5" value="SUBMIT">
                </form>

            </div>
        </div>
    </div>

</body>

</html>