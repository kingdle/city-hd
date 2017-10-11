<style>
    .wrapper-content {
        padding: 20px 10px 40px;
    }
    .ibox-title {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        border-color: #e7eaec;
        border-image: none;
        color: inherit;
        margin-bottom: 0;
        padding: 15px 15px 7px;
        min-height: 48px;
    }
    .ibox-title h5 {
        display: inline-block;
        font-size: 14px;
        margin: 0 0 7px;
        padding: 0;
        text-overflow: ellipsis;
        float: left;
    }
    .ibox-tools {
        display: block;
        float: none;
        margin-top: 0;
        position: relative;
        padding: 0;
        text-align: right;
    }
    .ibox-tools a.btn-primary {
        color: #fff;
    }
    .ibox-content {
        background-color: #ffffff;
        color: inherit;
        padding: 15px 20px 20px 20px;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 1px 0;
    }
    .btn-white {
        color: inherit;
        background: white;
        border: 1px solid #e7eaec;
    }
    .input-group {
        position: relative;
        display: table;
        border-collapse: separate;
    }
    .input-group-btn {
        position: relative;
        font-size: 0;
        white-space: nowrap;
    }
    .project-list .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px;
    }
    .project-list table tr td {
        border-top: none;
        border-bottom: 1px solid #e7eaec;
        padding: 15px 10px;
        vertical-align: middle;
    }
    .label-primary, .badge-primary {
        background-color: #1ab394;
        color: #FFFFFF;
    }
    .project-list table tr td {
        border-top: none;
        border-bottom: 1px solid #e7eaec;
        padding: 15px 10px;
        vertical-align: middle;
    }
    .project-title a {
        font-size: 14px;
        color: #676a6c;
        font-weight: 600;
    }
    .project-list table tr td {
        border-top: none;
        border-bottom: 1px solid #e7eaec;
        padding: 15px 10px;
        vertical-align: middle;
    }
    .project-people img {
        width: 32px;
        height: 32px;
    }
    .img-circle {
        border-radius: 50%;
    }
    .btn-white {
        color: inherit;
        background: white;
        border: 1px solid #e7eaec;
    }
    .progress-mini, .progress-mini .progress-bar {
        height: 5px;
        margin-bottom: 0;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInUp">

            <div class="ibox">
                <div class="ibox-title">
                    <h5>All projects assigned to this account</h5>
                    <div class="ibox-tools">
                        <a href="" class="btn btn-primary btn-xs">Create new project</a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row m-b-sm m-t-sm">
                        <div class="col-md-1">
                            <button type="button" id="loading-example-btn" class="btn btn-white btn-sm"><i class="fa fa-refresh"></i> Refresh</button>
                        </div>
                        <div class="col-md-11">
                            <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                        </div>
                    </div>

                    <div class="project-list">

                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-primary">Active</span>
                                </td>
                                <td class="project-title">
                                    <a href="#">Contract with Zender Company</a>
                                    <br>
                                    <small>Created 14.08.2014</small>
                                </td>
                                <td class="project-completion">
                                    <small>Completion with: 48%</small>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </td>
                                <td class="project-people">
                                    <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-primary">Active</span>
                                </td>
                                <td class="project-title">
                                    <a href="#">There are many variations of passages</a>
                                    <br>
                                    <small>Created 11.08.2014</small>
                                </td>
                                <td class="project-completion">
                                    <small>Completion with: 28%</small>
                                    <div class="progress progress-mini">
                                        <div style="width: 28%;" class="progress-bar"></div>
                                    </div>
                                </td>
                                <td class="project-people">
                                    <a href=""><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a6.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-default">Unactive</span>
                                </td>
                                <td class="project-title">
                                    <a href="#">Many desktop publishing packages and web</a>
                                    <br>
                                    <small>Created 10.08.2014</small>
                                </td>
                                <td class="project-completion">
                                    <small>Completion with: 8%</small>
                                    <div class="progress progress-mini">
                                        <div style="width: 8%;" class="progress-bar"></div>
                                    </div>
                                </td>
                                <td class="project-people">
                                    <a href=""><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-primary">Active</span>
                                </td>
                                <td class="project-title">
                                    <a href="#">Letraset sheets containing</a>
                                    <br>
                                    <small>Created 22.07.2014</small>
                                </td>
                                <td class="project-completion">
                                    <small>Completion with: 83%</small>
                                    <div class="progress progress-mini">
                                        <div style="width: 83%;" class="progress-bar"></div>
                                    </div>
                                </td>
                                <td class="project-people">
                                    <a href=""><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-primary">Active</span>
                                </td>
                                <td class="project-title">
                                    <a href="#">Contrary to popular belief</a>
                                    <br>
                                    <small>Created 14.07.2014</small>
                                </td>
                                <td class="project-completion">
                                    <small>Completion with: 97%</small>
                                    <div class="progress progress-mini">
                                        <div style="width: 97%;" class="progress-bar"></div>
                                    </div>
                                </td>
                                <td class="project-people">
                                    <a href=""><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-primary">Active</span>
                                </td>
                                <td class="project-title">
                                    <a href="#">Contract with Zender Company</a>
                                    <br>
                                    <small>Created 14.08.2014</small>
                                </td>
                                <td class="project-completion">
                                    <small>Completion with: 48%</small>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </td>
                                <td class="project-people">
                                    <a href=""><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-primary">Active</span>
                                </td>
                                <td class="project-title">
                                    <a href="#">There are many variations of passages</a>
                                    <br>
                                    <small>Created 11.08.2014</small>
                                </td>
                                <td class="project-completion">
                                    <small>Completion with: 28%</small>
                                    <div class="progress progress-mini">
                                        <div style="width: 28%;" class="progress-bar"></div>
                                    </div>
                                </td>
                                <td class="project-people">
                                    <a href=""><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a6.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-default">Unactive</span>
                                </td>
                                <td class="project-title">
                                    <a href="#">Many desktop publishing packages and web</a>
                                    <br>
                                    <small>Created 10.08.2014</small>
                                </td>
                                <td class="project-completion">
                                    <small>Completion with: 8%</small>
                                    <div class="progress progress-mini">
                                        <div style="width: 8%;" class="progress-bar"></div>
                                    </div>
                                </td>
                                <td class="project-people">
                                    <a href=""><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-primary">Active</span>
                                </td>
                                <td class="project-title">
                                    <a href="#">Letraset sheets containing</a>
                                    <br>
                                    <small>Created 22.07.2014</small>
                                </td>
                                <td class="project-completion">
                                    <small>Completion with: 83%</small>
                                    <div class="progress progress-mini">
                                        <div style="width: 83%;" class="progress-bar"></div>
                                    </div>
                                </td>
                                <td class="project-people">
                                    <a href=""><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-primary">Active</span>
                                </td>
                                <td class="project-title">
                                    <a href="#">Contrary to popular belief</a>
                                    <br>
                                    <small>Created 14.07.2014</small>
                                </td>
                                <td class="project-completion">
                                    <small>Completion with: 97%</small>
                                    <div class="progress progress-mini">
                                        <div style="width: 97%;" class="progress-bar"></div>
                                    </div>
                                </td>
                                <td class="project-people">
                                    <a href=""><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="project-status">
                                    <span class="label label-primary">Active</span>
                                </td>
                                <td class="project-title">
                                    <a href="#">There are many variations of passages</a>
                                    <br>
                                    <small>Created 11.08.2014</small>
                                </td>
                                <td class="project-completion">
                                    <small>Completion with: 28%</small>
                                    <div class="progress progress-mini">
                                        <div style="width: 28%;" class="progress-bar"></div>
                                    </div>
                                </td>
                                <td class="project-people">
                                    <a href=""><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a6.jpg"></a>
                                    <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
