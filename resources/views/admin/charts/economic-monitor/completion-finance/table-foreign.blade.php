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
                    <h5>财政情况</h5>
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
                    <table class="table table-finance table-hover scrolltable">
                        <thead style="display:block;overflow-y: scroll;">
                        <tr>
                            <th>指标</th>
                            <th>累计</th>
                            <th>增速%</th>
                        </tr>
                        </thead>
                        <tbody style="display:block; max-height:592px;overflow-y: scroll;">
                        <tr>

                            <th scope="row" class="row-label">财政收入</th>
                            <td>1880946</td>
                            <td>14.4</td>
                        </tr>
                        <tr>

                            <th scope="row" class="row-label">一般公共预算收入</th>
                            <td>1447263</td>
                            <td>10.8</td>
                        </tr>
                        <tr>

                            <th scope="row" >税收收入</th>
                            <td>432483</td>
                            <td>28.1</td>
                        </tr>
                        <tr>

                            <th scope="row" >非税收收入</th>
                            <td>293854</td>
                            <td>-8.8</td>
                        </tr>
                        <tr>

                            <th scope="row" class="row-label">政府性基金收入</th>
                            <td>432483</td>
                            <td>28.1</td>
                        </tr>
                        <tr>

                            <th scope="row" class="row-label">财政支出</th>
                            <td>1722792</td>
                            <td>15.9</td>
                        </tr>
                        <tr>

                            <th scope="row" class="row-label">一般公共预算支出</th>
                            <td>1880946</td>
                            <td>14.4</td>
                        </tr>
                        <tr>

                            <th scope="row" >一般公共服务支出</th>
                            <td>1213502</td>
                            <td>9.8</td>
                        </tr>
                        <tr>

                            <th scope="row" >公共安全支出</th>
                            <td>134560</td>
                            <td>9.8</td>
                        </tr>
                        <tr>

                            <th scope="row" >教育支出</th>
                            <td>134560</td>
                            <td>-2.5</td>
                        </tr>
                        <tr>

                            <th scope="row" >科学技术支出</th>
                            <td>39580</td>
                            <td>8.4</td>
                        </tr>
                        <tr>

                            <th scope="row" >社会保障与就业支出</th>
                            <td>18809</td>
                            <td>-4.4</td>
                        </tr>
                        <tr>

                            <th scope="row" >医疗卫生与计划生育支出</th>
                            <td>18809</td>
                            <td>-55.4</td>
                        </tr>
                        <tr>

                            <th scope="row" >节能环保支出</th>
                            <td>50946</td>
                            <td>22.4</td>
                        </tr>
                        <tr>

                            <th scope="row" >城乡社区支出</th>
                            <td>393123</td>
                            <td>11.4</td>
                        </tr>
                        <tr>

                            <th scope="row" >政府性基金预算支出</th>
                            <td>508090</td>
                            <td>33.4</td>
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
