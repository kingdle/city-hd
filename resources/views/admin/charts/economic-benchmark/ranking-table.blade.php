<style>
    .ibox-title {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background-color: #ffffff;
        border-color: #e7eaec;
        border-image: none;
        color: inherit;
        margin-bottom: 0;
        padding: 15px 15px 7px;
        min-height: 48px;
    }

    .ibox-title h5 {
        display: inline-block;
        font-size: 14px;
        font-weight: 600;
        margin: 0 0 7px;
        padding: 0;
        text-overflow: ellipsis;
        float: left;
    }

    .ibox-tools {
        display: block;
        float: none;
        margin-top: 0;
        position: relative;
        padding: 0;
        text-align: right;
    }

    .ibox-tools a {
        cursor: pointer;
        margin-left: 5px;
        color: #c4c4c4;
    }

    .ibox .ibox-tools.open > .dropdown-menu {
        left: auto;
        right: 0;
    }

    .ibox-content {
        clear: both;
    }

    .ibox-content {
        background-color: #ffffff;
        color: inherit;
        padding: 15px 20px 20px 20px;
        border-color: #ffffff;
        border-image: none;
        border-style: solid solid none;
        border-width: 1px 0;
    }

    .form-control {
        background-color: #FFFFFF;
        background-image: none;
        border: 1px solid #e5e6e7;
        border-radius: 1px;
        color: inherit;
        display: block;
        padding: 6px 12px;
        transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        width: 100%;
    }

    .ranking-table .nav-tabs li a {
        font-size: 14px;
        font-weight: 500;
    }
