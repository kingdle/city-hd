<style>
    .card {
        border-radius: 6px;
        box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
        background-color: #FFFFFF;
        color: #252422;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }
    .card .content {
        padding: 15px 15px 10px 15px;
    }
    .title-quota {
        margin-right: 0px;
        margin-left: 0px;
    }
    .card{
        font-size: 3em;
        min-height: 64px;
    }
    .card .table {
        padding: 15px 15px 10px 15px;
        font-size: 12px;
    }
    .title-quota p {
        font-size: 18px;
        font-weight: bold;
    }
</style>
<div class="card">
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="title-quota">
                    <p>指标完成情况</p>
                </div>
            </div>

        </div>
        <div class="row-quota" id="quota">
            <table class="table table-hover scrolltable">
                <thead style="display:block;overflow-y: scroll;">
                <tr>
                    <th>#</th>
                    <th>指标名称</th>
                    <th>单位</th>
                    <th>绝对额</th>
                    <th>增长</th>
                </tr>
                </thead>
                <tbody style="display:block; max-height:410px;overflow-y: scroll;">
                <tr>
                    <th scope="row">1</th>
                    <td>地区生产总值</td>
                    <td>亿元</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>规上工业总产值</td>
                    <td>亿元</td>
                    <td>3094.1</td>
                    <td>13.5</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>固定资产投资总额</td>
                    <td>亿元</td>
                    <td>1340.2</td>
                    <td>11.8</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>限上贸易销售额</td>
                    <td>亿元</td>
                    <td>784.2</td>
                    <td>56.3</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>社会消费品零售额</td>
                    <td>亿元</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>一般公共预算收入</td>
                    <td>亿元</td>
                    <td>152.8</td>
                    <td>11.3</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>一般公共预算支出</td>
                    <td>亿元</td>
                    <td>126.3</td>
                    <td>11.2</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>税收收入</td>
                    <td>亿元</td>
                    <td>276.5</td>
                    <td>18.9</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>国税</td>
                    <td>亿元</td>
                    <td>176.5</td>
                    <td>18.9</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>地税</td>
                    <td>亿元</td>
                    <td>100</td>
                    <td>13.9</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>国税测试</td>
                    <td>亿元</td>
                    <td>276.5</td>
                    <td>18.9</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>国税</td>
                    <td>亿元</td>
                    <td>176.5</td>
                    <td>18.9</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>地税</td>
                    <td>亿元</td>
                    <td>100</td>
                    <td>13.9</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>国税测试</td>
                    <td>亿元</td>
                    <td>276.5</td>
                    <td>18.9</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>国税</td>
                    <td>亿元</td>
                    <td>176.5</td>
                    <td>18.9</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>地税</td>
                    <td>亿元</td>
                    <td>100</td>
                    <td>13.9</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        var _width=$('#quota').width();
        $('#quota th:first-child').width(_width*0.1);
        $('#quota td:first-child').width(_width*0.1);
        $('#quota th:nth-child(2)').width(_width*0.3);
        $('#quota td:nth-child(2)').width(_width*0.3);
        $('#quota th:nth-child(3)').width(_width*0.1);
        $('#quota td:nth-child(3)').width(_width*0.1);
        $('#quota th:nth-child(4)').width(_width*0.2);
        $('#quota td:nth-child(4)').width(_width*0.2);
        $('#quota th:nth-child(5)').width(_width*0.1);
        $('#quota td:nth-child(5)').width(_width*0.1);
        $('#quota th:nth-child(6)').width(_width*0.2);
        $('#quota td:nth-child(6)').width(_width*0.2);
    })
</script>