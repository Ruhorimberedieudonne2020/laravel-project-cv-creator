<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV|Home</title>
</head>

<body style="font-family:'Courier New', Courier, monospace; font-size:24px;">
    <div class="container bg-white">

        <div class="row ">
            <div style="background-color: rgba(128, 128, 128, 0.9)" class="col-12 ">
                <div>
                    @foreach ($data as $cvdata)
                    <h1 class="p-3">{{ $cvdata->firstname }}
                        <b>{{ $cvdata->lastname }}</b>
                    </h1>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h3>{{ $cvdata->designation}}</h3>

                    </div>
                    <div>

                        <img class="rounded-circle float-right mx-0" src="{{ asset('storage/images/' . $cvdata->profile_image) }}" alt="profile Image" width="200" height="200">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex bg-secondary mr-0 mrl-0 justify-content-between">
            <div class="col-4 left-section">
                <div class="p-3">
                    <p>{{ $cvdata->phone }}</p>
                    <p>{{ $cvdata->email }}</p>
                    <p>{{ $cvdata->address }}</p>
                    <p> {{ $cvdata->website }}</p>

                    <hr>

                </div>
                <div class="p-3">
                    <div class="pt-3 pb-3"> <b>
                            <h1>Skills</h1>
                        </b></div>
                    <ul>
                        @foreach( $cvdata->skillsArray as $skill)
                        <li>{{ $skill }}</li>
                        @endforeach
                    </ul>

                    <hr>

                </div>

                <div class="p-3">
                    <div class="pt-3 pb-3"> <b>
                            <h1>Education</h1>
                        </b></div>

                    <div class="pt-3 pb-3 ">
                        <b>
                            <h3> Secodary School </h3>

                        </b>
                    </div>
                    <p> {{ $cvdata->secondary_school_name }}</p>
                    <p>{{ $cvdata->s_school_from }}- {{ $cvdata->s_school_to}}</p>
                    <div class="pt-3 pb-3 ">
                        <b>
                            <h3> Bachelors </h3>

                        </b>
                    </div>
                    <p> {{ $cvdata->bachelors_degree }}</p>
                    <p>{{ $cvdata->b_degree_from }} - {{ $cvdata->b_degree_to }}</p>
                </div>
                <hr>

            </div>


            <div class="col-8 py-3 right-section border border-left-5 border-right-0  border-bottom-0 border-top-0">
                <div class="p-3">
                    <div class="pb-3 "> <b>
                            <h1>Profile</h1>
                        </b></div>
                    <p class="mt-auto"> {{ $cvdata->career_objective}}</p>

                    <hr>

                </div>
                <div class="px-3">
                    <div class=""> <b>
                            <h1>Experience</h1>
                        </b></div>
                    <div>
                        <div class="pt-2 pb-2 ">
                            <b>
                                <h3> {{ $cvdata->job1_title}}</h3>

                            </b>
                        </div>
                        <p> {{ $cvdata->company1_name }}</p>
                        <p>{{ $cvdata->company1_from }} - {{ $cvdata->company1_to }}</p>

                        <div>
                            <p>
                                {{ $cvdata->c1_responsibilities}}
                            </p>
                        </div>

                    </div>
                    <div>
                        <div class="pt-3 pb-3 ">
                            <b>
                                <h3> {{ $cvdata->job2_title}}</h3>

                            </b>
                        </div>
                        <p> {{ $cvdata->company2_name }}</p>
                        <p>{{ $cvdata->company1_from }} - {{ $cvdata->company1_to }}</p>

                        <div>
                            <p>
                                {{ $cvdata->c2_responsibilities}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</body>

</html>