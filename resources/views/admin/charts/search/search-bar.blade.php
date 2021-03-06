<style>
    .search-bar {
        border-radius: 2px;
        background-color: #FFFFFF;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 3px 0 0;
        color: #252422;
        margin-bottom: 10px;
        position: relative;
        z-index: 1;
    }
    .content-search {
        padding: 20px;
    }
</style>
<div class="box box-primary search-bar">
    <div class="row">
        <div class="text-center">
            <div class="col-md-12">
                <div class="ibox float-e-margins">
                    <form method="get" action="{{ route('posts.index') }}" class="content-search" pjax-container>
                        <div class="input-group">
                            <input type="text" class="form-control input-sm" name="title" placeholder="头条搜索">
                            <div class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-sm btn-primary">
                                    查询
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
