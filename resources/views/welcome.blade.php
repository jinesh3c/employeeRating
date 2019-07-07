<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Access Index Page</title>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/styles.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="100" class="dashboardbg">
<!-- header part with navigation ended here -->
<header class="header">
    <div class="container">
        <div class="access_logo center">
            <a href="file:///D:/bna/html_projects/RollingNexus/index.html">
                <img src="{{asset('theme/images/accesslogo.png')}}">
            </a>
        </div>
    </div>
</header>

<section>
    <div class="container container_ra neg_margin tp30p">
        <h2 class="title_three greenclr lft10p">B. Individual Rating</h2>
        <div class="row cm10-row">
            
            <div class="col-md-6">
                <h3 class="title_three blueclr lft10p">Pravash Rai</h3>
                <div class="organization_form">
                    <form class="dash_forms" enctype="multipart/form-data" method="POST" action="">
                        <p>How would you rate this person’s overall performance? Select one of the following:</p>
                        <div class="form-group tp10m">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">Outstanding</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">Very Good</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">Adequate</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">Poor</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">Unacceptable</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Remarks <span class="redclr">(* Required)</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment Message"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="">Expertise and Competence</label>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="lft5p">
                                <select id="inputState" class="form-control">
                                    <option selected>Outstanding</option>
                                    <option>Very Good</option>
                                    <option>Adequate</option>
                                    <option>Poor</option>
                                    <option>Unacceptable</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="lft5p">
                                    <input type="text" class="form-control" id="remark" placeholder="Remarks (if any)">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="">Responsiveness</label>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="lft5p">
                                <select id="inputState" class="form-control">
                                    <option selected>Outstanding</option>
                                    <option>Very Good</option>
                                    <option>Adequate</option>
                                    <option>Poor</option>
                                    <option>Unacceptable</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="lft5p">
                                    <input type="text" class="form-control" id="remark" placeholder="Remarks (if any)">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="">Communication and Reporting</label>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="lft5p">
                                <select id="inputState" class="form-control">
                                    <option selected>Outstanding</option>
                                    <option>Very Good</option>
                                    <option>Adequate</option>
                                    <option>Poor</option>
                                    <option>Unacceptable</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="lft5p">
                                    <input type="text" class="form-control" id="remark" placeholder="Remarks (if any)">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="">Trustworthiness (Confidentiality)</label>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="lft5p">
                                <select id="inputState" class="form-control">
                                    <option selected>Outstanding</option>
                                    <option>Very Good</option>
                                    <option>Adequate</option>
                                    <option>Poor</option>
                                    <option>Unacceptable</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="lft5p">
                                    <input type="text" class="form-control" id="remark" placeholder="Remarks (if any)">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="">Quality of Service</label>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="lft5p">
                                <select id="inputState" class="form-control">
                                    <option selected>Outstanding</option>
                                    <option>Very Good</option>
                                    <option>Adequate</option>
                                    <option>Poor</option>
                                    <option>Unacceptable</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="lft5p">
                                    <input type="text" class="form-control" id="remark" placeholder="Remarks (if any)">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn sendbtn bluebg">Submit <i class="fab fa-telegram"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script src='{{asset('theme/js/jquery-3.1.1.min.js')}}'></script>
<script src='{{asset('theme/js/bootstrap.min.js')}}'></script>
<script src='{{asset('theme/js/fontawesome.min.js')}}'></script>
</body>
</html>
