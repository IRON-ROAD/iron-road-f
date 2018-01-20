@extends('finance.Layouts.FinanceMaster')

@section('voucher_entry')
    active
@endsection

@section('contents')


    <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{URL::route('home')}}">Home</a>
            <a class="breadcrumb-item" href="#">Ticket</a>
            <span class="breadcrumb-item active">Registry </span>
        </nav>
    </div>


    <div class="br-pagetitle">
        <i class="icon ion-ios-clipboard"></i>
        <div>
            <h4>Voucher Entry</h4>
            <p class="mg-b-0">Please enter Voucher details</p>
        </div>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <form action="{{URL::route('insert_voucher')}}" method="post">
                {{csrf_field()}}
                <div class="row mg-t-80">
                    <div class="col-xl-6">
                        <div class="form-layout form-layout-4">
                            {{--<h6 class="br-section-label">Left Label Alignment</h6>--}}
                            {{--<p class="br-section-text">A basic form where labels are aligned in left.</p>--}}
                            <div class="row">
                                <label class="col-sm-4 form-control-label">Voucher No: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="voucher_no" class="form-control" placeholder="Voucher No"/>


                                    {{--<select class="form-control select2-show-search" data-placeholder="Choose Station (with searchbox)">--}}
                                        {{--<option label="Choose one"></option>--}}
                                        {{--<option value="Firefox">Pugu</option>--}}
                                        {{--<option value="Chrome">Soga</option>--}}
                                        {{--<option value="Safari">Mlimba</option>--}}
                                        {{--<option value="Opera">Mwakanga</option>--}}

                                    {{--</select>--}}



                                </div>
                            </div><!-- row -->
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Voucher Date: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="date" name="voucher_date" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Payee: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="fare" name="payee" class="form-control" placeholder="Payee">
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea name="voucher_desc" id="" cols="30" rows="8" class="form-control"></textarea>
                                </div>
                            </div>

                        </div><!-- form-layout -->
                    </div><!-- col-6 -->
                    <div class="col-xl-6 mg-t-20 mg-xl-t-0">
                        <div class="form-layout form-layout-5">
                            {{--<h6 class="br-section-label">Right Label Alignment</h6>--}}
                            {{--<p class="br-section-text">A basic form where labels are aligned in right.</p>--}}
                            <div class="row">
                                <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Section:</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select name="section" id="" class="form-control">
                                        <option value="">Select Section</option>
                                        <option value="Finance">Finance</option>
                                        <option value="GS">GS</option>
                                        <option value="MPR">MPR</option>
                                        <option value="Revenue">Revenue</option>
                                        <option value="Cash">Cash Office</option>

                                    </select>
                                </div>
                            </div><!-- row -->
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> CO6 Number:</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text"  id="closing" name="CO6" class="form-control" placeholder="CO6 No">

                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> CO6 Date:</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="date" id="" name="CO6_date:" class="form-control" placeholder="CO6 Date">
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Invoice no:</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="" name="invoice_no" class="form-control" placeholder="Invoice no">
                                </div>
                            </div><!-- row -->

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Invoice Date:</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="date" id="" name="invoice_date:" class="form-control" placeholder="Invoice Date">
                                </div>
                            </div><!-- row -->

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Bill Date:</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="date" id="" name="bill_date:" class="form-control" placeholder="Bill Date">
                                </div>
                            </div><!-- row -->

                        </div><!-- form-layout -->
                    </div><!-- col-6 -->
                </div><!-- row -->
                <div class="row mg-t-30">
                    <div class="col-sm-8 mg-l-auto">
                        <div class="form-layout-footer">
                            <button class="btn btn-info">Submit Voucher</button>
                            <button class="btn btn-danger">Cancel</button>

                        </div><!-- form-layout-footer -->
                    </div><!-- col-8 -->
                </div>
            </form>

        </div><!-- br-section-wrapper -->

        {{--<div class="br-pagebody9">--}}
        {{--<div class="br-section-wrapper9">--}}


        {{--<div class="row2">--}}

        {{--<div class="col-lg-4 mg-t-20 mg-lg-t-0">--}}
        {{--<select class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)">--}}
        {{--<option label="Choose one"></option>--}}
        {{--<option value="Firefox">Firefox</option>--}}
        {{--<option value="Chrome">Chrome</option>--}}
        {{--<option value="Safari">Safari</option>--}}
        {{--<option value="Opera">Opera</option>--}}
        {{--<option value="Internet Explorer">Internet Explorer</option>--}}
        {{--</select>--}}
        {{--</div><!-- col-4 -->--}}

        {{--</div><!-- row -->--}}




        {{--</div><!-- row -->--}}



        {{--</div><!-- br-section-wrapper -->--}}


    </div>






@endsection