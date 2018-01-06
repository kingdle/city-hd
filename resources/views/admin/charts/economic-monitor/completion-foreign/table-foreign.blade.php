<style>
    .row-quota {
        border-color: #e7eaec;
        border-style: solid solid none;
        border-width: 1px 0;
        padding: 15px 20px 20px 20px;
        font-size: 14px;
        line-height: 2em;
        min-height: 660px;
    }
    .row-quota .row-label{
        text-indent: 0em;
        font-weight: 700;
    }
    .row-quota tbody th{
        text-indent: 2em;
    }
</style>
<div class="box">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>对外贸易完成情况</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="row-quota" id="quota">
                    <table class="table table-foreign table-hover scrolltable">
                        <thead style="display:block;overflow-y: scroll;">
                        <tr>
                            <th>指标</th>
                            <th>本期（万元）</th>
                            <th>累计（万元）</th>
                            <th>累计增长%</th>
                        </tr>
                        </thead>
                        <tbody style="display:block; max-height:592px;overflow-y: scroll;">
                        <tr>
                            <th scope="row" class="row-label">进出口总额</th>
                            <td>671409</td>
                            <td>5114398</td>
                            <td>16.6</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row-label">出口总额</th>
                            <td>455663</td>
                            <td>3474141</td>
                            <td>22.7</td>
                        </tr>
                        <tr>
                            <th scope="row">国有企业（出口</th>
                            <td>133853</td>
                            <td>1314761</td>
                            <td>44.7</td>
                        </tr>
                        <tr>
                            <th scope="row">三资企业（出口</th>
                            <td>153208</td>
                            <td>1071667</td>
                            <td>5.4</td>
                        </tr>
                        <tr>
                            <th scope="row">其它企业（出口</th>
                            <td>174335</td>
                            <td>1096617</td>
                            <td>21.8</td>
                        </tr>
                        <tr>
                            <th scope="row">一般贸易（出口</th>
                            <td>237574</td>
                            <td>1612675</td>
                            <td>28.4</td>
                        </tr>
                        <tr>
                            <th scope="row">加工贸易（出口</th>
                            <td>222270</td>
                            <td>1857597</td>
                            <td>19.1</td>
                        </tr>
                        <tr>
                            <th scope="row">其它贸易（出口</th>
                            <td>1553</td>
                            <td>12772</td>
                            <td>26.2</td>
                        </tr>
                        <tr>
                            <th scope="row" class="row-label">进口总额</th>
                            <td>215746</td>
                            <td>1640257</td>
                            <td>5.4</td>
                        </tr>
                        <tr>
                            <th scope="row">国有企业（进口</th>
                            <td>87044</td>
                            <td>602246</td>
                            <td>-10.2</td>
                        </tr>
                        <tr>
                            <th scope="row">三资企业（进口</th>
                            <td>106557</td>
                            <td>836446</td>
                            <td>23.4</td>
                        </tr>
                        <tr>
                            <th scope="row">其它企业（进口</th>
                            <td>25026</td>
                            <td>209394</td>
                            <td>2.5</td>
                        </tr>
                        <tr>
                            <th scope="row">一般贸易（进口</th>
                            <td>124814</td>
                            <td>922854</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">加工贸易（进口</th>
                            <td>59568</td>
                            <td>416084</td>
                            <td>-23.4</td>
                        </tr>
                        <tr>
                            <th scope="row">其它贸易（进口</th>
                            <td>34245</td>
                            <td>309148</td>
                            <td>44.3</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var _width = $('#quota').width();
        $('#quota th:first-child').width(_width * 0.4);
        $('#quota td:first-child').width(_width * 0.4);
        $('#quota th:nth-child(2)').width(_width * 0.4);
        $('#quota td:nth-child(2)').width(_width * 0.4);
        $('#quota th:nth-child(3)').width(_width * 0.2);
        $('#quota td:nth-child(3)').width(_width * 0.2);
        $('#quota th:nth-child(4)').width(_width * 0.2);
        $('#quota td:nth-child(4)').width(_width * 0.2);
        $('#quota th:nth-child(5)').width(_width * 0.1);
        $('#quota td:nth-child(5)').width(_width * 0.1);
    })
</script>
