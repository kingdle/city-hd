<style>
    .row-quota {
        border-color: #e7eaec;
        border-style: solid solid none;
        border-width: 1px 0;
        padding: 0 20px 20px 20px;
        font-size: 14px;
        line-height: 2em;
        min-height: 500px;
    }
    .table>thead>tr>th {
        vertical-align: inherit;
        text-align: center;
    }
    .table>tbody>tr>td {
        vertical-align: inherit;
        text-align: center;
    }
</style>
<div class="box">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>分功能区固定资产投资情况</h5>
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
                    <table class="table table-hover scrolltable table-area">
                        <thead style="display:block;overflow-y: scroll;">
                        <tr class="area-f">
                            <th rowspan='2'>地区</th>
                            <th colspan='4'>计划</th>
                        </tr>
                        <tr class="area-s">
                            <th>计划</th>
                            <th>进度%</th>
                            <th>民间</th>
                            <th>增速%</th>
                        </tr>
                        </thead>
                        <tbody style="display:block; max-height:592px;overflow-y: scroll;">
                        <tr>
                            <th scope="row">海洋高新区</th>
                            <td>173</td>
                            <td>102.41</td>
                            <td>97</td>
                            <td>8.35</td>
                        </tr>
                        <tr>
                            <th scope="row">中德生态园</th>
                            <td>77</td>
                            <td>125.26</td>
                            <td>43</td>
                            <td>139.04</td>
                        </tr>
                        <tr>
                            <th scope="row">经济技术开发区</th>
                            <td>93.3</td>
                            <td>56.44</td>
                            <td>44.9</td>
                            <td>101.24</td>
                        </tr>
                        <tr>
                            <th scope="row">董家口循环经济区</th>
                            <td>146</td>
                            <td>109.9</td>
                            <td>26</td>
                            <td>131.03</td>
                        </tr>
                        <tr>
                            <th scope="row">国际旅游度假区</th>
                            <td>146</td>
                            <td>109.9</td>
                            <td>26</td>
                            <td>131.03</td>
                        </tr>
                        <tr>
                            <th scope="row">灵山湾影视文化区</th>
                            <td>12</td>
                            <td>134.82</td>
                            <td>104</td>
                            <td>105.13</td>
                        </tr>
                        <tr>
                            <th scope="row">现代农业示范区</th>
                            <td>10</td>
                            <td>114.49</td>
                            <td>4</td>
                            <td>251.04</td>
                        </tr>
                        <tr>
                            <th scope="row">古镇口创新示范区</th>
                            <td>61</td>
                            <td>1.51</td>
                            <td>41</td>
                            <td>86.35</td>
                        </tr>
                        <tr>
                            <th scope="row">西海岸交通商务区</th>
                            <td>69</td>
                            <td>122.41</td>
                            <td>59</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">藏马山旅游度假区</th>
                            <td>66</td>
                            <td>102.41</td>
                            <td>67</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">轨道交通指挥部</th>
                            <td>38</td>
                            <td>125.21</td>
                            <td>-</td>
                            <td>-</td>
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

        $('.area-f th:first-child').width(_width * 0.4);
        $('.area-s th:first-child').width(_width * 0.2);
        $('thead th:nth-child(2)').width(_width * 0.2);
        $('thead th:nth-child(3)').width(_width * 0.3);
        $('thead th:nth-child(4)').width(_width * 0.2);

        $('tbody th').width(_width * 0.4);
        $('tbody td:nth-child(0)').width(_width * 0.2);
        $('tbody td:nth-child(1)').width(_width * 0.2);
        $('tbody td:nth-child(2)').width(_width * 0.2);
        $('tbody td:nth-child(3)').width(_width * 0.2);
        $('tbody td:nth-child(4)').width(_width * 0.3);
        $('tbody td:nth-child(5)').width(_width * 0.2);

    })
</script>
