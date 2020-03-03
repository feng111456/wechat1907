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
    <title>menuCreate</title>
</head>
<body>  
<div class="table-responsive">
                                <h2 align='center'>菜单列表</h2>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>菜单编号</th>
                                        <th>菜单名称</th>
                                        <th>菜单菜单等级</th>
                                        <th>是否有子菜单</th>    
                                        <th>菜单类型</th>
                                        <th>菜单标识</th>
                                        <th>菜单网址</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($menuInfo as $v)
                                    <tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->m_name}}</td>
                                        <td>{{$v->m_lv==1?'一级菜单':'二级菜单'}}</td>
                                        <td>{{$v->is_sub_button==1?'是':'否'}}</td>
                                        <td>{{$v->m_type}}</td>
                                        <td>{{$v->m_key}}</td>
                                        <td>{{$v->m_url}}</td>
                                        <td><a class="btn btn-danger btn-rounded" href="{{url('wx_menu/destroy'.$v->id)}}">删除</a>
                                        <a class="btn btn-info btn-rounded" href="{{url('wx_menu/edit'.$v->id)}}">修改</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                            <td><a class="btn btn-danger btn-rounded" href="{{url('wx_menu/create')}}">菜单添加</a></td>
                        </div>

</body>
</html>