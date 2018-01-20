@extends('finance.Layouts.TableMaster')

@section('received_voucher')
    active
@endsection

@section('contents')
    <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="index.html">Bracket</a>
            <a class="breadcrumb-item" href="#">Tables</a>
            <span class="breadcrumb-item active">Data Table</span>
        </nav>
    </div>

    <div class="br-pagetitle">
        <i class="icon icon ion-ios-bookmarks-outline"></i>
        <div>
            <h4>Data Table</h4>
            <p class="mg-b-0">DataTables is a plug-in for the jQuery Javascript library.</p>
        </div>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="br-section-label">Basic Responsive DataTable</h6>
            <p class="br-section-text">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

            <div class="table-wrapper">
                <div id="datatable1_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="datatable1_length"><label><select name="datatable1_length" aria-controls="datatable1" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 46px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-datatable1_length-gn-container"><span class="select2-selection__rendered" id="select2-datatable1_length-gn-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> items/page</label></div><div id="datatable1_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="Search..." aria-controls="datatable1"></label></div><table id="datatable1" class="table display responsive nowrap dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable1_info" style="width: 1251px;">
                        <thead>
                        <tr role="row"><th class="wd-15p sorting_asc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 164px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">First name</th><th class="wd-15p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 164px;" aria-label="Last name: activate to sort column ascending">Last name</th><th class="wd-20p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 227px;" aria-label="Position: activate to sort column ascending">Position</th><th class="wd-15p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 163px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="wd-10p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 101px;" aria-label="Salary: activate to sort column ascending">Salary</th><th class="wd-25p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 288px;" aria-label="E-mail: activate to sort column ascending">E-mail</th></tr>
                        </thead>
                        <tbody>

                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1">Airi</td>
                            <td>Satou</td>
                            <td>Accountant</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                            <td>a.satou@datatables.net</td>
                        </tr><tr role="row" class="even">
                            <td class="sorting_1" tabindex="0">Angelica</td>
                            <td>Ramos</td>
                            <td>Chief Executive Officer</td>
                            <td>2009/10/09</td>
                            <td>$1,200,000</td>
                            <td>a.ramos@datatables.net</td>
                        </tr><tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1">Ashton</td>
                            <td>Cox</td>
                            <td>Junior Technical Author</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                            <td>a.cox@datatables.net</td>
                        </tr><tr role="row" class="even">
                            <td class="sorting_1" tabindex="0">Bradley</td>
                            <td>Greer</td>
                            <td>Software Engineer</td>
                            <td>2012/10/13</td>
                            <td>$132,000</td>
                            <td>b.greer@datatables.net</td>
                        </tr><tr role="row" class="odd">
                            <td class="sorting_1" tabindex="0">Brenden</td>
                            <td>Wagner</td>
                            <td>Software Engineer</td>
                            <td>2011/06/07</td>
                            <td>$206,850</td>
                            <td>b.wagner@datatables.net</td>
                        </tr><tr role="row" class="even">
                            <td tabindex="0" class="sorting_1">Brielle</td>
                            <td>Williamson</td>
                            <td>Integration Specialist</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                            <td>b.williamson@datatables.net</td>
                        </tr><tr role="row" class="odd">
                            <td class="sorting_1" tabindex="0">Bruno</td>
                            <td>Nash</td>
                            <td>Software Engineer</td>
                            <td>2011/05/03</td>
                            <td>$163,500</td>
                            <td>b.nash@datatables.net</td>
                        </tr><tr role="row" class="even">
                            <td class="sorting_1" tabindex="0">Caesar</td>
                            <td>Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                            <td>c.vance@datatables.net</td>
                        </tr><tr role="row" class="odd">
                            <td class="sorting_1" tabindex="0">Cara</td>
                            <td>Stevens</td>
                            <td>Sales Assistant</td>
                            <td>2011/12/06</td>
                            <td>$145,600</td>
                            <td>c.stevens@datatables.net</td>
                        </tr><tr role="row" class="even">
                            <td tabindex="0" class="sorting_1">Cedric</td>
                            <td>Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                            <td>c.kelly@datatables.net</td>
                        </tr></tbody>
                    </table><div class="dataTables_info" id="datatable1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="datatable1_paginate"><a class="paginate_button previous disabled" aria-controls="datatable1" data-dt-idx="0" tabindex="0" id="datatable1_previous">Previous</a><span><a class="paginate_button current" aria-controls="datatable1" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="datatable1" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="datatable1" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="datatable1" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="datatable1" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="datatable1" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="datatable1" data-dt-idx="7" tabindex="0" id="datatable1_next">Next</a></div></div>
            </div><!-- table-wrapper -->



        </div><!-- br-section-wrapper -->
    </div>








@endsection