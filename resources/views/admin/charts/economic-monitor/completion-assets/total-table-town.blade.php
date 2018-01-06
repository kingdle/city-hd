<div class="box">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>分镇街固定资产投资情况</h5>

                    <div class="ibox-tools">
                        <span class="quotadate">{{ date("Y-m",mktime(0, 0 , 0,date("m"),1,date("Y"))) }}</span>
                    </div>
                </div>
                <div class="row-quota" id="quota">
                    <div id="app-1">
                        <sy-table :stru="stru"></sy-table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
