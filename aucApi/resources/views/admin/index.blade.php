
<link rel="stylesheet" href="/layui/css/layui.css">

@extends('layout.layout')

@section('content')
<div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;">
        <fieldset class="layui-elem-field">
            <legend>控制台-系统信息</legend>
            <div class="layui-field-box">
                <table class="layui-table">
                    <colgroup>
                        <col width="150">
                        <col width="200">
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                        <th>昵称</th>
                        <th>加入时间</th>
                        <th>签名</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <tr>
                        <td>贤心</td>
                        <td>2016-11-29</td>
                        <td>人生就像是一场修行</td>
                        </tr>
                        <tr>
                        <td>许闲心</td>
                        <td>2016-11-28</td>
                        <td>于千万人之中遇见你所遇见的人，于千万年之中，时间的无涯的荒野里…</td>
                        </tr>
                        <tr>
                        <td>sentsin</td>
                        <td>2016-11-27</td>
                        <td> Life is either a daring adventure or nothing.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </fieldset>
        <fieldset class="layui-elem-field">
          <legend>控制台-最新公告</legend>
          <div class="layui-field-box">
              <table class="layui-table">
                  <colgroup>
                      <col width="150">
                      <col width="200">
                      <col>
                  </colgroup>
                  <thead>
                      <tr>
                      <th>昵称</th>
                      <th>加入时间</th>
                      <th>签名</th>
                      </tr> 
                  </thead>
                  <tbody>
                      <tr>
                      <td>贤心</td>
                      <td>2016-11-29</td>
                      <td>人生就像是一场修行</td>
                      </tr>
                      <tr>
                      <td>许闲心</td>
                      <td>2016-11-28</td>
                      <td>于千万人之中遇见你所遇见的人，于千万年之中，时间的无涯的荒野里…</td>
                      </tr>
                      <tr>
                      <td>sentsin</td>
                      <td>2016-11-27</td>
                      <td> Life is either a daring adventure or nothing.</td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </fieldset>
    </div>
  </div>
@endsection

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/layui/layui.js"></script>
<script type="text/javascript" src="/js/index.js"></script>