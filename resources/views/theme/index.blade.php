@extends('theme/app')
@section('content')
<script src="{{asset('theme/js/jquery.min.js')}}"></script>
<section>
    <div class="container container_ra neg_margin tp30p">
        <h2 class="title_three greenclr lft10p">B. Individual Rating</h2>
        <div class="row cm10-row">
            <?php $name = ["Gyan","Pravash", "Purna", "Jinesh"]; ?>
            @foreach($name as $k=>$n)
            <div class="col-md-6">
                <h3 class="title_three blueclr lft10p">{{$n}}</h3>
                <input type="hidden" id="user_name_{{$k}}" value="{{$n}}">
                <div class="organization_form">
                    {{-- <form class="dash_forms" id="form_{{$k}}"> --}}
                        <p>How would you rate this person’s overall performance? Select one of the following:</p>
                        <div class="form-group tp10m">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input_{{$k}}" type="radio" name="inlineRadioOptions{{$n}}{{$k}}" id="form-check-input_{{$k}}" value="10">
                              <label class="form-check-label" for="inlineRadio1">Outstanding</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input_{{$k}}" type="radio" name="inlineRadioOptions{{$n}}{{$k}}" id="form-check-input_{{$k}}" value="8">
                              <label class="form-check-label" for="inlineRadio2">Very Good</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input_{{$k}}" type="radio" name="inlineRadioOptions{{$n}}{{$k}}" id="form-check-input_{{$k}}" value="6">
                              <label class="form-check-label" for="inlineRadio1">Adequate</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input_{{$k}}" type="radio" name="inlineRadioOptions{{$n}}{{$k}}" id="form-check-input_{{$k}}" value="4">
                              <label class="form-check-label" for="inlineRadio2">Poor</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input_{{$k}}" type="radio" name="inlineRadioOptions{{$n}}{{$k}}" id="form-check-input_{{$k}}" value="2">
                              <label class="form-check-label" for="inlineRadio2">Unacceptable</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Remarks <span class="redclr">(* Required)</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea{{$k}}" rows="3" placeholder="Comment Message"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="">Expertise and Competence</label>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="lft5p">
                                <select id="attribute_1_{{$k}}" class="form-control">
                                    <option selected value="10">Outstanding</option>
                                    <option value="8">Very Good</option>
                                    <option value="6">Adequate</option>
                                    <option value="4">Poor</option>
                                    <option value="2">Unacceptable</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="lft5p">
                                    <input type="text" class="form-control" id="description_1_{{$k}}" placeholder="Remarks (if any)">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="">Responsiveness</label>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="lft5p">
                                <select id="attribute_2_{{$k}}" class="form-control">
                                    <option selected value="10">Outstanding</option>
                                    <option value="8">Very Good</option>
                                    <option value="6">Adequate</option>
                                    <option value="4">Poor</option>
                                    <option value="2">Unacceptable</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="lft5p">
                                    <input type="text" class="form-control" id="description_2_{{$k}}" placeholder="Remarks (if any)">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="">Communication and Reporting</label>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="lft5p">
                                <select id="attribute_3_{{$k}}" class="form-control">
                                    <option selected value="10">Outstanding</option>
                                    <option value="8">Very Good</option>
                                    <option value="6">Adequate</option>
                                    <option value="4">Poor</option>
                                    <option value="2">Unacceptable</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="lft5p">
                                    <input type="text" class="form-control" id="description_3_{{$k}}" placeholder="Remarks (if any)">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="">Trustworthiness (Confidentiality)</label>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="lft5p">
                                <select id="attribute_4_{{$k}}" class="form-control">
                                    <option selected value="10">Outstanding</option>
                                    <option value="8">Very Good</option>
                                    <option value="6">Adequate</option>
                                    <option value="4">Poor</option>
                                    <option value="2">Unacceptable</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="lft5p">
                                    <input type="text" class="form-control" id="description_4_{{$k}}" placeholder="Remarks (if any)">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="">Quality of Service</label>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="lft5p">
                                <select id="attribute_5_{{$k}}" class="form-control">
                                    <option selected value="10">Outstanding</option>
                                    <option value="8">Very Good</option>
                                    <option value="6">Adequate</option>
                                    <option value="4">Poor</option>
                                    <option value="2">Unacceptable</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="lft5p">
                                    <input type="text" class="form-control" id="description_5_{{$k}}" placeholder="Remarks (if any)">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="key_{{$k}}" class="btn sendbtn bluebg">Submit <i class="fab fa-telegram"></i></button>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
            <script>
                $(document).ready(function(){
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $('#key_{{$k}}').click(function(){
                        var user_name = $('#user_name_{{$k}}').val();
                        var point = $('#form-check-input_{{$k}}:checked').val();
                        alert(point)
                        var description = $('#exampleFormControlTextarea{{$k}}').val();
                        var attrPoint1 = $('#attribute_1_{{$k}}').val();
                        var attrPoint2 = $('#attribute_2_{{$k}}').val();
                        var attrPoint3 = $('#attribute_3_{{$k}}').val();
                        var attrPoint4 = $('#attribute_4_{{$k}}').val();
                        var attrPoint5 = $('#attribute_5_{{$k}}').val();
                        var attrRemark1 = $('#description_1_{{$k}}').val();
                        var attrRemark2 = $('#description_2_{{$k}}').val();
                        var attrRemark3 = $('#description_3_{{$k}}').val();
                        var attrRemark4 = $('#description_4_{{$k}}').val();
                        var attrRemark5 = $('#description_5_{{$k}}').val();
                        
                        $.ajax({
                            url: '/saveRemark',
                            data:{
                                _token: CSRF_TOKEN,
                                user_name: user_name,
                                point: point,
                                description: description,
                                attrPoint1:attrPoint1,
                                attrPoint2:attrPoint2,
                                attrPoint3:attrPoint3,
                                attrPoint4:attrPoint4,
                                attrPoint5:attrPoint5,
                                attrRemark1: attrRemark1,
                                attrRemark2: attrRemark2,
                                attrRemark3: attrRemark3,
                                attrRemark4: attrRemark4,
                                attrRemark5: attrRemark5,

                            },
                            dataType: 'JSON',
                            success: function(data){
                                alert(data.msg)
                            },
                            error: function(error) {
                            }
                        })
                    })
                })
            </script>
            @endforeach
        </div>
    </div>
</section>



@endsection