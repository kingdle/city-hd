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
</style>
<div class="box">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>利用外资完成情况</h5>
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
                    <table class="table table-hover scrolltable">
                        <thead style="display:block;overflow-y: scroll;">
                        <tr>
                            <th>指标</th>
                            <th>本月（个、万美元）</th>
                            <th>累计（个、万美元）</th>
                            <th>累计增长%</th>
                        </tr>
                        </thead>
                        <tbody style="display:block; max-height:592px;overflow-y: scroll;">
                        <tr>
                            <th scope="row">利用外资新签合同个数</th>
                            <td>11</td>
                            <td>44</td>
                            <td>33.3</td>
                        </tr>
                        <tr>
                            <th scope="row">   其中：千万美元以上</th>
                            <td>8</td>
                            <td>30</td>
                            <td>76.5</td>
                        </tr>
                        <tr>
                            <th scope="row">  &nbsp; &nbsp; &nbsp;亿美元以上</th>
                            <td>0</td>
                            <td>1</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <th scope="row">利用外资项目总投资</th>
                            <td>181134</td>
                            <td>58775</td>
                            <td>-2.54</td>
                        </tr>
                        <tr>
                            <th scope="row">合同利用外资</th>
                            <td>16034</td>
                            <td>40049</td>
                            <td>-14.97</td>
                        </tr>
                        <tr>
                            <th scope="row">实际利用外资</th>
                            <td>10768</td>
                            <td>60213</td>
                            <td>6.27</td>
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
        $('#quota th:nth-child(3)').width(_width * 0.4);
        $('#quota td:nth-child(3)').width(_width * 0.4);
        $('#quota th:nth-child(4)').width(_width * 0.2);
        $('#quota td:nth-child(4)').width(_width * 0.2);
        $('#quota th:nth-child(5)').width(_width * 0.1);
        $('#quota td:nth-child(5)').width(_width * 0.1);
    })
</script>