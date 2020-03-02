<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Wx_menu as wxMenuModel;
class Wx_menu extends Controller
{
    /**
     * Display a listing of the resource.
     * 菜单展示列表
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wxMenuModel = new wxMenuModel;
        $menuInfo = $wxMenuModel->get();
        return view('admin/wx_menu/index',['menuInfo'=>$menuInfo]);
    }

    /**
     * Show the form for creating a new resource.
     *  添加菜单 页面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/wx_menu/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        if($data['m_lv']=='1'){
            //说明是一级菜单 //在判断菜单的类型
            if($data['m_type']=='click'){
                //说明是点击菜单
                unset($data['m_url']);
            }
            if($data['m_type']=='view'){
                //说明是网页类型菜单
                unset($data['m_key']);
            }
            
        }
        if($data['m_lv']=='2'){
            //说明是二级菜单
        }
        //实例化model
        $wxMenuModel = new wxMenuModel;
        $res = $wxMenuModel->create($data);
        if($res){
            echo "<script>alert('成功');location.href='/wx_menu/index'</script>";
        }else{
            echo "<script>alert('失败');location.href='/wx_menu/create'</script>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
