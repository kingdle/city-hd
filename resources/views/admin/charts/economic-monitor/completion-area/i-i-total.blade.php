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
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>增加值总量排名</h5>
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
                        <th>#</th>
                        <th>指标名称</th>
                        <th>总量</th>
                        <th>增速</th>
                    </tr>
                    </thead>
                    <tbody style="display:block; max-height:592px;overflow-y: scroll;">
                    <tr>
                        <th scope="row">1</th>
                        <td>地区生产总值</td>
                        <td>1521.2</td>
                        <td>12.1</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>农林牧渔业</td>
                        <td>2620.2</td>
                        <td>13.8</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>农林牧渔服务业</td>
                        <td>1013.2</td>
                        <td>11.3</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>工业</td>
                        <td>653.3</td>
                        <td>66.1</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>金属制品、机械和设备修理业</td>
                        <td>279.2</td>
                        <td>11.7</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>建筑业</td>
                        <td>134.6</td>
                        <td>11.1</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>批发和零售业</td>
                        <td>113.4</td>
                        <td>15.9</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>批发业</td>
                        <td>230.7</td>
                        <td>21.2</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>零售业</td>
                        <td>156.4</td>
                        <td>29.5</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>交通运输、仓储和邮政业</td>
                        <td>74.3</td>
                        <td>6.9</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>住宿和餐饮业</td>
                        <td>898.7</td>
                        <td>46.9</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>住宿业</td>
                        <td>395.8</td>
                        <td>22.8</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>餐饮业</td>
                        <td>9.1</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>居民人均可支配收入</td>
                        <td>20359</td>
                        <td>8.8</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>金融业</td>
                        <td>23256</td>
                        <td>8.6</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>房地产业</td>
                        <td>12316</td>
                        <td>7.7</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>房地产业(K门类)</td>
                        <td>12316</td>
                        <td>7.7</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>自有房地产经营活动</td>
                        <td>12316</td>
                        <td>7.7</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>其他服务业</td>
                        <td>12316</td>
                        <td>7.7</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>营利性服务业</td>
                        <td>12316</td>
                        <td>7.7</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>非营利性服务业</td>
                        <td>12316</td>
                        <td>7.7</td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>第一产业</td>
                        <td>12316</td>
                        <td>7.7</td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td>第二产业</td>
                        <td>12316</td>
                        <td>7.7</td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>第三产业</td>
                        <td>12316</td>
                        <td>7.7</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        var _width=$('#quota').width();
        $('#quota th:first-child').width(_width*0.1);
        $('#quota td:first-child').width(_width*0.1);
        $('#quota th:nth-child(2)').width(_width*0.4);
        $('#quota td:nth-child(2)').width(_width*0.4);
        $('#quota th:nth-child(3)').width(_width*0.2);
        $('#quota td:nth-child(3)').width(_width*0.2);
        $('#quota th:nth-child(4)').width(_width*0.2);
        $('#quota td:nth-child(4)').width(_width*0.2);
        $('#quota th:nth-child(5)').width(_width*0.1);
        $('#quota td:nth-child(5)').width(_width*0.1);
    })
</script>