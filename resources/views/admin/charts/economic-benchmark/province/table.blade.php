<style>
    .ibox-title h5 {
        display: inline-block;
        font-size: 14px;
        font-weight: 600;
        margin: 0 0 7px;
        padding: 0;
        text-overflow: ellipsis;
        float: left;
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
    .ranking-table .nav-tabs {
        padding: 5px 5px 0 10px;
    }
    .ranking-table .nav-tabs li a {
        font-size: 14px;
        font-weight: 500;
    }
</style>
<div class="box box-primary ranking-table">
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
                                                        <th>省市</th>
                                                        <th>总量（计量单位：亿元）</th>
                                                        <th>增长</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>济南市</td>
                                                        <td>5075.1</td>
                                                        <td>7.7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>青岛市</td>
                                                        <td>490.1</td>
                                                        <td>3.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>青岛西海岸新区</td>
                                                        <td>388.6</td>
                                                        <td>8.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>淄博市</td>
                                                        <td>189.6</td>
                                                        <td>8.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>枣庄市</td>
                                                        <td>293.3</td>
                                                        <td>8.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>东营市</td>
                                                        <td>1521.3</td>
                                                        <td>12.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>烟台市</td>
                                                        <td>1463.6</td>
                                                        <td>11.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>潍坊市</td>
                                                        <td>57.6</td>
                                                        <td>16.0%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>济宁市</td>
                                                        <td>517.9</td>
                                                        <td>8.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>泰安市</td>
                                                        <td>634.9</td>
                                                        <td>7.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>威海市</td>
                                                        <td>568.9</td>
                                                        <td>9.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>日照市</td>
                                                        <td>448.7</td>
                                                        <td>8.2%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>莱芜市</td>
                                                        <td>292.0</td>
                                                        <td>7.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>临沂市</td>
                                                        <td>41.7</td>
                                                        <td>6.0%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>德州市</td>
                                                        <td>41.7</td>
                                                        <td>6.0%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>聊城市</td>
                                                        <td>41.7</td>
                                                        <td>6.0%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>滨州市</td>
                                                        <td>41.7</td>
                                                        <td>6.0%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>菏泽市</td>
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
                                                        <th>省市</th>
                                                        <th>排名</th>
                                                        <th>增加值</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>济南市</td>
                                                        <td>1</td>
                                                        <td>7.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>青岛市</td>
                                                        <td>2</td>
                                                        <td>10.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>青岛西海岸新区</td>
                                                        <td>3</td>
                                                        <td>7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>淄博市</td>
                                                        <td>4</td>
                                                        <td>7.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>枣庄市</td>
                                                        <td>5</td>
                                                        <td>7.2%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>东营市</td>
                                                        <td>3</td>
                                                        <td>12.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>烟台市</td>
                                                        <td>3</td>
                                                        <td>11.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>潍坊市</td>
                                                        <td>3</td>
                                                        <td>16.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>济宁市</td>
                                                        <td>4</td>
                                                        <td>8.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>泰安市</td>
                                                        <td>3</td>
                                                        <td>8.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>威海市</td>
                                                        <td>2</td>
                                                        <td>8.7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>日照市</td>
                                                        <td>4</td>
                                                        <td>8.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>莱芜市</td>
                                                        <td>8</td>
                                                        <td>6.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>临沂市</td>
                                                        <td>6</td>
                                                        <td>6.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>德州市</td>
                                                        <td>6</td>
                                                        <td>6.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>聊城市</td>
                                                        <td>6</td>
                                                        <td>6.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>滨州市</td>
                                                        <td>6</td>
                                                        <td>6.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>菏泽市</td>
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
                                            <div id="assets-run" style="min-height: 200px"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>省市</th>
                                                        <th>累计（计量单位：万元）</th>
                                                        <th>增长</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>济南市</td>
                                                        <td>45970847</td>
                                                        <td>9.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>青岛市</td>
                                                        <td>548273</td>
                                                        <td>1.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>青岛西海岸新区</td>
                                                        <td>1072170</td>
                                                        <td>-2.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>淄博市</td>
                                                        <td>2558214</td>
                                                        <td>11.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>枣庄市</td>
                                                        <td>1239015</td>
                                                        <td>11%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>东营市</td>
                                                        <td>13402087</td>
                                                        <td>11.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>烟台市</td>
                                                        <td>13355316</td>
                                                        <td>11.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>潍坊市</td>
                                                        <td>46771</td>
                                                        <td>24.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>济宁市</td>
                                                        <td>3876759</td>
                                                        <td>4.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>泰安市</td>
                                                        <td>5827292</td>
                                                        <td>5.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>威海市</td>
                                                        <td>5955091</td>
                                                        <td>6.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>日照市</td>
                                                        <td>4982915</td>
                                                        <td>5.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>莱芜市</td>
                                                        <td>3517543</td>
                                                        <td>-1.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>临沂市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>德州市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>聊城市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>滨州市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>菏泽市</td>
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
                                            <div id="budget-run" style="min-height: 200px"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>

                                                        <th>#</th>
                                                        <th>省市</th>
                                                        <th>累计（计量单位：万元）</th>
                                                        <th>增长</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>济南市</td>
                                                        <td>45970847</td>
                                                        <td>9.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>青岛市</td>
                                                        <td>548273</td>
                                                        <td>1.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>青岛西海岸新区</td>
                                                        <td>1072170</td>
                                                        <td>-2.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>淄博市</td>
                                                        <td>2558214</td>
                                                        <td>11.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>枣庄市</td>
                                                        <td>1239015</td>
                                                        <td>11%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>东营市</td>
                                                        <td>13402087</td>
                                                        <td>11.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>烟台市</td>
                                                        <td>13355316</td>
                                                        <td>11.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>潍坊市</td>
                                                        <td>46771</td>
                                                        <td>24.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>济宁市</td>
                                                        <td>3876759</td>
                                                        <td>4.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>泰安市</td>
                                                        <td>5827292</td>
                                                        <td>5.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>威海市</td>
                                                        <td>5955091</td>
                                                        <td>6.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>日照市</td>
                                                        <td>4982915</td>
                                                        <td>5.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>莱芜市</td>
                                                        <td>3517543</td>
                                                        <td>-1.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>临沂市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>德州市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>聊城市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>滨州市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>菏泽市</td>
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
                        <div role="tabpanel" class="tab-pane" id="trade">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="trade-run" style="min-height: 200px"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>

                                                        <th>#</th>
                                                        <th>省市</th>
                                                        <th>累计（计量单位：万元）</th>
                                                        <th>增长</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>济南市</td>
                                                        <td>45970847</td>
                                                        <td>9.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>青岛市</td>
                                                        <td>548273</td>
                                                        <td>1.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>青岛西海岸新区</td>
                                                        <td>1072170</td>
                                                        <td>-2.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>淄博市</td>
                                                        <td>2558214</td>
                                                        <td>11.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>枣庄市</td>
                                                        <td>1239015</td>
                                                        <td>11%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>东营市</td>
                                                        <td>13402087</td>
                                                        <td>11.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>烟台市</td>
                                                        <td>13355316</td>
                                                        <td>11.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>潍坊市</td>
                                                        <td>46771</td>
                                                        <td>24.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>济宁市</td>
                                                        <td>3876759</td>
                                                        <td>4.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>泰安市</td>
                                                        <td>5827292</td>
                                                        <td>5.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>威海市</td>
                                                        <td>5955091</td>
                                                        <td>6.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>日照市</td>
                                                        <td>4982915</td>
                                                        <td>5.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>莱芜市</td>
                                                        <td>3517543</td>
                                                        <td>-1.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>临沂市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>德州市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>聊城市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>滨州市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>菏泽市</td>
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
                        <div role="tabpanel" class="tab-pane" id="trade-foreign">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="foreign-run" style="min-height: 200px"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>省市</th>
                                                        <th>累计（计量单位：万元）</th>
                                                        <th>增长</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>济南市</td>
                                                        <td>45970847</td>
                                                        <td>9.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>青岛市</td>
                                                        <td>548273</td>
                                                        <td>1.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>青岛西海岸新区</td>
                                                        <td>1072170</td>
                                                        <td>-2.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>淄博市</td>
                                                        <td>2558214</td>
                                                        <td>11.4%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>枣庄市</td>
                                                        <td>1239015</td>
                                                        <td>11%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>东营市</td>
                                                        <td>13402087</td>
                                                        <td>11.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>烟台市</td>
                                                        <td>13355316</td>
                                                        <td>11.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>潍坊市</td>
                                                        <td>46771</td>
                                                        <td>24.6%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>济宁市</td>
                                                        <td>3876759</td>
                                                        <td>4.9%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>泰安市</td>
                                                        <td>5827292</td>
                                                        <td>5.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>威海市</td>
                                                        <td>5955091</td>
                                                        <td>6.8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>日照市</td>
                                                        <td>4982915</td>
                                                        <td>5.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>莱芜市</td>
                                                        <td>3517543</td>
                                                        <td>-1.3%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>临沂市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>德州市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>聊城市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>滨州市</td>
                                                        <td>1565015</td>
                                                        <td>53.1%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>菏泽市</td>
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
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var totalChart = echarts.init(document.getElementById('total-run'));

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
        totalChart.setOption(option);
        //浏览器大小改变时重置大小
        $(window).resize(function () {
            totalChart.resize();
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var industryContainer = document.getElementById('industry-run');

        //用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
        var resizeMainContainer = function () {
            var _width = $('.col-sm-12').width();
            var _height = $('.col-sm-12').height();
            industryContainer.style.width = _width +'px';
            industryContainer.style.height = _height +'px';
        };
        //设置div容器高宽
        resizeMainContainer();
        // 初始化图表
        var industryChart = echarts.init(industryContainer);
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '工业增加值运行趋势'
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
        industryChart.setOption(option);
        //浏览器大小改变时重置大小
        window.onresize = function () {
            resizeMainContainer();
            industryChart.resize();
        };
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var assetsContainer = document.getElementById('assets-run');

        //用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
        var resizeMainContainer = function () {
            var _width = $('.col-sm-12').width();
            var _height = $('.col-sm-12').height();
            assetsContainer.style.width = _width +'px';
            assetsContainer.style.height = _height +'px';
        };
        //设置div容器高宽
        resizeMainContainer();
        // 初始化图表
        var assetsChart = echarts.init(assetsContainer);
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '固定资产投资运行趋势'
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
        assetsChart.setOption(option);
        //浏览器大小改变时重置大小
        window.onresize = function () {
            resizeMainContainer();
            assetsChart.resize();
        };
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var budgetContainer = document.getElementById('budget-run');

        //用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
        var resizeMainContainer = function () {
            var _width = $('.col-sm-12').width();
            var _height = $('.col-sm-12').height();
            budgetContainer.style.width = _width +'px';
            budgetContainer.style.height = _height +'px';
        };
        //设置div容器高宽
        resizeMainContainer();
        // 初始化图表
        var budgetChart = echarts.init(budgetContainer);
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '一般公共预算收入运行趋势'
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
        budgetChart.setOption(option);
        //浏览器大小改变时重置大小
        window.onresize = function () {
            resizeMainContainer();
            budgetChart.resize();
        };
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var tradeContainer = document.getElementById('trade-run');

        //用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
        var resizeMainContainer = function () {
            var _width = $('.col-sm-12').width();
            var _height = $('.col-sm-12').height();
            tradeContainer.style.width = _width +'px';
            tradeContainer.style.height = _height +'px';
        };
        //设置div容器高宽
        resizeMainContainer();
        // 初始化图表
        var tradeChart = echarts.init(tradeContainer);
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '限额以上贸易运行趋势'
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
        tradeChart.setOption(option);
        //浏览器大小改变时重置大小
        window.onresize = function () {
            resizeMainContainer();
            tradeChart.resize();
        };
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var foreignContainer = document.getElementById('foreign-run');

        //用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
        var resizeMainContainer = function () {
            var _width = $('.col-sm-12').width();
            var _height = $('.col-sm-12').height();
            foreignContainer.style.width = _width +'px';
            foreignContainer.style.height = _height +'px';
        };
        //设置div容器高宽
        resizeMainContainer();
        // 初始化图表
        var foreignChart = echarts.init(foreignContainer);
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '对外贸易运行趋势'
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
        foreignChart.setOption(option);
        //浏览器大小改变时重置大小
        window.onresize = function () {
            resizeMainContainer();
            foreignChart.resize();
        };
    });
</script>