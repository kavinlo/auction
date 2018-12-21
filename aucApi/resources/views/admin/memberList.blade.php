<link rel="stylesheet" href="/layui/css/layui.css">
<link rel="stylesheet" href="/css/global.css">
<link rel="stylesheet" href="/icheck/minimal/red.css">

@extends('layout.layout')

@section('content')
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px; text-align: center;">
        <fieldset class="layui-elem-field">
            <legend>用户管理 - 用户列表</legend>
            <div class="layui-field-box">
              <form class="layui-form" action="">
                <div class="layui-form-item" style="text-align:center;">
                  <div class="layui-inline">
                    <div class="layui-input-inline">
                      <input autocomplete="off" class="layui-input" placeholder="请输入名称" type="text" name="name" value="">
                    </div>
                  </div>
                  <div class="layui-inline" style="text-align:left;">
                    <div class="layui-input-inline">
                      <button class="layui-btn"><i class="layui-icon">&#xe615;</i>查询</button>
                    </div>
                  </div>
                </div>
              </form>
              <hr>
              <div class="layui-btn-group">
                  <button class="layui-btn layui-btn-xs layui-btn-normal dw-dailog" dw-url="create.html" dw-title="新增用户" dw-width="100%" dw-height="100%">
                      <i class="layui-icon">&#xe654;</i>新增
                  </button>
                  <button class="layui-btn layui-btn-xs layui-btn-danger dw-batch-delete" dw-url="/admin/memberDeleteByAll">
                      <i class="layui-icon">&#xe640;</i>删除
                  </button>
                  <button class="layui-btn layui-btn-xs dw-refresh">
                      <i class="layui-icon">&#x1002;</i>刷新
                  </button>
              </div>
              <hr>
              <table class="layui-table">
                  <colgroup>
                      <col width="150">
                      <col width="150">
                      <col width="200">
                      <col>
                      <col>
                  </colgroup>
                  <thead>
                      <tr>
                        <th class="selectAll"><input type="checkbox"></th>
                          <th>id</th>
                          <th>昵称</th>
                          <th>加入时间</th>
                          <th>签名</th>
                          <th style="text-align:center;">操作</th>
                      </tr> 
                  </thead>
                  <tbody>

                  @foreach($memberData as $v)

                      <tr>
                      <td><input type="checkbox" name="checkId" value="{{ $v->id  }}"></td>
                          <td>{{ $v->id  }}</td>
                          <td>{{ $v->uName  }}</td>
                      <td>{{ $v->create_at  }}</td>
                      <td>人生就像是一场修行</td>
                      <td class="text-center">
                        <div class="layui-btn-group">
                          <button class="layui-btn layui-btn-xs layui-btn-normal dw-dailog" dw-url="create.html?id=1" dw-title="编辑用户">
                            <i class="layui-icon">&#xe642;</i>编辑
                          </button>
                          <button class="layui-btn layui-btn-xs layui-btn-danger dw-delete" dw-url="/admin/memberDelete/{{$v->id}}" dw-title="{{ $v->uName  }}">
                            <i class="layui-icon">&#xe640;</i>删除
                          </button>
                        </div>
                      </td>
                      </tr>

                  @endforeach

                  </tbody>
              </table>

                {{ $memberData->links() }}

            </div>
        </fieldset>
    </div>
  </div>

  <style>
      .pagination {
          display: inline-flex;

      }
      .pagination li {
          display: inline-block;
          width: 25px;
          height: 25px;
          line-height: 25px;
          text-align: center;
          background-color: #fff;
          margin-left: 20px;
          border: 1px solid #999;
      }
      .pagination .active {
          background-color: #3498db;
      }
  </style>

  @endsection

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/layui/layui.js"></script>
<script type="text/javascript" src="/icheck/icheck.js"></script>
<script type="text/javascript" src="/js/dw.js"></script>
