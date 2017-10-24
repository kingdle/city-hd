
<div class="card">
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="title-quota">
                    <p>指标完成情况 <span class="quotadate">{{ date("Y-m",strtotime("last Month")) }}</span></p>
                </div>
            </div>

        </div>
        <div class="row-quota" id="quota">
            <table class="table table-hover scrolltable">
                <thead style="display:block;overflow-y: scroll;">
                <tr>
                    <th>#</th>
                    <th>指标名称</th>
                    <th>绝对额（亿元）</th>
                    <th>增长</th>
                </tr>
                </thead>
                <tbody style="display:block; max-height:445px;overflow-y: scroll;">
                <tr>
                    <th scope="row">1</th>
                    <td>地区生产总值</td>
                    <td>1521.2</td>
                    <td>12.1</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>规上工业总产值</td>
                    <td>2620.2</td>
                    <td>13.8</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>固定资产投资总额</td>
                    <td>1013.2</td>
                    <td>11.3</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>限上贸易销售额</td>
                    <td>653.3</td>
                    <td>66.1</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>社会消费品零售额</td>
                    <td>279.2</td>
                    <td>11.7</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>一般公共预算收入</td>
                    <td>134.6</td>
                    <td>11.1</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>一般公共预算支出</td>
                    <td>113.4</td>
                    <td>15.9</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>税收收入</td>
                    <td>230.7</td>
                    <td>21.2</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>国税</td>
                    <td>156.4</td>
                    <td>29.5</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>地税</td>
                    <td>74.3</td>
                    <td>6.9</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>进出口总额</td>
                    <td>898.7</td>
                    <td>46.9</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>出口总额</td>
                    <td>395.8</td>
                    <td>22.8</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>实际利用外资</td>
                    <td>9.1</td>
                    <td>5</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>居民人均可支配收入</td>
                    <td>20359</td>
                    <td>8.8</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>城镇</td>
                    <td>23256</td>
                    <td>8.6</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>农村</td>
                    <td>12316</td>
                    <td>7.7</td>
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
        $('#quota th:nth-child(3)').width(_width*0.3);
        $('#quota td:nth-child(3)').width(_width*0.3);
        $('#quota th:nth-child(4)').width(_width*0.2);
        $('#quota td:nth-child(4)').width(_width*0.2);

    })
</script>