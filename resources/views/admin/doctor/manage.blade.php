@extends('admin.layouts')
@section('title','Manage Doctor')

@section('main-contant')

    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                <header class="card-header">
                    Dynamic Table
                    <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
                </header>
                <div class="card-body">
                    <div class="adv-table">
                        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid">

                            <table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 190.312px;">
                                        Rendering engine
                                    </th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 257.422px;">Browser</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 233.062px;">
                                        Platform(s)
                                    </th>
                                    <th
                                        class="hidden-phone sorting"
                                        role="columnheader"
                                        tabindex="0"
                                        aria-controls="dynamic-table"
                                        rowspan="1"
                                        colspan="1"
                                        aria-label="Engine version: activate to sort column ascending"
                                        style="width: 162.219px;"
                                    >
                                        Engine version
                                    </th>
                                    <th
                                        class="hidden-phone sorting_desc"
                                        role="columnheader"
                                        tabindex="0"
                                        aria-controls="dynamic-table"
                                        rowspan="1"
                                        colspan="1"
                                        aria-sort="descending"
                                        aria-label="CSS grade: activate to sort column ascending"
                                        style="width: 114.984px;"
                                    >
                                        CSS grade
                                    </th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Rendering engine</th>
                                    <th rowspan="1" colspan="1">Browser</th>
                                    <th rowspan="1" colspan="1">Platform(s)</th>
                                    <th class="hidden-phone" rowspan="1" colspan="1">Engine version</th>
                                    <th class="hidden-phone" rowspan="1" colspan="1">CSS grade</th>
                                </tr>
                                </tfoot>
                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                <tr class="gradeX odd">
                                    <td class=" ">Trident</td>
                                    <td class=" ">Internet Explorer 4.0</td>
                                    <td class=" ">Win 95+</td>
                                    <td class="center hidden-phone">4</td>
                                    <td class="center hidden-phone sorting_1">X</td>
                                </tr>
                                <tr class="gradeX even">
                                    <td class=" ">Tasman</td>
                                    <td class=" ">Internet Explorer 4.5</td>
                                    <td class=" ">Mac OS 8-9</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone sorting_1">X</td>
                                </tr>
                                <tr class="gradeX odd">
                                    <td class=" ">Misc</td>
                                    <td class=" ">Dillo 0.8</td>
                                    <td class=" ">Embedded devices</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone sorting_1">X</td>
                                </tr>
                                <tr class="gradeX even">
                                    <td class=" ">Misc</td>
                                    <td class=" ">Links</td>
                                    <td class=" ">Text only</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone sorting_1">X</td>
                                </tr>
                                <tr class="gradeX odd">
                                    <td class=" ">Misc</td>
                                    <td class=" ">Lynx</td>
                                    <td class=" ">Text only</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone sorting_1">X</td>
                                </tr>
                                <tr class="gradeU even">
                                    <td class=" ">Other browsers</td>
                                    <td class=" ">All others</td>
                                    <td class=" ">-</td>
                                    <td class="center hidden-phone">-</td>
                                    <td class="center hidden-phone sorting_1">U</td>
                                </tr>
                                <tr class="gradeA odd">
                                    <td class=" ">Presto</td>
                                    <td class=" ">Nintendo DS browser</td>
                                    <td class=" ">Nintendo DS</td>
                                    <td class="center hidden-phone">8.5</td>
                                    <td class="center hidden-phone sorting_1">C/A<sup>1</sup></td>
                                </tr>
                                <tr class="gradeC even">
                                    <td class=" ">Trident</td>
                                    <td class=" ">Internet Explorer 5.0</td>
                                    <td class=" ">Win 95+</td>
                                    <td class="center hidden-phone">5</td>
                                    <td class="center hidden-phone sorting_1">C</td>
                                </tr>
                                <tr class="gradeC odd">
                                    <td class=" ">KHTML</td>
                                    <td class=" ">Konqureror 3.1</td>
                                    <td class=" ">KDE 3.1</td>
                                    <td class="center hidden-phone">3.1</td>
                                    <td class="center hidden-phone sorting_1">C</td>
                                </tr>
                                <tr class="gradeC even">
                                    <td class=" ">Tasman</td>
                                    <td class=" ">Internet Explorer 5.1</td>
                                    <td class=" ">Mac OS 7.6-9</td>
                                    <td class="center hidden-phone">1</td>
                                    <td class="center hidden-phone sorting_1">C</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
