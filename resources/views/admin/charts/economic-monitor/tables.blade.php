<style>
    .row-quota table tbody {
        max-height:480px;
    }
</style>
<div class="card">
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="title-quota">
                    <p>指标完成情况 <span class="quotadate">{{ date("Y-m",mktime(0, 0 , 0,date("m")-1,1,date("Y"))) }}</span>
                    </p>
                </div>
            </div>

        </div>
        <div class="row-quota" id="quota">
            <div id="economic-1">
                <sy-table :stru="stru"></sy-table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var _width = $('#quota').width();
        $('#quota table tbody td:first-child').width(_width * 0.3);
        $('#quota table tbody td:nth-child(1)').width(_width * 0.3);
        $('#quota table tbody td:nth-child(2)').width(_width * 0.3);
        $('#quota table tbody td:nth-child(3)').width(_width * 0.2);
    })
</script>
