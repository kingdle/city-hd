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
                    <h5>金融情况</h5>
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
                            <th>累计（亿元）</th>
                            <th>增速%</th>
                        </tr>
                        </thead>
                        <tbody style="display:block; max-height:592px;overflow-y: scroll;">
                        <tr>

                            <th scope="row" class="row-label">金融系统本外币存款余额</th>
                            <td>1680.3</td>
                            <td>196.5</td>
                        </tr>
                        <tr>

                            <th scope="row" class="row-label">个人储蓄存款</th>
                            <td>749.9</td>
                            <td>38.6</td>
                        </tr>
                        <tr>

                            <th scope="row" class="row-label">金融系统本外币贷款余额</th>
                            <td>1778</td>
                            <td>256.3</td>
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
