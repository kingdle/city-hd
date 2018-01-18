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

    .table > thead > tr > th {
        vertical-align: inherit;
        text-align: center;
    }

    .table > tbody > tr > td {
        vertical-align: inherit;
        text-align: center;
    }

    .row-quota table tbody {
        max-height: 480px;
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
                    <div id="app-3">
                        <sy-table :stru="stru"></sy-table>
                    </div>
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
