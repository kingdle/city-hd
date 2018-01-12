<div class="box box-primary">
    <div class="contenter">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>指标列表及报表</h5>
                        <div class="ibox-tools">

                        </div>
                    </div>
                    <div class="warpper-content-pillar">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#industry"
                                                                                      aria-controls="industry"
                                                                                      role="tab"
                                                                                      data-toggle="tab">工业增加值</a></li>
                                            {{--<li role="presentation"><a href="#profit" aria-controls="profit" role="tab"--}}
                                                                       {{--data-toggle="tab">利税总额</a></li>--}}
                                            <li role="presentation"><a href="#assets" aria-controls="assets" role="tab"
                                                                       data-toggle="tab">固定资产</a></li>
                                            <li role="presentation"><a href="#trade" aria-controls="trade" role="tab"
                                                                       data-toggle="tab">限上贸易</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="industry">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div class="table-responsive">
                                                                    <div id="vuetable-1">
                                                                        <sy-table :stru="stru"></sy-table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="industry-charts"
                                                             style="height:420px;min-height: 420px">
                                                            <sy-chart chartid="testChart" :syoption="syoption"
                                                                      :styleobj="styleobj"></sy-chart>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--<div role="tabpanel" class="tab-pane" id="profit">--}}
                                                {{--<div class="row">--}}
                                                    {{--<div class="col-sm-3">--}}
                                                        {{--<div class="ibox float-e-margins">--}}
                                                            {{--<div class="ibox-content">--}}
                                                                {{--<div class="table-responsive">--}}
                                                                    {{--<div id="vuetable-2">--}}
                                                                        {{--<sy-table :stru="stru"></sy-table>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-sm-8">--}}
                                                        {{--<div id="tax-charts" style="height:420px">--}}
                                                            {{--<sy-chart chartid="vue-chart-2" :syoption="syoption"--}}
                                                                      {{--:styleobj="styleobj"></sy-chart>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            <div role="tabpanel" class="tab-pane" id="assets">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div class="table-responsive">
                                                                    <div id="vuetable-3">
                                                                        <sy-table :stru="stru"></sy-table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="build-charts" style="height:420px">
                                                            <sy-chart chartid="vue-chart-3" :syoption="syoption"
                                                                      :styleobj="styleobj"></sy-chart>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="trade">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div class="table-responsive">
                                                                    <div id="vuetable-4">
                                                                        <sy-table :stru="stru"></sy-table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="sale-charts" style="height:420px">
                                                            <sy-chart chartid="vue-chart-4" :syoption="syoption"
                                                                      :styleobj="styleobj"></sy-chart>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ admin_asset ("/js/vue.min.js") }}"></script>
<script src="{{ admin_asset ("/js/vuetable1.js") }}"></script>
<script src="{{ admin_asset ("/js/vuechart.js") }}"></script>
<script>
    var a = 1;
</script>
