<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/animate.css" rel="stylesheet">
    <link href="/static/admin/css/style.css?v=4.1.0" rel="stylesheet">
    <title>Document</title>
</head>
<body>  
            <h2 align='center'><b>菜单添加</b></h2>
        <form method="post" class="form-horizontal" action="{{url('wx_menu/store')}}" >
            <div class="form-group">
            @csrf
                <label class="col-sm-2 control-label">菜单等级</label>
                <div class="col-sm-10">
                    <select name="m_lv" class="form-control">
                        <option value="1">一级菜单</option>
                        <option value="2">二级菜单</option>
                    </select>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">是否有子菜单</label>
                <div class="col-sm-10">
                        <select name="is_sub_button" class="form-control">
                            <option value="1">是</option>
                            <option value="2">否</option>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">菜单名称</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="m_name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">菜单类型</label>
                <div class="col-sm-10">
                <select name="m_type" class="form-control">
                            <option value="click">点击</option>
                            <option value="view">网页</option>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">菜单标识</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="m_key">
                </div>
            </div><div class="form-group">
                <label class="col-sm-2 control-label">菜单网页</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="m_url">
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-sm-10">
                    
                </div>
                    <button type="submit" class="btn btn-w-m btn-success">菜单添加</button>
            </div>
            <td><a class="btn btn-danger btn-rounded" href="{{url('wx_menu/index')}}">菜单展示</a></td>
        </form>
</body>
</html>