</style>
<div class="ranking ranking-table">
    <div class="contenter">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#total" aria-controls="total" role="tab"
                                                                  data-toggle="tab">生产总值总量</a></li>
                        <li role="presentation"><a href="#industry" aria-controls="industry" role="tab"
                                                   data-toggle="tab">工业增加值</a></li>
                        <li role="presentation"><a href="#assets" aria-controls="assets" role="tab" data-toggle="tab">固定资产投资</a>
                        </li>
                        <li role="presentation"><a href="#budget" aria-controls="budget" role="tab" data-toggle="tab">一般公共预算收入</a>
                        </li>
                        <li role="presentation"><a href="#trade" aria-controls="trade" role="tab" data-toggle="tab">限额以上贸易</a>
                        </li>
                        <li role="presentation"><a href="#trade-foreign" aria-controls="trade-foreign" role="tab"
                                                   data-toggle="tab">对外贸易</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="total">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="total-run" style="min-height: 200px"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>

                                                        <th>#</th>
                                                        <th>区市</th>
                                                        <th>总量（计量单位：亿元）</th>
                                                        <th>增长</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>青岛市</td>
                                                        <td>5075.1</td>
                                                        <td>7.7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>市南区</td>
                                                        <td>490.1</td>
                                                        <td>3.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>市北区</td>
                                                        <td>388.6</td>
                                                        <td>8.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>李沧区</td>
                                                        <td>189.6</td>
                                                        <td>8.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>崂山区</td>
                                                        <td>293.3</td>
                                                        <td>8.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>青岛西海岸新区</td>
                                                        <td>1521.3</td>
                                                        <td>12.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>黄岛区</td>
                                                        <td>1463.6</td>
                                                        <td>11.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>保税港区</td>
                                                        <td>57.6</td>
                                                        <td>16.0%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>城阳区</td>
                                                        <td>517.9</td>
                                                        <td>8.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>即墨市</td>
                                                        <td>634.9</td>
                                                        <td>7.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>胶州市</td>
                                                        <td>568.9</td>
                                                        <td>9.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>平度市</td>
                                                        <td>448.7</td>
                                                        <td>8.2%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>莱西市</td>
                                                        <td>292.0</td>
                                                        <td>7.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>红岛经济区</td>
                                                        <td>41.7</td>
                                                        <td>6.0%</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="industry">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="industry-run" style="min-height: 200px"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>

                                                        <th>#</th>
                                                        <th>区市</th>
                                                        <th>排名</th>
                                                        <th>增加值</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>青岛市</td>
                                                        <td>1</td>
                                                        <td>7.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>市南区</td>
                                                        <td>2</td>
                                                        <td>10.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>市北区</td>
                                                        <td>3</td>
                                                        <td>7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>李沧区</td>
                                                        <td>4</td>
                                                        <td>7.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>崂山区</td>
                                                        <td>5</td>
                                                        <td>7.2%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>青岛西海岸新区</td>
                                                        <td>3</td>
                                                        <td>12.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>黄岛区</td>
                                                        <td>3</td>
                                                        <td>11.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>保税港区</td>
                                                        <td>3</td>
                                                        <td>16.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>城阳区</td>
                                                        <td>4</td>
                                                        <td>8.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>即墨市</td>
                                                        <td>3</td>
                                                        <td>8.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>胶州市</td>
                                                        <td>2</td>
                                                        <td>8.7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>平度市</td>
                                                        <td>4</td>
                                                        <td>8.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>莱西市</td>
                                                        <td>8</td>
                                                        <td>6.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>红岛经济区</td>
                                                        <td>6</td>
                                                        <td>6.4%</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="assets">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="speed-line" style="min-height: 200px"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>

                                                        <th>#</th>
                                                        <th>区市</th>
                                                        <th>累计（计量单位：万元）</th>
                                                        <th>增长</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>青岛市</td>
                                                        <td>45970847</td>
                                                        <td>9.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>市南区</td>
                                                        <td>548273</td>
                                                        <td>1.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>市北区</td>
                                                        <td>1072170</td>
                                                        <td>-2.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>李沧区</td>
                                                        <td>2558214</td>
                                                        <td>11.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>崂山区</td>
                                                        <td>1239015</td>
                                                        <td>11%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>青岛西海岸新区</td>
                                                        <td>13402087</td>
                                                        <td>11.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>黄岛区</td>
                                                        <td>13355316</td>
                                                        <td>11.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>保税港区</td>
                                                        <td>46771</td>
                                                        <td>24.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>城阳区</td>
                                                        <td>3876759</td>
                                                        <td>4.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>即墨市</td>
                                                        <td>5827292</td>
                                                        <td>5.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>胶州市</td>
                                                        <td>5955091</td>
                                                        <td>6.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>平度市</td>
                                                        <td>4982915</td>
                                                        <td>5.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>莱西市</td>
                                                        <td>3517543</td>
                                                        <td>-1.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>红岛经济区</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="budget">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="speed-line" style="min-height: 200px"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>

                                                        <th>#</th>
                                                        <th>区市</th>
                                                        <th>累计（计量单位：万元）</th>
                                                        <th>增长</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>青岛市</td>
                                                        <td>7202541</td>
                                                        <td>8.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>市南区</td>
                                                        <td>607359</td>
                                                        <td>3.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>市北区</td>
                                                        <td>626857</td>
                                                        <td>8.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>李沧区</td>
                                                        <td>396471</td>
                                                        <td>15.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>崂山区</td>
                                                        <td>881035</td>
                                                        <td>10.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>青岛西海岸新区</td>
                                                        <td>1522139</td>
                                                        <td>11.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>黄岛区</td>
                                                        <td>1447263</td>
                                                        <td>10.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>保税港区</td>
                                                        <td>80875</td>
                                                        <td>20.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>城阳区</td>
                                                        <td>732040</td>
                                                        <td>11.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>即墨市</td>
                                                        <td>685760</td>
                                                        <td>10.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>胶州市</td>
                                                        <td>613694</td>
                                                        <td>10.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>平度市</td>
                                                        <td>360608</td>
                                                        <td>10.2%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>莱西市</td>
                                                        <td>329784</td>
                                                        <td>6.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>红岛经济区</td>
                                                        <td>150667</td>
                                                        <td>19.9%</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="trade">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="speed-line" style="min-height: 200px"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>

                                                        <th>#</th>
                                                        <th>区市</th>
                                                        <th>累计（计量单位：万元）</th>
                                                        <th>增长</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>青岛市</td>
                                                        <td>35411451</td>
                                                        <td>22.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>市南区</td>
                                                        <td>7321933</td>
                                                        <td>5.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>市北区</td>
                                                        <td>5560640</td>
                                                        <td>30.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>李沧区</td>
                                                        <td>3081334</td>
                                                        <td>44.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>崂山区</td>
                                                        <td>6286425</td>
                                                        <td>14.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>青岛西海岸新区</td>
                                                        <td>7481673</td>
                                                        <td>56.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>黄岛区</td>
                                                        <td>3216605</td>
                                                        <td>56.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>保税港区</td>
                                                        <td>4265069</td>
                                                        <td>56.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>城阳区</td>
                                                        <td>1229100</td>
                                                        <td>37.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>即墨市</td>
                                                        <td>922505</td>
                                                        <td>-6.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>胶州市</td>
                                                        <td>1825095</td>
                                                        <td>32.7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>平度市</td>
                                                        <td>676590</td>
                                                        <td>8.7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>莱西市</td>
                                                        <td>656568</td>
                                                        <td>25.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>红岛经济区</td>
                                                        <td>369588</td>
                                                        <td>-54%</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="trade-foreign">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="speed-line" style="min-height: 200px"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>

                                                        <th>#</th>
                                                        <th>区市</th>
                                                        <th>累计（计量单位：万元）</th>
                                                        <th>增长</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>青岛市</td>
                                                        <td>29342101</td>
                                                        <td>23.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>市南区</td>
                                                        <td>4261821</td>
                                                        <td>41.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>市北区</td>
                                                        <td>795272</td>
                                                        <td>26.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>李沧区</td>
                                                        <td>718261</td>
                                                        <td>60.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>崂山区</td>
                                                        <td>2918526</td>
                                                        <td>16.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>青岛西海岸新区</td>
                                                        <td>10181851</td>
                                                        <td>38.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>黄岛区</td>
                                                        <td>5114398</td>
                                                        <td>16.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>保税港区</td>
                                                        <td>5067453</td>
                                                        <td>71.2%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>城阳区</td>
                                                        <td>3126345</td>
                                                        <td>6.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>即墨市</td>
                                                        <td>1742339</td>
                                                        <td>4.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>胶州市</td>
                                                        <td>2140241</td>
                                                        <td>8.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>平度市</td>
                                                        <td>950246</td>
                                                        <td>20%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>莱西市</td>
                                                        <td>990298</td>
                                                        <td>2%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>红岛经济区</td>
                                                        <td>452347</td>
                                                        <td>-1.6%</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
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
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('total-run'));
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '生产总值运行趋势'
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['增速']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            toolbox: {},
            xAxis: {
                type: 'category',
                splitLine: {show: true},
                boundaryGap: false,
                data: ['2016-3', '2016-6', '2016-9', '2016-12', '2017-3', '2017-6']
            },
            yAxis: {
                splitLine: {show: true},
                type: 'value'
            },
            series: [
                {
                    name: '增速',
                    type: 'line',
                    stack: '总量',
                    data: [3.7, 2.7, 4, 5, 6.9, 5.2]
                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        //浏览器大小改变时重置大小
        window.onresize = function () {
            myChart.resize();
        };
    });
</script>